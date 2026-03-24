<?php
//1- Escreva um programa que exiba, na tela do usuário, todos os números ímpares de 0 à 100.
for ($contador = 0; $contador <= 100; $contador++) {
    if ($contador % 2 != 0) {
        echo $contador . "\n";
    }
}

//2- Crie um programa que, a partir de altura e peso, calcule o IMC e exiba a classificação do IMC
$altura = 1.75; // altura em metros
$peso = 70; // peso em kg
$imc = $peso / ($altura * $altura); // fórmula do IMC
echo "O IMC é: " . $imc . "\n";

//3-  Desenvolva um programa que exiba na tela uma saudação (bom dia, boa tarde ou boa noite) dependendo do horário encontrado em uma variável (inteiro representando as horas)
$hora = 14; // hora em formato 24h
if ($hora >= 5 && $hora < 12) {
    echo "Bom dia!";
} elseif ($hora >= 12 && $hora < 18) {
    echo "Boa tarde!";
} else {
    echo "Boa noite!";
}