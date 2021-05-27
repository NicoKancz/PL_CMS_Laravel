create database if not exists PL_CMS_testing;

use PL_CMS_testing;

create table if not exists languages(
    languageId int not null auto_increment,
    languageName varchar(55) not null,
    languageAppearance year not null,
    primary key (languageId)
);

create table if not exists categories(
    categoryId int not null auto_increment,
    categoryName varchar(55) not null,
    categoryDesc text null,
    categoryDate date not null,
    languageId int not null,
    primary key (categoryId),
    foreign key (languageId) references languages(languageId)
);

create table if not exists roles(
    roleId int not null auto_increment,
    roleName varchar(55) not null,
    primary key (roleId)
);

create table if not exists users(
    userId int not null auto_increment,
    userName varchar(255) not null,
    userEmail varchar(255) not null,
    userPassword varchar(255) not null,
    userRole int not null,
    userRegDate date not null,
    primary key (userId),
    foreign key (userRole) references roles(roleId)
);

create table if not exists contents(
    contentId int not null auto_increment,
    contentName varchar(255) not null,
    contentDesc text null,
    contentType varchar(55) not null,
    contentImage varchar(255) null,
    contentDate date not null,
    userId int not null,
    categoryId int not null,
    primary key (contentId),
    foreign key (userId) references users(userId),
    foreign key (categoryId) references categories(categoryId)
);

create table if not exists comments(
    commentId int not null auto_increment,
    commentText text not null,
    commentDate date not null,
    commentUpdate date not null,
    userId int not null,
    primary key (commentId),
    foreign key (userId) references users(userId)
);