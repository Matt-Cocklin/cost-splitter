/*
--------------------------------------------------------------------
|  run these queries in phpMyAdmin when first installing the site  |
|  they create the tables used by the site                         |
--------------------------------------------------------------------
*/

CREATE TABLE `Purchases`
(
  `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` varchar (50) NOT NULL,
  `category` varchar (50) NOT NULL,
  `price` varchar (10) NOT NULL,
  `purchased_by` varchar (50) NOT NULL,
  `deleted` INT DEFAULT 0
);