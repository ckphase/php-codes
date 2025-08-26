<?php 
echo "Show implicit type conversion when multiplying string '5' by 2.<br>";
$num = "5";
echo "The value of the string number is : $num <br>";
echo gettype($num) . "<br>";
echo "Multiplying the string number by 2 gives: " . $num * 2;
?>