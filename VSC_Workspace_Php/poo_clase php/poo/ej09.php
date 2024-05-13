<?php

    $personas = [
        ['nombre'=>'juan', 'edad'=>'32'],
        ['nombre'=>'maria', 'edad'=>'23'],
        ['nombre' => 'javier'],
        ['nombre'=>'luis', 'edad'=>'43'],
        ['nombre'=>'jose', 'edad'=>'34'],
        
    ];

    foreach($personas as $persona) {
        echo "El nombre es ".$persona['nombre'];

        if (isset($persona['edad'])) {
            echo ". Su edad es ".$persona['edad'];
        }
        echo "\n";
    }