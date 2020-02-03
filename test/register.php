<!DOCTYPE html>
<html>
    <head>
        <title>Registration Page</title>
    </head>
    <body>
       <?php require_once "validate_user.php"; ?>
    <form method="POST" enctype='multipart/form-data'>
        <fieldset>
            <legend>YOUR ACCOUNT DETAILS</legend>
            <table>
                <div>
                    <tr>
                        <th>
                            Name :
                        </th>
                        <td>
                            <?php $prefixValues = ['Mr','Miss','Ms','Mrs','Dr']; ?>
                            <select name="prefix" id="prefix">
                                <?php 
                                $selected = "selected='selected'";
                                foreach($prefixValues as $prefix):
                                ?>
                                <option value=<?php echo $prefix?>
                                    <?php echo (in_array(getData('prefix'),[$prefix]))? $selected : ""   ?>>
                                    <?php echo $prefix?>
                                </option>
                                <?php endforeach; ?>

                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>First Name : </th>
                        <td>
                            <input type="text" name="fname"  
                                value='<?php echo getData('fname'); ?>'>
                        </td>
                        <tr>
                        <th>Last Name : </th>
                        <td>
                            <input type="text" name="lname"
                                value='<?php echo getData( 'lname'); ?>'>
                        </td>
                    </tr>
                </div>
                <div>
                    <tr>
                        <th>
                            Mobile Number :
                        </th>
                        <td>
                            <input type="text" name="mobile" id="phoneNumber" 
                                value='<?php echo getData( 'mobile'); ?>'>
                        </td>
                    </tr>
                </div>
                <div>
                    <tr>
                        <th>
                            Email :
                        </th>
                        <td>
                            <input type="text" name="email" id="email" 
                                value='<?php echo getData( 'email'); ?>'>
                        </td>
                    </tr>
                </div>
                <div>
                    <tr>
                        <th>
                            Password :
                        </th>
                        <td>
                            <input type="password" name="password" id = "password" 
                            value = '<?php echo getData( 'password'); ?>'>
                        </td>
                    </tr>
                </div>
                <div>
                    <tr>
                        <th>
                            Confirm Password :
                        </th>
                        <td>
                            <input type="password" name="confirmPassword" id="confirmPassword" 
                            value='<?php echo getData('confirmPassword'); ?>'>
                        </td>
                    </tr>
                </div>
                <div>
                    <tr>
                        <th>Information :</th>
                        <td><textarea row = "5" cols = "25" name = "information" 
                        value='<?php echo getData('information'); ?>'></textarea></td>
                    </tr>
                </div>
                <div>
                    <tr>
                        <td><input type = "checkbox" name = "terms" ></td>
                        <td>Hereby, I accept your terms & conditions.</td>
                    </tr>
                </div>
                <div> 
                    <td><input type = "submit" name = "submit"></td>
                </div>
            </table>
        </fieldset>
    </form>
    </body>
</html>