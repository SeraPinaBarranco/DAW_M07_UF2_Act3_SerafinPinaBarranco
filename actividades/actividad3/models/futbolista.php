<?php
    class Futbolista{

        private $nombre;
        private $dorsal;
        private $goles;
        

        function __construct($nombre, $dorsal, $goles){
            $this->nombre = $nombre;
            $this->dorsal = $dorsal;
            $this->goles = $goles;        
        }

        public function get_nombre()
        {
            return $this->nombre;
        }

        public function set_nombre($nombre)
        {
            $this->nombre = $nombre;
        }

        public function get_dorsal()
        {
            return $this->dorsal;
        }

        public function set_dorsal($dorsal)
        {
            $this->dorsal = $dorsal;
        }

        public function get_goles()
        {
            return $this->goles;
        }

        public function set_goles($goles)
        {
            $this->goles = $goles;
        }

        public function __toString()
        {
            return "Nombre: $this->nombre --- Dorsal: $this->dorsal --- Goles: $this->goles ";
        }


    }
?>