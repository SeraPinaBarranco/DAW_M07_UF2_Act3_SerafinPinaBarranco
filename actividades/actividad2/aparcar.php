<?php
    
    include_once('scripts/session.php');

    
    if(isset($_SESSION['pequena']) && isset($_SESSION['grande'])){
        var_dump($_SESSION);
        echo ("Establecido");
    }else{
        var_dump($_SESSION);
        echo "no establecido";
    }
?>