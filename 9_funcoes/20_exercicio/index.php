<?php

function sumDigits($numero) {
    // 1. Usamos abs() para garantir que o número seja positivo (ex: -123 vira 123)
    // 2. Convertemos o número para uma string (texto) para acessar cada dígito separadamente
    $numeroTexto = (string) abs($numero);
    
    // Variável para acumular a soma
    $soma = 0;
    
    // Descobre a quantidade de dígitos
    $tamanho = strlen($numeroTexto);

    // Estrutura de repetição para percorrer cada dígito
    for ($i = 0; $i < $tamanho; $i++) {
        // Pega o dígito atual, converte de volta para número (int) e soma
        $soma += (int) $numeroTexto[$i];
    }

    // Retorna o valor da soma
    return $soma;
}

// Testando a função:
echo sumDigits(123); 
// Resultado: 6 (pois 1 + 2 + 3 = 6)

echo "<br>";

echo sumDigits(9045); 
// Resultado: 18 (pois 9 + 0 + 4 + 5 = 18)

echo "<br>";

echo sumDigits(-45); 
// Resultado: 9 (o sinal de menos é ignorado, 4 + 5 = 9)

?>