-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 04 Décembre 2017 à 12:06
-- Version du serveur :  5.7.20-0ubuntu0.16.04.1
-- Version de PHP :  7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `immatpro`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `idclient` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `code_postal` int(5) NOT NULL,
  `email` varchar(45) NOT NULL,
  `tel` int(10) NOT NULL,
  `mdp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`idclient`, `nom`, `prenom`, `adresse`, `ville`, `code_postal`, `email`, `tel`, `mdp`) VALUES
(10, 'Aut in quis officiis cumque ut quis aliquip maxime', 'Quis cupiditate excepturi cupiditate maxime tempore', 'Rerum rerum quisquam eius sed laborum Quis quia in fugiat impedit ullam sed maxime qui', 'Excepturi qui qui recusandae Harum atque ratione qui nihil amet omnis omnis aliquid praesentium mollitia et', 35170, 'gevywibija@gmail.com', 299758469, 'marine77'),
(11, 'Nisi doloribus laboriosam non quidem numquam ea dicta', 'Quisquam molestias lorem rerum aspernatur rerum quaerat amet dolores incididunt non non tempore quod', 'Dolor ut veniam magna dolor', 'Nisi incidunt ducimus ut est amet perspiciatis ab aut voluptatibus unde saepe soluta perferendis veniam ea', 35800, 'gycamepy@hotmail.com', 299587496, 'froosse7'),
(12, 'Ma', 'Ma', 'Ma', 'Ma', 35170, 'marine@marine.marine', 299571436, 'froosse7'),
(13, 'CORMIER', 'MArine', '2, impasse du clos', 'BRUZ', 35170, 'marine@marine.marine', 687132460, 'froosse7'),
(15, 'Adipisci totam maxime est reprehenderit cillum', 'Sequi explicabo Ab vel consectetur cillum repudiandae minim unde porro duis unde maxime est', 'Repudiandae molestiae ipsa tenetur Nam nihil quo aliquip omnis ut atque culpa ut similique nihil dolore laborum Quo itaque qui', 'bruz', 35170, 'fomycifoxi@hotmail.com', 787132460, 'Pa$$w0rd!'),
(16, 'Non quasi et nobis provident minima deserunt dolor ex non commodi non et aliqua Qui anim architecto ea sit dolores', 'Ex recusandae Obcaecati commodo sunt', 'Qui non dolore sed sunt veritatis autem sed doloremque sit sed aliquid', 'Ea dicta et eos qui odit earum incidunt temporibus esse error rerum ullamco esse quaerat quibusdam cillum voluptate est', 35170, 'mozodow@gmail.com', 787132460, '12345678'),
(18, 'Harum praesentium repudiandae vel totam reprehenderit omnis architecto corrupti fugit laboris elit repellendus Irure est tempora aliquip labore', 'Aut consequatur cillum eligendi aperiam sit', 'Est necessitatibus recusandae Mollit est', 'bruz', 35170, 'kade@yahoo.com', 787132460, 'Pa$$w0rd!'),
(20, 'Mellec', 'Benjamin', 'lzejflkzjerezklj', 'brue', 35170, 'ben@ben', 787132460, 'froosse7'),
(23, 'Do deleniti nisi laborum At assumenda facilis earum magni minus', 'Aliquam incidunt quia labore tempora itaque reprehenderit quibusdam voluptatum architecto quos maxime', 'Ut soluta quo delectus doloremque anim aut quibusdam occaecat laboris enim iusto sit dolor dolorem quae aut', 'bruz', 35170, 'matomipin@yahoo.com', 787132460, 'facesimplon');

-- --------------------------------------------------------

--
-- Structure de la table `demande`
--

CREATE TABLE `demande` (
  `idDemande` int(11) NOT NULL,
  `libele` varchar(255) NOT NULL,
  `datedemande` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `demande`
--

INSERT INTO `demande` (`idDemande`, `libele`, `datedemande`) VALUES
(10, '10', '2017-11-09'),
(11, '1', '2017-11-29'),
(12, '1', '2017-11-29'),
(13, '1', '2017-11-29');

-- --------------------------------------------------------

--
-- Structure de la table `vehicules`
--

CREATE TABLE `vehicules` (
  `idVehicules` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `modele` varchar(255) NOT NULL,
  `energie` varchar(255) NOT NULL,
  `cv` varchar(2) NOT NULL,
  `immatriculation` varchar(10) NOT NULL,
  `circulation` varchar(11) NOT NULL,
  `co2` varchar(3) NOT NULL,
  `ptac` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `vehicules`
--

INSERT INTO `vehicules` (`idVehicules`, `type`, `modele`, `energie`, `cv`, `immatriculation`, `circulation`, `co2`, `ptac`) VALUES
(41, '1', 'CITROEN', '1', '4', 'CA-758-HT', '2012/17/01', '110', '11'),
(42, '1', 'GAC GONOW', '1', '4', 'CA-758-HT', '17-01-2012', '110', '0'),
(43, '1', 'GAC GONOW', '1', '4', 'CA-758-HT', '17-01-2012', '110', '0'),
(44, '1', 'GAC GONOW', '1', '4', 'CA-758-HT', '17-01-2012', '110', '0'),
(45, '1', 'GAC GONOW', '1', '4', 'CA-758-HT', '17-01-2012', '110', '0'),
(46, '1', 'GAC GONOW', '1', '4', 'CA-758-HT', '17-01-2012', '110', '0'),
(47, '1', 'GAC GONOW', '1', '4', 'CA-758-HT', '17-01-2012', '110', '0'),
(48, '1', 'GAC GONOW', '1', '4', 'CA-758-HT', '17-01-2012', '110', '0'),
(49, '1', 'GAC GONOW', '1', '4', 'CA-758-HT', '17-01-2012', '110', '0'),
(50, '1', 'GAC GONOW', '1', '4', 'CA-758-HT', '17-01-2012', '110', '0'),
(51, '1', 'GAC GONOW', '1', '4', 'CA-758-HT', '17-01-2012', '110', '0'),
(52, '1', 'GAC GONOW', '1', '4', 'CA-758-HT', '17-01-2012', '110', '0'),
(53, '1', 'GAC GONOW', '1', '4', 'CA-758-HT', '17-01-2012', '110', '0'),
(54, '1', 'GAC GONOW', '1', '4', 'CA-758-HT', '17-01-2012', '110', '0'),
(55, '1', 'GAC GONOW', '1', '4', 'CA-758-HT', '17-01-2012', '110', '0'),
(56, '1', 'GAC GONOW', '1', '4', 'CA-758-HT', '17-01-2012', '110', '0'),
(57, '1', 'GAC GONOW', '1', '4', 'CA-758-HT', '17-01-2012', '110', '0');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`idclient`),
  ADD UNIQUE KEY `nom` (`nom`),
  ADD KEY `nom_2` (`nom`);

--
-- Index pour la table `demande`
--
ALTER TABLE `demande`
  ADD PRIMARY KEY (`idDemande`);

--
-- Index pour la table `vehicules`
--
ALTER TABLE `vehicules`
  ADD PRIMARY KEY (`idVehicules`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `idclient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT pour la table `demande`
--
ALTER TABLE `demande`
  MODIFY `idDemande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT pour la table `vehicules`
--
ALTER TABLE `vehicules`
  MODIFY `idVehicules` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
