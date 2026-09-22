<?php
$textoJson = '{"titulo":"Hades","preco":73.99,"disponivel":true}';

// O argumento true faz o JSON virar um array associativo.
$jogo = json_decode($textoJson, true);

if (json_last_error() !== JSON_ERROR_NONE) {
    exit('JSON inválido: ' . json_last_error_msg());
}

echo 'Jogo: ' . htmlspecialchars($jogo['titulo']) . '<br>';
echo 'Preço: R$ ' . number_format($jogo['preco'], 2, ',', '.');

