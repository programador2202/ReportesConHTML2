CREATE DATABASE VETERINARIA;

USE VETERINARIA;

CREATE TABLE PROPIETARIO (
  idPropietario   INT PRIMARY KEY AUTO_INCREMENT,
  apellidos VARCHAR(40) NOT NULL,
  nombres VARCHAR (40) NOT NULL
)ENGINE=INNODB;

CREATE TABLE MASCOTAS(
  idMascota       INT PRIMARY KEY AUTO_INCREMENT,
  idPropietario   INT NOT NULL,
  tipo            ENUM('PERRO','GATO')NOT NULL,
  nombre          VARCHAR(40) NOT NULL,
  color           VARCHAR(40) NOT NULL,
  genero          ENUM('HEMBRA','MACHO'),
  vive            ENUM('SI','NO') NOT NULL DEFAULT 'SI',
  CONSTRAINT fk_idpropietario FOREIGN KEY (idPropietario) REFERENCES PROPIETARIO(idPropietario)
)ENGINE=INNODB;

INSERT INTO PROPIETARIO (apellidos,nombres) VALUES
('Perez','Hugo'),
('Castilla','Teresa');

INSERT INTO MASCOTAS (idPropietario, tipo, nombre, color, genero, vive) VALUES
(1,"PERRO", "FIRULAIS", "NEGRO", "MACHO", "SI" ),
(2,"PERRO", "TUMOR", "NARANJA", "MACHO", "SI" ),
(1,"GATO", "FIERRO", "GRIS", "MACHO", "SI" ),
(2,"GATO", "PELUSA", "BLANCO", "HEMBRA", "SI" );


update mascotas set idPropietario=1,
tipo='GATO',
nombre='Matador',
color='Chocolate',
genero ='MACHO'
WHERE idMascota=2;

SELECT * FROM MASCOTAS;

SELECT 
MA.idMascota,
MA.nombre,
MA.tipo,
MA.color,
MA.genero,
CONCAT(PR.apellidos, ' ',PR.nombres) 'propietario'
FROM MASCOTAS MA
INNER JOIN PROPIETARIO PR ON MA.idPropietario=PR.idPropietario
ORDER BY MA.nombre