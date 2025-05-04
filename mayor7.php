<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <?php
        if('edad' >= 18){
            echo $_REQUEST['nombre'] . " es mayor de edad";
        }else{
            echo $_REQUEST['nombre'] . " es menor de edad";
        }
    ?>
    <br>
    <a href="index.php">index</a>
</body>
</html>