<?php

  $str = "teste";
  $numI = 12;
  $numF = 1.5;


if(is_string($str)) {
  echo "$str => É uma string <br>";
} else {
  echo "$str => não é uma string <br>";
}

if (is_int($numI)) {
  echo "$numI => é um número inteiro  <br>";
} else {
  echo "$numI => não é um número inteiro <br>";
}

if (is_float($numF)) {
  echo "$numF => é um número float  <br>";
} else {
  echo "$numF => não é um número float <br>";
}

?>