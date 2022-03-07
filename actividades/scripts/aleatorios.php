<?php        
        include_once("genera_aleatorio.php");
        $num = -1;

        $numero_input= $_POST['numero'];
        
        //Si la variable de sesion no existe, la crea y la almacena en $num
        if(isset($_SESSION['aleatorio'])){
            $num =  $_SESSION['aleatorio'];
        }else{
        $_SESSION['aleatorio'] = genera_aleatorio();
        $num= $_SESSION['aleatorio'];
        }
    
        echo($_SESSION['aleatorio']);
        if($numero_input < $num){
            echo("El número que buscas es mayor que $numero_input ($num)");            
        }elseif ($numero_input > $num) {
             echo("El número que buscas es menor que $numero_input ($num)");
        }else{
            echo "HAS ACERTADO, $num!!!";
        }
    ?>