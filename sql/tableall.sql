set names utf8;
drop database if exists eric;
create database eric charset=utf8;
use eric;
create table 
hero(
	hid int primary key auto_increment,
	name varchar(6),
	zhiye varchar(6),
	lishi varchar(64)
);
create table user(
	uid int primary key auto_increment,
	uname varchar(12),
	upwd varchar(64),
	user_name varchar(6),
	site varchar(32),
	phone varchar(11)
);
create table fankui(
	fid int primary key auto_increment,
	fname varchar(6),
	fsf varchar(12),
	site varchar(32),
	phone varchar(11),
	jianyi varchar(228)
);