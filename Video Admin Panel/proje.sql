-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 18 Oca 2021, 18:22:34
-- Sunucu sürümü: 10.4.17-MariaDB
-- PHP Sürümü: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `proje`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('', ''),
('', ''),
('ilke', '123');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `link` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `description` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `video`
--

INSERT INTO `video` (`id`, `link`, `description`, `date_added`, `is_deleted`) VALUES
(1, 'https://www.youtube.com/watch?v=3hY0lxS-Nbw', 'Gündüzüm Seninle', '2021-01-16 19:32:42', 1),
(2, 'https://www.youtube.com/watch?v=4OkiH2yD-eQ&list=RDCLAK5uy_kbPf4vV-wAf5kC3fgPZ5Wg92Vlb3tTfds&index=2', 'Zehra - Cennetten Çiçek', '2021-01-16 19:32:42', 1),
(3, 'https://www.youtube.com/watch?v=SV9-9RvHsjY', 'Gülşen & Edis - Nirvana', '2021-01-16 23:23:44', 1),
(4, 'https://www.youtube.com/watch?v=idizwemw02U', 'Hadise - Küçük Bir Yol', '2021-01-16 23:49:38', 1),
(6, 'https://www.youtube.com/watch?v=U66ixhdbxEI', 'Tarkan - Yolla', '2021-01-16 23:33:50', 0),
(7, 'https://www.youtube.com/watch?v=vlyaJ2NPkO0', 'Oğuzhan Koç ', '2021-01-16 23:51:45', 1),
(8, 'https://www.youtube.com/watch?v=zd8IFDgQCUc', 'Barış Manço ', '2021-01-17 18:30:58', 0),
(9, 'https://www.youtube.com/watch?v=Lw4unI3tVNQ', 'Mor ve Ötesi - Bir derdim var artık', '2021-01-17 18:33:41', 0),
(10, 'https://www.youtube.com/watch?v=h5oHhGlWKf0', 'Madrigal - Seni Dert Etmeler', '2021-01-17 21:26:25', 1),
(11, 'https://www.youtube.com/watch?v=54sbVmvihT4', 'Sezgin Irmak - Fırtına', '2021-01-18 14:57:12', 0),
(12, 'https://www.youtube.com/watch?v=inRtnmPxxRw', 'Mustafa Sandal - Aya Benzer', '2021-01-18 15:01:24', 0);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
