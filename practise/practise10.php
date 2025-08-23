<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "Divide integer by integer.";
    echo "Note: Division by Zero is not allowed.";
    ?>
    <form method="POST">
        <input type="text" name="num1">
        <input type="text" name="number">
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>
    <?php
    if(isset($_POST['submit'])){
        $num1 = $_POST['num1'];
        $number = $_POST['number'];
        $num1 = (int)$num1;
        $number = (int)$number;
        $result = $num1 / $number;
        echo $result;
    }
    ?>