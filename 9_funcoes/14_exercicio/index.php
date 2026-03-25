<?php

function defineCorCarro($cor, $cor2 = "Vermelha") {
  echo "A cor definida do carro é: $cor <br>";
  echo "A cor default do carro é: $cor2 <br>";
}

defineCorCarro("Prata");


echo "<br><br><br>";

################################################################################################


echo "solução do professor <br><hr>";
function defineCorCarro2($cor = "Vermelha") {
  return "A cor do carro é: $cor";
}

$carroVermelho = defineCorCarro2();
echo $carroVermelho . "<br>";

$carroAzul = defineCorCarro2("Azul");
echo $carroAzul;