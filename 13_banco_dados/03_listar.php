<?php
require __DIR__ . '/02_conexao.php';

// query é adequada aqui porque o comando não recebe dados do usuário.
$comando = $pdo->query('SELECT id, titulo, genero, preco FROM jogos ORDER BY titulo');
$jogos = $comando->fetchAll();
?>
<!DOCTYPE html>
<html lang="pt-BR"><head><meta charset="UTF-8"><title>Lista de jogos</title></head>
<body>
<h1>Jogos</h1>
<?php foreach ($jogos as $jogo): ?>
    <p>
        <?= htmlspecialchars($jogo['titulo']) ?> —
        <?= htmlspecialchars($jogo['genero']) ?> —
        R$ <?= number_format((float) $jogo['preco'], 2, ',', '.') ?>
    </p>
<?php endforeach; ?>
</body></html>

