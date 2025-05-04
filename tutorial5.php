<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>IF.</h1>
    <?php
        $num = rand(1,3);
        if($num == 1){
            echo "UNO";
        }elseif($num == 2){
            echo "DOS";
        }else{
            echo "tres";
        }
    ?>
    <br>
    <a href="index.php">index</a>
</body>
</html>