<?php

    // Los traits permiten o simulan herencia multiple
    class Persona {
        protected $nombre;
        protected $apellido;

        public function __construct( $nombre, $apellido )
        {
            $this->nombre = $nombre;
            $this->apellido = $apellido;
        }
        public function setNombre ( $nombre ) {
            $this->nombre = $nombre;
            
        }

        public function getNombre () {
            return $this->nombre;
        }

        public function setApellido ( $apellido ) {
            $this->apellido = $apellido;
        }

        public function getApellido () {
            return $this->apellido;
        }
    } 

    trait NacionalidadLatinoAmericana {
        public function setNacionalidadLatinoamericana () {
            echo 'Hola Soy Latino';
        }
    }

    trait NacionalidadEuropea {
        public function setNacionalidadEuropea () {
            echo 'Hola Soy Espaniol Tio';
        }
    }

    trait NacionalidadAsiatica {
        public function setNacionalidadAsiatica () {
            echo 'Arigato Gosaimasu';
        }
    }

    trait NacionalidadAfricana {
        public function setNacionalidadAfricana () {
            echo 'ubufuefueosas';
        }
    }

    trait Nacionalidades {
        use 
            NacionalidadLatinoAmericana, 
            NacionalidadEuropea, 
            NacionalidadAsiatica, 
            NacionalidadAfricana;
    }
    class Empleado extends Persona {
        use Nacionalidades;
        protected $DNI;
        public function setDNI ( $DNI ) {
            $this->DNI = $DNI;
        }

        public function getDNI() {
            return $this->DNI;        }
    }


    $empleadoLatino = new Empleado( 'Bryan Ariel', 'Sanchez Anariba' );
    echo 'Nombre -> ' . $empleadoLatino->getNombre() . '<br>';
    $empleadoLatino->setNacionalidadLatinoamericana();