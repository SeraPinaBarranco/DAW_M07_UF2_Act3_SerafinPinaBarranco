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

<form action="scripts/procesa_retirar.php" method="post">
    <h2>¿Que coche quieres retirar?</h2>

    <label >
        Tipo de coche: 
        <select name="coche" id="coche">
            <option value="g">Grande</option>
            <option value="p">Pequeño</option>
        </select>
    </label>
    <br><br>
    <label>
        Numero de plaza:
        <input type="number" name="plaza" id="plaza" min=0 max=14>
    </label>
    <br><br>
    <input type="submit" value="Aparcar">

</form>
    
</body>
</html>