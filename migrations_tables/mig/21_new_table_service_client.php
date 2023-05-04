DROP TABLE IF EXISTS service_client;
CREATE TABLE service_client (guid VARCHAR(36) NOT NULL PRIMARY KEY,
client_type_id int UNSIGNED NOT NULL,
fio VARCHAR(130) NOT NULL,
number VARCHAR(120) NOT NULL,
CONSTRAINT `type_id_to_service_type_client_id` FOREIGN KEY(`type_id`) REFERENCES `service_type_client`(`id`),
);

