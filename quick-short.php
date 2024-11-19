<?php
function quickSort(array $array): array {
    // Caso base: si el array tiene 0 o 1 elemento, ya está ordenado
    if (count($array) < 2) {
        return $array;
    }
    
    // Elegir el pivote (en este caso, el primer elemento)
    $pivot = $array[0];
    
    // Dividir el array en dos sublistas
    $left = array_filter(array_slice($array, 1), fn($x) => $x <= $pivot);
    $right = array_filter(array_slice($array, 1), fn($x) => $x > $pivot);
    
    // Ordenar recursivamente y combinar
    return array_merge(quickSort($left), [$pivot], quickSort($right));
}

// Prueba
$data = [33, 10, 59, 27, 41, 2, 17];
$sortedData = quickSort($data);

echo "Original: " . implode(", ", $data) . PHP_EOL;
echo "Ordenado: " . implode(", ", $sortedData) . PHP_EOL;
?>