create database WebSecurity default character set utf8;
use WebSecurity;
create table users(
  id int not null auto_increment,
  name varchar(25) not null,
  email varchar(255) not null,
  passw varchar(255) not null,
  date_sign datetime not null,
  active tinyint not null,
  primary key(id)
);

create table entries(
  id int not null unique auto_increment,
  author_id int not null,
  title varchar(255) not null unique,
  text character set utf8 not null,
  date datetime not null,
  active tinyint not null,
  primary key(id),
  foreign key (author_id) references users (id)
    on update cascade --update data
    on delete restrict
);

create table comments(
  id int not null unique auto_increment,
  author_id int not null,
  entry_id int not null,
  title varchar(255) not null,
  text character set utf8 not null,
  date datetime not null,
  primary key (id),
  foreign key (author_id) references users (id)
    on update cascade --update data
    on delete restrict,
  foreign key (entry_id) references entries (id)
    on update cascade --update data
    on delete restrict
);

insert into users (name, email, passw, date_sign, active) values ("Esteban", "estebanmejia277@gmail.com", "esteban123", "2015-08-13 05:06:09", 1);
