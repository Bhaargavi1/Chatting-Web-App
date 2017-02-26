Create Table login
(
person_id  int Primary Key  Auto_increment,
firstname Varchar(50) Null,
lastname Varchar(50) Null,
username Varchar(50) Null Unique,
email Varchar(25) Null,
pass Varchar(25) Null,
);
Create Table chat
(
Id int Auto_increment Not Null primary key,
username varchar(30)  Null,
message varchar(1000) Null
);