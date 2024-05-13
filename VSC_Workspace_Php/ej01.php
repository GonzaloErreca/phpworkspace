<?php
//1. Realice un programa que pida dos valores, los intercambie y los muestr
echo "ingrese un valor: ";
 $x = trim(fgets(STDIN));
 echo "ingrese otro valor: ";
 $y = trim(fgets(STDIN));
 echo "la variable X es: ". $x ." \n";
 echo "la variable Y es: ". $y ." \n";
 $aux=$x;
 $x=$y;
 $y=$aux;
 echo "Ahora la variable X es: ". $x ." \n";
 echo "Ahora la variable Y es: ". $y ." \n";
 ?>