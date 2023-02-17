create database student_management_system;

use student_management_system;

create table admin(
admin_name varchar(50) not null,
password varchar(50) not null
);

create table users(
userId	varchar(100) not null,
firstName varchar(100) not null,	
lastName varchar(100) not null,
email varchar(100) not null,
accountType	varchar(100) not null,
username varchar(100) not null,
password varchar(100) not null,
className varchar(100)
);

create table events(
eventMessage varchar(100) not null,
eventDate varchar(100) not null
);

create table contacts(
contactName	varchar(100) not null,
contactMessage varchar(500) not null,
contactDate	varchar(100) not null
);

insert into admin(admin_name,password)
values('admin','admin123');







