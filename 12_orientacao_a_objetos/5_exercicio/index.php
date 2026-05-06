<?php

class Cachorro {
  function latir() {
    echo "Latiu <br>";
  }

  function andar($m) {
    echo "Andou $m metros";
  }
}


$cachorro1 = new Cachorro;
$cachorro2 = new Cachorro;

$cachorro1->latir();
$cachorro2->andar(3);

