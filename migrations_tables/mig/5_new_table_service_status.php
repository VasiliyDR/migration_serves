<?php
$sql_migrations = 'CREATE TABLE service_status (id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
parent INT UNSIGNED,
group_id INT UNSIGNED NOT NULL,
name VARCHAR(50) NOT NULL,
status_in_1C_id INT UNSIGNED  NOT NULL,
CONSTRAINT `table_service_status_group_id_to_service_group_status_id` FOREIGN KEY (`group_id`) REFERENCES `service_group_status` (`id`),
CONSTRAINT `status_in_1C_id_to_status_in_1C_id` FOREIGN KEY (`status_in_1C_id`) REFERENCES `status_in_1C` (`id`));';
$commit_migrations = 'Создание таблицы для статусов';
?>