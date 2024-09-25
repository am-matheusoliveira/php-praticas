<?php

include __DIR__.'/styles.php';

echo('<h1>Expressões Regulares</h1>');

echo('<hr> <h2>Exemplo 01 - estrutura</h2>');

# '/expressão aqui dentro/' inicio
$pattern = '/youtube/';
$source = 'canal wdev youtube';
$result = preg_match($pattern, $source);

echo('<pre>'); print_r($pattern); echo('</pre>');
echo('<pre>'); print_r($source); echo('</pre>');
echo('<pre>'); var_dump($result); echo('</pre>');

echo('<hr> <h2>Exemplo 02 - início e fim</h2>');

# '^' inicia com 'qualquer coisa' - '$' finaliza com 'qualquer coisa'
# $pattern = '/^youtube/';
$pattern = '/^wdev$/';
$source = 'wdev';
$result = preg_match($pattern, $source);

echo('<pre>'); print_r($pattern); echo('</pre>');
echo('<pre>'); print_r($source); echo('</pre>');
echo('<pre>'); var_dump($result); echo('</pre>');

echo('<hr> <h2>Exemplo 03 - conjuntos</h2>');

# '[conjuntos - numeros, letras e outros]' exemplos abaixo.
# $pattern = '/[wdev]/';
# $pattern = '/[a-zA-Z]/';
# $pattern = '/[0-9]/';
$pattern = '/[a-zA-Z0-9\-]/';
$source = '-';
$result = preg_match($pattern, $source);

echo('<pre>'); print_r($pattern); echo('</pre>');
echo('<pre>'); print_r($source); echo('</pre>');
echo('<pre>'); var_dump($result); echo('</pre>');

echo('<hr> <h2>Exemplo 04 - ocorrências definidas</h2>');

# '{ini, fim}' ocorrências com grupos 
# $pattern = '/^[0-9]{2}/';
$pattern = '/^[0-9]{4}[a-z]{2,4}$/';
$source = '1234abcd';
$result = preg_match($pattern, $source);

echo('<pre>'); print_r($pattern); echo('</pre>');
echo('<pre>'); print_r($source); echo('</pre>');
echo('<pre>'); var_dump($result); echo('</pre>');

echo('<hr> <h2>Exemplo 05 - nenehuma ou uma ocorrência</h2>');

# '?' esse caractere e o 'opcional' exemplo 'e?' ou '[a-z]?' ele pode ser usado como mostra o exemplo abaixo.
$pattern = '/jp[a-z]?g/';
$source = 'jpeg';
$result = preg_match($pattern, $source);

echo('<pre>'); print_r($pattern); echo('</pre>');
echo('<pre>'); print_r($source); echo('</pre>');
echo('<pre>'); var_dump($result); echo('</pre>');

echo('<hr> <h2>Exemplo 06 - nenehuma ou N ocorrências</h2>');

# '*' com esse caractere podemos dizer que os caracteres anteriores são opcional.
# $pattern = '/^teste*$/';

# '.' isso quer dizer que pode ser qualquer caractere que não seja uma quebra de linha
$pattern = '/^teste.*legal*$/';
$source = 'teste wdev legal';
$result = preg_match($pattern, $source);

echo('<pre>'); print_r($pattern); echo('</pre>');
echo('<pre>'); print_r($source); echo('</pre>');
echo('<pre>'); var_dump($result); echo('</pre>');

echo('<hr> <h2>Exemplo 07 - ao menos uma ocorrência</h2>');

# uso de contra barra '\', inicio(^), fim($) conjuntos
$pattern = '/^[0-9a-zA-Z\-]+\.txt$/';
$source = 'teste-legal.txt';
$result = preg_match($pattern, $source);

echo('<pre>'); print_r($pattern); echo('</pre>');
echo('<pre>'); print_r($source); echo('</pre>');
echo('<pre>'); var_dump($result); echo('</pre>');

echo('<hr> <h2>Exemplo 08 - grupos</h2>');

# conjuntos, grupos, contra barra, inicio(^) e fim($)
$pattern = '/^([0-9a-zA-Z\-]+)(\.)(txt)$/';
$source = 'teste-legal.txt';
$result = preg_match($pattern, $source, $matches);

echo('<pre>'); print_r($pattern); echo('</pre>');
echo('<pre>'); print_r($source); echo('</pre>');
echo('<pre>'); var_dump($result); echo('</pre>');
echo('<pre>'); print_r($matches); echo('</pre>');

echo('<hr> <h2>Exemplo 09 - replace com grupos</h2>');

# grupos, conjuntos, inicio(^), fim($) e preg_replace com formatação e matches 
$pattern = '/^([0-9]{3})([0-9]{3})([0-9]{3})([0-9]{2})$/';
$source = '02255788241';
$result = preg_match($pattern, $source, $matches);
$replace = preg_replace($pattern, '$1.$2.$3-$4', $source);

echo('<pre>'); print_r($pattern); echo('</pre>');
echo('<pre>'); print_r($source); echo('</pre>');
echo('<pre>'); var_dump($result); echo('</pre>');
echo('<pre>'); print_r($matches); echo('</pre>');
echo('<pre>'); print_r($replace); echo('</pre>');















