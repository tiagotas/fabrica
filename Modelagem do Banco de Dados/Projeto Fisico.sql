create table Fornecedor (
   id int auto_increment primary key,
   nome varchar(150)
);

create table Compra (
   id int auto_increment primary key,
   id_fornecedor int,
   data_compra timestamp default current_timestamp,
   foreign key (id_fornecedor) references Fornecedor(id)
);

create table Item (
   id int auto_increment primary key,
   item varchar(150),
   qnt double,
   preco_unitario double,
   total double,
   id_compra int,
   foreign key (id_compra) references Compra(id)
);












