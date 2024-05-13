Sobre un arreglo de 10 elementos realizar la inversión de sus elementos
<?php
function arreglo_random ($n) {

$arreglo=[];
for ($i=0; $i<$n; $i++) {
    $arreglo[$i]=rand(0,100);
}
return $arreglo;
}
//**************************************
function mostrar_arreglo($arreglo, $n) {
    for ($i=0; $i<$n; $i++) {
        echo $arreglo[$i];
        if ($i<$n-1){
            echo ", ";
        };
    }
}
//*************************************

function invertir_arreglo($arreglo,$n) {
    $inv=$n-1;
    $aux=[];
for ($i=0; $i<$n; $i++) {
        $aux[$inv]=$arreglo[$i];
        $inv--;
    }
    return $aux;
}
/////////////////////////////////////////////////////////////


//Generamos el arreglo
$arr=arreglo_random(10);
mostrar_arreglo($arr,10);

echo "\n ahora invertimos el arreglo y queda asi: \n";

$arr=invertir_arreglo($arr,10);
mostrar_arreglo($arr,10);
?>