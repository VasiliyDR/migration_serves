<?php
$sql_migrations = 'CREATE TABLE service_orders (
    uid VARCHAR(36) NOT NULL PRIMARY KEY,
    order_name_1c VARCHAR(50),
    employee INT UNSIGNED NOT NULL,
    master INT UNSIGNED NULL,
    date_create DATETIME DEFAULT CURRENT_TIMESTAMP,
    date_update DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    deadline DATE NOT NULL,
    source_id INT UNSIGNED NOT NULL,
    comment TEXT NOT NULL,
    type_order_id INT UNSIGNED NOT NULL,
    prepay BIT DEFAULT 0,
    urgently BIT DEFAULT 0,
    workshop_id INT UNSIGNED NOT NULL,
    client_gid VARCHAR(36) NOT NULL,
    status_id INT UNSIGNED NOT NULL,
    CONSTRAINT `source_id_to_service_source_id` FOREIGN KEY(`source_id`) REFERENCES `service_source`(`id`),
    CONSTRAINT `type_order_id_to_service_type_order_id` FOREIGN KEY(`type_order_id`) REFERENCES `service_type_order`(`id`),
    CONSTRAINT `workshop_id_to_service_workshop_id_fk` FOREIGN KEY(`workshop_id`) REFERENCES `service_workshop`(`id`),
    CONSTRAINT `client_id_to_service_client_guid_fk` FOREIGN KEY(`client_gid`) REFERENCES `service_client`(`guid`)
    );';
$commit_migrations = 'Создание таблицы заказов для сервиса';
?>