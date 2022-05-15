-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 07 mai 2022 à 15:01
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `pfa`
--

-- --------------------------------------------------------

--
-- Structure de la table `afffiliere`
--

DROP TABLE IF EXISTS `afffiliere`;
CREATE TABLE IF NOT EXISTS `afffiliere` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Mbr1` varchar(50) NOT NULL,
  `id1` int(11) DEFAULT NULL,
  `Mbr2` varchar(50) NOT NULL,
  `id2` int(11) DEFAULT NULL,
  `Mbr3` varchar(50) NOT NULL,
  `id3` int(11) DEFAULT NULL,
  `sjts` varchar(50) NOT NULL,
  `filiere` varchar(50) NOT NULL,
  `niveau` varchar(50) NOT NULL,
  `Professeur` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `afffiliere`
--

INSERT INTO `afffiliere` (`id`, `Mbr1`, `id1`, `Mbr2`, `id2`, `Mbr3`, `id3`, `sjts`, `filiere`, `niveau`, `Professeur`) VALUES
(57, 'reda makaoui', 1, 'elhadi refki', 2, 'yassine tabba', 23, 'platforme mulimedia', '2ITE', '1ere annee', 'assad nourdine'),
(59, 'fougir', 24, 'ezahi hamza', 25, 'youssfi meriem', 26, 'detection d image', '2ITE', '1ere annee', 'kharoubi fouad'),
(61, 'dahanne', 28, 'hanime hanae', 29, 'daif kawtar', 30, 'gestion syndicat ', '2ITE', '1ere annee', 'assad nourdine');

-- --------------------------------------------------------

--
-- Structure de la table `affprofetud`
--

DROP TABLE IF EXISTS `affprofetud`;
CREATE TABLE IF NOT EXISTS `affprofetud` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idetud` int(11) NOT NULL,
  `etudiant` varchar(50) NOT NULL,
  `entreprise` varchar(255) NOT NULL,
  `Professeur` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `affprofetud`
--

INSERT INTO `affprofetud` (`id`, `idetud`, `etudiant`, `entreprise`, `Professeur`) VALUES
(13, 27, 'EDDAMNI MUSTAPHA', 'maroc big data', 'kharoubi fouad');

-- --------------------------------------------------------

--
-- Structure de la table `deadlinepfe`
--

DROP TABLE IF EXISTS `deadlinepfe`;
CREATE TABLE IF NOT EXISTS `deadlinepfe` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `entreprise` varchar(255) NOT NULL,
  `encadrant` varchar(255) NOT NULL,
  `deadline` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `dossierpfe`
--

