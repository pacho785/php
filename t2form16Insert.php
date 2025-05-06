<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <h1>alta de alumnos</h1>
     <form action="t2tutorial16.php" method="post">
        ingrese su nombre:
        <input type="text" name="nombre"><br>
        ingrese mail:
        <input type="text" name="mail"><br>
        seleccione el curso: 
        <select name="codigoCurso">
            <option value="1">php</option>
            <option value="2">asp</option>
            <option value="3">jsp</option>
        </select>
        <br>
        <input type="submit" value="registrar">
     </form>
</body>
</html>