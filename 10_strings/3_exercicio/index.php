<?php

  $arr = [
    'porta' => 100,
    'sofa' => 1000,
    'chocolate' => 9,
    'bolacha' => 5,
    'moto' => 33000
  ];

  function itensCaros ($arr) {

    $arrItensCaros = [];

    foreach($arr as $item => $preco) {
      if($preco > 10) {
        array_push($arrItensCaros, $item);
      }
    }
    return $arrItensCaros;
  }

  $novoArr = itensCaros($arr);

  print_r($novoArr);