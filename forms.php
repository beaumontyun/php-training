<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <p>Add your name and email below:</p> -->
    <!-- <form action="hello.php" method="POST">
        <input type="text" name="name" placeholder="Name">
        <input type="email" name="email" placeholder="Email">
        <input type="submit" value="submit">
    </form> -->
    <?php $_SESSION['name'] = 'Tony'; ?>
    <?php echo $_SESSION['name']; ?>
    <?php include 'include.php'; ?>
</body>
</html>