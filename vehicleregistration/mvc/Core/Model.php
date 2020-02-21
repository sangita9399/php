<?php
namespace Core;
use PDO;
use PDOException;
use App\Config;
session_start();
abstract class Model
{
    protected static function getDB()
    {
        static $db = null;
        if($db == null)
        {          
            try{
                
                $sql = 'mysql:host='.Config::DB_HOST.';dbname='.Config::DB_NAME.';charset =  utf8';
                $db = new PDO($sql, Config::DB_USER, Config::DB_PASSWORD);
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