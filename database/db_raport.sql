-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2016 at 11:28 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_raport`
--

-- --------------------------------------------------------

--
-- Table structure for table `deskripsi`
--

CREATE TABLE `deskripsi` (
  `iddeskripsi` varchar(15) NOT NULL,
  `nip` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `idmapel` varchar(15) NOT NULL,
  `idkelas` varchar(15) NOT NULL,
  `pengetahuan` varchar(200) NOT NULL,
  `keterampilan` varchar(200) NOT NULL,
  `sikap` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `nip` varchar(50) NOT NULL,
  `namaguru` varchar(30) NOT NULL,
  `jeniskelamin` varchar(10) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tempatlahir` varchar(15) NOT NULL,
  `tanggallahir` date NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`nip`, `namaguru`, `jeniskelamin`, `agama`, `alamat`, `tempatlahir`, `tanggallahir`, `status`) VALUES
('196701061989031003', 'Alit Munawar Holil, S.Pd., M.M', 'Laki-Laki', 'Islam', 'Jalan Dago No.150', 'Bandung', '1983-12-23', 'Aktif'),
('198505272001020001', 'A. Munawar Holilas S.Pd, M.MPD', 'Laki-Laki', 'Islam', 'Jalan', 'Bandung', '1987-09-25', 'Aktif'),
('1985052720010200010', 'Wawan Sukirwan, S.Pd', 'Laki-Laki', 'Khatolik', 'Jalan Cirebon Karapitan No.2', 'Bandung', '1987-02-26', 'Aktif'),
('1985052720010200011', 'Eva Nirmala, SS', 'Perempuan', 'Islam', 'Bandung', 'Bandung', '1987-09-24', 'Aktif'),
('1985052720010200012', 'Lia Elia N, S.Pd', 'Perempuan', 'Islam', 'Bandung', 'Bandung', '1987-09-23', 'Aktif'),
('1985052720010200013', 'Rina Setiani, S.Pd', 'Perempuan', 'Islam', 'Bandung', 'Bandung', '1987-09-25', 'Aktif'),
('1985052720010200014', 'Andar Rahman, S.Pd. I', 'Laki-Laki', 'Islam', 'Cimahi', 'Cimahi', '1987-08-26', 'Aktif'),
('1985052720010200015', 'Sulastri, S.Pd', 'Perempuan', 'Islam', 'Bandung', 'Bandung', '1987-09-27', 'Aktif'),
('1985052720010200016', 'Dede Koswara, S.Pd', 'male', 'Kristen', 'Jl. Radio No 3', 'Padalarang', '1998-12-01', 'on'),
('1985052720010200017', 'Ibnu Nazarudin, S.Pd', 'Laki-Laki', 'Islam', 'Jalan Terusan Buah Batu No. 135', 'Bandung', '1986-02-19', 'Aktif'),
('1985052720010200018', 'Ema Rahmawati, S.Pd', 'Perempuan', 'Kristen', 'Jalan Cirebon Karapitan No.2', 'Cimahai', '1987-09-23', 'Aktif'),
('1985052720010200019', 'Niar Windari, S.Pd', 'Laki-Laki', 'Islam', 'Jalan Kopo No. 56', 'Cikarang', '1986-09-23', 'Aktif'),
('198505272001020002', 'EEM PRIATI, S.Pd', 'Perempuan', 'Islam', 'Cimahi', 'Cimahi', '1985-05-23', 'Aktif'),
('1985052720010200020', 'Ani Tintin Nuraeni, S.S', 'Perempuan', 'Islam', 'Jalan Sukapura Gg Deok No.3', 'Bandung', '1986-01-23', 'Aktif'),
('1985052720010200021', 'Juarsih, S.Pd', 'Perempuan', 'Islam', 'Jalan Terusan Buah Batu No. 135', 'Bandung', '1984-09-23', 'Aktif'),
('1985052720010200022', 'Anton SW, S.Pd', 'Laki-Laki', 'Islam', 'Jalan Sukapura Gg Deok No.3', 'Bandung', '1986-05-12', 'Aktif'),
('1985052720010200023', 'Hj. Sunti Mulyati, S.Pd', 'Perempuan', 'Islam', 'Jalan Sukapura Gg Deok No.3', 'Bandung', '1987-09-21', 'Aktif'),
('198505272001020003', 'Edi Widodo, S.Pd', 'Laki-Laki', 'Khatolik', 'Jalan Kopo No. 56', 'Bandung', '1987-07-21', 'Aktif'),
('198505272001020004', 'Oos Rosyatin, S.Pd', 'Perempuan', 'Kristen', 'Bandung', 'Bandung', '1987-09-25', 'Aktif'),
('198505272001020005', 'Nelly Hernilin, S.Pd', 'Perempuan', 'Islam', 'Jl. Otoiskandarnita No.30', 'Bandung', '1987-08-24', 'Aktif'),
('198505272001020006', 'Sholeh Badruttamam, S.Ag', 'Laki-Laki', 'Islam', 'Bandung', 'Bandung', '1987-07-25', 'Aktif'),
('198505272001020007', 'Puji Rahayu, S.Pd', 'Perempuan', 'Islam', 'Bandung', 'Bandung', '1987-08-22', 'Aktif'),
('198505272001020008', 'Rita Supartika, S.Pd', 'Perempuan', 'Kristen', 'Cimahi', 'Setia Budi', '1987-09-15', 'Aktif'),
('198505272001020009', 'Sofie Aryani Dewi, S.Pd', 'Perempuan', 'Kristen Pr', 'Bandung', 'Bandung', '1987-09-23', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `idkelas` varchar(10) NOT NULL,
  `namakelas` varchar(10) NOT NULL,
  `tahunajaran` varchar(15) NOT NULL,
  `walikelas` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`idkelas`, `namakelas`, `tahunajaran`, `walikelas`) VALUES
