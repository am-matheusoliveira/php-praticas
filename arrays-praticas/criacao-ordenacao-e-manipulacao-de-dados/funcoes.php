<?php

include __DIR__.'/styles.php';

echo('<h1>Funções</h1>');

$array = [
    'banana',
    'goiaba',
    'morango',
    'abacaxi'
];

$arrayAssociativo = [
    'nome'   => 'jimmy-yt',
    'canal'  => 'mrbeast',
    'contas' => [
        '01',
        '02',
        '03',
    ],
    'instagram' => null
];

echo('<h2>Count</h2>');

echo('<pre>');
echo(count($array));
echo('</pre>');

echo('<pre>');
echo(count($arrayAssociativo));
echo('</pre>');


echo('<hr>');

echo('<h2>Array Keys</h2>');

echo('<pre>');
print_r(array_keys($array));
echo('</pre>');

echo('<pre>');
print_r(array_keys($arrayAssociativo));
echo('</pre>');

echo('<hr>');

echo('<h2>Array Values</h2>');

echo('<pre>');
print_r(array_values($array));
echo('</pre>');

echo('<pre>');
print_r(array_values($arrayAssociativo));
echo('</pre>');

echo('<hr>');

echo('<h2>In Array</h2>');

echo('<pre>');
var_dump(in_array('banana', $array));
echo('</pre>');

echo('<pre>');
var_dump(in_array('conta-03', $arrayAssociativo['contas']));
echo('</pre>');

echo('<hr>');

echo('<h2>Array Search</h2>');

echo('<pre>');
var_dump(array_search('banana', $array));
echo('</pre>');

echo('<pre>');
var_dump(array_search('jimmy-yt', $arrayAssociativo));
echo('</pre>');

echo('<hr>');

echo('<h2>Isset</h2>');

echo('<pre>');
var_dump(isset($array[0]));
echo('</pre>');

echo('<pre>');
var_dump(isset($arrayAssociativo['instagram']));
echo('</pre>');

echo('<hr>');

echo('<h2>Array Key Exists</h2>');

echo('<pre>');
var_dump(array_key_exists(0, $array));
echo('</pre>');

echo('<pre>');
var_dump(array_key_exists('instagram', $arrayAssociativo));
echo('</pre>');

echo('<hr>');

echo('<h2>Array Key First</h2>');

echo('<pre>');
echo(array_key_first($array));
echo('</pre>');

echo('<hr>');

echo('<h2>Array Key Last</h2>');

echo('<pre>');
echo(array_key_last($array));
echo('</pre>');

echo('<hr>');

echo('<h2>Array Flip</h2>');

echo('<pre>');
print_r(array_flip($array));
echo('</pre>');

echo('<hr>');

echo('<h2>Implode</h2>');

echo('<pre>');
echo(implode(', ', $array));
echo('</pre>');

echo('<hr>');

echo('<h2>Explode</h2>');

echo('<pre>');
print_r(explode(' ', 'matheus oliveira pereira'));
echo('</pre>');