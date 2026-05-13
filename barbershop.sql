-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2026 at 08:19 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barbershop`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `layanan` varchar(100) NOT NULL,
  `barber` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `produk` text DEFAULT NULL,
  `pembayaran` varchar(50) DEFAULT NULL,
  `total_harga` int(11) DEFAULT NULL,
  `metode_pembayaran` varchar(50) DEFAULT NULL,
  `bukti_transfer` varchar(255) DEFAULT NULL,
  `status_pembayaran` varchar(50) DEFAULT 'Belum Bayar'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `nama`, `no_hp`, `layanan`, `barber`, `tanggal`, `jam`, `created_at`, `produk`, `pembayaran`, `total_harga`, `metode_pembayaran`, `bukti_transfer`, `status_pembayaran`) VALUES
(3, 'Samiii', '434343434', 'Hair Coloring', 'Fajar', '2026-05-09', '21:00:00', '2026-05-08 13:55:40', NULL, NULL, NULL, NULL, NULL, 'Belum Bayar'),
(7, 'ray', '123311223', 'Premium Package', 'Fajar', '2026-05-09', '16:36:00', '2026-05-08 15:37:22', NULL, NULL, NULL, NULL, NULL, 'Belum Bayar'),
(8, 'Rayhan', '12331122322', 'Premium Package', 'Rizky', '2026-05-09', '16:40:00', '2026-05-08 15:38:15', NULL, NULL, NULL, NULL, NULL, 'Belum Bayar'),
(12, 'aray', '081227645', 'Hair Styling', 'Rizky Alvaro', '2026-05-03', '15:55:00', '2026-05-08 16:39:08', '', 'QRIS', 65000, NULL, NULL, 'Belum Bayar'),
(13, 'Raafid Akbar & Samiiii', '082219456419', 'Hair + Wash', 'Adrian Fernando', '2026-05-30', '04:44:00', '2026-05-08 16:39:49', 'Hair Clay Matte', 'QRIS', 145000, NULL, NULL, 'Belum Bayar'),
(14, 'yos', '082219878867', 'Face Treatment', 'Kevin Mahendra', '2026-05-30', '13:11:00', '2026-05-11 06:07:32', 'Hair Clay Matte', 'QRIS', 160000, NULL, NULL, 'Belum Bayar'),
(15, 'yos', '08221654855', 'Hair + Wash', 'Adrian Fernando', '2026-05-30', '15:16:00', '2026-05-11 08:10:59', 'Premium Pomade', 'QRIS', 150000, NULL, NULL, 'Belum Bayar'),
(16, '', '', '', '', '0000-00-00', '00:00:00', '2026-05-11 09:25:21', '-', '-', 0, NULL, NULL, 'Belum Bayar'),
(17, 'yoru', '0981128883344', 'Hair Styling', 'Adrian Fernando', '2026-05-13', '16:36:00', '2026-05-11 09:33:07', 'Hair Clay Matte', 'QRIS', 115000, NULL, NULL, 'Belum Bayar'),
(18, 'yoru', '0981128883344', 'Hair Styling', 'Adrian Fernando', '2026-05-13', '16:36:00', '2026-05-11 09:35:42', 'Hair Clay Matte', 'QRIS', 115000, NULL, NULL, 'Belum Bayar'),
(19, 'bram', '08229967886', 'Premium Package', 'Kevin Mahendra', '2026-05-22', '18:16:00', '2026-05-11 11:15:54', 'Hair Tonic', 'QRIS', 400000, NULL, NULL, 'Belum Bayar');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` enum('admin','user') DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`, `role`) VALUES
(1, 'Admin', 'admin', 'admin123', 'admin'),
(2, 'MUHAMMAD RAYHAN VERYHAWARI', 'rayhan77', 'rayhan123', 'user'),
(3, 'MUHAMMAD RAYHAN VERYHAWARI', 'rayhan77', 'rayhan77', 'user'),
(4, 'rayuan', 'rayhan123', 'rayhan123', 'user'),
(5, 'rayhan', 'rayhan77', 'rayhan123', 'user'),
(6, 'MUHAMMAD RAYHAN VERYHAWARI', 'rayhan777', 'rayhan1232', 'user'),
(7, 'Imanuel Y', 'Yosi', 'yosi123', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
