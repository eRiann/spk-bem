-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2024 at 12:29 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bem`
--

-- --------------------------------------------------------

--
-- Table structure for table `pembobotan`
--

CREATE TABLE `pembobotan` (
  `id` int(3) NOT NULL,
  `ipk` float NOT NULL,
  `pengalaman` float NOT NULL,
  `pengetahuan` float NOT NULL,
  `motivasi` float NOT NULL,
  `kerjasama` float NOT NULL,
  `etika` float NOT NULL,
  `komunikasi` float NOT NULL,
  `testulis` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembobotan`
--

INSERT INTO `pembobotan` (`id`, `ipk`, `pengalaman`, `pengetahuan`, `motivasi`, `kerjasama`, `etika`, `komunikasi`, `testulis`) VALUES
(14, 0.07143, 0.14286, 0.10714, 0.14286, 0.10714, 0.17857, 0.14286, 0.10714);

-- --------------------------------------------------------

--
-- Table structure for table `penilaian`
--

CREATE TABLE `penilaian` (
  `id` int(4) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `ipk` float NOT NULL,
  `pengalaman` float NOT NULL,
  `pengetahuan` float NOT NULL,
  `motivasi` float NOT NULL,
  `kerjasama` float NOT NULL,
  `etika` float NOT NULL,
  `komunikasi` float NOT NULL,
  `testulis` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penilaian`
--

INSERT INTO `penilaian` (`id`, `nama`, `ipk`, `pengalaman`, `pengetahuan`, `motivasi`, `kerjasama`, `etika`, `komunikasi`, `testulis`) VALUES
(18, 'Rinda Tri Kusuma', 3, 4, 3, 2, 2, 3, 2, 3),
(19, 'Ardi Dian Andayani', 3, 3, 5, 3, 2, 5, 3, 3),
(20, 'Venus Sandro M.', 3, 2, 3, 4, 5, 3, 5, 2),
(22, 'Dina Rizky Purbayani', 2, 3, 4, 5, 3, 2, 2, 3),
(23, 'Brillian Maulana W.', 1, 4, 2, 2, 2, 3, 2, 5),
(24, 'Della Eka Ayu P', 3, 1, 1, 2, 3, 2, 4, 2),
(25, 'Mayang Dwi Ningrum', 2, 2, 4, 2, 2, 1, 3, 5),
(26, 'Sylfi Anjarwati', 1, 2, 2, 2, 1, 2, 3, 3),
(27, 'Zela Puspita Rani', 1, 2, 2, 3, 2, 3, 5, 4),
(28, 'Dian Astarina Widya P.', 1, 4, 2, 1, 4, 3, 4, 2),
(29, 'Nanda Savitri Dewi', 4, 3, 2, 2, 2, 4, 3, 4),
(30, 'Adynda Surya A. K', 3, 2, 2, 4, 2, 2, 2, 3),
(31, 'Rahma Distya R. H', 4, 5, 5, 3, 2, 5, 4, 2),
(32, 'Khoiri Nisa Nur Arifa', 3, 5, 5, 5, 4, 3, 4, 3),
(33, 'Putri Widianti', 4, 2, 4, 5, 4, 4, 2, 1),
(34, 'Guntur Ega Pratama', 3, 4, 2, 4, 2, 2, 3, 3),
(35, 'Chrisma Ilham S.P', 4, 2, 3, 4, 5, 1, 3, 3),
(36, 'Yenny Kusuma', 4, 2, 4, 3, 4, 5, 4, 4),
(37, 'Marisa Ayu Priyandani', 4, 1, 4, 3, 3, 3, 4, 4),
(38, 'Tegar Wahyu Budiarto', 2, 5, 4, 4, 2, 3, 4, 5),
(39, 'Elfara Yulyastia R. A.', 2, 5, 2, 3, 2, 2, 2, 2),
(40, 'Dhea Rara Aulya', 2, 2, 3, 1, 1, 4, 2, 4),
(41, 'Avryandhani Intan L.', 3, 5, 5, 5, 1, 5, 5, 3),
(42, 'Get Vera Kusniawati E', 4, 1, 3, 2, 5, 2, 2, 3),
(43, 'Masdicky Ridho F', 3, 4, 1, 4, 2, 1, 2, 4),
(44, 'Arjuna Shandi W. S', 4, 4, 4, 1, 2, 2, 3, 4),
(45, 'Dewi Ayu Rahmawati', 3, 3, 2, 4, 5, 4, 2, 4),
(46, 'Abit Humam M.', 3, 2, 3, 3, 4, 2, 2, 3),
(47, 'Andhika Muhammad Nur', 3, 2, 1, 3, 3, 2, 3, 3),
(48, 'Jagad Talenta', 3, 3, 2, 3, 3, 2, 4, 2),
(49, 'Muhammad Genta Putra M.', 3, 2, 3, 1, 3, 1, 2, 3),
(50, 'Sawung Wijaya', 3, 2, 2, 3, 2, 3, 3, 1),
(51, 'Firmansyah Bayu', 4, 2, 2, 3, 4, 1, 1, 2),
(53, 'Lavetania Putri A.', 1, 1, 2, 3, 2, 4, 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `saw_ranking`
--

CREATE TABLE `saw_ranking` (
  `id` int(4) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nilai_akhir` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saw_ranking`
--

INSERT INTO `saw_ranking` (`id`, `nama`, `nilai_akhir`) VALUES
(1, 'Rinda Tri Kusuma', 0.56071),
(2, 'Ardi Dian Andayani', 0.70357),
(3, 'Venus Sandro M.', 0.68929),
(4, 'Dina Rizky Purbayani', 0.60714),
(5, 'Brillian Maulana W.', 0.54643),
(6, 'Della Eka Ayu P', 0.45357),
(7, 'Mayang Dwi Ningrum', 0.50714),
(8, 'Sylfi Anjarwati', 0.41786),
(9, 'Zela Puspita Rani', 0.58214),
(10, 'Dian Astarina Widya P.', 0.55357),
(11, 'Nanda Savitri Dewi', 0.61429),
(12, 'Adynda Surya A. K', 0.50357),
(13, 'Rahma Distya R. H', 0.78572),
(14, 'Khoiri Nisa Nur Arifa', 0.81786),
(15, 'Putri Widianti', 0.66429),
(16, 'Guntur Ega Pratama', 0.58929),
(17, 'Chrisma Ilham S.P', 0.6),
(18, 'Yenny Kusuma', 0.76428),
(19, 'Marisa Ayu Priyandani', 0.64286),
(20, 'Tegar Wahyu Budiarto', 0.75),
(21, 'Elfara Yulyastia R. A.', 0.52143),
(22, 'Dhea Rara Aulya', 0.49286),
(23, 'Avryandhani Intan L.', 0.85357),
(24, 'Get Vera Kusniawati E', 0.52143),
(25, 'Masdicky Ridho F', 0.525),
(26, 'Arjuna Shandi W. S', 0.58571),
(27, 'Dewi Ayu Rahmawati', 0.68928),
(28, 'Abit Humam M.', 0.53928),
(29, 'Andhika Muhammad Nur', 0.50357),
(30, 'Jagad Talenta', 0.56072),
(31, 'Muhammad Genta Putra M.', 0.425),
(32, 'Sawung Wijaya', 0.49643),
(33, 'Firmansyah Bayu', 0.45),
(34, 'Lavetania Putri A.', 0.53929);

-- --------------------------------------------------------

--
-- Table structure for table `tb_mhs`
--

CREATE TABLE `tb_mhs` (
  `id` int(4) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `semester` int(2) NOT NULL,
  `prodi` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mhs`
--

INSERT INTO `tb_mhs` (`id`, `nama`, `semester`, `prodi`) VALUES
(9, 'Rinda Tri Kusuma', 3, 'Pendidikan Matematika'),
(10, 'Ardi Dian Andayani', 3, 'Pendidikan Akuntansi'),
(11, 'Venus Sandro M.', 5, 'PGSD'),
(12, 'Lavetania Putri A.', 5, 'PGSD'),
(13, 'Dina Rizky Purbayani', 5, 'Pendidikan Matematika'),
(14, 'Brillian Maulana W.', 3, 'PGSD'),
(15, 'Della Eka Ayu P', 5, 'Hukum'),
(16, 'Mayang Dwi Ningrum', 5, 'Manajemen'),
(17, 'Sylfi Anjarwati', 3, 'PGSD'),
(18, 'Zela Puspita Rani', 3, 'Teknik Industri'),
(19, 'Dian Astarina Widya P.', 5, 'Pendidikan Fisika'),
(20, 'Nanda Savitri Dewi', 3, 'Manajemen'),
(21, 'Adynda Surya A. K ', 3, 'Pendidikan Akuntansi'),
(22, 'Rahma Distya R. H', 3, 'PG PAUD'),
(23, 'Khoiri Nisa Nur Arifa', 5, 'PGSD'),
(24, 'Putri Widianti', 3, 'Pendidikan Akuntansi'),
(25, 'Guntur Ega Pratama ', 5, 'Pendidikan Sejarah'),
(26, 'Chrisma Ilham S.P', 5, 'Pendidikan Teknik Elektro'),
(27, 'Yenny Kusuma ', 3, 'Farmasi'),
(28, 'Marisa Ayu Priyandani', 3, 'Pendidikan Matematika'),
(29, 'Tegar Wahyu Budiarto', 3, 'Manajemen'),
(30, 'Elfara Yulyastia R. A.', 5, 'Hukum'),
(31, 'Dhea Rara Aulya', 5, 'Hukum'),
(32, 'Avryandhani Intan L.', 5, 'Manajemen'),
(33, 'Get Vera Kusniawati E', 5, 'Manajemen'),
(34, 'Masdicky Ridho F', 3, 'Teknik Informatika'),
(35, 'Arjuna Shandi W. S', 3, 'PGSD'),
(36, 'Dewi Ayu Rahmawati', 3, 'PGSD'),
(37, 'Abit Humam M.', 5, 'Pendidikan Bahasa Inggris'),
(38, 'Andhika Muhammad Nur', 5, 'Teknik Informatika'),
(39, 'Jagad Talenta', 5, 'PGSD'),
(40, 'Muhammad Genta Putra M.', 5, 'PGSD'),
(41, 'Sawung Wijaya', 5, 'Pendidikan Bahasa dan Sastra Indonesia'),
(42, 'Firmansyah Bayu', 3, 'Manajemen'),
(44, '', 3, 'Pendidikan IPA');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(3) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `level` enum('Admin','Staff') NOT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`, `foto`) VALUES
(1, 'Febrian', 'feb', '123', 'Admin', NULL),
(2, 'Nur', 'staf', 'staf', 'Staff', NULL),
(4, 'poio', 'poi', '321', 'Admin', NULL),
(6, 'Cahya', 'febri', '54321', 'Admin', NULL),
(7, 'a', 'a', 'a', 'Admin', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wp_vektors`
--

CREATE TABLE `wp_vektors` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nilai_vektors` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wp_vektors`
--

INSERT INTO `wp_vektors` (`id`, `nama`, `nilai_vektors`) VALUES
(1, 'Rinda Tri Kusuma', 2.66557),
(2, 'Ardi Dian Andayani', 3.32383),
(3, 'Venus Sandro M.', 3.20929),
(4, 'Dina Rizky Purbayani', 2.83806),
(5, 'Brillian Maulana W.', 2.49237),
(6, 'Della Eka Ayu P', 1.99628),
(7, 'Mayang Dwi Ningrum', 2.22494),
(8, 'Sylfi Anjarwati', 1.95568),
(9, 'Zela Puspita Rani', 2.66214),
(10, 'Dian Astarina Widya P.', 2.43349),
(11, 'Nanda Savitri Dewi', 2.87642),
(12, 'Adynda Surya A. K', 2.37399),
(13, 'Rahma Distya R. H', 3.64116),
(14, 'Khoiri Nisa Nur Arifa', 3.94014),
(15, 'Putri Widianti', 2.92005),
(16, 'Guntur Ega Pratama', 2.77742),
(17, 'Chrisma Ilham S.P', 2.61401),
(18, 'Yenny Kusuma', 3.61836),
(19, 'Marisa Ayu Priyandani', 2.90071),
(20, 'Tegar Wahyu Budiarto', 3.54995),
(21, 'Elfara Yulyastia R. A.', 2.41566),
(22, 'Dhea Rara Aulya', 2.14115),
(23, 'Avryandhani Intan L.', 3.8412),
(24, 'Get Vera Kusniawati E', 2.29032),
(25, 'Masdicky Ridho F', 2.2175),
(26, 'Arjuna Shandi W. S', 2.58341),
(27, 'Dewi Ayu Rahmawati', 3.23901),
(28, 'Abit Humam M.', 2.56301),
(29, 'Andhika Muhammad Nur', 2.341),
(30, 'Jagad Talenta', 2.66559),
(31, 'Muhammad Genta Putra M.', 1.87693),
(32, 'Sawung Wijaya', 2.30735),
(33, 'Firmansyah Bayu', 1.91947),
(34, 'Lavetania Putri A.', 2.38399);

-- --------------------------------------------------------

--
-- Table structure for table `wp_vektorv`
--

CREATE TABLE `wp_vektorv` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nilai_vektorv` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wp_vektorv`
--

INSERT INTO `wp_vektorv` (`id`, `nama`, `nilai_vektorv`) VALUES
(1, 'Rinda Tri Kusuma', 0.02904),
(2, 'Ardi Dian Andayani', 0.03621),
(3, 'Venus Sandro M.', 0.03496),
(4, 'Dina Rizky Purbayani', 0.03092),
(5, 'Brillian Maulana W.', 0.02715),
(6, 'Della Eka Ayu P', 0.02175),
(7, 'Mayang Dwi Ningrum', 0.02424),
(8, 'Sylfi Anjarwati', 0.0213),
(9, 'Zela Puspita Rani', 0.029),
(10, 'Dian Astarina Widya P.', 0.02651),
(11, 'Nanda Savitri Dewi', 0.03133),
(12, 'Adynda Surya A. K', 0.02586),
(13, 'Rahma Distya R. H', 0.03966),
(14, 'Khoiri Nisa Nur Arifa', 0.04292),
(15, 'Putri Widianti', 0.03181),
(16, 'Guntur Ega Pratama', 0.03026),
(17, 'Chrisma Ilham S.P', 0.02848),
(18, 'Yenny Kusuma', 0.03942),
(19, 'Marisa Ayu Priyandani', 0.0316),
(20, 'Tegar Wahyu Budiarto', 0.03867),
(21, 'Elfara Yulyastia R. A.', 0.02631),
(22, 'Dhea Rara Aulya', 0.02332),
(23, 'Avryandhani Intan L.', 0.04184),
(24, 'Get Vera Kusniawati E', 0.02495),
(25, 'Masdicky Ridho F', 0.02416),
(26, 'Arjuna Shandi W. S', 0.02814),
(27, 'Dewi Ayu Rahmawati', 0.03528),
(28, 'Abit Humam M.', 0.02792),
(29, 'Andhika Muhammad Nur', 0.0255),
(30, 'Jagad Talenta', 0.02904),
(31, 'Muhammad Genta Putra M.', 0.02045),
(32, 'Sawung Wijaya', 0.02513),
(33, 'Firmansyah Bayu', 0.02091),
(34, 'Lavetania Putri A.', 0.02597);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pembobotan`
--
ALTER TABLE `pembobotan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saw_ranking`
--
ALTER TABLE `saw_ranking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_mhs`
--
ALTER TABLE `tb_mhs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wp_vektors`
--
ALTER TABLE `wp_vektors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wp_vektorv`
--
ALTER TABLE `wp_vektorv`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pembobotan`
--
ALTER TABLE `pembobotan`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `saw_ranking`
--
ALTER TABLE `saw_ranking`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tb_mhs`
--
ALTER TABLE `tb_mhs`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `wp_vektors`
--
ALTER TABLE `wp_vektors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `wp_vektorv`
--
ALTER TABLE `wp_vektorv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
