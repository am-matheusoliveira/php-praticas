<?php

include __DIR__.'/styles.php';

echo('<h1>Funções de Arrays - Parte 2</h1>');

echo('<h2>Range</h2>');

$array = range(1, 11, 2);

echo('<pre>');
print_r($array);
echo('</pre>');

$array = range('a', 'f', 2);

echo('<pre>');
print_r($array);
echo('</pre>');

echo('<hr>');

echo('<h2>Array Map</h2>');

$array = [
    [ 'id' => 10, 'nome' => 'matheus pereira' ],
    [ 'id' => 12, 'nome' => 'vieira de moraes' ]
];

function toUpperName($item){
    $item['nome'] = strtoupper($item['nome']);
    $item['contador'] = strlen($item['nome']);

    return $item;
}

echo('<pre>');
print_r($array);
echo('</pre>');

$array = array_map('toUpperName', $array);

echo('<pre>');
print_r($array);
echo('</pre>');


echo('<hr>');

echo('<h2>Array Reduce</h2>');

$array = [
    [ 'id' => 10, 'nome' => 'matheus pereira 01', 'valor' => 50 ],
    [ 'id' => 20, 'nome' => 'matheus pereira 02', 'valor' => 100 ],
    [ 'id' => 30, 'nome' => 'matheus pereira 03', 'valor' => 150 ]
];

echo('<pre>');
print_r($array);
echo('</pre>');

function sum($total, $item){
    $total += $item['valor'];

    return $total;
}

$total = array_reduce($array, 'sum');

echo('<pre>');
print_r($total);
echo('</pre>');


echo('<hr>');

echo('<h2>Array Sum</h2>');

$array = [10, 20, 30, 40, 50, 60, 70];

echo('<pre>');
print_r($array);
echo('</pre>');

$total = array_sum($array);

echo('<pre>');
print_r($total);
echo('</pre>');

echo('<hr>');

echo('<h2>List - pega as chaves de um array e converte em variaveis</h2>');
echo('<h2>chave do array = nome da variavel, valor da variavel = valor da chave do array');

$array = ['uva', 'vermelho', 'triste'];

echo('<pre>');
print_r($array);
echo('</pre>');

# TRANSFORMANDO O AS CHAVES DO ARRAY E SEUS VALORES EM VARIAVEIS
list($fruta, $cor, $sentimento) = $array;

echo("Fruta: $fruta <br>");
echo("Cor: $cor <br>");
echo("Sentimento: $sentimento <br>");