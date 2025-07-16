-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 11 Nis 2023, 17:14:38
-- Sunucu sürümü: 10.4.27-MariaDB
-- PHP Sürümü: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `relaxxs`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `date` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `news`
--

INSERT INTO `news` (`id`, `date`, `content`) VALUES
(41, '26.01.23 02:12:54', 'discord.gg/lATES\r\n'),
(42, '27.01.23 17:20:17', 'LATES Panel üyeliğini farklı kişilere ucuz yoldan, komisyonculuğunu kovayalan kişiler tespit edilirse siteden Permanent BAN yiyecektir. !'),
(43, '27.01.23 17:20:18', 'Kendisini LATES Panel Adminiyim & Yetkilisiyim diye tanıtan şahıslara itibar etmeyiniz !'),
(44, '27.01.23 17:20:19', 'Üyelik satın alındıktan sonra iade kabul edilmez !'),
(45, '27.01.23 17:20:20', 'Sitemizde ban atılan kişiler tekrar üyelik alabilir !');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `token` varchar(255) NOT NULL,
  `last_ip` varchar(69) NOT NULL,
  `last_login` varchar(69) NOT NULL,
  `expire_date` varchar(69) NOT NULL,
  `access_level` int(11) NOT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `nick_color` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`uid`, `username`, `token`, `last_ip`, `last_login`, `expire_date`, `access_level`, `profile_image`, `nick_color`) VALUES
(2776, 'LATES', 'LATES', '', '', '275760-09-09', 1, '', '#1100ff'),
(2897, 'x', '0e7e8b15d630421ba46bc951906382e6', '', '', '2023-01-31', 0, NULL, NULL),
(2890, 'kejo', 'a69c5c593b08e59e481f63f5bd3a48b5', '', '', '2023-02-26', 0, NULL, NULL),
(2881, 'datablow', '2c130a17fee3d3f0fc62e63048d00acb', '', '', '2031-01-01', 0, '', '#ff0000'),
(2884, 'luci', '71cdf036523ce0c233e2b1f96745a9e2', '', '', '2031-01-01', 0, NULL, NULL),
(2883, 'finja', '72d901f0e59032ac931dac7cd86f92e5', '', '', '2031-01-01', 0, NULL, NULL),
(2885, 'chastity', 'f8e570dd8c249b06875f13dbbc84cafc', '', '', '2023-02-02', 0, NULL, NULL),
(2896, 'escobar', '68e3b7f2950c5fe68d1d5c8cb68d6aa3', '', '', '2024-02-26', 0, NULL, NULL),
(2887, 'berke', 'c9ff7aeff492f95aa47108513abb6916', '', '', '2023-02-26', 0, NULL, NULL),
(2910, 'Mast?r', '1a301d61efa45c0873c7cc0af8b62f63', '', '', '2023-02-28', 0, NULL, NULL),
(2889, 'crewler', '461cbe0f6f4d99fdd963162baa3ae702', '', '', '2023-01-29', 0, NULL, NULL),
(2892, 'decaf', '1ca21ecd0ad1c22edb0ce44212674d0b', '', '', '2023-02-26', 0, NULL, NULL),
(2894, 'favela', 'facf5c74fa09a19debefe6028898370f', '', '', '2023-01-27', 0, NULL, NULL),
(2895, 'ortak', 'd9a3d51da78f47ac474055d6249c1040', '', '', '2031-09-26', 0, NULL, NULL),
(2898, 'sonesab', 'dae86c3911e3bcb5592b7984d92caddb', '', '', '2023-02-28', 0, NULL, NULL),
(2899, 'orrrospu cocugu', 'bb3b0ca55b08dab96ce146680d0461cd', '', '', '2023-01-29', 0, NULL, NULL),
(2900, 'x1', '64777da866334eb9adb4408cd5326135', '', '', '2023-01-29', 0, NULL, NULL),
(2902, 'xx', 'b84dd50fd526257416c4fb5e2a3a9e39', '', '', '2023-01-28', 0, NULL, NULL),
(2903, 'vipsead', 'c4a4c6424797db641b103c76eae0bdb1', '', '', '2023-02-28', 0, NULL, NULL),
(2904, 'Explorer', '7ee32502c91bc621b0f6d5ea8733e67a', '', '', '2030-01-27', 0, NULL, NULL),
(2905, 'ninja95', 'd17f175961485ad2be5dca9aa6f54c8f', '', '', '2030-02-27', 0, NULL, NULL),
(2906, 'gottensikici', 'ce15f2f355f8fa14a257fb49655267b4', '', '', '2031-01-31', 1, NULL, NULL),
(2907, 'amciksikici', '28e45fc8c394b7a0f89a5e0df5479113', '', '', '2031-01-31', 1, NULL, NULL),
(2908, 'xKralTR', '174b1c17b2277a68afb7f44a23db432e', '', '', '2029-01-01', 0, NULL, NULL),
(2909, 'justynaserillo', 'cc2bb8a1b4c1393ee6d950fedc54a66a', '', '', '2029-02-13', 0, NULL, NULL),
(2911, 'ufo', 'c9eadea7978783d54fc8d95786f3086c', '', '', '2054-01-28', 0, NULL, NULL),
(2912, 'aliso', '6d6eca02d978cb1a83ae78c5a2788b41', '', '', '2023-01-29', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `whitelist`
--

CREATE TABLE `whitelist` (
  `id` int(11) NOT NULL,
  `tc` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Tablo döküm verisi `whitelist`
--

INSERT INTO `whitelist` (`id`, `tc`) VALUES
(21, 'NTA4NjAyMDg3NDA='),
(22, 'MTA4ODM1Mjc2MDA='),
(23, 'ZTE4NzUyYjI0ZWMwNjE3NzZlYmVhMjY0ZGQ2ZWNiMTI=');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `uid` (`uid`);

--
-- Tablo için indeksler `whitelist`
--
ALTER TABLE `whitelist`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2913;

--
-- Tablo için AUTO_INCREMENT değeri `whitelist`
--
ALTER TABLE `whitelist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
