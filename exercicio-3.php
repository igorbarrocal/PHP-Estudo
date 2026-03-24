<?php
//1- Escreva um programa em PHP que remova os elementos duplicados de um array fornecido como entrada e exiba o array resultante. Por exemplo, se o array for [1, 2, 2, 3, 4, 4, 5], o programa deve exibir [1, 2, 3, 4, 5].
$inputArray = [1, 2, 2, 3, 4, 4, 5];
$resultArray = array_unique($inputArray); // array_unique() é uma função que remove os elementos duplicados de um array

// 2 -  Percorra um array de notas (cada uma de 0 a 10) e exiba a nota do aluno em questão com a informação se o aluno foi aprovado ou não.Se a nota for maior do que 6, o aluno foi aprovado. Caso contrário, foi reprovado.

$notas = [7, 8, 9, 6, 5];
foreach ($notas as $nota) {
    if ($nota >= 6) {
        echo "Aluno aprovado com nota: $nota\n";
    } else {
        echo "Aluno reprovado com nota: $nota\n";
    }
}

// 3 -  Defina um array associativo que representa uma conta bancária (com titular e saldo) e exiba suas informações na tela.
$contaBancaria = [
    "titular" => "João Silva",
    "saldo" => 1500.00
];
echo "Titular: " . $contaBancaria["titular"] . "\n";
echo "Saldo: R$ " . $contaBancaria["saldo"] . "\n";

// 4- Crie um array contendo nomes de familiares seus e após sua criação adicione mais elementos ao array.
$familiares = ["Maria", "José", "Ana"];
$familiares[] = "Carlos"; // adiciona um novo elemento ao final do array
