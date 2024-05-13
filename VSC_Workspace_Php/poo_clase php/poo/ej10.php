<?php

    $datos = ['felipe' => 'Tandil', 
             'luis' => 'Tandil',
             'maria' => 'Necochea'];

    foreach ($datos as $nombre => $ciudad) {
        echo ("La persona de nombre $nombre, vive en la ciudad de $ciudad\n");
    }