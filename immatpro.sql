-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Ven 22 Décembre 2017 à 16:23
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
(1, 'zamlekamlk', 'rlmezkrlmkz', 'mrklzemkr', 'BRUZ', 35170, 'marine@marine.com', 787132460, 'froosse7'),
(2, 'CORMIERe', 'Marine', '2, impasse du clos', 'BRUZ', 35170, 'zohekysi@gmail.com', 787132460, 'Pa$$w0rd!'),
(3, 'Maxime commodo tenetur neque est cupidatat dolor dignissimos ex reprehenderit eligendi sint suscipit cum esse repellendus', 'Culpa ipsum sint reprehenderit vel ea sit voluptatem hic debitis id eius obcaecati consectetur laboriosam', 'Quisquam est est recusandae Eu sit nihil ea sint sunt pariatur In vero voluptate ipsa aut non vitae', 'BRUZ', 35170, 'xihyzufaq@yahoo.com', 787132460, 'Pa$$w0rd!'),
(4, 'MArinou', 'Culpa ipsum sint reprehenderit vel ea sit voluptatem hic debitis id eius obcaecati consectetur laboriosam', 'Quisquam est est recusandae Eu sit nihil ea sint sunt pariatur In vero voluptate ipsa aut non vitae', 'BRUZ', 35170, 'xihyzufaq@yahoo.com', 787132460, 'cacacacacaca');

-- --------------------------------------------------------

--
-- Structure de la table `demande`
--

