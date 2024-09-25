<?php

// RECEBE A EXPRESSÃO MATEMÁTICA
$expressao = readline('Digite a expressão matemática: ');

// VERIFICA A EXPRESSÃO ENVIADA

if(preg_match('/[^0-9\ \+\-\/\*\(\)]/', $expressao)){
    die("A expressão é inválida. Verifique os dados enviados.\n");
}

// CALCULA O RESULTADO DA EXPRESSÃO
$resultado = eval('return '.$expressao.';');

// VERIFICA O RESULTADO NUMÉRICO
if(!is_numeric($resultado)){
    die("A expressão não pôde ser calculada. Verifique os dados enviados.\n");
}

// IMPRIME O RESULTADO DA EXPRESSÃO
echo("Resultado: ".$resultado."\n");