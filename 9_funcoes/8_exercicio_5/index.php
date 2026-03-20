<?php

  function verificarNumero ($num) {
    if($num % 2 === 0) {
      echo "O número $num é par <br>";
    } else {
      echo "O número $num é ímpar <br>";
    }
  }

  echo verificarNumero(2);
  echo verificarNumero(3);


  // resolução do professor

