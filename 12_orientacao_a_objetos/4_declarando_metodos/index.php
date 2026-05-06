<?php

 class Pessoa {

  function falar() {
    echo "Olá, eu sou um objeto! <br>";
  }

  function soma($x, $y) {
    echo $x + $y . "<br>";
  }

 }

// intancia o objeto
 $eduardo = new Pessoa;

 // chama a função no objeto
 $eduardo->falar();
 $eduardo->falar();

 
 
 
$joao = new Pessoa;
$joao->falar();

$eduardo->soma(20, 20);
$joao->soma(10, 10);