-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  jeu. 25 avr. 2019 à 20:08
-- Version du serveur :  10.1.28-MariaDB
-- Version de PHP :  5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `construction`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `nom_articles` varchar(200) NOT NULL,
  `prix_articles` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `categories` varchar(300) NOT NULL,
  `description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `nom_articles`, `prix_articles`, `image`, `categories`, `description`) VALUES
(2, 'Brocheuse Ã©lectrique', '120', 'brcm.jpg', 'menuiserie', 'Vous devez fournir vos broches T-80 pour utiliser cet outil.'),
(3, 'tube PER', '50', 'tpb.jpg', 'plomberie', 'L\'indispensable pour crÃ©er sa plomberie en PER : tube, raccord Ã  sertir, Ã  glissement, sans soudure...'),
(4, 'Multicouche', '50', 'tp2b.jpg', 'plomberie', 'La plomberie multicouche est la solution facile et fiable pour votre installation sanitaire ou chauffage.'),
(5, 'tube PVC', '50', 'tp3b.jpg', 'plomberie', 'Tubes et raccords PVC Ã  coller pour la rÃ©alisation d\'Ã©vacuation et d\'assainissement.'),
(6, 'cuivre', '50', 'tp4b.jpg', 'plomberie', 'Le cuivre est le produit le mieux adaptÃ© Ã  tout circuit dâ€™eau.'),
(7, 'Raccord laiton', '50', 'tp5b.jpg', 'plomberie', 'Large gamme : Ã  souder, Ã  visser, raccord rapide, raccord bicÃ´ne...'),
(8, 'Collecteur sanitaire', '50', 'tp6b.jpg', 'plomberie', 'Nourrice ou clarinette, produit idÃ©al pour la distribution d\'eau chaude et froide.'),
(9, 'Tube polyÃ©thylÃ¨ne PEHD et raccords', '50', 'tp7b.jpg', 'plomberie', 'Tubes PEHD (PolyÃ©thylÃ¨ne Haute DensitÃ©) et raccords. Adduction et Distribution dâ€™eau potable uniquemen'),
(10, 'Distribution et sÃ©curitÃ© de l\'eau', '50', 'tp8b.jpg', 'plomberie', 'Clapets antipollution, rÃ©ducteur de pression, compteurs, manomÃ¨tres pour rÃ©seaux d\'eau.'),
(11, 'Cisailles Ã  mÃ©tal', '50', 'm1.jpg', 'menuiserie', 'Les cisailles Ã  mÃ©tal coupent le mÃ©tal en feuille mince (calibre 18 Ã  28 environ).'),
(12, 'Cisaille Ã  mÃ©tal', '50', 'm2.jpg', 'menuiserie', 'Sert Ã  dÃ©couper des rainures d\'environ 3mm de largeur dans le mÃ©tal en feuilles (dÃ©coupe jusqu\'Ã  calibre 20).'),
(13, 'Cintreuses Ã  tuyaux', '50', 'm3.jpg', 'menuiserie', 'Permet d\'obtenir des courbes rÃ©guliÃ¨res avec des tubes de cuivre en Ã©vitant qu\'ils ne s\'Ã©crasent pendant le processus. Plusieurs diamÃ¨tres peuvent Ãªtre cintrÃ©s.'),
(14, 'ClÃ© Ã  rochet sans-fil', '50', 'm4.jpg', 'menuiserie', 'Vous devez fournir vos embouts hexagonaux, de tournevis ou pour boulons pour utiliser cet outil.'),
(15, 'Ciseaux Ã  bois', '50', 'm5.jpg', 'menuiserie', 'Pour tailler finement les fibres du bois.  La lame du ciseau doit Ãªtre trÃ¨s bien affutÃ©e pour faire un bon travail et il est difficile de bien l\'affuter.  Prenez soin des ciseaux si vous les utilisez.'),
(16, 'ClÃ© Ã  rochet', '50', 'm6.jpg', 'menuiserie', 'Cet ensemble dans un coffret permet de tenir et faire tourner facilement des boulons ou des Ã©crous hexagonaux de dimensions mÃ©triques (SI) ou impÃ©riales.'),
(17, 'ClÃ© Ã  molette', '50', 'm7.jpg', 'menuiserie', 'Cet outil sert Ã  tenir des boulons ou des Ã©crous.'),
(18, 'Tube Colle', '50', 'e1.webp', 'etancheite', 'Super Glue 3 Loctite SpÃ©ciale Plastique 3g Caoutchoux Cuir Porcelaine Tube Colle Super Glue 3 Loctite SpÃ©ciale Plastique 3g Caoutchoux Cuir Porcelaine 9,95 EUR'),
(19, 'Yato 82288', '50', 'e2.webp', 'etancheite', 'Air chaud pistolet 2000W 350C - 550C 500L/Min radiateur sÃ¨che dÃ©capant Ã  peinture. Main et pneumatiquesOutils YATO sont utilisÃ©s avec succÃ¨s par des spÃ©cialistes de nombreux domaines de lâ€™industrie.'),
(20, 'Sol CloutÃ© Film de murs fondation Ã  bulles', '50', 'e3.webp', 'etancheite', 'Sol CloutÃ© Film de murs fondation Ã  bulles Premium 20,00 MÃ¨tre x 1,00 Elle protÃ¨ge contre lâ€™humiditÃ© du sol. La maÃ§onnerie peut respirer. Ainsi, une bonne Ã©tanchÃ©itÃ© est atteint. Le rÃ©sultat : le sous-sol reste sec. Celui-ci a une double sÃ©curitÃ© lors de lâ€™installation.'),
(21, 'Tube de Colle', '50', 'e4.webp', 'etancheite', 'Fixation PolymÃ¨re Interieur / Exterieur 100g NEUF Tube de Colle Fixation PolymÃ¨re Interieur / Exterieur 100g NEUF,Vendeur Top FiabilitÃ©'),
(22, 'Aluminium Film adhÃ©sif', '50', 'e5.webp', 'etancheite', '48mm x 10m Aluminium Film adhÃ©sif QualitÃ© chaleur isolation BANDE otl Aluminium Foil bande. Cette bande de papier a un adhÃ©sif pour toutes. Haute qualitÃ© auto adhÃ©sif en aluminium. pour Ã©tanchÃ©itÃ©, chauffage et ventilation, le long de la gaine.'),
(23, 'Basotect Panneaux', '50', 'e6.webp', 'etancheite', 'Basotect Panneaux acoustiques 118x58x5cm a Insonorisation retardateur de flamme BasotectÂ® 118x58x5cm de panneau acoustique pour lâ€™isolation phonique feu B1 rÃ©sistant. BasotectÂ® acoustique panneau 118 x 58 x 5 cm blanc, gris, ignifuge Ã  lâ€™insonorisation B1. Basotect Â© plaque absorbeur de son'),
(24, 'manche a pelle', '12', 'mc1.jpg', 'maconnerie', 'Manche bois pelle carrÃ©e 23 cm'),
(25, 'pelle', '12', 'mc2.jpg', 'maconnerie', 'Pelle carrÃ©e 23 cm sans manche'),
(26, 'Pioche type terrassier - manche fibre - Forges de Magne', '12', 'mc4.jpg', 'maconnerie', 'Pioche de terrassier oeil rond avec pointe et panne trempÃ©es rÃ©sistantes Ã  l\'usure, ainsi qu\'un manche tri-matiÃ¨re incassable.  -Longueur : 50 cm.  -Largeur : 5,20 cm.  -Poids : 2,00 kg.'),
(27, 'Pioche de chantier manche bois', '12', 'mc3.jpg', 'maconnerie', 'Pioche de chantier type oeil rond avec manche en bois.   -Hauteur du manche : 0,90 m.   -Poids : 3,40 kg.'),
(28, 'Mesure roulante 50 mÃ¨tres - Silverline', '12', 'mc5.jpg', 'maconnerie', 'Cette mesure d\'arpentage de la marque Silverline permet de mesurer la superficie des terrains.  Elle se prÃ©sente sous forme de boÃ®tier en plastique et est composÃ©e d\'un extrÃ©mitÃ© mÃ©tallique avec crochet et griffe.  Son ruban est impermÃ©able, rÃ©sistant aux rayures et de prÃ©cision classe III.'),
(29, 'Ã‰querre de maÃ§on aluminium - Taliaplast', '12', 'mc6.jpg', 'maconnerie', '2 dimensions disponibles.  Ã‰querre de maÃ§on sans rivet entiÃ¨rement soudÃ©e et livrÃ©e avec des embouts plastique.  -Composition : aluminium.  -Poids : 1,50 kg ou 2,00 kg.'),
(30, 'Chevillette 250 mm octogonale', '10', 'mc7.jpg', 'maconnerie', '-Chevillette avec valet rond.  -Pointe trempÃ©e 50 HRC  -Corps : octogonal  -Longueur : 250 mm  -Section : 10 mm UV : 10  -Poids : 280 gr'),
(31, 'Probac de chantier 360 Litre', '120', 'mc8.jpg', 'maconnerie', 'SystÃ¨me d\'accrochage et reprise avec fourche.  -CapacitÃ© : 360 litres. (ou 500 litres)  -Composition : acier 2 mm  -Finition : Peint.  -Poids : 54,80 kg.'),
(32, 'Cale bÃ©ton ronde X 100', '5', 'mc9.jpg', 'maconnerie', 'Lot de 100 cales bÃ©ton.   Pour des fers Ã  bÃ©ton de diamÃ¨tre 8 Ã  12 mm.  Enrobage : 30 mm.  Poids : 0,10 kg.'),
(33, 'Balai Ã  dÃ©buller 1,20 m', '89,10 â‚¬ ht', 'mc10.jpg', 'maconnerie', 'Monture en aluminium avec poignÃ©es ergonomiques.  -Composition : aluminium.  -Hauteur rÃ©glable 2 positions : 0,90 m ou 0,98 m.  -Longueur : 1,20 m.  -Hauteur fibres PVC : 10 cm.  -Poids : 5,20 kg.  La rÃ¨gle Ã  niveau vous permettra de parfaire votre travail.'),
(34, 'Agrandir l\'image Benne Ã  bÃ©ton basculante 75 Litres', '77,95', 'mc11.jpg', 'maconnerie', '-Composition : polyÃ©thylÃ¨ne haute densitÃ©, rÃ©sistant Ã  l\'abrasion.  -Hauteur : 530 mm.    -Largeur : 520 mm.    -CapacitÃ© : 75 litres.  -Charge : 150 kg  -DiamÃ¨tre de l\'anse : 15 mm  -Poids : 14,80 kg.'),
(35, 'Ã‰chafaudage roulant acier 4 mÃ¨tres', '735,00 € ht', 'me1.jpg', 'echafaudage', 'Ã‰chafaudage roulant acier 4 m Ã‰chafaudage roulant acier 4 mÃ¨tres Ã‰chafaudage roulant acier 4 mÃ¨tres Echafaudage roulant acier 4 m Ã‰chafaudage roulant acier 4 mÃ¨tres Ref.:  FECHR400 735,00 â‚¬ h'),
(36, 'Ã‰chafaudage fixe de faÃ§ade 96 m2', '3 938,00 â‚¬ ht', 'me2.jpg', 'echafaudage', 'Cet Ã©chafaudage en acier galvanisÃ© est livrÃ© avec les planchers et les plinthes. Il est conforme aux normes EN 12811-810.  -Hauteur de travail: 6 m.  -Longueur de travail: 16 m.  -Poids: 987,00 kg.  Autres lots disponibles : 78 m2 et 160 m2'),
(37, 'Garde-corps monobloc de sÃ©curitÃ© 2.00 m', '50,88 â‚¬ ht', 'me3.jpg', 'echafaudage', 'Longueur : 2 mÃ¨tres (existe en 3 mÃ¨tres)  Garde-corps monobloc pour sÃ©curiser la structure de l\'Ã©chafaudage.  -Composition : acier galvanisÃ©.  -DiamÃ¨tre : 45 mm.  -Poids : 9,20 kg.'),
(39, 'Arrache-clous', '50', 'marc.jpg', 'menuiserie', 'Pour arracher les gros clous dans le bois, lorsque la panne d\'un marteau ne suffit pas ou lorsqu\'il y en a beaucoup Ã  arracher (moins fatigant). Utiliser des gants de travail avec cet outil.'),
(40, 'truelle', '20', 'truelle.jpg', 'maconnerie', 'Une truelle est une petite pelle Ã  main, outil de base du maÃ§on et de l\'archÃ©ologue. Se maniant d\'une main, elle est composÃ©e d\'une lame mince, en forme de triangle ou carrÃ©, d\'acier plus ou moins flexible, et d\'un manche de fer recourbÃ© se terminant par une poignÃ©e en bois ou en plastique');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `mdp` varchar(200) NOT NULL,
  `localite` varchar(200) NOT NULL,
  `contact` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id`, `nom`, `mdp`, `localite`, `contact`) VALUES
