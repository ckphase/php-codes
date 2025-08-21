<!DOCTYPE html>
<html lang="en">
<!-- Variable accessible inside the function, but declared inside -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    function myTest()
    {
    $x = 5;
    echo "<p>Variable x inside function is: $x</p>";
    }
    myTest();
    echo "<p>Variable x outside function is: $x</p>";
    ?>

</body>
</html>