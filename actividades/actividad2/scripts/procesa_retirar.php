<?php
    session_start();
    echo $_POST['plaza'];

    $tipo = $_POST['coche'];

    if(!empty($_POST['plaza'])){
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
        }else{
            echo "Numero de plaza inexistente";
        }

    }

?>