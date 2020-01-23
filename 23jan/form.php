<?php
if(isset($_GET['details']) && isset($_GET['search']) && isset($_GET['replace']))
{
    $detail = $_GET['details'];
    $search = $_GET['search'];
    $replace = $_GET['replace'];
    $offset = 0;
    $length = strlen($search);
    
    if(!empty($detail) && !empty($search) && !empty($replace))
    {
    while($strpos = strpos($detail,$search,$offset))
    {
        $offset = $strpos + $length;
        $detail = substr_replace($detail, $replace, $strpos, $length );
        echo "$detail<br>";
    }
    echo "$detail";
    }
    else
    {
        echo "Please fill all the field.";
    }
}
    
?>
<form action = "form.php" method = "GET">
comments:
<input type = "text" name = "details" ><br><br>
search:
<input type = "text" name = "search"><br><br>
repalce:
<input type = "text" name = "replace"><br><br>
<input type = "submit" name = "submit">
</form>