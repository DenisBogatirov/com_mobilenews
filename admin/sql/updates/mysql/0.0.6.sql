DROP TABLE IF EXISTS `#__mobilenews`;

CREATE TABLE `#__mobilenews` (
	`id`       INT(100)     NOT NULL AUTO_INCREMENT,
	`title` VARCHAR(100) NOT NULL,
	`text` VARCHAR(500) NOT NULL,
  `date` DATETIME NOT NULL,
  `img` VARCHAR(100) NOT NULL,
	PRIMARY KEY (`id`)
)
	ENGINE =MyISAM
	AUTO_INCREMENT =0
	DEFAULT CHARSET =utf8;

INSERT INTO `#__mobilenews` (`title`,`text`,`date`,`img`) VALUES
('Good news','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce convallis.', NOW(),'http://localhost/images/mobile_news/KVN.jpg'),
('Good bye World!', 'Nunc at urna imperdiet, ultrices mauris vel, varius nunc. Etiam.', NOW(),'http://localhost/images/mobile_news/KVN.jpg'),
('Some good news!', 'Mauris rutrum sit amet odio quis pharetra. Praesent cursus arcu.', NOW(),'http://localhost/images/mobile_news/KVN.jpg');
