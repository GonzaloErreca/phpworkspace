Realizar un programa que permita calcular el volumen de un silo de base circular,
 preguntando al usuario, el diametro y la altura
 
 <?php
   function volumenSilo($diametro, $altura) {
    $radio= $diametro/2;
    $volumen = pi() * pow($radio,2) * $altura;
    return $volumen;
   }

   $diametro = readline('Ingrese el diametro del silo en metros ');
    $altura = readline("Ingrese la altura del silo en metros ");
   
    $volumen=volumenSilo($diametro,$altura);

    echo "El volumen del silo es: $volumen metros cubicos\n ";
 ?>