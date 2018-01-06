CREATE TABLE `id3932265_db01`.`subscribers` (
  `userId`      INT(11)      NOT NULL AUTO_INCREMENT,
  `userName`    VARCHAR(255) NOT NULL,
  `profile_img` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`userId`)
)
  ENGINE = InnoDB;

CREATE TABLE `id3932265_db01`.`comments` (
  `comment_id` INT     NOT NULL AUTO_INCREMENT,
  `comment`    TEXT    NOT NULL,
  `userId`     INT(11) NOT NULL,
  PRIMARY KEY (`comment_id`)
)
  ENGINE = InnoDB;