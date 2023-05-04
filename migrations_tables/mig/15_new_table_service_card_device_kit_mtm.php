<?php
$sql_migrations = 'CREATE TABLE service_card_device_kit_mtm (
    card_device_uid VARCHAR(64) NOT NULL,
    kit_id INT UNSIGNED NOT NULL,
    CONSTRAINT `card_device_uid_fk1` FOREIGN KEY(`card_device_uid`) REFERENCES `service_card_device`(`uid`),
    CONSTRAINT `kit_id_fk1` FOREIGN KEY(`kit_id`) REFERENCES `service_kit`(`id`));';
$commit_migrations = 'create table service_card_device_kit_mtm and add fk service_card_device_kit_mtm.card_device_uid -> service_card_device.uid, fk service_card_device_kit_mtm.kit_id -> service_kit.id';
?>