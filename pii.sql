-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 27 avr. 2022 à 18:39
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `pii`
--

-- --------------------------------------------------------

--
-- Structure de la table `illustrationpages`
--

CREATE TABLE `illustrationpages` (
  `Id_Pages` int(11) NOT NULL,
  `Id_Photos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `illustrationprojets`
--

CREATE TABLE `illustrationprojets` (
  `Id_Photos` int(11) NOT NULL,
  `Id_Projets` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `pages`
--

CREATE TABLE `pages` (
  `Id_Pages` int(11) NOT NULL,
  `DateDebut` date NOT NULL,
  `DateFin` date DEFAULT NULL,
  `Titre` text NOT NULL,
  `Localisation` text DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Lien` varchar(50) DEFAULT NULL,
  `Type` smallint(6) NOT NULL,
  `LienImg` text DEFAULT NULL,
  `Id_User` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `pages`
--

INSERT INTO `pages` (`Id_Pages`, `DateDebut`, `DateFin`, `Titre`, `Localisation`, `Description`, `Lien`, `Type`, `LienImg`, `Id_User`) VALUES
(14, '2019-10-01', '2020-05-01', 'Vendeuse Temps partiel chez Matsaï Mara', 'Bordeaux', 'Conseil client, caisse, réassort dans une boutique indépendante de bijoux. \r\n', 'https://www.matsai-mara.com/', 0, NULL, ''),
(15, '2020-03-01', '2021-03-01', 'Responsable Logistique', 'BDE ENSC ', 'Mise en place de moyen de communication entre pôles, aide aux différents pôles, organisation générale au sein du bureau.\r\n', NULL, 0, NULL, ''),
(16, '2019-06-01', '2019-07-01', 'Stage de Communication dans l’équipe RoboCup 2020', 'Bordeaux, Sydney', 'Community manager, content manager, création contenu réseaux sociaux, création vidéo teaser pour RoboCup 2020', 'https://www.youtube.com/watch?v=N_YPtVXpSjs&ab_cha', 0, NULL, ''),
(20, '2016-08-27', '2017-04-27', 'Senior Year', 'Shawnee Mission East High School (Kansas)', 'Année d’échange aux Etats-Unis (Rotary Youth Exchange) après une Première S au lycée Camille Jullian, Bordeaux. \r\nClasses suivies : Algebra 3, AP Spanish, AP French, US History, Fashion Merchandising, Sculpture and Jewelry, sewing.\r\n', '', 1, '', ''),
(21, '2018-06-01', '2018-06-29', 'Baccalauréat S, spécialité SVT, mention bien, section Cambridge', 'Lycée Assomption St  Bordeaux', 'Cours de section Cambridge donné par des professeurs américains. \r\nObtention du Cambridge : Overall score : 174, Reading : 172, Use of English : 169, Writing : 183, Listening : 156, Speaking : 188\r\n', '', 1, '', ''),
(22, '2018-09-27', '2020-08-27', 'DUT MMI (Métiers du Multimédia et de l’Internet)', 'IUT Michel Montaigne, Bordeaux', 'CERTIFICATION OPQUAST\r\nMaîtrise de la qualité en projet web\r\nCONCOURS D\'ÉLOQUENCE\r\nL\'art oratoire en scène\r\nCYBERSÉCURITÉ\r\nEnjeux et métiers de la sécurité du numérique\r\nDESIGN INTERACTIF ET INTÉGRATION\r\nEn deux semaines, les bases du design interactif et de l’intégration\r\nHORS-CHAMP\r\nProduction de court-métrage\r\nMMI WORKSHOP\r\nAtelier d\'innovation numérique responsable\r\n', 'https://www.mmibordeaux.com/ateliers', 1, '', ''),
(23, '2020-09-27', '2023-09-27', 'ENSC (Ecole Nationale Supérieure de Cognitique)', 'Bordeaux INP, Talence', 'L’ENSC forme des ingénieurs Cognitique. L’ingénieur ENSC est un expert scientifique dans les domaines de compétences du facteur humain, des usages cognitifs des technologies et de l\'intégration Homme/Système.', 'https://ensc.bordeaux-inp.fr/fr/cognitique#group-f', 1, '', ''),
(26, '2021-02-01', '2021-06-01', 'Etude Bien Rentré ', 'Maquettage UX ', 'Etude via i2c, junior entreprise de l’ENSC. Réalisation d’un benchmark, charte graphique et d’une maquette dynamique d’application mobile. ', NULL, 0, NULL, '');

-- --------------------------------------------------------

--
-- Structure de la table `photos`
--

CREATE TABLE `photos` (
  `Id_Photos` int(11) NOT NULL,
  `PhotoFond` text DEFAULT NULL,
  `PhotoIllu` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `projets`
--

CREATE TABLE `projets` (
  `Id_Projets` int(11) NOT NULL,
  `Titre` text NOT NULL,
  `DateDebut` date NOT NULL,
  `DateFin` date DEFAULT NULL,
  `Contexte` tinytext DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `LienImgFond` text NOT NULL,
  `Lien` text DEFAULT NULL,
  `Id_User` varchar(50) NOT NULL,
  `CodHexTypo` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `projets`
--

INSERT INTO `projets` (`Id_Projets`, `Titre`, `DateDebut`, `DateFin`, `Contexte`, `Description`, `LienImgFond`, `Lien`, `Id_User`, `CodHexTypo`) VALUES
(9, 'Robot à l\'école', '2020-10-01', '2021-04-01', 'Projet interdisciplinaire ', 'Réalisation de grilles d’observations, maquettes d’application de récolte de données auprès des enfants observés, développement de l’app. ', 'https://www.nouvelleviepro.fr/assets/uploads/salon/Nouvelleviepro-automatisation-creation-emploi.jpg', 'https://robotalecole-ensc.000webhostapp.com/', '', '#ff0000'),
(11, 'Chargée de mission, Campus19', '2020-04-01', '2020-04-30', 'Art for solidarity', 'Collecte de fonds pour les étudiants en situation précaire par le biais d’une vente d’oeuvres de street art au plus offrant. \r\nGroupe et page Facebook, Instagram (@campus19_bordeaux), Twitter (@19_campus). \r\n', 'https://scontent-cdg2-1.xx.fbcdn.net/v/t1.6435-9/94977230_1550275358455005_3761198793496723456_n.jpg?_nc_cat=100&ccb=1-5&_nc_sid=8631f5&_nc_ohc=XiJths_sXKcAX__6TB_&_nc_ht=scontent-cdg2-1.xx&oh=00_AT-WB2sZOvdbnjAlLk6hFYoj0-rHM74Eu252battargZHA&oe=628D4CFC', 'https://www.facebook.com/photo/?fbid=1550275351788339&set=p.1550275351788339', '', '#fff957'),
(13, 'Cheffe de projet, Playthesis', '2020-03-27', '2022-02-27', 'Workshop interpromotion ', 'Création de jeux pour délocaliser la rééducation des amputés de membre supérieur avant appareillage de prothèse myoélectrique. Réalisation text user sur patients et conception game Design avec professionnels de santé. ', 'data:image/jpeg;base64,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', 'https://youtu.be/xnwm928ula4', '', '#78b5ab'),
(14, 'Cheffe de projet, E-carnet', '2019-03-27', '2019-04-27', 'Workshop interpromotion', 'Cheffe de projet, E-carnet - Workshop interpromotion\r\nPlateforme pour les professionnels de santé : un suivi d\'appareillage en ligne. \r\n', 'http://e-carnet.herokuapp.com/images/logo-e-carnet.png', 'http://e-carnet.herokuapp.com/users/sign_up?reload', '', '#5d0070');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `Id_User` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`Id_User`, `mdp`) VALUES
('Lottie', 'piiensc2022');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `illustrationpages`
--
ALTER TABLE `illustrationpages`
  ADD PRIMARY KEY (`Id_Pages`,`Id_Photos`),
  ADD KEY `Id_Photos` (`Id_Photos`);

--
-- Index pour la table `illustrationprojets`
--
ALTER TABLE `illustrationprojets`
  ADD PRIMARY KEY (`Id_Photos`,`Id_Projets`),
  ADD KEY `Id_Projets` (`Id_Projets`);

--
-- Index pour la table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`Id_Pages`),
  ADD KEY `Id_User` (`Id_User`);

--
-- Index pour la table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`Id_Photos`);

--
-- Index pour la table `projets`
--
ALTER TABLE `projets`
  ADD PRIMARY KEY (`Id_Projets`),
  ADD KEY `Id_User` (`Id_User`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`Id_User`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `pages`
--
ALTER TABLE `pages`
  MODIFY `Id_Pages` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `projets`
--
ALTER TABLE `projets`
  MODIFY `Id_Projets` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
