<?php
echo "Write a PHP program to compute the sum of all the prime numbers till 100";
$num = 1;
$prime_sum = 0;
for($i = 2; $i <= 100; $i++){
    if ($num % $i != 0){
        $prime_sum = $num + $prime_sum;
        echo "$prime_sum<br>";
    }
    $num++;
}
echo "<br>$prime_sum";
?>