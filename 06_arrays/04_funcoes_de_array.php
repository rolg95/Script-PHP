<?php
$notas = [7.5, 9, 6, 8.5];

sort($notas);                      // Ordena do menor para o maior.
$maior = max($notas);              // Obtém o maior valor.
$menor = min($notas);              // Obtém o menor valor.
$media = array_sum($notas) / count($notas);

echo 'Notas: ' . implode(', ', $notas) . '<br>'; // implode une itens em um texto.
echo "Menor: $menor<br>Maior: $maior<br>Média: $media";

