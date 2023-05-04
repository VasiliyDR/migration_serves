<?php
$sql_migrations = 
'CREATE TABLE service_order_work_mtm (
    order_uid VARCHAR(36) NOT NULL,
    work_id INT UNSIGNED NOT NULL,
    CONSTRAINT `order_uid_to_service_orders_uid_fk` FOREIGN KEY(`order_uid`) REFERENCES service_orders(`uid`),
    CONSTRAINT `work_id_to_service_works_id_fk` FOREIGN KEY(`work_id`) REFERENCES service_works(`id`)
);';
$commit_migrations = 'create table service_order_work_mtm and add fk service_order_work_mtm.order_uid -> service_orders.uid, fk service_order_work_mtm.work_id -> service_work.id';
?>