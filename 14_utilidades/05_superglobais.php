<?php
// Superglobais ficam disponíveis em qualquer parte do script.
// Nunca presuma que uma chave existe: use ?? para oferecer um valor padrão.
$metodo = $_SERVER['REQUEST_METHOD'] ?? 'desconhecido';
$arquivoAtual = $_SERVER['PHP_SELF'] ?? 'desconhecido';
$parametrosGet = $_GET;
$dadosPost = $_POST;

echo '<pre>';
echo 'Método HTTP: ' . htmlspecialchars($metodo) . "\n";
echo 'Arquivo atual: ' . htmlspecialchars($arquivoAtual) . "\n\n";
echo "GET:\n";
print_r($parametrosGet);
echo "\nPOST:\n";
print_r($dadosPost);
echo '</pre>';

