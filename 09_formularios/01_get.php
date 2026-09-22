<?php
// INPUT_GET lê o campo nome enviado pela URL e aplica um filtro de texto.
$nome = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="UTF-8"><title>Formulário GET</title></head>
<body>
    <form method="get">
        <label>Nome: <input type="text" name="nome"></label>
        <button type="submit">Enviar</button>
    </form>

    <?php if ($nome !== null && $nome !== ''): ?>
        <p>Olá, <?= htmlspecialchars($nome) ?>!</p>
    <?php endif; ?>
</body>
</html>

