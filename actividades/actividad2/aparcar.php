<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="scripts/procesa_aparcar.php" method="post">
    <h2>¿Que tipo de coche tienes?</h2>

    <select name="coche" id="coche">
        <option value="g">Grande</option>
        <option value="p">Pequeño</option>
    </select>
    <br><br>
    <input type="submit" value="Aparcar">

</form>
    
</body>
</html>

