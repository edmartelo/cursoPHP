<?php 

  $x = 10;
  $y =& $x;

  echo "$x <br>";
  echo "$y <br>";

  $y = 15;

  echo "Atribuição após ref <br>";

  echo "$x <br>";
  echo "$y <br>";

  $x = 20;

  echo "Atribuição após ref 2<br>";

  echo "$x <br>";
  echo "$y <br>";
  echo "<br>";



?>