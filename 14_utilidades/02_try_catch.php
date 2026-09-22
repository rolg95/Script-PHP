<?php
function dividir(float $a, float $b): float
{
    if ($b == 0) {
        throw new InvalidArgumentException('Não é possível dividir por zero.');
    }
    return $a / $b;
}

try {
    echo dividir(10, 0);
} catch (InvalidArgumentException $erro) {
    // catch permite tratar a exceção sem exibir uma tela de erro técnico.
    echo 'Problema: ' . htmlspecialchars($erro->getMessage());
}

