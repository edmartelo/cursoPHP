<?php

// is_int - função para verificar se é inteiro
if(is_int (5)) {
  echo 'inteiro <br>';
}

if(is_int ("5")) {
  echo 'Não inteiro <br>';
}

$a = 11;
if(is_int ($a)) {
  echo 'inteiro <br>';
}

?>