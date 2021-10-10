<?php
    $tabla = 12;
    $numero = 10;
    $contador =  1;

    do {
        echo $numero . 'X' . $contador . ' = ' . ( $numero * $contador ) . '<br>';  
        $contador ++;
    } while ( $contador <= $tabla );