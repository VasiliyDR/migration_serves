<?php
$sql_migrations = 'CREATE TABLE db_olliver.service_card_device_test (uid VARCHAR(36) NOT NULL PRIMARY KEY,
device_id INT UNSIGNED NOT NULL,
serial_number VARCHAR(160) NOT NULL,
place_pay DATE NULL,
date_place_pay VARCHAR(100) NULL,
CONSTRAINT `device_id_to_service_device_id` FOREIGN KEY (`device_id`) REFERENCES `service_device` (`id`));';
$commit_migrations = 'Создание таблицы карточка товара';
?>