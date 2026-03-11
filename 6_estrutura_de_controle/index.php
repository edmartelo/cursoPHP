<?php



function compararNumeros($a, $b) {
  if($a > $b) {
    return "O primeiro número é maior <br>";
  } else if ($a < $b) {
    return "O segundo é maior <br>";
  } else if ($a == $b) {
    return "Os números são iguais <br>";
  }
}

echo compararNumeros(3, 2);
echo compararNumeros(2, 3);
echo compararNumeros(3, 3);

echo "<br><br><br>";


$idade = 19;
$acesso = true;

function verificarAcesso($idade, $acesso) {
    // 1. Verificamos primeiro se é menor de idade (bloqueio imediato)
    if ($idade < 18) {
        return "Acesso negado. Idade mínima requerida: 18 anos";
    } 
    
    // 2. Se for maior de idade, verificamos a autorização
    if ($acesso === true) {
        return "Acesso autorizado";
    } else {
        return "Acesso negado. Autorização necessária";
    }
}

// Para exibir o resultado do 'return', usamos o echo na chamada:
echo verificarAcesso($idade, $acesso);

echo "<br><br><br>";



$valor = 1000;
$categoria = "vestuario";

function calcularDesconto($valor, $categoria) {
    // Definimos a porcentagem primeiro para não repetir código
    if ($categoria == "eletronico") {
        $porcentagem = 10;
    } else if ($categoria == "vestuario") {
        $porcentagem = 20;
    } else if ($categoria == "alimentos") {
        $porcentagem = 5;
    } else {
        return "Categoria desconhecida ou não tem desconto";
    }

    // Calculamos o desconto e o total uma única vez
    $descontoValor = ($valor * $porcentagem) / 100;
    $valorTotal = $valor - $descontoValor;

    // Agora a frase exibe a % correta e o valor total
    return "O produto da categoria $categoria com valor R$ $valor,00 está com $porcentagem% de desconto - Valor total: R$ $valorTotal,00";
}

echo calcularDesconto($valor, $categoria);


echo "<br><br><br>";


$categoria = "eletrodddnico";
function verificarCategoria($categoria) {
    switch ($categoria) {
        case "eletronico": 
        case "eletrônico":
            return "Essa categoria é de produtos eletrônicos";

        case "vestuario":
        case "vestuário":
            return "Essa categoria é de produtos de vestuário"; 

        case "alimento":
        case "alimentos":
            return "Essa categoria é de produtos alimentícios";

        default:
            return "Categoria desconhecida";
    }
}

echo verificarCategoria($categoria);


