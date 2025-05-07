<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="t2tutorial22.php" method="post">
        Ingrese nombre: 
        <input type="text" name="nombre">
        <br>
        Ingrese su mail: 
        <input type="text" name="mail">
        <br>
        Seleccione el curso:
        <select name="codigocurso">
    </form>    

    <?php
        $conexion = mysqli_connect("localhost","root","","base1")or 
        die("Problema con la conexion de l abase de datos");

        $registro = mysqli_query($conexion,"SELECT codigo, nombreCurso from cursos")or 
        die("Problemas con el select: ".mysqli_error($conexion));

        while($reg = mysqli_fetch_array($registro)){
            echo "<option value=\"$reg[codigo]\">$reg[nombrecurso]</option>";
        }

        mysqli_close($conexion);
    ?>
    </select>
    <br>
    <input type="submit" value="Registrar">
</body>
</html>