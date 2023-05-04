<?php
include_once './includes/classes/includes_classes.php';

$createfile = new File();




#FOR EXAMPLE
// $createfile->createFileMigration('create_table_cars', 'CREATE TABLE cars (id int, car_name varchar(30), model varchar(30))', "create users table for my garage");
// $createfile->createFileMigration('create_table_users', 'CREATE TABLE users (id int, car_name varchar(30), model varchar(30))', "create users table for my garage");
// $createfile->createFileMigration('create_table_employee', 'CREATE TABLE employee (id int, car_name varchar(30), model varchar(30))', "create users table for my garage");
// $createfile->createFileMigration('add_column_about_garages_table', 'CREATE TABLE garages (id int, car_name varchar(30), model varchar(30), about varchar(5))', "create users table for my garage");


//ЗАКАЗЫ
// $createfile->createFileMigration('create_table_service_orders', 'CREATE TABLE service_orders (uid VARCHAR(64) NOT NULL PRIMARY KEY,
//                                                                                                         order_name_1c VARCHAR(50),
//                                                                                                         employee INT UNSIGNED NOT NULL,
//                                                                                                         master INT UNSIGNED NOT NULL, 
//                                                                                                         date_create DATETIME DEFAULT CURRENT_TIMESTAMP,
//                                                                                                         date_update DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
//                                                                                                         deadline DATE NOT NULL,
//                                                                                                         resource_id INT UNSIGNED NOT NULL, 
//                                                                                                         comment TEXT NOT NULL,
//                                                                                                         type_order_id INT UNSIGNED NOT NULL,
//                                                                                                         prepay BIT DEFAULT 0,
//                                                                                                         urgently BIT DEFAULT 0, 
//                                                                                                         works_id INT UNSIGNED NOT NULL,
//                                                                                                         spare_parts_id INT UNSIGNED NOT NULL,
//                                                                                                         workshop_id INT UNSIGNED NOT NULL,
//                                                                                                         client_id INT  UNSIGNED NOT NULL,
//                                                                                                         device_uid VARCHAR(64) NOT NULL,
//                                                                                                         status_id INT UNSIGNED NOT NULL);', 'Создание таблицы заказов для сервиса');

//ТИПЫ ЗАКАЗОВ
// $createfile->createFileMigration('create_table_service_type_order', 'CREATE TABLE service_type_order (id INT UNSIGNED NOT NULL PRIMARY KEY, name VARCHAR(50) NOT NULL);', 'Создание таблицы типы заказов');

// СТАТУСЫ
// $createfile->createFileMigration('create_table_service_status', 'CREATE TABLE service_status (id INT UNSIGNED NOT NULL PRIMARY KEY, parent INT UNSIGNED NOT NULL, group_id INT UNSIGNED NOT NULL); ', 'Создание таблицы для статусов');
// Добавил колонку name
// $createfile->createFileMigration('create_add_column_name_table_service_status', 'ALTER TABLE service_status ADD COLUMN name VARCHAR(50) NOT NULL;', 'Добавление в таблицу колонки name');

// ГРУППЫ СТАТУСОВ
// $createfile->createFileMigration('create_talbe_service_group_status', 'CREATE TABLE db_olliver.service_group_status (id INT UNSIGNED NOT NULL PRIMARY KEY, name VARCHAR(50) NOT NULL, parent INT NOT NULL);', 'Создание таблицы для групп статусов');

// ИСТОЧНИК
// $createfile->createFileMigration('create_table_service_resource', 'CREATE TABLE db_olliver.service_source (id INT UNSIGNED NOT NULL PRIMARY KEY, name VARCHAR(50) NOT NULL);', 'Создание таблицы источника');

