<?php
// Variáveis começam com $ e podem armazenar diferentes valores.
$nome = "Beatriz";      // string: texto
$idade = 19;            // int: número inteiro
$altura = 1.68;         // float: número decimal (usa ponto)
$matriculado = true;    // bool: verdadeiro ou falso
$observacao = null;     // null: ausência de valor

echo "Nome: $nome<br>"; // Aspas duplas permitem inserir a variável no texto.
echo "Idade: {$idade} anos<br>";
echo "Altura: {$altura} m<br>";
echo "Matriculado: " . ($matriculado ? 'Sim' : 'Não') . "<br>";
echo "Tipo de nome: " . gettype($nome);

