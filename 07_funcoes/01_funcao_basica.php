<?php
// A função agrupa uma tarefa que pode ser reutilizada.
function saudacao(string $nome): string
{
    return "Olá, $nome!"; // return devolve o resultado para quem chamou a função.
}

echo saudacao('Marina');