('7C01', 'VII C', '2015/2016', '198505272001020001'),
('7D01', 'VII D', '2015/2016', '1985052720010200013'),
('7E01', 'VII E', '2015/2016', '1985052720010200014'),
('7F01', 'VII F', '2015/2016', '198505272001020008');

-- --------------------------------------------------------

--
-- Table structure for table `kelassiswa`
--

CREATE TABLE `kelassiswa` (
  `no` int(10) NOT NULL,
  `idkelas` varchar(10) NOT NULL,
  `nis` int(20) NOT NULL,
  `namasiswa` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelassiswa`
--

INSERT INTO `kelassiswa` (`no`, `idkelas`, `nis`, `namasiswa`) VALUES
(32, '7C01', 15167089, 'Alya Zahra Nabilla'),
(33, '7C01', 15167090, 'Anggi Oktapiani'),
(34, '7C01', 15167091, 'Anisa Rahmawati'),
(35, '7C01', 15167092, 'Arey Rizky Fariza'),
(36, '7C01', 15167093, 'Arif Mustakim'),
(37, '7C01', 15167094, 'Arman Hoerudin'),
(38, '7C01', 15167095, 'Asep Rohman Gunawan'),
(39, '7C01', 15167096, 'Asifa Nazira'),
(40, '7C01', 15167097, 'Bella Pebriana Aritonang'),
(41, '7D01', 15167132, 'Ahasan Hasbialloh Siddiq'),
(42, '7D01', 15167133, 'Almanita Aurella'),
(43, '7D01', 15167134, 'Amalda Nurhasanah'),
(44, '7D01', 15167135, 'Ariel Agustin'),
(45, '7D01', 15167136, 'Devi Fitri Wulandari'),
(46, '7D01', 15167138, 'Huzaizah Azizah Azarine'),
(47, '7D01', 15167137, 'Egga Septia Anggraaeni'),
(48, '7D01', 15167140, 'Ilham Dias Pratama'),
(49, '7D01', 15167142, 'Irfan Maulana N'),
(51, '7D01', 15167143, 'Jamil'),
(52, '7E01', 15167054, 'Faustine Danur Wiranda'),
(53, '7E01', 15167178, 'Ayu Riska Syahputri'),
(54, '7E01', 15167179, 'Cindy Ria Sagala'),
(55, '7E01', 15167180, 'Dheviany Azzahra Wijaya Putri'),
(56, '7E01', 15167182, 'Dinda Nazwa Nurhadisha'),
(58, '7E01', 15167183, 'Ebaad Elrahman'),
(59, '7E01', 15167186, 'Febrina'),
(60, '7E01', 15167187, 'Fricianda Pahiya Denasta'),
(61, '7E01', 15167188, 'Grace Pricilia Cahya'),
(62, '7C01', 15167088, 'Ajrina Firliansyah'),
(63, '7F01', 15167175, 'Ahmad Raffendiesta'),
(64, '7F01', 15167176, 'Amanda Sintya'),
(65, '7F01', 15167177, 'Annisa Mawar Sari'),
(66, '7F01', 15167181, 'Difha Kurnia Saputra'),
(67, '7F01', 15167184, 'Esther Rosida Gultom'),
(68, '7F01', 15167185, 'Farrell Ragezzo Patrick Lambe'),
(69, '7F01', 15167057, 'Hafizh Abqori'),
(70, '7F01', 15167192, 'Ilham Chairul Ikhwan'),
(71, '7F01', 15167141, 'Ira Fadriani'),
(72, '7F01', 15167060, 'Irfan Mauludinsyah');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `idmapel` varchar(10) NOT NULL,
  `namamapel` varchar(20) NOT NULL,
  `kkm` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`idmapel`, `namamapel`, `kkm`) VALUES
('MPL001', 'Matematika', 75),
('MPL002', 'IPA', 75),
('MPL003', 'TIK', 75),
('MPL004', 'Bahasa Indonesia', 75),
('MPL005', 'PKN', 75),
('MPL006', 'IPS', 75),
('MPL007', 'Bahasa Inggris', 75),
('MPL008', 'Elektronika', 75),
('MPL009', 'Agama', 75),
('MPL0010', 'Seni Budaya', 75),
('MPL0012', 'Penjas', 75),
('MPL0013', 'Bahasa Sunda', 75);

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `idnilai` int(11) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `nis` varchar(50) NOT NULL,
  `idkelas` varchar(20) NOT NULL,
  `idmapel` varchar(20) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `tugas` int(11) NOT NULL,
  `harian` int(11) NOT NULL,
  `uts` int(11) NOT NULL,
  `uas` int(11) NOT NULL,
  `keterampilan` int(11) NOT NULL,
  `sikap` int(11) NOT NULL,
  `iddeskripsi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`idnilai`, `nip`, `nis`, `idkelas`, `idmapel`, `semester`, `tugas`, `harian`, `uts`, `uas`, `keterampilan`, `sikap`, `iddeskripsi`) VALUES
