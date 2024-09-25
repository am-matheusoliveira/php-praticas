<?php

include __DIR__.'/styles.php';

echo('<h1>Expressões Regulares - Parte 2</h1>');

echo('<hr> <h2>Exemplo 01 - Classes de caracteres</h2>');
echo('<h3>1.1 - Palavras e espaços</h3>');

# CONJUNTO DE CARACTERES
# $pattern = '/^[a-zA-Z0-9 ]+$/';

// CLASSES - ALFANÚMERICOS + UNDERLINE + ESPAÇOS/TAB/QUEBRAS DE LINHA
# '\s' isso seriam os espaços, '\w' os demais 
$pattern = '/^[\w\s]+$/';
$source = 'canal wdev';
$result = preg_match($pattern, $source);

echo('<pre>'); print_r($pattern); echo('</pre>');
echo('<pre>'); print_r($source); echo('</pre>');
echo('<pre>'); var_dump($result); echo('</pre>');

echo('<h3>1.2 - Caracteres númericos</h3>');

# CONJUNTO DE CARACTERES
# $pattern = '/^[0-9]+$/';
$pattern = '/^\d+$/'; # CARACTERES NÚMERICOS
$source = '20304 matheus   0560';
$result = preg_match($pattern, $source);

echo('<pre>'); print_r($pattern); echo('</pre>');
echo('<pre>'); print_r($source); echo('</pre>');
echo('<pre>'); var_dump($result); echo('</pre>');

echo('<h3>1.3 - Negando classes e conjuntos</h3>');
# acento circunflexo dentro do conjunto realiza uma negação
# $pattern = '/^[^0-9]+$/'; // CONJUNTO DE CARACTERES

# ou '\D' com esse 'D' maiusculo acontece uma negação
# com o '\d' minusculo sera somente numeros
# $pattern = '/^\D+$/'; // CARACTERES DIFERENTES DE [0-9]
# $pattern = '/^\W+$/'; // CARACTERES DIFERENTES DE [a-zA-Z0-9_]
$pattern = '/^\S+$/'; // CARACTERES DIFERENTES DE ESPAÇO/TAB/QUEBRA DE LINHA
$source = 'wdev_123456';
$result = preg_match($pattern, $source);

echo('<pre>'); print_r($pattern); echo('</pre>');
echo('<pre>'); print_r($source); echo('</pre>');
echo('<pre>'); var_dump($result); echo('</pre>');

echo('<h3>1.4 - Fronteiras</h3>');

# '\b' classe de caracteres de fronteira, para um match exato.
# para uma validação do inicio ao fim coloque \b dos dois lados
# $pattern = '/\bpropor\b/';
# $source = 'eu quis propor a ação de proporcionar uma festa';

# '\B' maiusculo, exatamente igual como os exemplos anteriores, mesma função. 'NEGAÇÃO'
$pattern = '/lar\B/';
$source = 'Frio combina com lar eira';

$result = preg_match($pattern, $source);

echo('<pre>'); print_r($pattern); echo('</pre>');
echo('<pre>'); print_r($source); echo('</pre>');
echo('<pre>'); var_dump($result); echo('</pre>');

echo('<hr> <h2>Exemplo 02 - Flags</h2>');
echo('<h3>2.1 - Case insensitive</h3>');

# 'i' para que o padrão seja case insensitive devemos colocar esta 'flag' no final de cada expressão
$pattern = '/^[a-zA-Z ]+$/i';
$source = 'canal WDEVV';
$result = preg_match($pattern, $source);

echo('<pre>'); print_r($pattern); echo('</pre>');
echo('<pre>'); print_r($source); echo('</pre>');
echo('<pre>'); var_dump($result); echo('</pre>');

echo('<hr> <h3>2.2 - Multi-line</h3>');

# 'm' essa e uma flag que permite re-iniciar a expressão em cada linha
$pattern = '/^wdev$/im'; // notação para trabalhar com mais de uma flag
$source = 'wdev 
wdev';
$result = preg_match($pattern, $source);

echo('<pre>'); print_r($pattern); echo('</pre>');
echo('<pre>'); print_r($source); echo('</pre>');
echo('<pre>'); var_dump($result); echo('</pre>');

echo('<hr> <h3>2.3 - Global Search</h3>');

# 'm' essa e uma flag que permite re-iniciar a expressão em cada linha
$pattern = '/^([\w]+) (OLIVEIRA)/i'; // notação para trabalhar com mais de uma flag
$source = 'matheus OLIVEIRA pereira';

# 'preg_match_all' essa função pode ser usada no lugar da flag 'g'
$result = preg_match_all($pattern, $source, $matches);

echo('<pre>'); print_r($pattern); echo('</pre>');
echo('<pre>'); print_r($source); echo('</pre>');
echo('<pre>'); var_dump($result); echo('</pre>');
echo('<pre>'); print_r($matches); echo('</pre>');

echo('<hr> <h2>Exemplo 03 - Remover caracteres indesejados</h2>');

$pattern = '/\D/';
# $source = '022.557.882-41';
$source = '+55 (98) 9 9196-8439';
$result = preg_match($pattern, $source);
$replace = preg_replace($pattern, '', $source );

echo('<pre>'); print_r($pattern); echo('</pre>');
echo('<pre>'); print_r($source); echo('</pre>');
echo('<pre>'); var_dump($result); echo('</pre>');
echo('<pre>'); print_r($replace); echo('</pre>');