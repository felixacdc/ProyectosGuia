CREATE DATABASE ProyectoWeb;

USE ProyectoWeb;

CREATE TABLE regusuarios(id_usuario INT NOT NULL AUTO_INCREMENT, usuario VARCHAR(50), password VARCHAR(50), email VARCHAR(50), nombre VARCHAR(70), apellido VARCHAR(70), fechanacimiento VARCHAR(50), sexo VARCHAR(50), telefono BigInt, direccion VARCHAR(60), PRIMARY KEY (id_usuario))ENGINE=MyIAM DEFAULT CHARSET= latin1;

CREATE TABLE libros (id_libro int not null auto_increment, nombrelibro varchar(80),autor  varchar(80), editorial  varchar(80), edicion  varchar(80), direccionimg  varchar(80), direccionpdf  varchar(80), primary key (id_libro))ENGINE=MyIAM DEFAULT CHARSET= latin1;

create table reservaciones (id_reser int not null auto_increment, usuario varchar(50), nombrelibro varchar(80), autor varchar(80), edicion varchar(80))ENGINE=MyIAM DEFAULT CHARSET= latin1;

