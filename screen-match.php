<?php

echo "Bem-vindo ao screen match!\n";
// \n é um caractere de nova linha, que quebra a linha e move o cursor para a próxima linha
// \t é um caractere de tabulação, que adiciona um espaço horizontal para alinhar o texto

//Variaveis 
//$nomeFilme = "Se Beber, Não Case!";
//$nomeFilme = "Thor: Ragnarok";
$nomeFilme = "Top Gun - Maverick"; 

$anoLancamento = $argv[1] ?? 2022; // $argv é um array que contém os argumentos passados para o script PHP a partir da linha de comando
// ?? é o operador de coalescência nula, que retorna o valor à esquerda se não for nulo, caso contrário, retorna o valor à direita

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
echo "Ano de lançamento: $anoLancamento\n";

if ($anoLancamento > 2022) {
    echo "Esse fime è um lançamento\n";
} elseif ($anoLancamento > 2020 && $anoLancamento <= 2022) {
    echo "Esse filme ainda e novo";

}else{
    echo "Esse filme não é um lançamento\n";

}
// if é uma estrutura de controle que executa um bloco de código se a condição for verdadeira
// elseif é uma estrutura de controle que executa um bloco de código se a condição anterior for
// else é uma estrutura de controle que executa um bloco de código se todas as condições anteriores forem falsas


$genero = match ($nomeFilme) {
    "Top Gun - Maverick" => "Ação",
    "Thor: Ragnarok" => "Super-Herói",
    "Se Beber, Não Case!" => "Comédia",
    default => "Gênero desconhecido"
};
echo "Gênero do filme: $genero";

// match é uma estrutura de controle que compara um valor com vários casos e executa o bloco de código correspondente ao caso que corresponde ao valor