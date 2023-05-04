<?php
$sql_migrations = 'CREATE TABLE db_olliver.service_device (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    product_description_id INT UNSIGNED NOT NULL,
    brand_id INT UNSIGNED NOT NULL,
    model_id INT NOT NULL,
    CONSTRAINT `product_description_id_to_product_description_id` FOREIGN KEY (`product_description_id`) REFERENCES `product_description` (`id`),
    CONSTRAINT `brand_id_to_brand_id` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`id`),
    CONSTRAINT `model_id_to_product_id` FOREIGN KEY (`model_id`) REFERENCES `product` (`id`));';
$commit_migrations = 'Создание таблицы приборы';
?>