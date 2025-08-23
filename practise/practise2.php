<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <?php
    $person_one = "A";
    $person_two = "B";
    $person_three = "C";
    $person_one_salary = 1000;
    $person_two_salary = 1200;
    $person_three_salary = 1400;
    ?>
    <table border="2" >
        <tr>
            <td>Salary of Mr.<?php echo $person_one?></td>
            <td><?php echo $person_one_salary . "$" ?></td>
        </tr>
        <tr>
            <td>Salary of Mr.<?php echo $person_two?></td>
            <td><?php echo $person_two_salary. "$" ?></td>
        </tr>
        <tr>
            <td>Salary of Mr.<?php echo $person_three?></td>
            <td><?php echo $person_three_salary. "$"?></td>
        </tr>
    </table>
</body>
</html>