<?php

$str = "Esta é a minha string";

// substr (Variável onde está o conteúdo, número do caracter onde ele começa a 'coleta', número de caracteres que vai coletar)
$minha = substr($str, 10, 5);

echo "$str <br>";
echo "$minha <br>";

$str2 = "testando esta string abc";

echo $novaString = subsTr($str2, 9) . "<br>";

// o número negativo conta o 'corte' das strings do final da linha para o começo
echo $novaString = substr($str2, 9, -3);
