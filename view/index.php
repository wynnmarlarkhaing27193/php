<?php
    require_once __DIR__ . "/../vendor/autoload.php";
    use Controllers\MyController;
    $app = new MyController;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1><?php $app->run(); ?></h1>
</body>
</html>
