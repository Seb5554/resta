


create database Restaurant;
use Restaurant;




create table client(
id_client int AUTO_INCREMENT primary key,
prenom varchar(40),
nom varchar(40),
email varchar(50),
phone varchar(30),
password varchar(50)
);


create table reservation(
id_com int AUTO_INCREMENT primary key,
id_client int,
name varchar(30),
phone varchar(30),
dateC DATE,
timeC varchar(5),
persons int,
msg text
)AUTO_INCREMENT=1000;


create table heure(
id_hour int AUTO_INCREMENT primary key,
  morningOpen int,
  morningClose int,
  eveningOpen int,
  eveningClose int
  ); 


create table produit(
id_prod int AUTO_INCREMENT primary key,
title varchar(40),
prix decimal(5,2),
description varchar(100),
category varchar(50),
);


insert into produit values(1000,'Greek Salad',25.5,'Tomatoes, green bell pepper, sliced cucumber onion, olives, and feta cheese' ,'salade');
insert into produit values(1001,'Butternut Pumpkin',10,'Typesetting industry lorem Lorem Ipsum is simply dummy text of the priand.');
insert into produit values(1002,'Olivas Rellenas',25,'Avocados with crab meat, red onion, crab salad stuffed red bell pepper and green bell pepper.');
insert into produit values(1003,'Lasagne',40,'Vegetables, cheeses, ground meats, tomato sauce, seasonings and spices');
insert into produit values(1003,'Tokusen Wagyu',39,'Vegetables, cheeses, ground meats, tomato sauce, seasonings and spices.');
insert into produit values(1003,'TOpu Fish',49,'Vegetables, cheeses, ground meats, tomato sauce, seasonings and spices.');

