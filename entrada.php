<?php

echo "Digite um numero\n ";
$numero = (float) fgets(STDIN);  // fgets() é uma função que lê uma linha de entrada do usuário a partir do terminal, e STDIN é um recurso que representa a entrada padrão (teclado)
// fgets() retorna a entrada do usuário como uma string, então é necessário converter para um número inteiro usando (int) ou (float) dependendo do tipo de número esperado

echo "O numero e: $numero\n";