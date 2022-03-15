<?php
    session_start();

    $plaza = $_POST['coche'];

    
    if($plaza == "g"){//si el coche es grande, aparcara en plaza grande
        aparca_grande("grande");
       
    }elseif ($plaza == "p") {//si es pequeño, aparcara en plaza pequeña
        aparca_peq("pequeño");
        
    }

    function aparca_grande($la_plaza){ 

        foreach ($_SESSION['gran'] as $indice => $valor) {
            if($valor == 0){              
                $_SESSION['gran'][$indice] = 1; 

                if($la_plaza == "grande"){
                    echo ("Aparcado coche " . $la_plaza . "<br>" ); 
                    redirigir();
                }else{
                    echo ("Aparcado coche " . $la_plaza . " en plaza grande<br>" ); 
                    redirigir();
                }
                return;
            }            
        }    
        echo ("Todas las plazas estan ocupadas");
        redirigir() ;   
    }

    function aparca_peq($la_plaza){
        
        foreach ($_SESSION['peq'] as $indice => $valor) {
            if($valor == 0){    //busca si quedan plazas pequeñas          
                $_SESSION['peq'][$indice] = 1;  
                echo ("Aparcado coche $la_plaza <br>" ); 
                redirigir();
                return;
            } 
        }

        //ejecuta esto si ya no hay plazas en 0        
        aparca_grande("pequeño");            
    }

    function redirigir(){
        header("Refresh: 3; url=" . "../actividad2.php");
    }

    // function ver_plazas(){
    //     $libres=14;
    //     var_dump($_SESSION['gran']);
    //     echo "<br>";
    //     var_dump($_SESSION['peq']);
    //     echo "<br>";
        
    //     foreach ($_SESSION['peq'] as $indice => $valor) {
    //         $libres -= $valor;
    //     }
    //     if($libres == 0){
    //         echo "Ocupadas";
    //     }

    // }

    // if($plaza == "g"){
    //     foreach ($_SESSION['gran'] as $indice => $valor) {
    //         echo $valor;
    //     }

    // }else{
    //     foreach ($_SESSION['peq'] as $indice => $valor) {
    //         echo $valor;
    //     }
    // }

?>