CREATE TABLE `demande` (
  `idDemande` int(11) NOT NULL,
  `libele` varchar(255) NOT NULL,
  `datedemande` varchar(255) NOT NULL,
  `departement` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `demarche`
--

CREATE TABLE `demarche` (
  `idDemarche` int(11) NOT NULL,
  `intituleDemarche` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `demarche`
--

INSERT INTO `demarche` (`idDemarche`, `intituleDemarche`) VALUES
(1, 'Changement de propriétaire'),
(2, 'Changement adresse'),
(3, 'Immatriculation vehicule neuf'),
(4, 'Demande de duplicata'),
(5, 'Changement etat matrimonial');

-- --------------------------------------------------------

--
-- Structure de la table `departement`
--

CREATE TABLE `departement` (
  `departement_id` int(11) NOT NULL,
  `departement_code` varchar(3) CHARACTER SET utf8 DEFAULT NULL,
  `departement_nom` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `departement_nom_uppercase` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `departement_slug` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `departement_nom_soundex` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `departement`
--

INSERT INTO `departement` (`departement_id`, `departement_code`, `departement_nom`, `departement_nom_uppercase`, `departement_slug`, `departement_nom_soundex`) VALUES
(1, '01', 'Ain', 'AIN', 'ain', 'A500'),
(2, '02', 'Aisne', 'AISNE', 'aisne', 'A250'),
(3, '03', 'Allier', 'ALLIER', 'allier', 'A460'),
(5, '05', 'Hautes-Alpes', 'HAUTES-ALPES', 'hautes-alpes', 'H32412'),
(4, '04', 'Alpes-de-Haute-Provence', 'ALPES-DE-HAUTE-PROVENCE', 'alpes-de-haute-provence', 'A412316152'),
(6, '06', 'Alpes-Maritimes', 'ALPES-MARITIMES', 'alpes-maritimes', 'A41256352'),
(7, '07', 'Ardèche', 'ARDÈCHE', 'ardeche', 'A632'),
(8, '08', 'Ardennes', 'ARDENNES', 'ardennes', 'A6352'),
(9, '09', 'Ariège', 'ARIÈGE', 'ariege', 'A620'),
(10, '10', 'Aube', 'AUBE', 'aube', 'A100'),
(11, '11', 'Aude', 'AUDE', 'aude', 'A300'),
(12, '12', 'Aveyron', 'AVEYRON', 'aveyron', 'A165'),
(13, '13', 'Bouches-du-Rhône', 'BOUCHES-DU-RHÔNE', 'bouches-du-rhone', 'B2365'),
(14, '14', 'Calvados', 'CALVADOS', 'calvados', 'C4132'),
(15, '15', 'Cantal', 'CANTAL', 'cantal', 'C534'),
(16, '16', 'Charente', 'CHARENTE', 'charente', 'C653'),
(17, '17', 'Charente-Maritime', 'CHARENTE-MARITIME', 'charente-maritime', 'C6535635'),
(18, '18', 'Cher', 'CHER', 'cher', 'C600'),
(19, '19', 'Corrèze', 'CORRÈZE', 'correze', 'C620'),
(20, '2a', 'Corse-du-sud', 'CORSE-DU-SUD', 'corse-du-sud', 'C62323'),
(21, '2b', 'Haute-corse', 'HAUTE-CORSE', 'haute-corse', 'H3262'),
(22, '21', 'Côte-d\'or', 'CÔTE-D\'OR', 'cote-dor', 'C360'),
(23, '22', 'Côtes-d\'armor', 'CÔTES-D\'ARMOR', 'cotes-darmor', 'C323656'),
(24, '23', 'Creuse', 'CREUSE', 'creuse', 'C620'),
(25, '24', 'Dordogne', 'DORDOGNE', 'dordogne', 'D6325'),
(26, '25', 'Doubs', 'DOUBS', 'doubs', 'D120'),
(27, '26', 'Drôme', 'DRÔME', 'drome', 'D650'),
(28, '27', 'Eure', 'EURE', 'eure', 'E600'),
(29, '28', 'Eure-et-Loir', 'EURE-ET-LOIR', 'eure-et-loir', 'E6346'),
(30, '29', 'Finistère', 'FINISTÈRE', 'finistere', 'F5236'),
(31, '30', 'Gard', 'GARD', 'gard', 'G630'),
(32, '31', 'Haute-Garonne', 'HAUTE-GARONNE', 'haute-garonne', 'H3265'),
(33, '32', 'Gers', 'GERS', 'gers', 'G620'),
(34, '33', 'Gironde', 'GIRONDE', 'gironde', 'G653'),
(35, '34', 'Hérault', 'HÉRAULT', 'herault', 'H643'),
(36, '35', 'Ile-et-Vilaine', 'ILE-ET-VILAINE', 'ile-et-vilaine', 'I43145'),
(37, '36', 'Indre', 'INDRE', 'indre', 'I536'),
(38, '37', 'Indre-et-Loire', 'INDRE-ET-LOIRE', 'indre-et-loire', 'I536346'),
(39, '38', 'Isère', 'ISÈRE', 'isere', 'I260'),
(40, '39', 'Jura', 'JURA', 'jura', 'J600'),
(41, '40', 'Landes', 'LANDES', 'landes', 'L532'),
(42, '41', 'Loir-et-Cher', 'LOIR-ET-CHER', 'loir-et-cher', 'L6326'),
(43, '42', 'Loire', 'LOIRE', 'loire', 'L600'),
(44, '43', 'Haute-Loire', 'HAUTE-LOIRE', 'haute-loire', 'H346'),
(45, '44', 'Loire-Atlantique', 'LOIRE-ATLANTIQUE', 'loire-atlantique', 'L634532'),
(46, '45', 'Loiret', 'LOIRET', 'loiret', 'L630'),
(47, '46', 'Lot', 'LOT', 'lot', 'L300'),
(48, '47', 'Lot-et-Garonne', 'LOT-ET-GARONNE', 'lot-et-garonne', 'L3265'),
(49, '48', 'Lozère', 'LOZÈRE', 'lozere', 'L260'),
(50, '49', 'Maine-et-Loire', 'MAINE-ET-LOIRE', 'maine-et-loire', 'M346'),
(51, '50', 'Manche', 'MANCHE', 'manche', 'M200'),
(52, '51', 'Marne', 'MARNE', 'marne', 'M650'),
(53, '52', 'Haute-Marne', 'HAUTE-MARNE', 'haute-marne', 'H3565'),
(54, '53', 'Mayenne', 'MAYENNE', 'mayenne', 'M000'),
(55, '54', 'Meurthe-et-Moselle', 'MEURTHE-ET-MOSELLE', 'meurthe-et-moselle', 'M63524'),
(56, '55', 'Meuse', 'MEUSE', 'meuse', 'M200'),
(57, '56', 'Morbihan', 'MORBIHAN', 'morbihan', 'M615'),
(58, '57', 'Moselle', 'MOSELLE', 'moselle', 'M240'),
(59, '58', 'Nièvre', 'NIÈVRE', 'nievre', 'N160'),
(60, '59', 'Nord', 'NORD', 'nord', 'N630'),
(61, '60', 'Oise', 'OISE', 'oise', 'O200'),
(62, '61', 'Orne', 'ORNE', 'orne', 'O650'),
(63, '62', 'Pas-de-Calais', 'PAS-DE-CALAIS', 'pas-de-calais', 'P23242'),
(64, '63', 'Puy-de-Dôme', 'PUY-DE-DÔME', 'puy-de-dome', 'P350'),
(65, '64', 'Pyrénées-Atlantiques', 'PYRÉNÉES-ATLANTIQUES', 'pyrenees-atlantiques', 'P65234532'),
(66, '65', 'Hautes-Pyrénées', 'HAUTES-PYRÉNÉES', 'hautes-pyrenees', 'H321652'),
(67, '66', 'Pyrénées-Orientales', 'PYRÉNÉES-ORIENTALES', 'pyrenees-orientales', 'P65265342'),
(68, '67', 'Bas-Rhin', 'BAS-RHIN', 'bas-rhin', 'B265'),
(69, '68', 'Haut-Rhin', 'HAUT-RHIN', 'haut-rhin', 'H365'),
(70, '69', 'Rhône', 'RHÔNE', 'rhone', 'R500'),
(71, '70', 'Haute-Saône', 'HAUTE-SAÔNE', 'haute-saone', 'H325'),
(72, '71', 'Saône-et-Loire', 'SAÔNE-ET-LOIRE', 'saone-et-loire', 'S5346'),
(73, '72', 'Sarthe', 'SARTHE', 'sarthe', 'S630'),
(74, '73', 'Savoie', 'SAVOIE', 'savoie', 'S100'),
(75, '74', 'Haute-Savoie', 'HAUTE-SAVOIE', 'haute-savoie', 'H321'),
(76, '75', 'Paris', 'PARIS', 'paris', 'P620'),
(77, '76', 'Seine-Maritime', 'SEINE-MARITIME', 'seine-maritime', 'S5635'),
(78, '77', 'Seine-et-Marne', 'SEINE-ET-MARNE', 'seine-et-marne', 'S53565'),
(79, '78', 'Yvelines', 'YVELINES', 'yvelines', 'Y1452'),
(80, '79', 'Deux-Sèvres', 'DEUX-SÈVRES', 'deux-sevres', 'D2162'),
(81, '80', 'Somme', 'SOMME', 'somme', 'S500'),
(82, '81', 'Tarn', 'TARN', 'tarn', 'T650'),
(83, '82', 'Tarn-et-Garonne', 'TARN-ET-GARONNE', 'tarn-et-garonne', 'T653265'),
(84, '83', 'Var', 'VAR', 'var', 'V600'),
(85, '84', 'Vaucluse', 'VAUCLUSE', 'vaucluse', 'V242'),
(86, '85', 'Vendée', 'VENDÉE', 'vendee', 'V530'),
(87, '86', 'Vienne', 'VIENNE', 'vienne', 'V500'),
(88, '87', 'Haute-Vienne', 'HAUTE-VIENNE', 'haute-vienne', 'H315'),
(89, '88', 'Vosges', 'VOSGES', 'vosges', 'V200'),
(90, '89', 'Yonne', 'YONNE', 'yonne', 'Y500'),
(91, '90', 'Territoire de Belfort', 'TERRITOIRE DE BELFORT', 'territoire-de-belfort', 'T636314163'),
(92, '91', 'Essonne', 'ESSONNE', 'essonne', 'E250'),
(93, '92', 'Hauts-de-Seine', 'HAUTS-DE-SEINE', 'hauts-de-seine', 'H32325'),
(94, '93', 'Seine-Saint-Denis', 'SEINE-SAINT-DENIS', 'seine-saint-denis', 'S525352'),
(95, '94', 'Val-de-Marne', 'VAL-DE-MARNE', 'val-de-marne', 'V43565'),
(96, '95', 'Val-d\'oise', 'VAL-D\'OISE', 'val-doise', 'V432'),
(97, '976', 'Mayotte', 'MAYOTTE', 'mayotte', 'M300'),
(98, '971', 'Guadeloupe', 'GUADELOUPE', 'guadeloupe', 'G341'),
(99, '973', 'Guyane', 'GUYANE', 'guyane', 'G500'),
(100, '972', 'Martinique', 'MARTINIQUE', 'martinique', 'M6352'),
(101, '974', 'Réunion', 'RÉUNION', 'reunion', 'R500');

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
  `ptac` varchar(11) NOT NULL,
  `errors` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `vehicules`
--

INSERT INTO `vehicules` (`idVehicules`, `type`, `modele`, `energie`, `cv`, `immatriculation`, `circulation`, `co2`, `ptac`, `errors`) VALUES
(212, '6', 'AUDI', '6', '2', 'CB-589-FT', '17-01-2012', '142', '4589', NULL),
(213, '6', 'AUDI', '6', '2', 'CB-589-FT', '17-01-2012', '142', '4589', NULL),
(214, '1', 'BIMOTA', '2', '1', 'CA-758-HG', '17-01-2012', '110', '1114', NULL),
(215, '0', 'CITROEN', '1', '4', 'CA-758-HT', '17-01-2012', '112', '2014', NULL),
(216, '7', 'TOMOS', '6', '12', 'CB-589-FT', '17-01-2012', '123', '1236', NULL),
(217, '7', 'TOMOS', '6', '12', 'CB-589-FT', '17-01-2012', '123', '1236', NULL),
(218, '0', 'MINI', '2', '10', 'CA-758-HT', '17-01-2012', '125', '1236', NULL),
(219, '0', 'MINI', '2', '10', 'CA-758-HT', '17-01-2012', '125', '1236', NULL),
(220, '0', 'MINI', '2', '10', 'CA-758-HT', '17-01-2012', '125', '1236', NULL),
(221, '3', 'RENAULT', '4', '43', 'CA-758-HT', '17-01-2012', '128', '1452', NULL),
(222, '6', 'SUBARU', '5', '10', 'CA-758-HT', '17-01-2012', '123', '1235', NULL),
(223, '6', 'SUBARU', '5', '10', 'CA-758-HT', '17-01-2012', '123', '1235', NULL),
(224, '1', 'SKODA', '1', '10', 'CA-758-HT', '17-01-2012', '112', '1234', NULL),
(225, '1', 'SKODA', '1', '10', 'CA-758-HT', '17-01-2012', '112', '1234', NULL),
(226, '1', 'SKODA', '1', '10', 'CA-758-HT', '17-01-2012', '112', '1234', NULL),
(227, '1', 'SKODA', '1', '10', 'CA-758-HT', '17-01-2012', '112', '1234', NULL),
(228, '3', 'MZ', '3', '4', 'CA-758-HT', '17-01-2012', '123', '1234', NULL),
(229, '3', 'MZ', '3', '4', 'CA-758-HT', '17-01-2012', '123', '1234', NULL),
(230, '3', 'MZ', '3', '4', 'CA-758-HT', '17-01-2012', '123', '1234', NULL),
(231, '3', 'MZ', '3', '4', 'CA-758-HT', '17-01-2012', '123', '1234', NULL),
(232, '3', 'MZ', '3', '4', 'CA-758-HT', '17-01-2012', '123', '1234', NULL),
(233, '3', 'MZ', '3', '4', 'CA-758-HT', '17-01-2012', '123', '1234', NULL),
(234, '3', 'MZ', '3', '4', 'CA-758-HT', '17-01-2012', '123', '1234', NULL),
(235, '0', 'HUSABERG', '2', '10', 'CA-758-HT', '17-01-2012', '112', '1234', NULL),
(236, '0', 'HUSABERG', '2', '10', 'CA-758-HT', '17-01-2012', '112', '1234', NULL),
(237, '0', 'HUSABERG', '2', '10', 'CA-758-HT', '17-01-2012', '112', '1234', NULL),
(238, '0', 'DUE', '2', '10', 'CA-758-HT', '17-01-2012', '112', '1234', NULL),
(239, '0', 'KAWASAKI', '1', '4', 'CA-758-HT', '17-01-2012', '110', '1245', NULL);

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
-- Index pour la table `demarche`
--
ALTER TABLE `demarche`
  ADD PRIMARY KEY (`idDemarche`);

--
-- Index pour la table `departement`
--
ALTER TABLE `departement`
  ADD PRIMARY KEY (`departement_id`),
  ADD KEY `departement_slug` (`departement_slug`),
  ADD KEY `departement_code` (`departement_code`),
  ADD KEY `departement_nom_soundex` (`departement_nom_soundex`);

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
  MODIFY `idclient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `demande`
--
ALTER TABLE `demande`
  MODIFY `idDemande` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `demarche`
--
ALTER TABLE `demarche`
  MODIFY `idDemarche` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `departement`
--
ALTER TABLE `departement`
  MODIFY `departement_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
--
-- AUTO_INCREMENT pour la table `vehicules`
--
ALTER TABLE `vehicules`
  MODIFY `idVehicules` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
