-- ============================================
-- Sistema Auto Peças do Baiano
-- Script de criação do banco de dados
-- ============================================

CREATE DATABASE IF NOT EXISTS autopecas_db;
USE autopecas_db;

-- Tabela de Usuários (Login)
CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(50) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL
);

-- Usuário padrão: admin / senha: 123456 (MD5 temporário)
INSERT INTO usuarios (usuario, senha) VALUES ('admin', '$2y$12$KEpapnczyU9S0XWrnGHyLu8XMCJfYZr6R.XwCuLJP7FdBYvZeUzVe');

-- Tabela de Produtos (Autopeças)
CREATE TABLE IF NOT EXISTS produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    codigo_peca VARCHAR(50) NOT NULL UNIQUE,
    nome VARCHAR(100) NOT NULL,
    descricao TEXT,
    preco DECIMAL(10, 2) NOT NULL,
    quantidade_estoque INT NOT NULL DEFAULT 0,
    data_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
