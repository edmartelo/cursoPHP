<?php

  $pessoa = ["Eduardo", 35, "Analista de testes", "São Paulo"];
  print_r($pessoa);
  echo "<br>";

  list($nome, $idade, $cargo, $cidade) = $pessoa;

  echo "Nome: $nome <br>";
  echo "Idade: $idade <br>";
  echo "Cargo: $cargo <br>";
  echo "Cidade: $cidade <br>";




