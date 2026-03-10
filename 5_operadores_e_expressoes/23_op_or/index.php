<?php

  if(5 > 2 || 3 < 4) { //true e true
    echo "A operação é verdadeira <br>";
  }

  if(5 > 2 || 30 < 4) { //true e false
    echo "A operação é verdadeira <br>";
  }

  if(5 > 20 || 3 < 4) { //false e true
    echo "A operação é verdadeira <br>";
  }

  if(5 > 20 || 30 < 4) { //false e false
    echo "A operação é verdadeira <br>";
  } else {
    echo "A operação é falsa";
  }