(1, 'phanie', '1234', 'abidjan', '40 70 99 58'),
(2, 'paul', '2345', 'cocody', '67'),
(3, 'paul', '1234', 'cocody', '67'),
(4, 'raoul', '23', 'abidjan', '245'),
(5, 'phanie', 'hghjghj', 'abidjan', '40 70 99 58'),
(6, 'phanie', 'dhfghfhg', 'abidjan', '40 70 99 58'),
(7, 'paul', 'rhdfh', 'cocody', '40 70 99 58'),
(8, 'phanie', 'feqf', 'abidjan', '40 70 99 58'),
(9, 'phanie', 'gcjgfj', 'cocody', '40 70 99 58'),
(10, 'phanie', 'qsqerf', 'abidjan', '40 70 99 58'),
(11, 'phanie', 'kljkl', 'abidjan', '40 70 99 58'),
(12, 'phanie', 'jnkjhkkjh', 'abidjan', '40 70 99 58'),
(13, 'koffi', 'TATI', 'abobo', '245'),
(14, 'tanira', 'AZERTY', 'abidjan', '67151211'),
(15, 'tanira', 'azerty', 'abidjan', '67151211'),
(16, 'nico', 'abcd', 'mahou', '67686390'),
(17, 'nico', 'ZAZA', 'azerty', '67151211'),
(18, 'baba', '&Ã‰\"\'(', 'angree', '67151211'),
(19, 'gbane', 'azerty', 'koumassi', '67151211'),
(20, 'nico', 'azerty', 'cocody', '67151211');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id` int(11) NOT NULL,
  `dates` date NOT NULL,
  `nom_articles` varchar(100) NOT NULL,
  `prix_articles` int(11) NOT NULL,
  `id_client` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id`, `dates`, `nom_articles`, `prix_articles`, `id_client`) VALUES
