<?php

  $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15];

  $slice1 = array_slice($arr, 1, 5); // começa do 1 e vai 5 pra frente ( valor 6 )
  print_r($slice1);

  echo "<br>";

  $slice2 = array_slice($arr, 4, 4); // começa no 4 e vai mais 4 pra frente ( valor 8 )
  print_r($slice2);

  echo "<br>";

  $slice3 = array_slice($arr, 4); // começa no 4 e vai até o final ( neste caso, 15 )
  print_r($slice3);

  echo "<br>";

  $slice4 = array_slice($arr, 4, -3); // começa no 4 e tira 3 elementos contado do FINAL do array (neste caso, 12)
  print_r($slice4);

  echo "<br>";