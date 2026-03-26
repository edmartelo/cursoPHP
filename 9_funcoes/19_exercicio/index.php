<?php

function isPrime($numero) {
    // Caso o número fornecido seja menor que 2, não é primo
    if ($numero < 2) {
        return false;
    }

    // Calcula a raiz quadrada do número para otimizar o laço
    // Não precisamos testar números maiores que a raiz quadrada
    $limite = sqrt($numero);

    // Percorre os números de 2 até a raiz quadrada
    for ($i = 2; $i <= $limite; $i++) {
        
        // Verifica se $i é um divisor do número (resto da divisão é zero)
        if ($numero % $i == 0) {
            return false; // Se encontrou um divisor, não é primo
        }
    }

    // Se o laço terminar e não encontrar nenhum divisor, o número é primo
    return true;
}

// Testando a função com alguns exemplos:

$testes = [1, 2, 3, 4, 17, 25, 97];

foreach ($testes as $teste) {
    // Usamos um operador ternário ( ? : ) para imprimir Sim ou Não
    $resultado = isPrime($teste) ? "Sim" : "Não";
    echo "O número $teste é primo? $resultado <br>";
}

/*
Resultado esperado:
O número 1 é primo? Não
O número 2 é primo? Sim
O número 3 é primo? Sim
O número 4 é primo? Não
O número 17 é primo? Sim
O número 25 é primo? Não
O número 97 é primo? Sim
*/

?>