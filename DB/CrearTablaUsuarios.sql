DROP DATABASE IF EXISTS usuarios;

CREATE DATABASE usuarios;

USE usuarios;

CREATE TABLE usuario (
	numCuenta CHAR(9) NOT NULL PRIMARY KEY,
	nombreUser VARCHAR(30) NOT NULL,
    carrera CHAR(3) NOT NULL,
    direccion VARCHAR(40) NOT NULL,
    telefono CHAR(10) NOT NULL,
    email VARCHAR(40) NOT NULL,
    password VARCHAR(16) NOT NULL,
    fechaAlta DATE NOT NULL,
    permisos INT NOT NULL
    );
#DATETIME YYYY-MM-DD HH:MM:SS   
INSERT INTO usuario (numCuenta,nombreUser,carrera,direccion,telefono,email,password,fechaAlta,permisos)
values('318297268','EZEQUIXGAMES','ICO','529 Aragaon','5531303750','snappiermas@gmail.com','contraseña123',CURRENT_TIMESTAMP(),1);
INSERT INTO usuario values('318072641','JUANIMANDARIN','ICO','GUADALUPANA VENTA','5565238950','juaniman@gmail.com','contraseña123',CURRENT_TIMESTAMP(),1);
INSERT INTO usuario values('413112576','AARON VELAZCO','ICO','GLORIA 15','5612315894','aaron@gmail.com','123456',CURRENT_TIMESTAMP(),1);

SELECT * FROM usuario