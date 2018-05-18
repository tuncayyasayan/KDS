-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 18 May 2018, 10:17:07
-- Sunucu sürümü: 5.7.14
-- PHP Sürümü: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `veritabani1`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `test`
--

CREATE TABLE `test` (
  `adsoyad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `dogum` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `meslek` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `cevapa` int(11) NOT NULL DEFAULT '0',
  `cevapb` int(11) NOT NULL DEFAULT '0',
  `cevapc` int(11) NOT NULL DEFAULT '0',
  `cevapd` int(11) NOT NULL DEFAULT '0',
  `sonuc` varchar(11) COLLATE utf8_turkish_ci DEFAULT 'Kırmızı'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `test`
--

INSERT INTO `test` (`adsoyad`, `email`, `dogum`, `meslek`, `cevapa`, `cevapb`, `cevapc`, `cevapd`, `sonuc`) VALUES
('Tuncay Yasayan', 'tuncayyasayan@gmail.com', 'Kocaeli', 'Ogrenci', 22, 3, 3, 15, 'Kırmızı');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
