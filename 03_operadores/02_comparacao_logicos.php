<?php
$idade = 18;
$temDocumento = true;

// === compara valor e tipo; !== verifica se valor ou tipo são diferentes.
var_dump($idade === 18);
echo '<br>';
var_dump($idade !== '18');
echo '<br>';

// && significa E: as duas condições precisam ser verdadeiras.
$podeEntrar = $idade >= 18 && $temDocumento;

// || significa OU: basta uma das condições ser verdadeira. ! significa NÃO.
$precisaAjuda = $idade < 18 || !$temDocumento;

echo "Pode entrar? " . ($podeEntrar ? 'Sim' : 'Não') . "<br>";
echo "Precisa de ajuda? " . ($precisaAjuda ? 'Sim' : 'Não');

