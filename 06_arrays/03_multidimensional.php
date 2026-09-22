<?php
// Este array funciona como uma pequena lista de registros.
$jogos = [
    ['titulo' => 'Celeste', 'preco' => 36.99],
    ['titulo' => 'Hades', 'preco' => 73.99],
    ['titulo' => 'Stardew Valley', 'preco' => 24.99]
];
?>
<table border="1" cellpadding="8">
    <tr><th>Jogo</th><th>Preço</th></tr>
    <?php foreach ($jogos as $jogo): ?>
        <tr>
            <td><?= htmlspecialchars($jogo['titulo']) ?></td>
            <td>R$ <?= number_format($jogo['preco'], 2, ',', '.') ?></td>
        </tr>
    <?php endforeach; ?>
</table>

