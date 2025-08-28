<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            justify-content: center;
            display: flex;
        }
        form{
            background-color: rgba(167, 161, 161, 1);
            width: 400px;
            max-width: 1000px;
        }
        table{
            
        }
        #submit{
           align-items: right; 
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        <table>
        <tr>
        <td><label for="name">Student Name</label></td>
        <td><input type="text" name="name" id="name" placeholder="Enter your name"><br></td>
        </tr>
        <tr>
        <td><label for="subject1">Subject 1</label></td>
        <td><input type="number" name="subject1" id="subject1" placeholder="Enter Marks" max="100" min="0"><br></td>
        <tr>
        <td><label for="subject2">Subject 2</label></td>
        <td><input type="number" name="subject2" id="subject2" placeholder="Enter Marks" max="100" min="0"><br></td>
        </tr>
        <tr>
        <td><label for="subject3">Subject 3</label></td>
        <td><input type="number" name="subject3" id="subject3" placeholder="Enter Marks" max="100" min="0"><br></td>
        </tr>
        <tr>
        <td colspan="2"><button type="submit" name="submit" id="submit">Submit</button></td>
        </tr>
        </table>
    </form>
    <?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $subject1 = $_POST['subject1']; 
        $subject2 = $_POST['subject2']; 
        $subject3 = $_POST['subject3']; 
        echo $name;
        ?>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Subject 1</th>
            <th>Subject 2</th>
            <th>Subject 3</th>
        </tr>
        <tr>
            <td><?php echo $name; ?></td>
            <td><?php echo $subject1; ?></td>
            <td><?php echo $subject2; ?></td>
            <td><?php echo $subject3; ?></td>
        </tr>
    </table>
<?php 
    }
    ?>
</body>
</html>