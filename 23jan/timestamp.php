<?php

$time = time();
$time1 = strtotime('now');
echo "Default representation  of timestamp:<br><br> Using time() " . $time . 
     "<br> Or using strtotime() " . $time1 . "<br><br>";

$date_now = date('d/m/Y', $time);
echo "Current Date is: " . $date_now . "<br>";

$date_now = date('D/M/Y', $time);
echo "Current Date is: " . $date_now . "<br>";

$time_now = date('H:i:s', $time);
echo "Current Time is: " . $time_now . "<br>";

$now = date('D/M/Y || H:i:s ', $time);
echo "Current Date/Time is: " . $now . "<br>";


?>

<?php
echo "<br><br> Modified Time And Dates Are: <br><br>";

$date_modified = date('d/m/Y', strtotime('+3 week'));
echo "Modified Date is: " . $date_modified . "<br>";

$date_modified1 = date('d/m/Y', strtotime('+3 week +1 month -2 year'));
echo "Modified Date is: " . $date_modified1 . "<br>";

$time_modified = date('H:i:s', strtotime('+5 hours'));
echo "Modified Time is: " . $time_modified . "<br>";

$time_modified1 = date('H:i:s', strtotime('+5 hours -30 minutes +60 seconds '));
echo "Modified Time is: " . $time_modified1 . "<br>";

$modified = date('D/M/Y || H:i:s ', $time -(5*20*20));
echo "Modified Date/Time is: " . $modified . "<br>";

?>