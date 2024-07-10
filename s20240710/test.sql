CREATE TABLE `db55688`.`students` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT , 
    `name` VARCHAR(30) NOT NULL , 
    `mobile` VARCHAR(20) NOT NULL , PRIMARY KEY (`id`)
    ) ENGINE = InnoDB;

CREATE TABLE `db55688`.`teachers` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT , 
    `name` VARCHAR(30) NOT NULL , 
    `mobile` VARCHAR(20) NOT NULL , PRIMARY KEY (`id`)
    ) ENGINE = InnoDB;

CREATE TABLE `db55688`.`shops` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT , 
    `name` varchar(30) NOT NULL , 
    `mobile` varchar(20) NOT NULL , PRIMARY KEY (`id`),
    `name` varchar(30) NOT NULL , PRIMARY KEY (`id`),
    `mobile` varchar(20) NOT NULL , PRIMARY KEY (`id`),
    `name` varchar(30) NOT NULL , PRIMARY KEY (`id`),
    `mobile` varchar(20) NOT NULL , PRIMARY KEY (`id`),
    `name` varchar(30) NOT NULL , PRIMARY KEY (`id`),
    `mobile` varchar(20) NOT NULL , PRIMARY KEY (`id`)
    ) ENGINE = InnoDB;

INSERT INTO `students` (`id`, `name`, `mobile`) VALUES (NULL, 'amy', '0911-111-111');
INSERT INTO `students` (`id`, `name`, `mobile`) VALUES (NULL, 'bob', '0922-222-222');
INSERT INTO `students` (`id`, `name`, `mobile`) VALUES (NULL, 'cat', '0933-333-333');