<?php
    require_once( 'Persona.php' );

    class Chileno extends Persona {
        protected $comunidad;
        protected $region;

        /**
         * Get the value of comunidad
         */ 
        public function getComunidad()
        {
                return $this->comunidad;
        }

        /**
         * Set the value of comunidad
         *
         * @return  self
         */ 
        public function setComunidad($comunidad)
        {
                $this->comunidad = $comunidad;

                return $this;
        }

        /**
         * Get the value of region
         */ 
        public function getRegion()
        {
                return $this->region;
        }

        /**
         * Set the value of region
         *
         * @return  self
         */ 
        public function setRegion($region)
        {
                $this->region = $region;

                return $this;
        }
    }