// МАСТЕРСКИЕ
// $createfile->createFileMigration('create_table_service_workshop', 'CREATE TABLE db_olliver.service_workshop (id INT UNSIGNED NOT NULL PRIMARY KEY, name VARCHAR(50) NOT NULL, address VARCHAR(30) NOT NULL);', 'Создание таблицы мастерских');
// ДОБАВЛЕНИЕ КОЛОНКИ ADDRESS
// $createfile->createFileMigration('add_column_address_table_service_workshop', 'ALTER TABLE db_olliver.service_workshop ADD COLUMN address VARCHAR(30) NOT NULL;', 'Добавление колонки address в таблицу service_workshop');

// РАБОТЫ
// $createfile->createFileMigration('create_table_service_works', 'CREATE TABLE db_olliver.service_works (id INT UNSIGNED NOT NULL PRIMARY KEY, name VARCHAR (50) NOT NULL, price DOUBLE NOT NULL);', 'Создание таблицы работы');

// ЗАПЧАСТИ
//$createfile->createFileMigration('create_table_service_spare_parts','CREATE TABLE db_olliver.service_spare_parts (id INT UNSIGNED PRIMARY KEY, name VARCHAR(50) NOT NULL, partno VARCHAR(20) NOT NULL, price DOUBLE(8,2) NOT NULL);','Создание таблицы запчасти');

// КЛИЕНТ
// $createfile->createFileMigration('create_table_service_client', 'CREATE TABLE db_olliver.service_client (id INT UNSIGNED PRIMARY KEY, type_id int UNSIGNED NOT NULL, fio VARCHAR(30) NOT NULL, number VARCHAR(20) NOT NULL, requisite_id INT UNSIGNED NULL);','Создание таблицы клиенты сервиса');

// ТИП КЛИЕНТА
//$createfile->createFileMigration('create_table_service_type_client','CREATE TABLE db_olliver.service_type_client (id INT UNSIGNED PRIMARY KEY, name VARCHAR(20) NOT NULL);','Создание таблицы типы клиентов');

// РЕКВИЗИТЫ
//$createfile->createFileMigration('create_table_service_requisite', 'CREATE TABLE db_olliver.service_requisite (id INT UNSIGNED PRIMARY KEY);', 'Создание таблицы реквизиты');

//КАРТОЧКА ПРИБОРА
// $createfile->createFileMigration('create_table_service_card_device', 'CREATE TABLE db_olliver.service_card_device (uid VARCHAR(64) PRIMARY KEY, 
//                                                                                                                    device_id INT UNSIGNED NOT NULL,
//                                                                                                                    serial_number VARCHAR(60) NOT NULL);', 
//                                                                                                                    'Создание таблицы карточка товара');

// ТИП НЕИСПРАВНОСТИ
// $createfile->createFileMigration('create_table_service_type_broken', 'CREATE TABLE db_olliver.service_type_broken (id INT UNSIGNED PRIMARY KEY, name VARCHAR(120) NOT NULL);', 'Создание таблицы типы неисправностей');

// КОМПЛЕКТАЦИЯ
// $createfile->createFileMigration('create_table_service_kit', 'CREATE TABLE db_olliver.service_kit (id INT UNSIGNED PRIMARY KEY, name VARCHAR(120) NOT NULL);', 'Создание таблицы комплектации');

// ВНЕШНИЙ ВИД
// $createfile->createFileMigration('create_table_service_out_view', 'CREATE TABLE db_olliver.service_out_view (id INT UNSIGNED PRIMARY KEY, name VARCHAR(120) NOT NULL);', 'Создание таблицы внешний вид');

// ФОТО
// $createfile->createFileMigration('create_table_service_photo', 'CREATE TABLE db_olliver.service_photo (id INT UNSIGNED PRIMARY KEY, card_device_id INT UNSIGNED NOT NULL, type_photo INT UNSIGNED NOT NULL, file VARCHAR(200) NOT NULL);', 'Создание таблицы фотографий');

