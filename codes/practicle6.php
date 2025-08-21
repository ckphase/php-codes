<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $foo = 'Bob';
    $bar = &$foo;
    $bar = "My name is $bar";
    echo $bar;
    echo $foo;
    ?>
</body>
</html>