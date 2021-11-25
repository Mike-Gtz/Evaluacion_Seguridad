create database Seguridad;

use Seguridad;

create table TabUsuarios(
Us_id int auto_increment,
Us_nombre varchar(250),
Us_apellidos varchar(250),
Us_correo varchar(250),
Us_cont varchar(250),
Us_sexo varchar(250),
Us_direccion varchar(250),
CONSTRAINT PK1 PRIMARY KEY (Us_id)
);

create table TabTarjetas(
Tar_id int auto_increment,
Tar_num varchar(16),
Tar_fven varchar(5),
Tar_cvv int(3),
Us_id int,
CONSTRAINT PK2 PRIMARY KEY (Tar_id),
CONSTRAINT FK1 FOREIGN KEY (Us_id) REFERENCES TabUsuarios(Us_id)
);

INSERT INTO TabUsuarios VALUES(0,"Miguel","Gutierrez Medina","miguel@gmail.com",md5("cont1"),"Hombre","Mesa Castellana");

INSERT INTO TabTarjetas VALUES(0,"0976543216785432","11/23",456,1);

UPDATE TabUsuarios set Us_cont=md5("cont1") WHERE Us_correo = "miguel@gmail.com";