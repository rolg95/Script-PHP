<?php
session_start();

$_SESSION = [];      // Remove os valores guardados na sessão atual.
session_destroy();   // Encerra a sessão no servidor.

echo 'Sessão encerrada. <a href="01_sessao.php">Iniciar novamente</a>';

