<?php
    $tabla = 12;
    $numero = 10;
    $contador =  1;

    while ( $contador <= $tabla ) {
        echo $numero . 'X' . $contador . ' = ' . ( $numero * $contador ) . '<br>';  
        $contador ++;
    }