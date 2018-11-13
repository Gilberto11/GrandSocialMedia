CREATE DATABASE transtest;

USE transtest;

CREATE TABLE concurrency_test (cid INTEGER, cdesc VARCHAR (50)) ENGINE =INNODB;

INSERT INTO concurrency_test VALUES (1, "First Record");

INSERT INTO concurrency_test VALUES (2, "Second Record");

SELECT * FROM concurrency_test;

START TRANSACTION;

INSERT INTO concurrency_test VALUES (3, "Third Record");

INSERT INTO concurrency_test VALUES (4, "Fourth record");

SELECT * FROM concurrency_test;

INSERT INTO concurrency_test VALUES (5, "Fifth Record");

SELECT * FROM concurrency_test;

ROLLBACK;

SELECT * FROM concurrency_test;