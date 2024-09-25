<?php

// TAMANHO
$tamanho = (int)readline('Digite o tamanho da senha: (entre 6 e 60): ');

// VERIFICA O TAMANHO DA SENHA
if($tamanho < 6 || $tamanho > 60){
    die("Tamanho inválido\n\n");
}

// CARACTERES DA SENHA
$caracteres = [];

// MAIÚSCULAS
if(readline('Permitir letras maiúsculas? (s/n) ') == 's'){
    $caracteres = array_merge($caracteres, range('A', 'Z'));
}

// MINÚSCULAS
if(readline('Permitir letras minúsculas? (s/n) ') == 's'){
    $caracteres = array_merge($caracteres, range('a', 'z'));
}

// CARACTERES NUMÉRICOS
if(readline('Permitir caracteres numéricos? (s/n) ') == 's'){
    $caracteres = array_merge($caracteres, range(0, 9));
}

// CARACTERES ESPECIAIS
if(readline('Permitir caracteres especiais? (s/n) ') == 's'){
    $caracteres[] = '!';
    $caracteres[] = '@';
    $caracteres[] = '#';
    $caracteres[] = '$';
    $caracteres[] = '%';
    $caracteres[] = '&';
    $caracteres[] = '*';
    $caracteres[] = '-';
    $caracteres[] = '_';
    $caracteres[] = '+';
}

// VALIDAÇÃO DOS CARACTERES DA SENHA
if(empty($caracteres)){
    die("Nenhum caractere definido\n\n");
}

// AJUSTA A QUANTIDADE DE CARACTERES
while(count($caracteres) < $tamanho){
    $caracteres = array_merge($caracteres, $caracteres);
}

// BAGUNÇA OS CARACTERES
shuffle($caracteres);

// NOVA SENHA
$senha = implode('', array_slice($caracteres, 0, $tamanho));

// IMPRIME A SENHA
echo("\nNova senha: ".$senha."\n\n");