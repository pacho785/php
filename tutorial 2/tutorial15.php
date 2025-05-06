<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Funciones</h1>
    <br>
    <?php
        $clave1 = $_POST['clave1'];
        $clave2 = $_POST['clave2'];

        function mensaje ($clavex, $clavey){
            if($clavex != $clavey){
                echo "Error, las claves no coinciden, vuelva a intentarlo";
            }else{
                echo "Bienvenido al programa";
            }
        }

        mensaje($clave1, $clave2);
    ?>
    <br>
    <a href="index.php">index</a>
</body>
</html>