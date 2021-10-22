DROP DATABASE IF EXISTS financial_fast;
CREATE DATABASE financial_fast;
USE financial_fast;

DROP TABLE IF EXISTS categoria;
CREATE TABLE categoria
(
id int primary key auto_increment not null,
nombre varchar(70) not null
);

DROP TABLE IF EXISTS tipodocumento;
CREATE TABLE tipodocumento
(
id int primary key auto_increment not null,
tipo_documento char(2) not null
);

DROP TABLE IF EXISTS datospersonales;
CREATE TABLE datospersonales
(
id int primary key auto_increment not null,
nombre varchar(40) not null,
id_tipodocumento int not null,
numero_documento varchar(10) not null unique,
telefono varchar(10) not null unique,
correo varchar(40) not null unique,
pass varchar(20) not null,
tipo_rol varchar(20) not null,
estado boolean not null default 0
);

DROP TABLE IF EXISTS clienteexterno;
CREATE TABLE clienteexterno
(
id int primary key auto_increment not null,
nombre_archivo varchar(80) not null unique,
id_datospersonales int not null,
id_categoria int not null
);

/*=======================================================================================================================
									RELACIÓN ENTRE TABLAS
=======================================================================================================================*/
ALTER TABLE datospersonales ADD CONSTRAINT FK_tipodoc FOREIGN KEY (id_tipodocumento) REFERENCES tipodocumento (id);
ALTER TABLE clienteexterno ADD CONSTRAINT FK_datospersonales FOREIGN KEY(id_datospersonales) REFERENCES datospersonales(id);
ALTER TABLE clienteexterno ADD CONSTRAINT FK_categoria FOREIGN KEY(id_categoria) REFERENCES categoria(id);

/*=======================================================================================================================
									INSERTAR ALGUNAS CATEGORIAS
=======================================================================================================================*/
INSERT INTO categoria(nombre) 
VALUES('Tipos de documento');
INSERT INTO categoria(nombre) 
VALUES('Facturas');
INSERT INTO categoria(nombre) 
VALUES('Cuentas de cobro');

INSERT INTO tipodocumento(tipo_documento)
VALUES('CC');
INSERT INTO tipodocumento(tipo_documento)
VALUES('TI');
INSERT INTO tipodocumento(tipo_documento)
VALUES('CE');
INSERT INTO tipodocumento(tipo_documento)
VALUES('RC');
INSERT INTO tipodocumento(tipo_documento)
VALUES('PA');

INSERT INTO datospersonales(nombre, id_tipodocumento, numero_documento, telefono, correo, pass, tipo_rol)
VALUES('Edier Hernández', 2, '1055550018', '3134387765', 'ehhernandez81@misena.edu.co', '123', 'Administrador');