<?php
    class Persona {

        public static $miVariableEstatica = 'Variable estatica';
        public function saludar () {
            echo 'Hello World';
        }

        public static function saludoComoMetodoEstatico () {
            // una variable estatica se accede con self:: , no con $this->
            echo 'Hola soy un metodo estatico que no se instancia' . self::$miVariableEstatica;
        }
    }

    class Empleados extends Persona {
        public function saludoEmpleado () {

            // Asi se accede a una variable estatica por medio de herencia
            echo parent::$miVariableEstatica;
        }
    }

    // $persona = new Persona();
    // $persona->saludar();

    // Un metodo estatico no se instancio
    Persona::saludoComoMetodoEstatico();
    Persona::$miVariableEstatica;