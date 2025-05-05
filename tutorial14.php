<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Dicionarios</h1>
    <br>

    <?php
        $claves  = array(
            'usuario1' => "pachoMon",
            'usuario2' => "EnCrack123",
            'usuario3' => "pacho_123",
            'usuario4' => "Pachito_mon123",
            'usuario5' => "pacho&&");

        echo $claves ['usuario1'];
        echo "<br>";
        echo $claves ['usuario5'];
    ?>
    <br>
    <a href="index.php">index</a>
</body>
</html>