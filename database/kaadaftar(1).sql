-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2021 at 07:01 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kaadaftar`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun_moodle`
--

CREATE TABLE `akun_moodle` (
  `id_user` char(8) NOT NULL,
  `password_moodle` char(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun_moodle`
--

INSERT INTO `akun_moodle` (`id_user`, `password_moodle`) VALUES
('S0000005', 'YRa7SjVqCW'),
('S0000007', 'UcKt2eTWzS'),
('S0000009', 'LXibNIZ69O'),
('S0000014', 'YKve3aAKNp'),
('S0000015', 'a7Cgs7jnpf'),
('S0000016', 'JrBnCKftzW'),
('S0000018', 'I3DqCU9qDY'),
('S0000011', 'KZO7gsuxOJ'),
('S0000012', 'q2d9RFJGXX'),
('S0000024', 'szkcoS0FEJ'),
('S0000025', '1F84zxe4jV'),
('S0000027', '1ptWRhyNoS'),
('S0000028', 'YTRasXfIm8'),
('S0000029', 'vkzlmRwxoY'),
('S0000033', 'Mzr8wI15a4'),
('S0000034', '1xezSQ7BiO'),
('S0000036', 'zzBFayILvG'),
('S0000030', '1ZGPIAcyW1'),
('S0000035', 'tWo3txLUye'),
('S0000040', 't12PjPWspe'),
('S0000043', '91E5xWCPLb'),
('S0000047', 'jiSjfISYmd'),
('S0000050', 'Ilg5Y3M8pO'),
('S0000051', '268YvfYSUn'),
('S0000053', 'DDNiw5bUm6'),
('S0000032', 'e3D1h5IN5v'),
('S0000037', '7kUCArRhxx'),
('S0000038', '4G8SZYq9ue'),
('S0000049', 'YcZFO596Bw'),
('S0000054', '0p0ftI3Bs8'),
('S0000057', 'sz7MBDc27l'),
('S0000061', '9HKmkhsUyc'),
('S0000062', 'IkwlDjjIy2'),
('S0000063', 'Y0EM1rU7yb'),
('S0000071', 'cq7gGYGT3M'),
('S0000021', 'cw9ZAzCkyj'),
('S0000023', '0XRB7QMiZk'),
('S0000039', 'JrKJW3kGnQ'),
('S0000048', 'bOieQx525i'),
('S0000052', '8ncGX2P0hd'),
('S0000055', 'T2ywvStW58'),
('S0000058', 'PaUZzygHiv'),
('S0000059', 'oziKc8LXEN'),
('S0000064', 'o41BlTlra9'),
('S0000065', 'QKkYk8sDS1'),
('S0000066', 'KXvHh6XOve'),
('S0000067', 'wfBmvkeqgR'),
('S0000068', 'D3uXRmUGP8'),
('S0000069', 'RSiKPoeX3g'),
('S0000070', 'bMyAMfrKMd'),
('S0000072', 'nUREL2UZCZ'),
('S0000073', 'A2kpQeiTgT'),
('S0000074', '8gCQWeGnIf'),
('S0000075', 'gU0rg5Ogwj'),
('S0000076', '59MDj4oMDB'),
('S0000077', 'cG2RKT53PE'),
('S0000078', 'HNNAoAVhGV'),
('S0000081', 'ZFTM1y81hn'),
('S0000082', 'hw5z3ygJc5'),
('S0000083', 'GajPN0Js7t'),
('S0000084', 'I0Jn9aRJ61'),
('S0000086', 'DEURtV4Isn'),
('S0000088', 'GjIzAQ4IV3'),
('S0000089', 'sz7ISuhX7T'),
('S0000090', 'kg1Nv90Did');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lolos_preliminary`
--

CREATE TABLE `lolos_preliminary` (
  `email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lolos_preliminary`
--

INSERT INTO `lolos_preliminary` (`email`) VALUES
('16shintadp@gmail.com'),
('2017310005@students.perbanas.ac.id'),
('adhilafnn@gmail.com'),
('adinathania@gmail.com'),
('agastya2799@gmail.com'),
('aisyahamalia77@gmail.com'),
('almalausiry@gmail.com'),
('almasathiyah81@gmail.com'),
('amandasista1510@gmail.com'),
('annisanra@gmail.com'),
('annisarachmawati624@gmail.com'),
('arthawulan28@gmail.com'),
('ayundarizqi22@gmail.com'),
('bilanasyia@gmail.com'),
('bisrirahayuningsih808@gmail.com'),
('chmaria1311@gmail.com'),
('deajhovita22@gmail.com'),
('deaskf@gmail.com'),
('defi.fitri19@gmail.com'),
('desiwulandari2303@gmail.com'),
('dewinabilah90@gmail.com'),
('drohhayat@gmail.com'),
('ferikurniawan235@gmail.com'),
('fritamel@gmail.com'),
('indahifa91@gmail.com'),
('jnfajria@gmail.com'),
('karimafatmawati2@gmail.com'),
('mayaprillia1304@gmail.com'),
('minarsih456@yahoo.com'),
('nastitiayunurhasanah@gmail.com'),
('ninda23argita@gmail.com'),
('nurwahyuni@student.ub.ac.id'),
('rekhaasr23@gmail.com'),
('ricky.suhartono@ymail.com'),
('s130318005@student.ubaya.ac.id'),
('s130318034@student.ubaya.ac.id'),
('s130318053@student.ubaya.ac.id'),
('saddamrizky81@gmail.com'),
('shaniaviraaisyah123@gmail.com'),
('shofiatata09@gmail.com'),
('sintapwldr.9f.27@gmail.com'),
('soffiaaudiyan@gmail.com'),
('tarisyapermatasari060101@gmail.com'),
('taufik@sman2pangkep.sch.id'),
('ursulahdiana@gmail.com'),
('yogeswarisista@gmail.com'),
('yopikurniawan36@gmail.com'),
('yulikristiyanti8@gmail.com'),
('zavibis@gmail.com'),
('zyananabila@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_08_29_173817_create_pembayaran_table', 1),
(4, '2020_08_29_173817_create_pendaftaran_table', 1),
(5, '2020_08_29_173817_create_pengguna_table', 1),
(6, '2020_08_29_173817_create_role_table', 1),
(7, '2020_08_29_173818_add_foreign_keys_to_pembayaran_table', 1),
(8, '2020_08_29_173818_add_foreign_keys_to_pengguna_table', 1),
(9, '2020_08_29_174451_verify_user_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` char(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_pendaftaran` char(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `atas_nama_rekening` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_asal` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_rekening` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_pembayaran` timestamp NOT NULL DEFAULT current_timestamp(),
  `total_pembayaran` int(11) NOT NULL,
  `status_pembayaran` int(11) NOT NULL,
  `bukti_pembayaran` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_pendaftaran`, `atas_nama_rekening`, `bank_asal`, `nomor_rekening`, `tanggal_pembayaran`, `total_pembayaran`, `status_pembayaran`, `bukti_pembayaran`) VALUES
('B0001', 'P0001', 'Dea Amartya', 'BCA', '081321421498', '2020-10-15 05:28:02', 150000, 1, 'bdsjfgsgfuisdgfisdf');

--
-- Triggers `pembayaran`
--
DELIMITER $$
CREATE TRIGGER `auto_id_pembayaran` BEFORE INSERT ON `pembayaran` FOR EACH ROW BEGIN
             SELECT SUBSTRING((MAX(`id_pembayaran`)),2,4) INTO @total FROM pembayaran;
                IF (@total >= 1) THEN
                    SET new.id_pembayaran = CONCAT('B',LPAD(@total+1,4,'0'));
                ELSE
                    SET new.id_pembayaran = CONCAT('B',LPAD(1,4,'0'));
                END IF;
            END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_pendaftaran` char(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pendaftar` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `asal_daerah` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `asal_univ_pendaftar` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_pendaftar` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telepon_pendaftar` char(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_line_pendaftar` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scan_ktm` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pas_foto` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scan_suket_aktif` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_pendaftaran` timestamp NOT NULL DEFAULT current_timestamp(),
  `status_pendaftaran` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_pendaftaran`, `nama_pendaftar`, `asal_daerah`, `asal_univ_pendaftar`, `email_pendaftar`, `no_telepon_pendaftar`, `id_line_pendaftar`, `scan_ktm`, `pas_foto`, `scan_suket_aktif`, `tgl_pendaftaran`, `status_pendaftaran`) VALUES
('P0001', 'Dea Amartya Damayanti', NULL, 'Universitas Airlangga', 'deaamartya3@gmail.com', NULL, NULL, NULL, NULL, NULL, '2020-09-29 10:31:21', 1);

--
-- Triggers `pendaftaran`
--
DELIMITER $$
CREATE TRIGGER `auto_id_pendaftaran` BEFORE INSERT ON `pendaftaran` FOR EACH ROW BEGIN
                SELECT SUBSTRING((MAX(`id_pendaftaran`)),2,4) INTO @total FROM pendaftaran;
                IF (@total >= 1) THEN
                    SET new.id_pendaftaran = CONCAT('P',LPAD(@total+1,4,'0'));
                ELSE
                    SET new.id_pendaftaran = CONCAT('P',LPAD(1,4,'0'));
                END IF;
            END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_user` char(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_role` char(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_pendaftaran` char(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_user` tinyint(4) NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_user`, `id_role`, `id_pendaftaran`, `username`, `password`, `email`, `status_user`, `verified`) VALUES
('S0000001', '1', NULL, 'admin1', '$2y$10$rIgfqLSqApY94xaoSJ.UieBmOdURD7UwPHdgynvPMcO.9c6DPc90a', '', 1, 0),
('S0000002', '1', NULL, 'admin2', '$2y$10$qq0.0IFJC.lqbW0DBDYS6.DpC3J3f/oLM4Qh.6G2KpKvEDbIqDPhC', '', 1, 0),
('S0000003', '1', NULL, 'hikmatus', '$2y$10$Onvst6HhEfSVIYO99FgojeMLZFu4Zg5al2SyVDVd0QYP5DarJBBXC', '', 1, 0),
('S0000004', '1', NULL, 'ajengayu', '$2y$10$TNsGEf.NylelNOV8PKm4Kumyp1VQkLpfv68UtxAgtLULSrm7rYet2', '', 1, 0),
('S0000005', '2', 'P0001', 'deaamartya', '$2y$10$UiToQLnq6VX76h3LL51VEO1LjMTM3uhYxG2BQRR3nLwDJHktJv1su', 'deaamartya3@gmail.com', 1, 1);

--
-- Triggers `pengguna`
--
DELIMITER $$
CREATE TRIGGER `auto_id_pengguna` BEFORE INSERT ON `pengguna` FOR EACH ROW BEGIN
                SELECT SUBSTRING((MAX(`id_user`)),2,7) INTO @total FROM pengguna;
                IF (@total >= 1) THEN
                    SET new.id_user = CONCAT('S',LPAD(@total+1,7,'0'));
                ELSE
                    SET new.id_user = CONCAT('S',LPAD(1,7,'0'));
                END IF;
            END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` char(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_role` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `nama_role`) VALUES
('1', 'Admin'),
('2', 'Peserta');

-- --------------------------------------------------------

--
-- Table structure for table `verify_users`
--

CREATE TABLE `verify_users` (
  `id_user` char(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `verify_users`
--

INSERT INTO `verify_users` (`id_user`, `token`, `created_at`, `updated_at`) VALUES
('S0000005', '5c0fa492b3d4a62eba86e81681dfccd4c72d2123', '2020-09-29 03:31:21', '2020-09-29 03:31:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun_moodle`
--
ALTER TABLE `akun_moodle`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lolos_preliminary`
--
ALTER TABLE `lolos_preliminary`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_pendaftaran` (`id_pendaftaran`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_role` (`id_role`),
  ADD KEY `id_pendaftaran` (`id_pendaftaran`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `verify_users`
--
ALTER TABLE `verify_users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`id_pendaftaran`) REFERENCES `pendaftaran` (`id_pendaftaran`);

--
-- Constraints for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD CONSTRAINT `pengguna_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`),
  ADD CONSTRAINT `pengguna_ibfk_2` FOREIGN KEY (`id_pendaftaran`) REFERENCES `pendaftaran` (`id_pendaftaran`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
