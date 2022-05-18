-- *********************************************
-- * SQL MySQL generation                      
-- *--------------------------------------------
-- * DB-MAIN version: 11.0.2              
-- * Generator date: Sep 14 2021              
-- * Generation date: Wed Mar 23 14:27:33 2022 
-- * LUN file: F:\ETML\CFC\Pratique\Projets\etml-p040-web2\bd-files\modelisation\db_web2.lun 
-- * Schema: db_web2-mld 
-- ********************************************* 


-- Database Section
-- ________________ 

CREATE DATABASE IF NOT EXISTS db_web2;
USE db_web2;


-- Tables Section
-- _____________ 

CREATE TABLE IF NOT EXISTS t_appreciate (
     idBook int not null,
     idUser int not null,
     appNote float(1) not null,
     constraint ID_t_appreciate_ID primary key (idUser, idBook));

CREATE TABLE IF NOT EXISTS t_author (
     idAuthor int not null auto_increment,
     autFirstName varchar(60) not null,
     autLastName varchar(60) not null,
     constraint ID_t_author_ID primary key (idAuthor));

CREATE TABLE IF NOT EXISTS t_book (
     idBook int not null auto_increment,
     booTitle varchar(120) not null,
     booNbPages int not null,
     booPreview varchar(255) not null,
     booResume varchar(2000) not null,
     booPublishingDate date not null,
     booNoteAverage float(1) not null,
     booCoverName varchar(50) not null,
     idAuthor int not null,
     idEditor int not null,
     idCategory int not null,
     idUser int not null,
     constraint ID_t_book_ID primary key (idBook));

CREATE TABLE IF NOT EXISTS t_category (
     idCategory int not null auto_increment,
     catName varchar(25) not null,
     constraint ID_t_category_ID primary key (idCategory));

CREATE TABLE IF NOT EXISTS t_editor (
     idEditor int not null auto_increment,
     ediName varchar(120) not null,
     constraint ID_t_editor_ID primary key (idEditor));

CREATE TABLE IF NOT EXISTS t_user (
     idUser int not null auto_increment,
     useNickname varchar(60) not null,
     usePassword varchar(255) not null,
     useCreateAt date not null,
     useNbBooks int not null,
     useNbAppreciation int not null,
     useAdmin char not null,
     constraint ID_t_user_ID primary key (idUser));


-- Constraints Section
-- ___________________ 

alter table t_appreciate add constraint FKt_a_t_b_FK
     foreign key (idBook)
     references t_book (idBook);

alter table t_appreciate add constraint FKt_a_t_u
     foreign key (idUser)
     references t_user (idUser);

alter table t_book add constraint FKt_write_FK
     foreign key (idAuthor)
     references t_author (idAuthor);

alter table t_book add constraint FKt_publish_FK
     foreign key (idEditor)
     references t_editor (idEditor);

alter table t_book add constraint FKt_own_FK
     foreign key (idCategory)
     references t_category (idCategory);

alter table t_book add constraint FKt_create_FK
     foreign key (idUser)
     references t_user (idUser);


-- Index Section
-- _____________ 

create unique index ID_t_appreciate_IND
     on t_appreciate (idUser, idBook);

create index FKt_a_t_b_IND
     on t_appreciate (idBook);

create unique index ID_t_author_IND
     on t_author (idAuthor);

create unique index ID_t_book_IND
     on t_book (idBook);

create index FKt_write_IND
     on t_book (idAuthor);

create index FKt_publish_IND
     on t_book (idEditor);

create index FKt_own_IND
     on t_book (idCategory);

create index FKt_create_IND
     on t_book (idUser);

create unique index ID_t_category_IND
     on t_category (idCategory);

create unique index ID_t_editor_IND
     on t_editor (idEditor);

create unique index ID_t_user_IND
     on t_user (idUser);

