<?php
$mensagem = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['arquivo'])) {
    $arquivo = $_FILES['arquivo'];
    $tiposPermitidos = ['image/jpeg', 'image/png', 'application/pdf'];

    // Confere erro, tamanho máximo de 2 MB e tipo informado pelo navegador.
    if ($arquivo['error'] !== UPLOAD_ERR_OK) {
        $mensagem = 'O upload não foi concluído.';
    } elseif ($arquivo['size'] > 2 * 1024 * 1024) {
        $mensagem = 'O arquivo ultrapassa 2 MB.';
    } else {
        // finfo verifica o conteúdo real do arquivo, não apenas sua extensão.
        $tipoReal = (new finfo(FILEINFO_MIME_TYPE))->file($arquivo['tmp_name']);
        $mensagem = in_array($tipoReal, $tiposPermitidos, true)
            ? 'Arquivo válido para processamento.'
            : 'Tipo de arquivo não permitido.';
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR"><head><meta charset="UTF-8"><title>Upload</title></head>
<body>
<form method="post" enctype="multipart/form-data">
    <input type="file" name="arquivo" accept=".jpg,.jpeg,.png,.pdf" required>
    <button type="submit">Verificar</button>
</form>
<p><?= htmlspecialchars($mensagem) ?></p>
</body></html>

