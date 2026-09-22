<?php
require __DIR__ . '/02_conexao.php';

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
$jogo = null;

if ($id !== false && $id !== null) {
    $comando = $pdo->prepare('SELECT id, titulo, genero, preco FROM jogos WHERE id = :id');
    $comando->execute(['id' => $id]);
    $jogo = $comando->fetch();
}
?>
<!DOCTYPE html>
<html lang="pt-BR"><head><meta charset="UTF-8"><title>Buscar jogo</title></head>
<body>
<form method="get">
    <label>ID: <input type="number" name="id" min="1" required></label>
    <button type="submit">Buscar</button>
</form>
<?php if ($jogo): ?>
    <p><?= htmlspecialchars($jogo['titulo']) ?> — <?= htmlspecialchars($jogo['genero']) ?></p>
<?php elseif ($id !== null): ?>
    <p>Jogo não encontrado ou ID inválido.</p>
<?php endif; ?>
</body></html>

