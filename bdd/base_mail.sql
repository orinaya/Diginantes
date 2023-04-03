-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 29 mars 2023 à 09:01
-- Version du serveur : 5.7.40
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `diginantes`
--

-- --------------------------------------------------------

--
-- Structure de la table `base_mail`
--

DROP TABLE IF EXISTS `base_mail`;
CREATE TABLE IF NOT EXISTS `base_mail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `tel` int(11) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `base_mail`
--

INSERT INTO `base_mail` (`id`, `prenom`, `nom`, `mail`, `tel`, `message`) VALUES
(1, 'Aimée', 'Hebert', 'aimee@gmail.com', 770354569, 'bonjour'),
(2, 'Oriane', 'Frouin', 'orianefrn@gmail.com', 770354569, 'bonjour'),
(3, 'Valentin', 'Renaud', 'valentin.renaud188@gmail.com', 768598482, 'je m\'appelle Valentin j\'aime bien le surf et la vie c\'est cool waw'),
(4, 'Valentin', 'Renaud', 'valentin.renaud188@gmail.com', 768598482, 'je m\'appelle Valentin j\'aime bien le surf et la vie c\'est cool waw'),
(5, 'Valentin', 'Renaud', 'valentin.renaud188@gmail.com', 768598482, 'je m\'appelle Valentin j\'aime bien le surf et la vie c\'est cool waw'),
(6, 'Valentin', 'Renaud', 'valentin.renaud188@gmail.com', 768598482, 'je m\'appelle Valentin j\'aime bien le surf et la vie c\'est cool waw'),
(7, 'Valentin', 'Renaud', 'valentin.renaud188@gmail.com', 768598482, 'je m\'appelle Valentin j\'aime bien le surf et la vie c\'est cool waw'),
(8, 'Oriane', 'Frouin', 'orianefrn@gmail.com', 770354569, 'j\'aime le rose');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
