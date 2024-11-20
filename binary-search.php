<?php
function binarySearch(array $array, int $target): int
{
    $low = 0;  // Índice inicial del array
    $high = count($array) - 1;  // Índice final del array

    while ($low <= $high) {  // Seguimos buscando mientras haya elementos
        $mid = intdiv($low + $high, 2);  // Encuentra el índice medio

        if ($array[$mid] === $target) {
            return $mid;  // Si encontramos el elemento, devolvemos su posición
        }

        if ($array[$mid] < $target) {
            $low = $mid + 1;  // Si el elemento buscado es mayor, buscamos a la derecha
        } else {
            $high = $mid - 1;  // Si es menor, buscamos a la izquierda
        }
    }

    return -1;  // Si no encontramos el elemento, devolvemos -1
}

// prueba
$data = [1, 3, 5, 7, 9, 11, 13];
$target = 9;

$result = binarySearch($data, $target);
echo $result !== -1 ? "Encontrado en posición $result" : "No encontrado";
