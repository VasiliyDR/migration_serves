<?php
$sql_migrations = 'CREATE TABLE db_olliver.service_requisite_test (
    id INT UNSIGNED PRIMARY KEY,
    inn VARCHAR(100) NOT NULL,
    kpp VARCHAR(100) NOT NULL,
    client_guid VARCHAR(36) NOT NULL,
    CONSTRAINT `client_id_to_service_client_guid` FOREIGN KEY(`client_guid`) REFERENCES `service_client`(`guid`)
                                          );';
$commit_migrations = 'Создание таблицы реквизиты';
?>