<?php
    function dameFactorial ( $numeroFactorial ) {
        $factorial = 1;
        for ( $i = 1; $i <= $numeroFactorial;  $i++ ) {
            $factorial = $factorial * $i;
        }

        return $factorial;
    }

    $res = dameFactorial( 6 );

    echo "Factorial de 6 => " . $res;