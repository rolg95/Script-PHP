<?php
$caminho = __DIR__ . '/alunos.csv';
$arquivo = fopen($caminho, 'w'); // w cria ou substitui o arquivo.

fputcsv($arquivo, ['nome', 'curso', 'nota'], ';');
fputcsv($arquivo, ['Ana', 'Informática', 8.5], ';');
fputcsv($arquivo, ['João', 'Informática', 7.0], ';');
fclose($arquivo);

echo 'CSV criado em: ' . htmlspecialchars($caminho);

