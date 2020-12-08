INSERT INTO `address_book` 
    (`sid`, `name`, `email`, `mobile`, 
    `birthday`, `address`, `created_at`) 
VALUES (NULL, '小虎斑', 'rtyui@gfdsd.com', '0900222444', '1990-01-01', '台北市龍安街5號', '2020-12-08 10:36:22');
(NULL, '小虎斑02', 'rtyui@gfdsd.com', '0900222444', '1990-01-01', '台北市龍安街5號', '2020-12-08 10:36:22');
(NULL, '小虎斑03', 'rtyui@gfdsd.com', '0900222444', '1990-01-01', '台北市龍安街5號', '2020-12-08 10:36:22');
(NULL, '小虎斑04', 'rtyui@gfdsd.com', '0900222444', '1990-01-01', '台北市龍安街5號', '2020-12-08 10:36:22');
(NULL, '小虎斑05', 'rtyui@gfdsd.com', '0900222444', '1990-01-01', '台北市龍安街5號', '2020-12-08 10:36:22');
(NULL, '小虎斑06', 'rtyui@gfdsd.com', '0900222444', '1990-01-01', '台北市龍安街5號', '2020-12-08 10:36:22');
(NULL, '小虎斑07', 'rtyui@gfdsd.com', '0900222444', '1990-01-01', '台北市龍安街5號', '2020-12-08 10:36:22');
(NULL, '小虎斑08', 'rtyui@gfdsd.com', '0900222444', '1990-01-01', '台北市龍安街5號', '2020-12-08 10:36:22');

DELETE FROM `address_book` WHERE `address_book`.`sid` = 8;

SELECT * FROM `categories` JOIN `products` ON `categories`.`sid`=`products`.`category_sid`

SELECT `products`.*,`categories`.`name` FROM `products` JOIN `categories` ON `products`.`category_sid` = `categories`.`sid`;

SELECT p.*, c.`name` FROM `products` AS p JOIN `categories` AS c ON p.`categories_sid` = c.`sid`;