// ПРИБОР
// $createfile->createFileMigration('create_table_service_device', 'CREATE TABLE db_olliver.service_device (id INT UNSIGNED PRIMARY KEY, type_device_id INT UNSIGNED NOT NULL, maker_id INT UNSIGNED NOT NULL, model VARCHAR(30) NOT NULL);', 'Создание таблицы приборы');

// ТИП ПРИБОРА
// $createfile->createFileMigration('create_table_service_type_device', 'CREATE TABLE db_olliver.service_type_device (id INT UNSIGNED PRIMARY KEY, name VARCHAR(50) NOT NULL);', 'Создание таблицы типы прибора');

// ПРОИЗВОДИТЕЛЬ
// $createfile->createFileMigration('create_table_service_maker', 'CREATE TABLE db_olliver.service_maker (id INT UNSIGNED PRIMARY KEY, name VARCHAR(50) NOT NULL);', 'Создание таблицы производителей');

// ДЕТАТИРОВКА
// $createfile->createFileMigration('create_table_service_detail', 'CREATE TABLE db_olliver.service_detail (id INT UNSIGNED PRIMARY KEY, file_link VARCHAR(200) NOT NULL, name VARCHAR(100) NOT NULL);', 'Создание таблицы деталировка');

// удаление колонки workd_id из таблицы service_orders
// $createfile->createFileMigration('delete_column_works_id_table_service_orders', 'ALTER TABLE db_olliver.service_orders DROP COLUMN works_id;', 'Удаление колонки works_id в таблице service_orders');

//удаление колонки spare_parts_id в из таблицы service_orders
// $createfile->createFileMigration('delete_column_spare_parts_id_table_service_orders', 'ALTER TABLE db_olliver.service_orders DROP COLUMN spare_parts_id;', 'Удаление колонки spare_parts_id в таблице service_orders');


// переименование колонки resource_id на source_id в таблице service_orders
// $createfile->createFileMigration('rename_column_resource_id_on_source_id_table_service_orders', 'ALTER TABLE db_olliver.service_orders CHANGE resource_id source_id INT UNSIGNED NOT NULL;', 'переименование колонки resource_id в source_id');

// переименование колонки device_uid на card_device_uid в таблице service_orders
// $createfile->createFileMigration('rename_column_device_uid_on_card_device_uid_table_service_orders', 'ALTER TABLE db_olliver.service_orders CHANGE device_uid card_device_uid VARCHAR(64) NOT NULL', 'Переименование колонки device_uid в card_device_uid');

//fk service_orders.source_id
// $createfile->createFileMigration('add_fk_source_id_table_service_orders_on_id_service_source', 'ALTER TABLE db_olliver.service_orders ADD CONSTRAINT source_id_on_id_table_service_source_fk FOREIGN KEY(source_id) REFERENCES db_olliver.service_source(id);', 'Добавление fk на service_orders.source_id -> service_source.id');

// fk service_orders.type_order_id
// $createfile->createFileMigration('add_fk_type_order_id_table_service_orders_on_id_service_type_order', 'ALTER TABLE db_olliver.service_orders ADD CONSTRAINT type_order_id_on_id_table_service_type_order_fk FOREIGN KEY(type_order_id) REFERENCES db_olliver.service_type_order(id);', 'Добаление fk на service_orders.type_order_id -> service_type_order.id');

// fk service_orders.workshop
// $createfile->createFileMigration('add_fk_workshop_id_table_service_orders_on_id_service_workshop', 'ALTER TABLE db_olliver.service_orders ADD CONSTRAINT workshop_id_on_id_table_service_workshop_fk FOREIGN KEY(workshop_id)REFERENCES db_olliver.service_workshop(id);', 'Добавление fk на service_orders.workshop_id -> service_workshop.id');

// fk service_orders.client_id
// $createfile->createFileMigration('add_fk_client_id_table_service_orders_on_id_service_client', 'ALTER TABLE db_olliver.service_orders ADD CONSTRAINT client_id_on_id_table_service_client_fk FOREIGN KEY(client_id) REFERENCES db_olliver.service_client(id);', 'Добавление fk service_orders.client_id -> service_client.id');

