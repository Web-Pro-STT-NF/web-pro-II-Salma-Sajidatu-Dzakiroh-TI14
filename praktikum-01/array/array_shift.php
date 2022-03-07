<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>array shift</h3>
    <?php 
    $tims = ['erwin','heru','ali','zaki'];
    array_shift($tims);
    foreach ($tims as $value) {
        echo $value.'<br>';
    }
    ?>

    <hr>
    <h3>array unshift</h3>
    <?php 
    $tims = ['erwin','heru','ali','zaki'];
    array_unshift($tims,'joko','wati');
    foreach ($tims as $value) {
        echo $value.'<br>';
    }
    ?>
</body>
</html>