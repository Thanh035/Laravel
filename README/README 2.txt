
    - index.php
    - category.php
    - detail.php
    - cart.php
    - checkout.php
    - complete.php
    - contact.php
    - news.php
    - register/login.php


    Database:
    //init database Aptech1Project
 CREATE DATABASE Aptech1Project

    
//CREATE table and add data
CREATE TABLE admin (
	id int PRIMARY KEY AUTO_INCREMENT,
    username varchar(100),
    password varchar(100)
);


 CREATE TABLE category (
	id int PRIMARY KEY AUTO_INCREMENT,
    name varchar(50)
);

CREATE TABLE users (
	id int PRIMARY KEY AUTO_INCREMENT,
    fullname varchar(50),
    email varchar(100),
    password varchar(30),
  	CREATEd_at datetime
);

CREATE TABLE contact (
	id int PRIMARY KEY AUTO_INCREMENT,
    fullname varchar(50),
    email varchar(100),
    phone_number varchar(15),
    content longtext,
    created_at datetime
);

CREATE TABLE product (
	id int PRIMARY KEY AUTO_INCREMENT,
    product_name varchar(100),
    price varchar(50),
    amount int,
    thumbnail varchar(50),
    description text,
    status int,
    category_id int references category(id)
);

CREATE Table infosite( 
    id int PRIMARY KEY AUTO_INCREMENT,
    address varchar(100),
    phone_number varchar(100),
    email varchar(100),
    title varchar(50),
    description text,
    facebook varchar(200),
    instagram varchar(200),
    youtube varchar(200),
    zalo varchar(200),
    logo varchar(100)
);
--------------------------

INSERT INTO product(product_name,price,amount,thumbnail,description,status,category_id)
VALUES
('PRIMITIVE DIRTY P DREAMS COMPLETE 8.0',2000000,100,'primitive-dirty-p-dreams-complete-8-0.png','Thông tin sản phẩm đang được cập nhật',1,1),
('PRIMITIVE NUEVO GENESIS COMPLETE 8.0',2000000,100,'primitive-nuevo-genesis-complete-8-0.png','Thông tin sản phẩm đang được cập nhật',1,1),
('PRIMITIVE X NARUTO RODRIGUEZ COMBAT COMPLETE 7.75',1500000,78,'primitive-x-naruto-rodriguez-combat-complete-7-75.png','Thông tin sản phẩm đang được cập nhật',0,1),
('PRIMITIVE DIRTY P SCORPION COMPLETE 8.0',1800000,90,'primitive-dirty-p-scorpion-complete-8-0.png','Thông tin sản phẩm đang được cập nhật',1,1),
('PRIMITIVE X NARUTO LEMOS SASUKE COMPLETE 8.25',2500000,99,'primitive-x-naruto-lemos-sasuke-complete-8-25.png','Thông tin sản phẩm đang được cập nhật',1,1),
('PRIMITIVE NUEVO FUTURE IN BLUE COMPLETE 8.0',1100000,55,'primitive-neuvo-future-in-blue-complete-8-0.png','Thông tin sản phẩm đang được cập nhật',1,1),
('ZERO GABBERS SIGNATURE SKULL DECK 8.25',1100000,55,'zero-gabbers-signature-skull-deck-8-25.png','Thông tin sản phẩm đang được cập nhật',1,1),
('ZERO SINGLE SKULL COMPLETE 8.0',1800000,90,'zero-single-skull-complete-8-0.jpg','Thông tin sản phẩm đang được cập nhật',1,1),
('ZERO SUMMERS CALL OF THE VOID DECK 8.25
',1800000,90,'zero-summers-call-of-the-void-deck-8-25.jpg','Thông tin sản phẩm đang được cập nhật',1,1);


INSERT INTO product(product_name,price,amount,thumbnail,description,status,category_id)
VALUES
('PRIMITIVE GAMMA STRAPBACK CREAM
',600000,100,'primitive-gamma-strapback-cream.jpg','Thông tin sản phẩm đang được cập nhật',1,2),
('PRIMITIVE DIRTY P HIBISCUS STRAPBACK BLACK',550000,100,'primitive-dirty-p-hibiscus-strapback-black.jpg','Thông tin sản phẩm đang được cập nhật',1,2),
('PRIMITIVE NUEVO MASK BLACK',200000,78,'nuevo-mask-black.jpg','Thông tin sản phẩm đang được cập nhật',1,2),
('GLSY SUNNIES LEONARD SMOKE SUNGLASSES',700000,90,'glsy-sunnies-leonard-smoke-2.jpg','Thông tin sản phẩm đang được cập nhật',1,2);

INSERT INTO product(product_name,price,amount,thumbnail,description,status,category_id)
VALUES
('OJ JUICE BAR RAILS ORANGE (1PCS)
',100000,100,'001105280-1.jpg','Thông tin sản phẩm đang được cập nhật',1,4),
('SILVER HOLLOW KINGPIN /W NUT
',80000,100,'123248-1-sk8dlx-hollow.png','Thông tin sản phẩm đang được cập nhật',1,4),
('DIAMOND HARDWARE RAVEN TERSHY PRO  ALLEN
',160000,100,'photo-09-01-2021-20-03-04.jpg','Thông tin sản phẩm đang được cập nhật',1,4),
('SHORTY S LONGBOARD SET 2 PHILLIPS HARDWARE'
,233000,100,'shorty-s-longboard-hardware-set-2-phb.png','Thông tin sản phẩm đang được cập nhật',1,4);

INSERT INTO admin (username,password) 
VALUES
('admin','admin123');

INSERT INTO infosite (address,phone_number,email,title,description,facebook,instagram,youtube,zalo,logo) 
VALUES('221 Đề Thám, Phường Phạm Ngũ Lão, Quận 1, TP. HCM','036450187328','saigonskateshop@gmail.com','Aptech1Project','Nhờ sự ủng hộ mạnh mẽ từ những người có cùng đam mê khắp nơi trên cả nước, chúng tôi tự hào là một trong những Skateshops chuyên nghiệp nhất Việt Nam ở thời điểm hiện tại.','','','','','logo.png');

INSERT INTO `category` (`name`) VALUES ('Skateboard'), ('Clothing'),('Accessories'),('Hardware');


//Save data user on device
CREATE TABLE cart (
	id int PRIMARY KEY AUTO_INCREMENT,
    product_name varchar(100),
    amount int,
    thumbnail varchar(100),
    price varchar(50),
    user_id int REFERENCES users(id)
)

//Admin page
CREATE TABLE orders(
    id int PRIMARY KEY AUTO_INCREMENT,
    fullname varchar(100),
    email varchar(200),
    phone_number varchar(12),
    address varchar(200),
    note text,
    user_id int REFERENCES users(id),
    orderDetail_id int REFERENCES order_details(id)
)

CREATE TABLE order_details(
    id int PRIMARY KEY AUTO_INCREMENT,
    order_id int REFERENCES orders(id),
    cart_id int REFERENCES cart(id)
)
 
