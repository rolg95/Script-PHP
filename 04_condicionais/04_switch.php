<?php
$dia = 3;

// switch compara o mesmo valor com vários casos possíveis.
switch ($dia) {
    case 1:
        echo 'Segunda-feira';
        break; // Evita que o próximo caso também seja executado.
    case 2:
        echo 'Terça-feira';
        break;
    case 3:
        echo 'Quarta-feira';
        break;
    default:
        echo 'Outro dia';
}

