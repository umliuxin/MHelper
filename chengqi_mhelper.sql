-- phpMyAdmin SQL Dump
-- version 3.5.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 10, 2013 at 11:44 PM
-- Server version: 5.0.95-community
-- PHP Version: 5.3.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `chengqi_mhelper`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `cid` smallint(6) NOT NULL auto_increment,
  `tid` smallint(6) NOT NULL,
  `date` datetime NOT NULL,
  `content` varchar(200) NOT NULL,
  `uid` varchar(25) default NULL,
  `isPrivate` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE IF NOT EXISTS `task` (
  `tid` smallint(6) NOT NULL auto_increment,
  `create_time` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `title` varchar(200) character set utf8 collate utf8_unicode_ci NOT NULL,
  `task_category` smallint(6) NOT NULL COMMENT '0:programming,1:engineering,2:design,3:science,4:language,5:sport,6:music,7:others',
  `skill_tags` varchar(80) character set utf8 collate utf8_unicode_ci NOT NULL default '&$&' COMMENT 'separate by &$&',
  `task_description` varchar(1000) character set utf8 collate utf8_unicode_ci default '',
  `task_location` smallint(6) NOT NULL COMMENT '0:Central,1:North,2:South,3:off',
  `attend_num` smallint(6) NOT NULL default '1',
  `start_date` date NOT NULL,
  `end_data` date NOT NULL,
  `reward` varchar(200) character set utf8 collate utf8_unicode_ci NOT NULL,
  `uid` varchar(25) NOT NULL default '',
  `status` smallint(6) NOT NULL COMMENT '0:open,1:in progress,2: success,3:failed',
  `applied` varchar(500) character set utf8 collate utf8_unicode_ci NOT NULL default '&$&' COMMENT 'separate by &$&',
  `appliednum` smallint(6) NOT NULL default '0',
  `likenum` smallint(6) NOT NULL default '0',
  `like` varchar(500) NOT NULL default '&$&',
  `commentnum` smallint(6) NOT NULL default '0',
  `moderator` varchar(100) NOT NULL default '&$&',
  PRIMARY KEY  (`tid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`tid`, `create_time`, `title`, `task_category`, `skill_tags`, `task_description`, `task_location`, `attend_num`, `start_date`, `end_data`, `reward`, `uid`, `status`, `applied`, `appliednum`, `likenum`, `like`, `commentnum`, `moderator`) VALUES
(22, '2013-12-01 17:00:00', 'Learning PHP', 0, '&$&php', 'I''d like to learn PHP during this winter, preparing for a class in the next semester. Now I''m looking for someone to help me learning PHP. I have some basic understanding on HTML, CSS and Javascript, but have little practical experience on web dev. I think I may need about 3 tutorials (45 min for each), and hope to be able to build a basic page on my own at the end.', 1, 0, '2013-12-07', '2013-12-21', 'a free meal or coffee for each tutorial', '118068278811112081073', 0, '&$&', 2, 15, '&$&', 3, '&$&'),
(23, '2013-12-03 00:31:55', 'Help needed on a math problem', 3, '&$&math', 'I''m taking mathematics course and have trouble with a calculus problem from the textbook. Could anyone help me with it? I''m in Duder now.', 1, 1, '2013-12-09', '2013-12-20', 'homemake cookies provided', '115961391373383503520', 3, '&$&', 5, 8, '&$&', 5, '&$&'),
(24, '2013-12-04 18:07:38', 'Developing an Online Portfolio', 0, '&$&web development&$& html/css&$& javascript&$&html&$&css&$&javascript&$&Web Des', 'Iâ€™m looking for someone to help me build my portfolio website to show my works on the Internet. Currently, I have mockups for the website, but I know little about web development, so I need some help to implement it. After I get connected to my helper, I will provide my mockups and discuss on some expected effects in the website. I will also provide all text and image content for the website.\n\nMy design consists of:\n(1) a main page showing all my works cards, like Pinterest; \n(2) a detail page for each of my works; and \n(3) an About Me page introducing me. I would like to involve some animations for some interactions. If you have any question, please send me private messages.', 2, 0, '2013-12-05', '2013-12-20', 'a concert ticket', '108320673656186403842', 0, '&$&', 1, 1, '&$&', 2, '&$&'),
(25, '2013-12-11 03:35:20', 'Help needed on laser cutting!', 1, '&$&Laser cutting', 'Iâ€™m implementing a game involving physical interaction on a turntable. With no experience of engineering or handcrafting, I have no idea how to make it but I heard that laser cutting can be a good way, so Iâ€™m hoping someone can help with it.\r\n\r\nWhat I need is an 18â€™â€™ round board of any solid material, maybe plywood or plastics. It should be horizontally rotatable around a shaft at the center smoothly and steadily. In the game, the player will be turning the board to control, so the edge may need to be milled smoother. A platform is needed as the base for the shaft. There should be free space at least 1.8â€™â€™ in height between the rotatable board and the platform for placing sensors later.', 1, 1, '2013-12-10', '2013-12-18', 'a free dinner!', '117742899747174036232', 0, '&$&', 3, 12, '&$&', 4, '&$&'),
(27, '2013-12-11 03:38:17', 'Practice Chinese', 4, '&$&Chinese speaking', 'Iâ€™m learning Chinese and Iâ€™d like to practice speaking after the end of this semester. Native speakers would be preferred, although peer learners are very welcome. Iâ€™ll be in Ann Arbor for the winter vacation if youâ€™d like to meet, while Skype will also work for me. We can arrange time and location for meeting after connected. Let me know by MHelper message if you have any question.', 3, 2, '2013-12-15', '2014-01-07', 'If youâ€™re a peer learner, we can learn Chinese together; if youâ€™re a native speaker, Iâ€™d like to provide a free coffee for each practice.', '115961391373383503520', 0, '&$&', 4, 8, '&$&', 6, '&$&'),
(28, '2013-12-11 03:50:56', 'SI689 Paper Editing', 4, '&$&language&$&Writing', 'Our group just finish the first draft of our final paper. We need someone help us improve our writing. We also hope someone can discuss the project with us and find the logic and structure problem.', 3, 2, '2013-12-10', '2013-12-12', 'Chinese Buffet', '115961391373383503520', 0, '&$&', 2, 22, '&$&', 2, '&$&');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` varchar(25) NOT NULL default '',
  `uname` varchar(30) default NULL,
  `avatar` text,
  `bio` text NOT NULL,
  PRIMARY KEY  (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uname`, `avatar`, `bio`) VALUES
('108320673656186403842', 'Chengchang Qian', 'https://lh5.googleusercontent.com/-314OBVRE8HY/AAAAAAAAAAI/AAAAAAAAAes/PHgkO58E7tw/photo.jpg?sz=50', 'The fragrance always stays in the hand that gives'),
('115961391373383503520', 'Xin Liu', 'https://lh6.googleusercontent.com/-bEqsHPQDFR4/AAAAAAAAAAI/AAAAAAAAAAA/s19KzuRUC7Q/photo.jpg?sz=50', 'The fragrance always stays in the hand that gives'),
('117742899747174036232', 'Xinying Li', 'https://lh3.googleusercontent.com/-DkYAtxyrKpk/AAAAAAAAAAI/AAAAAAAAEwY/l0LLXTHu5Zo/photo.jpg?sz=50', 'The fragrance always stays in the hand that gives'),
('118068278811112081073', 'Chengqi Zhu', 'https://lh4.googleusercontent.com/-xBewsUDC-2M/AAAAAAAAAAI/AAAAAAAAAl4/BLxflP6_xso/photo.jpg?sz=50', 'The fragrance always stays in the hand that gives');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
