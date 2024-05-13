<?php
// 2. Realice un programa que solicite base y altura y calcule la superficie de un triángul
    echo "Ingrese la BASE: ";
    $base=trim(fgets(STDIN));
    echo "Ingrese la ALTURA: ";
    $altura=trim(fgets(STDIN));
    $area=($base*$altura)/2;
    echo "El area del triangulo es: $area ";
?>