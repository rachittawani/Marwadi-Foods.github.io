create table customer (
email varchar (25) primary key,
fname varchar (25),
address varchar (40),
pwd varchar (25));

create table products(
pid integer primary key,
pname varchar(25),
description varchar(100),
price integer );

create table employee(
eid integer primary key,
ename varchar(25),
phno varchar(10),
salary integer);

create table orders(
oid integer auto_increment,
email varchar(25),
pid integer, 
qtn integer,
amt integer,
odate datetime,
foreign key (pid) references products(pid),
foreign key (email) references customer(email),
primary key (oid,email,odate)
);

create table order1(
oid1 integer auto_increment,
email varchar(25),
pid integer, 
qtn integer,
totalamt integer,
odate datetime,
foreign key (pid) references products(pid),
foreign key (email) references customer(email),
primary key (oid1,email,odate)
);

create table cart(
email varchar(25),
pid integer,
qtn integer,
amnt integer,
foreign key (pid) references products(pid),
foreign key (email) references customer(email));

create table vehicle (
vid integer primary key,
eid integer,
veh_no integer,
foreign key (eid) references employee(eid));

insert into employee values(1001,'SHYAM','7866095443',12000);
insert into employee values(1002,'MOHANLAL','9863011237',14400);
insert into employee values(1003,'KUMAR','7883011637',31000);
insert into employee values(1004,'RAMESH','9988264201',25700);
insert into employee values(1005,'SHAAN','7288264372',19800);

INSERT INTO VEHICLE VALUES(001,1001,2501);
INSERT INTO VEHICLE VALUES(002,1002,4820);
INSERT INTO VEHICLE VALUES(003,1003,1927);
INSERT INTO VEHICLE VALUES(004,1004,6572);
INSERT INTO VEHICLE VALUES(005,1005,7381);

insert into products values(51,'Pizza','Flattened bread dough with toppings',200);
insert into products values(52,'Burger','Sandwich consisting of patties,lettuce and sauces',150);
insert into products values(53,'Paneer Chilli','Cubes of fried paneer tossed in soy and chilli sauce',100);
insert into products values(54,'Dal Baati','Dal-combination of five lentils and Baati-small wheat bread balls',250);
insert into products values(55,'Dosa','Rice pancake made from fermented batter served with sambhar and chutney',250);
insert into products values(56,'Fries','Pieces of potato that have been deep-fried',175);

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `getproduct`(IN `mail` VARCHAR(225), IN `id` INT(11), IN `qtn` INT(11), IN `amt` INT(11))
BEGIN
	INSERT INTO cart VALUES(mail,id,qtn,amt);
END $$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteproduct`(IN `id` INT(11))
BEGIN
	DELETE FROM cart WHERE pid=id;
END $$
DELIMITER ;

CREATE TRIGGER `insertlog` AFTER INSERT ON `cart`
FOR EACH ROW INSERT INTO orders VALUES(null, new.email, new.pid, new.qtn, new.amnt, NOW());

CREATE TRIGGER `deletelog` BEFORE DELETE ON `cart`
FOR EACH ROW DELETE FROM orders
WHERE pid=old.pid;
