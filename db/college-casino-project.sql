drop table if exists users;
create table users(
id INTEGER(10) auto_increment not null,
firstName VARCHAR(40) not null,
lastName VARCHAR(40) not null,
DOB DATE not null,
country VARCHAR(50),
postalCode char(10),
city VARCHAR(50),
address VARCHAR(255),
email VARCHAR(255) not null,
username VARCHAR(30) not null,
pass_word VARCHAR(255) not null,
UNIQUE(email),
UNIQUE(username),
primary key(id)
);

ALTER TABLE users
  ADD `reset_token_hash` VARCHAR(64) NULL DEFAULT NULL,
  ADD `reset_token_expires_at` DATETIME NULL DEFAULT NULL,
  ADD UNIQUE (`reset_token_hash`);

select * from users;
