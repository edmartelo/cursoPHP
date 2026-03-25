<?php

// Crie uma função chamada sumEvenNumbers que recebe um número inteiro positivo como parâmetro.

// A função deve retornar a soma de todos os números pares de 1 até o número fornecido, inclusive.

// Utilize uma estrutura de repetição para percorrer os números e uma variável para acumular a soma.


function contadorPar ($numero){

// onde será depositado o incremento
$soma = 0;

  //contador
  for ($i = 0; $i <= $numero; $i++) {
    if ($i % 2 == 0){
     $soma += $i;
     echo $i . " + ";
    }
  }
  echo " = ";
  return $soma;
}

echo contadorPar(10);