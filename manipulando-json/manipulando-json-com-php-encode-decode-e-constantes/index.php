<?php

include __DIR__.'/styles.php';

echo('<h1>JSON em PHP</h1>');


echo('<h2>Exemplo 01 - Criando um novo objeto</h2>');

// CRIAÇÃO DE UM NOVO OBJETO
$object = new stdClass;
$object->nome = 'Matheus Pereira';
$object->email = 'matheus.pereira@gmail.com';

// IMPRESSÃO
echo('<pre>'); print_r($object); echo('</pre>');

echo('<hr> <h2>Exemplo 02 - Criando um novo objeto e gerando o JSON</h2>');

// CRIAÇÃO DE UM NOVO OBJETO
$object = new stdClass;
$object->nome = 'Matheus Pereira';
$object->email = 'matheus.pereira@gmail.com';

// CONVERTENDO PARA JSON
$json = json_encode($object);

// IMPRESSÃO
echo('<pre>'); print_r($json); echo('</pre>');

echo('<hr> <h2>Exemplo 03 - Criando um novo array e gerando o JSON</h2>');

// CRIAÇÃO DE UM ARRAY
$array = [
    'nome' => 'Matheus Pereira',
    'email' => 'matheus.pereira@gmail.com'
];

// CONVERTENDO PARA JSON
$json = json_encode($array);

// IMPRESSÃO
echo('<pre>'); print_r($json); echo('</pre>');

echo('<hr> <h2>Exemplo 04 - Array e Constante (JSON_PRETTY_PRINT) JSON</h2>');

// CRIAÇÃO DE UM ARRAY
$array = [
    'nome' => 'Matheus Pereira',
    'email' => 'matheus.pereira@gmail.com',
    'linguagens' => [
        'PHP',
        'Javascript',
        'HTML'
    ]
];

// CONVERTENDO PARA JSON
$json = json_encode($array, JSON_PRETTY_PRINT);

// IMPRESSÃO
echo('<pre>'); print_r($array); echo('</pre>');
echo('<pre>'); print_r($json); echo('</pre>');

echo('<hr> <h2>Exemplo 05 - Array e Constantes(1 | 2) JSON</h2>');

// CRIAÇÃO DE UM ARRAY
$array = [
    'nome' => 'Matheus Pereira',
    'email' => 'matheus.pereira@gmail.com',
    'linguagens' => [
        'PHP',
        'Javascript',
        'HTML'
    ]
];

// CONVERTENDO PARA JSON, FORMATANDO PARA O FORMATO ARRAY E NÃO ESCAPANDO OS CARACTERES UNICODE
$json = json_encode($array, JSON_PRETTY_PRINT | 
                            JSON_UNESCAPED_UNICODE);

// IMPRESSÃO
echo('<pre>'); print_r($array); echo('</pre>');
echo('<pre>'); print_r($json); echo('</pre>');

echo('<hr> <h2>Exemplo 06 - Array e Constantes(1 | 2 | 3) JSON</h2>');

// CRIAÇÃO DE UM ARRAY
$array = [
    'nome' => 'Matheus Pereira',
    'email' => 'matheus.pereira@gmail.com',
    'linguagens' => [
        'PHP',
        'Javascript',
        'HTML/CSS'
    ]
];

/* 
    CONVERTENDO PARA JSON, 
    FORMATANDO PARA O FORMATO ARRAY,
    NÃO ESCAPANDO OS CARACTERES UNICODE,
    NÃO ESCAPANDO AS BARRAS

*/
$json = json_encode($array, JSON_PRETTY_PRINT | 
                            JSON_UNESCAPED_UNICODE |
                            JSON_UNESCAPED_SLASHES);

// IMPRESSÃO
echo('<pre>'); print_r($array); echo('</pre>');
echo('<pre>'); print_r($json); echo('</pre>');

echo('<hr> <h2>Exemplo 07 - Array e Constantes(1 | 2 | 3 | 4) JSON</h2>');

// CRIAÇÃO DE UM ARRAY
$array = [
    'nome' => 'Matheus Pereira',
    'email' => 'matheus.pereira@gmail.com',
    'titulo' => '<title>Sou um Programador</title>',
    'linguagens' => [
        'PHP',
        'Javascript',
        'HTML/CSS'
    ]
];

