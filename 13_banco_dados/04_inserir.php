<?php
require __DIR__ . '/02_conexao.php';
$mensagem = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = trim((string) filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_SPECIAL_CHARS));
    $genero = trim((string) filter_input(INPUT_POST, 'genero', FILTER_SANITIZE_SPECIAL_CHARS));
    $preco = filter_input(INPUT_POST, 'preco', FILTER_VALIDATE_FLOAT);

    if ($titulo !== '' && $genero !== '' && $preco !== false && $preco !== null) {
        // Prepared statement separa os dados do comando SQL e reduz risco de SQL Injection.
        $sql = 'INSERT INTO jogos (titulo, genero, preco) VALUES (:titulo, :genero, :preco)';
        $comando = $pdo->prepare($sql);
        $comando->execute(['titulo' => $titulo, 'genero' => $genero, 'preco' => $preco]);
        $mensagem = 'Jogo cadastrado com sucesso.';
    } else {
        $mensagem = 'Preencha todos os campos corretamente.';
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR"><head><meta charset="UTF-8"><title>Cadastrar jogo</title></head>
<body>
<form method="post">
    <label>Título: <input name="titulo" required></label><br>
    <label>Gênero: <input name="genero" required></label><br>
    <label>Preço: <input type="number" name="preco" step="0.01" min="0" required></label><br>
    <button type="submit">Cadastrar</button>
</form>
<p><?= htmlspecialchars($mensagem) ?></p>
</body></html>

