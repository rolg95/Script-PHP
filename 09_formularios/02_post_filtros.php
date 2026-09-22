<?php
$mensagem = '';

// O processamento só ocorre quando o formulário é enviado por POST.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = trim((string) filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS));
    $idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    // A validação verifica se os dados atendem às regras esperadas.
    if ($nome === '' || $idade === false || $idade === null || $email === false || $email === null) {
        $mensagem = 'Preencha os dados corretamente.';
    } else {
        $mensagem = "Cadastro recebido: $nome, $idade anos, $email";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="UTF-8"><title>POST e filtros</title></head>
<body>
    <form method="post">
        <label>Nome: <input name="nome" required></label><br>
        <label>Idade: <input type="number" name="idade" required></label><br>
        <label>E-mail: <input type="email" name="email" required></label><br>
        <button type="submit">Cadastrar</button>
    </form>
    <p><?= htmlspecialchars($mensagem) ?></p>
</body>
</html>

