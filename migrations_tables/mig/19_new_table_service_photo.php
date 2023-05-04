<?php
$sql_migrations = 'CREATE TABLE db_olliver.service_photo (id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY, 
card_device_uid INT UNSIGNED NOT NULL, 
type_photo INT UNSIGNED NOT NULL, 
file VARCHAR(200) NOT NULL,
CONSTRAINT `card_device_id_to_service_card_device_uid` FOREIGN KEY (`card_device_uid`) REFERENCES `service_card_device` (`uid`));';
$commit_migrations = 'Создание таблицы фотографий';
?>