<?php 
// echo "Write a PHP program to check whether a number is an Armstrong number or not. Return true if the number is Armstrong number otherwise return false.<br>";
// echo "Note: An Armstrong number in three digits is an integer such that the sum of the cubes of its digits is equal to the number itself.<br><br>";

$number = "153"; 
$array12 = str_split($number); // split into array of digits
$total = 0;

// loop through each digit
for($i = 0; $i < count($array12); $i++){
   $digit = (int)$array12[$i];       // convert to integer
   $total += $digit * $digit * $digit; // cube and add
}

if ($number == $total) {
    echo "$number is an Armstrong number.";
} else {
    echo "$number is not an Armstrong number.";
}
?>
