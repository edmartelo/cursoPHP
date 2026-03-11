<?php 

$dados = [1, 2, "Eduardo", 22, "Martelo", 33, "Teste"];

$a = count($dados); // conta quantos itens tem no meu array - no caso 7
$y = 0; // atribui um valor para ter controle do looping

while($y < $a){ // enquanto a posição do dado for menos que a posição total do array, continua rodando o looping
  if(is_string($dados[$y])) { // is_string para verificar o tipo do dado - $dados[$y] acessa o item especifico dentro do array 
    echo $dados[$y] . "<br>";
  }

  $y++; // incrementa até o valor total de itens do array
}


