# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.29)
# Database: MHelper
# Generation Time: 2013-12-11 03:00:05 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table comment
# ------------------------------------------------------------

DROP TABLE IF EXISTS `comment`;

CREATE TABLE `comment` (
  `cid` smallint(6) NOT NULL AUTO_INCREMENT,
  `tid` smallint(6) NOT NULL,
  `date` datetime NOT NULL,
  `content` varchar(200) NOT NULL,
  `uid` varchar(25) DEFAULT NULL,
  `isPrivate` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table task
# ------------------------------------------------------------

DROP TABLE IF EXISTS `task`;

CREATE TABLE `task` (
  `tid` smallint(6) NOT NULL AUTO_INCREMENT,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `title` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `task_category` smallint(6) NOT NULL COMMENT '0:programming,1:engineering,2:design,3:science,4:language,5:sport,6:music,7:others',
  `skill_tags` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '&$&' COMMENT 'separate by &$&',
  `task_description` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT '',
  `task_location` smallint(6) NOT NULL COMMENT '0:Central,1:North,2:South,3:off',
  `attend_num` smallint(6) NOT NULL DEFAULT '1',
  `start_date` date NOT NULL,
  `end_data` date NOT NULL,
  `reward` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `uid` varchar(25) NOT NULL DEFAULT '',
  `status` smallint(6) NOT NULL COMMENT '0:open,1:in progress,2: success,3:failed',
  `applied` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '&$&' COMMENT 'separate by &$&',
  `appliednum` smallint(6) NOT NULL DEFAULT '0',
  `likenum` smallint(6) NOT NULL DEFAULT '0',
  `like` varchar(500) NOT NULL DEFAULT '&$&',
  `commentnum` smallint(6) NOT NULL DEFAULT '0',
  `moderator` varchar(100) NOT NULL DEFAULT '&$&',
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `task` WRITE;
/*!40000 ALTER TABLE `task` DISABLE KEYS */;

INSERT INTO `task` (`tid`, `create_time`, `title`, `task_category`, `skill_tags`, `task_description`, `task_location`, `attend_num`, `start_date`, `end_data`, `reward`, `uid`, `status`, `applied`, `appliednum`, `likenum`, `like`, `commentnum`, `moderator`)
VALUES
	(14,'2013-12-10 15:53:01','1',2,'PHP','abc',1,1,'2013-12-04','2013-12-11','coffee','1',0,'0&$&',0,0,'',0,'&$&'),
	(15,'2013-12-10 15:53:29','abd',2,'PHP','fads',1,2,'2013-12-18','2013-12-09','abc','1',2,'0&$&',0,0,'',0,'&$&115961391373383503520'),
	(16,'2013-12-10 16:09:52','dfas',2,'&$&&$&PS&$&ABC&$&EDF&$&fas','fda',1,0,'2013-12-17','2013-12-27','coffee','1',0,'0&$&',0,0,'',0,'&$&'),
	(17,'2013-12-10 16:10:24','123',0,'','',0,1,'0000-00-00','0000-00-00','','0',3,'115961391373383503520',0,0,'',0,'&$&'),
	(18,'2013-12-10 16:13:04','SI689',4,'&$&Language&$&ABC&$&HAHA','testing',1,3,'2013-12-10','2013-12-12','cup','1',0,'0&$&1&$&',1,0,'',0,'&$&'),
	(19,'2013-12-10 18:56:05','HELP FOR SI689',4,'&$&language&$&Personas','Write Personas and Scenario',1,0,'2013-12-10','2013-12-11','Everything','115961391373383503520',1,'0&$&',0,0,'&$&',0,'&$&'),
	(20,'2013-12-10 18:57:48','Help for SI694',0,'&$&PHp&$&CSS','Coding',1,0,'2013-12-10','2013-12-11','23','115961391373383503520',0,'0&$&',0,0,'&$&',0,'&$&'),
	(21,'2013-12-10 21:58:54','345',0,'&$&','',0,1,'0000-00-00','0000-00-00','','',0,'&$&',0,0,'&$&',0,'&$&');

/*!40000 ALTER TABLE `task` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `uid` varchar(25) NOT NULL DEFAULT '',
  `uname` varchar(30) DEFAULT NULL,
  `avatar` text,
  `bio` text NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;

INSERT INTO `user` (`uid`, `uname`, `avatar`, `bio`)
VALUES
	('115961391373383503520','Xin Liu','https://lh6.googleusercontent.com/-bEqsHPQDFR4/AAAAAAAAAAI/AAAAAAAAAAA/s19KzuRUC7Q/photo.jpg?sz=50','');

/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
