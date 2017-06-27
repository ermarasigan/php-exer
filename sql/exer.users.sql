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
values ('TUITT','admin','4f26aeafdb2367620a393c973eddbe8f8b846ebd','admin');

CREATE TABLE `menu` (
	`id` int not null auto_increment,
    `date` date not null,
    `name` VARCHAR(255) not null,
    `price` int not null,
    primary key(id)
)
;

create table `orders` (
    `id` int not null auto_increment,
    `date` date not null,
    `qty` int not null,
    `userid` int,
    `menuid` int,
    primary key(id),
    foreign key(userid) references users(id)
        on update cascade
        on delete set null,
    foreign key(menuid) references menu(id)
        on update cascade
        on delete set null
);

SELECT o.date as Posting_date
,u.username as Customer_name
,m.name as Item_ordered
,m.price as Item_price
,o.qty as Item_qty
,m.price * o.qty as Subtotal
FROM `orders` o
,`menu` m
,`users` u
WHERE o.userid = u.id
and o.menuid = m.id
and o.date IN
(select max(date)
 from orders)

SELECT o.date as Posting_date
,u.username as Customer_name
,m.name as Item_ordered
,m.price as Item_price
,sum(o.qty) as Item_qty
,m.price * sum(o.qty) as Subtotal
FROM `orders` o
,`menu` m
,`users` u
WHERE o.userid = u.id
and o.menuid = m.id
and o.date IN
(select max(date)
 from orders)
 group by o.menuid


 SELECT o.date as Posting_date
,u.username as Customer_name
,sum(o.qty*m.price) as Total_bill
FROM `orders` o
,`menu` m
,`users` u
WHERE o.userid = u.id
and o.menuid = m.id
and o.date IN
(select max(date)
 from orders)
 group by o.userid