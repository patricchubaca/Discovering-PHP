CREATE DATABASE IF NOT EXISTS `tb_cursos` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `tb_cursos`;
CREATE TABLE tb_cursos(
    id int AUTO_INCREMENT PRIMARY KEY,
    nome_curso varchar(250),
    descricao_curso varchar(850), 
    carga_horaria varchar(250)
);

INSERT INTO `tb_cursos` (`nome_curso`,`descricao_curso`, `carga_horaria`) VALUES ('Primeiros passos Spring', 'Fomos chamados para implementar um sistema em uma loja de produtos eletrônicos que ajudasse no controle das quantidades de produto que temos em loja. Começamos alinhando quais eram as operações que o cliente esperava poder realizar nesse controle de produtos.','2020-12-01
12:32');
