<?php
function bubbleSort($array) {

    $n = count($array);

    for ($i = 0; $i < $n - 1; $i++) {

        for ($j = 0; $j < $n - $i - 1; $j++) {

            if ($array[$j] > $array[$j + 1]) {
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }
    
    return $array;
}

$lista = [20, 20, -40, 299.99, -49.99, 120,-40, -210.50];

echo "Lista original: "."<br>";
print_r($lista);
echo "<br>";
$listaOrdenada = bubbleSort($lista);
echo "Lista ordenada: " . "<br>";
print_r($listaOrdenada);
?>