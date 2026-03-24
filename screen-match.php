<?php

echo "Bem-vindo ao screen match!\n";
// \n é um caractere de nova linha, que quebra a linha e move o cursor para a próxima linha
// \t é um caractere de tabulação, que adiciona um espaço horizontal para alinhar o texto

$nomeFilme = "Top Gun - Maverick";
$anoLancamento = 2022;

$somaDeNotas = 9;
$somaDeNotas += 6;
$somaDeNotas += 8;
$somaDeNotas += 7.5;
$somaDeNotas += 5;
// += é um operador de atribuição que soma o valor à variável existente
// *= é um operador de atribuição que multiplica o valor à variável existente
// -= é um operador de atribuição que subtrai o valor da variável existente
// /= é um operador de atribuição que divide o valor da variável existente pelo valor fornecido

$notaFilme = $somaDeNotas / 5;
$planoPrime = true;

$incluidoNoPlano = $planoPrime && $anoLancamento < 2020;
// || é o operador lógico "OU", que retorna verdadeiro se pelo menos uma das condições for verdadeira
//< 2020 é uma condição que verifica se o ano de lançamento é anterior a 2020
// && é o operador lógico "E", que retorna verdadeiro apenas se ambas as condições forem verdadeiras

echo "Nome do filme: ".$nomeFilme."\n";
echo "Nota do Filme: $notaFilme\n";
