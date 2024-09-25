<?php

include __DIR__.'/styles.php';

echo('<h1>Expressões regulares | funções</h1>');

echo('<hr> <h2>1 - preg_match</h2>');

# '(.*)' siguinifica qualquer coisa que venha depois do espaço
$pattern = '/^(canal) (.*)/';
$source  = 'canal @matheus';
$result  = preg_match($pattern, $source, $matches);

echo('<pre>');print_r($pattern);echo('</pre>');
echo('<pre>');print_r($source);echo('</pre>');
echo('<pre>');var_dump($result);echo('</pre>');
echo('<pre>');print_r($matches);echo('</pre>');

echo('<hr> <h2>2 - preg_match_all</h2>');

# '(.*)' siguinifica qualquer coisa que venha depois do espaço
$pattern = '/[0-9]+/';
$source  = '100 200 300 400 500';
$result  = preg_match_all($pattern, $source, $matches);

echo('<pre>');print_r($pattern);echo('</pre>');
echo('<pre>');print_r($source);echo('</pre>');
echo('<pre>');var_dump($result);echo('</pre>');
echo('<pre>');print_r($matches);echo('</pre>');

echo('<hr> <h2>3 - preg_replace</h2>');

$pattern = '/([0-9]+)cm/';
$source  = ['100m', '200cm'];
$replace = '$1km';
$result  = preg_replace($pattern, $replace, $source);

echo('<pre>'); print_r($pattern); echo('</pre>');
echo('<pre>'); print_r($source);  echo('</pre>');
echo('<pre>'); print_r($replace); echo('</pre>');
echo('<pre>'); print_r($result);  echo('</pre>');

echo('<hr> <h2>4 - preg_filter</h2>');

$pattern = '/([0-9]+)cm/';
$source  = ['100m', '200cm'];
$replace = '$1km';
$result  = preg_filter($pattern, $replace, $source);

echo('<pre>'); print_r($pattern); echo('</pre>');
echo('<pre>'); print_r($source);  echo('</pre>');
echo('<pre>'); print_r($replace); echo('</pre>');
echo('<pre>'); print_r($result);  echo('</pre>');

echo('<hr> <h2>5 - preg_replace_callback</h2>');

$pattern = '/([0-9]+)cm/';
$source  = ['100m', '200cm'];
$replace = function($matches){
    return $matches[1].'m a '.($matches[1]*2).'m';
};

$result  = preg_replace_callback($pattern, $replace, $source);

echo('<pre>'); print_r($pattern); echo('</pre>');
echo('<pre>'); print_r($source);  echo('</pre>');
echo('<pre>'); print_r($result);  echo('</pre>');

echo('<hr> <h2>6 - preg_split</h2>');

$pattern = '/[\s]/';
$source  = 'O rato roeu a roupa do rei de Roma';
$result  = preg_split($pattern, $source);

echo('<pre>'); print_r($pattern); echo('</pre>');
echo('<pre>'); print_r($source);  echo('</pre>');
echo('<pre>'); print_r($result);  echo('</pre>');