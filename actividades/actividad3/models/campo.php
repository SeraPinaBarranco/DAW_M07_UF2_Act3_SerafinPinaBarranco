<?php
    require_once("futbolista.php");

    class Campo extends Futbolista{
        private $pases;
        private $recuperaciones;
        private $puntos;

        public function __construct($nombre, $dorsal, $goles, $pases, $recuperaciones)
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
            return parent::__toString() . " --- Puntos: $this->puntos";
        }

        
        public function set_puntos()
        {
            $this->puntos = ($this->pases * 2) + ($this->recuperaciones * 3) + (parent::get_goles() * 30);
           
        }
    }
    

?>