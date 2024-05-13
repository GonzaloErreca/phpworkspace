<?php
// Realice un programa solicite los valores de a, b y c, y que resuelve bhaskara
    $a = readline("Ingrese el valor de a: ");
    $b = readline("Ingrese el valor de b: ");
    $c = readline("Ingrese el valor de c: ");
   
    //calculo de la discriminante
    $resultado_raiz = $b**2 - 4*$a*$c;
    if ($resultado_raiz < 0) {
    echo "La ecuacion no tiene solucion real";
    } else {
        $x1 = (-$b + sqrt($resultado_raiz))/(2*$a);
        $x2 = (-$b - sqrt($resultado_raiz))/(2*$a);
        echo "Las soluciones de la ecuacion son: $x1 y $x2";
    }
?>