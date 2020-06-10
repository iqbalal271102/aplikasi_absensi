-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Agu 2019 pada 05.42
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lomba_smk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_kelas`
--

CREATE TABLE `as_kelas` (
  `id_kelas` int(11) NOT NULL,
  `kelas` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `as_kelas`
--

INSERT INTO `as_kelas` (`id_kelas`, `kelas`) VALUES
(15, 'X.RPL'),
(16, 'XI.RPL'),
(17, 'XII.RPL'),
(18, 'X.TKJ '),
(19, 'Xi.TKJ'),
(20, 'XII.TKJ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_pelajaran`
--

CREATE TABLE `as_pelajaran` (
  `id_pelajaran` int(11) NOT NULL,
  `pelajaran` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `as_pelajaran`
--

INSERT INTO `as_pelajaran` (`id_pelajaran`, `pelajaran`) VALUES
(1, 'BAHASA INDONESIA'),
(2, 'BAHASA INGGRIS'),
(3, 'IPA'),
(4, 'IPS'),
(5, 'MTK'),
(8, 'PEMEROGRAMAN BERORIENTASI OBJEK'),
(6, 'penjas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_siswa`
--

CREATE TABLE `as_siswa` (
  `id_siswa` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `nama_siswa` varchar(200) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nomor_telpon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `as_siswa`
--

INSERT INTO `as_siswa` (`id_siswa`, `id_kelas`, `nis`, `nama_siswa`, `jenis_kelamin`, `alamat`, `tanggal_lahir`, `nomor_telpon`) VALUES
(1, 0, 987654321, 'IQBAL ALQODRI', 'L', 'LEBAYUNG', '2002-11-27', '0822-8217-599'),
(7, 6, 2147483647, 'Iqbal Alqodri', 'L', 'Lembayun', '2002-11-27', '082282175993'),
(8, 17, 9876543, 'Wahyu Awdinata Linggalawa', 'L', 'lkjlkjkljljljkjlk', '2002-10-05', '0982282175993'),
(9, 17, 9798787, 'Iqbal Alqodri', 'L', 'Lembayung', '2002-11-27', '082282175993'),
(10, 17, 97987, 'Amelia Wulandari', 'P', 'LUPA', '9200-02-29', '08979090989'),
(11, 17, 980768978, 'Jaka Kerisna', 'L', 'Talang Jawa', '2001-01-12', '082282175992'),
(12, 17, 2147483647, 'Aris Fadilah Tanjung', 'L', '', '2002-11-29', '082282175994'),
(13, 17, 98765433, 'Akbar Wira Saputra', 'L', 'ATAS', '0000-00-00', '0980909'),
(14, 17, 98765432, 'Fania Ufairoh', 'P', 'Dekat MTQ', '0001-01-01', '0987654321'),
(15, 17, 987654321, 'Wijdan Amarco ', 'L', 'Lembayung', '0001-01-01', '99999999999'),
(16, 20, 990809898, 'pppppp', 'P', 'L', '0000-00-00', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `as_kelas`
--
ALTER TABLE `as_kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_kelas_2` (`id_kelas`);

--
-- Indeks untuk tabel `as_pelajaran`
--
ALTER TABLE `as_pelajaran`
  ADD PRIMARY KEY (`id_pelajaran`),
  ADD UNIQUE KEY `id_pelajaran` (`id_pelajaran`),
  ADD UNIQUE KEY `pelajaran` (`pelajaran`),
  ADD UNIQUE KEY `pelajaran_2` (`pelajaran`),
  ADD KEY `pelajaran_3` (`pelajaran`);

--
-- Indeks untuk tabel `as_siswa`
--
ALTER TABLE `as_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `as_kelas`
--
ALTER TABLE `as_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `as_pelajaran`
--
ALTER TABLE `as_pelajaran`
  MODIFY `id_pelajaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `as_siswa`
--
ALTER TABLE `as_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
