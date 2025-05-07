<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Delete (baja de un registro en una tabla)</h1>
    <br>
    <?php
        $conexion = mysqli_connect("localhost","root","","base1") or
        die("Problema con la conexion a la base de datos");

        $registro = mysqli_query($conexion, "SELECT codigo from alumnos where mail = '$_REQUEST[mail]'") or
        die ("Problemas en el select : ".mysqli_error($conexion));

        if($reg = mysqli_fetch_array($registro)){

            mysqli_query($conexion,"DELETE from alumnos where mail = '$_REQUEST[mail]'") or 
            die ("problemas en el select: ".mysqli_error($conexion));

            echo "Se borro efectivamente al alumno con dicho mail.";

        }else{
            echo "No existe alumno con dicho mail.";
        }
        mysqli_close($conexion);
    ?>
    <br>
    <a href="index.php">index</a>
</body>
</html>