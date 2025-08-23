<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    echo "Store a negative number and print it";
    ?>
    <form method="POST" class="">
    <input type="text" name="number">
    <button class="submit" name="submit">Submit</button>
    </form>
    <?php
    if(isset($_POST['submit'])){
        $number = $_POST['number'];
        $negative_num = (int)$number;
        echo "<br>";
        echo "Value: " . $negative_num;
        echo "<br>";   
        echo "Datatype: " . gettype($negative_num);
    }
    ?>
</body>
</html>