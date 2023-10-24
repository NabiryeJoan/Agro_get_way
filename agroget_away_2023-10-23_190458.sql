/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET SQL_NOTES=0 */;
DROP TABLE IF EXISTS farmer;
CREATE TABLE `farmer` (
  `farm_id` int(11) NOT NULL AUTO_INCREMENT,
  `farm_name` varchar(255) NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `crop_type` varchar(255) DEFAULT NULL,
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`farm_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

DROP TABLE IF EXISTS interactions;
CREATE TABLE `interactions` (
  `interaction_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `farm_id` int(11) DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL,
  `interaction_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `comments` text DEFAULT NULL,
  PRIMARY KEY (`interaction_id`),
  KEY `user_id` (`user_id`),
  KEY `farm_id` (`farm_id`),
  CONSTRAINT `interactions_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  CONSTRAINT `interactions_ibfk_2` FOREIGN KEY (`farm_id`) REFERENCES `farmer` (`farm_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

DROP TABLE IF EXISTS users;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `contact_info` varchar(255) DEFAULT NULL,
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

