<?php
$caminho = __DIR__ . '/mensagens.txt'; // __DIR__ representa a pasta deste arquivo.
$novaLinha = "Estudar um pouco por dia ajuda.\n";

// FILE_APPEND adiciona ao final; LOCK_EX evita escritas simultâneas.
file_put_contents($caminho, $novaLinha, FILE_APPEND | LOCK_EX);

// file_get_contents lê todo o conteúdo de uma vez.
$conteudo = file_get_contents($caminho);
echo '<pre>' . htmlspecialchars($conteudo) . '</pre>';

