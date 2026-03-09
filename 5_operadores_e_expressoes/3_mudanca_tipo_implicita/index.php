<?php

  echo 5 / 2;
  echo "<br>";

  if(is_float(5/2)) {
    echo "é float <br>";
  }

  $nome = "Eduardo";
  $sobrenome = "Martelo";

  $nomeCompleto = $nome . " " . $sobrenome; // concatenação no php se faz com ponto

  echo $nomeCompleto;