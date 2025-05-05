<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $ar = fopen("pedidos.txt", "a"); 

        if (!$ar) {
            die("No se pudo abrir el archivo para escritura.");
        }
        
        fputs($ar, $_REQUEST['nombre']);
        fputs($ar, "\n");
        fputs($ar, $_REQUEST['direccion']);
        fputs($ar, "\n");

        if(isset($_REQUEST['jamonYqueso'])){
            fputs($ar, "JAMON Y QUESO. X");
            fputs($ar, "\n");
            fputs($ar, $_REQUEST['cantidad']);
        }

        if(isset($_REQUEST['napolitano'])){
            fputs($ar, "NAPOLITANA. X");
            fputs($ar, "\n");
            fputs($ar, $_REQUEST['cantidad2']);
        }

        if(isset($_REQUEST['muzzarella'])){
            fputs($ar, "MUZZARELLA. X");
            fputs($ar, "\n");
            fputs($ar, $_REQUEST['cantidad3']);
        }
        fputs($ar, "\n");
        fclose($ar);

        echo("Los datos se cargaron correctamente..." . "<br>");
        echo "Archivo guardado en: " . getcwd();

    ?>
    <br>
    <a href="index.php">index</a>
</body>
</html>