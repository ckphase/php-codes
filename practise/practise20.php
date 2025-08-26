<?php 
echo "=========VARIABLE SCOPE IN PHP==========" . "<br>";
echo "Demonstrate global variable using global keyword. <br>";
$x= "The global variable";
function myTest(){
    global $x;
    echo "Accessing global variable in Test function: " . $x . "<br>";
}
function myTest2(){
    echo "Accessing global variable in Test2 function:" . $GLOBALS['x'] . "<br>";
}
myTest();
myTest2();
echo "Accessing global variable outside function: " . $x;

?>