<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Please Input Your Name</h2>
    <form action="" method="GET">
    <input type="text" class="text" name="username" required>
    <button type="submit" name="submit">Submit Button</button>
    </form>
    <?php
    if (isset($_GET['submit'])){
        $name = $_GET['username'];
        echo "Hello, $name. How are you?";
    }
    ?>
</body>
</html>