<?php 
echo " Show that local variable is not accessible outside function. <br>";
function myTest(){
    $local_variable = "The local variable";
}
myTest();
echo "Trying to access local variable outside the function: ";
echo $local_variable;
?>