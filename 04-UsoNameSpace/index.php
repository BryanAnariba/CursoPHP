<?php
    // namespace => es util para usar clases del mismo nombre en php pero diferentes carpetas
    Use Carpeta1\Humano;
    Use Carpeta2\Humano as Human;

    include('./Carpeta2/Humano.php');
    include('./Carpeta1/Humano.php');
    
    $humano = new Humano();
    $humano->saludar();

    $human = new Human();
    $human->saludar();