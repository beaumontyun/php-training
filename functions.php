<?php
function greetings($name) {
    return 'Welcome, ' . $name;
}

function sum($num1, $num2, $num3) {
    return $num1 + $num2 + $num3;
}
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
    <?php $greeting_message = greetings("John"); ?>
    <h1><?php echo $greeting_message; ?></h1>
    <h1><?php echo sum(5, 6, 7); ?></h1>
</body>
</html>