/* 
    CONVERTENDO PARA JSON, 
    FORMATANDO PARA O FORMATO ARRAY,
    NÃO ESCAPANDO OS CARACTERES UNICODE,
    NÃO ESCAPANDO AS BARRAS,
    ESCAPANDO TAGS HTML

*/
$json = json_encode($array, JSON_PRETTY_PRINT | 
                            JSON_UNESCAPED_UNICODE |
                            JSON_UNESCAPED_SLASHES |
                            JSON_HEX_TAG);

// IMPRESSÃO
echo('<pre>'); print_r($array); echo('</pre>');
echo('<pre>'); print_r($json); echo('</pre>');

echo('<hr> <h2>Exemplo 08 - Array e Constantes(1 | 2 | 3 | 4 | 5) JSON</h2>');

// CRIAÇÃO DE UM ARRAY
$array = [
    'nome' => 'Matheus Pereira',
    'email' => 'matheus.pereira@gmail.com',
    'titulo' => '<title>Sou um Programador</title>',
    'caracteres' => '\'Teste\' & "TESTE 2"',
    'linguagens' => [
        'PHP',
        'Javascript',
        'HTML/CSS'
    ]
];

/* 
    CONVERTENDO PARA JSON, 
    FORMATANDO PARA O FORMATO ARRAY,
    NÃO ESCAPANDO OS CARACTERES UNICODE,
    NÃO ESCAPANDO AS BARRAS,
    ESCAPANDO TAGS HTML,
    ESCAPANDO ASPAS DUPLAS,


*/
$json = json_encode($array, JSON_PRETTY_PRINT | 
                            JSON_UNESCAPED_UNICODE |
                            JSON_UNESCAPED_SLASHES |
                            JSON_HEX_TAG | 
                            JSON_HEX_QUOT);

// IMPRESSÃO
echo('<pre>'); print_r($array); echo('</pre>');
echo('<pre>'); print_r($json); echo('</pre>');

echo('<hr> <h2>Exemplo 09 - Array e Constantes(1 | 2 | 3 | 4 | 5 | 6) JSON</h2>');

// CRIAÇÃO DE UM ARRAY
$array = [
    'nome' => 'Matheus Pereira',
    'email' => 'matheus.pereira@gmail.com',
    'titulo' => '<title>Sou um Programador</title>',
    'caracteres' => '\'Teste\' & "TESTE 2"',
    'linguagens' => [
        'PHP',
        'Javascript',
        'HTML/CSS'
    ]
];

/* 
    CONVERTENDO PARA JSON, 
    FORMATANDO PARA O FORMATO ARRAY,
    NÃO ESCAPANDO OS CARACTERES UNICODE,
    NÃO ESCAPANDO AS BARRAS,
    ESCAPANDO TAGS HTML,
    ESCAPANDO ASPAS DUPLAS,
    REMOVENDO O CARACTERE '&',


*/
$json = json_encode($array, JSON_PRETTY_PRINT | 
                            JSON_UNESCAPED_UNICODE |
                            JSON_UNESCAPED_SLASHES |
                            JSON_HEX_TAG | 
                            JSON_HEX_QUOT | 
                            JSON_HEX_AMP);

// IMPRESSÃO
echo('<pre>'); print_r($array); echo('</pre>');
echo('<pre>'); print_r($json); echo('</pre>');

echo('<hr> <h2>Exemplo 10 - Array e Constantes(1 | 2 | 3 | 4 | 5 | 6 | 7) JSON</h2>');

// CRIAÇÃO DE UM ARRAY
$array = [
    'nome' => 'Matheus Pereira',
    'email' => 'matheus.pereira@gmail.com',
    'titulo' => '<title>Sou um Programador</title>',
    'caracteres' => '\'Teste\' & "TESTE 2"',
    'linguagens' => [
        'PHP',
        'Javascript',
        'HTML/CSS'
    ]
];

