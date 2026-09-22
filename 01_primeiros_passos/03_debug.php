<?php
// Estas variáveis representam tipos diferentes de dados.
$aluno = [
    'nome' => 'Carlos',
    'idade' => 18,
    'ativo' => true
];

// var_dump mostra valor, tipo e estrutura. É muito útil durante o desenvolvimento.
echo '<pre>';
var_dump($aluno);
echo '</pre>';

// print_r mostra arrays de maneira mais simples.
echo '<pre>';
print_r($aluno);
echo '</pre>';

