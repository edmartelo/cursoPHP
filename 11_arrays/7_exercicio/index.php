<?php

$carro = ["Jaguar", 3.0, "Azul", 18, "Teto Solar", "Automático"];

print_r($carro);

list($marca, $potência, $cor, $ano, $acessório, $transmissão) = $carro;
echo "<br>";

echo "Marca: $marca <br>";
echo "Potência: $potência <br>";
echo "Cor: $cor <br>";
echo "Ano: $ano <br>";
echo "Acessório: $acessório <br>";
echo "Transmissão: $transmissão <br>";
