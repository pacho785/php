<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lectura de un archivo de texto</h1>
    <br>
    <?php
        $ar = fopen("pedidos.txt", "r") or
        die ("No se pudo abrir el archivo");

        while(!feof($ar)){
            $linea=fgets($ar);
            $lineasalto=nl2br($linea);
            echo $lineasalto;
        }
        fclose($ar);
    ?>
    <br>
    <a href="index.php">index</a>
</body>
</html>