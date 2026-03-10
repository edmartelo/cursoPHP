<?php

  if(10 > 2) {
    echo "entrou no primeiro if <br>";

    if("teste" == "teste") {
      echo "entrou no segundo if <br>";
    }
  }

  $escopo = 10;

  if(10 > 2) {

    echo "Entrou no primeiro if <br>";

    $escopo2 = 20;

    if("teste" == "teste") {
      echo "Entrou no segundo if <br>";
      echo "$escopo <br>";
      echo $escopo2;
    } else {
      echo "entrou no segundo else";
    }

  } else {
    echo "entrou no primeiro else";
  }