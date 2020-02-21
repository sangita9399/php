<?php

namespace App\Models;

use PDO;
use PDOException;

class Post extends \Core\Model
{
    public static function getAll($tbname, $field)
    {
        try{
            $db = static::getDB();
            $stmt = $db->query('SELECT '. implode(',', $field).' FROM '.$tbname );
           
            $result = $stmt->fetchAll(PDO :: FETCH_ASSOC);

            return $result;  
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public static function fetchRow($tbname, $field, $id )
    {
        try{
            $db = static::getDB();
            $stmt = $db->query("SELECT ".implode(',', $field)." FROM $tbname WHERE service_id='$id'" );
            $result = $stmt->fetchAll(PDO :: FETCH_ASSOC);
            return $result; 
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    
    public static function editData($tbname, $arr, $id)
    {
        try
        {
            $db1 = static::getDB();
            $temp = "";
            print_r($arr);
            foreach($arr as $key => $val)
            {
                $temp .= $key . "='" .$val."',";
            }
            $update = substr($temp, 0, strlen($temp)-1);
           
            if($db1 != null)
            {
                echo $sql ="UPDATE $tbname SET $update WHERE service_id='$id'";
                $db1->exec($sql);
            }
            else{
                echo "null database";
            }
        }
        catch(PDOException $e){
            echo "<br>" . $e->getMessage();
        }
    }    

    public Static function deleteData($tbname, $id)
    {
        try{
            $db = static::getDB();
            $sql = "DELETE from $tbname WHERE service_id='$id'";
            $db->exec($sql);   
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }   
    }

    public static function addData($tbname, $data)
    {
        try
        {
            $db =  static::getDB();
            $key = array_keys($data);
            $val = array_values($data);
         
            $sql = "INSERT INTO $tbname (" . implode(',', $key) . ")VALUES('" 
                    . implode("','",$val) ."')" ;
            echo "<br>" . $sql;
            if($db == null)
            {
                return ;
            }
            else
            {
                $lid = $db->exec($sql) ? $db->lastInsertId() : False;
                echo $lid;
                return $lid;
            }
        }
        catch(PDOException $e){
            echo "<br>" . $e->getMessage();
        }
    }
}
?>