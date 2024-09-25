<?php

include __DIR__.'/styles.php';

echo('<h1>Manipulação de dados</h1>');

echo('<h2>Array Unique</h2>');

$array = [
    'goiaba',
    'banana',
    'morango',
    'abacaxi'
];

echo('<pre>');
print_r(array_unique($array));
echo('</pre>');

echo('<hr>');

echo('<h2>Array Filter</h2>');

$array = [
    'nome'      => 'matheus pereira',
    'canal'     => 'matheus',
    'instagram' => false,
    'twitter'   => null,
    'gmail'     => 0
];

echo('<pre>');
print_r(array_filter($array));
echo('</pre>');

$filter = array_filter($array, function($value){
    if(!in_array('false, null, 0', [false, null, 0])){
        return ($value);
    }
});

echo('<pre>');
print_r($filter);
echo('</pre>');


echo('<hr>');

echo('<h2>Array Diff - diferença entre arrays</h2>');

$arrayA = [ 10, 25, 32, 44, 50 ];
$arrayB = [ 10, 22, 30];

# DIFF ENTRE A & B
echo('<pre>');
print_r(array_diff($arrayA, $arrayB));
echo('</pre>');

# DIFF ENTRE B & A
echo('<pre>');
print_r(array_diff($arrayB, $arrayA));
echo('</pre>');

echo('<hr>');

echo('<h2>Array Intersect - igualação entre arrays</h2>');

# IGUALDADE ENTRE A & B
echo('<pre>');
print_r(array_intersect($arrayB, $arrayA));
echo('</pre>');


echo('<hr>');

echo('<h2>Array Column - usada para array multidimensional - obtem indices especificos de arrays</h2>');

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

# DEPOIS
echo('<pre>');
print_r(array_column($array, 'id'));
echo('</pre>');


echo('<hr>');

echo('<h2>Array Combine - combina dois arrays o 1º array com as chaves, 2º array com os valores</h2>');

$arrayA =  [ '10', '20', '30' ];
$arrayB =  [ 'id', 'nome', 'idade' ];

# ANTES
echo('<pre>');
print_r($arrayA);
echo('</pre>');

echo('<pre>');
print_r($arrayB);
echo('</pre>');

# OBS: OS DOIS ARRAYS PRECISAM TER O MESMO TAMANHO
# DEPOIS 
echo('<pre>');
print_r(array_combine($arrayA, $arrayB));
echo('</pre>');
# ou
echo('<pre>');
print_r(array_combine($arrayB, $arrayA));
echo('</pre>');

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

# PREPARANDO AS CHAVES E OS VALORES
$keys = array_column($array, 'id');
$values = array_column($array, 'nome');

// MONTANDO O ARRAY
$array = array_combine($keys, $values);

# ORDENANDO - CRESCENTE
sort($array);

# IMPRIMINDO
echo('<pre>');
print_r($array);
echo('</pre>');

echo('<hr>');

echo('<h2>Array Merge - mescla um ou mais arrays</h2>');

$arrayA = [ 1, 'matheus pereira 01', 23 ];
$arrayB = [ 2, 'matheus pereira 02', 24 ];

echo('<pre>');
print_r($arrayA);
echo('</pre>');

echo('<pre>');
print_r($arrayB);
echo('</pre>');

echo('<pre>');
print_r(array_merge($arrayA, $arrayB));
echo('</pre>');


echo('<hr>');

echo('<h2>Array Pad - almentar o tamanho do array ate o necessario</h2>');

$array = [ 1, 'matheus pereira 01', 23 ];

# ANTES
echo('<pre>');
print_r($array);
echo('</pre>');

# DEPOIS
echo('<pre>');
print_r(array_pad($array, 10, 'MATHEUS'));
echo('</pre>');

echo('<hr>');

echo('<h2>Array Shift - 1º a entrar sera o 1º a sair</h2>');

$array = [ 10, 20, 30, 40, 50];

# ANTES
echo('<pre>');
print_r($array);
echo('</pre>');

# REMOVENDO A 1º POSIÇÃO
echo('<pre>');
print_r(array_shift($array));
echo('</pre>');

# DEPOIS
echo('<pre>');
print_r($array);
echo('</pre>');

echo('<hr>');

echo('<h2>Array Unshift - preenchendo a 1º posição do array</h2>');

$array = [ 10, 20, 30, 40, 50];

# ANTES
echo('<pre>');
print_r($array);
echo('</pre>');

array_unshift($array, 60, 70);

# DEPOIS
echo('<pre>');
print_r($array);
echo('</pre>');

echo('<hr>');

echo('<h2>Array Pop - removendo a ultima posição do array</h2>');

$array = [ 10, 20, 30, 40, 50];

# ANTES
echo('<pre>');
print_r($array);
echo('</pre>');

echo('<pre>');
print_r(array_pop($array));
echo('</pre>');

# DEPOIS
echo('<pre>');
print_r($array);
echo('</pre>');

echo('<hr>');

echo('<h2>Array Unset - removendo posições do array</h2>');

$array = [ 10, 20, 30, 40, 50];

# ANTES
echo('<pre>');
print_r($array);
echo('</pre>');

# REMOVENDO POSIÇÃO
unset($array[2]);

# DEPOIS
echo('<pre>');
print_r($array);
echo('</pre>');

echo('<hr>');

echo('<h2>Array Map - iterando sobre o array e manipulando os dados</h2>');

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

# MANIPULANDO OS DADOS DO ARRAY
$map = array_map(function($value){
    $value['nome'] = strtolower($value['nome']);
    $value['novo_campo'] = rand(100, 900);

    return $value;

}, $array);

# DEPOIS
echo('<pre>');
print_r($map);
echo('</pre>');