(1, '2019-04-24', 'Cisailles Ã  mÃ©tal', 50, '1'),
(2, '2019-04-24', 'Brocheuse Ã©lectrique', 120, '1'),
(3, '2019-04-24', 'Brocheuse Ã©lectrique', 120, '1'),
(4, '2019-04-24', 'Brocheuse Ã©lectrique', 120, '1'),
(5, '2019-04-24', 'Cisailles Ã  mÃ©tal', 50, '1'),
(6, '2019-04-24', 'Cisaille Ã  mÃ©tal', 50, '1'),
(7, '2019-04-24', 'Cintreuses Ã  tuyaux', 50, '1'),
(8, '2019-04-24', 'Brocheuse Ã©lectrique', 120, '1'),
(9, '2019-04-24', 'Cisailles Ã  mÃ©tal', 50, '1'),
(10, '2019-04-24', 'Brocheuse Ã©lectrique', 120, '17'),
(11, '2019-04-24', 'Arrache-clous', 50, '17'),
(12, '2019-04-24', 'pelle', 12, '17'),
(13, '2019-04-24', 'Pioche type terrassier - manche fibre - Forges de Magne', 12, '17'),
(14, '2019-04-24', 'Cintreuses Ã  tuyaux', 50, '17'),
(15, '2019-04-24', 'Yato 82288', 50, '1'),
(16, '2019-04-25', 'Arrache-clous', 50, '1'),
(17, '2019-04-25', 'Cisailles Ã  mÃ©tal', 50, '1'),
(18, '2019-04-25', 'Cintreuses Ã  tuyaux', 50, '1'),
(19, '2019-04-25', 'Brocheuse Ã©lectrique', 120, '1'),
(20, '2019-04-25', 'Cisailles Ã  mÃ©tal', 50, '1'),
(21, '2019-04-25', 'Cisaille Ã  mÃ©tal', 50, '1'),
(22, '2019-04-25', 'Cintreuses Ã  tuyaux', 50, '1'),
(23, '2019-04-25', 'manche a pelle', 12, '1'),
(24, '2019-04-25', 'Brocheuse Ã©lectrique', 120, '1'),
(25, '2019-04-25', 'Cisailles Ã  mÃ©tal', 50, '1'),
(26, '2019-04-25', 'Cisaille Ã  mÃ©tal', 50, '1'),
(27, '2019-04-25', 'Cintreuses Ã  tuyaux', 50, '1'),
(28, '2019-04-25', 'ClÃ© Ã  rochet sans-fil', 50, '1'),
(29, '2019-04-25', 'Cintreuses Ã  tuyaux', 50, '1'),
(30, '2019-04-25', 'ClÃ© Ã  rochet sans-fil', 50, '1'),
(31, '2019-04-25', 'Cisailles Ã  mÃ©tal', 50, '1'),
(32, '2019-04-25', 'Cisaille Ã  mÃ©tal', 50, '1'),
(33, '2019-04-25', 'Cintreuses Ã  tuyaux', 50, '1'),
(34, '2019-04-25', 'Cisailles Ã  mÃ©tal', 50, '19'),
(35, '2019-04-25', 'Brocheuse Ã©lectrique', 120, '20'),
(36, '2019-04-25', 'Cisailles Ã  mÃ©tal', 50, '20'),
(37, '2019-04-25', 'Cisaille Ã  mÃ©tal', 50, '20'),
(38, '2019-04-25', 'Cintreuses Ã  tuyaux', 50, '20');

