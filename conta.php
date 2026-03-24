<?php

// Saldo inicial da conta
$saldo = 2000;

// Nome do titular
$titular = "Igor Dias";

// Estrutura de repetição: o menu vai rodar até o usuário escolher sair (opção 4)
do {

    // Exibição do menu
    echo "***********************\n";
    echo "Titular: $titular\n";
    echo "Saldo atual: R$ $saldo\n";
    echo "***********************\n";
    echo "1. Consultar saldo atual\n";
    echo "2. Sacar valor\n";
    echo "3. Depositar valor\n";
    echo "4. Sair\n";

    // Pede para o usuário escolher uma opção
    echo "Escolha uma opção: ";

    // fgets(STDIN) lê o que o usuário digita no terminal
    // (int) converte o valor digitado para número inteiro
    $opcao = (int) fgets(STDIN);

    // Estrutura de decisão baseada na opção escolhida
    switch ($opcao) {

        case 1:
            // Apenas mostra o saldo atual
            echo "Seu saldo atual é: R$ $saldo\n";
            break;

        case 2:
            // Saque de dinheiro
            echo "Digite o valor para saque:\n ";

            // Lê o valor digitado e converte para número decimal (float)
            $saque = (float) fgets(STDIN);

            // Verifica se tem saldo suficiente
            if ($saque > $saldo) {
                echo "Saldo insuficiente!\n";
            } else {
                // Subtrai o valor do saldo
                $saldo -= $saque;
                echo "Saque realizado com sucesso!\n";
            }
            break;

        case 3:
            // Depósito de dinheiro
            echo "Digite o valor para depósito:\n ";

            // Lê o valor digitado
            $deposito = (float) fgets(STDIN);

            // Verifica se o valor é válido
            if ($deposito > 0) {
                // Soma o valor ao saldo
                $saldo += $deposito;
                echo "Depósito realizado com sucesso!\n";
            } else {
                echo "Valor inválido!\n";
            }
            break;

        case 4:
            // Encerra o programa
            echo "Saindo...\n";
            break;

        default:
            // Caso o usuário digite algo fora das opções
            echo "Opção inválida!\n";
    }

    // Apenas para dar um espaço visual no terminal
    echo "\n";

    // Continua rodando enquanto a opção for diferente de 4
} while ($opcao !== 4);