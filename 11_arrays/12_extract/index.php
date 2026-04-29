<?php

  $arr = [
    'cor' => 'vermelhor',
    'forma' => 'retangular',
    'material' => 'aço'
  ];

  extract($arr);

  echo "$cor <br>";
  echo "$forma <br>";
  echo "$material <br>";

