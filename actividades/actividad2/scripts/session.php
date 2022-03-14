<?php
    session_start();

    if(!isset($_SESSION['pequena']) && isset($_SESSION['grande'])){
        $_SESSION['pequena']= array(); //14 plazas, 0 libre - 1 ocupada
        $_SESSION['grande']= array();//10 plazas, 0 libre - 1 ocupada    
    }

?>