/* 
    CONVERTENDO PARA JSON, 
    FORMATANDO PARA O FORMATO ARRAY,
    NÃO ESCAPANDO OS CARACTERES UNICODE,
    NÃO ESCAPANDO AS BARRAS,
    ESCAPANDO TAGS HTML,
    ESCAPANDO ASPAS DUPLAS,
    REMOVENDO O CARACTERE '&',
    ESCAPANDO ASPAS SIMPLES ' ' ', TRANSFORMANDO EM UNICODE


*/
$json = json_encode($array, JSON_PRETTY_PRINT | 
                            JSON_UNESCAPED_UNICODE |
                            JSON_UNESCAPED_SLASHES |
                            JSON_HEX_TAG | 
                            JSON_HEX_QUOT | 
                            JSON_HEX_AMP |
                            JSON_HEX_APOS);

// IMPRESSÃO
echo('<pre>'); print_r($array); echo('</pre>');
echo('<pre>'); print_r($json); echo('</pre>');


echo('<hr> <h2>Exemplo 11 - Array e Constantes(1 | 2 | 3 | 4 | 5 | 6 | 7 | 8) JSON</h2>');

// CRIAÇÃO DE UM ARRAY
$array = [
    'nome' => 'Matheus Pereira',
    'email' => 'matheus.pereira@gmail.com',
    'titulo' => '<title>Sou um Programador</title>',
    'caracteres' => '\'Teste\' & "TESTE 2"',
    'linguagens' => [
        'PHP',
        'Javascript',
        'HTML/CSS'
    ],
    'filtros' => [
        'php'  => 'Linguagem PHP',
        'atom' => 'Editor Atom',
        'css'  => 'Folha de estilo'
    ]
];

/* 
    CONVERTENDO PARA JSON, 
    FORMATANDO PARA O FORMATO ARRAY,
    NÃO ESCAPANDO OS CARACTERES UNICODE,
    NÃO ESCAPANDO AS BARRAS,
    ESCAPANDO TAGS HTML,
    ESCAPANDO ASPAS DUPLAS,
    REMOVENDO O CARACTERE '&',
    ESCAPANDO ASPAS SIMPLES ' ' ', 
    TRANSFORMANDO EM UNICODE,
    FORÇANDO SER UM OBJETO JSON


*/
$json = json_encode($array, JSON_PRETTY_PRINT | 
                            JSON_UNESCAPED_UNICODE |
                            JSON_UNESCAPED_SLASHES |
                            JSON_HEX_TAG | 
                            JSON_HEX_QUOT | 
                            JSON_HEX_AMP |
                            JSON_HEX_APOS |
                            JSON_FORCE_OBJECT);

// IMPRESSÃO
echo('<pre>'); print_r($array); echo('</pre>');
echo('<pre>'); print_r($json); echo('</pre>');

echo('<hr> <h2>Exemplo 12 - Array e Constantes(1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9) JSON</h2>');

// CRIAÇÃO DE UM ARRAY
$array = [
    'nome' => 'Matheus Pereira',
    'email' => 'matheus.pereira@gmail.com',
    'titulo' => '<title>Sou um Programador</title>',
    'caracteres' => '\'Teste\' & "TESTE 2"',
    'linguagens' => [
        'PHP',
        'Javascript',
        'HTML/CSS'
    ],
    'filtros' => [
        'php'  => 'Linguagem PHP',
        'atom' => 'Editor Atom',
        'css'  => 'Folha de estilo'
    ],
    'numeros' => [
        "10", "20", "30", "40"
    ]
];

/* 
    CONVERTENDO PARA JSON, 
    FORMATANDO PARA O FORMATO ARRAY,
    NÃO ESCAPANDO OS CARACTERES UNICODE,
    NÃO ESCAPANDO AS BARRAS,
    ESCAPANDO TAGS HTML,
    ESCAPANDO ASPAS DUPLAS,
    REMOVENDO O CARACTERE '&',
    ESCAPANDO ASPAS SIMPLES ' ' ', 
    TRANSFORMANDO EM UNICODE,
    FORÇANDO SER UM OBJETO JSON,
    FORÇANDO SER NÚMEROS QUANDO TIVEREM ASPAS DUPLAS,
    VERIFICANDO SE SÃO SOMENTE NÚMEROS

*/
$json = json_encode($array, JSON_PRETTY_PRINT | 
                            JSON_UNESCAPED_UNICODE |
                            JSON_UNESCAPED_SLASHES |
                            JSON_HEX_TAG | 
                            JSON_HEX_QUOT | 
                            JSON_HEX_AMP |
                            JSON_HEX_APOS |
                            JSON_FORCE_OBJECT |
                            JSON_NUMERIC_CHECK);

