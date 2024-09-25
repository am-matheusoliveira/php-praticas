<?php

include __DIR__.'/styles.php';

echo('<h1>Definição</h1>');

echo('<h2>Lista ordenada</h2>');

$array = [
    'banana',
    'goiaba',
    'morango'
];

echo('<pre>');
print_r($array);
echo('</pre>');

echo('<hr>');

echo('<h2>Array associativo</h2>');

$array = [
    'nome' => 'Matheus Pereira',
    'idade' => 27,
    'nascimento' => '1996-12-28'
];

echo('<pre>');
print_r($array);
echo('</pre>');

echo('<hr>');

echo('<h2>Array bagunçado</h2>');

$array = [
    20 => 'Manaus',
    'nome' => 'Matheus Pereira',
    'idade' => 27,
    'nascimento' => '1996-12-28',
    'banana',
    'goiaba',
    'morango'
];

echo('<pre>');
print_r($array);
echo('</pre>');

echo('<hr>');

echo('<h2>Adicionando valores na lista ordenada</h2>');

$array = [
    'banana',
    'goiaba',
    'morango'
];

# INCLUINDO NOVOS VALORES
$array[] = 'pera';           # 1º OPÇÃO
$array[4] = 'maça';          # 2º OPÇÃO
array_push($array, 'manga'); # 3º OPÇÃO

# ALTERANDO VALORES DE UMA POSIÇÃO
$array[4] = 'melão';

echo('<pre>');
print_r($array);
echo('</pre>');

echo('<hr>');

echo('<h2>Adicionando valores em um array associativo</h2>');

$array = [
    'nome' => 'Matheus Pereira',
    'idade' => 27,
    'nascimento' => '1996-12-28'
];

$array['github'] = 'matheus';

# TROCANDO VALORES DE UMA POSIÇÃO
$array['idade'] = 25;

echo('<pre>');
print_r($array);
echo('</pre>');

echo('<hr>');

echo('<h2>Array multidimensional associativo</h2>');

$array = [
    'pessoas' => [
        [
            'nome' => 'Matheus Pereira 01',
            'idade' => 20,
            'nascimento' => '1995-10-15'
        ],
        [
            'nome' => 'Matheus Pereira 02',
            'idade' => 30,
            'nascimento' => '1995-10-15'
        ],
        [
            'nome' => 'Matheus Pereira 03',
            'idade' => 40,
            'nascimento' => '1996-10-15'
        ]        
    ]
];

echo('<pre>');
print_r($array);
echo('</pre>');

echo('<hr>');

echo('<h2>Obtendo valores dos arrays</h2>');

$array = [
    'pessoas' => [
        [
            'nome' => 'Matheus Pereira 01',
            'idade' => 20,
            'nascimento' => '1995-10-15'
        ],
        [
            'nome' => 'Matheus Pereira 02',
            'idade' => 30,
            'nascimento' => '1995-10-15'
        ],
        [
            'nome' => 'Matheus Pereira 03',
            'idade' => 40,
            'nascimento' => '1996-10-15'
        ]        
    ]
];

echo('<pre>');
print_r($array['pessoas']);
echo('</pre>');

echo('<pre>');
print_r($array['pessoas'][0]);
echo('</pre>');

echo('<pre>');
print_r($array['pessoas'][0]['nome']);
echo('</pre>');