-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 27 Mars 2017 à 15:35
-- Version du serveur :  10.1.19-MariaDB
-- Version de PHP :  5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `webbanhang`
--

-- --------------------------------------------------------

--
-- Structure de la table `chitietsp`
--

CREATE TABLE `chitietsp` (
  `id_sp` int(11) NOT NULL,
  `tensp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhanh` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia` int(100) NOT NULL,
  `mota` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_loaisp` int(100) NOT NULL,
  `thutu` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `chitietsp`
--

INSERT INTO `chitietsp` (`id_sp`, `tensp`, `hinhanh`, `gia`, `mota`, `id_loaisp`, `thutu`) VALUES
(1, 'iphone', 'iphone-5s-16gb-13-300x300.jpg', 16000000, '<p>rat xin</p>', 10, 0),
(4, 'IPHONE 64GB', 'iphone-6s-64gb-400x450-400x450.png', 16, '', 13, 0),
(5, 'Camera 180', 'may-anh-canon-ixus-180-den.gif', 5, '<p>TOT</p>', 15, 0),
(6, 'IPAD 64GB', 'ipad-mini-3-cellular-icon-2-400x533.png', 15, '<p>tot</p>', 14, 0),
(7, 'camera KTS', '000000000010012461-may-anh-sony-DSC-W800-SC-E32-02.jpg', 12, '', 15, 0);

-- --------------------------------------------------------

--
-- Structure de la table `dangky`
--

CREATE TABLE `dangky` (
  `tenkhachhang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` int(255) NOT NULL,
  `diachi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dienthoai` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `dangky`
--

INSERT INTO `dangky` (`tenkhachhang`, `matkhau`, `email`, `diachi`, `dienthoai`) VALUES
('hoa', '123', 0, 'vinh long', 123123123),
('abc', 'abc', 0, 'asdas', 123123),
('khoc', '123', 0, 'ajdahjskd', 123123);

-- --------------------------------------------------------

--
-- Structure de la table `hieusp`
--

CREATE TABLE `hieusp` (
  `id_hieusp` int(11) NOT NULL,
  `tenhieusp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thutu` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `hieusp`
--

INSERT INTO `hieusp` (`id_hieusp`, `tenhieusp`, `thutu`) VALUES
(1, 'DELL', 1),
(2, 'SAMSUNG', 2),
(3, 'SAMSUNG', 2),
(4, 'MACOS', 3),
(5, 'OPPO', 4);

-- --------------------------------------------------------

--
-- Structure de la table `loaisp`
--

CREATE TABLE `loaisp` (
  `id_loaisp` int(11) NOT NULL,
  `tenloaisp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thutu` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `loaisp`
--

INSERT INTO `loaisp` (`id_loaisp`, `tenloaisp`, `thutu`) VALUES
(13, 'Iphone', 23),
(14, 'Ipad', 30),
(15, 'Camera', 30);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `chitietsp`
--
ALTER TABLE `chitietsp`
  ADD PRIMARY KEY (`id_sp`);

--
-- Index pour la table `hieusp`
--
ALTER TABLE `hieusp`
  ADD PRIMARY KEY (`id_hieusp`);

--
-- Index pour la table `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`id_loaisp`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `chitietsp`
--
ALTER TABLE `chitietsp`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `hieusp`
--
ALTER TABLE `hieusp`
  MODIFY `id_hieusp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `loaisp`
--
ALTER TABLE `loaisp`
  MODIFY `id_loaisp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
