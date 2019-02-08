-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  ven. 08 fév. 2019 à 16:49
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `caro_bibliotheque`
--
CREATE DATABASE IF NOT EXISTS `caro_bibliotheque` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `caro_bibliotheque`;

-- --------------------------------------------------------

--
-- Structure de la table `abonne`
--

DROP TABLE IF EXISTS `abonne`;
CREATE TABLE IF NOT EXISTS `abonne` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `abonne`
--

INSERT INTO `abonne` (`id`, `prenom`, `nom`) VALUES
(1, 'Caroline', 'Chapeau'),
(2, 'Eric', 'Valette'),
(3, 'Thomas', 'Hubert'),
(4, 'Haikouhi', '.com'),
(6, 'Farth', 'Elemy');

-- --------------------------------------------------------

--
-- Structure de la table `association_abonne_ouvrage`
--

DROP TABLE IF EXISTS `association_abonne_ouvrage`;
CREATE TABLE IF NOT EXISTS `association_abonne_ouvrage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_abonne` int(11) NOT NULL,
  `id_ouvrage` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `association_abonne_ouvrage`
--

INSERT INTO `association_abonne_ouvrage` (`id`, `id_abonne`, `id_ouvrage`) VALUES
(3, 2, 1),
(2, 1, 1),
(5, 4, 2);

-- --------------------------------------------------------

--
-- Structure de la table `ouvrage`
--

DROP TABLE IF EXISTS `ouvrage`;
CREATE TABLE IF NOT EXISTS `ouvrage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `auteur` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `ouvrage`
--

INSERT INTO `ouvrage` (`id`, `titre`, `auteur`) VALUES
(1, 'Les aventures de Petite Perruche', 'Thomas Sihapanya'),
(2, 'Pocahontasma', 'Hugo Ros');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
