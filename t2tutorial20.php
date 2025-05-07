<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Delete (baja de todo los registron de una tabla)</h1>
    <br>
    <?php
        $conexion = mysqli_connect("localhost","root","","base1") or
        die("Problemas de conexion con la base de datos.");

        $registro = mysqli_query($conexion,"TRUNCATE table alumnos") or 
        die ("Problemas al truncar la tabla: ".mysqli_error($conexion));

        echo "Se borraron todos los datos de la tabla alumnos.";
        mysqli_close($conexion);
    ?>
    <br>
    <a href="index.php">index</a>
</body>
</html>