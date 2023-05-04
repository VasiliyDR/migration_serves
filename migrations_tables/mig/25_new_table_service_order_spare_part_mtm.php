<?php
$sql_migrations = 'CREATE TABLE service_order_spare_part_mtm (
    order_uid VARCHAR(36) NOT NULL,
    spare_part_guid VARCHAR(36) NOT NULL,
    count_spare_parts INT UNSIGNED NOT NULL,
    CONSTRAINT `order_uid_to_service_orders_uid` FOREIGN KEY(`order_uid`) REFERENCES `service_orders`(`uid`),
    CONSTRAINT `spare_part_guid_to_service_spare_parts_guid` FOREIGN KEY(`spare_part_guid`) REFERENCES `service_spare_parts`(`guid`)
);';
$commit_migrations = 'create table service_order_spare_part_mtm and add fk service_order_spare_part_mtm.order_uid -> service_orders.uid, fk service_order_spare_part_mtm.spare_part_id -> service_spare_parts.id';
?>