<?php

$str = "Esta string é muito grande e contém vários caracteres";

for ($i = 0; $i < strlen($str); $i++){
  echo "$str[$i] <br>";
}