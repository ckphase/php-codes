<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo "Explicitly cast 15 to a string"; ?>
    <form action="" method="POST">
        <input type="number" name="number">
        <button type="submit" value="Submit" name="submit">Submit</button>
    </form>
    <?php 
    if(isset($_POST['submit'])){
        $number = $_POST['number'];
        echo "The original type of the number is: " . gettype($number) . "<br>";
        $change_type = (string)$number;
        echo "The changed type of the number is: " . gettype($change_type) . "<br>";
        echo "Note: All form inputs (POST / GET) in PHP are received as strings by default, no matter if the input is of type number, text, or email";
    }
    ?>
    <h3>SOLUTION:</h3>
    <?php 
    $num = 15;
    echo "Value of the number is: " . $num . "<br>";
    echo "The original type of the number is: " . gettype($num) . "<br>";
    $change_type = (string)$num;
    echo "The changed value of the number is: " . $change_type . "<br>";
    echo "The changed type of the number is: " . gettype($change_type) . "<br>";
    ?>
</body>
</html>