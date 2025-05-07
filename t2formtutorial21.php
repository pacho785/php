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
        die("Problema con la conexion de la base datos");

        $registro = mysqli_query($conexion,"SELECT * from alumnos where mail='$_REQUEST[mail]'")or
        die("Problemas con el select: ".mysqli_error($conexion));

        if($reg = mysqli_fetch_array($registro)){
    ?>
        <form action="t2tutorial21.php" method="post">
            Ingrese nuevo mail: 
            <input type="text" name="mailnuevo" value="<?php echo $reg['mail'] ?>">
            <br>
            <input type="hidden" name="mailviejo" value="<?php echo $reg['mail']?>">
            <br>
            <input type="submit" value="Modificar">
        </form> 

    <?php
        }else
        {
            echo "No existe este alumno";
        }
        mysqli_close($conexion);
    ?>
</body>
</html>