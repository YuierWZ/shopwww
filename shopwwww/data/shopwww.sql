create database if not exists 'shopwww';
use 'shopwww';
--管理员表
drop table if exists 'www_admin';
create table 'www_admin'(
'id' tinyint unsigned auto_increament key,
'username' varchar(20) not null unique,
'password' char(32) not null,
'email' varchar(50) not null
);

--分类表
drop table if exists 'www_cate';
create table 'www_cate'(
'id' smallint unsigned auto_increament key,
'cName' varchar(50) unique
);

--商品表
drop table if exists 'www_pro';
create table 'www_pro'(
'id' int unsigned auto_increament key,
'pName' varchar(50) not null unique,
'pSn' varchar(50) not null,
'pNum' int unsigned default 1,
'mPrice' decimal(10,2) not null,
'wPrice' decimal(10.2) not null,
'pDesc' text,
'pImg' varchar(50) not null,
'pubTime' int unsigned not null,
'isShow' tinyint(1) default 1,
'isHot' tinyint(1) default 0,
'cId' smallint unsigned not null
);

--用户表
drop table if exists 'www_user';
create table 'www_user'(
'id' int unsigned auto_increament key,
'username' varchar(20) not null unique,
'password' char(32) not null,
'sex' enum('男','女','保密') not null default '保密',
'face' varchar(50) not null,
'regTime' int unsigned not null
);

--相册表
drop table if exists 'www_album';
create table 'www_album'(
'id' int unsigned auto_increament key,
'pid' int unsigned not null,
'albumPath' varchar(50) not null
);