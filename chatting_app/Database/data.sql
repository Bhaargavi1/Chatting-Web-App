Create Database webchat_1;
-- Database created
Create Table webchat_1.login
(
person_id  int Primary Key  Auto_increment,
firstname Varchar(50) Not Null,
lastname Varchar(50) Not Null,
username Varchar(50) Not Null Unique,
email Varchar(30) Not Null,
pass Varchar(30) Not Null
);
-- Table created consisting of all registered users
Create Table webchat_1.chat(
Id int Auto_increment Not Null primary key,
username varchar(30) Not Null,
msg varchar(1000) Not Null,
time timestamp
);