(1, '1985052720010200011', '15167088', '7C001', 'MPL0012', 'Ganjil', 0, 0, 0, 0, 0, 0, 'DSR'),
(2, '1985052720010200011', '15167088', '7C001', 'MPL0012', 'Ganjil', 0, 0, 0, 0, 0, 0, 'DSR'),
(3, '1985052720010200011', '15167088', '7C001', 'MPL0012', 'Ganjil', 0, 0, 0, 0, 0, 0, 'DSR'),
(4, '1985052720010200011', '15167088', '7C001', 'MPL0012', 'Ganjil', 0, 0, 0, 0, 0, 0, 'DSR'),
(5, '1985052720010200011', '15167088', '7C001', 'MPL0012', 'Ganjil', 0, 0, 0, 0, 0, 0, 'DSR'),
(6, '1985052720010200011', '15167088', '7C001', 'MPL0012', 'Ganjil', 0, 0, 0, 0, 0, 0, 'DSR'),
(7, '1985052720010200011', '15167088', '7C001', 'MPL0012', 'Ganjil', 0, 0, 0, 0, 0, 0, 'DSR'),
(8, '1985052720010200011', '15167088', '7C001', 'MPL0012', 'Ganjil', 0, 0, 0, 0, 0, 0, 'DSR'),
(9, '1985052720010200011', '15167088', '7C001', 'MPL0012', 'Ganjil', 0, 0, 0, 0, 0, 0, 'DSR'),
(10, '1985052720010200011', '15167088', '7C001', 'MPL0012', 'Ganjil', 0, 0, 0, 0, 0, 0, 'DSR');

