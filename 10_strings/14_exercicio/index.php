<?php


  $str = "carro - navio - helicóptero - barco - jangada";

  $palavras = explode("-", $str);

  print_r($palavras);

  for ($i = 0; $i < count($palavras); $i++) {
    echo "$palavras[$i] <br>";
  }