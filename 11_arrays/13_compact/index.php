<?php

$marca = "BMW";
$potencia = 3.0;
$tetoSolar = true;
$portas = 4;

$carro = compact("marca", "potencia", "tetoSolar", "portas");

print_r($carro);