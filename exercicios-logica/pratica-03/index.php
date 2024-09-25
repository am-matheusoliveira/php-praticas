<?php

//ARRAY PARA GUARDAR A LISTA DE NOMES
$nomes = [];

do{
    echo("Menu de opção:\n");
    echo(" 1 - Adicionar\n");

    if(count($nomes) >= 1) echo(" 2 - Listar\n");
    if(count($nomes) >= 2) echo(" 3 - Sortear\n");

    echo(" 4 - Sair\n");

    // OPÇÃO SELECIONADA PELO USUÁRIO
    $opção = readline('Digite a opção desejada: ');
    echo("\n\n");

    // VALIDAÇÃO DAS OPÇÕES
    switch($opção){
        // ADICIONAR
        case 1:
            $nomes[] = readline('Digite um nome: ');
            echo("\n\n");
            break;
            
        // LISTAR
        case 2:
            if(count($nomes) >= 1){
                echo("Nomes na lista:\n");
                foreach($nomes as $nome){
                    echo(" - ".$nome."\n");    
                }
                echo("\n\n");
            }
            break;
        // SORTEAR
        case 3:
            if(count($nomes) >= 2){
                // SORTEIO DA POSIÇÃO DO ARRAY
                $indice = array_rand($nomes);

                // NOME SORTEADO
                echo("Nome sorteado: ".$nomes[$indice]);
                echo("\n\n");

                // REMOVE OS NOMES JÁ SORTEADOS
                unset($nomes[$indice]);
            }
            break;            
    }

}while($opção != 4);