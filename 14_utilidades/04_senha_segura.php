<?php
$senhaDigitada = 'MinhaSenha123';

// password_hash cria um resumo seguro. O resultado deve ser salvo no banco.
$hash = password_hash($senhaDigitada, PASSWORD_DEFAULT);

// password_verify compara a senha informada com o hash armazenado.
$senhaCorreta = password_verify('MinhaSenha123', $hash);

echo 'Hash: ' . htmlspecialchars($hash) . '<br>';
echo 'Senha confere? ' . ($senhaCorreta ? 'Sim' : 'Não');