-- --------------------------------------------------------

--
-- Table structure for table `pengajar`
--

CREATE TABLE `pengajar` (
  `idpengajar` int(11) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `idkelas` varchar(20) NOT NULL,
  `idmapel` varchar(20) NOT NULL,
  `tahunajaran` varchar(10) NOT NULL,
  `semester` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengajar`
--

INSERT INTO `pengajar` (`idpengajar`, `nip`, `idkelas`, `idmapel`, `tahunajaran`, `semester`) VALUES
(5, '198505272001020007', '7C01', 'MPL007', '2015/2016', 'Ganjil'),
(6, '198505272001020009', '7C01', 'MPL001', '2015', 'Ganjil'),
(7, '1985052720010200017', '7C01', 'MPL0012', '2015/2016', 'Ganjil'),
(9, '1985052720010200011', '7C01', 'MPL004', '2015/2016', 'Ganjil'),
(10, '1985052720010200019', '7C01', 'MPL005', '2015/2016', 'Ganjil'),
(11, '1985052720010200020', '7C01', 'MPL0013', '', 'Ganjil'),
(12, '1985052720010200021', '7C01', 'MPL002', '2015/2016', 'Ganjil'),
(13, '1985052720010200017', '7D01', 'MPL0012', '2015/2016', 'Ganjil'),
(14, '1985052720010200022', '7D01', 'MPL006', '2015/2016', 'Ganjil'),
(15, '1985052720010200014', '7D01', 'MPL009', '2015/2016', 'Ganjil'),
(16, '198505272001020002', '7D01', 'MPL001', '2015/2016', 'Ganjil'),
(17, '1985052720010200016', '7D01', 'MPL001', '2015/2016', 'Ganjil'),
(18, '1985052720010200020', '7E01', 'MPL0013', '2015/2016', 'Ganjil'),
(19, '198505272001020008', '7E01', 'MPL0010', '2015/2016', 'Ganjil'),
(20, '1985052720010200016', '7E01', 'MPL004', '2015/2016', 'Ganjil'),
(21, '1985052720010200017', '7E01', 'MPL0012', '2015/2016', 'Ganjil'),
(22, '1985052720010200023', '7E01', 'MPL007', '2015/2016', 'Ganjil'),
(23, '198505272001020002', '7E01', 'MPL001', '2015/2016', 'Ganjil'),
(24, '1985052720010200021', '7F01', 'MPL002', '2015/2016', 'Ganjil'),
(25, '1985052720010200020', '7F01', 'MPL0013', '2015/2016', 'Ganjil'),
(26, '198505272001020002', '7F01', 'MPL001', '2015/2016', 'Ganjil'),
(27, '1985052720010200023', '7F01', 'MPL007', '2015/2016', 'Ganjil'),
(28, '1985052720010200019', '7F01', 'MPL005', '2015/2016', 'Ganjil');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `idregister` varchar(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `statusadmin` varchar(5) NOT NULL,
  `statusguru` varchar(7) NOT NULL,
  `statuswali` varchar(7) NOT NULL,
  `statuskepalasekolah` varchar(7) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`idregister`, `username`, `password`, `statusadmin`, `statusguru`, `statuswali`, `statuskepalasekolah`, `foto`) VALUES
('RGS001', '1985052720010200016', 'dede', 'Yes', 'No', 'No', 'No', ''),
('RGS002', '196701061989031003', 'alit', 'No', 'No', 'No', 'Yes', ''),
('RGS003', '1985052720010200011', 'eva', 'No', 'Yes', 'No', 'No', '');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nis` int(20) NOT NULL,
  `namasiswa` varchar(50) NOT NULL,
  `jeniskelamin` varchar(15) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `tempatlahir` varchar(20) NOT NULL,
  `tanggallahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `namasiswa`, `jeniskelamin`, `agama`, `alamat`, `tempatlahir`, `tanggallahir`) VALUES
(15167049, 'Anugrah Tampubolon', 'Laki-Laki', 'Kristen', 'Jalan Mohammad Toha No 140', 'Medan', '2001-09-25'),
(15167054, 'Faustine Danur Wiranda', 'Perempuan', 'Islam', 'Bandung', 'Bandung', '2001-09-23'),
(15167057, 'Hafizh Abqori', 'Perempuan', 'Islam', 'Jalan Mangga 12 Dayeuhkolot', 'Cikarang', '2001-06-23'),
(15167060, 'Irfan Mauludinsyah', 'Laki-Laki', 'Islam', 'Bandung', 'Bandung', '2001-09-23'),
(15167088, 'Ajrina Firliansyah', 'Perempuan', 'islam', 'Jalan Cirebon Karapitan No.2', 'Cimahi', '2001-09-23'),
(15167089, 'Alya Zahra Nabilla', 'Perempuan', 'Islam', 'Jalan Desa Gurgur Aek Raja', 'Cimahi', '2001-09-12'),
(15167090, 'Anggi Oktapiani', 'Perempuan', 'Islam', 'Jalan Mangga 2 Dayeuhkolot', 'Bandung', '2001-09-25'),
(15167091, 'Anisa Rahmawati', 'Perempuan', 'Kristen', 'Jalan', 'Karawang', '2001-04-12'),
(15167092, 'Arey Rizky Fariza', 'Laki-Laki', 'Islam', 'Jalan Pelajar Pejuang no 130', 'Bandung', '2001-09-25'),
(15167093, 'Arif Mustakim', 'Laki-Laki', 'Islam', 'Jalan Sukapura Gg Deok No.3', 'Terminal Dago', '2001-09-23'),
(15167094, 'Arman Hoerudin', 'Laki-Laki', 'Islam', 'Jalan Terusan Buah Batu No. 13', 'Bogor', '2001-09-12'),
(15167095, 'Asep Rohman Gunawan', 'Laki-Laki', 'Islam', 'jalan Dayeuhkolot pasar', 'Cikarang', '2001-09-24'),
(15167096, 'Asifa Nazira', 'Perempuan', 'Islam', 'Jalan Mangga 2 Dayeuhkolot', 'Bandung', '2001-09-14'),
(15167097, 'Bella Pebriana Aritonang', 'Perempuan', 'Kristen', 'Jalan Terusan Buah Batu No. 13', 'Medan', '2001-06-23'),
(15167132, 'Ahasan Hasbialloh Siddiq', 'Laki-Laki', 'Islam', 'Jalan Karapitan no 30', 'Bandung', '2001-09-23'),
(15167133, 'Almanita Aurella', 'Perempuan', 'Katolik', 'Jalan Buah Batu no 140', 'Bandung', '2001-04-12'),
(15167134, 'Amalda Nurhasanah', 'Perempuan', 'Islam', 'Jalan Sunda no 30 Bandung', 'Cimahi', '2001-09-14'),
(15167135, 'Ariel Agustin', 'Laki-Laki', 'Katolik', 'Jalan Sukabiru Gg adiyaksa 4', 'Bandung', '2001-08-14'),
(15167136, 'Devi Fitri Wulandari', 'Perempuan', 'Kristen', 'Jalan Radio Palasari no 30', 'Bogor', '2001-07-12'),
(15167137, 'Egga Septia Anggraaeni', 'Perempuan', 'Kristen', 'Jalan Mangga 2 Dayeuhkolot', 'Bandung', '2001-09-23'),
(15167138, 'Huzaizah Azizah Azarine', 'Perempuan', 'Islam', 'Bandung', 'Bandung', '2001-02-15'),
(15167140, 'Ilham Dias Pratama', 'Laki-Laki', 'Islam', 'Bandung', 'Bandung', '2001-09-23'),
(15167141, 'Ira Fadriani', 'Perempuan', 'Islam', 'Jalan Terusan Buah Batu No. 13', 'Bandung', '2001-09-23'),
(15167142, 'Irfan Maulana N', 'Laki-Laki', 'Islam', 'Cimahi', 'Bandugn', '2001-09-23'),
(15167143, 'Jamil', 'Laki-Laki', 'Islam', 'Bandung', 'Bandung', '2001-09-23'),
(15167175, 'Ahmad Raffendiesta', 'Laki-Laki', 'Islam', 'Jalan Mangga 2 Dayeuhkolot', 'Bandung', '2001-09-23'),
(15167176, 'Amanda Sintya', 'Perempuan', 'Islam', 'Jalan Terusan Buah Batu No. 13', 'Bandung', '2001-12-08'),
(15167177, 'Annisa Mawar Sari', 'Perempuan', 'Islam', 'Jalan Cirebon Karapitan No.5', 'Cimahi', '2001-05-02'),
(15167178, 'Ayu Riska Syahputri', 'Perempuan', 'Islam', 'Bandung', 'Bandung', '2001-09-12'),
(15167179, 'Cindy Ria Sagala', 'Perempuan', 'Kristen', 'Jalan Kopo No. 52', 'Medan', '2001-06-23'),
(15167180, 'Dheviany Azzahra Wijaya Putri', 'Perempuan', 'Katolik', 'Jalan Cirebon Karapitan No.3', 'Bandung', '2001-04-12'),
(15167181, 'Difha Kurnia Saputra', 'Perempuan', 'Islam', 'Bandung', 'Bandung', '2001-07-23'),
(15167182, 'Dinda Nazwa Nurhadisha', 'Perempuan', 'Islam', 'Jalan Mangga 2 Dayeuhkolot', 'Cimahi', '2001-03-21'),
(15167183, 'Ebaad Elrahman', 'Laki-Laki', 'Islam', 'Jalan Terusan Buah Batu No. 13', 'Bandung', '2001-02-09'),
(15167184, 'Esther Rosida Gultom', 'Perempuan', 'Kristen', 'Jalan Sukapura Gg Deok No.12', 'Medan', '2001-10-26'),
(15167185, 'Farrell Ragezzo Patrick Lambe', 'Laki-Laki', 'Katolik', 'Jalan Radio Palasari no 40', 'Medan', '2001-09-12'),
(15167186, 'Febrina', 'Perempuan', 'Islam', 'Bandung', 'Bandung', '2001-09-23'),
(15167187, 'Fricianda Pahiya Denasta', 'Perempuan', 'Islam', 'Bandung', 'Bandung', '2001-09-23'),
(15167188, 'Grace Pricilia Cahya', 'Perempuan', 'Katolik', 'Jalan Sukapura Gg Deok No.3', 'Bandung', '2001-07-23'),
(15167192, 'Ilham Chairul Ikhwan', 'Perempuan', 'Katolik', 'Jalan Terusan Buah Batu No. 13', 'Bandung', '2001-01-23');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `username`, `password`, `nama`, `status`, `foto`) VALUES
(2, '6301134091', 'Siahaan25', 'Otto Prayono Santoso Siahaan', 'guru', ''),
(3, '630140450', 'yenilala', 'Yeni Lala', 'admin', ''),
(4003, 'guru', 'guru', 'lala', 'guru', ''),
(4004, 'kepsek', 'kepsek', 'santoso', 'kepalasekolah', ''),
(1, 'otto', 'otto', 'santoso', 'admin', ''),
(4002, 'wali', 'wali', 'yeni', 'walikelas', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `deskripsi`
--
ALTER TABLE `deskripsi`
  ADD PRIMARY KEY (`iddeskripsi`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`idkelas`),
  ADD KEY `walikelas_nip` (`walikelas`);

--
-- Indexes for table `kelassiswa`
--
ALTER TABLE `kelassiswa`
  ADD PRIMARY KEY (`no`),
  ADD KEY `vfk_idkelas` (`idkelas`),
  ADD KEY `vkelassiswa_nis` (`nis`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`idnilai`);

--
-- Indexes for table `pengajar`
--
ALTER TABLE `pengajar`
  ADD PRIMARY KEY (`idpengajar`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`idregister`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kelassiswa`
--
ALTER TABLE `kelassiswa`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `idnilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `pengajar`
--
ALTER TABLE `pengajar`
  MODIFY `idpengajar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `kelassiswa`
--
ALTER TABLE `kelassiswa`
  ADD CONSTRAINT `vfk_idkelas` FOREIGN KEY (`idkelas`) REFERENCES `kelas` (`idkelas`),
  ADD CONSTRAINT `vkelassiswa_nis` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
