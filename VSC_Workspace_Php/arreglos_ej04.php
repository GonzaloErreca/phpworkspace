Realizar un programa que permita recircular un arreglo, esto es tomar el ultimo e
 insertarlo al principio, una dada cantidad de veces
 
 <?php
 function mostrar_arreglo($arreglo, $n) {
    for ($i=0; $i<$n; $i++) {
        echo $arreglo[$i];
        if ($i<$n-1){
            echo ", ";
        };
    }
}
////////////////////////////////
 function arreglo_random ($n) {

    $arreglo=[];
    for ($i=0; $i<$n; $i++) {
        $arreglo[$i]=rand(0,100);
    }
    return $arreglo;
    }
/////////
function recircular($arr,$cant){
    for ($i=0; $i<$cant; $i++) {
        $aux=$arr[count($arr)-1];
        for ($j=count($arr)-1; $j>0; $j--) {
            $arr[$j]=$arr[$j-1];
        }
        $arr[0]=$aux;
    }
    return $arr;
}
/////////********************************** //////

echo "Ingrese la cantidad de veces";
 $cant=trim(fgets(STDIN));
$arreglo=arreglo_random(10);
mostrar_arreglo($arreglo, count($arreglo));

///////
echo "\n";
$arreglo=recircular($arreglo, $cant);

mostrar_arreglo($arreglo, count($arreglo));

 
 ?>