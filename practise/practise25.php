<?php 
echo "25. Print a number and a string in one statement. <br>";
echo 123 . " This is a string";

echo "<br>=================================<br>";

echo "Store integer and add 10 to it.";
$number = 20;
$number += 10;
echo "<br>Value of number after adding 10: " . $number;

echo "<br>=================================<br>";
echo " Store float and multiply by 2.";
$float_num = 10.10;
$float_num *= 2;
echo "<br>Value of float_num after multiplying by 2: " . $float_num;

echo "<br>28. =================================<br>";
echo "Store string 20 and subtract 5";
$string_num = "20";
$string_num -= 5;
echo "<br>Value of string_num after subtracting 5: " . $string_num;

echo "<br>29. =================================<br>";
echo "Demonstrate Boolean addition";
$var_one = true;
$var_two = false;
$bool_sum = $var_one + $var_two;
echo "<br>Value of bool_sum (true + false): " . $bool_sum;
echo "<br>Value of bool_sum (true + true): " . ($var_one + $var_one);
echo "<br>Value of bool_sum (false + false): " . ($var_two + $var_two);

echo "<br><br>Demonstrate Boolean multiplication";
$bool_product = $var_one * $var_two;
echo "<br>Value of bool_product (true * false): " . $bool_product;
echo "<br>Value of bool_product (true * true): " . ($var_one * $var_one);
echo "<br>Value of bool_product (false * false): " . ($var_two * $var_two);

echo "<br>30. =================================<br>";
echo "Show implicit casting when dividing integer by float.";
$int_num = 300;
$float_num = 20.2;
$divide = $int_num / $float_num;
echo "Integer Number is: " . $int_num . "<br>";
echo "Float Number is: " . $float_num . "<br>";
echo "Division of both is: " . $divide . "<br>";
echo "Type of divide is: " 
        . gettype($divide);
?>
