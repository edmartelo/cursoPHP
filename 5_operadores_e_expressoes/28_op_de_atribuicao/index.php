<?php

  // +=

  $a = 0;
  $a += 10; // $a = $a _ 10

  echo $a . "<br>";

  // -=
  $b = 0;
  $b -= 5; // $b = $b -5

  echo $b . "<br>";

  //*=
  $c = 5;
  $c *= 2; // $c = $c * 2

  echo $c . "<br>";

  $d = 5;
  $d /= 2;

  echo (float) $d; //$d = $d / 2

  if($d === 2.5) {
    echo " é float <br>";
  }

    $e = 5;
    $e %= 2;

    echo $e; //$e = $e % 2

    // Todos esses operadores podem ser usados também apenas com variáveis, além do hard code