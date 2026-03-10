<?php

  // insira o valor 5 em uma variável e o valor 3 em outra;
  // Teste os operadores de: igualdade ==, diferença !=, idêntico === e não idêntico !==

  $a = 5;
  $b = 5;

  if($a == $b) {
    echo "$a é igual a $b <br>";
  } else {
    echo "$a é diferente de $b <br>";
  }

  if($a != $b) {
    echo "$a é diferente de $b <br>";
  } else {
    echo "$a é igual a $b <br>";
  }

  if($a === $b) {
    echo "$a é idêntico a $b <br>";
  } else {
    echo "$a não é idêndico $b <br>";
  }

  if($a !== $b) {
    echo "$a não é idêntico a $b <br>";
  } else {
    echo "$a é idêntico a $b <br>";
  }