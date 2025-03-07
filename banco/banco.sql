DROP DATABASE IF EXISTS Prova2;
CREATE DATABASE IF NOT EXISTS Prova2;
USE Prova2;

drop table if exists fluxo_caixa;
create table fluxo_caixa
(
	id integer not null auto_increment,
    data date not null,
    tipo varchar(10) not null,
    valor decimal(10,2) not null,
    historico varchar(150) not null, 
    cheque varchar(3) not null,
    primary key (id)
)