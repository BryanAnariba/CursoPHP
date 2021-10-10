<?php
    // Impresion con echo 
    //echo 'Hello World with echo <br>';
    // Impresion con print_F
    //print('Hello World with print');

    $nombrePersona = 'Bryan Ariel';
    $apellidoPersona = 'Sanchez Anariba';

    // Operadores matematicos

    // Unario
    $miVariableNumerica = 9;
    $miVariableNumericaNegativa = -$miVariableNumerica ;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sintaxis Basica</title>
</head>
<body>
    <strong> 
        <?php echo "Hello world"; ?>
    </strong>    

    <p>
        Mi Nombre es: <?php echo $nombrePersona . ' ' . $apellidoPersona; ?>
    </p>

    <p>
        <?php echo $miVariableNumericaNegativa; ?>
    </p>
</body>
</html>