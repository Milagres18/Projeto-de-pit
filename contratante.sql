create database contratante;
use contratante;

create table usuarios (
	id int,
    nome varchar(80),
    senha varchar(40),
	email varchar(255),
    cpf char(14),
    telefone char(14),
    estado varchar(100),
    cidade varchar(100),
    cep char(9)
);

select * from usuarios;