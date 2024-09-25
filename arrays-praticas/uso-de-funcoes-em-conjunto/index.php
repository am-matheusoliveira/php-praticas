<?php

include __DIR__.'/styles.php';

echo('<h1>7 dicas - Arrays em PHP </h1>');

echo('<hr>');

echo('<h2>Prática 01 - Extract</h2>');

$array = [
    'nome'  => 'matheus pereira',
    'canal' => 'matheus-cursos',
    'email' => 'matheus@gmail.com',
    'contato' => [
        'telefone_01' => '98991968439',
        'telefone_02' => '98991968438'
    ]
];

echo('<pre>');
print_r($array);
echo('</pre>');

// extract($array);
// 
// echo('Nome: '. $nome .'<br/>');
// echo('Canal: '. $canal .'<br/>');
// echo('E-mail: '. $email .'<br/>');
// echo('Telefone_01: '. $contato['telefone_01'] .'<br/>');
// echo('Telefone_02: '. $contato['telefone_02'] .'<br/>');
// 
// # ou 
// 
// extract($contato);
// 
// echo('Telefone-01: '. $telefone_01 .'<br/>');
// echo('Telefone-02: '. $telefone_02 .'<br/>');

# Prática - definido o tipo da extração e o prefixo

# EXEMPLO DE UMA VARIAVEL QUE SERA SOBRESCRITA:
$nome = 'PHP - MYSQL';

/**
 * TIPOS DE EXTRAÇÃO: 
 *  EXTR_PREFIX_ALL, 'prefix_name'
 *  EXTR_SKIP OBS: ESSE TIPO DE EXTRAÇÃO IRA PULA UMA VARIAVEL CASO ELA JÁ TENHA SIDO DEFINIDA
 *  EXTR_PREFIX_IF_EXISTS OBS: SERA CRIADO UM PREFIXO DE FORMA CONDICIONAL CASO UMA VARIAVEL JÁ EXISTA 
*/
extract($array, EXTR_PREFIX_IF_EXISTS, 'varname');

echo('Nome: '.   $nome .'<br/>');
echo('Nome: '.   $varname_nome .'<br/>');
echo('Canal: '.  $canal .'<br/>');
echo('E-mail: '. $email .'<br/>');
echo('Telefone_01: '. $contato['telefone_01'] .'<br/>');
echo('Telefone_02: '. $contato['telefone_02'] .'<br/>');

echo('<hr>');

echo('<h2>Prática 02 - Compact</h2>');

$rua         = 'Rua Ipiranga';
$numero      = '10';
$bairro      = 'Centro';
$cidade      = 'São Paulo';
$uf          = 'SP';
$cep         = '12345-678';
$complemento = 'Casa Preta Laranja';

$array = compact('rua', 'numero', 'bairro', 'cidade', 'uf', 'cep', 'complemento');

echo('<pre>');
print_r($array);
echo('</pre>');

echo('<hr>');

echo('<h2>Prática 03 - Concatenação condicional de valores</h2>');

$endereco = implode(' - ', array_filter($array));

echo('<pre>');
print_r($endereco);
echo('</pre>');

echo('<hr>');

echo('<h2>Prática 04 - Chaves maiúsculas e minúsculas</h2>');

$array = [
    'nome'  => 'matheus pereira',
    'canal' => 'matheus-cursos',
    'email' => 'matheus@gmail.com',
    'contato' => [
        'telefone_01' => '98991968439',
        'telefone_02' => '98991968438'
    ]
];

# ANTES
echo('<pre>');
print_r($array);
echo('</pre>');

# DEPOIS
echo('<pre>');
    print_r(array_change_key_case($array, CASE_LOWER));
    print_r(array_change_key_case($array['contato'], CASE_LOWER));

    print_r(array_change_key_case($array, CASE_UPPER));
    print_r(array_change_key_case($array['contato'], CASE_UPPER));
echo('</pre>');

echo('<hr>');

echo('<h2>Prática 05 - Dados aleatórios</h2>');

$array = [ 'Azul', 'Amarelo', 'Vermelho', 'Verde', 'Branco' ];

# ANTES
echo('<pre>');
print_r($array);
echo('</pre>');

shuffle($array);

# DEPOIS - 01
echo('<pre>');
print_r($array);
echo('</pre>');

# DEPOIS - 02
echo('<pre>');
print_r($array[array_rand($array)]);
echo('</pre>');

echo('<hr>');

echo('<h2>Prática 06 - Somando valores - combinando funções</h2>');

$array = [ 
    [ 'id' => 10, 'nome' => 'Notebook - 10', 'valor' => 1500.00 ],
    [ 'id' => 20, 'nome' => 'Notebook - 20', 'valor' => 2500.00 ],
    [ 'id' => 30, 'nome' => 'Notebook - 30', 'valor' => 3500.00 ],
    [ 'id' => 40, 'nome' => 'Notebook - 40', 'valor' => 4500.00 ],
    [ 'id' => 50, 'nome' => 'Notebook - 50', 'valor' => 5500.00 ]
];

# ANTES
echo('<pre>');
print_r($array);
echo('</pre>');

$total = array_sum(array_column($array, 'valor'));

# DEPOIS
echo('<pre>');
print_r($total);
echo('</pre>');

echo('<hr>');

echo('<h2>Prática 07 - Variáveis com base em textos puros</h2>');


$texto = '1|Notebook|1000.00|200'; 

# ANTES
echo('<pre>');
print_r($texto);
echo('</pre>');

$array = explode('|', $texto);

# DEPOIS - 01
echo('<pre>');
print_r($array);
echo('</pre>');

# TRANSFORMANDO O ARRAY EM VARIAVEIS
list($id, $nome, $valor, $estoque) = $array;

echo('Id: '.   $id .'<br/>');
echo('Nome: '.   $nome .'<br/>');
echo('Valor: '.  $valor .'<br/>');
echo('Estoque: '. $estoque .'<br/>');


echo('<hr>');

echo('<h2>Prática 07 - Variáveis com base em textos puros - parte 02 - Regex</h2>');

$array = [];
$texto = '10Notebook AsusR$1000.00300'; 

preg_match('/([0-9]+)(.*)R\$([0-9]+\.[0-9]{2})([0-9]+)/', $texto, $matches);

# ANTES
echo('<pre>');
print_r($texto);
echo('</pre>');

# DEPOIS
echo('<pre>');
print_r($matches);
echo('</pre>');

# TRANSFORMANDO O ARRAY EM VARIAVEIS
list($id, $nome, $valor, $estoque) = array_slice($matches, 1);

echo('Id: '.   $id .'<br/>');
echo('Nome: '.   $nome .'<br/>');
echo('Valor: '.  $valor .'<br/>');
echo('Estoque: '. $estoque .'<br/>');