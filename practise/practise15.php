<?php 
echo "Explicitly cast 123 string to integer.";
$num = "123";
echo "<br>The value of the number entered is : $num";
$change_type = (int)$num;
echo "<br>The changed value of the number is : $change_type";
echo "<br>The changed type of the number is : " . gettype($change_type);
?>