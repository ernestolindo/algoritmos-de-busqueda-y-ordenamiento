<?php
function quickSort(array $array): array
{
    if (count($array) < 2) { // Paso 1: Caso base
        return $array;
    }

    $pivot = $array[0]; // Paso 2: Elegir un pivote

    // Paso 3: Crear las sublistas
    $left = array_values(array_filter(array_slice($array, 1), fn($x) => $x <= $pivot));
    $right = array_values(array_filter(array_slice($array, 1), fn($x) => $x > $pivot));


    // Paso 4: Ordenar las sublistas recursivamente y combinarlas
    return array_merge(quickSort($left), [$pivot], quickSort($right));
}

// Prueba
$data = [33, 10, 59, 27, 41, 2, 17];
$sortedData = quickSort($data);

echo "Original: " . implode(", ", $data) . "\n";
echo "<br>";
echo "Ordenado: " . implode(", ", $sortedData) . PHP_EOL;
