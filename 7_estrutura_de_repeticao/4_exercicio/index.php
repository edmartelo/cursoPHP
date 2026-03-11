<?php

$a = 0;

while ($a < 30) {
  echo "$a <br>"; 
  
  if($a === 24) {
    echo "fim";
    break;
  }
  
  $a += 2;
}

