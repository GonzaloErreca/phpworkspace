<?php

    $menu = [
                "0-salir", 
                "1-Sumar", 
                "2-Restar", 
                "3-Nuevo cliente",
                "4-Listar clientes"];

    do {

        foreach ($menu as $menuOpcion) {
            echo $menuOpcion;
            echo "\n";
        }
        
        echo "Elija una opcion:";
        $opcion = trim(fgets(STDIN));
        echo "Tu opcion es $dato\n";    
    
    } while ($opcion != 0);

    