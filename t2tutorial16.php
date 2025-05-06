<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Insertar datos a una base de datos</h1>
    <br>
    <?php
        $conexion = mysqli_connect("localhost", "root", "", "base1") or
        die("Problemas con la base de datos");

        $registro = mysqli_query($conexion,"insert into alumnos(nombre,mail,codigoCurso)
            values
                ('$_REQUEST[nombre]','$_REQUEST[mail]',
            $_REQUEST[codigoCurso])")
                or die("Problemas en el select".mysqli_error($conexion));

            mysqli_close($conexion);

            echo "El alumno fue dado de alta.";
    ?>
    <br>
    <a href="index.php">index</a>
</body>
</html>