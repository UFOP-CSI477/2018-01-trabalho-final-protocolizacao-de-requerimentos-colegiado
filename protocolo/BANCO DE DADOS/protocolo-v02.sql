CREATE DATABASE protocolo;
-- ------------------tabela users---------------------------------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `protocolo`.`users` ( `id` INT(10) NOT NULL AUTO_INCREMENT ,
 `cpf` VARCHAR(191) NOT NULL ,
 `name` VARCHAR(191) NOT NULL ,
 `email` VARCHAR(191) NOT NULL ,
 `password` VARCHAR(191) NOT NULL ,
 `type` TINYINT(4) NOT NULL DEFAULT 2,
 `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
 `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
 `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
 PRIMARY KEY (`id`)) ENGINE = MyISAM;
 
 -- --------------------------------------------------------------------------------
 
 -- ---------------tabela solicitacoes----------------------------------------------
 DROP TABLE IF EXISTS `solicitacoes`;
 CREATE TABLE `protocolo`.`solicitacoes` ( `id` INT(10) NOT NULL AUTO_INCREMENT ,
 `name` VARCHAR(191) NULL DEFAULT NULL ,
 `solicitante` INT(10) NOT NULL DEFAULT 0,
 `avaliado_por` INT(10) NULL DEFAULT NULL ,
 `status` VARCHAR(191) NULL DEFAULT NULL ,
 `created_at` TIMESTAMP NULL DEFAULT NULL ,
 `updated_at` TIMESTAMP NULL DEFAULT NULL ,
FOREIGN KEY (solicitante) REFERENCES users(id),
FOREIGN KEY (avaliado_por) REFERENCES users(id),
PRIMARY KEY (`id`)) ENGINE = MyISAM;
 
 -- ------------------------------------------------------------------------------