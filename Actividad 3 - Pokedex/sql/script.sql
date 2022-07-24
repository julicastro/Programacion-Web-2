CREATE SCHEMA IF NOT EXISTS db_pokedex;
CREATE TABLE IF NOT EXISTS db_pokedex.pokemon (
                                        id INT NOT NULL AUTO_INCREMENT,
                                        nombre VARCHAR(45) NULL DEFAULT NULL,
                                        numero VARCHAR(45) NULL DEFAULT NULL,
                                        tipo VARCHAR(45) NULL DEFAULT NULL,
                                        imagen VARCHAR(255) NULL DEFAULT NULL,
                                        descripcion VARCHAR(225) NULL DEFAULT NULL,
                                        PRIMARY KEY (id));
USE db_pokedex;
INSERT INTO pokemon (nombre, numero, tipo, imagen, descripcion) VALUES
							('charmander', 1, 'fuego',  'charmander.png', 'Tipo fuego'),
							('bulbasaur',  2,  'planta',  'bulbasaur.png', 'Increible'),
							('charmeleon', 3, 'fuego', 'charmeleon.png', 'Genial');
CREATE TABLE IF NOT EXISTS db_pokedex.usuario (
							id INT NOT NULL AUTO_INCREMENT,
							username VARCHAR(45) NULL DEFAULT NULL,
							password VARCHAR(45) NULL DEFAULT NULL,
							role VARCHAR(45) NULL DEFAULT NULL,
							PRIMARY KEY (id));
INSERT INTO usuario (id, username, password, role) VALUES
							(1, 'juli', '1234',  'ADMIN'),
							(2, 'Len', '1234',  'ADMIN'),
							(3, 'Bru', '1234',  'ADMIN'),
							(4, 'Ara', '1234',  'ADMIN');