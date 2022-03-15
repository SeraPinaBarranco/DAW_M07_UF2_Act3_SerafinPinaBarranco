<?php
    session_start();

    $plaza = $_POST['coche'];

    
    if($plaza == "g"){//si el coche es grande, aparcara en plaza grande
        aparca_grande($plaza);
        ver_plazas();
    }elseif ($plaza == "p") {//si es pequeño, aparcara en plaza pequeña
        aparca_peq($plaza);
        ver_plazas();
    }


    function aparca_grande($la_plaza){        
        foreach ($_SESSION['gran'] as $indice => $valor) {
            if($valor == 0){              
                $_SESSION['gran'][$indice] = 1; 
                echo ("Aparcado $la_plaza <br>" ); 
                break;
            }
        }        
    }

    function aparca_peq($la_plaza){
        $la_plaza == "pequeno";
        foreach ($_SESSION['peq'] as $indice => $valor) {
            if($valor == 0){    //busca si quedan plazas pequeñas          
                $_SESSION['peq'][$indice] = 1;  
               
                break;
            } 
        }

        //Si se ha llenado el array de plazas pequeñas, ira a aparcar en las grandes
        //if(array_search(0,$_SESSION['peq'],false) < 0){
            //echo "Plazas pequeñas llenas";
        //}
      
    }

    function ver_plazas(){
        $libres=14;
        var_dump($_SESSION['gran']);
        echo "<br>";
        var_dump($_SESSION['peq']);
        echo "<br>";
        
        foreach ($_SESSION['peq'] as $indice => $valor) {
            $libres -= $valor;
        }
        if($libres == 0){
            echo "Ocupadas";
        }

    }

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