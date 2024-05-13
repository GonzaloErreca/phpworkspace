<?php
//Realizar un programa que pregunte un monto de pesos, y un interes mensual, que calcule cuanto es el monto al fin del mes con el interese aplicado.

    $monto = readline("ingrese el valor en pesos: ");
    $interes = readline("ingrese el % de interes mensual: ");
    $saldo = $monto +($monto*($interes/100));
    echo "El saldo a fin de mes es: $saldo";
?>