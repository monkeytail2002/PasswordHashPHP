DROP TABLE userTable;

CREATE TABLE userTable(UserId int(3) AUTO_INCREMENT, Email varchar(40), 
	UserPassword varchar(30), PRIMARY KEY(UserId));

INSERT INTO userTable(Email,UserPassword) VALUES('s@s.com','password');

SELECT * FROM userTable;

ALTER TABLE userTable ADD userName varchar(20);

UPDATE userTable SET userName = "John Smith" WHERE Email = "s@s.com";

ALTER TABLE `userTable` CHANGE COLUMN `userName` UserName varchar(30);
