<?php
    class Persona {
        public $nombrePersona;
        public $apellidoPersona;
        public $edadPersona;

        public function __construct( $nombrePersona, $apellidoPersona, $edadPersona ) {
            $this->nombrePersona = $nombrePersona;
            $this->apellidoPersona = $apellidoPersona;
            $this->edadPersona = $edadPersona;
        }
        
        public function getNombrePersona() {
            return $this->nombrePersona;
        }

        public function setNombrePersona( $nombrePersona ) {
            $this->nombrePersona = $nombrePersona;
            return $this;
        }

        public function getApellidoPersona()
        {
            return $this->apellidoPersona;
        }

        public function setApellidoPersona( $apellidoPersona ) {
            $this->apellidoPersona = $apellidoPersona;
            return $this;
        }

        public function getEdadPersona() {
            return $this->edadPersona;
        }
        
        public function setEdadPersona( $edadPersona ) {
            $this->edadPersona = $edadPersona;
            return $this;
        }

        public function setNombreMinusculas ( $nombrePersona ) {
            $this->nombrePersona = strtolower( $nombrePersona );
            return $this->nombrePersona;
        }

        public function setNombreMayusculas ( $nombrePersona ) {
            $this->nombrePersona = strtoupper( $nombrePersona );
            return $this->nombrePersona;
        }
    }