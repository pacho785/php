<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $conexion = mysqli_connect("localhost","root","","base1") or
        die("Problemas con la conexion de la base de datos");

        mysqli_query($conexion,"UPDATE alumnos 
                                set mail ='$_REQUEST[mailnuevo]'
                                where mail = '$_REQUEST[mailviejo]'") or
        die("Problemas con el select: ".mysqli_error($conexion));
        echo "Se modifico el email correctamente";

        mysqli_close($conexion);
    ?>
    <br>
    <a href="t2tutorial17.php">listado</a>
</body>
</html>