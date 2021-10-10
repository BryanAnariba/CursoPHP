<?php

    // -------------------------------------- Ejemplo Interfaz
    interface ITemplate {
        public function setVariable( $miVariable );
        public function getHtml();
    }

    class Template implements ITemplate {
        // Si se implementa la interface, debe llevar los metodos de ITemplate obligatoriamente

        public function setVariable( $miVariable )
        {
            
        }

        public function  getHtml()
        {
            
        }
    }

    // -----------------------------------------Herencia entre interfaces y Herencia Multiple
    interface IA {
        public function soyUnMetodoDeA ();
    }

    interface IB extends IA {
        public function soyUnMetodoDeB ();
    }

    interface IC extends IA,IB {
        public function soyUnMetodoDeC ();
    }

    class claseQueContiene_A_B implements IC {
        
        public function soyUnMetodoDeA (){

        }

        public function soyUnMetodoDeB () {

        }

        public function soyUnMetodoDeC () {

        }

        public function nuevoMetodo () {

        }

    }