<?php

  $pessoa = [
    'nome' => 'Eduardo',
    'idade' => 35,
    'profissao' => 'QA'
  ];

  $pessoa2 = [
    'nome' => 'Eduardo2',
    'idade' => 36,
    'profissao' => 'QA2'
  ];

  foreach($pessoa as $carac => $value) {
    echo "$carac => $value <br>";
  }

   foreach($pessoa2 as $carac => $value) {
    echo "$carac => $value <br>";
  }