
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>Menú aparcamiento</h2>

<form action="redirigir.php" method="POST">

    <fieldset>
                
        <label>
            <input type="radio" name="tipo" id="tipo" value="aparcar">
            Aparcar coche
        </label><br><br>
         <label>
            <input type="radio" name="tipo" id="tipo" value="retirar">
            Retirar coche
        </label><br><br>
        <label>
            <input type="radio" name="tipo" id="tipo" value="estado">
            Ver estado del parking
        </label><br><br>
        
    </fieldset>

    <input type="submit" value="Enviar">

</form>

</body>
</html>



