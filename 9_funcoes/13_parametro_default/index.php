<?php


  function teste($a = "teste") {
    echo "O valor de A é: $a <br>";
  }

  teste();
  teste("asd");
  
  // inserir argumentos default por ultimo é uma boa prática
  function testando($b, $a = "x") {
    echo "O valor de a é: $a e o valor de b é: $b <br>";
  }

  testando("1");
  testando("1", "2");