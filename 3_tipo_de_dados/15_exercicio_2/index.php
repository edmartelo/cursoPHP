<?php 

  $pessoa = [
    'nome' => 'Eduardo',
    'sobrenome' => 'Martelo',
    'idade' => '18',
  ];

  echo 'Dados brutos';
  echo '<br>';
  print_r($pessoa);
  
  echo '<br>';
  echo '<br>';


  //variáveis para exibição amigável
  $nome = $pessoa['nome'];
  $sobrenome = $pessoa['sobrenome'];
  $idade = $pessoa['idade'];

  echo "Nome: $nome <br> Sobrenome: $sobrenome <br> Idade: $idade <br>";

  if($idade >= 18) { //Ou if(pessoa['idade'] >= 18) caso não seja declarada variável e queira pegar a informação direto do array
    echo "Maior de idade";
  } else {
    echo "Menor de idade";
  }

?>