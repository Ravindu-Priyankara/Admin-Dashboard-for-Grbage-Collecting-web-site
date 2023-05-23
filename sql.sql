crate database sqa_project;

create table web_admin(id int primary key, username varchar(255) not null, password varchar(255) not null);

create table Green_Captain(id int primary key, username varchar(255) not null,password varchar(255) not null);

create table report(id int primary key,mainCity varchar(255) not null, location varchar(255) not null, status varchar(255) not null);

insert into report values(1,'colombo' , 'pattah - main street' , 'pending');

create table article(id int primary key, name varchar(255) not null, publisher_name varchar(255) not null, status varchar(255) not null);

insert into article values(1,'my first article','Ravindu Priyankara','accepted');

#database dump quary i runed

ravindupriyankara@Ravindus-MacBook-Pro admin login % mysqldump -u root -p  sqa_project > database_dump.sql