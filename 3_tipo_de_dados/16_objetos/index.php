<?php

  class Pessoa {

    function falar() {
      echo "Olá pessoal!";
    }

  }

  $eduardo = new Pessoa();

  $eduardo->nome = "Eduardo";

  echo $eduardo->nome;

  echo "<br>";

  $eduardo->falar();

?>