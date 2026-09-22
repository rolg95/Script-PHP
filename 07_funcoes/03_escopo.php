<?php
$mensagem = 'Fora da função';

function criarMensagem(): string
{
    // Esta variável só existe dentro da função: ela possui escopo local.
    $mensagem = 'Dentro da função';
    return $mensagem;
}

echo criarMensagem() . '<br>';
echo $mensagem;

