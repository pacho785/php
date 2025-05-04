<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ciclos.</h1>
    <br>
    <?php
        $tabla = 2;

        for($i = 1; $i < 11; $i++){
            echo "tabla del dos con un for: ";
            echo $tabla . "x" . $i . "= " . ($tabla*$i) . "<br>";
        }

        echo "<br>";

        $contador = 1;
        while($contador < 11){
            echo "tabla del dos con un while: ";
            echo $tabla . "x" . $contador . "= " . ($tabla*$contador) . "<br>";

            $contador++;
        }
        
        echo "<br>";

        $contador2 = 1;
        do{
            echo "tabla del dos con un do_while: ";
            echo $tabla . "x" . $contador2 . "= " . ($tabla*$contador2) . "<br>";

            $contador2++;
        }while($contador2 < 11)
    ?>
    <br>
    <a href="index.php">index</a>
</body>
</html>