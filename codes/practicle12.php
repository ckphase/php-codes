<?php 
echo "Write a PHP program to print the multiplication table upto 6*6<br>";
for($i = 1; $i <= 6; $i++){
    for($k = 1; $k <= 6; $k++){
        echo $i * $k . "   "; 
    }
    echo "<br>";
}
?>