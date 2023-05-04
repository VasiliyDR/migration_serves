<?php
$sql_migrations = 'CREATE TABLE db_olliver.service_group_status (id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY, name VARCHAR(50) NOT NULL, parent INT UNSIGNED NULL);';
$commit_migrations = 'Создание таблицы для групп статус';
?>