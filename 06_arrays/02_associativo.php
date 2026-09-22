<?php
// Em um array associativo, cada valor possui uma chave com significado.
$jogo = [
    'titulo' => 'Celeste',
    'genero' => 'Plataforma',
    'ano' => 2018
];

echo "Título: {$jogo['titulo']}<br>";

foreach ($jogo as $campo => $valor) {
    echo htmlspecialchars($campo) . ': ' . htmlspecialchars((string) $valor) . '<br>';
}

