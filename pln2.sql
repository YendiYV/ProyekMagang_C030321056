-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Sep 2023 pada 03.46
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pln2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cuti`
--

CREATE TABLE `cuti` (
  `id_cuti` varchar(30) NOT NULL,
  `id_user` varchar(256) NOT NULL,
  `alasan` text NOT NULL,
  `tgl_diajukan` date NOT NULL,
  `mulai` date NOT NULL,
  `berakhir` date NOT NULL,
  `id_status_cuti1` int(12) NOT NULL,
  `id_status_cuti2` int(12) NOT NULL,
  `id_status_cuti3` int(12) NOT NULL,
  `perihal_cuti` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cuti`
--

INSERT INTO `cuti` (`id_cuti`, `id_user`, `alasan`, `tgl_diajukan`, `mulai`, `berakhir`, `id_status_cuti1`, `id_status_cuti2`, `id_status_cuti3`, `perihal_cuti`) VALUES
('cuti-66080', 'c551fc8847d29dc25a23db5d2cdb941b', 'Tau', '2023-09-21', '2023-09-21', '2023-09-27', 2, 2, 3, 'Coba Coba');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_kelamin`
--

CREATE TABLE `jenis_kelamin` (
  `id_jenis_kelamin` int(11) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis_kelamin`
--

INSERT INTO `jenis_kelamin` (`id_jenis_kelamin`, `jenis_kelamin`) VALUES
(1, 'Laki-Laki'),
(2, 'Perempuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_cuti`
--

CREATE TABLE `status_cuti` (
  `id_status_cuti` int(11) NOT NULL,
  `status_cuti` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `status_cuti`
--

INSERT INTO `status_cuti` (`id_status_cuti`, `status_cuti`) VALUES
(1, 'Menunggu Konfirmasi'),
(2, 'Izin Cuti Diterima'),
(3, 'Izin Cuti Ditolak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` varchar(256) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `id_user_level` int(11) NOT NULL,
  `id_user_detail` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `email`, `id_user_level`, `id_user_detail`) VALUES
('134e349e4f50a051d8ca3687d6a7de1a', 'admin1', '123', 'admin1@gmail.com', 2, '134e349e4f50a051d8ca3687d6a7de1a'),
('98eb4077470a60a0fe0f7b9d01755557', 'admin', '123', 'admin@gmail.com', 2, '98eb4077470a60a0fe0f7b9d01755557'),
('c551fc8847d29dc25a23db5d2cdb941b', 'rian', '123', 'rian@gmail.com', 1, 'c551fc8847d29dc25a23db5d2cdb941b'),
('dce802a5e29e9ccabc144dfb6a37abbb', 'ika', '123', 'ika@gmail.com', 1, 'dce802a5e29e9ccabc144dfb6a37abbb'),
('eb71208764d1a8a02cdf86a49ccd1489', 'Manajer', '123', 'manajer@gmail.com', 4, 'eb71208764d1a8a02cdf86a49ccd1489'),
('f5972fbf4ef53843c1e12c3ae99e5005', 'supervisior', 'tes123', 'supervisior@gmail.com', 3, 'f5972fbf4ef53843c1e12c3ae99e5005'),
('f7c7b7e19a4ed7a51db593c8efbee984', 'Aminudin', '123', 'aminudin@gmail.com', 1, 'f7c7b7e19a4ed7a51db593c8efbee984');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_detail`
--

CREATE TABLE `user_detail` (
  `id_user_detail` varchar(256) NOT NULL,
  `nama_lengkap` varchar(30) DEFAULT NULL,
  `id_jenis_kelamin` int(12) DEFAULT NULL,
  `no_telp` varchar(30) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `nip` varchar(10) DEFAULT NULL,
  `pangkat` varchar(50) DEFAULT NULL,
  `jabatan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_detail`
--

INSERT INTO `user_detail` (`id_user_detail`, `nama_lengkap`, `id_jenis_kelamin`, `no_telp`, `alamat`, `nip`, `pangkat`, `jabatan`) VALUES
('134e349e4f50a051d8ca3687d6a7de1a', 'Admin1', NULL, NULL, NULL, NULL, NULL, 'Admin'),
('98eb4077470a60a0fe0f7b9d01755557', 'Admin', 1, NULL, NULL, NULL, NULL, 'Admin'),
('c551fc8847d29dc25a23db5d2cdb941b', 'Operator Rian', 2, '+62812781728', 'Jl. Sekip', '2019220028', 'Golo 1', 'Operator'),
('dce802a5e29e9ccabc144dfb6a37abbb', 'Operator Ika', 2, '+62812781728', 'Jl. Sekip', '1111', 'Golo 1', 'Operator'),
('eb71208764d1a8a02cdf86a49ccd1489', 'Manajer Yendi', 1, '081212121212', 'Jl. Hidayatullah No.22', NULL, NULL, 'Manajer'),
('f5972fbf4ef53843c1e12c3ae99e5005', 'Supervisior', 1, NULL, NULL, NULL, NULL, 'Supervisior'),
('f7c7b7e19a4ed7a51db593c8efbee984', 'Operator Aminudin', 1, '+62812781728', 'Jl. Sekip', '2019220028', 'Gol 1', 'Bos');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_level`
--

CREATE TABLE `user_level` (
  `id_user_level` int(11) NOT NULL,
  `user_level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_level`
--

INSERT INTO `user_level` (`id_user_level`, `user_level`) VALUES
(1, 'Operator'),
(2, 'Admin'),
(3, 'Supervisior'),
(4, 'Manager');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cuti`
--
ALTER TABLE `cuti`
  ADD PRIMARY KEY (`id_cuti`);

--
-- Indeks untuk tabel `jenis_kelamin`
--
ALTER TABLE `jenis_kelamin`
  ADD PRIMARY KEY (`id_jenis_kelamin`);

--
-- Indeks untuk tabel `status_cuti`
--
ALTER TABLE `status_cuti`
  ADD PRIMARY KEY (`id_status_cuti`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`id_user_detail`);

--
-- Indeks untuk tabel `user_level`
--
ALTER TABLE `user_level`
  ADD PRIMARY KEY (`id_user_level`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jenis_kelamin`
--
ALTER TABLE `jenis_kelamin`
  MODIFY `id_jenis_kelamin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `status_cuti`
--
ALTER TABLE `status_cuti`
  MODIFY `id_status_cuti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user_level`
--
ALTER TABLE `user_level`
  MODIFY `id_user_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
