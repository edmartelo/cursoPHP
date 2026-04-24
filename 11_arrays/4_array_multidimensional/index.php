<?php

$arr = [
  [1, 2, 3],
  [4, 5, 6]
];

print_r ($arr);
echo "<br>";

echo($arr[1][1]) . "<br>"; //acessando primeiro array e segundo elemento

echo count($arr) . '<br>'; //quantidade de arrays
echo count($arr[0]); //quantidade de elementos do primeiro array