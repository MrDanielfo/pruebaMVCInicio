CREATE DATABASE josuemvc_prueba;

USE josuemvc_prueba;

CREATE TABLE usuarios (
	id 			int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nombre		varchar(50),
	email       varchar(50),
	n_usuario   text,
	pass        text
);

INSERT INTO usuarios (nombre, email, n_usuario, pass) VALUES
('Enrique Aguilera', 'eaguilera@gmail.com', 'enriqueagui', 'enrique456');