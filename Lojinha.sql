CREATE DATABASE Lojinha;
use Lojinha;

CREATE TABLE usuario(
    id  PRIMARY KEY,
    nome VARCHAR  (120) NOT NULL,
    senha PASSWORD NOT NULL
);

CREATE TABLE produto(
    id  PRIMARY KEY,
    nome VARCHAR (50) NOT NULL,
    categoria VARCHAR(100) NOT NULL,
    valor FLOAT NOT NULL,
    descricao TEXT,
    foto TEXT
);