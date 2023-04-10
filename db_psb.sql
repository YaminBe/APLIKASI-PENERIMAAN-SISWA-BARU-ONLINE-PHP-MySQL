-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Mar 2018 pada 05.25
-- Versi server: 10.1.28-MariaDB
-- Versi PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_psb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_agama`
--

CREATE TABLE `tb_agama` (
  `kode_agama` varchar(15) NOT NULL,
  `nama_agama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_agama`
--

INSERT INTO `tb_agama` (`kode_agama`, `nama_agama`) VALUES
('A001', 'ISLAM'),
('A002', 'KRISTEN'),
('A003', 'HINDU'),
('A004', 'BUDHA'),
('A005', 'Katolik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `kode_siswa` varchar(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(60) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `anak_ke` int(11) NOT NULL,
  `jml_saudara` int(11) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `asal_sekolah` varchar(50) NOT NULL,
  `nilai_ijazah` int(11) NOT NULL,
  `nisn` varchar(15) NOT NULL,
  `nilai1` int(11) NOT NULL,
  `nilai2` int(11) NOT NULL,
  `nilai3` int(11) NOT NULL,
  `nilai4` int(11) NOT NULL,
  `nilai5` int(11) NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  `level` varchar(15) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`kode_siswa`, `username`, `password`, `pass`, `nama_lengkap`, `jenis_kelamin`, `tempat`, `tgl_lahir`, `anak_ke`, `jml_saudara`, `agama`, `alamat`, `asal_sekolah`, `nilai_ijazah`, `nisn`, `nilai1`, `nilai2`, `nilai3`, `nilai4`, `nilai5`, `keterangan`, `level`, `foto`) VALUES
('S008 ', 'opy ', '7e8feb2276322ecddd4423b649dfd4d9', '123456 ', 'poppy ye', 'Perempuan', 'jakarta', '2018-01-09', 1, 4, 'Islam', ' bukittinggi ', 'ponpes h. abdul karim syu\'aib', 10, '77967575', 90, 80, 90, 50, 70, 'TIDAK DITERIMA', 'siswa', 'tafsir.jpg'),
('S009', 'dika', '0728f877e6f6c4e7fb75fc48361d8674', '200796 ', 'DIKA ANISA FITRI', 'Perempuan', 'MANINJAU', '1996-07-20', 3, 2, 'Islam', ' BUKITTINGGI ', 'SMP N 2 TANJUNG RAYA', 0, '89', 90, 90, 100, 85, 90, 'CADANGAN', 'siswa', 'BootStrap.png'),
('S010', '1', 'c4ca4238a0b923820dcc509a6f75849b', '1', 'Gigih prawira', 'Laki-laki', 'Pasaman', '2018-01-02', 3, 5, 'Islam', 'Tabek Gadang', 'SMPN 01 PADANG', 9080, '25130019', 80, 70, 60, 40, 70, 'DITERIMA', 'siswa', 'agam.png'),
('S011', 'a', '0cc175b9c0f1b6a831c399e269772661', 'a', 'Denni Khai rani', 'Laki-laki', 'HANYA', '2018-01-27', 1, 4, 'Islam', 'BISA  ', 'AKU PUNYA', 9898, '8987', 9, 1, 23, 3, 4, 'TIDAK DITERIMA', 'siswa', 'atomix_user31.png'),
('S012', 'deni', '43f41d127a81c54d4c8f5f93daeb7118', 'deni', 'Deni Khairani', 'Perempuan', 'Bukittinggi', '1995-01-10', 1, 4, 'Islam', 'Guguak Randah ', 'SMPN I KOTO TUO', 7, '2513.001', 90, 70, 70, 70, 60, 'DITERIMA', 'siswa', 'tafsir.jpg'),
('S013', 'ijal', 'be6459a7fd4032689aedd4adad189197', 'ijal', 'afrizal MD', 'Laki-laki', 'kampar', '2018-01-17', 3, 5, 'Islam', ' 13 ', 'SMP IT', 10, '2513001', 90, 80, 70, 7, 50, 'DITERIMA', 'siswa', '26231395_10209194857183399_2287253428173319701_n.jpg'),
('S014', 'wahyu', '32c9e71e866ecdbc93e497482aa6779f', 'wahyu', 'wahyu oktoviandi', 'Laki-laki', 'padang', '2018-01-03', 3, 5, 'Islam', ' tabek gadang ', 'SMP Kayu tanam', 8, '2513400', 90, 90, 80, 30, 30, 'TIDAK DITERIMA', 'siswa', 'atomix_user31.png'),
('S019', 'agung', 'e59cd3ce33a68f536c19fedb82a7936f', 'agung', 'Agung Destian', 'Laki-laki', 'ffh', '2018-01-10', 2, 6, 'Islam', ' Desa Sibak ', 'MTSN AGAM', 6578, '336', 80, 60, 50, 50, 90, 'DITERIMA', 'siswa', '26231395_10209194857183399_2287253428173319701_n.jpg'),
('S020', 'danu', 'a29e5a0efaa2b1521ebea7cf10cd0eab', 'danu', 'Danu andrean', '', '', '0000-00-00', 0, 0, '', 'Balingka', '', 0, '', 0, 0, 0, 0, 0, 'SEDANG DIPROSES OLEH PETUGAS', 'siswa', 'atomix_user31.png'),
('S021', 'tes', '28b662d883b6d76fd96e4ddc5e9ba780', 'tes', 'tes', '', '', '0000-00-00', 0, 0, 'Islam', '   hdf ', '', 0, '', 0, 0, 0, 0, 0, 'DITERIMA', 'siswa', '10304432100006.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `kode_user` varchar(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(60) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `level` varchar(15) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`kode_user`, `username`, `password`, `pass`, `nama_lengkap`, `level`, `gambar`) VALUES
('U001', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'Abdul yamin', 'admin', 'images.jpg'),
('U002', 'yamin', 'b630b447258bc15e19f2797b0b5ee996', 'yamin', 'yamin Bae', 'kepsek', 'atomix_user31.png'),
('U003', 'deni', '43f41d127a81c54d4c8f5f93daeb7118', 'deni', 'Deni Khairani', 'admin', 'atomix_user31.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_agama`
--
ALTER TABLE `tb_agama`
  ADD PRIMARY KEY (`kode_agama`);

--
-- Indeks untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`kode_siswa`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`kode_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
