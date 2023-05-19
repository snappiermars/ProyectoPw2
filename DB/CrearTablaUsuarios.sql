DROP DATABASE IF EXISTS usuarios;

CREATE DATABASE usuarios;

USE usuarios;

CREATE TABLE usuario (
	numCuenta CHAR(9) NOT NULL PRIMARY KEY,
	nombreUser VARCHAR(30) NOT NULL,
    carrera CHAR(3) NOT NULL,
    direccion VARCHAR(40) NOT NULL,
    telefono CHAR(10) NOT NULL,
    email VARCHAR(30) NOT NULL,
    contraseña VARCHAR(20) NOT NULL,
    fechaAlta DATE NOT NULL,
    permisos INT NOT NULL
    );