CREATE TABLE `php-sample`.`products` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(45) NOT NULL,
  `image` VARCHAR(45) NOT NULL,
  `price` INT NOT NULL,
  `description` VARCHAR(45) NOT NULL,
  `created_at` DATETIME NOT NULL,
  `updated_at` DATETIME NOT NULL,
  PRIMARY KEY (`id`));
