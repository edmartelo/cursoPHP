<?php

$a = 1.5;
$b = 2.5;
$c = 1;

if(is_float($a)) {
  echo "$a é float <br>";
}

if(is_float($b)) {
  echo "$b é float <br>";
}

if(is_float($c)) {
  echo "$c é float <br>";
} else {
  echo "$c é um inteiro";
}

?>