<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    echo "Add integer and float.";
    ?>
    <form method="POST">
    <input type="text" name="number1">
    <input type="text" name="number2">
    <button class="submit" name="submit">Submit</button>
    </form>
    <?php
    if(isset($_POST['submit'])){
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];
        $number1 = (int)$number1;
        $number2 = (float)$number2;
        echo "First Number Entered: " . $number1 . " and Datatype is " . gettype($number1) . "<br>";
        echo "Second Number Entered: " . $number2 . " and Datatype is " . gettype($number2);
        $add = $number1 + $number2;
        echo "<br>";
        echo "Addition: " . $add;
    }
    ?>
</body>
</html>