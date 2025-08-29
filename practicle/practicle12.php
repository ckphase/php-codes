<?php 
echo "Write a PHP program to print the multiplication table upto 6*6<br>";
echo "<pre>";
for($i = 1; $i <= 6; $i++){
    for($k = 1; $k <= 6; $k++){
        echo str_pad($i * $k, 6, " ", STR_PAD_LEFT);
    }
    echo "<br>";
}
echo "<pre>";

?>