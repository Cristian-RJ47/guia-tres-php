<?php
function insertionSortNames(&$array) {
    $length = count($array);

    for ($i = 1; $i < $length; $i++) {
        
        $key = $array[$i];
        $j = $i - 1;

        while ($j >= 0 && strcmp($array[$j], $key) > 0) {
            $array[$j + 1] = $array[$j];
            $j--;
        }

        $array[$j + 1] = $key;
    }
}

$names = ["Carla", "Anastacio", "Pedro", "Juan", "Karla", "Luis", "Maria"];
echo "Lista original: " . implode(", ", $names) . "<br>";
insertionSortNames($names);
echo "Lista ordenada: " . implode(", ", $names) . "<br>";
?>