<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <?php require_once "validate.php"; ?>
    <div>
        <form method = "POST">
            <fieldset><legend>Account Details</legend>
            <div class = "field_prefix">
                <label>Prefix</label>
                <?php $prefixdata = ["Mr", "Mrs", "Ms", "Miss", "Dr"];?>
                <select name = "account[prefix]">
                <?php foreach($prefixdata as $key => $value): ?>
                    <option value = "<?php echo $value?>"<?php echo in_array($value, [getvalue("account","prefix")]) 
                    ? "selected = 'selected'" 
                    :" ";?>>
                    <?php echo $value; ?>
                    </option>
                <?php endforeach ?>
                </select>
            </div>
            <div class = "field_fname">
                <lable>Firstname</lable>
                <input type = "text" name = "account[fname]" 
                value = "<?php echo getvalue("account","fname") ;?>">
            </div>
            <div class = "field_lname">
                <lable>Lastname</lable>
                <input type = "text" name = "account[lname]" 
                value = "<?php echo getvalue("account","lname"); ?>">
            </div>
            <div class = "field_date">
                <label>Date of Birth</label>
                <input type = "date" name = "account[d_birth]" 
                value = "<?php echo getvalue("account", "d_birth");?>">
            </div>
            <div class = "field_phone">
                <lable>Phone</lable>
                <input type = "number" name = "account[phone]"
                value = "<?php echo getvalue("account", "phone");?>">
            </div>
            <div class = "field_email">
                <label>Email</label>
                <input type = "email" name = "account[email]" 
                value = "<?php echo getvalue("account", "email");?>">
            </div>
            <div class = "field_password">
                <label>Password</label>
                <input type = "password" name= "account[pass]"
                value = "<?php echo getvalue("account", "pass"); ?>">
            </div>
            <div class = "field_con_pass">
                <label>Confirm Password</label>
                <input type = "password" name= "account[con_pass]"
                value = "<?php echo getvalue("account", "con_pass"); ?>">
            </div>
            </fieldset>
            <br>
            <br>
            <fieldset>
                <legend>ADDRESS INFORMATION</legend>
                <div class = "field_add1">
                    <label>Address Line 1</label>
                    <input type = "text" name= "address[add1]" required = "required"
                    value = "<?php echo getvalue("address", "add1"); ?>">
                </div>
                <div class = "field_add2">
                    <label>Address Line 2</label>
                    <input type = "text" name= "address[add2]" required = "required"
                    value = "<?php echo getvalue("address", "add2"); ?>">
                </div>
                <div class = "field_company">
                    <label>Company</label>
                    <input type = "text" name= "address[company]" required = "required"
                    value = "<?php echo getvalue("address", "company"); ?>">
                </div>
                <div class = "field_city">
                    <label>City</label>
                    <input type = "text" name= "address[city]" required = "required"
                    value = "<?php echo getvalue("address", "city"); ?>">
                </div>
                <div class = "field_state">
                    <label>State</label>
                    <input type = "text" name= "address[state]" required = "required"
                    value = "<?php echo getvalue("address", "state"); ?>">
                </div>
                <div class = "field_country">
                    <label>Country</label>
                    <?php $countrydata = ["INDIA", "U.S.", "U.K.", "CHINA"];?>
                    <select required = "required" name = "address[country]"> 
                        <?php foreach($countrydata as $key => $value): ?>
                        <option value = "<?php echo $value?>"<?php echo in_array($value, [getvalue("address","country")]) 
                                ? "selected = 'selected'" 
                                :" ";?>>
                        <?php echo $value; ?>
                        </option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class = "field_pin_code">
                    <label>Postal Code</label>
                    <input type = "number" name= "address[pin_code]" required = "required"
                    value = "<?php echo getvalue("address", "pin_code"); ?>">
                </div>
       
        </fieldset >
        <br>
        <div class = "field_checkbox">
            <label for="check">Check for other info.</label>
            <input id ="check" type = "checkbox" name = "check_box" onclick="show_block()">
        </div>
        <br>
        <div id = "show">
        <fieldset>
            <legend>OTHER INFORMATION</legend>
            <div class = "field_detail">
                <label>Describe Yourself</label>
                <input type = "text" name = "other[detail]" required = "required"
                value = "<?php echo getvalue("other", "detail")?>">
            </div>
            <div class = "field_image">
                <label>Profile Image</label>
                <input type = "file" name = "other[image]" 
                value = "<?php echo getvalue("other", "image")?>">
            </div>
            <div class = "field_file">              
                <label>Certificate Upload</label>
                <input type = "file" name = "other[file]"
                value = "<?php echo getvalue("other", "file")?>">
            </div>
            <div class = "field_working_year">
                <label>How long You have been in Business</label>
                <?php $working_year = ["Under 1 Year", "1-2 Year", "2-5 Year",
                                    "5-10 Year", "Over 10 Years"];?>
                    <?php foreach($working_year as $key => $value): ?>
                    <br>
                    <input type = "radio" name = "other[radio_btn]" value = "<?php echo $value?>"
                    <?php echo in_array($value, [getvalue("other","radio_btn")]) 
                            ? "selected = 'selected'" 
                            :" ";?>>
                    <?php echo $value; ?><br>
                    <?php endforeach ?>
            </div>
            <div class = "field_client">
                <label>Number of unique Clients you see each week?</label>
                <?php $clients_week = ["1-5", "6-10", "11-15", "15+"]?>
                <select required = "required" name = "other[client]"> 
                    <?php foreach($clients_week as $key => $value): ?>
                    <option value = "<?php echo $value?>"
                    <?php echo in_array($value, [getvalue("other","client",[])]) 
                            ? "selected = 'selected'" 
                            :" ";?>>
                    <?php echo $value; ?>
                    </option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class ="field_contact">
                <label>How do you like us to get in touch with you?</label>
                <?php $contact_way = ["Email", "SMS", "Phone", "Post"]?>
                <?php foreach($contact_way as $key => $value): ?>
                <input type = "checkbox" name = "other[contact][]" 
                value = "<?php echo $value?>"
                <?php echo $selected = in_array($value, [getvalue("other","contact",[])]) 
                            ? "checked = 'checked'" 
                            :" ";?>>
                <?php echo $value; ?><br>
                <?php endforeach ?>
            </div>
            <div class = "field_hobby">
                <label>Hobbies</label>
                <?php 
                $hobby_data = ["Listening to music", "Travelling", "Blogging", "Sports", "Art"]?>
                <select required = "required" name = "other[hobby][]" multiple> 
                    <?php foreach($hobby_data as $key => $value): ?>
                    <option value = "<?php echo $value?>"
                    <?php  echo in_array($value, [getvalue("other","hobby",[])]) 
                            ? "selected = 'selected'" 
                            :" ";?>>
                    <?php echo $value; ?>
                    </option>
                    <?php endforeach ?>
                </select>
            </div>
        </fieldset>
            </div>
            <div>
                <input type = "submit" name ="submit">
            </div>
            
        </form>
    </div>
    
</body>
</html>
<script>
    function show_block()
    {
    var ch_box = document.getElementById('check');
    if(ch_box.checked)
    {
        document.getElementById('show').style.display=  "block";
    }
    else{
        document.getElementById('show').style.display = "none";
    }
    }
</script>