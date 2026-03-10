<?php

  $a = (string) "testando";

  if($a === "testando") {
    echo "$a é uma string <br>";
  }

  $b = (float) 12.9;

  if($b === 12.9) {
    echo "$b é um float <br>";
  }

  $c = (int) true;
  echo $c . "<br>";

  $d = (int) [1, 2, 3];
  echo $d;