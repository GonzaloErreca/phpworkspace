<?php
$arreglo=[];

for ($i=0; $i<10; $i++) {
    $arreglo[$i] = rand(1,100);
}

for ($i=0; $i<10; $i++) {
    echo $arreglo[$i];
    if ($i<9) {
        echo " , ";
    }
}

?>