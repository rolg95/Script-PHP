<?php
$total = 100;
$total += 25; // Equivale a: $total = $total + 25.
$total -= 10;

$nomeRecebido = null;
// ?? usa o valor da direita quando o valor da esquerda é null ou não existe.
$nomeExibido = $nomeRecebido ?? 'Visitante';

echo "Total: R$ $total<br>";
echo "Usuário: $nomeExibido";

