<?php
$sql_migrations = 'CREATE TABLE service_card_device_type_broken_mtm_test (
    card_device_uid VARCHAR(64) NOT NULL,
    type_broken_id INT UNSIGNED NOT NULL,
    CONSTRAINT `type_broken_id_fk` FOREIGN KEY(`type_broken_id`) REFERENCES `service_type_broken`(`id`),
    CONSTRAINT `card_device_uid_fk` FOREIGN KEY (`card_device_uid`) REFERENCES `service_card_device`(`uid`));';
$commit_migrations = 'mtm table';
?>