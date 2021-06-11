Esta es la presentacion de la prueba de ingreso de Wilinton Garcia Gonzalez

//SCRIPTS CREACION BASE DE DATOS


create database inventario;

create table productos(
id int(255) auto_increment not null,
nombre_producto varchar(100) not null,
referencia varchar(255) not null,
precio int(255) not null,
peso int(255) not null,
categoria varchar(100) not null,
stock int(255) not null,
fecha_creacion date not null,
fecha_venta datetime null,
constraint primary KEY(id)
);
