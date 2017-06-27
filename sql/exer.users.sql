CREATE DATABASE exer;

Use exer;

CREATE TABLE `users` (
	`id` int not null auto_increment,
    `groupcode` VARCHAR(255) not null,
    `username` VARCHAR(255) not null,
    `password` VARCHAR(255) not null,
    `role` VARCHAR(255) not null,
    primary key(id)
);

INSERT into users (`groupcode`,`username`,`password`,`role`)
values ('TUITT','emman','master','admin');

CREATE TABLE menu (
	`id` int not null auto_increment,
    `date` date not null,
    `name` VARCHAR(255) not null,
    `price` int not null,
    primary key(id)
)
;