// fk service_orders.card_device_uid
// $createfile->createFileMigration('add_fk_card_device_uid_table_service_orders_on_uid_service_card_device', 'ALTER TABLE db_olliver.service_orders ADD CONSTRAINT card_device_uid_on_uid_table_service_card_device_fk FOREIGN KEY(card_device_uid) REFERENCES db_olliver.service_card_device(uid);', 'Добавление fk service_orders.card_device_uid -> service_card_device.uid');

// fk service_orders.status_id 
// $createfile->createFileMigration('add_fk_status_id_table_service_orders_on_id_service_status', 'ALTER TABLE db_olliver.service_orders ADD CONSTRAINT status_id_on_id_table_service_status_fk FOREIGN KEY(status_id) REFERENCES db_olliver.service_status(id);', 'Добавление fk service_orders.status_id -> service_status.id');


// fk service_status.group_id
// $createfile->createFileMigration('add_fk_group_id_table_service_status_on_id_service_group_status', 'ALTER TABLE db_olliver.service_status ADD CONSTRAINT group_id_on_id_table_service_group_status FOREIGN KEY(group_id) REFERENCES db_olliver.service_group_status(id);', 'Добавление fk service_status.group_id -> service_group_status.id');

// fk service_card_device.device_id
// $createfile->createFileMigration('add_fk_device_id_table_service_card_device_on_id_service_device', 'ALTER TABLE db_olliver.service_card_device ADD CONSTRAINT device_id_on_id_table_service_device_fk FOREIGN KEY(device_id) REFERENCES db_olliver.service_device(id);', 'Добавление fk service_card_device.device_id -> service_device.id');

// fk service_device.type_device_id
// $createfile->createFileMigration('add_fk_type_device_id_table_service_device_on_id_service_type_device', 'ALTER TABLE db_olliver.service_device ADD CONSTRAINT type_device_id_on_id_table_service_type_device_fk FOREIGN KEY(type_device_id) REFERENCES db_olliver.service_type_device(id); ', 'Добавление fk service_device.type_device_id -> service_type_device.id');

// fk service_device.maker_id
// $createfile->createFileMigration('add_fk_maker_id_table_service_device_on_id_service_type_device', 'ALTER TABLE db_olliver.service_device ADD CONSTRAINT maker_id_on_id_table_service_maker_fk FOREIGN KEY(maker_id) REFERENCES db_olliver.service_maker(id);', 'Добавление fk service_device.maker_id -> service_maker_id');

// rename column card_device_id on card_device_uid
// $createfile->createFileMigration('rename_column_card_device_id_on_card_device_uid_table_service_photo', 'ALTER TABLE db_olliver.service_photo CHANGE card_device_id card_device_uid VARCHAR(64) NOT NULL;', 'Переименование колонки card_device_id в card_device_uid');

// fk service_photo.card_device_uid
// $createfile->createFileMigration('add_fk_card_device_uid_table_service_photo_on_uid_service_card_device', 'ALTER TABLE db_olliver.service_photo ADD CONSTRAINT card_device_uid_on_uid_table_service_card_device FOREIGN KEY(card_device_uid) REFERENCES db_olliver.service_card_device(uid);', 'Добавление fk service_photo.card_device_uid -> service_card_device.uid');

// delete fk service_device.type_device_id
// $createfile->createFileMigration('del_fk_service_device_id_table_service_device', 'ALTER TABLE db_olliver.service_device DROP FOREIGN KEY type_device_id_on_id_table_service_type_device_fk;', 'Удаление fk в service_device.type_device_id');

// delete index for this fk(type_device_id_on_id_table_service_type_device_fk)
// $createfile->createFileMigration('del_idx_service_device_id_table_service_device', 'ALTER TABLE db_olliver.service_device DROP INDEX  type_device_id_on_id_table_service_type_device_fk;', 'Удаление idx в service_device.type_device_id');

