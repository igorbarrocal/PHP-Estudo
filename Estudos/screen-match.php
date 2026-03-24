<?php

echo "Bem-vindo ao screen match!\n";
// \n é um caractere de nova linha, que quebra a linha e move o cursor para a próxima linha
// \t é um caractere de tabulação, que adiciona um espaço horizontal para alinhar o texto

//Variaveis 
//$nomeFilme = "Se Beber, Não Case!";
//$nomeFilme = "Thor: Ragnarok";
$nomeFilme = "Top Gun - Maverick"; 

$anoLancamento =  2022; // $argv é um array que contém os argumentos passados para o script PHP a partir da linha de comando
// ?? é o operador de coalescência nula, que retorna o valor à esquerda se não for nulo, caso contrário, retorna o valor à direita

$quantidadeDeNotas = $argc - 1; // $argc é uma variável que contém o número de argumentos passados para o script PHP a partir da linha de comando, incluindo o nome do script
$notas = [];
$somaDeNotas = 0; // ✅ inicializando a variável

// += é um operador de atribuição que soma o valor à variável existente
// *= é um operador de atribuição que multiplica o valor à variável existente
// -= é um operador de atribuição que subtrai o valor da variável existente
// /= é um operador de atribuição que divide o valor da variável existente pelo valor fornecido

//$somaDeNotas += $argv[1];
//$somaDeNotas += $argv[2];
//$somaDeNotas += $argv[3];

for ($contador = 1; $contador < $argc; $contador++) {
    $notas[] = (float) $argv[$contador];
}

//$somaDeNotas = 0;
//foreach ($notas as $nota) {
   // $somaDeNotas += $nota; // count() é uma função que retorna o número de elementos em um array, e $notas[$contador] acessa o elemento do array $notas na posição $contador
//}  

var_dump($notas); // var_dump é uma função que exibe informações sobre uma variável, incluindo seu tipo e valor

//do {
    //alguma acao
//} while (condicao);


//$contador = 1;
//while($argv[$contador] != 0) {
   // $somaDeNotas += $argv[$contador++];
//}

$notaFilme = array_sum($notas) / $quantidadeDeNotas; // array_sum() é uma função que retorna a soma dos valores de um array, e $quantidadeDeNotas é o número de notas fornecidas
$planoPrime = true;                             // $argv é um array que contém os argumentos passados para o script PHP a partir da linha de comando

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
} else {
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
echo "Gênero do filme: $genero\n";
// match é uma estrutura de controle que compara um valor com vários casos e executa o bloco de código correspondente ao caso que corresponde ao valor

//var_dump($argv);
// var_dump é uma função que exibe informações sobre uma variável, incluindo seu tipo e valor

//$notasParaOFilme = array(
  //  10,
  //  8 , 
  //  9, 
  //  7.5, 
 //   5, 
  //  6.8
//); // [] é a sintaxe para criar um array em PHP
// $notasParaOFilme é uma variável que contém um array de notas para o filme

//var_dump($notasParaOFilme); //Forma para definir um array em PHP, onde cada elemento é separado por vírgula e o array é delimitado por colchetes

$filme = [
    "nome" => "Thor: Ragnarok",
    "ano" => 2021,
    "nota" => 7.8,
    "genero" => "Super-Herói"
];// $filme é uma variável que contém um array com informações sobre o filme, onde cada elemento representa um atributo do filme (nome, ano de lançamento, nota e gênero)


echo $filme["nome"]."\n"; // Acessando o valor do elemento "nome" do array $filme
echo $filme["ano"]."\n"; // Acessando o valor do elemento "ano" do array $filme
echo $filme["nota"]."\n"; // Acessando o valor do elemento "nota" do array $filme
echo $filme["genero"]."\n"; // Acessando o valor do elemento "genero" do array $filme