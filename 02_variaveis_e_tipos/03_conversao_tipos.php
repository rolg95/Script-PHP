<?php
$textoIdade = "20";

// (int) converte o texto numérico para um número inteiro.
$idade = (int) $textoIdade;

// Outras conversões comuns: (float), (string), (bool) e (array).
$precoTexto = "29.90";
$preco = (float) $precoTexto;

echo "No próximo ano: " . ($idade + 1) . " anos<br>";
echo "Preço convertido: R$ " . number_format($preco, 2, ',', '.');

