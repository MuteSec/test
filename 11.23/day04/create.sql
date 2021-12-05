DROP DATABASE IF EXISTS php;
CREATE DATABASE php charset utf8;
use php;

CREATE TABLE t_course(courseid int PRIMARY KEY,coursename VARCHAR(20))charset utf8;

CREATE TABLE t_class(classid int PRIMARY KEY,classname VARCHAR(20))charset utf8;

CREATE TABLE t_user
(
uid int PRIMARY KEY auto_increment,
uname varchar(20) not null UNIQUE,
upass VARCHAR(100),ugender char(10),
ufavs VARCHAR(50),udesc text,
ucourseid int,uclassid int,
FOREIGN KEY (ucourseid) REFERENCES t_course(courseid),
FOREIGN KEY (uclassid) REFERENCES t_class(classid)
)charset utf8 auto_increment=1001;

INSERT INTO t_course VALUES (101,'Java');
INSERT INTO t_course VALUES (102,'Web');
INSERT INTO t_course VALUES (103,'Android');
INSERT INTO t_course VALUES (104,'IOS');

INSERT INTO t_class VALUES (1,'脱产班');
INSERT INTO t_class VALUES (2,'周末班');
INSERT INTO t_class VALUES (3,'晚班');