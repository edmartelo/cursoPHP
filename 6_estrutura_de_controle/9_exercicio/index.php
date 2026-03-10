<?php

  $a = 51;
  $c = "Eduardo";
  $d = "Martelo";

  if (is_int($a) || is_float($a)) {
    $b = $a * 2;
    echo "$b variável B <br>";

    if ($b > 100) {
      echo "A variável $b é maior do que 100";
    } else {
      echo "A variável $b não é maior do que 100";
    }

  } else {
    echo "$a Não é um número";
  }