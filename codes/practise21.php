<?php
echo "=========STATIC SCOPE IN PHP==========" . "<br>";
echo "Show static variable behavior.";
echo "<br>";
echo "My test fucntion using static";
function myTest()
{
    static $x = 0;
    echo "<br>" . $x;
    $x++;
}
myTest();
myTest();
myTest();
myTest();
myTest();
echo "<br>My test2 fucntion not using static";
function myTest2(){
    $x = 0;
    echo "<br>" . $x;
    $x++;
}
myTest2();
myTest2();
myTest2();
myTest2();
myTest2();
?>