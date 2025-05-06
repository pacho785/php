<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Consulta</h1>
    <br>
    <?php
        $conexion = mysqli_connect("localhost","root","","base1")or
        die("Problemas con la base de datos");

        $registro = mysqli_query($conexion, "select codigo, nombre,codigoCurso
        from alumnos where mail ='$_REQUEST[mail]'") or 
        die("problemas en el select: ".mysqli_error($conexion));

        if($reg = mysqli_fetch_array($registro)){
            echo "Nombre: ".$reg['nombre']."<br>";
            echo "Curso: ";

            switch($reg['codigoCurso']){
                case 1:
                    echo "PHP";
                    break;
                case 2:
                    echo "ASP";
                    break;
                case 3:
                    echo "JSP";
                    break;
            }

        }else{
            echo "No existe un alumno con ese mail.";
        }
        mysqli_close($conexion);
    ?>
    <br>
    <a href="index.php">index</a>
</body>
</html>