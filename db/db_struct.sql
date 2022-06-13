DROP TABLE IF EXISTS documentos;

DROP TABLE IF EXISTS projetos;

DROP TABLE IF EXISTS noticias;

DROP TABLE IF EXISTS users;

CREATE TABLE users(
    id_user int PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(15) NOT NULL, 
    password VARCHAR(255) NOT NULL, 
    nome VARCHAR(255) NOT NULL
);

CREATE TABLE noticias(
    id_not int PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(155),
    image VARCHAR(255),
    text VARCHAR(2000),
    Data DATETIME
);

CREATE TABLE projetos(
    id_proj int PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(155)
);

CREATE TABLE documentos(
    id_doc int PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(155),
    arquivo VARCHAR(2000)
);


INSERT INTO users (username, password, nome)
VALUES ('lucas','123456', 'Lucas Aguiar');