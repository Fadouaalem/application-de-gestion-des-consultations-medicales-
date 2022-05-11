-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 05 août 2021 à 11:20
-- Version du serveur : 10.4.20-MariaDB
-- Version de PHP : 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `db_healthcare`
--

-- --------------------------------------------------------

--
-- Structure de la table `consultation`
--

CREATE TABLE `consultation` (
  `Id_consultation` int(50) NOT NULL,
  `Date_consultation` date NOT NULL,
  `Poids` int(4) NOT NULL,
  `Taille` int(6) NOT NULL,
  `Température` int(4) NOT NULL,
  `Fréquence_cardiaque` int(4) NOT NULL,
  `Pression_arterielle` double NOT NULL,
  `Glycemie` int(5) NOT NULL,
  `Diagnostique_médicale` text NOT NULL,
  `Maladie` varchar(50) NOT NULL,
  `Symptome` text NOT NULL,
  `Id_patient` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `dossier médicale`
--

CREATE TABLE `dossier médicale` (
  `Id_dossier_médicale` int(50) NOT NULL,
  `Nom_mutuelle` varchar(40) NOT NULL,
  `Numéro_mutuelle` int(50) NOT NULL,
  `Date_création` date NOT NULL,
  `Nom_médecin` varchar(20) NOT NULL,
  `Prénom_médecin` varchar(20) NOT NULL,
  `Spécialité_médecin` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `ordonnance`
--

CREATE TABLE `ordonnance` (
  `Id_ordonnance` int(50) NOT NULL,
  `Médicament` text NOT NULL,
  `Date_ordonnance` date NOT NULL,
  `Quantité_médicament` int(10) NOT NULL,
  `Dose` int(11) NOT NULL,
  `Id_consultation` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `patient`
--

CREATE TABLE `patient` (
  `Id_patient` int(50) NOT NULL,
  `Nom_patient` varchar(50) NOT NULL,
  `Prénom_patient` varchar(50) NOT NULL,
  `Date_naissance_patient` date NOT NULL,
  `Age_patient` int(3) NOT NULL,
  `Sexe_patient` varchar(10) NOT NULL,
  `Email_patient` varchar(30) NOT NULL,
  `Téléphone_patient` int(12) NOT NULL,
  `Adresse_patient` varchar(30) NOT NULL,
  `Group_sanguin` varchar(8) NOT NULL,
  `Situation_familiale_patient` varchar(20) NOT NULL,
  `Antécédents_médicaux` text NOT NULL,
  `Antécédents_chirurgiicaux` text NOT NULL,
  `Id_dossier_médicale` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `rendez-vous`
--

CREATE TABLE `rendez-vous` (
  `Id_rendez_vous` int(50) NOT NULL,
  `Titre` varchar(50) NOT NULL,
  `Date_rendez_vous` date NOT NULL,
  `Heure_debut` time NOT NULL,
  `Heure_fin` time NOT NULL,
  `Id_patient` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `consultation`
--
ALTER TABLE `consultation`
  ADD PRIMARY KEY (`Id_consultation`),
  ADD KEY `Id_patient` (`Id_patient`);

--
-- Index pour la table `dossier médicale`
--
ALTER TABLE `dossier médicale`
  ADD PRIMARY KEY (`Id_dossier_médicale`);

--
-- Index pour la table `ordonnance`
--
ALTER TABLE `ordonnance`
  ADD PRIMARY KEY (`Id_ordonnance`),
  ADD KEY `Id_consultation` (`Id_consultation`);

--
-- Index pour la table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`Id_patient`),
  ADD KEY `Id_dossier_médicale` (`Id_dossier_médicale`);

--
-- Index pour la table `rendez-vous`
--
ALTER TABLE `rendez-vous`
  ADD PRIMARY KEY (`Id_rendez_vous`),
  ADD KEY `Id_patient` (`Id_patient`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `consultation`
--
ALTER TABLE `consultation`
  MODIFY `Id_consultation` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `dossier médicale`
--
ALTER TABLE `dossier médicale`
  MODIFY `Id_dossier_médicale` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ordonnance`
--
ALTER TABLE `ordonnance`
  MODIFY `Id_ordonnance` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `patient`
--
ALTER TABLE `patient`
  MODIFY `Id_patient` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `rendez-vous`
--
ALTER TABLE `rendez-vous`
  MODIFY `Id_rendez_vous` int(50) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `consultation`
--
ALTER TABLE `consultation`
  ADD CONSTRAINT `consultation_ibfk_1` FOREIGN KEY (`Id_patient`) REFERENCES `patient` (`Id_patient`);

--
-- Contraintes pour la table `ordonnance`
--
ALTER TABLE `ordonnance`
  ADD CONSTRAINT `ordonnance_ibfk_1` FOREIGN KEY (`Id_consultation`) REFERENCES `consultation` (`Id_consultation`);

--
-- Contraintes pour la table `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `patient_ibfk_1` FOREIGN KEY (`Id_dossier_médicale`) REFERENCES `dossier médicale` (`Id_dossier_médicale`);

--
-- Contraintes pour la table `rendez-vous`
--
ALTER TABLE `rendez-vous`
  ADD CONSTRAINT `rendez-vous_ibfk_1` FOREIGN KEY (`Id_patient`) REFERENCES `patient` (`Id_patient`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
