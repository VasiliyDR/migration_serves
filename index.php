<?php
include_once './includes/classes/includes_classes.php';

$createfile = new File();
// $createfile->createFileMigration('create_table_cars', 'CREATE TABLE cars (id int, car_name varchar(30), model varchar(30))', "create users table for my garage");
// $createfile->createFileMigration('create_table_users', 'CREATE TABLE users (id int, car_name varchar(30), model varchar(30))', "create users table for my garage");
// $createfile->createFileMigration('create_table_employee', 'CREATE TABLE employee (id int, car_name varchar(30), model varchar(30))', "create users table for my garage");
// $createfile->createFileMigration('add_column_about_garages_table', 'CREATE TABLE garages (id int, car_name varchar(30), model varchar(30), about varchar(5))', "create users table for my garage");

$mysql = new Mysql();
$mysql->job();
?>
