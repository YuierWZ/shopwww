create database if not exists 'shopwww';
use 'shopwww';
--����Ա��
drop table if exists 'www_admin';
create table 'www_admin'(
'id' tinyint unsigned auto_increament key,
'username' varchar(20) not null unique,
'password' char(32) not null,
'email' varchar(50) not null
);

--�����
drop table if exists 'www_cate';
create table 'www_cate'(
'id' smallint unsigned auto_increament key,
'cName' varchar(50) unique
);

--��Ʒ��
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

--�û���
drop table if exists 'www_user';
create table 'www_user'(
'id' int unsigned auto_increament key,
'username' varchar(20) not null unique,
'password' char(32) not null,
'sex' enum('��','Ů','����') not null default '����',
'face' varchar(50) not null,
'regTime' int unsigned not null
);

--����
drop table if exists 'www_album';
create table 'www_album'(
'id' int unsigned auto_increament key,
'pid' int unsigned not null,
'albumPath' varchar(50) not null
);