<?php
// Ajuste estes dados para o MySQL/MariaDB do seu ambiente.
$host = 'localhost';
$banco = 'kit_php';
$usuario = 'root';
$senha = '';
$dsn = "mysql:host=$host;dbname=$banco;charset=utf8mb4";

try {
    // PDO oferece uma interface segura e padronizada para acessar o banco.
    $pdo = new PDO($dsn, $usuario, $senha, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
} catch (PDOException $erro) {
    // Em produção, registre o erro e mostre uma mensagem genérica ao usuário.
    exit('Não foi possível conectar ao banco de dados.');
}

