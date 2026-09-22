<?php
// Define o fuso usado pelas funções de data deste arquivo.
date_default_timezone_set('America/Sao_Paulo');

$agora = new DateTime();
$proximaSemana = (clone $agora)->modify('+7 days'); // clone preserva o objeto original.

echo 'Agora: ' . $agora->format('d/m/Y H:i') . '<br>';
echo 'Daqui a 7 dias: ' . $proximaSemana->format('d/m/Y') . '<br>';

$inicio = new DateTime('2026-09-01');
$fim = new DateTime('2026-09-20');
echo 'Diferença: ' . $inicio->diff($fim)->days . ' dias';

