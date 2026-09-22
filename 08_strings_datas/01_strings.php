<?php
$frase = '  Aprender PHP é prática!  ';
$fraseLimpa = trim($frase); // Remove espaços no início e no final.

echo "Original: [$frase]<br>";
echo "Limpa: [$fraseLimpa]<br>";
echo 'Caracteres: ' . mb_strlen($fraseLimpa) . '<br>';
echo 'Maiúsculas: ' . mb_strtoupper($fraseLimpa) . '<br>';
echo 'Substituição: ' . str_replace('prática', 'investigação', $fraseLimpa);

