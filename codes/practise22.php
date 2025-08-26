<?php
echo "=========LOCAL AND GLOBAL==========" . "<br>";
echo "Show difference between global and local variables with same name";
$x = "This is a global variable";
function myTest(): bool|float|int|string{
    $x = "This is a local variable";
    echo "<br>Accessing Variable X in function: " . $x;
    global $x;
    echo "<br> After using Global inside funtion: " . $x;
    return $x;
}
myTest();
echo  "<br>"."=================================";
$value = myTest();
echo "<br>". $value;

?>