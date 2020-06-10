-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Jul 2019 pada 04.24
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

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
-- Struktur dari tabel `as_admin`
--

CREATE TABLE `as_admin` (
  `id_admin` int(11) NOT NULL,
  `nama_lengkap` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(200) NOT NULL,
  `akses` int(11) NOT NULL,
  `foto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `as_admin`
--

INSERT INTO `as_admin` (`id_admin`, `nama_lengkap`, `username`, `password`, `email`, `akses`, `foto`) VALUES
(1, 'iqbal alqodri', 'iqbal', 'iqbal', 'iqbal@gmail.com', 1, 'alqodri.jpg'),
(10, 'jaka kerisna', 'jaka', 'jaka', 'jaka@gmail.com', 1, ''),
(11, 'iqbal', 'iqbal', 'jaka', 'i', 2, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_guru`
--

CREATE TABLE `as_guru` (
  `id_guru` int(11) NOT NULL,
  `id_pelajaran` int(11) NOT NULL,
  `nip` int(11) NOT NULL,
  `nama_guru` varchar(200) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `jabatan` varchar(200) NOT NULL,
  `tanggal_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `as_guru`
--

INSERT INTO `as_guru` (`id_guru`, `id_pelajaran`, `nip`, `nama_guru`, `username`, `password`, `jenis_kelamin`, `alamat`, `status`, `jabatan`, `tanggal_lahir`) VALUES
(11, 0, 9807978, 'IQBAL ALQODRI', '', '', '', 'IQBAL', 'KAWIN', 'GURU', '2002-11-27'),
(12, 0, 9809809, 'iqbal', '', '', 'L', 'asdkj', 'kjhakjsdhjkh', 'kjhkjhak', '2002-11-27'),
(13, 0, 0, '', '', '', '', '', '', '', '0000-00-00'),
(14, 0, 9809, 'iouoiuo', '', '', '', 'L', 'IOUIOUI', 'UIOUO', '2002-11-27'),
(15, 0, 998979, 'IQBAL', 'wotok', 'wotok', 'L', 'JAKARTA', 'JOMBLO', 'KEPALA SEKOLAH', '2002-11-27'),
(21, 8, 987654321, 'Ikram jasman spd.mmm', '', '', 'L', 'prumnas 25', 'NIKAH', 'Kepala bengkel RPL/TKJ', '2002-11-27');

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
-- Struktur dari tabel `as_orang_tua`
--

CREATE TABLE `as_orang_tua` (
  `id_orang_tua` int(11) NOT NULL,
  `nama_ayah` varchar(250) NOT NULL,
  `nama_ibu` varchar(250) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `telpon` int(15) NOT NULL,
  `pekerjaan_ayah` varchar(250) NOT NULL,
  `perkerjaan_ibu` varchar(250) NOT NULL,
  `nama_siswa` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `as_orang_tua`
--

INSERT INTO `as_orang_tua` (`id_orang_tua`, `nama_ayah`, `nama_ibu`, `alamat`, `telpon`, `pekerjaan_ayah`, `perkerjaan_ibu`, `nama_siswa`) VALUES
(1, 'kgs.saiful.sag', 'faridah.m', 'lembayung', 822821759, 'pns', 'dagang', 'iqbal');

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

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_wali_kelas`
--

CREATE TABLE `as_wali_kelas` (
  `id_wali_kelas` int(11) NOT NULL,
  `id_kelas` varchar(250) NOT NULL,
  `id_pelajaran` varchar(250) NOT NULL,
  `nama_guru` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `as_wali_kelas`
--

INSERT INTO `as_wali_kelas` (`id_wali_kelas`, `id_kelas`, `id_pelajaran`, `nama_guru`, `username`, `password`) VALUES
(1, '', '', 'ikram jasman', 'ikram123', '123'),
(2, '1', '', 'ikram', 'iqbal', 'iqbal'),
(3, '3', '2', 'kjkjhKJHKJ', 'KJHKJH', 'KKJ'),
(8, '4', '1', 'IQBAL ALQODRI ', 'IQBAL', 'IQBAL '),
(9, '17', '8', 'Ir. Dr. Iqbal Alqodri  IT', 'Iqbal', 'iqbal'),
(10, '20', '', 'Ir. Dr. Iqbal Alqodri  IT', 'Iqbal', 'iqbal');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `as_admin`
--
ALTER TABLE `as_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `as_guru`
--
ALTER TABLE `as_guru`
  ADD PRIMARY KEY (`id_guru`),
  ADD KEY `id_pelajaran` (`id_pelajaran`);

--
-- Indeks untuk tabel `as_kelas`
--
ALTER TABLE `as_kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_kelas_2` (`id_kelas`);

--
-- Indeks untuk tabel `as_orang_tua`
--
ALTER TABLE `as_orang_tua`
  ADD PRIMARY KEY (`id_orang_tua`);

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
-- Indeks untuk tabel `as_wali_kelas`
--
ALTER TABLE `as_wali_kelas`
  ADD PRIMARY KEY (`id_wali_kelas`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `as_admin`
--
ALTER TABLE `as_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `as_guru`
--
ALTER TABLE `as_guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `as_kelas`
--
ALTER TABLE `as_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `as_orang_tua`
--
ALTER TABLE `as_orang_tua`
  MODIFY `id_orang_tua` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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

--
-- AUTO_INCREMENT untuk tabel `as_wali_kelas`
--
ALTER TABLE `as_wali_kelas`
  MODIFY `id_wali_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
