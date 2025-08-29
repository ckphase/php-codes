<?php
$prime_sum = 0;

for ($i = 2; $i <= 100; $i++) {
    $isPrime = true;

    for ($j = 2; $j < $i; $j++) {
        if ($i % $j == 0) {
            $isPrime = false;
            break;
        }
    }

    if ($isPrime) {
        $prime_sum += $i;
    }
}

echo "Sum of all prime numbers till 100 = $prime_sum";
?>
