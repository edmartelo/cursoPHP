<?php

$arr = range(1, 20);

print_r(array_chunk($arr, 4)); // Array dividido em 5 partes
echo '<br>';
echo '<br>';

$arr2 = array_chunk($arr, 10); // Array dividido em 2 partes
print_r($arr2[1]); // pegando a segunda parte do array, pois a primeira está alocada em [0]
echo '<br>';
echo '<br>';
