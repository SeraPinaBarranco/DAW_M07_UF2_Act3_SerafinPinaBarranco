<?php
    
    session_start();

    // unset($_SESSION['peq']);
    // unset($_SESSION['gran']);
    
    if(isset($_SESSION['peq']) == false && isset($_SESSION['gran']) == false){ //Si no hay variable de sesion se crean los dos arrays
       echo ("Creadas");
        $_SESSION['peq'] = [0,0,0,0,0,0,0,0,0,0,0,0,0,0];
        $_SESSION['gran'] = [0,0,0,0,0,0,0,0,0,0];
    }else{
        echo (" Ya Creadas");        
    }
        //Dependiendo del valor del radio buton muestra una pagina u otra

    if(!empty($_POST['tipo'])){
        $tipo = $_POST['tipo'] ;
    
        $url = $tipo . ".php"; 
        header("Location:" . $url);
    }

?>