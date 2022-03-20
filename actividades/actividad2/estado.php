<?php
session_start();
ver_plazas();

function ver_plazas(){
    echo("<h2>Estado del parquing</h2>");
    echo("<h3>Plazas grandes:</h3>");

    echo("<ul>");
    foreach ($_SESSION['gran'] as $indice => $valor) {
        // if($valor == 0){
        //     $plaza = "libre";
        // }else{
        //     $plaza= "ocupada";
        // }
        echo("<li> Plaza ". ($indice /*+ 1*/) . ": $valor </li>");
    }
    echo("</ul>");
    
    echo("<hr>");
    echo("<h3>Plazas pequeñas:</h3>");
    echo("<ul>");
    foreach ($_SESSION['peq'] as $indice => $valor) {
        echo("<li> Plaza ". ($indice /*+ 1*/) . ": $valor </li>");
    }
    echo("</ul>");
            
}



?>

