<?php
// session_start deve ser chamado antes de qualquer saída HTML.
session_start();

$_SESSION['usuario'] = 'Aluno';
$_SESSION['acessos'] = ($_SESSION['acessos'] ?? 0) + 1;
?>
<!DOCTYPE html>
<html lang="pt-BR"><head><meta charset="UTF-8"><title>Sessão</title></head>
<body>
    <p>Usuário: <?= htmlspecialchars($_SESSION['usuario']) ?></p>
    <p>Acessos nesta sessão: <?= $_SESSION['acessos'] ?></p>
    <a href="02_encerrar_sessao.php">Encerrar sessão</a>
</body></html>

