<?php
    session_start();
   
    $tipo = $_POST['coche'];
    
    if(!empty($_POST['plaza']) || $_POST['plaza'] === "0"){
       
        $plaza= intval($_POST['plaza']);
        quitar_plaza($tipo, $plaza);
    }else{
        echo "Error! Plaza vacia";
    }
    
  

    function quitar_plaza($tipo_coche, $n_plaza){
        if($tipo_coche == "g" && $n_plaza <= 10){
            if($_SESSION['gran'][$n_plaza] == 0){
                echo "La plaza estaba vacia, seleccione otra";
                
            }else{
                $_SESSION['gran'][$n_plaza] = 0;
                echo ("Coche grande retirado de la plaza $n_plaza");
            }
        }elseif($tipo_coche == "p" && $n_plaza <= 10){
            if($_SESSION['peq'][$n_plaza] == 0){
                echo "La plaza estaba vacia, seleccione otra";
                
            }else{
                $_SESSION['peq'][$n_plaza] = 0;
                echo ("Coche pequeño retirado de la plaza $n_plaza");
            }
        }else{
            echo "Numero de plaza inexistente";
        }
        
        redirigir();
    }

    function redirigir(){
        header("Refresh: 3; url=" . "../actividad2.php");
    }

?>