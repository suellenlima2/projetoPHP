
use giraudeoportunidades;

create table alunos(
  id integer not null primary key auto_increment,
  nome varchar(100),
  endereco varchar(50),
  nomepai varchar(100),
  nomemae varchar(100),
  cpf varchar(15),
  rg int,
  datanascimento date,
  curso varchar(50),
  experiencia varchar(250),
  participacao varchar(5)
)

select * from alunos;

create table acesso(
    id integer not null primary key auto_increment,
    usuario varchar(50),
    senha varchar(50)
)
    
INSERT INTO acesso(usuario, senha) values ('ana123', '12345');

select * from acesso;