-- --------------------------------------------------------

--
-- Structure de la table `commandees`
--

CREATE TABLE `commandees` (
  `id` int(11) NOT NULL,
  `dates` date NOT NULL,
  `id_client` int(200) NOT NULL,
  `prix` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commandees`
--

INSERT INTO `commandees` (`id`, `dates`, `id_client`, `prix`) VALUES
(1, '2019-04-24', 1, 1050),
(2, '2019-04-24', 1, 1050),
(3, '2019-04-24', 1, 1050),
(4, '2019-04-24', 1, 1050),
(5, '2019-04-24', 1, 1050),
(6, '2019-04-24', 1, 1050),
(7, '2019-04-24', 1, 1050),
(8, '2019-04-24', 1, 1050),
(9, '2019-04-24', 1, 1050),
(10, '2019-04-24', 1, 1050),
(11, '2019-04-24', 1, 1050),
(12, '2019-04-24', 1, 1050),
(13, '2019-04-24', 1, 1050),
(14, '2019-04-24', 1, 1050),
(15, '2019-04-24', 1, 1050),
(16, '2019-04-24', 1, 0),
(17, '2019-04-24', 1, 0),
(18, '2019-04-24', 1, 440),
(19, '2019-04-24', 17, 244),
(20, '2019-04-25', 1, 50),
(21, '2019-04-25', 1, 382),
(22, '2019-04-25', 1, 150),
(23, '2019-04-25', 19, 50),
(24, '2019-04-25', 20, 150);

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE `panier` (
  `id` int(11) NOT NULL,
  `nom_articles` varchar(200) NOT NULL,
  `prix_articles` varchar(200) NOT NULL,
  `id_articles` varchar(200) NOT NULL,
  `id_client` int(11) NOT NULL,
  `valider` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `panier`
--

INSERT INTO `panier` (`id`, `nom_articles`, `prix_articles`, `id_articles`, `id_client`, `valider`) VALUES
(10, 'Brocheuse Ã©lectrique', '120', '2', 14, 0),
(13, 'Brocheuse Ã©lectrique', '120', '2', 14, 0),
(14, 'Cisailles Ã  mÃ©tal', '50', '11', 14, 0),
(15, 'Cisaille Ã  mÃ©tal', '50', '12', 14, 0),
(16, 'pelle', '12', '25', 14, 0),
(21, 'Brocheuse Ã©lectrique', '120', '2', 16, 0),
(22, 'Ciseaux Ã  bois', '50', '15', 16, 0),
(23, 'manche a pelle', '12', '24', 16, 0),
(24, 'pelle', '12', '25', 16, 0),
(28, 'manche a pelle', '12', '24', 16, 0),
(30, 'Brocheuse Ã©lectrique', '120', '2', 16, 0),
(31, 'Brocheuse Ã©lectrique', '120', '2', 16, 0),
(32, 'Arrache-clous', '50', '39', 16, 0),
(44, '', '', '', 0, 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nom_articles` (`nom_articles`);

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id`),
  ADD KEY `code_commande` (`id_client`);

--
-- Index pour la table `commandees`
--
ALTER TABLE `commandees`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nom_clients` (`id_articles`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT pour la table `commandees`
--
ALTER TABLE `commandees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `panier`
--
ALTER TABLE `panier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
