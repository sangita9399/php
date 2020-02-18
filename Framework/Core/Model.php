<?php

namespace Core;
use PDO;
use PDOException;
use App\Config;
abstract class Model
{
    protected static function getDB()
    {
        static $db = null;
        if($db == null)
        {
            // $host = 'localhost';
            // $user_name = 'root';
            // $db_name = 'mvc';
            // $password = '';
          
            try{
                // $db = new PDO("mysql:host = $host; dbname = $db_name;
                //       charset = utf8", $user_name,$password);

                $sql = 'mysql:host = ' . Config::DB_HOST . '; dbname = ' . Config::DB_NAME 
                        . ';charset =  utf8';
                $db = new PDO($sql, Config::DB_USER, Config::DB_PASSWORD);
                echo "successful";

                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $db;
            }
            catch(PDOException $e)
            {
                echo $e->getMessage();
            }
        }
    }
}


?>