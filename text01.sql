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

SELECT * FROM `products` WHERE`author` LIKE'陳%';

SELECT * FROM `products` WHERE`author` LIKE'陳%' OR `bookname` LIKE'%計%'

SELECT * FROM `products` WHERE`sid` IN (10,5,26,21,11) 

SELECT * FROM `products` WHERE`sid` IN (10,5,26,21,11) ORDER BY sid DESC

SELECT * FROM `products` WHERE`sid` IN ('10',5,26,21,11) ORDER BY rand() 
-- 只有數值可加可不加單引號

SELECT d.*,p.bookname FROM `order_details` d JOIN `products` p ON d.`product_sid`=p.sid WHERE d.`order_sid`=11

SELECT `category_sid`,COUNT(1) FROM`products`GROUP BY`category_sid`

SELECT p.`category_sid`,COUNT(1),c.name FROM `products` p JOIN `categories` c ON p.category_sid = c.sid GROUP BY p.`category_sid`;

SELECT * FROM `orders` WHERE `order_date`>='2017-04-01'