<?php

$velocidade = 0;
$velMaxima = 40;

if($velocidade < $velMaxima) {
  echo "Velocidade correta.";
} else if ($velocidade == $velMaxima) {
  echo "Você alcançou a velocidade máxima de $velMaxima, cuidado!";
} else {
  echo "Velocidade acima do permitido!";
}