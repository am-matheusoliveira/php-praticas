<?php

// UNIDADES VÁLIDAS PARA O SISTEMA
$unidades = [
    "mm" => 1,
    "cm" => 10,
    "m"  => 1000,
    "km" => 1000000
];

// TEXTO DAS UNIDADES VÁLIDAS
$unidadesValidas = implode(', ', array_keys($unidades));

do{
    // SOLICITA A UNIDADE BASE PARA O USUÁRIO
    $unidadeBase = readline('Digite a unidade base ('.$unidadesValidas.'): ');

    // MENSAGEM DE ERRO DE UNIDADE
    if(!isset($unidades[$unidadeBase])){
        echo("Unidade inválida\n\n");
    }

}while(!isset($unidades[$unidadeBase]));

do{
    // SOLICITA O VALOR DA UNIDADE BASE PARA O USUÁRIO
    $valorBase = readline('Digite o valor base: ');

    // MENSAGEM DE ERRO DO VALOR
    if(!is_numeric($valorBase)){
        echo("Valor inválido!\n\n");
    }
}while(!is_numeric($valorBase));

// VALOR EM MILÍMETROS
$valorMilimetro = $valorBase * $unidades[$unidadeBase];

echo("\nResultado:\n");

// IMPRIME AS UNIDADES DI SISTEMA
foreach($unidades as $unidade => $divisor){
    // IGNORA A IMPRESSÃO DA UNIDADE BASE
    if($unidade == $unidadeBase) continue;

    // IMPRIME O VALOR CORRESPONDENTE NA UNIDADE
    echo(" > ".($valorMilimetro / $divisor)." ".$unidade."\n");
}