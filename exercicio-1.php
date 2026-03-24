
<?php
// 1 - Escreva um programa em PHP que exiba seu nome na tela.
$nomePrograma = "Exercício 1";
echo $nomePrograma;

//2 - Crie um programa em PHP que calcule a média de três notas e exiba o resultado.
$nota1 = 8.5;
$nota2 = 7.0;
$nota3 = 9.0;
$media = ($nota1 + $nota2 + $nota3) / 3;
echo "A média das notas é: " . $media;

// 3 - Elabore um programa em PHP que receba um valor em metros e converta para centímetros.
$metros = 1.75;
$centimetros = $metros * 100;
echo "$metros metros equivalem a $centimetros centímetros.";

//4 -Desenvolva um programa em PHP que verifique se um ano é bissexto ou não.
$ano = $argv[1] ?? 2026; // Recebe o ano como argumento da linha de comando ou usa 2026 como padrão
if (($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0)) {
   echo "$ano é um ano bissexto.";
} else {
    echo "$ano não é um ano bissexto.";
}

//5 - Escreva um programa em PHP que converta uma temperatura de Celsius para Fahrenheit.
$temperaturaEmCelsius = 30.4; 
$temperaturaEmFahrenheit = $temperaturaEmCelsius * 1.8 + 32;

$mensagem = "A temperatura de $temperaturaEmCelsius Celsius é equivalente a $temperaturaEmFahrenheit Fahrenheit";

echo $mensagem;