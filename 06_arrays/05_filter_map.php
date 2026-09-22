<?php
$precos = [20, 55, 80, 15, 120];

// array_filter mantém apenas os itens que atendem à condição.
$acimaDeCinquenta = array_filter($precos, fn(float $preco): bool => $preco > 50);

// array_map transforma cada item e cria um novo array.
$comDesconto = array_map(fn(float $preco): float => $preco * 0.9, $acimaDeCinquenta);

echo 'Com 10% de desconto: ' . implode(', ', $comDesconto);

