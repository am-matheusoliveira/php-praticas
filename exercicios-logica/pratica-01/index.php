<?php

// INPUT DE QUANTIDADE DE PATINHOS
$patinhos = readline('Digite a quantidade de patinhos: ');

// VALIDAÇÃO DA QUANTIDADE
if(!is_numeric($patinhos) || $patinhos <= 1 || $patinhos >= 10){
    echo("O número patinhos digitado é inválido.\n");
    echo("É necessário enviar um valor maior do que 1 e menor do que 10.\n");
    exit;
}

// ITERA A QUANTIDADE DE PATINHOS
for($i = $patinhos; $i > 0; $i--){
    echo("\n");

    // CONDIÇÃO DA QUANTIDADE DE PATINHOS
    echo($i != 1 ? $i." patinhos foram passear\n" : "1 patinhon foi passear\n");
    
    // TEXTOS FIXOS DA LETRA
    echo("Além das montanhas\n");
    echo("Para brincar\n");
    echo("A mamãe gritou: Quá, quá, quá, quá\n");

    // CONDIÇÃO PARA A QUANTIDADE RESTANTE DE PATINHOS
    switch($i){
        case 2:
            echo("Mas só 1 patinho voltou de lá.\n");
            break;
        case 1:
            echo("Mas nenhum patinho voltou de lá.\n");
            break;
        default:
            echo("Mas só ".($i - 1)." patinhos voltaram de lá.\n");
            break;
    }
}

// ESTROFE FINAL DA MÚSICA
echo("\n");
echo("A mamãe patinha foi procurar\n"); 
echo("Além das montanhas Na beira do mar\n");
echo("A mamãe gritou: Quá, quá, quá, quá\n");
echo("E os ".$patinhos." patinhos voltaram de lá.\n");