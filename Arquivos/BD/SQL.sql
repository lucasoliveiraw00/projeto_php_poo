CREATE SCHEMA IF NOT EXISTS Projeto DEFAULT CHARACTER SET utf8 ;
USE projeto ;
-- -----------------------------------------------------
-- Tabela Pessoa Fisica
-- -----------------------------------------------------
CREATE TABLE pessoa_fisica (
    id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(150) NOT NULL,
    cpf VARCHAR(20) NOT NULL,
    rg VARCHAR(20) NOT NULL,
	sexo ENUM('Feminino', 'Masculino')  NOT NULL,
    dataNasc DATE NOT NULL,
    telefone VARCHAR(23) NULL,
    cep VARCHAR(15) NOT NULL,
	cidade VARCHAR(150) NOT NULL,
    uf VARCHAR(5) NULL,
    bairro VARCHAR(150) NOT NULL,
    endereco VARCHAR(150) NOT NULL,
    numEnd VARCHAR(150)  NOT NULL,
    PRIMARY KEY (id)
);

-- -----------------------------------------------------
-- Tabela Pessoa Juridica
-- -----------------------------------------------------
CREATE TABLE pessoa_juridica (
    id INT NOT NULL AUTO_INCREMENT,
    razao_social VARCHAR(150) NOT NULL,
    nome_fantasia VARCHAR(150) NOT NULL,
	cnpj VARCHAR(20) NOT NULL,
    inscricao_esdadual INT NOT NULL,
    data_fundacao DATE NOT NULL,
    telefone VARCHAR(23) NULL,
    cep VARCHAR(15) NOT NULL,
	cidade VARCHAR(150) NOT NULL,
    uf VARCHAR(5) NULL,
    bairro VARCHAR(150) NOT NULL,
    endereco VARCHAR(150) NOT NULL,
    numEnd VARCHAR(150)  NOT NULL,
    PRIMARY KEY (id)
);