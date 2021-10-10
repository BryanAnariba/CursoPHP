<?php
    require_once ( './classes/Persona.php' );
    require_once ( './classes/Peruano.php' );
    require_once ( './classes/Chileno.php' );

    $persona = new Persona( 'Bryan Ariel', 'Sanchez Anariba', 22 );
    $persona2 = new Persona( 'Maria Fernanda', 'Sanchez Anariba', 22 );

    $persona->setNombreMayusculas( 'Bryan Ariel' );
    $persona->setApellidoPersona( 'Sanchez Anariba' );
    $persona->setEdadPersona( 24 );

    
    $persona2->setNombreMinusculas( 'MARIA FERNANDA' );
    $persona2->setApellidoPersona( 'Sanchez Anariba' );
    $persona2->setEdadPersona( 26 );

    echo 'Nombre persona uno -> ' . $persona->getNombrePersona() . '<br>';
    echo 'Nombre persona dos -> ' . $persona2->getNombrePersona() . '<br>';

    // Aplicando clases en los archivos Peruano y Chileno
    $peruano = new Peruano( 'Nombre peruano', 'Apellido Peruano', 22 );
    $Chileno = new Chileno( 'Nombre Chileno', 'Apellido Chileno', 25 );

    echo 'Nombre persona peruano -> ' . $peruano->getNombrePersona() . '<br>';
    echo 'Nombre persona chileno -> ' . $Chileno->getNombrePersona() . '<br>';
