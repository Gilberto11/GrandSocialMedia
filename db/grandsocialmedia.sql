CREATE DATABASE grandsocialmedia;

USE grandsocialmedia;

CREATE TABLE `grandsocialmedia`.`users` ( 
`id` INT NOT NULL AUTO_INCREMENT , 
`first_name` VARCHAR(25) NOT NULL , 
`last_name` VARCHAR(25) NOT NULL , 
`username` VARCHAR(100) NOT NULL , 
`email` VARCHAR(100) NOT NULL , 
`password` VARCHAR(255) NOT NULL , 
`signup_date` DATE NOT NULL , 
`profile_pic` VARCHAR(255) NOT NULL , 
`num_posts` INT NOT NULL , 
`num_likes` INT NOT NULL , 
`user_closed` VARCHAR(3) NOT NULL , 
`friend_array` TEXT NOT NULL , 
PRIMARY KEY (`id`)
) ENGINE = INNODB;


CREATE TABLE `grandsocialmedia`.`posts` ( 
`id` INT NOT NULL AUTO_INCREMENT , 
`body` TEXT, 
`added_by` VARCHAR(60) NOT NULL , 
`user_to` VARCHAR(60) NOT NULL , 
`date_added` DATETIME NOT NULL , 
`user_closed` VARCHAR(3) NOT NULL , 
`deleted` VARCHAR(3) NOT NULL , 
`likes` INT NOT NULL ,  
PRIMARY KEY (`id`)
) ENGINE = INNODB;

CREATE TABLE `grandsocialmedia`.`post_comments` ( 
`id` INT NOT NULL AUTO_INCREMENT , 
`post_body` TEXT, 
`posted_by` VARCHAR(60) NOT NULL , 
`posted_to` VARCHAR(60) NOT NULL , 
`date_added` DATETIME NOT NULL ,  
`removed` VARCHAR(3) NOT NULL , 
`post_id` INT NOT NULL ,  
PRIMARY KEY (`id`)
) ENGINE = INNODB;

CREATE TABLE `grandsocialmedia`.`likes` ( 
`id` INT NOT NULL AUTO_INCREMENT , 
`username` VARCHAR(60) NOT NULL ,
`post_id` INT NOT NULL , 
PRIMARY KEY (`id`)
) ENGINE = INNODB;

CREATE TABLE `grandsocialmedia`.`friend_requests` ( 
`id` INT NOT NULL AUTO_INCREMENT , 
`user_to` VARCHAR(50) NOT NULL , 
`user_from` VARCHAR(50) NOT NULL ,
 PRIMARY KEY ('id')
 )ENGINE = INNODB;

SELECT * FROM users;
