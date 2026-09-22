<?php
// Define os blocos exibidos no menu. Cada chave é uma pasta do kit.
$blocos = [
    '01_primeiros_passos' => 'Primeiros passos',
    '02_variaveis_e_tipos' => 'Variáveis e tipos',
    '03_operadores' => 'Operadores',
    '04_condicionais' => 'Condicionais',
    '05_repeticoes' => 'Estruturas de repetição',
    '06_arrays' => 'Arrays',
    '07_funcoes' => 'Funções',
    '08_strings_datas' => 'Strings, números e datas',
    '09_formularios' => 'Formulários',
    '10_arquivos' => 'Arquivos',
    '11_sessoes_cookies' => 'Sessões e cookies',
    '12_json' => 'JSON',
    '13_banco_dados' => 'Banco de dados',
    '14_utilidades' => 'Utilidades'
];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kit de Comandos PHP</title>
    <link rel="stylesheet" href="public/estilo.css">
</head>
<body>
<main class="container">
    <header>
        <p class="tag">UC 13 • Material de consulta</p>
        <h1>Kit de Comandos PHP</h1>
        <p>Abra os exemplos, leia os comentários no código e altere os valores para investigar os resultados.</p>
    </header>

    <section class="grade">
        <?php foreach ($blocos as $pasta => $titulo): ?>
            <article class="card">
                <span><?= htmlspecialchars(substr($pasta, 0, 2)) ?></span>
                <h2><?= htmlspecialchars($titulo) ?></h2>
                <ul>
                    <?php
                    // scandir lê os nomes dos arquivos presentes na pasta do bloco.
                    $arquivos = scandir(__DIR__ . '/' . $pasta) ?: [];
                    foreach ($arquivos as $arquivo):
                        // Exibe apenas arquivos PHP e SQL; arquivos auxiliares não entram no menu.
                        if (!preg_match('/\.(php|sql)$/', $arquivo)) {
                            continue;
                        }
                    ?>
                        <li>
                            <a href="<?= htmlspecialchars($pasta . '/' . $arquivo) ?>">
                                <?= htmlspecialchars(pathinfo($arquivo, PATHINFO_FILENAME)) ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </article>
        <?php endforeach; ?>
    </section>

    <p class="aviso">Os arquivos SQL são exibidos como texto ou baixados pelo navegador. Execute-os no phpMyAdmin quando indicado.</p>
</main>
</body>
</html>
