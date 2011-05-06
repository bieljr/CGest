# SQL Manager 2010 for MySQL 4.5.0.9
# ---------------------------------------
# Host     : localhost
# Port     : 3306
# Database : cgest_db


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES latin1 */;

SET FOREIGN_KEY_CHECKS=0;

DROP DATABASE IF EXISTS `cgest_db`;

CREATE DATABASE `cgest_db`
    CHARACTER SET 'utf8'
    COLLATE 'utf8_general_ci';

USE `cgest_db`;

#
# Structure for the `accounts` table : 
#

DROP TABLE IF EXISTS `accounts`;

CREATE TABLE `accounts` (
  `account_id` int(11) NOT NULL AUTO_INCREMENT,
  `bank_id` int(11) NOT NULL,
  `account_name` varchar(256) NOT NULL,
  `account_description` varchar(512) DEFAULT NULL,
  `account_balance` decimal(11,2) DEFAULT NULL,
  `account_active` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`account_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Structure for the `banks` table : 
#

DROP TABLE IF EXISTS `banks`;

CREATE TABLE `banks` (
  `bank_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`bank_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Structure for the `buildings` table : 
#

DROP TABLE IF EXISTS `buildings`;

CREATE TABLE `buildings` (
  `building_id` int(11) NOT NULL AUTO_INCREMENT,
  `building_address` varchar(128) NOT NULL,
  `building_NIF` int(11) NOT NULL,
  PRIMARY KEY (`building_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Structure for the `documents` table : 
#

DROP TABLE IF EXISTS `documents`;

CREATE TABLE `documents` (
  `document_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`document_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Structure for the `fractions` table : 
#

DROP TABLE IF EXISTS `fractions`;

CREATE TABLE `fractions` (
  `fraction_id` int(11) NOT NULL AUTO_INCREMENT,
  `building_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `fraction_name` varchar(2) NOT NULL,
  `fraction_permil` int(11) NOT NULL,
  `fraction_owner` varchar(128) NOT NULL,
  `fraction_owner_address_street` varchar(20) NOT NULL,
  `fraction_owner_address_number` int(11) NOT NULL,
  `fraction_owner_postal_code` varchar(8) NOT NULL,
  `fraction_owner_address_city` varchar(20) NOT NULL,
  PRIMARY KEY (`fraction_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Structure for the `profiles` table : 
#

DROP TABLE IF EXISTS `profiles`;

CREATE TABLE `profiles` (
  `profile_id` int(11) NOT NULL AUTO_INCREMENT,
  `profile_name` varchar(50) NOT NULL,
  `profile_description` varchar(128) DEFAULT NULL,
  `edit_accounts` tinyint(1) NOT NULL DEFAULT '0',
  `create_accounts` tinyint(1) NOT NULL DEFAULT '0',
  `delete_accounts` tinyint(1) NOT NULL DEFAULT '0',
  `view_accounts` tinyint(1) NOT NULL DEFAULT '0',
  `edit_banks` tinyint(1) NOT NULL DEFAULT '0',
  `create_banks` tinyint(1) NOT NULL DEFAULT '0',
  `delete_banks` tinyint(1) NOT NULL DEFAULT '0',
  `view_banks` tinyint(1) NOT NULL DEFAULT '0',
  `edit_transactions` tinyint(1) NOT NULL DEFAULT '0',
  `create_transactions` tinyint(1) NOT NULL DEFAULT '0',
  `delete_transactions` tinyint(1) NOT NULL DEFAULT '0',
  `view_transactions` tinyint(1) NOT NULL DEFAULT '0',
  `edit_profiles` tinyint(1) NOT NULL DEFAULT '0',
  `create_profiles` tinyint(1) NOT NULL DEFAULT '0',
  `delete_profiles` tinyint(1) NOT NULL DEFAULT '0',
  `view_profiles` tinyint(1) NOT NULL DEFAULT '0',
  `edit_users` tinyint(1) NOT NULL DEFAULT '0',
  `create_users` tinyint(1) NOT NULL DEFAULT '0',
  `delete_users` tinyint(1) NOT NULL DEFAULT '0',
  `view_users` tinyint(1) NOT NULL DEFAULT '0',
  `edit_vendors` tinyint(1) NOT NULL DEFAULT '0',
  `create_vendors` tinyint(1) NOT NULL DEFAULT '0',
  `delete_vendors` tinyint(1) NOT NULL DEFAULT '0',
  `view_vendors` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`profile_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Structure for the `sessions` table : 
#

DROP TABLE IF EXISTS `sessions`;

CREATE TABLE `sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(50) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Structure for the `transaction_types` table : 
#

DROP TABLE IF EXISTS `transaction_types`;

CREATE TABLE `transaction_types` (
  `transaction_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `transaction_type_name` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`transaction_type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

#
# Data for the `transaction_types` table  (LIMIT 0,500)
#

INSERT INTO `transaction_types` (`transaction_type_id`, `transaction_type_name`) VALUES 
  (1,'Transferência Bancária'),
  (2,'Cheque Bancário'),
  (3,'Dinheiro');
COMMIT;

#
# Structure for the `transactions` table : 
#

DROP TABLE IF EXISTS `transactions`;

CREATE TABLE `transactions` (
  `transaction_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`transaction_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Structure for the `users` table : 
#

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Structure for the `vendors` table : 
#

DROP TABLE IF EXISTS `vendors`;

CREATE TABLE `vendors` (
  `vendor_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`vendor_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;