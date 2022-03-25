<?php       
        session_start();     

        if($_POST['numero']==="0"){
           
            $numero_input= $_POST['numero'];
        }elseif(empty($_POST['numero'])){ 
            atras();
            exit ("El número no puede estar vacio");           
        }else{
            $numero_input= $_POST['numero'];
        }
        
        
        
        //Si la variable de sesion existe, la almacena en $num
        if(isset($_SESSION['aleatorio'])){
            $num =  $_SESSION['aleatorio'];
            
        }else{
            $_SESSION['aleatorio'] = genera_aleatorio();
            $num= $_SESSION['aleatorio'];
            
        }
    
        if($numero_input < $num){
            echo("<h2> El número que buscas es mayor que $numero_input ( El número a buscar es el $num)</h2>");            
        }elseif ($numero_input > $num) {
             echo("<h2> El número que buscas es menor que $numero_input ($num)</h2>");
        }else{
            echo "<h1>HAS ACERTADO, $num!!!</h1>";

            unset($_SESSION['aleatorio']);//deja el array de sesion vacio
            session_unset();
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