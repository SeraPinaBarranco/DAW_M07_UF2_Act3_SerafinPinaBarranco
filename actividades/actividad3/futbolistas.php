<?php
    require "models/portero.php";
    require "models/campo.php";

    // $p1 = new Portero("Buyo", 1, 0, 10);
    // $j1 = new Campo("Zidane", 10, 3, 23, 2, 3);

    // $p1->set_puntos();
    // echo $p1->__toString() . "<br> <br>";

    // $j1->set_puntos();
    // echo $j1->__toString();

    $portero1 = new Portero("Buyo", 1, 0, 10);
    $portero1->set_puntos();

    $campo1 = new Campo("Zidane", 5, 3, 23, 2);
    $campo1->set_puntos();

    $campo2 = new Campo("Messi",10,25,50,1);
    $campo2->set_puntos();

    $portero2 = new Portero("Oblak",13,0,78);
    $portero2->set_puntos();

    $campo3 = new Campo("Casemiro",14,2,33,150);
    $campo3->set_puntos();



    $futbolistas =[
        $portero1,
        $campo1,       
        $campo2,
        $portero2,
        $campo3
    ];
    
    echo ("<h1>Jugadores que se han evaluado</h1>");
    foreach ($futbolistas as $clave => $valor) {
        echo "<h2>". $valor->__toString() ."</h2><br> <br>";

    }

?>