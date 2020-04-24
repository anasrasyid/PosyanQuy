-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2020 at 08:31 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `posyanquy_db`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `akun`
-- (See below for the actual view)
--
CREATE TABLE `akun` (
`id` int(11)
,`email` varchar(255)
,`password` varchar(255)
,`type` int(1)
);

-- --------------------------------------------------------

--
-- Table structure for table `anak`
--

CREATE TABLE `anak` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `berat_badan` double NOT NULL,
  `id_ibu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `anak`
--

INSERT INTO `anak` (`id`, `nama`, `tempat_lahir`, `tanggal_lahir`, `berat_badan`, `id_ibu`) VALUES
(11, 'Wesley', 'Washington DC', '2020-03-01', 5, 2),
(12, 'Tania', 'Bandung', '2020-04-16', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `antrian`
--

CREATE TABLE `antrian` (
  `id` int(11) NOT NULL,
  `waktu` date NOT NULL,
  `id_ibu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `antrian`
--

INSERT INTO `antrian` (`id`, `waktu`, `id_ibu`) VALUES
(101, '2020-04-19', 2);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `data` text NOT NULL,
  `id_imunisasi` int(11) NOT NULL,
  `id_anak` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `tanggal`, `data`, `id_imunisasi`, `id_anak`) VALUES
(1, '2020-04-15', '', 4040, 12),
(2, '2020-04-16', '', 4041, 11);

-- --------------------------------------------------------

--
-- Table structure for table `ibu`
--

CREATE TABLE `ibu` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ibu`
--

INSERT INTO `ibu` (`id`, `nama`, `alamat`, `tanggal_lahir`, `email`, `password`) VALUES
(1, 'Linda W Mitchell', '2819  Biddie Lane', '1990-02-03', '3cg4tt5xul3@fakemailgenerator.net', 'zxcasd'),
(2, 'Carrie R Arnold', '3799  Green Gate Lane', '1995-01-21', 'rnq8pczba8g@meantinc.com', 'hahahihi');

-- --------------------------------------------------------

--
-- Table structure for table `imunisasi`
--

CREATE TABLE `imunisasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `syarat_umur` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `periode` int(11) NOT NULL,
  `id_kader` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `imunisasi`
--

INSERT INTO `imunisasi` (`id`, `nama`, `syarat_umur`, `deskripsi`, `periode`, `id_kader`) VALUES
(4040, 'Hepatitis B', 3, 'Vaksin hepatitis B diberikan tiga kali. Yang pertama saat bayi baru lahir, paling lambat 12 jam setelah bayi lahir. Manfaatnya adalah untuk mencegah penularan hepatitis B dari ibu ke bayi saat proses persalinan. ', 3, 1301180023),
(4041, 'Polio', 4, 'Polio dikenal juga dengan nama penyakit lumpuh layu. Penyakit menular ini disebabkan oleh virus dalam saluran pencernaan dan tenggorokan dan dapat mengakibatkan kelumpuhan kaki, tangan, maupun lumpuhnya otot pernafasan yang menyebabkan kematian. ', 4, 1301180072),
(4042, 'BCG', 2, 'Vaksin BCG berfungsi untuk mencegah anak terkena kuman tuberculosis yang dapat menyerang paru-paru dan selaput otak dan dapat menyebabkan kecacatan bahkan kematian. ', 0, 1301180154),
(4043, 'Campak', 1, 'Manfaat dari vaksin ini adalah mencegah penyakit campak berat yang dapat menyebabkan pneumonia (radang paru), diare, dan bisa menyerang otak.', 0, 1301180211),
(4044, 'Pentavalen ', 1, 'Vaksin yang merupakan gabungan dari vaksin DPT (difteri, pertusis, tetanus), vaksin HB (hepatitis B), dan vaksin HiB (haemophilus influenza tipe B) ini mampu mencegah 6 penyakit sekaligus, yaitu difteri (infeksi selaput lendir hidung dan tenggorokan), pertusis (batuk rejan), tetanus, hepatitis B, pneumonia, dan meningitis (radang otak). ', 4, 1301181192);

-- --------------------------------------------------------

--
-- Table structure for table `kader`
--

CREATE TABLE `kader` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kader`
--

INSERT INTO `kader` (`id`, `nama`, `email`, `password`) VALUES
(1301180023, 'annisa fajri hayati', 'annisa@gmail.com', 'adatidak'),
(1301180072, 'Luqman Haries', 'luqmanharies12@gmail.com', 'tidakada'),
(1301180154, 'Muhammad Abdurrohman Al Fatih', 'maaf@gmail.com', 'maaf'),
(1301180211, 'Muhammad Irsyad Al Ghifary', 'akkif@gmail.com', 'akip'),
(1301181192, 'Anas Rasyid', 'anas@gmail.com', 'anas');

-- --------------------------------------------------------

--
-- Structure for view `akun`
--
DROP TABLE IF EXISTS `akun`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `akun`  AS  select `ibu`.`id` AS `id`,`ibu`.`email` AS `email`,`ibu`.`password` AS `password`,0 AS `type` from `ibu` union select `kader`.`id` AS `id`,`kader`.`email` AS `email`,`kader`.`password` AS `password`,1 AS `type` from `kader` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anak`
--
ALTER TABLE `anak`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_ANAK_IBU` (`id_ibu`);

--
-- Indexes for table `antrian`
--
ALTER TABLE `antrian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_ANTRIAN` (`id_ibu`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_HISTORY_IMUNISASI` (`id_imunisasi`),
  ADD KEY `FK_HISTORY_ANAK` (`id_anak`);

--
-- Indexes for table `ibu`
--
ALTER TABLE `ibu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imunisasi`
--
ALTER TABLE `imunisasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_IMUNISASI` (`id_kader`);

--
-- Indexes for table `kader`
--
ALTER TABLE `kader`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anak`
--
ALTER TABLE `anak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `antrian`
--
ALTER TABLE `antrian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=334;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ibu`
--
ALTER TABLE `ibu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `imunisasi`
--
ALTER TABLE `imunisasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4045;

--
-- AUTO_INCREMENT for table `kader`
--
ALTER TABLE `kader`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1301181193;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anak`
--
ALTER TABLE `anak`
  ADD CONSTRAINT `FK_ANAK_IBU` FOREIGN KEY (`id_ibu`) REFERENCES `ibu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `antrian`
--
ALTER TABLE `antrian`
  ADD CONSTRAINT `FK_ANTRIAN` FOREIGN KEY (`id_ibu`) REFERENCES `ibu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `FK_HISTORY_ANAK` FOREIGN KEY (`id_anak`) REFERENCES `anak` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_HISTORY_IMUNISASI` FOREIGN KEY (`id_imunisasi`) REFERENCES `imunisasi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `imunisasi`
--
ALTER TABLE `imunisasi`
  ADD CONSTRAINT `FK_IMUNISASI` FOREIGN KEY (`id_kader`) REFERENCES `kader` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
