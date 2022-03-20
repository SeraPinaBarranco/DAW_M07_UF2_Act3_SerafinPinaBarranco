<?php
    require_once("futbolista.php");

    class Campo extends Futbolista{
        private $pases;
        private $recuperaciones;
        private $puntos;

        public function __construct($nombre, $dorsal, $goles, $pases, $recuperaciones, $puntos)
        {
            parent::__construct($nombre, $dorsal, $goles);
            $this->pases = $pases;
            $this->recuperaciones= $recuperaciones;
        }

        public function get_pases()
        {
            return $this->pases;
        }

        public function set_pases($pases)
        {
            $this->pases = $pases;
        }

        
        public function get_recuperaciones()
        {
            return $this->recuperaciones;
        }

        public function set_recuperaciones($recuperaciones)
        {
            $this->pases = $recuperaciones;
        }

        public function __toString()
        {
            return parent::__toString() . " --- Pases: $this->pases --- Recuperaciones: $this->recuperaciones";
        }

        
        public function set_puntos($p)
        {
            $this->puntos = ($this->pases * 2) + ($this->recuperaciones * 3) + ($this->goles * 30);
           
        }
    }
    

?>