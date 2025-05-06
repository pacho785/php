<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>listado</h1>
    <br>
    <?php
        $conexion = mysqli_connect("localhost", "root", "", "base1") or
        die("problemas con la base de datos");

        $registro = mysqli_query($conexion, "select codigo,nombre,mail,codigoCurso
        from alumnos") or
        die("Problemas en el selct: ".mysqli_error($conexion));

        while($reg = mysqli_fetch_array($registro))
        {
            echo "Codigo: ".$reg['codigo']."<br>";
            echo "Nombre: ".$reg['nombre']."<br>";
            echo "Mail: ".$reg['mail']."<br>";
            echo "curso: ";

            switch($reg['codigoCurso']) {
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

           echo "<br>"; 
        }
        mysqli_close($conexion);
    ?>
    <br>
    <a href="index.php">index</a>
</body>
</html>