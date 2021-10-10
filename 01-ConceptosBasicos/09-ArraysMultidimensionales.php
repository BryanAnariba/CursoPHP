<?php
    $arregloAsocc = [
        [
            'nombrePersona' => 'Bryan Ariel',
            'apellidoPersona' => 'Sanchez Anariba',
            'edad' => 24,
            'role' => 'Analista Programados',
            'direccion' => [
                'pais' => 'Honduras',
                'ciudad' => 'Comayagua',
                'municipio' => 'Comayagua',
                'colonia' => 'Vistas del valle'
            ]
        ],
        [
            'nombrePersona' => 'Erick David',
            'apellidoPersona' => 'Sanchez Anariba',
            'edad' => 25,
            'role' => 'Analista Programador',
            'direccion' => [
                'pais' => 'Honduras',
                'ciudad' => 'Comayagua',
                'municipio' => 'Comayagua',
                'colonia' => 'Vistas del valle casa #7'
            ]
        ]
    ];

    echo strtoupper( 'Nombre Persona => ' . $arregloAsocc[0]['nombrePersona'] );
    echo '<br>';
    echo strtoupper( 'Direccion Colonia => ' . $arregloAsocc[0]['direccion']['colonia'] );
    echo '<br>';

    foreach ( $arregloAsocc as $persona ) {
        echo $persona['nombrePersona'] . '<br>';
        echo $persona['apellidoPersona'] . '<br>';
        echo $persona['edad'] . '<br>';
        echo $persona['role'] . '<br>';
        echo $persona['direccion']['pais'] . '<br>';
        echo $persona['direccion']['ciudad'] . '<br>';
        echo $persona['direccion']['municipio'] . '<br>';
        echo $persona['direccion']['colonia'] . '<br>';
        echo '<hr>';
    }