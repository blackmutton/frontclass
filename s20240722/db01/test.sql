-- 創建資料表
CREATE TABLE `db0722`.`students` 
(`id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT , `name` VARCHAR(10) NOT NULL ,
 `mobile` VARCHAR(10) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

-- 新增
INSERT INTO `students`(`id`, `name`, `mobile`) VALUES (Null,'amy','0911111111');
INSERT INTO `students`(`id`, `name`, `mobile`) VALUES (Null,'tony','0922262222');
INSERT INTO `students`(`id`, `name`, `mobile`) VALUES (Null,'bob','0953333333');

-- 新增 / 修改 / 刪除 / 查詢
-- CRUD
-- create / read / update / delete