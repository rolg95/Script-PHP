<?php
$preco = 1234.5;
$valor = 9.7;

echo 'Moeda: R$ ' . number_format($preco, 2, ',', '.') . '<br>';
echo 'Arredondado: ' . round($valor) . '<br>';
echo 'Para cima: ' . ceil($valor) . '<br>';
echo 'Para baixo: ' . floor($valor) . '<br>';
echo 'Aleatório de 1 a 10: ' . random_int(1, 10);

