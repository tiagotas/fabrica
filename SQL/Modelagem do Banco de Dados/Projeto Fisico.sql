create database Fabrica;

use Fabrica;

create table Usuario (
  id int auto_increment primary key,
  nome varchar(50),
  email varchar(100),
  senha varchar(100)
);


create table Fornecedor (
   id int auto_increment primary key,
   razao_social varchar(150),
   cnpj bigint(14)
);

create table Compra (
   id int auto_increment primary key,
   id_fornecedor int,
   data_compra timestamp default current_timestamp,
   forma_pgto varchar(150),
   foreign key (id_fornecedor) references Fornecedor(id)
);


create table Insumo_cat (
   id int auto_increment primary key,
   descricao varchar(150)
);

create table Insumo (
   id int auto_increment primary key,
   descricao varchar(150),
   peso double,
   id_insumo_categoria int,
   foreign key (id_insumo_categoria) references Insumo_cat(id)   
);


create table Item (
   id_compra int,
   id_insumo int,
   qnt double,
   preco_unitario double,
   total double,   
   foreign key (id_compra) references Compra(id),
   foreign key (id_insumo) references Insumo(id),
   Primary key (id_compra, id_insumo)
);












