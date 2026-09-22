<?php
$jogo = [
    'titulo' => 'Celeste',
    'genero' => 'Plataforma',
    'disponivel' => true
];

// Informa ao navegador que a resposta possui formato JSON.
header('Content-Type: application/json; charset=utf-8');

// json_encode converte um array PHP em texto JSON.
echo json_encode($jogo, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

