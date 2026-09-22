<?php
$numeros = [1, 2, 3, 4];

// A arrow function recebe cada número e devolve seu dobro.
$dobrados = array_map(fn(int $numero): int => $numero * 2, $numeros);

echo implode(', ', $dobrados);

