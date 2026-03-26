<?php
function soma($a, $b) {
  // Retorna um array com todos os argumentos: Array ( [0] => 2 [1] => 4 )
  print_r(func_get_args()); 

  echo "<br>";
  echo func_num_args() . " é o total de argumentos <br>";

  return $a + $b;
}

soma(2, 4);
?>