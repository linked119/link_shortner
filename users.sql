-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : sql109.byetcluster.com
-- Généré le :  lun. 13 sep. 2021 à 15:43
-- Version du serveur :  5.7.34-37
-- Version de PHP :  7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `epiz_29533581_shortLink`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `fullName`, `email`, `password`, `code`, `status`) VALUES
(1, 'abdel', 'abdelkadert95@gmail.com', '$2y$10$mDrDY7NzS8dzM1hsjgvDzOs.2qajm5BWCvCdOxV11Vx7BQPiGiVCS', '$2y$10$VSMs81SUkO6Ww6ibTipseuD05fXO/j3TT.rgSU0zMdY3X6B/30sXe', 1),
(2, 'Mohammed', 'matrixmeddah2000@gmail.com', '$2y$10$aHRIyqXCLH10uIhRplrsUeLLBE7/U28FO1kuck/QvVUhNqHs.zXCS', '$2y$10$9RcFgqO3bfo3o/wQxo0MR.FrRuDR54f1PLvUPMYU2nFV.P2QyIgOy', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
