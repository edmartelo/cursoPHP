<?php

  $teste = "asd";

  echo "$teste global 1 <br>";

  if (true) {

    $teste = "dsa";

  echo "$teste test if <br>";

  }

  echo "$teste global 2 <br>";

  
  
  // apenas variáveis dentro de funções não acessam variáveis globais, porém existe a instrução 'global' para realizar o acesso

  function teste() {

    $teste = "teste function <br>";

    echo "$teste variável na function <br>";


  }

  teste();

  function testandoGlobal() {

    global $teste; //para chamar variável global no escopo local
    $teste = "2";

    echo "$teste global função";

  }

  testandoGlobal()
?>