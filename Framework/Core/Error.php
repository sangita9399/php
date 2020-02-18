<?php

namespace Core;
class Error
{
    public static function errorHandler($level, $message, $file, $line)
    {
        if(error_reporting() !== 0)
        {
            throw new \ErrorException($message, 0, $level, $file, $line);
        }
    }
    public static function exceptionHendler($exception)
    {
        $code = $exception ->getCode();
        if($code != 404)
        {
            $code = 500;
        }
        http_response_code($code);
        if(\App\Config::SHOW_ERRORS){
            echo "<h2>Fatal Error:</h2>";
            echo "<p>Uncaught Exception:'" . get_class($exception) . "'</p>";
            echo "<p>Message:'" . $exception->getMessage() . "'</p>";
            echo "<p>Stack Trace:<pre>" . $exception->getTraceAsString(). "</pre></p>";
            echo "<p>Thrown in:'" . $exception->getFile() 
                ."'On Line " . $exception->getLine() . "</p>";
        }
        else
        {
            $log = dirname(__DIR__) . '/logs/' . date('Y-m-d') . '.txt';
            ini_set('error_log', $log);
            $message = "Uncaught Exception:'" . get_class($exception) . "'";
            $message.= "Message:'" . $exception->getMessage() . "'";
            $message.= "Stack Trace:<pre>" . $exception->getTraceAsString(). "</pre>";
            $message.= "Thrown in:'" . $exception->getFile() 
                        ."'On Line " . $exception->getLine() ;
            error_log($message);
            //echo "<h2>An error occured.</h2>";
            // if($code == 404)
            // {
            //     echo "Page Not Found.";
            // }
            // else{
            //     echo "An error occured.";
            // }

            View::renderTemplate("$code.html");
        }
        
    }
}


?>