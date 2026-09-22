-- Cria o banco usado pelos exemplos. Execute este arquivo no phpMyAdmin.
CREATE DATABASE IF NOT EXISTS kit_php CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE kit_php;

-- A chave primária identifica cada jogo de maneira única.
CREATE TABLE IF NOT EXISTS jogos (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(120) NOT NULL,
    genero VARCHAR(80) NOT NULL,
    preco DECIMAL(10, 2) NOT NULL DEFAULT 0.00,
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO jogos (titulo, genero, preco) VALUES
('Celeste', 'Plataforma', 36.99),
('Hades', 'Roguelike', 73.99);

