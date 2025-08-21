<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $total = "25 students";
    $more = "10";
    $total = $total + $more; 
    echo "<p>Total number of students: $total</p>";

    $total = "25students";
    $more = "10";
    $total = $total + $more; 
    echo "<p>Total number of students: $total</p>";

    $total = "255 students";
    $more = "10";
    $total = $total + $more; 
    echo "<p>Total number of students: $total</p>";
        
    $total = "students 25";
    $more = "10";
    $total = $total + $more; 
    echo "<p>Total number of students: $total</p>";
    ?>
</body>
</html>