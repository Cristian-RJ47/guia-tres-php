<?php
function mergeSort($array) {

    if (count($array) <= 1) {
        return $array;
    }

    $middle = floor(count($array) / 2);
    $left = mergeSort(array_slice($array, 0, $middle));
    $right = mergeSort(array_slice($array, $middle));

    return merge($left, $right);
}

function merge($left, $right) {

    $result = [];
    $i = 0;
    $j = 0;

    while ($i < count($left) && $j < count($right)) {
        
        if (strcasecmp($left[$i], $right[$j]) <= 0) {
            $result[] = $left[$i];
            $i++;
        } else {
            $result[] = $right[$j];
            $j++;
        }
    }

    while ($i < count($left)) {
        $result[] = $left[$i];
        $i++;
    }
    while ($j < count($right)) {
        $result[] = $right[$j];
        $j++;
    }

    return $result;
}

// Ejemplo de uso
$wordList = ["café", "manzana", "naranjas", "bananas", "pan", "queso", "loroco"];
echo "Lista original: " . implode(", ", $wordList) . "<br>";
$sortedList = mergeSort($wordList);
echo "Lista ordenada: " . implode(", ", $sortedList) . "<br>";
?>