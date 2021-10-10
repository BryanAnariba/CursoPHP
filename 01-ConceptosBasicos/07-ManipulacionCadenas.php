<?php
    $miCadena = 'Hola Mundo';

    echo strlen( $miCadena );
    echo '<br>';
    
    echo $miCadena[ 6 ];
    echo '<br>';

    // Buscar un caracter en la cadena
    echo strpos( $miCadena, 'M' );

    // Buscar Bryan en la cadena
    $cadena = 'Hello Bryan, how are you';
    echo '<br>';
    echo str_contains( $cadena, 'Bryan' ) ? 'Se encuentra ' : 'No se encuentra';

    // extraer una porcion de la cadena
    echo '<br>';
    echo substr( $cadena, 5, 7 );

    // Reemplazar con strreplace, igual que genexus
    echo '<br>';
    echo str_replace( 'Bryan', 'Loquillo', $cadena );

    // MAYUSCULAS
    echo '<br>';
    echo strtoupper( $cadena );

    // Minusculas
    echo '<br>';
    echo strtolower( $cadena );