<?php


    $menu = [
        "salir", 
        "Sumar", 
        "Restar", 
        "Nuevo cliente",
        "Listar clientes"];

do {

foreach ($menu as $menuOpcion => $menuTexto) {
    echo "\033[31m$menuOpcion";
    echo "\033[0m - $menuTexto";
    echo "\n";
}

echo "Elija una opcion:";
$opcion = trim(fgets(STDIN));
echo "Tu opcion es $dato\n";    

} while ($opcion != 0);