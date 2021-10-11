<?php
    final class Hogar {
        public function saludar () {

            echo 'Welcome';
        }
    }

    // Con final evitamos que la clase padre pueda ser herdada, queda bloqueada
    // class HogarDos extends Hogar {

    // }