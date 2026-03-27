<?php

$texto = "O rato roeu a roupa do rei de roma";
$contadorDeAs = 0;


for($i = 0; $i < strlen($texto); $i++) {
  

  if($texto[$i] == "a") {
    $contadorDeAs++;
  }
}
  echo "O número de a's na frase é: $contadorDeAs";


// solução do professor


