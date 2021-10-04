CREATE DATABASE IF NOT EXISTS vseprovsedb;

USE vseprovsedb;

CREATE TABLE IF NOT EXISTS ads
(
    id          int auto_increment primary key,
    contacts        varchar(80)  not null,
    content varchar(200) not null,
    uploaded  timestamp    not null
);