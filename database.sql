drop database if exists spotify;
create database spotify;

use spotify;

drop table if exists artist;
drop table if exists track;

create table artist(
    id int auto_increment primary key,
    id_Spotify varchar(100) null,
    name       varchar(100) null,
    followers  int          null,
    genders    varchar(100) null,
    link       varchar(100) null,
    picture    varchar(100) null
);

create table track
(
    id int auto_increment primary key,
    id_Spotify varchar(100) null,
    name       varchar(256) null,
    artists    varchar(256) null,
    duration   varchar(100) null
);