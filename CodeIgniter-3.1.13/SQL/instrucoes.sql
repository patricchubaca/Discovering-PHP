
create table inscritos(
    id int PRIMARY KEY AUTO_INCREMENT,
    nome varchar(100),
    email varchar(100),
    cidade varchar(75),
	uf varchar(2)
);

INSERT INTO inscritos (nome, email,cidade,uf) VALUES ('Patric Enderson','patric_job@outlook.com','Curitiba','PR');