DROP TABLE IF EXISTS `dossierpfe`;
CREATE TABLE IF NOT EXISTS `dossierpfe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idetud` int(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `filiere` varchar(50) NOT NULL,
  `entreprise` varchar(50) NOT NULL,
  `dossier1` varchar(500) DEFAULT NULL,
  `etat1` varchar(50) DEFAULT 'en attente',
  `dossier2` varchar(500) DEFAULT NULL,
  `etat2` varchar(50) DEFAULT 'en attente',
  `dossier3` varchar(500) DEFAULT NULL,
  `etat3` varchar(50) NOT NULL DEFAULT 'en attente',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `dossierpfe`
--

INSERT INTO `dossierpfe` (`id`, `idetud`, `nom`, `prenom`, `filiere`, `entreprise`, `dossier1`, `etat1`, `dossier2`, `etat2`, `dossier3`, `etat3`) VALUES
(9, 27, 'EDDAMNI ', 'MUSTAPHA', '2ITE', 'oncf maroc', 'TP Node.pdf', 'valider', 'oncf-voyages-kadiri yahya (4).pdf', 'refuser', 'CH02-ModÃ©les-cognitifs.pdf', 'refuser');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
CREATE TABLE IF NOT EXISTS `etudiant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `niveau` varchar(50) NOT NULL,
  `filiere` varchar(50) NOT NULL,
  `CNE` varchar(11) DEFAULT NULL,
  `CIN` varchar(11) DEFAULT NULL,
  `telephone` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`id`, `nom`, `prenom`, `email`, `niveau`, `filiere`, `CNE`, `CIN`, `telephone`) VALUES
(1, 'makaoui', 'reda', 'etud@etud.com', '1ere annee', '2ITE', 'R146062839', 'BL161469', '0668836367'),
(2, 'elhadi', 'refki', 'hadi@gmail.com', '1ere annee', '2ITE', '0', '0', ''),
(22, 'moustaghit', 'nouhaila', 'nmoustaghit@gmail.com', '1ere annee', 'ISIC', '0', '0', ''),
(23, 'yassine', 'tabba', 'test@gmail.com', '1ere annee', '2ITE', '0', '0', ''),
(24, 'fougir', 'akram', 'akramfougir@gmail.com', '1ere annee', '2ITE', 'R234211', 'R12344', ''),
(25, 'ezahi', 'hamza', 'hamza@gmail.com', '1ere annee', '2ITE', '0', '0', ''),
(26, 'youssfi', 'meriem', 'youssfi@gmail.com', '1ere annee', '2ITE', '0', '0', ''),
(27, 'EDDAMNI ', 'MUSTAPHA', 'MUSTAPHAEDDAMNI@gmail.com', '3eme annee', '2ITE', '', '', ''),
(28, 'dahanne', 'doha', 'doha@gmail.com', '1ere annee', '2ITE', NULL, NULL, NULL),
(29, 'hanime', 'hanae', 'hanae@gmail.com', '1ere annee', '2ITE', NULL, NULL, NULL),
(30, 'daif', 'kawtar', 'kawtar@gmail.com', '1ere annee', '2ITE', NULL, NULL, NULL),
(31, 'berhou', 'salah', 'salah@gmail.com', '2ITE', '1ere annee', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `filiere`
--

DROP TABLE IF EXISTS `filiere`;
CREATE TABLE IF NOT EXISTS `filiere` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `filiere`
--

INSERT INTO `filiere` (`id`, `libelle`) VALUES
(1, '2ITE'),
(2, 'G2E'),
(3, 'ISIC'),
(4, 'GI'),
(5, 'GC');

-- --------------------------------------------------------

--
-- Structure de la table `notes`
--

DROP TABLE IF EXISTS `notes`;
CREATE TABLE IF NOT EXISTS `notes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sjts` varchar(50) NOT NULL,
  `rapport` varchar(50) NOT NULL,
  `note` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `notes`
--

INSERT INTO `notes` (`id`, `sjts`, `rapport`, `note`) VALUES
(99, 'gestion syndicat ', 'Projet web ENSA.pdf', 3);

-- --------------------------------------------------------

--
-- Structure de la table `professeur`
--

DROP TABLE IF EXISTS `professeur`;
CREATE TABLE IF NOT EXISTS `professeur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `CIN` varchar(50) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `professeur`
--

INSERT INTO `professeur` (`id`, `nom`, `prenom`, `email`, `CIN`, `telephone`) VALUES
(1, 'assad', 'nourdine', 'prof@prof.com', 'R12344', '060000000'),
(2, 'kharoubi', 'fouad', 'fouadkharoubi@gmail.com', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `rapport`
--

DROP TABLE IF EXISTS `rapport`;
CREATE TABLE IF NOT EXISTS `rapport` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sujet` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `prof` varchar(50) NOT NULL,
  `dateR` varchar(50) DEFAULT NULL,
  `rapport` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `rapport`
--

INSERT INTO `rapport` (`id`, `sujet`, `description`, `prof`, `dateR`, `rapport`) VALUES
(24, 'detection d image', 'RAPPORT N1', 'kharoubi fouad', '2022/05/05', 'oncf-voyages-kadiri yahya (4).pdf'),
(28, 'gestion syndicat ', 'rapport n1', 'assad nourdine', '2022/05/06', 'Projet web ENSA.pdf'),
(27, 'platforme mulimedia', '', 'assad nourdine', '2022/05/06', 'Cahier_des_charges_CIA_2022 (2).pdf');

-- --------------------------------------------------------

--
-- Structure de la table `rapportpfe`
--

DROP TABLE IF EXISTS `rapportpfe`;
CREATE TABLE IF NOT EXISTS `rapportpfe` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `ide` int(50) NOT NULL,
  `etudiant` varchar(50) NOT NULL,
  `entreprise` varchar(50) NOT NULL,
  `rapport` varchar(50) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `professeur` varchar(50) NOT NULL,
  `daterapport` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `rapportpfe`
--

INSERT INTO `rapportpfe` (`id`, `ide`, `etudiant`, `entreprise`, `rapport`, `description`, `professeur`, `daterapport`) VALUES
(14, 27, 'EDDAMNI  MUSTAPHA', 'maroc big data', 'oncf-voyages-kadiri yahya (4).pdf', 'rapport n1', 'kharoubi fouad', '2022-05-06');

-- --------------------------------------------------------

--
-- Structure de la table `sjts`
--

DROP TABLE IF EXISTS `sjts`;
CREATE TABLE IF NOT EXISTS `sjts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(150) NOT NULL,
  `filiere` varchar(50) NOT NULL,
  `niveau` varchar(40) NOT NULL,
  `Professeur` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `sjts`
--

INSERT INTO `sjts` (`id`, `libelle`, `filiere`, `niveau`, `Professeur`, `description`) VALUES
(8, 'platforme mulimedia', '2ITE', '1er', 'nourdine assad ', '                       platform multimedia        '),
(9, 'detection d image', '2ITE', '1er', 'kharoubi fouad', '                                                  '),
(10, 'gestion syndicat ', '2ITE', '1er', 'assad', '                                                  ');

-- --------------------------------------------------------

--
-- Structure de la table `sout`
--

DROP TABLE IF EXISTS `sout`;
CREATE TABLE IF NOT EXISTS `sout` (
  `id` int(11) NOT NULL,
  `sjts` varchar(255) NOT NULL,
  `Professeur1` varchar(255) NOT NULL,
  `Professeur2` varchar(255) NOT NULL,
  `Professeur3` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `tachepfa`
--

DROP TABLE IF EXISTS `tachepfa`;
CREATE TABLE IF NOT EXISTS `tachepfa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sjts` varchar(100) NOT NULL,
  `tache1` varchar(150) NOT NULL,
  `description1` varchar(255) NOT NULL,
  `tache2` varchar(150) NOT NULL,
  `description2` varchar(255) NOT NULL,
  `tache3` varchar(150) NOT NULL,
  `description3` varchar(255) NOT NULL,
  `deadline` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `tachepfa`
--

INSERT INTO `tachepfa` (`id`, `sjts`, `tache1`, `description1`, `tache2`, `description2`, `tache3`, `description3`, `deadline`) VALUES
(9, 'detection d image', 'Prototype', '                                 Faire un prototype                                ', 'Prototype', '                                 Faire un prototype                                ', 'Prototype', '                                 Faire un prototype                                ', '2022-05-13'),
(10, 'detection d image', 'Prototype', '                                  FAIRE UN    PROTOTYPE                           ', '---------------', '                   --------------                                             ', '----------------', '                 ----------------------                                               ', '2022-05-20'),
(11, 'detection d image', 'DIAGRAMME DE CLASSE', '                                      faire un diagram de classe                          ', 'recherche en ligne', '                                                     ----------           ', '----------------', '                                                   ------------             ', '2022-05-06'),
(12, 'detection d image', 'yahya', '                           x                                     ', '-----', '                      x                                          ', '----------------', '                                 x                               ', '2022-04-26'),
(13, 'platforme mulimedia', 'Prototype', '                             -------                                   ', 'recherche en ligne', '                                                      ------------         ', '----------------', '                       --------------                                         ', '2022-05-21');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `psw` varchar(50) NOT NULL,
  `avatar` varchar(50) NOT NULL DEFAULT 'default-avatar.png',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `usertype`, `email`, `psw`, `avatar`) VALUES
(1, 'admin', '', 'admin', 'admin@admin.com', '1234', 'default-avatar.png'),
(2, 'assad', 'nourdine', 'prof', 'prof@prof.com', '1234', 'assad1.jpeg'),
(3, 'makaoui', 'reda', 'etud', 'etud@etud.com', '1234', 'im1.jpeg'),
(4, 'yahya', '', 'etud', 'yahyakadiri@gmail.com', '1234', 'default-avatar.png'),
(7, 'yassine', 'boubker', 'etud', 'test@gmail.com', '1234', 'default-avatar.png'),
(8, 'kharoubi', 'fouad', 'prof', 'fouadkharoubi@gmail.com', '1234', 'default-avatar.png'),
(9, 'fougir', 'akram', 'etud', 'akramfougir@gmail.com', '1234', 'default-avatar.png'),
(10, 'ezahi', 'hamza', 'etud', 'hamza@gmail.com', '1234', 'default-avatar.png'),
(11, 'youssfi', 'meriem', 'etud', 'youssfi@gmail.com', '1234', 'default-avatar.png'),
(12, 'EDDAMNI ', 'MUSTAPHA', 'etud', 'MUSTAPHAEDDAMNI@gmail.com', '1234', 'y.jpg'),
(13, 'elhadi', 'refki', 'etud', 'hadi@gmail.com', '1234', 'default-avatar.png'),
(14, 'dahanne', 'doha', 'etud', 'doha@gmail.com', '1234', 'default-avatar.png'),
(15, 'hanime', 'hanae', 'etud', 'hanae@gmail.com', '1234', 'default-avatar.png'),
(16, 'daif', 'kawtar', 'etud', 'kawtar@gmail.com', '1234', 'default-avatar.png'),
(17, 'berhou', 'salah', 'etud', 'salah@gmail.com', '1234', 'default-avatar.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
