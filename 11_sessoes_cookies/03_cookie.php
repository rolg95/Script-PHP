<?php
// O cookie precisa ser definido antes de qualquer saída HTML.
setcookie('tema', 'claro', [
    'expires' => time() + 3600, // Expira em uma hora.
    'path' => '/',
    'httponly' => true,
    'samesite' => 'Lax'
]);

// O cookie criado só aparecerá em $_COOKIE na próxima requisição.
$temaAtual = $_COOKIE['tema'] ?? 'ainda não definido';
echo 'Tema lido do cookie: ' . htmlspecialchars($temaAtual);

