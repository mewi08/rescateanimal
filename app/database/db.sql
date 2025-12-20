DROP DATABASE IF EXISTS rescate;
CREATE DATABASE rescate;
USE rescate;

CREATE TABLE personas(
    idpersona INT AUTO_INCREMENT PRIMARY KEY,
    dni CHAR(8) UNIQUE NULL,
    nombres VARCHAR(60) NOT NULL,
    apellidos VARCHAR(60) NOT NULL,
    tipo ENUM("Persona","Voluntario")
)ENGINE=Innodb;

CREATE TABLE animales(
    idanimal INT AUTO_INCREMENT PRIMARY KEY,
    idpersona INT NOT NULL,
    especie ENUM("Perro","Gato","Loro") NOT NULL,
    sexo ENUM ("M","F") NOT NULL,
    condicion ENUM ("Critico","Grave","Estable","Bueno") NOT NULL,
    rescate DATE NOT NULL,
    lugar VARCHAR(70) NOT NULL,
    FOREIGN KEY (idpersona) REFERENCES personas(idpersona)
)ENGINE=Innodb;

INSERT INTO personas(dni, nombres, apellidos, tipo) VALUES
("61298242","Melanie Elizabeth","Tello Carbajal","Voluntario"),
("60786100","Pepe","Peñaloza Vasquez","Voluntario");

INSERT INTO animales(idpersona, especie, sexo, condicion,rescate,lugar) VALUES
(1,"Gato","F","Grave","2025-12-20","Chincha Alta"),
(1,"Perro","M","Estable","2025-12-10","Centro Poblado Magdalena");


SELECT idanimal, idpersona, especie, sexo, condicion, rescate, lugar 
FROM animales
ORDER BY idanimal DESC;

SELECT idpersona, dni, nombres, apellidos, tipo 
FROM personas
ORDER BY idpersona DESC;