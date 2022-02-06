-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: mai 30, 2021 la 10:42 AM
-- Versiune server: 10.4.18-MariaDB
-- Versiune PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `guitarshop`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `issue` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `response` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `messages`
--

INSERT INTO `messages` (`id`, `title`, `issue`, `description`, `response`, `user_id`) VALUES
(1, 'salut', '', 'salutarisalutari', NULL, 2),
(2, 'issue', 'title', 'tedsakfslfas\r\n', NULL, 2),
(3, 'adaw', 'dwadad', 'adwadwada', NULL, 2),
(4, 'salutfrtcf', 'flsdafsd;lfkl', 'kfdsalgk;srgasdfgsfd', NULL, 2),
(5, 'Korg Poly-61 MS-20', 'we got issues', 'Issues\r\n', NULL, 2);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `products`
--

INSERT INTO `products` (`id`, `title`, `type`, `price`, `image_url`, `description`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Cort L100C', 'CHITARA', 359, 'https://arbutusmusic.com/wp-content/uploads/2018/02/L100C-NAT0.png', 'Descriere chitara', 2, '2021-03-24 21:33:54', '2021-04-30 16:30:28'),
(3, 'Yamaha', 'TOBE', 2341, 'storage/media/images/drums.png', 'Descriere tobe Yamaha', 2, '2021-03-24 21:45:14', '2021-04-30 19:26:02'),
(4, 'Crafter D 8-12EQ/N', 'CHITARA', 449, 'https://polaris-web-pub.s3.amazonaws.com/media/first-act/products/full/b9e6ac80-5118-11e7-a8f5-5bb50e53df5a.png', 'Chitara 12 strings', 2, '2021-03-29 17:37:47', '2021-04-30 16:29:31'),
(7, 'Beaver Creek BCTD101', 'CHITARA', 449, 'http://metrosoundmusic.com/wp-content/uploads/2015/05/Beaver-Creek-BCTD101-Dreadnought-Acoustic-Guitar.png', 'Chitara 6 STRINGS', 2, '2021-03-29 17:37:47', '2021-04-30 16:29:31'),
(9, 'Korg Poly-61 MS-20', 'PIANSICLAPA', 300, 'storage/media/images/keyboard.png', 'Clape', 2, '2021-04-30 16:35:16', '2021-04-30 19:31:50'),
(10, 'Microfon Audio-Technia', 'MICROFOANE', 100, '/storage/media/images/microfon1.png', 'Descriere microfon', 2, '2021-05-15 10:49:47', '2021-05-15 10:49:47'),
(11, 'Microfon Samson Q6', 'MICROFOANE', 165, '/storage/media/images/samson-q6-microfon.png', 'Microfon de cea mai inalta calitate', 2, '2021-05-15 10:52:30', '2021-05-15 10:52:30'),
(12, 'Pana de Chitara Duralin', 'ACCESORII', 155, '/storage/media/images/pana-duralin.png', 'Pana de chitara Duralin D\'addario 2DRD1', 2, '2021-05-15 11:00:03', '2021-05-15 11:00:03'),
(13, 'Pana de Chitara Celuloid Planet Waves', 'ACCESORII', 10, '/storage/media/images/pana-chtara-celuloid.png', 'Pana de Chitara Celuloid Planet Waves', 2, '2021-05-15 11:02:52', '2021-05-15 11:02:52'),
(14, 'Curea Chitara Bumbac Alice A040-BS1', 'ACCESORII', 50, '/storage/media/images/curea-alice-bumbac.png', 'Curea pentru chitară din bumbac, capete din piele cu microfibră.', 2, '2021-05-15 11:08:00', '2021-05-15 11:08:00'),
(15, 'Husa Chitara Clasica 3/4 MOJO MB-C58-300', 'ACCESORII', 175, '/storage/media/images/husa-chitara.png', 'Husele pentru instrumente MOJO sunt huse de calitate înaltă: de la logo-ul funky până la materialul nylon rezistent la apă și temperaturi de până la 420°, seria \'300\' are căptușeală de 11mm oferind un mediu sigur pentru instrument.', 2, '2021-05-15 11:10:44', '2021-05-15 11:13:56'),
(16, 'Tama', 'TOBE', 1104, '/storage/media/images/drums-tama.png', 'Descriere tobe Tama', 2, '2021-05-15 11:23:47', '2021-05-15 11:23:47'),
(17, 'Contrabas', 'ORCHESTRA', 2000, '/storage/media/images/contrabas.png', 'Descriere contrabass', 2, '2021-05-15 11:26:53', '2021-05-15 11:26:53'),
(18, 'Tuba', 'ORCHESTRA', 500, '/storage/media/images/tuba.png', 'Tuba profesionala pentru orchestra', 2, '2021-05-15 11:31:09', '2021-05-15 11:31:09');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'admin', 'admin@admin.com', '2021-03-24 21:06:10', '2021-03-24 21:06:10'),
(3, 'gabze', '123', 'gabze@gabze.com', '2021-04-07 21:01:55', '2021-04-07 21:01:55'),
(4, 'gabe', 'gabe', 'gabe@yahoo.com', '2021-05-20 13:57:08', '2021-05-20 13:57:08'),
(5, 'gabriel', 'gabriel', 'gabriel@yahoo.com', '2021-05-29 21:38:38', '2021-05-29 21:38:38'),
(6, 'alex', 'alex', 'alex@yahoo.com', '2021-05-29 22:25:24', '2021-05-29 22:25:24');

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexuri pentru tabele `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pentru tabele `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pentru tabele `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constrângeri pentru tabele eliminate
--

--
-- Constrângeri pentru tabele `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
