<?php

include __DIR__.'/styles.php';

echo('<h1>Expressões Regulares - Parte 03</h1>');

echo('<hr> <h2>Exemplo 01 - Operador OR</h2>');

# '|' caractere PIPE em programação é conhecido como operador OR
# $pattern = '/^(\w+): ([\w@\-]+)$/';
$pattern = '/^(facebook|youtube|[a-z]+): ([\w@\-]+)$/';
$source  = 'twitter: @matheus';
$result  = preg_match($pattern, $source, $matches); 

echo('<pre>'); print_r($pattern); echo('</pre>');
echo('<pre>'); print_r($source); echo('</pre>');
echo('<pre>'); var_dump($result); echo('</pre>');
echo('<pre>'); print_r($matches); echo('</pre>');

echo('<hr> <h2>Exemplo 02 - Caracteres com acento</h2>');

# 'á-ù' isso e um range de caracteres com acento devemos usa-los quando formos trabalhar com acentos nas palavras
$pattern = '/^([a-zá-ùÁ-Ù]+)$/i';
$source  = 'PÃO';
$result  = preg_match($pattern, $source, $matches); 

echo('<pre>'); print_r($pattern); echo('</pre>');
echo('<pre>'); print_r($source); echo('</pre>');
echo('<pre>'); var_dump($result); echo('</pre>');
echo('<pre>'); print_r($matches); echo('</pre>');

echo('<hr> <h2>Exemplo 03 - Nomeando grupos</h2>');

# '?<somente nomes, númetos sempre apos o 1º caractere>' isso e uma forma de você dar nomes aos seus grupos em sua expressão regular
$pattern = '/^(?<redeSocial>\w+): (?<username>[\w@\-]+)$/';
$source  = 'facebook: @matheus';
$result  = preg_match($pattern, $source, $matches); 

echo('<pre>'); print_r($pattern); echo('</pre>');
echo('<pre>'); print_r($source); echo('</pre>');
echo('<pre>'); var_dump($result); echo('</pre>');
echo('<pre>'); print_r($matches); echo('</pre>');

echo('<hr> <h2>Exemplo 04 - Grupos não capturados</h2>');

# '?' com esse operador você também esta dizendo que vai executar uma ação adicional em um grupo
# nesse exemplos usamos '?:' isso e para que possamos ignorar um grupo especifico
# podemos inclusi-ve criar sub-grupos, como mostrado abaixo
$pattern = '/^(?:facebook|(youtube)|[a-z]+): ([\w@\-]+)$/';
$source  = 'facebook: @matheus';
$result  = preg_match($pattern, $source, $matches); 

echo('<pre>'); print_r($pattern); echo('</pre>');
echo('<pre>'); print_r($source); echo('</pre>');
echo('<pre>'); var_dump($result); echo('</pre>');
echo('<pre>'); print_r($matches); echo('</pre>');

echo('<hr> <h2>Exemplo 05 - Lookahead</h2>');

# '(?=[a-z])' isso siguinifica que vamos executar uma ação que esta dando sequencia a alguma coisa 
# expressão completa: /\d+(?=[a-z])/ começa com: somente números depois textos como 100px, com essa expressão vamos pegar os dois juntos
# $pattern = '/\d+(?=[a-z])/';

# no exemplo abaixo estamos negando uma expressão com o caractere '!'
$pattern = '/\d+(?![a-z])/';
$source  = '100px 50 200m 98 10kg';
$result  = preg_match_all($pattern, $source, $matches); 

echo('<pre>'); print_r($pattern); echo('</pre>');
echo('<pre>'); print_r($source); echo('</pre>');
echo('<pre>'); var_dump($result); echo('</pre>');
echo('<pre>'); print_r($matches); echo('</pre>');

echo('<hr> <h2>Exemplo 06 - Lookbehind</h2>');

# neste exemplo esta trabalhando de frente para tras ou Lookbehind, estamos usando dois caras,
# o 1º '<=' com ele trazemos apenas aquilo que esta tras ou e igual, o 2º e oque já vimos acima, '!' negação

# $pattern = '/(?<=[0-9])[a-z]+/'; // Oque deve vir
$pattern = '/(?<![0-9])[a-z]+/'; // Negação doque não devevir

$source  = '100px 50 200m 98 10kg 3metro';
$result  = preg_match_all($pattern, $source, $matches); 

echo('<pre>'); print_r(htmlentities($pattern)); echo('</pre>');
echo('<pre>'); print_r($source); echo('</pre>');
echo('<pre>'); var_dump($result); echo('</pre>');
echo('<pre>'); print_r($matches); echo('</pre>');