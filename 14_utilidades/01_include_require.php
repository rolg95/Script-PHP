<?php

// require carrega outro arquivo PHP dentro deste arquivo.
// Se o arquivo não existir, a execução será interrompida.
require __DIR__ . '/cabecalho.php';

// __DIR__ representa a pasta onde este arquivo atual está localizado.
// Depois, concatenamos "/cabecalho.php" para formar o caminho completo.
?>

    <main>
        <!-- <main> representa o conteúdo principal da página. -->

        <h1>Conteúdo principal</h1>
        <!-- <h1> representa o título principal desta página. -->

        <p>Separar partes repetidas evita duplicação.</p>
        <!-- <p> cria um parágrafo de texto. -->
    </main>

<?php

// Carrega o arquivo rodape.php no final da página.
// Isso permite reutilizar o mesmo rodapé em várias páginas.
require __DIR__ . '/rodape.php';

?>