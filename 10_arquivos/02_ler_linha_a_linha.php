<?php
$caminho = __DIR__ . '/frases.txt';

if (!file_exists($caminho)) {
    exit('Crie o arquivo frases.txt nesta pasta antes de executar.');
}

$arquivo = fopen($caminho, 'r'); // r abre somente para leitura.

while (($linha = fgets($arquivo)) !== false) {
    echo '<p>' . htmlspecialchars(trim($linha)) . '</p>';
}

fclose($arquivo); // Libera o recurso aberto.

