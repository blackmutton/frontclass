-- 創建資料表
CREATE TABLE `mydb`.`students` (`id` INT UNSIGNED NOT NULL AUTO_INCREMENT , `name` VARCHAR(32) NOT NULL , `phone` VARCHAR(32) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
-- 插入資料
INSERT INTO `students` (`id`, `name`, `phone`) 
VALUES 
(NULL, 'amy', '0911111'),
 (NULL, 'bob', '0922222'),
 (NULL, 'cat', '0933333'),
 (NULL, 'dave', '0944444'),
 (NULL, 'egg', '0955555');
-- 更新資料
 UPDATE `students` SET `name` = 'ttt' WHERE `students`.`id` = 2;
--  刪除資料
DELETE FROM students WHERE `students`.`id` = 2;
-- 刪除資料表
DROP TABLE `students`