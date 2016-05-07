-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2016 at 08:53 PM
-- Server version: 5.7.9
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cibiasadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

DROP TABLE IF EXISTS `berita`;
CREATE TABLE IF NOT EXISTS `berita` (
  `berita_id` int(11) NOT NULL AUTO_INCREMENT,
  `berita_kategori_id` int(11) DEFAULT NULL,
  `judul` varchar(100) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `isi` longtext NOT NULL,
  `tanggal` datetime NOT NULL,
  `jenis` enum('berita','halaman') NOT NULL,
  `status` enum('draft','publish') NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`berita_id`),
  KEY `berita_kategori_id` (`berita_kategori_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `berita_kategori`
--

DROP TABLE IF EXISTS `berita_kategori`;
CREATE TABLE IF NOT EXISTS `berita_kategori` (
  `berita_kategori_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(100) NOT NULL,
  `slug` varchar(200) NOT NULL,
  PRIMARY KEY (`berita_kategori_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita_kategori`
--

INSERT INTO `berita_kategori` (`berita_kategori_id`, `nama_kategori`, `slug`) VALUES
(4, 'Humor', 'humor');

-- --------------------------------------------------------

--
-- Table structure for table `konfigurasi`
--

DROP TABLE IF EXISTS `konfigurasi`;
CREATE TABLE IF NOT EXISTS `konfigurasi` (
  `konfigurasi_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_key` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `tipe` varchar(15) NOT NULL,
  PRIMARY KEY (`konfigurasi_id`),
  UNIQUE KEY `nama_key` (`nama_key`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konfigurasi`
--

INSERT INTO `konfigurasi` (`konfigurasi_id`, `nama_key`, `isi`, `tipe`) VALUES
(1, 'nama-aplikasi', 'Tes Aplikasi', 'umum'),
(2, 'company-name', 'Nama Perusahaan', 'umum'),
(3, 'company-address', 'Jalan Company', 'umum'),
(4, 'company-phone', '123000928', 'umum'),
(5, 'company-email', 'email@email.com', 'umum'),
(6, 'tema-aktif', 'lte', 'tema'),
(7, 'tema-logo', 'logo-c4ca4238a0b923820dcc509a6f75849b.png', 'tema');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

DROP TABLE IF EXISTS `userlogin`;
CREATE TABLE IF NOT EXISTS `userlogin` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `akses` enum('admin','member') NOT NULL,
  `photo` varchar(100) NOT NULL,
  `status` enum('aktif','banned') NOT NULL,
  `terakhir_login` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`user_id`, `nama`, `username`, `password`, `akses`, `photo`, `status`, `terakhir_login`) VALUES
(1, 'Administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'ava-c4ca4238a0b923820dcc509a6f75849b.jpg', 'aktif', '2016-04-28 22:08:41');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
