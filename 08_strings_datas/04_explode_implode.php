<?php
$texto = 'PHP,HTML,CSS,JavaScript';

// explode separa um texto e cria um array.
$tecnologias = explode(',', $texto);

// implode une os itens de um array em um único texto.
$lista = implode(' • ', $tecnologias);

echo htmlspecialchars($lista);

