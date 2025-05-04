<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Arrays</h1>
    <br>
    <?php
        $dias = array("lunes","martes","miercoles","jueves","viernes","sabado","domingo");

        echo "primer dia de la semana: <br>";
        echo $dias[0];

        echo "<br>";
        echo "ultimo dia de la semana: <br>";
        echo $dias[count($dias) - 1];
    ?>
    <br>
    <a href="index.php">index</a>
</body>
</html>