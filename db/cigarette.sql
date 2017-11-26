-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2017 at 09:55 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cigarette`
--

-- --------------------------------------------------------

--
-- Table structure for table `diseases`
--

CREATE TABLE `diseases` (
  `ID` int(11) NOT NULL,
  `Value` int(11) NOT NULL,
  `Disease` varchar(100) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diseases`
--

INSERT INTO `diseases` (`ID`, `Value`, `Disease`, `Description`) VALUES
(1, 80, 'Kanker', 'Jenis kanker yang diakibatkan oleh asap rokok adalah kanker paru, mulut, tenggorokan, serta kerongkongan.  Juga kanker kandung kemih, pankreas, leher rahim, ginjal dan esofagus.'),
(2, 75, 'Penyakit Paru', 'Penyakit paru. Bronkitis kronis, emfisema adalah penyakit paru yang diakibatkan oleh rokok.'),
(3, 60, 'Penyakit Kardiovaskuler', 'Asap rokok menyebabkan penyakit yang mempengaruhi jantung, pembuluh darah jantung, serta pembuluh darah tubuh lainnya. Kadar kolesterol juga meningkat, serta lemak banyak menumpuk di arteri.'),
(4, 50, 'Kesehatan Reproduksi', 'Impoten, disfungsi ereksi, infertilitas, keguguran, lahir prematur, sindrom kematian bayi mendadak, kerap dialami bila asap rokok sering dihirup. Berat badan bayi rendah, anak menderita asma, juga disebabkan karena asap rokok.'),
(5, 40, 'Penyakit Alzheimer', 'Merokok mempercepat penurunan mental, dan menyebabkan alzheimer.'),
(6, 20, 'Infeksi Saluran Pernafasan Atas', 'Merokok mencegah bakteri dan kotoran dapat dibersihkan secara alami oleh tubuh, sehingga resiko infeksi, sinusitis, bronkitis, pneumonia menjadi lebih tinggi.');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `userID` int(11) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Name`, `Email`) VALUES
(412014, 'Aan', 'aan@mail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diseases`
--
ALTER TABLE `diseases`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD KEY `fk_userID_users` (`userID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diseases`
--
ALTER TABLE `diseases`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `fk_userID_users` FOREIGN KEY (`userID`) REFERENCES `users` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
