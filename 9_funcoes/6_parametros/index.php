<?php


function velMax($vel) {
  if(is_int($vel)) {
    echo "A velocidade máxima do carro é de $vel km/h <br>";
  } else {
    echo "Insira um número inteiro <br>";
  }
}

echo velMax(200);
echo velMax(300);
echo velMax(400);

// é obrigatório fornecer informações para o parâmetro

$velocidade = 350;

echo velMax($velocidade);


// php ignora parâmetro desnecessário
echo velMax($velocidade , "teste");


// sem parâmetro relevante
echo velMax("teste");



// função com dois parâmetros
function descrAnimal ($nome, $raca) {
  echo "O animal de nome $nome é da raça $raca <br>";
}

echo descrAnimal("bob", "Vira Lata");
echo descrAnimal("Dara", "Doberman");





