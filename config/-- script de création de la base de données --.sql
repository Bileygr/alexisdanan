-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 17, 2020 at 04:55 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alexisdanan`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numeroderue` int(11) DEFAULT NULL,
  `rue` varchar(250) DEFAULT NULL,
  `codepostal` int(11) DEFAULT NULL,
  `ville` varchar(150) DEFAULT NULL,
  `telephonemobile` varchar(15) DEFAULT NULL,
  `telephonefixe` varchar(15) DEFAULT NULL,
  `fax` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `siteweb` varchar(50) DEFAULT NULL,
  UNIQUE KEY `contact` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `numeroderue`, `rue`, `codepostal`, `ville`, `telephonemobile`, `telephonefixe`, `fax`, `email`, `siteweb`) VALUES
(1, 222, 'rue La Fayette', 75010, 'Paris', '07 81 63 94 38', '01 42 05 04 90', '09 70 61 13 03', 'federation@pourlaprotectiondelenfance.com', 'pourlaprotectiondelenfance.com');

-- --------------------------------------------------------

--
-- Table structure for table `nouvelle`
--

DROP TABLE IF EXISTS `nouvelle`;
CREATE TABLE IF NOT EXISTS `nouvelle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `auteur` int(11) NOT NULL,
  `titre` text NOT NULL,
  `contenu` text NOT NULL,
  `media` varchar(150) NOT NULL,
  `datedepublication` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nouvelle`
--

INSERT INTO `nouvelle` (`id`, `auteur`, `titre`, `contenu`, `media`, `datedepublication`) VALUES
(1, 1, 'Bienvenue au comité de Paris!', '<p>&laquo;&nbsp;Vous dites&nbsp;:<br />\r\n&mdash;&nbsp;C&rsquo;est &eacute;puisant de s&#39;occuper des enfants.</p>\r\n\r\n<p>Vous avez raison.</p>\r\n\r\n<p>Vous ajoutez&nbsp;:<br />\r\n&mdash;&nbsp;Parce que nous devons nous mettre &agrave; leur niveau. Nous baisser, nous pencher, nous courber, nous rapetisser.</p>\r\n\r\n<p>L&agrave;, vous vous trompez. Ce n&#39;est pas tant cela qui fatigue le plus, que le fait d&#39;&ecirc;tre oblig&eacute; de nous &eacute;lever jusqu&#39;&agrave; la hauteur de leurs sentiments.</p>\r\n\r\n<p>De nous &eacute;lever, nous &eacute;tirer, nous mettre sur la pointe des pieds, nous tendre.</p>\r\n\r\n<p>Pour ne pas les blesser.&nbsp;&raquo;</p>\r\n\r\n<p>Janusz KORCZAK,&nbsp;<strong><em><a href=\"https://web.archive.org/web/20090124171404/http://korczak.fr/m1korczak/bibdejk/biblio-fr-korczak_2.html#bibqjrp\">Quand je redeviendrai petit(archiv.org)</a></em></strong>&nbsp;(prologue),<br />\r\n&copy;&nbsp;&nbsp;<a href=\"http://korczak.fr/\" target=\"_blank\">Tir&eacute; du site de l&#39;AFJK</a></p>\r\n', 'assets/site/img/cocktail_vision.gif', '2020-01-17 06:10:54');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `motdepasse` varchar(64) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `datedecreation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `motdepasse`, `email`, `telephone`, `datedecreation`) VALUES
(1, 'Danan', 'Alexis', '$2y$10$mJtY8Y2F9aXqMDqv4uEDT.gg8bb5ZreGH3TuoZxqMIFoDDw.H/58C', 'federation@pourlaprotectiondelenfance.com', '07 81 63 94 38', '2020-01-16 13:48:32');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
