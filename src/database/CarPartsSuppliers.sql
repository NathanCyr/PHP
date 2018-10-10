-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 10 Octobre 2018 à 19:02
-- Version du serveur :  5.6.37
-- Version de PHP :  7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `CarPartsSuppliers`
--

-- --------------------------------------------------------

--
-- Structure de la table `cars`
--

CREATE TABLE IF NOT EXISTS `cars` (
  `id` int(11) NOT NULL,
  `car_manufacturer_code` int(11) NOT NULL,
  `car_year_of_manufacture` int(11) NOT NULL,
  `model` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `other_car_details` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `cars`
--

INSERT INTO `cars` (`id`, `car_manufacturer_code`, `car_year_of_manufacture`, `model`, `other_car_details`, `created`, `modified`) VALUES
(3, 3, 2010, 'WRX', 'STI', '2018-09-17 17:22:31', '2018-09-17 17:22:31'),
(4, 55, 2222, 'erwer', 'werwerwer', '2018-09-17 17:23:21', '2018-09-17 17:23:21');

-- --------------------------------------------------------

--
-- Structure de la table `i18n`
--

CREATE TABLE IF NOT EXISTS `i18n` (
  `id` int(11) NOT NULL,
  `locale` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `foreign_key` int(10) NOT NULL,
  `field` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `parts`
--

CREATE TABLE IF NOT EXISTS `parts` (
  `id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `parent_part_id` int(11) NOT NULL,
  `part_level_code` int(11) NOT NULL,
  `part_manufacturer_code` int(11) NOT NULL,
  `part_type_code` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `part_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `weight` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ref_part_manufacturers`
--

CREATE TABLE IF NOT EXISTS `ref_part_manufacturers` (
  `id` int(11) NOT NULL,
  `part_manufacturer_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ref_part_types`
--

CREATE TABLE IF NOT EXISTS `ref_part_types` (
  `id` int(11) NOT NULL,
  `part_type_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `suppliers`
--

CREATE TABLE IF NOT EXISTS `suppliers` (
  `id` int(11) NOT NULL,
  `supplier_details` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'user',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`, `created`, `modified`) VALUES
(2, 'test', 'test@test.ca', '$2y$10$Uwcq3uGvfmiI8oxt/aCA2unIFZzcTVcZlikeSL/Tawo7qDMiBPOPy', 'user', '2018-09-17 17:10:35', '2018-09-17 17:10:35'),
(7, 'super@super.com', 'super@super.com', '$2y$10$4Vjv.CRhWLnzcAZfMXQt9Ol23fzZ1j1/PGHAm2wS5A0fIUORS2qkO', 'super', '2018-10-04 17:10:05', '2018-10-04 17:10:05'),
(8, 'admin', 'admin@admin.com', '$2y$10$n1cx1nHMptBtYE0EyuZn7u94JDR1GgVH6FVoWkSws6ipQK28gX0jO', 'admin', '2018-10-04 17:11:20', '2018-10-04 17:11:20');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `car_manufacturer_code` (`car_manufacturer_code`),
  ADD KEY `car_manufacturer_code_2` (`car_manufacturer_code`);

--
-- Index pour la table `i18n`
--
ALTER TABLE `i18n`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `I18N_LOCALE_FIELD` (`locale`,`model`,`foreign_key`,`field`),
  ADD KEY `I18N_FIELD` (`model`,`foreign_key`,`field`);

--
-- Index pour la table `parts`
--
ALTER TABLE `parts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `car_id` (`car_id`),
  ADD KEY `parent_part_id` (`parent_part_id`),
  ADD KEY `part_level_code` (`part_level_code`),
  ADD KEY `part_manufacturer_code` (`part_manufacturer_code`),
  ADD KEY `part_type_code` (`part_type_code`),
  ADD KEY `supplier_id` (`supplier_id`);

--
-- Index pour la table `ref_part_manufacturers`
--
ALTER TABLE `ref_part_manufacturers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ref_part_types`
--
ALTER TABLE `ref_part_types`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `i18n`
--
ALTER TABLE `i18n`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `parts`
--
ALTER TABLE `parts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `ref_part_manufacturers`
--
ALTER TABLE `ref_part_manufacturers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `ref_part_types`
--
ALTER TABLE `ref_part_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `parts`
--
ALTER TABLE `parts`
  ADD CONSTRAINT `parts_ibfk_1` FOREIGN KEY (`car_id`) REFERENCES `cars` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `parts_ibfk_2` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `parts_ibfk_3` FOREIGN KEY (`part_type_code`) REFERENCES `ref_part_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `parts_ibfk_4` FOREIGN KEY (`part_manufacturer_code`) REFERENCES `ref_part_manufacturers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
