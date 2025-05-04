<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if('radio1' == "no tiene estudios"){
            echo $_REQUEST['nombre'] . " no tiene estudios";

        }elseif('radio2' == "estudios primarios"){
            echo $_REQUEST['nombre'] . " tiene estudios primarios";
        }else{
            echo $_REQUEST['nombre'] . " tiene estudios secundarios";
        }
    ?>
    <br>
    <a href="index.php">index</a>
</body>
</html>