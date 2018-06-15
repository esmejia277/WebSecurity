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
