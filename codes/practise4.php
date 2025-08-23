<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    echo "Store and Decimal Number and Print it";
?>
<form action="" method="POST">
    <input type="text" name="number">
    <button type="submit" value="Submit" aria-placeholder="Submit" name="submit">Submit</button>
</form>
<?php 
    if(isset($_POST['submit'])){
    $number = $_POST['number'];
    $float_number = (float)$number;
    echo "<br>";
    echo "Value: " . $float_number;
    echo "<br>";
    echo "Datatype: " . gettype($float_number);
    echo "<br>";
    printf("Customised decimal number: %.$ff", $float_number);
    }
?>
</body>
</html>