// rename service_device.type_device_id on service_device.product_description_id
// $createfile->createFileMigration('rename_column_type_device_id_on_product_description_id_table_service_device', 'ALTER TABLE db_olliver.service_device CHANGE type_device_id product_description_id INT UNSIGNED NOT NULL', 'rename column type_device_id on product_description_id');

// fk service_device.product_description_id
// $createfile->createFileMigration('add_fk_product_description_id_table_service_device_on_id_product_description', 'ALTER TABLE db_olliver.service_device ADD CONSTRAINT product_description_id_on_id_table_product_description_fk FOREIGN KEY(product_description_id) REFERENCES db_olliver.product_description(id); ', 'create fk service_device.product_description_id -> product_description.id');

// ALTER TABLE db_olliver.service_orders DROP FOREIGN KEY card_device_uid_on_uid_table_service_card_device_fk; --> delete fk 
// ALTER TABLE db_olliver.service_orders DROP INDEX card_device_uid_on_uid_table_service_card_device_fk; --> delete index for this fk

// delete fk service_device.maker_id
// $createfile->createFileMigration('del_fk_maker_id_table_service_device', 'ALTER TABLE db_olliver.service_device DROP FOREIGN KEY maker_id_on_id_table_service_maker_fk;', 'delete fk on service_device.maker_id');

// delete idx service_device.maker_id
// $createfile->createFileMigration('del_idx_maker_id_table_service_device', 'ALTER TABLE db_olliver.service_device DROP INDEX maker_id_on_id_table_service_maker_fk;', 'delete edx on service_device.maker_id');

// rename service_device.maker_id on service_device.brand_id
// $createfile->createFileMigration('rename_column_maker_id_on_brand_id_table_service_device', 'ALTER TABLE db_olliver.service_device CHANGE maker_id brand_id INT UNSIGNED NOT NULL;', 'rename column service_device.maker_id on service_device.brand_id');

// fk service_device.brand_id
// $createfile->createFileMigration('add_fk_brand_id_table_service_device_on_id_brand', 'ALTER TABLE db_olliver.service_device ADD CONSTRAINT brand_id_on_id_table_brand_fk FOREIGN KEY(brand_id) REFERENCES db_olliver.brand(id);', 'add fk db_olliver.service_device.brand_id -> db_olliver.brand.id');


// create table service_order_work_mtm
// $createfile->createFileMigration('create_table_service_order_work_mtm', 'CREATE TABLE service_order_work_mtm (id INT UNSIGNED PRIMARY KEY, order_uid VARCHAR(64) NOT NULL, work_id INT UNSIGNED NOT NULL, CONSTRAINT order_uid_on_uid_table_service_orders_fk FOREIGN KEY(order_uid) REFERENCES db_olliver.service_orders(uid), CONSTRAINT work_id_on_id_table_service_works_fk FOREIGN KEY(work_id) REFERENCES db_olliver.service_works(id));', 'create table service_order_work_mtm and add fk service_order_work_mtm.order_uid -> service_orders.uid, fk service_order_work_mtm.work_id -> service_work.id');

// create table service_orders_spare_part_mtm
// $createfile->createFileMigration('create_table_service_order_spare_part_mtm', 'CREATE TABLE service_order_spare_part_mtm (id INT UNSIGNED PRIMARY KEY, order_uid VARCHAR(64) NOT NULL, spare_part_id INT UNSIGNED NOT NULL, CONSTRAINT order_uid_on_uid_table_service_orders_fk_mtm FOREIGN KEY(order_uid) REFERENCES db_olliver.service_orders(uid), CONSTRAINT spare_part_id_on_id_table_service_spare_parts_fk_mtm FOREIGN KEY(spare_part_id) REFERENCES db_olliver.service_spare_parts(id));', 'create table service_order_spare_part_mtm and add fk service_order_spare_part_mtm.order_uid -> service_orders.uid, fk service_order_spare_part_mtm.spare_part_id -> service_spare_parts.id');

