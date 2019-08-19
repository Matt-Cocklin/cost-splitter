/*
--------------------------------------------------------------------
|  run these queries in phpMyAdmin when first installing the site  |
|  they create the tables used by the site                         |
--------------------------------------------------------------------
*/

CREATE TABLE `users`
(
  `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `username` varchar (100) NOT NULL,
  `password` varchar (100) NOT NULL,
  `deleted` INT DEFAULT 0
);

CREATE TABLE `items`
(
  `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `user id` int NOT NULL SECONDARY KEY,
  `name` varchar (50) NOT NULL,
  `category` varchar (50) NOT NULL,
  `amount` varchar (50) NOT NULL,
  `price` varchar (10) NOT NULL,
  `deleted` INT DEFAULT 0
);