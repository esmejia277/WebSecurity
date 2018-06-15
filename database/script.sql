create database blog;
use blog;
create table usuarios(
  id int not null auto_increment,
  nombre varchar(25) not null,
  email varchar(255) not null,
  password varchar(40) not null,
  fecha_registro datetime not null,
  activo tinyint not null,
  primary key(id)
);
