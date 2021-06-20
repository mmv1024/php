CREATE database Comments;
use Comments;
CREATE table Comments( Number int NOT NULL AUTO_INCREMENT, Name varchar(50), Time datetime, Text varchar(1000), PRIMARY KEY (Number) );
