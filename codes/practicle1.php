<!DOCTYPE html>
<html lang="en">
<!-- Variable accessible inside the function, but declared outside -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $x = 5;
    function myTest()
    {

    // echo "<p>Variable x inside function is: $x</p>";
    }
    myTest();
    echo "<p>Variable x outside function is: $x</p>";
    ?>

</body>
</html>