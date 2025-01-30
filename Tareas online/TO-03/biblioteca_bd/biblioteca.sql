DROP DATABASE IF EXISTS biblioteca;
CREATE DATABASE biblioteca;

USE biblioteca;

CREATE TABLE AUTORES (
  id_autor INT(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  apellidos VARCHAR(50) NOT NULL,
  nombre VARCHAR(30) NOT NULL,
  nacionalidad VARCHAR(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

CREATE TABLE LIBROS (
  id_libro INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  titulo VARCHAR(100) NOT NULL,
  categoria VARCHAR(30) NOT NULL,
  autor_id INT(10) NOT NULL,
  descripcion VARCHAR(150) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
ALTER TABLE LIBROS ADD CONSTRAINT fk_LIBROS_AUTORES FOREIGN KEY (autor_id) REFERENCES AUTORES (id_autor) 
	ON DELETE NO ACTION ON UPDATE CASCADE;
  
CREATE TABLE USUARIOS(
  id_usuario INT(5) PRIMARY KEY AUTO_INCREMENT,
  nombreusuario CHAR(30) NOT NULL,
  password  CHAR(8) NOT NULL,
  telefono CHAR(10),
  fechentrega DATE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

CREATE TABLE ALQUILERES(
	alquiler_id  INT(5) PRIMARY KEY AUTO_INCREMENT,
	libro_id INT(5) NOT NULL,
	usuario_id INT(5) NOT NULL,
	fechprestamo DATE NOT NULL,
	fechdevolucion DATE
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
ALTER TABLE ALQUILERES ADD CONSTRAINT fk_ALQUILER_LIBROS FOREIGN KEY (libro_id) REFERENCES LIBROS (id_libro) 
	ON DELETE NO ACTION ON UPDATE CASCADE;
ALTER TABLE ALQUILERES ADD CONSTRAINT fk_ALQUILER_USUARIOS FOREIGN KEY (usuario_id) REFERENCES USUARIOS(id_usuario) 
	ON DELETE NO ACTION ON UPDATE CASCADE;

INSERT INTO AUTORES (apellidos, nombre, nacionalidad) VALUES ('Benigni', 'Roberto','italiana');
INSERT INTO AUTORES (apellidos, nombre, nacionalidad) VALUES ('Meyer', 'Stephenie','estadounidense');
INSERT INTO AUTORES (apellidos, nombre, nacionalidad) VALUES ('Descartes', 'Rene','frances');
INSERT INTO AUTORES (apellidos, nombre, nacionalidad) VALUES ('Shakespeare', 'William','britanica');
INSERT INTO AUTORES (apellidos, nombre, nacionalidad) VALUES ('Hemingway', 'Ernest','estadounidense');
INSERT INTO AUTORES (apellidos, nombre, nacionalidad) VALUES ('Larsson', 'Stieg','Sueca');
INSERT INTO AUTORES (apellidos, nombre, nacionalidad) VALUES ('Follet', 'Ken','estadounidense');
INSERT INTO AUTORES (apellidos, nombre, nacionalidad) VALUES ('Kepler', 'Lars','Sueca');
INSERT INTO AUTORES (apellidos, nombre, nacionalidad) VALUES ('Neville', 'Katherine','estadounidense');
INSERT INTO AUTORES (apellidos, nombre, nacionalidad) VALUES ('Connelly', 'Michael','estadounidense');
SELECT * FROM AUTORES;

INSERT INTO LIBROS (titulo, categoria, autor_id, descripcion) VALUES ('Luna Nueva', 'fantasia', 2, 'Escrito por Stephanie');
INSERT INTO LIBROS (titulo, categoria, autor_id, descripcion) VALUES ('Crepusculo', 'fantasia', 2, 'Un amor peligroso');
INSERT INTO LIBROS (titulo, categoria, autor_id, descripcion) VALUES ('Hamlet', 'tragedia', 4, 'Escrito por Shakespeare');
INSERT INTO LIBROS (titulo, categoria, autor_id, descripcion) VALUES ('La reina en el paraiso de las corrientes de aire', 'novela', 6, 'trilogia de Stieg');
INSERT INTO LIBROS (titulo, categoria, autor_id, descripcion) VALUES ('El viejo y el mar', 'ficcion', 5, 'Escrito por Hemingway');
INSERT INTO LIBROS (titulo, categoria, autor_id, descripcion) VALUES ('Discurso del metodo', 'filosofia', 3, 'Escrito por Descartes');
INSERT INTO LIBROS (titulo, categoria, autor_id, descripcion) VALUES ('La vida es bella', 'historica', 1, 'Escrito por Roberto Benigni');
INSERT INTO LIBROS (titulo, categoria, autor_id, descripcion) VALUES ('La chica que soñaba con una cerilla y un bidon de gasolina', 'novela', 6, 'trilogia de Stieg');
INSERT INTO LIBROS (titulo, categoria, autor_id, descripcion) VALUES ('Los pilares de la tierra', 'narrativa', 7, 'Escrito por Ken Follet'); 
INSERT INTO LIBROS (titulo, categoria, autor_id, descripcion) VALUES ('El hipnotista', 'policiaca', 8, 'Escrito por Lars Kepler'); 
INSERT INTO LIBROS (titulo, categoria, autor_id, descripcion) VALUES ('El ocho', 'intriga', 9, 'escrito por Katherine Neville'); 
INSERT INTO LIBROS (titulo, categoria, autor_id, descripcion) VALUES ('Luna Funesta', 'ficcion', 10, 'Escrito por Michael Connelly'); 
INSERT INTO LIBROS (titulo, categoria, autor_id, descripcion) VALUES ('Eclipse', 'fantasia', 2, 'Unos dicen que el mundo sucumbira en el fuego');
INSERT INTO LIBROS (titulo, categoria, autor_id, descripcion) VALUES ('Los hombres que no amaban a las mujeres', 'novela', 6, 'trilogia de Stieg');
INSERT INTO LIBROS (titulo, categoria, autor_id, descripcion) VALUES ('Amanecer', 'fantasia', 2, 'Un amor peligroso');
INSERT INTO LIBROS (titulo, categoria, autor_id, descripcion) VALUES ('El hombre de arena', 'policiaca', 8, 'el inspector Joona Linna');
SELECT * FROM LIBROS;

INSERT INTO USUARIOS (nombreusuario, password, telefono, fechentrega) VALUES ('Ana Jimenez', '1111', '950121212', '2019/10/10');
INSERT INTO USUARIOS (nombreusuario, password, telefono, fechentrega) VALUES ('Antonio Bueno', '1111', '950454545', '2019/10/10');
INSERT INTO USUARIOS (nombreusuario, password, telefono, fechentrega) VALUES ('Maria Jose Garcia', '1111', '690909090', '2019/09/10');
INSERT INTO USUARIOS (nombreusuario, password, telefono, fechentrega) VALUES ('Jose Alonso', '1111', '950505050', '2018/07/02');
INSERT INTO USUARIOS (nombreusuario, password, telefono, fechentrega) VALUES ('Paula Santiago', '1111', '950343434', '2019/03/25');
INSERT INTO USUARIOS (nombreusuario, password, telefono, fechentrega) VALUES ('Manolo Lopez', '1111', '950123456', '2019/02/28');
INSERT INTO USUARIOS (nombreusuario, password, telefono, fechentrega) VALUES ('Paula Gil', '1111', '950999999', '2019/10/10');
INSERT INTO USUARIOS (nombreusuario, password, telefono, fechentrega) VALUES ('Teo Suarez', '1111', '950111111', '2019/03/25');
INSERT INTO USUARIOS (nombreusuario, password, telefono, fechentrega) VALUES ('Rocio Merino', '1111', '710808080', '2019/02/28');
SELECT * FROM USUARIOS;

INSERT INTO ALQUILERES (libro_id, usuario_id, fechprestamo, fechdevolucion) VALUES (5, 2, '2019/08/07', '2019/09/14');
INSERT INTO ALQUILERES (libro_id, usuario_id, fechprestamo, fechdevolucion) VALUES (3, 2, '2019/06/07', '2019/10/11');
INSERT INTO ALQUILERES (libro_id, usuario_id, fechprestamo, fechdevolucion) VALUES (3, 4, '2019/07/07', '2019/08/18');
INSERT INTO ALQUILERES (libro_id, usuario_id, fechprestamo, fechdevolucion) VALUES (2, 1, '2019/08/09', '2019/09/24');
INSERT INTO ALQUILERES (libro_id, usuario_id, fechprestamo, fechdevolucion) VALUES (2, 3, '2019/04/07', '2019/05/23');
INSERT INTO ALQUILERES (libro_id, usuario_id, fechprestamo, fechdevolucion) VALUES (5, 3, '2019/04/12', '2019/06/14');
INSERT INTO ALQUILERES (libro_id, usuario_id, fechprestamo, fechdevolucion) VALUES (5, 3, '2019/09/21', '2019/10/28');
INSERT INTO ALQUILERES (libro_id, usuario_id, fechprestamo, fechdevolucion) VALUES (5, 3, '2019/05/06', '2019/07/16');
INSERT INTO ALQUILERES (libro_id, usuario_id, fechprestamo, fechdevolucion) VALUES (7, 5, '2019/10/07', '2019/11/11');
INSERT INTO ALQUILERES (libro_id, usuario_id, fechprestamo, fechdevolucion) VALUES (1, 2, '2019/07/06', '2019/08/18');
INSERT INTO ALQUILERES (libro_id, usuario_id, fechprestamo, fechdevolucion) VALUES (4, 1, '2019/09/07', '2019/10/09');
INSERT INTO ALQUILERES (libro_id, usuario_id, fechprestamo, fechdevolucion) VALUES (4, 6, '2019/10/12', '2019/11/21');
INSERT INTO ALQUILERES (libro_id, usuario_id, fechprestamo, fechdevolucion) VALUES (7, 6, '2019/10/07', '2019/11/05');
SELECT * FROM ALQUILERES;


 

