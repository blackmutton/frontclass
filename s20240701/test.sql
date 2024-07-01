create table `test`.`store`(
    `id` int(10) not null auto_increment COMMENT 'id',
    `name` varchar(100) not null COMMENT '店家名字',
    `mobile` varchar(100) not null COMMENT '電話',
    `price` int(10) not null COMMENT'資本額',
    PRIMARY KEY (`id`)
)ENGINE=InnoDB;

INSERT INTO 
    `stores`(`id`,`name`,`mobile`,`price`)
VALUES
    (NULL,'台北店','0911-111-111',10000),
    (NULL,'台中店','0922-222-222',50000),
    (NULL,'高雄店','0933-333-333',100000);