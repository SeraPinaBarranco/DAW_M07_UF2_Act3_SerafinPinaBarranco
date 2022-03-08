<?php
    session_start();
    include_once("formulario.php");

    include_once("scripts/genera_aleatorio.php");
    echo("");
    $num = -1;
    $numero_input = null;

    if(isset($_POST['numero']))$numero_input= $_POST['numero'];
    
    //Si la variable de sesion no existe, la crea y la almacena en $num
    if(isset($_SESSION['aleatorio'])){
        $num =  $_SESSION['aleatorio'];
    }else{
    $_SESSION['aleatorio'] = genera_aleatorio();
    $num= $_SESSION['aleatorio'];
    }

    if($numero_input !== ""){

        if($numero_input < $num){
            echo("<p> El número que buscas es mayor que $numero_input ($num)</p>");            
        }elseif ($numero_input > $num) {
            echo("<p> El número que buscas es menor que $numero_input ($num)</p>");
        }else{
            echo "<p>HAS ACERTADO, $num!!!</p>";
            unset($numero_input);
            unset($_SESSION['aleatorio']);//deja el array de sesion vacio
            session_destroy();//elimina la sesion
            header( "refresh:3");
        }
    }else{
        echo ("");
    }


?>