<?php

    $colores = ['rojo', 'verde', 'azul'];

    for ($color = 0; $color < count($colores); $color++) {
        $unColor = $colores[$color];

        switch ($unColor) {
            case 'rojo':
                {
                    echo('El color es lindo');
                    echo "\n";
                }
                break;
            case 'verde':
                {
                    echo('El color es feo');
                    echo "\n";
                }
                break;
                
            default:
                {
                    echo('El color no es ni lindo ni feo');
                    echo "\n";
                }
                break;
        }
    }


