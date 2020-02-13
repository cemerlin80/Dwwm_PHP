<?php

echo time();

$t = time();
$t -= 7*24*3600;
echo "<hr>Nous sommes le " . date("d/m/Y H:i:s", $t);
echo "<hr>";


$dd = new DateTime("2010-06-01");
$dd2 = new DateTime("2012-03-17");

$interval = $dd->diff($dd2);

echo $interval->days;



print_r($dd);




$oDate =  DateTime::createFromFormat("d/m/Y H:i:s", "17/01/1966 03:42:11");
 
$errors = DateTime::getLastErrors();
 
if ($errors["error_count"]>0 || $errors["warning_count"]>0) {
    echo "ARGHHHH !";
}
else {
    echo "OK";
}