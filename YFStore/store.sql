-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 13, 2025 at 11:16 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `produk_id` int NOT NULL,
  `jumlah` int NOT NULL,
  `total_harga` decimal(10,2) NOT NULL,
  `ukuran` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`id`, `user_id`, `produk_id`, `jumlah`, `total_harga`, `ukuran`) VALUES
(50, 10, 1, 1, '150000.00', 'S');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `payment_status` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `user_id`, `total_amount`, `payment_method`, `payment_status`, `created_at`) VALUES
(1, 1, '100000.00', 'Transfer Bank - BCA', 'Pending', '2025-01-29 14:35:58'),
(2, 1, '100000.00', 'DANA', 'Pending', '2025-01-29 14:41:56'),
(3, 1, '100000.00', 'DANA', 'Pending', '2025-01-29 14:42:15'),
(4, 1, '100000.00', 'DANA', 'Pending', '2025-01-29 14:46:00'),
(5, 1, '100000.00', 'DANA', 'Pending', '2025-01-29 14:46:03'),
(6, 1, '100000.00', 'Transfer Bank - BRI', 'Pending', '2025-01-29 14:47:34'),
(7, 1, '100000.00', 'Transfer Bank - BRI', 'Pending', '2025-01-29 14:59:00'),
(8, 1, '100000.00', 'Transfer Bank - BRI', 'Pending', '2025-01-29 15:03:07'),
(9, 1, '100000.00', 'DANA', 'Pending', '2025-01-29 15:03:11'),
(10, 1, '100000.00', 'Transfer Bank - BRI', 'Pending', '2025-01-29 15:11:07'),
(11, 1, '100000.00', 'DANA', 'Pending', '2025-01-29 15:11:12');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` decimal(10,2) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `stok` int NOT NULL,
  `ukuran` varchar(10) DEFAULT NULL,
  `Kelas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama`, `deskripsi`, `harga`, `gambar`, `kategori`, `stok`, `ukuran`, `Kelas`) VALUES
(1, 'Jersey Latihan Club Vierte', 'Jersey ini terbuat dari bahan berkualitas tinggi dan sangat nyaman dipakai. Tersedia dalam berbagai ukuran.', '150000.00', 'voli1.png', 'Voli', 10, 'S', ''),
(2, 'Jersey Team Adenhag', 'Jersey premium dengan sentuhan klasik pada warna yang menunjukkan kesan jersey mahal.', '200000.00', 'basket3.png', 'Basket', 8, 'M', ''),
(3, 'Jersey Team Permie', 'Jersey ini terbuat dari bahan brasilian emboss sangat nyaman dipakai. Tersedia dalam berbagai ukuran.', '180000.00', 'bola1.png', 'Sepak Bola', 15, 'L', ''),
(33, 'Jersey Team Esperion', 'Jersey premium dan original bahan aman dan nyaman murah', '200000.00', 'bola3.png', 'Sepak Bola', 7, 'M', ''),
(34, 'Jersey Custom', 'Jersey yang bagus', '200000.00', 'bola2.png', 'Voli', 5, 'S', ''),
(35, 'Jersey Custom', 'Contoh', '200000.00', 'bola3.png', 'Sepak Bola', 5, 'Premium', ''),
(36, 'Jersey Custom', 'Contoh', '200000.00', 'bola3.png', 'Sepak Bola', 5, 'Premium', ''),
(37, 'Jersey Custom', 'Contoh', '200000.00', 'bola3.png', 'Sepak Bola', 5, 'Premium', ''),
(38, 'Jersey Premium Bola', 'Bagus', '200000.00', 'bola2.png', 'Voli', 8, 'Premium', ''),
(39, 'Jersey Voli', 'gggg', '400000.00', 'bola2.png', 'Voli', 7, 'Premium', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('user','admin') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`) VALUES
(9, 'yonaldi', 'yonaldi@gmail.com', '$2y$10$usOIJOtjtzoeAf/QDM6TgOMrqJ4SsTDSbhexE.vntkWOVp57n7gHu', 'admin'),
(10, 'asa', 'asa@gmail.com', '$2y$10$kVypstnfM4CzPK3NXVtpcedT/8xctVKO2FPxl6ML1qXC5S8ur5tem', 'user'),
(11, 'farizal', 'farizal@gmail.com', '$2y$10$AvoprXZljGAgUW60/QXXoeXcqYhipNZimawKwLDi8MYr5tnFbF4HW', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `produk_id` (`produk_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD CONSTRAINT `keranjang_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `keranjang_ibfk_2` FOREIGN KEY (`produk_id`) REFERENCES `produk` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
