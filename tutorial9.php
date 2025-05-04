<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $deportes = 0;
        if(isset($_REQUEST['futbol'])){
            $deportes++;
        }
        if(isset($_REQUEST['basket'])){
            $deportes++;
        }
        if(isset($_REQUEST['tennis'])){
            $deportes++;
        }
        if(isset($_REQUEST['voley'])){
            $deportes++;
        }

        echo  $_REQUEST['nombre'] . " practica: " . $deportes . " deportes";
    ?>
    <br>
    <a href="index.php">index</a>
</body>
</html>