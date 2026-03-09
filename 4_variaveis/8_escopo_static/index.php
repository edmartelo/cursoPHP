<?php

  function teste(){

    $a = 0;
    $a++;

    echo "$a <br>";

  }

  teste();
  teste();
  teste();


    function testeStatic(){

    static $a = 0; //static o escopo será mantido e o valor sempre será incrementado ou decrementado;
    $a++;

    echo "$a <br>";

  }

  testeStatic();
  testeStatic();
  testeStatic();