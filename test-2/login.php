<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
    </head>
    <body>
       <?php require_once "login_validate.php";   ?>
        <form method = "POST">
            <table>
                <tr>
                    <td>IMAGE LOGO</td>
                </tr>
                <tr>
                    <td><label>LOGIN PAGE</label></td>
                </tr>
                <tr>
                    <td><label>Email</label></td>
                </tr>
                <tr>
                    <td><input type = "text" name = "email" value='<?php echo getvalue('email'); ?>'></td>
                </tr>
                <tr>
                    <td><label>Password</label></td>
                </tr>
                <tr>
                    <td><input type = "text" name = "password" value='<?php echo getvalue('pasword'); ?>'></td>
                </tr>
                <tr colspan = '2'>
                    <td><input type = "submit" name = "login" value = "LOGIN"></td>
                    <td><input type = "submit" name = "register" value = "REGISTER"></td>
                </tr>
            </table>
        </form>
    </body>
</html>