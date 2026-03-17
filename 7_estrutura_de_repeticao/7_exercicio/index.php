<?php

$a = 0;

while($a < 100) {

  echo "loop $a <br>";

  if($a == 30 || $a == 40){
    echo "pulou $a <br>";
    $a += 10;
    continue;
  }

  $a += 10;

}

echo "<br>";
echo "<br>";

$arr = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];

$i = 0;

while($i < count($arr)) {
 

  $numAtual = $arr[$i];

  if($numAtual == 30 || $numAtual == 40) {
    $i++;
    continue;
  }
  echo "elemento $numAtual <br>";


  $i++;
}