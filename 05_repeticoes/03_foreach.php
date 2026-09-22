<?php
$cursos = ['Informática', 'Games', 'IoT'];

// foreach percorre cada item de um array.
foreach ($cursos as $indice => $curso) {
    // O índice começa em 0; somamos 1 apenas para exibição.
    $posicao = $indice + 1;
    echo "$posicao. $curso<br>";
}

