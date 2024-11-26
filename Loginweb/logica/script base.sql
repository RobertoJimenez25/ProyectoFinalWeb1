-- donde exista una db con el mismo nombre la elimina
drop schema if exists `proyectofinalweb`;

-- se crear la DB 
create schema  if not exists `proyectofinalweb` default  character set utf8 collate  utf8_spanish2_ci;
USE `proyectofinalweb`; 

-- se crear la tabla
CREATE TABLE  `persona`(
`numero` int(11) primary key NOT NULL auto_increment,  
`nombre_usuario` text not null,
`carrera` text not null,
`no_cuenta` int(10) not null,
`direccion` text not null,
`telefono` varchar (10) not null,
`email` text not null,
`password` varchar (8) not null,
`fecha_registro` datetime not null default current_timestamp,
`permisos` int (11) not null default '2'
)engine=Innodb default charset=utf8;

/*
ALTER TABLE `test_php`.`persona` 
CHANGE COLUMN `numero` `numero` INT(11) NOT NULL AUTO_INCREMENT ,
ADD PRIMARY KEY (`numero`);
*/


INSERT INTO `persona`(`nombre_usuario`, `carrera`, `no_cuenta`, `direccion`, `telefono`, `email`, `password`)VALUES ('Juan Pérez', 'Ingeniería en Computación', '12345678', 'Calle Falsa 123, CDMX', '5512345678', 'juan.perez@mail.com', 'password');
INSERT INTO `persona`(`nombre_usuario`, `carrera`, `no_cuenta`, `direccion`, `telefono`, `email`, `password`)VALUES ('María López', 'Ingeniería Industrial', '87654321', 'Av. Siempreviva 742, CDMX', '5523456789', 'maria.lopez@mail.com', 'securepa');
INSERT INTO `persona`(`nombre_usuario`, `carrera`, `no_cuenta`, `direccion`, `telefono`, `email`, `password`)VALUES ('Carlos Gómez', 'Ingeniería en Software', '11223344', 'Col. Roma, CDMX', '5534567890', 'carlos.gomez@mail.com', 'mypasswo');
INSERT INTO `persona`(`nombre_usuario`, `carrera`, `no_cuenta`, `direccion`, `telefono`, `email`, `password`)VALUES ('Ana Martínez', 'Ciencias de la Computación', '55667788', 'Col. Condesa, CDMX', '5545678901', 'ana.martinez@mail.com', 'ana12345');
INSERT INTO `persona`(`nombre_usuario`, `carrera`, `no_cuenta`, `direccion`, `telefono`, `email`, `password`)VALUES ('Luis Torres', 'Ingeniería Civil', '66778899', 'Col. Del Valle, CDMX', '5556789012', 'luis.torres@mail.com', 'torres98');
INSERT INTO `persona`(`nombre_usuario`, `carrera`, `no_cuenta`, `direccion`, `telefono`, `email`, `password`)VALUES ('Sofía Sánchez', 'Diseño Gráfico', '77889900', 'Av. Insurgentes Sur, CDMX', '5567890123', 'sofia.sanchez@mail.com', 'design45');
INSERT INTO `persona`(`nombre_usuario`, `carrera`, `no_cuenta`, `direccion`, `telefono`, `email`, `password`)VALUES ('Fernando Ruiz', 'Ingeniería Mecánica', '88990011', 'Col. Centro, CDMX', '5578901234', 'fernando.ruiz@mail.com', 'ruiz6545');
INSERT INTO `persona`(`nombre_usuario`, `carrera`, `no_cuenta`, `direccion`, `telefono`, `email`, `password`)VALUES ('Valeria Gutiérrez', 'Administración de Empresas', '99001122', 'Calle Reforma, CDMX', '5589012345', 'valeria.gutierrez@mail.com', 'admin987');
INSERT INTO `persona`(`nombre_usuario`, `carrera`, `no_cuenta`, `direccion`, `telefono`, `email`, `password`)VALUES ('Daniela Castro', 'Ingeniería en Computación', '10111223', 'Calle Hidalgo, CDMX', '5590123456', 'daniela.castro@mail.com', 'computo3');
INSERT INTO `persona`(`nombre_usuario`, `carrera`, `no_cuenta`, `direccion`, `telefono`, `email`, `password`)VALUES ('Jorge Ramírez', 'Ingeniería Electrónica', '12131415', 'Col. Tlalpan, CDMX', '5511123456', 'jorge.ramirez@mail.com', 'electron');
INSERT INTO `persona`(`nombre_usuario`, `carrera`, `no_cuenta`, `direccion`, `telefono`, `email`, `password`)VALUES ('Andrea Morales', 'Ingeniería Ambiental', '14151617', 'Col. Coyoacán, CDMX', '5522234567', 'andrea.morales@mail.com', 'ambienta');
INSERT INTO `persona`(`nombre_usuario`, `carrera`, `no_cuenta`, `direccion`, `telefono`, `email`, `password`)VALUES ('Ricardo Hernández', 'Ingeniería en Telecomunicaciones', '16171819', 'Av. Juárez, CDMX', '5533345678', 'ricardo.hernandez@mail.com', 'telecom3');
INSERT INTO `persona`(`nombre_usuario`, `carrera`, `no_cuenta`, `direccion`, `telefono`, `email`, `password`)VALUES ('Paola Castillo', 'Arquitectura', '18192021', 'Col. Polanco, CDMX', '5544456789', 'paola.castillo@mail.com', 'arqui444');
INSERT INTO `persona`(`nombre_usuario`, `carrera`, `no_cuenta`, `direccion`, `telefono`, `email`, `password`)VALUES ('Diego Méndez', 'Ingeniería Química', '20212223', 'Calle Central, CDMX', '5555567890', 'diego.mendez@mail.com', 'quimica5');
INSERT INTO `persona`(`nombre_usuario`, `carrera`, `no_cuenta`, `direccion`, `telefono`, `email`, `password`)VALUES ('Elena Vargas', 'Medicina', '23242526', 'Col. Narvarte, CDMX', '5566678901', 'elena.vargas@mail.com', 'medicina');
INSERT INTO `persona`(`nombre_usuario`, `carrera`, `no_cuenta`, `direccion`, `telefono`, `email`, `password`)VALUES ('Pablo Aguilar', 'Derecho', '26272829', 'Calle Reforma Norte, CDMX', '5577789012', 'pablo.aguilar@mail.com', 'derecho7');
INSERT INTO `persona`(`nombre_usuario`, `carrera`, `no_cuenta`, `direccion`, `telefono`, `email`, `password`)VALUES ('Gabriela Vega', 'Psicología', '29293031', 'Col. Lindavista, CDMX', '5588890123', 'gabriela.vega@mail.com', 'psico888');
INSERT INTO `persona`(`nombre_usuario`, `carrera`, `no_cuenta`, `direccion`, `telefono`, `email`, `password`)VALUES ('Adrián Chávez', 'Economía', '31323334', 'Av. División del Norte, CDMX', '5599901234', 'adrian.chavez@mail.com', 'economia');
INSERT INTO `persona`(`nombre_usuario`, `carrera`, `no_cuenta`, `direccion`, `telefono`, `email`, `password`)VALUES ('Claudia Pérez', 'Contaduría Pública', '34353637', 'Calle Norte, CDMX', '5512345679', 'claudia.perez@mail.com', 'conta000');
INSERT INTO `persona`(`nombre_usuario`, `carrera`, `no_cuenta`, `direccion`, `telefono`, `email`, `password`)VALUES ('Héctor Flores', 'Ingeniería en Energías Renovables', '37383940', 'Av. Universidad, CDMX', '5523456780', 'hector.flores@mail.com', 'renovabl');

select * from persona;