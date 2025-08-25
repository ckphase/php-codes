<?php
echo "Write a PHP program to function to test weather a number is greater than 30, 20 or 10 using ternary operator.<br>";
echo "Enter the number to check: <br>";
$num = 25;

    echo $num > 30 ? "$num greater than 30" : "$num less than 30";
    echo "<br>";
    echo $num > 20 ? "$num greater than 20" : "$num less than 20";
    echo "<br>";
    echo $num > 10 ? "$num greater than 10" : "$num less than 10";

?>

<?php
    // function ternary($d){
    //     $r = $d > 30 
    //         ? "$d is greater than 30"
    //         : $d > 20
    //         ? "$d is greater that 20"
    // }

?>