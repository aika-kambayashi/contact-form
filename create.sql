drop database if exists `contact-form`;

create database `contact-form` default charset utf8;

use `contact_form`;

drop table if exists `form`;

create table `form` (
    `id` int(11) not null auto_increment,
    `name` varchar(255) not null default '',
    `age` int(11) not null default '0',
    `prefecture` varchar(255) not null default '',
    `address1` varchar(255) not null default '',
    `address2` varchar(255) not null default '',
    `comment` varchar(255) not null default '',
    `updated_at` datetime not null default current_timestamp,
    `created_at` datetime not null default current_timestamp,
    primary key(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;