CREATE TABLE customer (
    ID int NOT NULL AUTO_INCREMENT,
    firstname varchar(255),
    lastname varchar(255),
    PRIMARY KEY(ID)
);

CREATE TABLE processor (
    ID int NOT NULL AUTO_INCREMENT,
    name varchar(255),
    PRIMARY KEY(ID)
);

CREATE TABLE manufacturer (
    ID int NOT NULL AUTO_INCREMENT,
    name varchar(255),
    PRIMARY KEY(ID)
);

CREATE TABLE extragpu (
    ID int NOT NULL AUTO_INCREMENT,
    price float,
    PRIMARY KEY(ID)
);

CREATE TABLE extrassd (
    ID int NOT NULL AUTO_INCREMENT,
    price float,
    storage int,
    PRIMARY KEY(ID)
);

CREATE TABLE computer (
    ID int NOT NULL AUTO_INCREMENT,
    name varchar(255),
    base_price float,
    ram varchar(255),
    storage int,
    ID_processor int,
    ID_manufacturer int,
    PRIMARY KEY(ID),
    FOREIGN KEY (ID_processor) REFERENCES processor (ID),
    FOREIGN KEY (ID_manufacturer) REFERENCES manufacturer (ID)
);

CREATE TABLE orders (
    ID int NOT NULL AUTO_INCREMENT,
    ID_customer int,
    ID_computer int,
    ID_extragpu int,
    ID_extrassd int,
    PRIMARY KEY(ID),
    FOREIGN KEY (ID_customer) REFERENCES customer (ID),
    FOREIGN KEY (ID_computer) REFERENCES computer (ID),
    FOREIGN KEY (ID_extragpu) REFERENCES extragpu (ID),
    FOREIGN KEY (ID_extrassd) REFERENCES extrassd (ID)
);

CREATE TABLE user (
    ID int NOT NULL AUTO_INCREMENT,
    username varchar(255),
    password varchar(255),
    is_admin boolean,
    PRIMARY KEY(ID)
)

INSERT INTO `customer`(`firstname`, `lastname`) VALUES ('Augustine','Mitter');
INSERT INTO `customer`(`firstname`, `lastname`) VALUES ('Constantin','Prohaska');
INSERT INTO `customer`(`firstname`, `lastname`) VALUES ('Rosalinde','Pavlovic');
INSERT INTO `customer`(`firstname`, `lastname`) VALUES ('Barbara','Walter');
INSERT INTO `customer`(`firstname`, `lastname`) VALUES ('Kristina','Kaltenbrunner');

INSERT INTO `processor`(`name`) VALUES ('i3');
INSERT INTO `processor`(`name`) VALUES ('i5');
INSERT INTO `processor`(`name`) VALUES ('i7');

INSERT INTO `manufacturer`(`name`) VALUES ('Asus');
INSERT INTO `manufacturer`(`name`) VALUES ('Dell');
INSERT INTO `manufacturer`(`name`) VALUES ('Lenovo');
INSERT INTO `manufacturer`(`name`) VALUES ('Acer');

INSERT INTO `extragpu`(`price`) VALUES (0);
INSERT INTO `extragpu`(`price`) VALUES (89);

INSERT INTO `extrassd`(`price`,`storage`) VALUES (0, 0);
INSERT INTO `extrassd`(`price`,`storage`) VALUES (99, 1000);

INSERT INTO `computer`(`name`,`base_price`, `ram`, `storage`, `ID_processor`, `ID_manufacturer`) VALUES ('Home Basis', 499, '8GB', 500, 1, 1);
INSERT INTO `computer`(`name`,`base_price`, `ram`, `storage`, `ID_processor`, `ID_manufacturer`) VALUES ('Home Basis', 499, '8GB', 500, 1, 2);
INSERT INTO `computer`(`name`,`base_price`, `ram`, `storage`, `ID_processor`, `ID_manufacturer`) VALUES ('Home Basis', 499, '8GB', 500, 1, 3);
INSERT INTO `computer`(`name`,`base_price`, `ram`, `storage`, `ID_processor`, `ID_manufacturer`) VALUES ('Home Basis', 499, '8GB', 500, 1, 4);

INSERT INTO `computer`(`name`,`base_price`, `ram`, `storage`, `ID_processor`, `ID_manufacturer`) VALUES ('Home Pro', 599, '8GB', 500, 2, 1);
INSERT INTO `computer`(`name`,`base_price`, `ram`, `storage`, `ID_processor`, `ID_manufacturer`) VALUES ('Home Pro', 599, '8GB', 500, 2, 2);
INSERT INTO `computer`(`name`,`base_price`, `ram`, `storage`, `ID_processor`, `ID_manufacturer`) VALUES ('Home Pro', 599, '8GB', 500, 2, 3);
INSERT INTO `computer`(`name`,`base_price`, `ram`, `storage`, `ID_processor`, `ID_manufacturer`) VALUES ('Home Pro', 599, '8GB', 500, 2, 4);

INSERT INTO `computer`(`name`,`base_price`, `ram`, `storage`, `ID_processor`, `ID_manufacturer`) VALUES ('Home Chef', 799, '16GB', 500, 3, 1);
INSERT INTO `computer`(`name`,`base_price`, `ram`, `storage`, `ID_processor`, `ID_manufacturer`) VALUES ('Home Chef', 799, '16GB', 500, 3, 2);
INSERT INTO `computer`(`name`,`base_price`, `ram`, `storage`, `ID_processor`, `ID_manufacturer`) VALUES ('Home Chef', 799, '16GB', 500, 3, 3);
INSERT INTO `computer`(`name`,`base_price`, `ram`, `storage`, `ID_processor`, `ID_manufacturer`) VALUES ('Home Chef', 799, '16GB', 500, 3, 4);

INSERT INTO `orders`(`ID_customer`,`ID_computer`, `ID_extragpu`, `ID_extrassd`) VALUES (1, 1, 2, 2);
INSERT INTO `orders`(`ID_customer`,`ID_computer`, `ID_extragpu`, `ID_extrassd`) VALUES (1, 9, 1, 1);
INSERT INTO `orders`(`ID_customer`,`ID_computer`, `ID_extragpu`, `ID_extrassd`) VALUES (2, 5, 2, 2);
INSERT INTO `orders`(`ID_customer`,`ID_computer`, `ID_extragpu`, `ID_extrassd`) VALUES (3, 3, 1, 2);
INSERT INTO `orders`(`ID_customer`,`ID_computer`, `ID_extragpu`, `ID_extrassd`) VALUES (4, 7, 1, 1);
INSERT INTO `orders`(`ID_customer`,`ID_computer`, `ID_extragpu`, `ID_extrassd`) VALUES (5, 9, 2, 2);

INSERT INTO `user`(`username`, `password`, `is_admin`) VALUES ('admin','admin', true);
