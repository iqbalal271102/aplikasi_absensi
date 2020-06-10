-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Agu 2019 pada 05.41
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
-- Database: `lomba_lomba`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_kelas`
--

CREATE TABLE `as_kelas` (
  `id_kelas` int(11) NOT NULL,
  `kelas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `as_kelas`
--

INSERT INTO `as_kelas` (`id_kelas`, `kelas`) VALUES
(1, 'XII.RPL'),
(2, 'XI.RPL'),
(3, 'XII.TKJ'),
(4, 'XI.TKJ'),
(5, 'X.TKJ'),
(6, 'X.RPL');

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_level`
--

CREATE TABLE `as_level` (
  `id_level` int(11) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `as_level`
--

INSERT INTO `as_level` (`id_level`, `level`) VALUES
(1, 'Admin'),
(2, 'Guru'),
(3, 'Orang Tua'),
(4, 'Siswa\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_pelajaran`
--

CREATE TABLE `as_pelajaran` (
  `id_pelajaran` int(11) NOT NULL,
  `pelajaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `as_pelajaran`
--

INSERT INTO `as_pelajaran` (`id_pelajaran`, `pelajaran`) VALUES
(1, 'PWPB'),
(3, 'BASIS DATA'),
(4, 'PBO');

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_siswa`
--

CREATE TABLE `as_siswa` (
  `id_siswa` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `nama_siswa` varchar(255) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `alamat` text NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nomor_telpon` int(13) NOT NULL,
  `nama_ayah` varchar(255) NOT NULL,
  `pekerjaan_ayah` varchar(255) NOT NULL,
  `nama_ibu` varchar(255) NOT NULL,
  `pekerjaan_ibu` varchar(255) NOT NULL,
  `alamat_ortu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `as_siswa`
--

INSERT INTO `as_siswa` (`id_siswa`, `id_kelas`, `nis`, `nama_siswa`, `jenis_kelamin`, `alamat`, `tanggal_lahir`, `nomor_telpon`, `nama_ayah`, `pekerjaan_ayah`, `nama_ibu`, `pekerjaan_ibu`, `alamat_ortu`) VALUES
(1, 2, 987654321, 'IQBAL ALQODRI', 'L', 'Lembayung', '2002-11-27', 2147483647, '', '', '', '', ''),
(2, 2, 1234567890, 'JAKA KERISNA', 'L', 'Talang Jawa', '2001-12-01', 2147483647, '', '', '', '', ''),
(3, 2, 987654322, 'WAHYU AUDINATA LINGGALAWA', 'L', 'Talang Jawa', '2002-12-08', 2147483647, '', '', '', '', ''),
(4, 3, 0, 'ADE SAPUTRA', 'L', 'Talang Jawa', '2001-08-17', 2147483647, '', '', '', '', ''),
(5, 1, 98765444, 'ARIS FADILAH TANJUNG', 'L', 'Pasar Bawah', '2002-11-28', 2147483647, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_users`
--

CREATE TABLE `as_users` (
  `id_users` int(11) NOT NULL,
  `userFullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `id_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `as_users`
--

INSERT INTO `as_users` (`id_users`, `userFullname`, `username`, `password`, `foto`, `id_level`) VALUES
(3, 'IQBAL ALQODRI', 'iqbal', 'iqbal', 'alqodri.jpg', 1),
(4, 'Jaka Kerisna', 'Jaka', 'jaka', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `as_kelas`
--
ALTER TABLE `as_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `as_level`
--
ALTER TABLE `as_level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indeks untuk tabel `as_pelajaran`
--
ALTER TABLE `as_pelajaran`
  ADD PRIMARY KEY (`id_pelajaran`);

--
-- Indeks untuk tabel `as_siswa`
--
ALTER TABLE `as_siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indeks untuk tabel `as_users`
--
ALTER TABLE `as_users`
  ADD PRIMARY KEY (`id_users`),
  ADD KEY `id_level` (`id_level`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `as_kelas`
--
ALTER TABLE `as_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `as_level`
--
ALTER TABLE `as_level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `as_pelajaran`
--
ALTER TABLE `as_pelajaran`
  MODIFY `id_pelajaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `as_siswa`
--
ALTER TABLE `as_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `as_users`
--
ALTER TABLE `as_users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `as_pelajaran`
--
ALTER TABLE `as_pelajaran`
  ADD CONSTRAINT `as_pelajaran_ibfk_1` FOREIGN KEY (`id_pelajaran`) REFERENCES `as_guru` (`id_pelajaran`);

--
-- Ketidakleluasaan untuk tabel `as_siswa`
--
ALTER TABLE `as_siswa`
  ADD CONSTRAINT `as_siswa_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `as_kelas` (`id_kelas`);

--
-- Ketidakleluasaan untuk tabel `as_users`
--
ALTER TABLE `as_users`
  ADD CONSTRAINT `as_users_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `as_level` (`id_level`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
