create table postagem(
	id int auto_increment primary key,
    titulo varchar(200),
    conteudo text
);


create table comentario(
	id int auto_increment primary key,
    nome varchar(200),
    comentario text,
    id_postagem int not null,
    foreign key (id_postagem) references postagem(id)
);




