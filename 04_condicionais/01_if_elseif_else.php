<?php
$media = 7.5;

// As condições são avaliadas de cima para baixo.
if ($media >= 7) {
    echo "Aprovado";
} elseif ($media >= 5) {
    echo "Em recuperação";
} else {
    echo "Reprovado";
}

