-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 12 mai 2023 à 23:31
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `managementzoo`
--

-- --------------------------------------------------------

--
-- Structure de la table `admintabel`
--

CREATE TABLE `admintabel` (
  `id` int(11) NOT NULL,
  `addresse` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `admintabel`
--

INSERT INTO `admintabel` (`id`, `addresse`, `phone`, `email`) VALUES
(1, 'ben3aknnounjj', 214748, 'hanene@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `animalmanagement`
--

CREATE TABLE `animalmanagement` (
  `nameid` int(11) NOT NULL,
  `num_cage` enum('1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25') NOT NULL,
  `name` varchar(255) NOT NULL,
  `feedingdone` enum('Yes','No','','') NOT NULL,
  `health` varchar(255) NOT NULL,
  `thedisease` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `animalmanagement`
--

INSERT INTO `animalmanagement` (`nameid`, `num_cage`, `name`, `feedingdone`, `health`, `thedisease`) VALUES
(32, '2', 'Spinner', 'No', 'High Severity', 'Viral infection'),
(33, '3', 'Spinner', 'No', 'Medium Severity', ''),
(34, '4', 'Parrot', 'Yes', 'Low Severity', ''),
(35, '5', 'Spinner', 'No', 'High Severity', 'Viral infection'),
(36, '6', 'Elephant', 'Yes', 'High Severity', 'Viral infection'),
(37, '7', 'Elephant', 'No', 'High Severity', 'Accident'),
(38, '8', 'Monkey', 'No', 'Medium Severity', ''),
(39, '9', 'Monkey', 'Yes', 'Low Severity', ''),
(40, '10', 'Monkey', 'Yes', 'Low Severity', ''),
(41, '11', 'Peacock', 'Yes', 'Low Severity', ''),
(42, '11', 'Peacock', 'No', 'High Severity', 'Viral infection'),
(43, '12', 'Giraffe', 'Yes', 'Low Severity', ''),
(44, '12', 'Giraffe', 'No', 'High Severity', 'Accident'),
(45, '14', 'Lion', 'Yes', 'Low Severity', ''),
(46, '15', 'Lion', 'Yes', 'Low Severity', ''),
(47, '2', 'Spinner', 'No', 'High Severity', 'Viral infection'),
(48, '3', 'Spinner', 'No', 'Medium Severity', ''),
(49, '4', 'Parrot', 'Yes', 'Low Severity', ''),
(50, '1', '', '', '', ''),
(51, '1', '', '', '', ''),
(52, '1', '', '', '', ''),
(53, '1', '', '', '', ''),
(54, '1', '', '', '', ''),
(55, '1', '', '', '', ''),
(56, '1', 'fdfsd', '', 'dvd', 'dfd');

-- --------------------------------------------------------

--
-- Structure de la table `animaltabel`
--

CREATE TABLE `animaltabel` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `species` varchar(255) NOT NULL,
  `num_cage` int(100) NOT NULL,
  `zoojoindate` date NOT NULL,
  `dietrary` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `animaltabel`
--

INSERT INTO `animaltabel` (`id`, `name`, `species`, `num_cage`, `zoojoindate`, `dietrary`) VALUES
(4, 'Spinnerrr', 'Mammals', 2, '0000-00-00', '300 Kg Of Plants'),
(5, 'Spinner', 'Mammals', 3, '2022-01-02', '300 Kg Of Plants'),
(6, 'Parrot', 'Brids', 4, '2022-01-04', '2 Kg Of Fruits'),
(7, 'Parrot', 'Brids', 5, '2022-01-05', '2 Kg Of Fruits'),
(8, 'Elephant', 'Mammals', 6, '2022-01-09', '500 Kg Of Plants'),
(9, 'Elephant', 'Mammals', 7, '2022-01-09', '500 Kg Of Plants'),
(10, 'Monkey', 'Mammals', 8, '2022-01-10', '30 Bananas'),
(11, 'Monkey', 'Mammals', 9, '2022-01-11', '30 Bananas'),
(12, 'Monkey', 'Mammals', 10, '2022-01-12', '30 Bananas'),
(13, 'Peacock', 'Brids', 11, '2022-01-13', '2 Kg Of Fruits'),
(14, 'Peacock', 'Brids', 11, '2022-01-13', '2 Kg Of Fruits'),
(15, 'Giraffe', 'Mammals', 12, '2022-01-14', '500 Kg Of Plants'),
(16, 'Giraffe', 'Mammals', 12, '2022-01-15', '500 Kg Of Plants'),
(17, 'Lion', 'Mammals', 14, '2022-01-16', '500 Kg Of Red Meats'),
(18, 'Lion', 'Mammals', 15, '2022-01-16', '500 Kg Of Red Meats'),
(19, 'Lion', 'Mammals', 16, '2022-01-17', '500 Kg Of Red Meats'),
(20, 'Spinner', 'Mammals', 1, '2022-01-02', '300 Kg Of Plants'),
(21, 'Spinner', 'Mammals', 2, '2022-01-02', '300 Kg Of Plants'),
(22, 'Spinner', 'Mammals', 3, '2022-01-02', '300 Kg Of Plants'),
(23, 'Parrot', 'Brids', 4, '2022-01-04', '2 Kg Of Fruits'),
(24, 'Parrot', 'Brids', 5, '2022-01-05', '2 Kg Of Fruits'),
(25, 'Elephant', 'Mammals', 6, '2022-01-09', '500 Kg Of Plants'),
(26, 'Elephant', 'Mammals', 7, '2022-01-09', '500 Kg Of Plants'),
(27, 'Monkey', 'Mammals', 8, '2022-01-10', '30 Bananas'),
(28, 'Monkey', 'Mammals', 9, '2022-01-11', '30 Bananas'),
(29, 'Monkey', 'Mammals', 10, '2022-01-12', '30 Bananas'),
(30, 'Peacock', 'Brids', 11, '2022-01-13', '2 Kg Of Fruits'),
(31, 'Peacock', 'Brids', 11, '2022-01-13', '2 Kg Of Fruits'),
(32, 'Giraffe', 'Mammals', 12, '2022-01-14', '500 Kg Of Plants'),
(33, 'Giraffe', 'Mammals', 12, '2022-01-15', '500 Kg Of Plants'),
(34, 'Lion', 'Mammals', 14, '2022-01-16', '500 Kg Of Red Meats'),
(35, 'Lion', 'Mammals', 15, '2022-01-16', '500 Kg Of Red Meats'),
(36, 'Lion', 'Mammals', 16, '2022-01-17', '500 Kg Of Red Meats'),
(37, 'Bear', 'Mammals', 17, '2022-01-18', '120 Of Fish'),
(42, '', '', 0, '0000-00-00', ''),
(47, 'nmbjhvjhvhj', 'Mammals', 1, '0000-00-00', '1');

-- --------------------------------------------------------

--
-- Structure de la table `bookedticketstabel`
--

CREATE TABLE `bookedticketstabel` (
  `id` int(11) NOT NULL,
  `BookedFor` varchar(255) NOT NULL,
  `childTickets` int(100) NOT NULL,
  `RegularTickets` int(100) NOT NULL,
  `VisitDate` date NOT NULL,
  `totalprice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `bookedticketstabel`
--

INSERT INTO `bookedticketstabel` (`id`, `BookedFor`, `childTickets`, `RegularTickets`, `VisitDate`, `totalprice`) VALUES
(28, 'nnn', 1, 2, '2009-12-09', 1400),
(29, 'h1640@gmail.com', 1, 2, '2029-12-09', 1400),
(30, 'h1640@gmail.com', 1, 1, '2009-12-09', 900),
(31, 'h1640@gmail.com', 12, 0, '2009-12-09', 4800),
(34, 'hanene@gmail.com', 3, 1, '2009-12-09', 1700),
(35, 'hanene@gmail.com', 3, 1, '2009-12-09', 1700);

-- --------------------------------------------------------

--
-- Structure de la table `calendar`
--

CREATE TABLE `calendar` (
  `id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `startdate` datetime NOT NULL,
  `enddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `calendar`
--

INSERT INTO `calendar` (`id`, `description`, `startdate`, `enddate`) VALUES
(1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'ffdfbdf', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `contacttabel`
--

CREATE TABLE `contacttabel` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `contacttabel`
--

INSERT INTO `contacttabel` (`id`, `fullname`, `email`, `message`) VALUES
(4, 'hanenebettayeb', 'bettayeb285@gmail.com', 'i like it...thank you!');

-- --------------------------------------------------------

--
-- Structure de la table `employeetabel`
--

CREATE TABLE `employeetabel` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(10) NOT NULL,
  `ContractStartDate` date NOT NULL,
  `ContractEndDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `employeetabel`
--

INSERT INTO `employeetabel` (`id`, `name`, `email`, `phone`, `ContractStartDate`, `ContractEndDate`) VALUES
(1, 'hanenebettayeb', 'hanenebettayeb12@gmail.com', 699589380, '2022-03-01', '0000-00-00'),
(2, 'rahmabettayeb', 'rahmabettayeb12@gmail.com', 699339380, '2022-04-01', '0000-00-00'),
(3, 'nournour', 'nourb11@gmail.com', 799589380, '2022-04-12', '0000-00-00'),
(4, 'hanenebettayeb', 'hanenebettayeb12@gmail.com', 699589380, '2022-03-01', '2022-04-02'),
(5, 'Sibty', 'ssbett12@gmail.com', 699456780, '2022-03-05', '0000-00-00'),
(6, 'Yasminammar', 'yasm12@gmail.com', 798678946, '2022-12-07', '0000-00-00');

-- --------------------------------------------------------

--
-- Structure de la table `eventtabel`
--

CREATE TABLE `eventtabel` (
  `id` int(11) NOT NULL,
  `eventname` varchar(255) NOT NULL,
  `eventstartdate` date NOT NULL,
  `eventduration` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `eventtabel`
--

INSERT INTO `eventtabel` (`id`, `eventname`, `eventstartdate`, `eventduration`) VALUES
(1, 'Openinig Day Celebration', '2022-02-12', '3 Dayes'),
(2, 'World Plant Day', '2022-03-21', '1 Dayes'),
(3, 'World Water Day', '2022-03-22', '2 Dayes'),
(7, 'nbn', '2023-06-03', 'b'),
(8, '', '0000-00-00', ''),
(9, '', '0000-00-00', ''),
(10, '', '0000-00-00', ''),
(11, '', '0000-00-00', ''),
(12, '', '0000-00-00', ''),
(13, '', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Structure de la table `locationtabel`
--

CREATE TABLE `locationtabel` (
  `id` int(11) NOT NULL,
  `day` varchar(255) NOT NULL,
  `hours` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `locationtabel`
--

INSERT INTO `locationtabel` (`id`, `day`, `hours`) VALUES
(10, '', '1'),
(11, '', '1'),
(12, '', ''),
(13, 'nn', '3');

-- --------------------------------------------------------

--
-- Structure de la table `ticketsmanagement`
--

CREATE TABLE `ticketsmanagement` (
  `id` int(11) NOT NULL,
  `childTickets` varchar(255) NOT NULL,
  `RegularTickets` varchar(255) NOT NULL,
  `ourtourismtrips` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `ticketsmanagement`
--

INSERT INTO `ticketsmanagement` (`id`, `childTickets`, `RegularTickets`, `ourtourismtrips`) VALUES
(8, '400 DA', '500 DA', '');

-- --------------------------------------------------------

--
-- Structure de la table `visitorrtabel`
--

CREATE TABLE `visitorrtabel` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `visitorrtabel`
--

INSERT INTO `visitorrtabel` (`id`, `fullname`, `email`, `password`) VALUES
(1, 'hanenebettayeb', 'hanenebettayeb284@gmail.com', '1234567890'),
(2, 'hanene', 'hanenebettayeb284@gmail.com', '123hanen'),
(3, 'Ahmed', 'anana12@gmail.com', 'qwer123'),
(4, 'Sebty', 'bettayebhanene12@gmail.com', '$2y$10$i6ScwBdkKCqTmmI1n7zZSuhgN.IoeFcjE4W0CBp7IlYHvufYsi4Dm'),
(5, 'hanene', 'nanabett12@gmail.com', '$2y$10$.XmC9vIV2OP99qffANfe2eoZ8oCg2RBzEbpDO05V6B9LQY2dbngZS'),
(6, 'hanene', 'bettayebhanene112@gmail.com', '$2y$10$sDZ5gk3ui0xXDE1SF1H5kuOcrZPi.SHuROkls.AP8oY.f2DWo7qc.'),
(7, 'hanene', 'bettayebhanene125@gmail.com', '$2y$10$VMpyC7vjdDkgL07vALOWb.WzVbMe37Y37dZHwME6CWUMsfuYApjya'),
(8, 'yasminyasm', 'yasm23@gmail.com', '$2y$10$eELiBeGWYzTrYXZXtl5d8.CwzD5KLbOnOmqMNRvazZCkikK2JkORW'),
(9, 'hanenebettayeb', 'hanenebettayeb1234@gmail.com', '$2y$10$YgmSkZwCdBRRRPhZcBBgEOr/VwlvtqGoZxdtlmnNWiXEO.yGl/6ue'),
(10, 'chaimacha', 'chacha123@gmial.com', '$2y$10$8IZwBLzQoVc9BpOTSPb5MeH54ZybbQzfFe0CZdvDVZDSxpr05gqoC'),
(11, 'hanene', 'bettayebehanene123@gmail.com', '$2y$10$3kT0M0fsWtpGsZTgww3dRux5K3jDm19fZ/Kys8jdJJCQqrB48nnke'),
(12, 'hanene', 'bettbett12@gmail.com', '$2y$10$qxGe4GiYmM3IkfO9jioE9.gjJN7WHhKfAxZrxoQ0.QxwBja4I7y1O'),
(13, 'hanenebettayeb', 'bettayebhanene285@gmail.com', '$2y$10$6tI2HDCnLbVcVM7A8WF9KOPK/we2hyZ7nG9pDQf9SI..mJClQPcrq'),
(14, 'hanenenana', 'bettayebhanene16@gmail.com', '$2y$10$MBBD/kI.pteAfQ271IK10udSKtWOIqr6VKt2yvU7Ub.ent3tul4ua'),
(15, 'Sebty', 'sebtyty@gmail.com', '$2y$10$M35c97g.fVNS.hcNxQm5AuE1qWEwHlljz8sp4SHojKj61.GmimlmC'),
(16, 'sarasara', 'sararr12@gmail.com', '12345678690'),
(17, 'nour', 'nour123@gmail.com', '12345678'),
(18, 'hanene', 'bett124@gmail.com', '$2y$10$nrlA3ZIlsNjyujAljK.nZO2hCOvBpza3lIJvA4eRIVNUK2Fg7uoUW'),
(19, 'hanene ', 'nanabettayeb244@gmail.com', '$2y$10$jb3QEYsjMuEBYrJsoo2d2e8IiDZat4cQaRRvTcmD/wQlKY2lpxqdS'),
(21, 'nour ', 'nourr123@gmail.com', '$2y$10$Ly.h9mjr8tWesShRrMPQx.zdce9hDTtk1.4P9pOpmVBAZcmVvmMwu'),
(22, 'nourhanne', 'nanarr12@gmail.com', '$2y$10$tiLVsOOZybPHjAhoVhf7AO8mXwZWdMMWzMBQfuxsI2gufVttT.IMi'),
(23, 'hanene', 'hanenenana123@gmail.com', '$2y$10$tlGKKTDwTxNppwbwqezUpeedu674pBbH/DzW5f7044W4/n4n6u34W'),
(24, 'hanene', 'bettayebehanene00@gmail.com', '$2y$10$4qg6diBon6Fm2fpNBDUdj.OZEWKTMGxYYWXDvpCR2oQnP2ui05fHm'),
(25, 'Sebty', 'nana10@gmail.com', '$2y$10$3.QKRcGixCc.J2s8xCmvveECZu/LGxn.4nLvMzsfqD9EjDlBIK0VK'),
(26, 'hanene', 'hanene1640@gmail.com', '$2y$10$JNkpZL8G8i8Wo9XHIMAE5.LayBYtgGmnK0RZwRZ9emKwYuIXUyaSu'),
(27, 'hanene', 'h1640@gmail.com', '$2y$10$c1.34jyBA77fwlrs7xMZ0.gRBZbYnF8fLAa6d49I9T6MdxVqcvjD6');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admintabel`
--
ALTER TABLE `admintabel`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `animalmanagement`
--
ALTER TABLE `animalmanagement`
  ADD PRIMARY KEY (`nameid`);

--
-- Index pour la table `animaltabel`
--
ALTER TABLE `animaltabel`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `bookedticketstabel`
--
ALTER TABLE `bookedticketstabel`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `calendar`
--
ALTER TABLE `calendar`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contacttabel`
--
ALTER TABLE `contacttabel`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `employeetabel`
--
ALTER TABLE `employeetabel`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `eventtabel`
--
ALTER TABLE `eventtabel`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `locationtabel`
--
ALTER TABLE `locationtabel`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ticketsmanagement`
--
ALTER TABLE `ticketsmanagement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `visitorrtabel`
--
ALTER TABLE `visitorrtabel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admintabel`
--
ALTER TABLE `admintabel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `animalmanagement`
--
ALTER TABLE `animalmanagement`
  MODIFY `nameid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT pour la table `animaltabel`
--
ALTER TABLE `animaltabel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT pour la table `bookedticketstabel`
--
ALTER TABLE `bookedticketstabel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT pour la table `calendar`
--
ALTER TABLE `calendar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `contacttabel`
--
ALTER TABLE `contacttabel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `employeetabel`
--
ALTER TABLE `employeetabel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `eventtabel`
--
ALTER TABLE `eventtabel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `locationtabel`
--
ALTER TABLE `locationtabel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `ticketsmanagement`
--
ALTER TABLE `ticketsmanagement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `visitorrtabel`
--
ALTER TABLE `visitorrtabel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
