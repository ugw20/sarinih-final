-- Active: 1696216288877@@127.0.0.1@3306@sarinih
CREATE DATABASE sarinih;
    DEFAULT CHARACTER SET = 'utf8mb4';

DROP DATABASE sarinih;
use sarinih;
-- Buat tabel user_register terlebih dahulu
CREATE TABLE `user_register` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `fulname` VARCHAR(255) NOT NULL,
  `username` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `create_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_username_unique` (`email`, `username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Lalu buat tabel reservasi
CREATE TABLE `reservasi` (
  `user_username` VARCHAR(255) NOT NULL,
  `user_email` VARCHAR(255) NOT NULL,
  `phone` VARCHAR(20) NOT NULL,
  `date` DATE NOT NULL,
  `time` TIME NOT NULL,
  `person` INT(11) NOT NULL,
  `create_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_username`),
  CONSTRAINT `fk_user_email_username` FOREIGN KEY (`user_email`, `user_username`)
  REFERENCES `user_register` (`email`, `username`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `contact` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `phone` VARCHAR(20) NOT NULL,
  `subject` VARCHAR(255) NOT NULL,
  `message` TEXT NOT NULL,
  `create_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_contact_email` FOREIGN KEY (`email`)
    REFERENCES `user_register` (`email`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;




DROP TABLE contact;

SHOW ENGINE INNODB STATUS;
ALTER TABLE `user_register` ENGINE = InnoDB;
ALTER TABLE `contact` ENGINE = InnoDB;
ALTER TABLE `reservasi` ENGINE = InnoDB;


SELECT * from user_register;
SELECT * from reservasi;

SHOW GRANTS FOR CURRENT_USER;
SELECT 
    CONSTRAINT_NAME, TABLE_NAME, COLUMN_NAME, REFERENCED_TABLE_NAME, REFERENCED_COLUMN_NAME
FROM information_schema.KEY_COLUMN_USAGE
WHERE TABLE_SCHEMA = 'nama_database' AND REFERENCED_TABLE_NAME IS NOT NULL;

SHOW TABLES;

DESC user_register;
DESC reservasi;

ALTER TABLE reservasi DROP FOREIGN KEY fk_user_email_username;


drop table user_register;
drop table user_reservasi;

SHOW VARIABLES LIKE 'max_connections';
SHOW VARIABLES LIKE 'wait_timeout';
SHOW VARIABLES LIKE 'interactive_timeout';

SHOW PROCESSLIST;
SHOW VARIABLES LIKE 'max_connections';

SET GLOBAL max_connections = 500;  -- Setel nilai max_connections menjadi 500

SHOW VARIABLES LIKE 'max_connections';

SHOW VARIABLES LIKE 'wait_timeout';
SHOW VARIABLES LIKE 'interactive_timeout'; 
SHOW VARIABLES LIKE 'wait_timeout';
SHOW VARIABLES LIKE 'interactive_timeout';

SET GLOBAL wait_timeout = 28800;
SET GLOBAL interactive_timeout = 28800;
