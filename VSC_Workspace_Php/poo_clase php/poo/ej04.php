<?php

    $a1 = array();
    $a2 = [];
    $a3 = array('pepe', 12, '2002-01-01', true);
    $a4 = ['pepe', 12, '2002-01-01', true, ['a1', $a1]];

    for ($i = 0; $i < count($a3); $i++) {
        echo ($a3[$i]);
        echo "\n";
    }

    print_r($a3);
    print_r($a4);