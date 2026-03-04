<?php

  $carro = [
    'marca' => 'Fiat',
    'modelo' => 'Palio',
    'ano' => '2010',
    'cor' => 'prata'
  ];

  echo $carro ['marca'];
  echo "<br>";

  echo $carro ['ano'];
  echo "<br>";

  echo $carro ['cor'];
  echo "<br>";

  //criando variáveis a partir do array
  $marca = $carro['marca'];
  $modelo = $carro['modelo'];
  $ano = $carro['ano'];
  $cor = $carro['cor'];

  echo "<br>";

  echo "o Carro é da marca $marca, modelo $modelo, fabricado no ano de $ano e na cor $cor!"

?>