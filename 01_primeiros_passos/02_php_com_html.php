<?php
// A variável é criada antes do HTML e usada depois dentro da página.
$nome = "Ana";
$temAula = true;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="UTF-8"><title>PHP com HTML</title></head>
<body>
    <h1>Olá, <?= htmlspecialchars($nome) ?>!</h1>

    <?php if ($temAula): // Esta sintaxe alternativa facilita misturar PHP e HTML. ?>
        <p>Hoje teremos aula de PHP.</p>
    <?php else: ?>
        <p>Hoje não haverá aula.</p>
    <?php endif; ?>
</body>
</html>

