<?php

  $arr = [
    'nome' => 'Eduardo',
    'idade' => 35,
    'Cidade' => 'São Paulo'
  ];

  if(array_key_exists('nome', $arr)) {
    echo "A chave existe";
  } else {
    echo "A chave não existe";
  }
