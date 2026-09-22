<?php
$jogos = ['Minecraft', 'Hades', 'Celeste'];

$jogos[] = 'Portal 2';       // Adiciona no final.
$jogos[1] = 'Hades II';     // Altera o item do índice 1.

echo "Primeiro jogo: {$jogos[0]}<br>";
echo "Quantidade: " . count($jogos) . "<br>";

foreach ($jogos as $jogo) {
    echo htmlspecialchars($jogo) . '<br>';
}

