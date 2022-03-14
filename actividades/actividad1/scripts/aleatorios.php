<?php       
        session_start();     
        $num;

        $numero_input= $_POST['numero'];
        
        //Si la variable de sesion existe, la almacena en $num
        if(isset($_SESSION['aleatorio'])){
            $num =  $_SESSION['aleatorio'];
            echo "existe";
        }else{
            $_SESSION['aleatorio'] = genera_aleatorio();
            $num= $_SESSION['aleatorio'];
            echo "no existe";
        }
    
        if($numero_input < $num){
            echo("<p> El número que buscas es mayor que $numero_input ($num)</p>");            
        }elseif ($numero_input > $num) {
             echo("<p> El número que buscas es menor que $numero_input ($num)</p>");
        }else{
            echo "<p>HAS ACERTADO, $num!!!</p>";

            $_SESSION = array();//deja el array de sesion vacio
            session_destroy();//elimina la sesion
        }

        atras();
        
        function atras(){            
            header("Refresh: 4; url=" . $_SERVER['HTTP_REFERER']);
        }

        function genera_aleatorio(){        
            return rand(0, 100);   
        }

        
    ?>