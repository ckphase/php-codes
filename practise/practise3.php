<?php 
    echo "Concatenation two strings in php";
    $first = "Hello ";
    $second = "World";
    $concat = $first . $second;
    echo "<br>";
    echo $concat;
    $concat_two = "$first $second";
    echo "<br>";
    echo $concat_two;
    $concat_three = "{$first} {$second}";
    echo "<br>";
    echo $concat_three;
    $concat_four = "{$first}, {$second}!";
    echo "<br>";
    echo $concat_four;
    $concat_five = $first . ", " . $second . "!";
    echo "<br>";
    echo $concat_five;
    echo "<br>";
    $concat_six = "$first . $second";
    echo $concat_six;
?>