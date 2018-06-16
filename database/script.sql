create database WebSecurity;
use WebSecurity;
create table users(
  id int not null auto_increment,
  name varchar(25) not null,
  email varchar(255) not null,
  passw varchar(40) not null,
  date_sign datetime not null,
  active tinyint not null,
  primary key(id)
);

insert into users (name, email, passw, date_sign, active) values ("Esteban", "estebanmejia277@gmail.com", "esteban123", 2015-08-13 05:06:09, 1);
