<?php

$frase = "TEstando o array";

$fraseSeparada = explode(" ", $frase);

print_r($fraseSeparada);
echo "<br";


$fraseSeparada2 = explode(",", $frase);


print_r($fraseSeparada2);
echo "<br>";

$fraseB = "Carro, Moto, Avião, Casa";
$fraseBArray = explode(",", $fraseB);

print_r($fraseBArray);
echo "<br>";


for ($i = 0; $i < count($fraseBArray); $i++) {
  echo "$fraseBArray[$i] <br>";
}