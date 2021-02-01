create database EscalaWeb;

use EscalaWeb;

create table contatos(

id int primary key auto_increment,
nome varchar(50),
email varchar(50),
telefone varchar(50),
mensagem varchar(200)
);

insert into contatos(nome, email, telefone, mensagem) values('Armando Víctor Pereira','armando2019ti@gmail.com','11995052373','Mensagem Teste');

select * from contatos;

drop table contatos;