Realizar un programa que agregue un valor en forma ordenada
<?php
function insertarOrdenado($arreglo, $valor) {
     if (empty($arreglo) || $valor > end($arreglo)) {
     $arreglo[] = $valor;
     return;
    }

    // Buscamos la posición correcta para insertar el valor
    $posicion = 0;
    for ($i = 0; $i < count($arreglo); $i++) {
        if ($valor <= $arreglo[$i]) {
            $posicion = $i;
            break;
        }
    }

    // Insertamos el valor en la posición correcta
    array_splice($arreglo, $posicion, 0, $valor);
    return $arreglo;
}

// Arreglo inicial
$arreglo = [1, 3, 5, 7, 9];

// Valor a insertar
echo "Ingrese el valor a instertar";
$valor = trim(fgets(STDIN));

// Insertar el valor en el arreglo de forma ordenada
$arreglo = insertarOrdenado($arreglo, $valor);

// Mostrar el arreglo resultante
echo "Arreglo después de insertar $valor de forma ordenada: " . implode(", ", $arreglo) . "\n";
?>
