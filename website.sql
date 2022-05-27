-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2022 at 07:08 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `id` int(11) NOT NULL,
  `FullName` varchar(200) DEFAULT NULL,
  `UserName` varchar(12) DEFAULT NULL,
  `UserEmail` varchar(200) DEFAULT NULL,
  `UserMobileNumber` varchar(10) DEFAULT NULL,
  `LoginPassword` varchar(255) DEFAULT NULL,
  `RegDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`id`, `FullName`, `UserName`, `UserEmail`, `UserMobileNumber`, `LoginPassword`, `RegDate`) VALUES
(7, 'Amalan Pulendran', 'Amalan123', 'amalan82@gmail.com', '6124622376', '$2y$12$p3k3.uhTy7nmmP/ncLOKw.abf8QecZNZ.Wl3emWBPu04HiLmqwcVy', '2019-11-18 17:45:50'),
(8, 'Amalan Sindhu', 'Sindhu', 'Sindhu@gmail.com', '1111111111', '$2y$12$w.vkCcPvQK6MnY2PAgCD/OuXjhfNUxkwHqoKiMM3dmQSO2MNTt4sK', '2019-11-18 17:57:17'),
(9, 'riley', 'truril', 'riley@gamil.com', '5555555555', '$2y$12$OmqZZmKYA05c5hiZ0eOh3.dsaZTtaSTs8Fri/EixO2tnGgKqnAmam', '2022-04-22 19:19:40'),
(10, 'riley', 'rmt456', '123@gmail.com', '5555555856', '$2y$12$kNHuuFgv1s6AtlwOJkQueuidKoBc3IMLkLTqEjzuK4akvvtsMfJFa', '2022-05-06 19:10:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uId` int(11) NOT NULL,
  `uName` varchar(255) NOT NULL,
  `uUsername` varchar(255) NOT NULL,
  `uPassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uId`, `uName`, `uUsername`, `uPassword`) VALUES
(9, 'Claire', 'cmw12', '$2y$12$kqK/XBZ7fFyoBbMAdOh1ne1vqyuEld9vjCBdwyK8fEQ5mTfrNXXJm'),
(10, 'jackson', 'jackeesoon', '$2y$12$ggycRSVqXATZafhgULMayOe6mL7v.U0WnkDwCjQDYNZ.tumZ6MtW.'),
(12, 'Riley', 'trurilm', '$2y$12$hgH2VoCJM79QJs3ad4F1cuvgX1KvW4gfN5ir1J2PnZCEVTy31PoWK'),
(13, 'riley', 'riley123', '$2y$12$UdbN/OYJBcZ4QZ.sv5yrbOHiOhmCyLLjOnoN9adH8Upme9pW8DOkm'),
(15, 'riley', 'rileyt', '$2y$12$QyJz8zp0LzZE1y.Pq8uKVuEOKzhE/tp.tdiI62toEdpUvj/0cxs/S');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
