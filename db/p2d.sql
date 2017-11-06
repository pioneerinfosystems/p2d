-- Adminer 4.2.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `tbl_pth_order`;
CREATE TABLE `tbl_pth_order` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `cust_name` varchar(255) NOT NULL,
  `cust_email` varchar(255) NOT NULL,
  `project_title` varchar(1024) NOT NULL,
  `html_type` smallint(6) unsigned NOT NULL DEFAULT '1' COMMENT '1:Responsive,2:Non-Responsive',
  `no_of_pages` smallint(6) unsigned NOT NULL DEFAULT '1',
  `image_file1` varchar(1024) DEFAULT NULL,
  `image_file2` varchar(1024) DEFAULT NULL,
  `image_url` text,
  `calculated_price` int(11) unsigned NOT NULL,
  `descount_percent_applied` int(11) unsigned NOT NULL,
  `service_id` int(11) unsigned NOT NULL,
  `created_date` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `created_ip` varchar(50) NOT NULL DEFAULT '0.0.0.0',
  `created_agent` varchar(1024) NOT NULL DEFAULT 'NA',
  `active` tinyint(4) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `tbl_pth_services`;
CREATE TABLE `tbl_pth_services` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `service_name` varchar(1024) NOT NULL,
  `payment_type` varchar(1024) NOT NULL DEFAULT '1' COMMENT '1:Full,2:Hourly',
  `created_time` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `active` tinyint(4) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `tbl_pth_services` (`id`, `service_name`, `payment_type`, `created_time`, `active`) VALUES
(1,	'PSD to HTML',	'1',	'2017-11-03 21:32:21',	1),
(2,	'PSD to HTML5',	'1',	'2017-11-03 21:32:33',	1),
(3,	'PSD to WordPress',	'1',	'2017-11-03 21:32:43',	1),
(4,	'PSD to Responsive WordPress',	'1',	'2017-11-03 21:32:53',	1),
(5,	'PSD to Email',	'1',	'2017-11-03 21:33:02',	1),
(6,	'PSD to Responsive Email',	'1',	'2017-11-03 21:33:14',	1),
(7,	'PSD to Responsive HTML',	'1',	'2017-11-04 14:48:25',	1),
(8,	'HTML to Responsive',	'1',	'2017-11-03 21:33:39',	1),
(9,	'HTML to WordPress',	'1',	'2017-11-03 21:33:49',	1),
(10,	'Hire a PHP Programmer',	'2',	'2017-11-04 11:28:43',	1),
(11,	'Custom PHP Development',	'2',	'2017-11-04 11:28:35',	1),
(12,	'Other',	'2',	'2017-11-04 11:28:49',	1);

DROP TABLE IF EXISTS `tbl_pth_service_price`;
CREATE TABLE `tbl_pth_service_price` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `service_id` int(10) unsigned NOT NULL,
  `homepage_price` int(10) unsigned NOT NULL,
  `innerpage_price` int(10) unsigned NOT NULL,
  `turnaround_time` varchar(256) NOT NULL,
  `created_time` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_time` datetime NOT NULL,
  `active` tinyint(3) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `tbl_pth_service_price` (`id`, `service_id`, `homepage_price`, `innerpage_price`, `turnaround_time`, `created_time`, `updated_time`, `active`) VALUES
(1,	1,	39,	29,	'24 Hours',	'2017-11-04 14:51:14',	'2017-11-04 14:44:43',	1),
(2,	2,	45,	35,	'24 Hours',	'2017-11-04 14:57:58',	'2017-11-04 14:44:43',	1),
(3,	3,	89,	45,	'3 to 4 days',	'2017-11-04 14:57:52',	'2017-11-04 14:44:43',	1),
(4,	4,	179,	99,	'4 to 7 days',	'2017-11-04 15:00:08',	'2017-11-04 14:44:43',	1),
(5,	5,	45,	45,	'24 Hours',	'2017-11-04 15:02:53',	'2017-11-04 14:44:43',	1),
(6,	6,	99,	99,	'24 Hours',	'2017-11-04 15:03:01',	'2017-11-04 14:44:43',	1),
(7,	7,	129,	79,	'3 to 4 days',	'2017-11-04 15:05:27',	'2017-11-04 14:44:43',	1),
(8,	8,	59,	45,	'2 to 3 days',	'2017-11-04 15:05:27',	'2017-11-04 14:44:43',	1),
(9,	9,	79,	49,	'2 to 3 days',	'2017-11-04 15:05:27',	'2017-11-04 14:44:43',	1);

-- 2017-11-04 17:28:39