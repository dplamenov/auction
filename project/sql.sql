CREATE TABLE IF NOT EXISTS `users`
(
  `user_id`  INT         NOT NULL AUTO_INCREMENT,
  `email`    VARCHAR(80) NOT NULL,
  `password` VARCHAR(80) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `products`
(
  `product_id`    INT         NOT NULL AUTO_INCREMENT,
  `user_id`       INT         NOT NULL,
  `product_title` VARCHAR(50) NOT NULL,
  `start_price`   INT         NOT NULL,
  `start`         VARCHAR(40) NOT NULL,
  `end`           VARCHAR(40) NOT NULL,
  `description`   TEXT        NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE = InnoDB;