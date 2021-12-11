# dev-twitter-clone

A Simple twitter clone that can be used as a space for developers working on a particular system/application. It can be used in the form of open conversation that can broadcasted to other developers.

For it to work a MySQL database is needed and the instructions are provided below and also in the mysql_db_instructions.txt file. The passwords in the accounts created are encrypted ussing MD5 with a salt. 


---Create DB and name it twitter_clone---

---Create User Table in twitter_Clone---
CREATE TABLE IF NOT EXISTS `users` (
                                         `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                                         `email` text NOT NULL,
                                         `password` text NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

---Test that it works---
INSERT INTO `users` (`email`,`password`) VALUES ('testuser1@email.com','user1pw');
INSERT INTO `users` (`email`,`password`) VALUES ('testuser1@email.com','user2pw');
SELECT * FROM users;
SELECT * FROM `users` WHERE `email` = 'testuser1@email.com' LIMIT 1;

---Create Tweets Table in twitter_clone---
CREATE TABLE IF NOT EXISTS `tweets` (
                                        `id` INT NOT NULL AUTO_INCREMENT ,
                                        `tweet` TEXT NOT NULL ,
                                        `user_id` INT NOT NULL ,
                                        `datetime` DATETIME NOT NULL ,
                                        PRIMARY KEY (`id`)
) ENGINE = InnoDB;

---Test that it works---
INSERT INTO `tweets` (`tweet`,`user_id`,`datetime`) VALUES ('My first tweet',1,CONVERT_TZ(NOW(), '+00:00', '+05:00'));
SELECT * FROM tweets;

---Create Follows Table in twitter_clone---
CREATE TABLE IF NOT EXISTS follows` (
                                        `id` INT NOT NULL AUTO_INCREMENT ,
                                        `following` INT NOT NULL ,
                                        `follower` INT NOT NULL ,
                                        PRIMARY KEY (`id`)
) ENGINE = InnoDB;