// create table service_card_device_kit_mtm
// $createfile->createFileMigration('create_table_card_device_kit_mtm', 'CREATE TABLE service_card_device_kit_mtm (id INT UNSIGNED PRIMARY KEY, card_device_uid VARCHAR(64) NOT NULL, kit_id INT UNSIGNED NOT NULL, CONSTRAINT card_device_uid_on_uid_table_service_card_device_fk_mtm_1 FOREIGN KEY(card_device_uid) REFERENCES db_olliver.service_card_device(uid), CONSTRAINT kit_id_on_id_table_service_kit_fk_mtm1 FOREIGN KEY(kit_id) REFERENCES db_olliver.service_kit(id));', 'create table service_card_device_kit_mtm and add fk service_card_device_kit_mtm.card_device_uid -> service_card_device.uid, fk service_card_device_kit_mtm.kit_id -> service_kit.id');

// create table service_card_device_type_broken_mtm
// $createfile->createFileMigration('create_table_service_card_device_type_broken_mtm', 'CREATE TABLE service_card_device_type_broken_mtm (id INT UNSIGNED PRIMARY KEY, card_device_uid VARCHAR(64) NOT NULL, type_broken_id INT UNSIGNED NOT NULL, CONSTRAINT card_device_uid_on_uid_table_service_card_device_fk_mtm_2 FOREIGN KEY(card_device_uid) REFERENCES db_olliver.service_card_device(uid), CONSTRAINT type_broken_id_on_id_table_service_type_broken_fk_mt_2 FOREIGN KEY (type_broken_id) REFERENCES db_olliver.service_type_broken(id));', 'create table service_card_device_type_broken_mtm and add fk service_card_device_type_broken_mtm.card_device_uid -> service_card_device.uid, fk service_card_device_type_broken_mtm.broken_id -> service_type_broken.id');

// create table service_card_device_out_view_mtm
// $createfile->createFileMigration('create_table_service_card_device_out_view_mtm',
//                                     'CREATE TABLE service_card_device_out_view_mtm (id INT UNSIGNED NOT NULL,
//                                                                                     card_device_uid VARCHAR(64) NOT NULL,
//                                                                                     out_view_id INT UNSIGNED NOT NULL, 
//                                                                                     CONSTRAINT card_device_uid_on_uid_table_service_card_device_fk_mtm_3 FOREIGN KEY(card_device_uid) REFERENCES db_olliver.service_card_device(uid),
//                                                                                     CONSTRAINT out_view_id_on_id_table_service_out_view_fk_mtm_3 FOREIGN KEY(out_view_id) REFERENCES db_olliver.service_out_view(id) );', 
//                                     'create table service_card_device_out_view_mtm and add fk service_card_device_out_view_mtm.card_device_uid -> service_card_device.uid, fk service_card_device_out_view_mtm.out_view_id -> service_out_view.id');

// create table service_device_detail_mtm
$createfile->createFileMigration('create_table_service_device_detail_mtm', 'CREATE TABLE service_device_detail_mtm (id INT UNSIGNED NOT NULL,
                                                                                                                    device_id INT UNSIGNED NOT NULL,
                                                                                                                    detail_id INT UNSIGNED NOT NULL,
                                                                                                                    CONSTRAINT device_id_on_id_table_service_device_fk_mtm FOREIGN KEY(device_id) REFERENCES db_olliver.service_device(id),
                                                                                                                    CONSTRAINT detail_id_on_id_table_service_detail_fk FOREIGN KEY(detail_id) REFERENCES db_olliver.service_detail(id));',
                                    'create table service_device_detail_mtm and add fk service_device_detail_mtm.device_id -> service_device.id, fk service_device_detail_mtm.detail_id -> service_datail.id');

$mysql = new Mysql();
$mysql->job();



?>

