<?php
$nome = '';
$cidade = null;

// isset verifica se a variável existe e possui valor diferente de null.
echo 'Nome está definido? ' . (isset($nome) ? 'Sim' : 'Não') . '<br>';
echo 'Cidade está definida? ' . (isset($cidade) ? 'Sim' : 'Não') . '<br>';

// empty considera vazios valores como '', 0, '0', [], false e null.
echo 'Nome está vazio? ' . (empty($nome) ? 'Sim' : 'Não');

