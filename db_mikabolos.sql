create database db_mikabolos;

use db_mikabolos;

create table clientes (
	nome varchar(50) not null,
    cpf char(11) primary key,
    cep int(8) not null,
    email varchar(80),
    celular int(11),
    senha char(32)
);

create table contato(
	nome varchar (50) not null,
    email varchar (100) not null,
    telefone int,
    cidade varchar (50),
    mensagem varchar (1000)
)