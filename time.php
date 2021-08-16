<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php date_default_timezone_set('Asia/Hong_Kong'); ?>
    <?php echo date_default_timezone_get(); ?> <br>
    <?php echo time(); ?>
    <h1>The current time is <?php echo date('F d, Y h:i:sa', time()); ?></h1>
</body>

</html>