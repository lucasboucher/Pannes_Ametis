-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mer. 30 mars 2022 à 15:17
-- Version du serveur :  10.0.38-MariaDB-0+deb8u1
-- Version de PHP : 7.3.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `isn`
--

-- --------------------------------------------------------

--
-- Structure de la table `ametis`
--

CREATE TABLE `ametis` (
  `id` int(255) NOT NULL,
  `ligne_bus` varchar(30) CHARACTER SET latin1 NOT NULL,
  `arret_bus` varchar(30) CHARACTER SET latin1 NOT NULL,
  `direction_bus` varchar(30) CHARACTER SET latin1 NOT NULL,
  `heure_bus` varchar(30) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ametis`
--

INSERT INTO `ametis` (`id`, `ligne_bus`, `arret_bus`, `direction_bus`, `heure_bus`) VALUES
(1, 'N2', 'Colvert', 'La Paix', '15:46:23'),
(2, 'N2', 'Cirque Jules Verne, Quai A', 'La Paix', '15:56:54'),
(3, 'N3', 'Vogel, Quai C', 'Centre Commercial Sud', '15:56:59'),
(4, 'N3', 'Cirque Jules Verne, Quai D', 'Promenade', '15:57:03'),
(5, 'N3', 'Place du Don', 'Centre Commercial Sud', '15:57:13'),
(6, 'N2', 'Chardin', 'La Paix', '15:59:36'),
(7, 'N2', 'Colvert', 'La Paix', '15:59:51'),
(8, 'N2', 'Cirque Jules Verne, Quai A', 'La Paix', '15:59:56'),
(9, 'N2', 'CHU A. Picardie, Quai C', 'La Paix', '16:00:23'),
(10, 'N3', 'Place du Don', 'Promenade', '16:40:51'),
(11, 'N4', 'Ormaie', 'Longueau SNCF', '16:40:56'),
(12, 'N2', 'Rotonde', 'IUT', '16:47:20'),
(13, 'N1', 'Sully', 'PÃƒÂ´le Jules Verne', '16:56:56'),
(14, 'N3', 'Promenade', 'Promenade', '18:35:45'),
(15, 'N1', 'HÃƒÂ´tel de Ville', 'ÃƒÂ‰touvie', '00:20:50'),
(16, 'N1', 'HÃƒÂ´tel de Ville', 'ÃƒÂ‰touvie', '00:24:33'),
(17, 'N2', 'Quatre ChÃƒÂªnes', 'La Paix', '00:26:44'),
(18, 'N1', 'Jean JaurÃ¨s', 'Ã‰touvie', '00:26:49'),
(19, 'N1', 'Ã‰touvie, Quai A', 'Ã‰touvie', '00:27:44'),
(20, 'N3', 'CollÃ¨ge Saint-Martin', 'Centre Commercial Sud', '00:28:28'),
(21, 'N2', 'IUT', 'La Paix', '00:32:29'),
(22, 'N4', 'Ã‰mile Zola', 'PÃ´le Licorne', '00:32:35'),
(23, 'N4', 'HÃ´tel de Ville', 'PÃ´le Licorne', '00:32:53'),
(24, 'N1', 'Les Coursives', 'Ã‰touvie', '00:55:41'),
(25, 'N1', 'Ã‰touvie, Quai A', 'Ã‰touvie', '01:22:20'),
(26, 'N3', 'Berlioz', 'Promenade', '01:23:32'),
(27, 'N2', 'Chardin', 'La Paix', '05:30:12'),
(28, 'N2', 'Colvert', 'La Paix', '14:01:41'),
(29, 'N2', 'Nicole Fontaine, Quai B', 'La Paix', '14:11:20'),
(30, 'N1', 'Ã‰touvie, Quai A', 'Ã‰touvie', '14:46:14'),
(31, 'N1', 'Ã‰touvie, Quai A', 'Ã‰touvie', '14:47:55'),
(32, 'N1', 'Gare du Nord, Quai B', 'Ã‰touvie', '14:48:42'),
(33, 'N1', 'Maison de la Culture, Quai A', 'Ã‰touvie', '15:04:35'),
(34, 'N1', 'HÃ´tel de Ville', 'Ã‰touvie', '20:59:08'),
(35, 'N1', 'Martinique', 'Ã‰touvie', '01:48:09'),
(36, 'N1', 'Jacobins', 'Ã‰touvie', '12:08:58'),
(37, 'N1', 'Gare du Nord, Quai B', 'Ã‰touvie', '02:59:04'),
(38, 'N1', 'Centre Commercial Glisy', 'PÃ´le Jules Verne', '10:05:02'),
(39, 'N1', 'Martinique', 'Ã‰touvie', '12:48:50'),
(40, 'N4', 'Colbert', 'Longueau SNCF', '12:06:19'),
(41, 'N3', 'Berlioz', 'Centre Commercial Sud', '12:10:10'),
(42, 'N1', 'Place La Barre', 'Ã‰touvie', '19:24:09'),
(43, 'N1', 'Caserne Dejean', 'Ã‰touvie', '11:43:11'),
(44, 'N3', 'CitÃ©-Providence', 'Promenade', '11:45:04'),
(45, 'N4', 'LycÃ©e de Luzarches', 'Longueau SNCF', '21:06:12'),
(46, 'N1', 'CollÃ¨ge Rosa Parks', 'Ã‰touvie', '00:15:41'),
(47, 'N2', 'Chardin', 'La Paix', '00:16:24'),
(48, 'N4', 'Simone Veil, Quai C', 'Longueau SNCF', '00:17:07'),
(49, 'N1', 'Ã‰touvie, Quai A', 'Ã‰touvie', '00:17:43'),
(50, 'N2', 'La Paix', 'La Paix', '00:17:50'),
(51, 'N1', 'Ã‰touvie, Quai A', 'Ã‰touvie', '00:40:03'),
(52, 'N1', 'Ã‰touvie, Quai A', 'Ã‰touvie', '00:40:43'),
(53, 'N4', 'Caserne Dejean', 'Longueau SNCF', '00:45:18'),
(54, 'N3', 'Espagne', 'Promenade', '02:49:16'),
(55, 'N3', 'Charassain', 'Promenade', '20:40:18'),
(56, 'N1', 'Jacobins', 'Ã‰touvie', '07:27:40'),
(57, 'N1', 'Jean JaurÃ¨s', 'Ã‰touvie', '13:18:07'),
(58, 'N1', 'HÃ´tel de Ville', 'Ã‰touvie', '08:54:31'),
(59, 'N2', 'La Paix', 'La Paix', '13:57:53'),
(60, 'N2', 'Otages', 'La Paix', '10:45:26'),
(61, 'N1', 'Saint-Jacques, Quai A', 'Ã‰touvie', '10:51:31'),
(62, 'N2', 'Balzac', 'La Paix', '06:31:10'),
(63, 'N2', 'Stendhal', 'La Paix', '17:52:43'),
(64, 'N2', 'Simone Veil, Quai A', 'La Paix', '15:28:11'),
(65, 'N1', 'Espace Alliance', 'Ã‰touvie', '17:39:32'),
(66, 'N2', 'Quatre ChÃªnes', 'La Paix', '22:20:03'),
(67, 'N3', 'Cirque Jules Verne, Quai D', 'Promenade', '14:56:39');

-- --------------------------------------------------------

--
-- Structure de la table `ip`
--

CREATE TABLE `ip` (
  `AdresseIp` varchar(255) NOT NULL,
  `HeureUnix` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `ametis`
--
ALTER TABLE `ametis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `ametis`
--
ALTER TABLE `ametis`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
