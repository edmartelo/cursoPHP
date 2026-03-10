<?php

  if(12 < 5 || "joão" === "joão") { // false e true
    echo "Operação verdadeira <br>";
  }

  if(1 > 5 || 1) { // false e true
    echo "Operação verdadeira <br>";
  }

  if(20 === "20" && 51 >= 31) {
    echo "Operação verdadeira <br>";
  } else {
    echo "Operação falsa <br>";
  }

  if(20 == "20" && 51 >= 31) {
    echo "Operação verdadeira <br>";
  } else {
    echo "Operação falsa";
  }

