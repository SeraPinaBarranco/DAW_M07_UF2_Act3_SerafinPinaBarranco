<?php
    require_once("futbolista.php");
    class Portero extends Futbolista{
        private $paradas;
        private $goles;
        private $puntos;

        public function __construct($nombre, $dorsal, $goles, $paradas, $puntos)
        {
            parent::__construct($nombre, $dorsal, $goles);
            $this->paradas = $paradas;
        }

        public function get_paradas()
        {
            return $this->paradas;
        }

        public function set_paradas($paradas)
        {
            $this->paradas = $paradas;
        }

        public function get_goles()
        {
            return $this->goles;
        }

        public function set_goles($goles)
        {
            $this->goles = $goles;
        }

        public function set_puntos($p)
        {
            $this->puntos = $this->paradas * 5 + ($this->goles * 30);
           
        }

        public function __toString()
        {
            return parent::__toString() . " --- Paradas: $this->paradas --- Puntuación: $this->puntos";
        }



    }

?>                                         