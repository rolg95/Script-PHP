<?php
for ($numero = 1; $numero <= 10; $numero++) {
    if ($numero === 3) {
        continue; // Ignora somente a repetição atual.
    }

    if ($numero === 8) {
        break; // Encerra completamente a repetição.
    }

    echo "$numero<br>";
}

