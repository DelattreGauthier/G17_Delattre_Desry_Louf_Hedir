-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 28, 2024 at 07:00 PM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projet_wikijeuxvideos`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `Nom` varchar(20) NOT NULL,
  `Prenom` varchar(20) NOT NULL,
  `Courriel` varchar(50) NOT NULL,
  `Telephone` varchar(10) NOT NULL,
  `Pseudonyme` varchar(40) NOT NULL,
  `Mot_de_Passe` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`Nom`, `Prenom`, `Courriel`, `Telephone`, `Pseudonyme`, `Mot_de_Passe`) VALUES
('Admin', 'Administrateur', 'admin.wiki@jeux.videos.com', '0000000000', 'Admin', '123Admin123'),
('Client', 'Client', 'client.wiki@jeux.videos.com', '0000000000', 'Client', '123Client123'),
('Delattre', 'Gauthier', 'gauthier.delattre@student.junia.com', '0000670000', 'GauthierD', 'motdepasse1'),
('Desry', 'Loic', 'loic.desry@student.junia.com', '0122334455', 'LoicDesry', 'motdepasse23');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `Comment` varchar(21782) NOT NULL,
  `Courriel` varchar(50) NOT NULL,
  `Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`Comment`, `Courriel`, `Id`) VALUES
('Ce site est excellent, je dirais même plus, qu\'il est EXCELLENT', 'loic.desry@student.junia.com', 1),
('Les informations dans la base de données sont corrects', 'admin.wiki@jeux.videos.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `contact_connected`
--

CREATE TABLE `contact_connected` (
  `Demande_contact_connected` varchar(30) NOT NULL,
  `Message_contact_connected` varchar(20000) NOT NULL,
  `Courriel` varchar(50) NOT NULL,
  `Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_connected`
--

INSERT INTO `contact_connected` (`Demande_contact_connected`, `Message_contact_connected`, `Courriel`, `Id`) VALUES
('sugg', 'Il faudrait rajouter des LED sur le site', 'gauthier.delattre@student.junia.com', 1),
('prob', 'Il manque des panneaux sur le site, je me suis perdu.', 'loic.desry@student.junia.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `contact_not_connected`
--

CREATE TABLE `contact_not_connected` (
  `Genre` varchar(5) NOT NULL,
  `Nom` varchar(20) NOT NULL,
  `Prenom` varchar(20) NOT NULL,
  `Courriel` varchar(50) NOT NULL,
  `Telephone` varchar(10) NOT NULL,
  `Pseudonyme` varchar(20) NOT NULL,
  `Demande` varchar(30) NOT NULL,
  `Message` varchar(20000) NOT NULL,
  `Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_not_connected`
--

INSERT INTO `contact_not_connected` (`Genre`, `Nom`, `Prenom`, `Courriel`, `Telephone`, `Pseudonyme`, `Demande`, `Message`, `Id`) VALUES
('autre', 'MyName', 'FirstName', 'email@gmail.com', '0000000000', 'MonPseudo', 'sugg', 'Ceci est une suggestion envoyé par quelqu\'un n\'ayant pas de compte.', 1),
('mr', 'English', 'Arthur', 'mail@mail.fr', '0100000001', 'As', 'prob', 'This is a technical issue', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`Courriel`),
  ADD KEY `Courriel` (`Courriel`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_2` (`Id`),
  ADD KEY `Courriel` (`Courriel`);

--
-- Indexes for table `contact_connected`
--
ALTER TABLE `contact_connected`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Courriel` (`Courriel`,`Id`);

--
-- Indexes for table `contact_not_connected`
--
ALTER TABLE `contact_not_connected`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_connected`
--
ALTER TABLE `contact_connected`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_not_connected`
--
ALTER TABLE `contact_not_connected`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
