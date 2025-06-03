CREATE DATABASE veterinaria;

use veterinaria;

CREATE TABLE PROPETARIOS(
idpropetario INT AUTO_INCREMENT PRIMARY KEY,
apellidos VARCHAR(50) NOT NULL,
nombres VARCHAR(50)NOT NULL

)ENGINE=INNODB;

CREATE TABLE MASCOTAS(
idmascota INT AUTO_INCREMENT PRIMARY KEY,
idpropetario INT NOT NULL,
tipo ENUM('Perro','Gato')NOT NULL,
nombre VARCHAR(50)NOT NULL,
Color VARCHAR(50) NOT NULL,
genero ENUM('SI','NO') NOT NULL,
vive ENUM('SI','NO') NOT NULL DEFAULT 'SI',

CONSTRAINT FK_propetario FOREIGN KEY (idpropetario) REFERENCES PROPETARIOS(idpropetario)

)ENGINE=INNODB;

INSERT INTO PROPETARIOS(apellidos,nombres) VALUES('CONTRERAS CARRILLO','AIMAR ALEXANDER'),
INSERT INTO PROPETARIOS(apellidos,nombres) VALUES('CONTRERAS MUÑANTE ','EYTHAN ABDIEL');

INSERT INTO MASCOTAS (idpropetario, tipo, nombre, color, genero, vive)
VALUES (1, 'Perro', 'Firulais', 'Marrón', 'SI', 'SI');
INSERT INTO MASCOTAS (idpropetario, tipo, nombre, color, genero, vive)
VALUES (1, 'Perro', 'Firulais', 'Blanco', 'SI', 'SI');
INSERT INTO MASCOTAS (idpropetario, tipo, nombre, color, genero, vive)
VALUES (2, 'Perro', 'Guerrero', 'Marrón', 'SI', 'SI');
INSERT INTO MASCOTAS (idpropetario, tipo, nombre, color, genero, vive)
VALUES (2, 'Perro', 'Guerreo', 'Blanco', 'SI', 'SI');


