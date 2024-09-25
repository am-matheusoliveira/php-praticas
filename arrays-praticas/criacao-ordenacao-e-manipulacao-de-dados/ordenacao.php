<?php

include __DIR__.'/styles.php';

echo('<h1>Ordenação</h1>');

echo('<h2>Sort - ordem crescente</h2>');

$array = [
    'goiaba',
    'banana',
    'morango',
    'abacaxi'
];

# ANTES
echo('<pre>');
print_r($array);
echo('</pre>');

sort($array);

# DEPOIS
echo('<pre>');
print_r($array);
echo('</pre>');

echo('<hr>');

echo('<h2>Rsort - ordem decrescente</h2>');

$array = [
    'goiaba',
    'banana',
    'morango',
    'abacaxi'
];

# ANTES
echo('<pre>');
print_r($array);
echo('</pre>');

rsort($array);

# DEPOIS
echo('<pre>');
print_r($array);
echo('</pre>');

echo('<hr>');

echo('<h2>Asort - ordem crescente - não alterando as chaves</h2>');

$array = [
    'goiaba',
    'banana',
    'morango',
    'abacaxi'
];

# ANTES
echo('<pre>');
print_r($array);
echo('</pre>');

asort($array);

# DEPOIS
echo('<pre>');
print_r($array);
echo('</pre>');

echo('<hr>');

echo('<h2>Arsort - ordem decrescente - não alterando as chaves</h2>');

$array = [
    'goiaba',
    'banana',
    'morango',
    'abacaxi'
];

# ANTES
echo('<pre>');
print_r($array);
echo('</pre>');

arsort($array);

# DEPOIS
echo('<pre>');
print_r($array);
echo('</pre>');

echo('<hr>');

echo('<h2>Ksort - ordem crescente das chaves</h2>');

$array = [
    'chave-03' => 'goiaba',
    'chave-04' => 'banana',
    'chave-02' => 'morango',
    'chave-01' => 'abacaxi'
];

# ANTES
echo('<pre>');
print_r($array);
echo('</pre>');

ksort($array);

# DEPOIS
echo('<pre>');
print_r($array);
echo('</pre>');

echo('<hr>');

echo('<h2>Krsort - ordem decrescente das chaves</h2>');

$array = [
    'chave-03' => 'goiaba',
    'chave-04' => 'banana',
    'chave-02' => 'morango',
    'chave-01' => 'abacaxi'
];

# ANTES
echo('<pre>');
print_r($array);
echo('</pre>');

krsort($array);

# DEPOIS
echo('<pre>');
print_r($array);
echo('</pre>');

echo('<hr>');

echo('<h2>Usort — Ordena um array pelos valores utilizando uma função de comparação definida pelo usuário</h2>');

$array = [
    [
        'id' => 7, 
        'nome' => 'matheus pereira 04', 
        'idade' => 29
    ],    
    [
        'id' => 3, 
        'nome' => 'matheus pereira 03', 
        'idade' => 24
    ],    
    [
        'id' => 1, 
        'nome' => 'matheus pereira 01', 
        'idade' => 23
    ],    
    [
        'id' => 2, 
        'nome' => 'matheus pereira 02', 
        'idade' => 24
    ]    
];

# ANTES
echo('<pre>');
print_r($array);
echo('</pre>');

usort($array, function($a, $b){
    # OBS: PARA RETORNAR DE FORMA DECRESCENTE, ALTERA A ORDEM: (-1 para 1) e (1 para -1)

    if($a['id'] === $b['id']) return 0; // SÃO IGUAIS

    // SÃO DIFERENTES - ORDENAR - OPERADOR TERNARIO
    return $a['id'] < $b['id'] ? -1 : 1;
});

# ANTES
echo('<pre>');
print_r($array);
echo('</pre>');

echo('<hr>');

echo('<h2>Uasort — Ordena um array pelos valores utilizando uma função de comparação definida pelo usuário - mantendo a origem das chaves</h2>');

$array = [
    [
        'id' => 7, 
        'nome' => 'matheus pereira 04', 
        'idade' => 29
    ],    
    [
        'id' => 3, 
        'nome' => 'matheus pereira 03', 
        'idade' => 24
    ],    
    [
        'id' => 1, 
        'nome' => 'matheus pereira 01', 
        'idade' => 23
    ],    
    [
        'id' => 2, 
        'nome' => 'matheus pereira 02', 
        'idade' => 24
    ]    
];

# ANTES
echo('<pre>');
print_r($array);
echo('</pre>');

uasort($array, function($a, $b){
    # OBS: PARA RETORNAR DE FORMA DECRESCENTE, ALTERA A ORDEM: (-1 para 1) e (1 para -1)

    if($a['id'] === $b['id']) return 0; // SÃO IGUAIS

    // SÃO DIFERENTES - ORDENAR - OPERADOR TERNARIO
    return $a['id'] < $b['id'] ? -1 : 1;
});

# ANTES
echo('<pre>');
print_r($array);
echo('</pre>');

echo('<hr>');

echo('<h2>Shuffle</h2>');

$array = [
    'goiaba',
    'banana',
    'morango',
    'abacaxi'
];


# ANTES
echo('<pre>');
print_r($array);
echo('</pre>');

shuffle($array);

# DEPOIS
echo('<pre>');
print_r($array);
echo('</pre>');

echo('<hr>');

echo('<h2>Natsort</h2>');

$array = [
    '10.0v',
    '1.0v',
    '2.0 V'
];

# ANTES
echo('<pre>');
print_r($array);
echo('</pre>');

natsort($array);

# DEPOIS
echo('<pre>');
print_r($array);
echo('</pre>');


echo('<hr>');

echo('<h2>Natcasesort - case insensitive</h2>');

$array = [
    '10.0v',
    '1.0v',
    '2.0V'
];

# ANTES
echo('<pre>');
print_r($array);
echo('</pre>');

natcasesort($array);

# DEPOIS
echo('<pre>');
print_r($array);
echo('</pre>');