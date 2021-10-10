<?php
    // Funcionan igual o con el mismo comportamiento que las interfaces pero con la diferencia que
    // Las clases abstractas encapsulan metodos u variables
    // tambien permite que los metodo lleven su codigo o procedimiento, en las interfaces no se puede
    abstract class Abstraccion {
        abstract protected function metodoAbstractoUno ();
        abstract public function metodoAbstractodos ( $valor );

        public function ImprimirValorMetodoAbstractorDos () {
            echo $this->metodoAbstractoUno();
        }
    }

    class MiClase extends Abstraccion {
        protected function metodoAbstractoUno() {
            echo 'Soy el metodo abstracto uno y debo ir obligatoriamente en la clase MiClase';
        }

        public function metodoAbstractodos($valor) {
            return 'El valor a imprimir es -> ' . $valor;
        }

        public function ImprimirValorMetodoAbstractorDos() {
            
        }
    }

    $miClase = new MiClase();

    $miClase->ImprimirValorMetodoAbstractorDos();
    echo $miClase->metodoAbstractodos( 'Hellooo Perroooooo' );