// IMPRESSÃO
echo('<pre>'); print_r($array); echo('</pre>');
echo('<pre>'); print_r($json); echo('</pre>');

echo('<hr> <h2>Exemplo 13 - Array e Constantes(1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10) JSON</h2>');

// CRIAÇÃO DE UM ARRAY
$array = [
    'nome' => 'Matheus Pereira',
    'email' => 'matheus.pereira@gmail.com',
    'titulo' => '<title>Sou um Programador</title>',
    'caracteres' => '\'Teste\' & "TESTE 2"',
    'linguagens' => [
        'PHP',
        'Javascript',
        'HTML/CSS'
    ],
    'filtros' => [
        'php'  => 'Linguagem PHP',
        'atom' => 'Editor Atom',
        'css'  => 'Folha de estilo'
    ],
    'numeros' => [
        "10", "20", "30", "40", 10.55, 15.00, 150.68
    ]
];

/* 
    CONVERTENDO PARA JSON, 
    FORMATANDO PARA O FORMATO ARRAY,
    NÃO ESCAPANDO OS CARACTERES UNICODE,
    NÃO ESCAPANDO AS BARRAS,
    ESCAPANDO TAGS HTML,
    ESCAPANDO ASPAS DUPLAS,
    REMOVENDO O CARACTERE '&',
    ESCAPANDO ASPAS SIMPLES ' ' ', 
    TRANSFORMANDO EM UNICODE,
    FORÇANDO SER UM OBJETO JSON,
    FORÇANDO SER NÚMEROS QUANDO TIVEREM ASPAS DUPLAS,
    VERIFICANDO SE SÃO SOMENTE NÚMEROS,
    NÃO REMOVENDO AS FRAÇÕES

*/
$json = json_encode($array, JSON_PRETTY_PRINT | 
                            JSON_UNESCAPED_UNICODE |
                            JSON_UNESCAPED_SLASHES |
                            JSON_HEX_TAG | 
                            JSON_HEX_QUOT | 
                            JSON_HEX_AMP |
                            JSON_HEX_APOS |
                            JSON_FORCE_OBJECT |
                            JSON_NUMERIC_CHECK |
                            JSON_PRESERVE_ZERO_FRACTION);

// IMPRESSÃO
echo('<pre>'); print_r($array); echo('</pre>');
echo('<pre>'); print_r($json); echo('</pre>');


echo('<hr> <h2>Exemplo 14 - Consumir JSON</h2>');

// FORÇANDO UM ERRO
// $json .= 'fdfafafdfdsfasdfasd';

// FORÇANDO A TRANSFORMAÇÃO EM ARRAY
$decode = json_decode($json, true);

// IMPRESSÃO
echo('<pre>'); print_r($decode); echo('</pre>');

echo('<hr> <h2>Exemplo 15 - Mostrando o ultimo erro do JSON</h2>');

// CONSTANTES COM OS ERROS EM JSON
$jsonErrors = [
    JSON_ERROR_NONE => 'Nenhum erro',

    JSON_ERROR_DEPTH => 'O limite da pilha de camadas foi ultrapassado',

    JSON_ERROR_STATE_MISMATCH => 'Ocorre em underflows ou com incongruência de modos',

    JSON_ERROR_CTRL_CHAR => 'Erro em caracter de controle, possivelmente erro de enconding',

    JSON_ERROR_SYNTAX => 'Erro de sintaxe',

    JSON_ERROR_UTF8 => 'Caracteres UTF-8 mal formados, possivelmente erro de enconding',

    JSON_ERROR_RECURSION => 'O objeto ou array passado para json_encode() inclui referências recursivas, e não pôde ser formatada',

    JSON_ERROR_INF_OR_NAN => 'Um valor passado para json_encode() inclui NAN ou INF',

    JSON_ERROR_UNSUPPORTED_TYPE => 'Um valor de um tipo não suportado foi informado para json_encode()'
];

// CAPTURANDO O ULTIMO ERRO
$lastError = json_last_error();

$error = $jsonErrors[$lastError] ?? 'Erro desconhecido ('.$lastError.')';

// IMPRESSÃO
echo('<pre>'); print_r($error); echo('</pre>');