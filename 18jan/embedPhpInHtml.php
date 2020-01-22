<!DOCTYPE HTML>
<html>
    <head>
    </head>
    <body>
        <?php
        $num1=10;
        $num2=20.4;
        $name="Sangita";
        $date=date("Y/m/d");
        ?>
        <h3> It Describes how to embed PHP code into HTML...</h3> 
        <br>
        <lable>My name is :
            <?php 
                echo $name;
            ?>
        </lable>
        <p>Today is:
            <?php
                echo $date;
            ?>
        </p>
        <p>Enter your name:
            <?php
                echo "<input type=\"text\" value=".$name.">";
            ?>
            </p>
        <p>Enter your birth date:
            <?php
                echo "<input type='date'>";
            ?> 
        </p>
        <p>
            sum is:<?php
                        echo $num1+$num2;
                    ?>
        </p>
    </body>
</html>