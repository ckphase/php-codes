<?php
$x = true;
$y = false;
echo "=========BEFORE EXPLICIT CASTNG==========" . "<br>";
echo "Value of x is $x <br>";
echo gettype($x) . "<br>";
echo "Value of x is $y <br>";
echo gettype($y) . "<br>";
echo "==========AFTER EXPLICIT CASTNG==========" . "<br>";
$after_change_x = (int)$x;
echo "Value of x is $after_change_x <br>";
echo gettype($after_change_x) . "<br>";
$after_change_y = (int)$y;
echo "Value of x is $after_change_y <br>";
echo gettype($after_change_y) . "<br>";