-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `websitenet`
--

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `body` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `title`, `body`) VALUES
(1, 'Loreng mesum kolor si mamet', '<p align="justify"><img src="uploads/mesh.jpg" style="float:left;padding:5px;" />The turtle is slowly and is happy with his face of life. The flamingo walks with elegant grace, she knows she is one of the kind. If you can not stop at least smile as you go by. If you can not stop at least smile as you go by. Sometime you just gotta know how it feel. The happy crab dance on the beach to a callypso beat. The happy mullet jumps for the pure joy of being alive. If you can not stop at least smile as you go by. If you can not stop at least smile as you go by. Sometime you just gotta know how it feel. The gator grined as he dreamed of his next meal. Every good fisherman has a pelican watching over him. If you can not stop at least smile as you go by. If you can not stop at least smile as you go by. Sometime you just gotta know how it feel.<a href="guestbook.php">Want to sign guestbook? Click here!</a></p>');

-- --------------------------------------------------------

--
-- Table structure for table `guestbook`
--

CREATE TABLE IF NOT EXISTS `guestbook` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(65) NOT NULL DEFAULT '',
  `email` varchar(65) NOT NULL DEFAULT '',
  `comment` longtext NOT NULL,
  `datetime` varchar(65) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `guestbook`
--

INSERT INTO `guestbook` (`id`, `name`, `email`, `comment`, `datetime`) VALUES
(1, 'inan', 'adeismail@tibandung.com', 'hi!', '10-Nov-2010 20:23:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', 'B591F506449A76D8DB9F25E681AFA011', 'Administrator'),
(2, 'webmaster', 'CDA2C99FBF5E19F20D331299C15A4491', 'Non-Administrator');

