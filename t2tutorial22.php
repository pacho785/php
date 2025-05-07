<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $conexion = mysqli_connect("localhost","root","","base1")or 
        die ("Problemas con la conexion de la base de datos");

        mysqli_query($conexion, "INSERT into alumnos(nombre,mail,codigoCurso) 
                                values ('$_REQUEST[nombre]','$_REQUEST[mail]',$_REQUEST[codigocurso])")or
                                die("Probelmas con el select: ".mysqli_error($conexion));

        mysqli_close($conexion);

        echo "el alumno fue dado de alta.";
    ?>
    <br>
    <a href="index.php">index</a>
</body>
</html>