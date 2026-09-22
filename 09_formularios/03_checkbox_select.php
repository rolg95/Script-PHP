<?php
$resultado = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $turno = filter_input(INPUT_POST, 'turno', FILTER_SANITIZE_SPECIAL_CHARS) ?? '';
    // FILTER_REQUIRE_ARRAY informa que interesses deve chegar como array.
    $interesses = filter_input(INPUT_POST, 'interesses', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY) ?? [];
    $interesses = array_map('htmlspecialchars', $interesses);
    $resultado = 'Turno: ' . htmlspecialchars($turno) . ' | Interesses: ' . implode(', ', $interesses);
}
?>
<!DOCTYPE html>
<html lang="pt-BR"><head><meta charset="UTF-8"><title>Campos múltiplos</title></head>
<body>
<form method="post">
    <label>Turno:
        <select name="turno"><option>Manhã</option><option>Tarde</option><option>Noite</option></select>
    </label>
    <p>Interesses:</p>
    <label><input type="checkbox" name="interesses[]" value="Web"> Web</label>
    <label><input type="checkbox" name="interesses[]" value="Games"> Games</label>
    <label><input type="checkbox" name="interesses[]" value="Banco de Dados"> Banco de Dados</label>
    <button type="submit">Enviar</button>
</form>
<p><?= $resultado ?></p>
</body></html>

