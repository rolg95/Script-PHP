<?php
$contador = 1;

// while testa a condição antes de executar o bloco.
while ($contador <= 3) {
    echo "while: $contador<br>";
    $contador++;
}

$tentativa = 1;
// do while executa pelo menos uma vez e testa a condição depois.
do {
    echo "do while: tentativa $tentativa<br>";
    $tentativa++;
} while ($tentativa <= 3);

