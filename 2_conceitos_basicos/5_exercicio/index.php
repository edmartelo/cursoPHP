<?php

echo 'variáveis comuns <br> <br>';

$nome = 'Eduardo';
$idade = '34';
$endereco = 'Rua Ferrucio Brinatti, 445 <br> Carapicuiba';

echo $nome, '<br>';
echo $idade, '<br>';
echo $endereco, '<br>';



echo '<br><br>';



// array
echo 'arrays <br> <br>';

$dados = [
  $nome = "Eduardo",
  $idade = "34",
  $endereco = "Rua Ferrucio Brinatti, 445 <br> Carapicuiba"
];

foreach ($dados as $dado) {
  echo $dado, "<br>";
}