CREATE DATABASE Escola;
	
USE Escola;

CREATE TABLE Usuario (
    cpf INT PRIMARY KEY	,
    nome VARCHAR(50),
    telefone VARCHAR(20),
    endereco VARCHAR(100)
);

INSERT INTO Usuario VALUES ("321", "Sávio", "779982112", "Roça"), ("1111111", "Abnes", "77", "Democrata");

SELECT * FROM Usuario;
 -- user
 -- password
 -- banco de dados 
 -- driver
