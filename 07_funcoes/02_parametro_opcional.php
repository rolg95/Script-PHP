<?php
// O segundo parâmetro possui valor padrão e pode ser omitido.
function calcularDesconto(float $preco, float $percentual = 10): float
{
    return $preco - ($preco * $percentual / 100);
}

echo 'Com 10%: R$ ' . number_format(calcularDesconto(100), 2, ',', '.') . '<br>';
echo 'Com 20%: R$ ' . number_format(calcularDesconto(100, 20), 2, ',', '.');

