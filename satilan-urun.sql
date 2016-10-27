-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Sep 09, 2016 at 04:15 PM
-- Server version: 5.6.31
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `yrmilyas_siemens`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `user_id` text COLLATE utf8_turkish_ci NOT NULL,
  `user_pw` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `user_pw`) VALUES
('ilyas', 'ilyas'),
('meral', 'meral'),
('admin', 'Apo511');

-- --------------------------------------------------------

--
-- Table structure for table `servis`
--

CREATE TABLE IF NOT EXISTS `servis` (
  `nS_no` int(11) NOT NULL AUTO_INCREMENT,
  `tM_ad` text COLLATE utf8_turkish_ci NOT NULL,
  `tM_tel` text COLLATE utf8_turkish_ci NOT NULL,
  `tM_adres` text COLLATE utf8_turkish_ci NOT NULL,
  `tS_yapilan` text COLLATE utf8_turkish_ci NOT NULL,
  `tS_teknisyen` text COLLATE utf8_turkish_ci NOT NULL,
  `tS_not` text COLLATE utf8_turkish_ci NOT NULL,
  `dS_tarih` date NOT NULL,
  `nOdeme` int(11) NOT NULL,
  `tO_durum` text COLLATE utf8_turkish_ci NOT NULL,
  `nTahsil_edilen` int(11) NOT NULL,
  PRIMARY KEY (`nS_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `servis`
--

INSERT INTO `servis` (`nS_no`, `tM_ad`, `tM_tel`, `tM_adres`, `tS_yapilan`, `tS_teknisyen`, `tS_not`, `dS_tarih`, `nOdeme`, `tO_durum`, `nTahsil_edilen`) VALUES
(4, 'nuray kaba', '(535) 700-8712', 'gÃ¼llÃ¼k', 'ArÄ±za', 'Vedat Kavala', '', '2015-10-08', 0, '2', 0),
(5, 'abbas evran', '(538) 386-4009', 'pÄ±narcÄ±k', 'Ek Garanti', 'Vedat Kavala', '', '2015-10-08', 120, '2', 120);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
