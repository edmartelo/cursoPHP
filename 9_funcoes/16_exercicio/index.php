<?php

function countVowels($texto) {
  // Variável para armazenar o contador de vogais
  $contador = 0;

  // Converte todo o texto para minúsculo para facilitar a verificação
  $textoMinusculo = strtolower($texto);

  $vogais = ["a", "e", "i", "o", "u"];

  // Descobre o tamanho da string para saber até onde o laço deve ir

  $tamanhoDaString = strlen($textoMinusculo);

  // Estrutura de repetição
  for ($i = 0; $i < $tamanhoDaString; $i++) {

    // Pega a letra na posição atual do laço ($i)
    $letraAtual = $textoMinusculo[$i];

      // Verifica se a letra atual está dentro do array de vogais
      if (in_array($letraAtual, $vogais)) {
          $contador++; // Se for vogal, adiciona 1 ao contador
      }

  }

  // Retorna a quantidade total
  return $contador;

}

// Testando a função:
echo countVowels("Ola Mundo"); 
// Resultado: 4 (o, a, u, o)

echo "<br>";

echo countVowels("Programacao PHP"); 
// Resultado: 5 (o, a, a, a, o,  - o PHP não tem vogais)

?>