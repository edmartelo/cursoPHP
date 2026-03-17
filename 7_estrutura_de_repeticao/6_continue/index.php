<?php

$a = 10;

while ($a > 0) {
  
if($a == 5 || $a == 7) {
    echo "pulou $a <br>";
    $a--;
    continue;
  }

  if($a == 2) {
    echo "terminando o loop break $a <br>";
    break;
  }

echo "Executando loop $a <br>";
$a--;
}