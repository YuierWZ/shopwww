CREATE database if not exists shopwww;
use shopwww;
--����Ա��
DROP TABLE IF EXISTS www_admin;
CREATE TABLE www_admin(
`id` tinyint unsigned auto_increment key,
username varchar(20) not null unique,
password char(32) not null,
email varchar(50) not null
);

--�����
DROP TABLE IF EXISTS www_cate;
CREATE TABLE www_cate(
id smallint unsigned auto_increment key,
cName varchar(50) unique
);

--��Ʒ��
DROP TABLE IF EXISTS www_pro;
CREATE TABLE www_pro(
id int unsigned auto_increment key,
pName varchar(50) not null unique,
pSn varchar(50) not null,
pNum int unsigned default 1,
mPrice decimal(10,2) not null,
wPrice decimal(10.2) not null,
pDesc text,
pImg varchar(50) not null,
pubTime int unsigned not null,
isShow tinyint(1) default 1,
isHot tinyint(1) default 0,
cId smallint unsigned not null
);

--�û���
DROP TABLE IF EXISTS www_user;
CREATE TABLE www_user(
id int unsigned auto_increment key,
username varchar(20) not null unique,
password char(32) not null,
sex char(2) not null check(sex in ('��','Ů','����')),
face varchar(50) not null,
regTime int unsigned not null
);

--����
DROP TABLE IF EXISTS www_album;
CREATE TABLE www_album(
id int unsigned auto_increment key,
pid int unsigned not null,
albumPath varchar(50) not null
);