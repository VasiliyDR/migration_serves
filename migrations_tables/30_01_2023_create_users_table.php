<?php
// писать раздельные запросы через `|` - разбивает на массив запросов
$sql_migrations = 'CREATE TABLE users (PersonID int,LastName varchar(255),FirstName varchar(255),Address varchar(255),City varchar(255));|CREATE ABLE employee (id int, name varchar(20));';
$commit_migrations = 'create users table for save users accounts';
?>