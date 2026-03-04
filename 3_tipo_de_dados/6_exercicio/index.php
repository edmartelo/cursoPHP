<?php

$a = 1.5;
$b = 2.5;
$c = 1;

if(is_float($a)) {
  echo $a;
  echo ' é float <br>';
}

if(is_float($b)) {
  echo $b;
  echo ' é float <br>';
}

if(is_float($c)) {
  echo $c;
  echo ' é float <br>';
} else {
  echo $c;
  echo ' é um inteiro';
}

?>