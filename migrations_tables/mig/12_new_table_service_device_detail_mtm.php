<?php
$sql_migrations = 'CREATE TABLE service_device_detail_mtm (id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
                                                        device_id INT UNSIGNED NOT NULL,
                                                        detail_id INT UNSIGNED NOT NULL,
                                                        CONSTRAINT device_id_on_id_table_service_device_fk_mtm FOREIGN KEY(device_id) REFERENCES db_olliver.service_device(id),
                                                        CONSTRAINT detail_id_on_id_table_service_detail_fk FOREIGN KEY(detail_id) REFERENCES db_olliver.service_detail(id));';
$commit_migrations = 'create table service_device_detail_mtm and add fk service_device_detail_mtm.device_id -> service_device.id, fk service_device_detail_mtm.detail_id -> service_datail.id';
?>