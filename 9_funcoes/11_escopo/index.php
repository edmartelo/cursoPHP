<?php

$a = 10;
$b = 15;

function testeEscopo() {
  $a = 5;  
  $a++;
  echo "Escopo local $a <br>";

  // usa-se global para pegar variável global, se alterar a variavel dentro da função com global, altera-se automaticamente globalmente
  global $b;
  $b++;
  echo "Escopo global dentro da função: $b <br>";

  static $c = 0;
  $c++;
  echo "Escopo static local $c <br>";

}


echo "Escopo global $a <br>";
echo "Escopo global $b <br>";

testeEscopo();
testeEscopo();


echo "Escopo global 2 $b <br>";
