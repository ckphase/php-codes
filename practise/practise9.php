<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    echo "Add string '20' and number 30.";
    ?>
    <form method="POST" class="">
        <input type="text" class="text" name="number1">
        <input type="text" class="text" name="number2">
        <button name="submit">Submit</button>
    </form>
    <?php
    if(isset($_POST['submit'])){
        $number1 = $_POST['number1'];
        $number1 = (string)$number1;
        $number2 = $_POST['number2'];
        $number2 = (int)$number2;
        $num1_type = gettype($number1);
        $num2_type = gettype($number2);
        echo "Addition of $number1 ($num1_type) and $number2 ($num2_type) is: " . $number1 + $number2;
        $sum = $number1 + $number2;
        echo "<br>";
        echo "Datatype of the sum is: " . gettype($sum);
    }
    ?>
</body>
</html>