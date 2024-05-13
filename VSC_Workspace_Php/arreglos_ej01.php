Realice un programa que solicite la carga un arreglo de 10 elemento
<?php
$arreglo=[];
echo "ingrese 10 elementos que quiera agregar al arreglo: ";
for ($i = 0 ; $i<=10; $i++) {
    $arreglo[$i] = trim(fgets(STDIN));;
}
?>