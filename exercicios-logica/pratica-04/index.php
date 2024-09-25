<?php

// CÉDULAS DISPONÍVEIS
$cedulas = [
    5,
    10,
    20,
    50,
    100
];

// INFORMA AS CÉDULAS DISPONÍVEIS PARA SAQUE
echo("Cédulas disponíveis: ".implode(', ', $cedulas)."\n");

// SOLICITA O VALOR DO SAQUE
$valorSaque = readline('Digite o valor para saque: ');

//VERIFICA O VALOR DO SAQUE
if($valorSaque % $cedulas[0] > 0){
    die('O valor solicitado não pode ser atendido pelas cédulas disponíveis');
}

// AUXILIAR DO CÁLCULO DO VALOR RESTANTE
$valorRestante = $valorSaque;

// CÉDULAS PARA O SAQUE
$cedulasSaque = [];

// PRIORIZA AS CÉDULAS MAIORES
rsort($cedulas);

// ITERA AS CÉDULAS DISPONÍVEIS
foreach($cedulas as $cedula){
    // VERIFICA O VALOR DA CÉDULA
    if($cedula > $valorRestante) continue;

    // QUANTIDADE DA CÉDULA ATUAL
    $quantidade = floor($valorRestante / $cedula);

    // CALCULA O VALOR RESTANTE APÓS UTILIZAR A CÉDULA ATUAL
    $valorRestante -= ($cedula * $quantidade);

    // CÉDULAS PARA O SAQUE
    $cedulasSaque[$cedula] = $quantidade;
}

// VALOR DO SAQUE 
echo("\nSaque de R$".$valorSaque."\n");

// CÉDULAS RETORNADAS
foreach($cedulasSaque as $cedula => $quantidade){
    echo(" > ".$quantidade."x R$".$cedula."\n");
}