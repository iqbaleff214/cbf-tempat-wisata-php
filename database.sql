-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Jul 2021 pada 03.05
-- Versi server: 10.4.10-MariaDB
-- Versi PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem_rekomendasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `biaya`
--

CREATE TABLE `biaya` (
  `id_biaya` int(10) NOT NULL,
  `nama_biaya` varchar(100) NOT NULL,
  `bobot_biaya` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Struktur dari tabel `riwayat`
--

CREATE TABLE `riwayat` (
  `id_riwayat` int auto_increment primary key,
  `wisata1` int(11) NOT NULL,
  `wisata2` int(11) NOT NULL,
  `wisata3` int(11) NOT NULL,
  `prokes` float NOT NULL,
  `biaya` float NOT NULL,
  `rating` float NOT NULL,
  `warung_makan` float NOT NULL,
  `tempa_tinap` float NOT NULL,
  `parkir_mobil` float NOT NULL,
  `parkir_motor` float NOT NULL,
  `toilet` float NOT NULL,
  `sewa_alat` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `biaya`
--

INSERT INTO `biaya` (`id_biaya`, `nama_biaya`, `bobot_biaya`) VALUES
(1, '< 20.000', 0.8),
(2, '<= 20.000 < 50.000', 0.7),
(3, '<=50.000 < 70.000', 0.6),
(4, '<= 70.000 <100.000', 0.5),
(5, '<= 100.000 < 150.000', 0.4),
(6, '<=150.000 < 200.000', 0.3),
(7, '<= 200.000 < 500.000', 0.2),
(8, '< 10.000.000', 0.1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pariwisata`
--

CREATE TABLE `pariwisata` (
  `id_wisata` int(10) NOT NULL,
  `nama_wisata` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `kategori` varchar(50) NULL,
  `maps` text NULL,
  `prokes` float NOT NULL,
  `biaya` float NOT NULL,
  `rating` float NOT NULL,
  `warung_makan` float NOT NULL,
  `tempa_tinap` float NOT NULL,
  `parkir_mobil` float NOT NULL,
  `parkir_motor` float NOT NULL,
  `toilet` float NOT NULL,
  `sewa_alat` float NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pariwisata`
--

INSERT INTO `pariwisata` (`id_wisata`, `nama_wisata`, `prokes`, `biaya`, `rating`, `warung_makan`, `tempa_tinap`, `parkir_mobil`, `parkir_motor`, `toilet`, `sewa_alat`, `alamat`, `gambar`, `kategori`) VALUES
(1, 'Pasar Terapung Siring', 0.5, 0.8, 0.5, 0.5, 0.1, 0.5, 0.5, 0.5, 0.1, 'Jalan Kapten Piere Tendean ', '', 'rekreasi'),
(2, 'Labirin Pelaihari', 0.5, 0.8, 0.5, 0.5, 0.1, 0.5, 0.5, 0.5, 0.1, 'sungai Jelai, Tambang Ulang, Kabupaten Tanah Laut, Kalimantan Selatan', '', 'rekreasi'),
(3, 'Goa Batu Hapu', 0.5, 0.8, 0.5, 0.1, 0.1, 0.5, 0.5, 0.5, 0.1, 'batu hapu , hatungan kabupaten Tapin', '', 'rekreasi'),
(4, 'Goa Liang Tapah', 0.5, 0.8, 0.5, 0.1, 0.1, 0.5, 0.5, 0.5, 0.1, 'Garagata, Jaro, Kabupaten Tabalong, Kalimantan Selatan', '', 'rekreasi'),
(5, 'Danau Biru Pengaron', 0.5, 0.8, 0.5, 0.1, 0.1, 0.5, 0.5, 0.1, 0.1, 'Desa Sungkai, Kecamatan simpang empat pengaron', '', 'rekreasi'),
(6, 'Waduk Riam Kanan', 0.5, 0.8, 0.5, 0.5, 0.1, 0.5, 0.5, 0.5, 0.1, 'Tiwingan Lama , Aranio , Banjar , Kalsel', '', 'rekreasi'),
(7, 'Hutan Kota Pinus ', 0.5, 0.8, 0.5, 0.5, 0.1, 0.5, 0.5, 0.5, 0.5, 'Jalan suriansyah ujung , kel mentaos , kec banjarbaru utara', '', 'religi'),
(8, 'Rumah Jomblo', 0.5, 0.8, 0.5, 0.1, 0.1, 0.5, 0.5, 0.1, 0.1, 'Cempaka , Kota Banjarbaru', '', 'rekreasi'),
(9, 'Rumah Warna-warni', 0.5, 0.8, 0.0, 0.5, 0.1, 0.5, 0.5, 0.1, 0.1, 'Jalan Agatis II , sungai miai Banjarmasin Utara', '', 'rekreasi'),
(10, 'Bukit Matan Keladan', 0.5, 0.8, 0.5, 0.5, 0.1, 0.5, 0.5, 0.5, 0.1, 'Desa Tiwingan Lama , Aranio , Banjar , Kalsel', '', 'kuliner'),
(11, 'Air Terjun mandin Damar', 0.5, 0.8, 0.4, 0.1, 0.1, 0.5, 0.5, 0.5, 0.1, 'Desa gunung raya , kecematan mentewe jab tanahbumbu kalsel', '', 'edukasi'),
(12, 'Bukit Tahura sultan adam', 0.5, 0.8, 0.5, 0.5, 0.1, 0.5, 0.5, 0.5, 0.1, 'Mandi angin barat , karang intan , cempaka, banjar , kalsel', '', 'rekreasi'),
(13, 'Taman Edukasi Banua', 0.5, 0.8, 0.5, 0.5, 0.1, 0.5, 0.5, 0.5, 0.1, 'Antasan Besar, Kec. Banjarmasin Tengah, Kota Banjarmasin, Kalimantan Selatan', '', 'rekreasi'),
(14, 'Taman Murjani', 0.5, 0.8, 0.5, 0.5, 0.1, 0.5, 0.5, 0.5, 0.1, 'Jl. Pangeran Antasari, Komet, Kec. Banjarbaru Utara, Kota Banjar Baru, Kalimantan Selatan', '', 'edukasi'),
(15, 'Taman 0 Kilometer', 0.5, 0.8, 0.5, 0.5, 0.1, 0.5, 0.5, 0.5, 0.1, 'Jl. Jendral Sudirman, Antasan Besar, Banjarmasin Tengah, Antasan Besar, Kec. Banjarmasin Tengah, Kota Banjarmasin, Kalimantan Selatan', '', 'rekreasi'),
(16, 'Kolam Renang Idaman', 0.5, 0.8, 0.5, 0.5, 0.1, 0.5, 0.5, 0.5, 0.1, 'Loktabat Sel., Kec. Banjarbaru Selatan, Kota Banjar Baru', '', 'rekreasi'),
(17, 'Bincau', 0.5, 0.8, 0.4, 0.5, 0.1, 0.5, 0.5, 0.5, 0.1, 'Bincau, Martapura, Sungai Ulin, Kec. Banjarbaru Utara, Martapura', '', 'rekreasi'),
(18, 'Waroeng Pondok Bahari', 0.5, 0.8, 0.5, 0.5, 0.1, 0.5, 0.5, 0.5, 0.1, 'Jl. Simp. Kapt. Piere Tedean No.108, RT.016/RW.002, Gadang, Kec. Banjarmasin Tengah, Kota Banjarmasin', '', 'rekreasi'),
(19, 'Soto Bawah Jembatan', 0.5, 0.8, 0.5, 0.5, 0.1, 0.5, 0.5, 0.5, 0.1, 'Jl. Banua Anyar, Benua Anyar, Kec. Banjarmasin Tim., Kota Banjarmasin', '', 'rekreasi'),
(20, 'Kebun Binatang Jahri Saleh', 0.5, 0.8, 0.4, 0.5, 0.1, 0.5, 0.5, 0.5, 0.1, 'Jl. Jahri Saleh, Sungai Jingah, Kec. Banjarmasin Utara, Kota Banjarmasin', 'alam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `parkir_mobil`
--

CREATE TABLE `parkir_mobil` (
  `id_parkirmobil` int(10) NOT NULL,
  `nama_parkirmobil` varchar(100) NOT NULL,
  `bobot_parkirmobil` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `parkir_mobil`
--

INSERT INTO `parkir_mobil` (`id_parkirmobil`, `nama_parkirmobil`, `bobot_parkirmobil`) VALUES
(1, 'Belum Terdapat Lahan Parkir Mobil', 0.1),
(2, 'Tersedia Lahan Parkir Mobil', 0.5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `parkir_motor`
--

CREATE TABLE `parkir_motor` (
  `id_parkirmotor` int(10) NOT NULL,
  `nama_parkirmotor` varchar(100) NOT NULL,
  `bobot_parkirmotor` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `parkir_motor`
--

INSERT INTO `parkir_motor` (`id_parkirmotor`, `nama_parkirmotor`, `bobot_parkirmotor`) VALUES
(1, 'Belum Terdapat Lahan Parkir Motor', 0.1),
(2, 'Terdapat Lahan Parkir Motor', 0.5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `prokes`
--

CREATE TABLE `prokes` (
  `id_prokes` int(10) NOT NULL,
  `nama_prokes` varchar(100) NOT NULL,
  `bobot_prokes` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `prokes`
--

INSERT INTO `prokes` (`id_prokes`, `nama_prokes`, `bobot_prokes`) VALUES
(1, 'Belum Menerapkan Protokol Kesehatan', 0.1),
(2, 'Sudah Menerapkan Protokol Kesehatan', 0.5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rating`
--

CREATE TABLE `rating` (
  `id_rating` int(10) NOT NULL,
  `nama_rating` varchar(100) NOT NULL,
  `bobot_rating` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rating`
--

INSERT INTO `rating` (`id_rating`, `nama_rating`, `bobot_rating`) VALUES
(1, 'Belum Memiliki Rating', 0),
(2, '< Bintang 1', 0.1),
(3, '<= Bintang 1 < Bintang 2', 0.2),
(4, '<= Bintang 2 < Bintang 3', 0.3),
(5, '<= Bintang 3 < Bintang 4', 0.4),
(6, '<= Bintang 4 <= Bintang 5', 0.5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sewa_alat`
--

CREATE TABLE `sewa_alat` (
  `id_sewa` int(10) NOT NULL,
  `nama_sewa` varchar(100) NOT NULL,
  `bobot_sewaalat` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sewa_alat`
--

INSERT INTO `sewa_alat` (`id_sewa`, `nama_sewa`, `bobot_sewaalat`) VALUES
(1, 'Tidak Tersedia Sewa Alat Kemah', 0.1),
(2, 'Tersedia Sewa Alat Kemah', 0.5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tempat_inap`
--

CREATE TABLE `tempat_inap` (
  `id_tempatinap` int(10) NOT NULL,
  `nama_tempatinap` varchar(100) NOT NULL,
  `bobot_tempatinap` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tempat_inap`
--

INSERT INTO `tempat_inap` (`id_tempatinap`, `nama_tempatinap`, `bobot_tempatinap`) VALUES
(1, 'Tidak Tersedia Tempat Inap', 0.1),
(2, 'Tersedia Tempat Inap', 0.5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `toilet`
--

CREATE TABLE `toilet` (
  `id_toilet` int(10) NOT NULL,
  `nama_toilet` varchar(100) NOT NULL,
  `bobot_toilet` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `toilet`
--

INSERT INTO `toilet` (`id_toilet`, `nama_toilet`, `bobot_toilet`) VALUES
(1, 'Tidak Tersedia Toilet', 0.1),
(2, 'Tersedia Toilet', 0.5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `warung_makan`
--

CREATE TABLE `warung_makan` (
  `id_warung` int(10) NOT NULL,
  `nama_warung` varchar(100) NOT NULL,
  `bobot_warung` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `warung_makan`
--

INSERT INTO `warung_makan` (`id_warung`, `nama_warung`, `bobot_warung`) VALUES
(1, 'Tidak Tersedia Warung Makan', 0.1),
(2, 'Tersedia Warung Makan', 0.5);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `biaya`
--
ALTER TABLE `biaya`
  ADD KEY `id_biaya` (`id_biaya`);

--
-- Indeks untuk tabel `pariwisata`
--
ALTER TABLE `pariwisata`
  ADD PRIMARY KEY (`id_wisata`);

--
-- Indeks untuk tabel `parkir_mobil`
--
ALTER TABLE `parkir_mobil`
  ADD KEY `id_parkirmobil` (`id_parkirmobil`);

--
-- Indeks untuk tabel `parkir_motor`
--
ALTER TABLE `parkir_motor`
  ADD KEY `id_parkirmotor` (`id_parkirmotor`);

--
-- Indeks untuk tabel `prokes`
--
ALTER TABLE `prokes`
  ADD KEY `id_prokes` (`id_prokes`);

--
-- Indeks untuk tabel `rating`
--
ALTER TABLE `rating`
  ADD KEY `id_rating` (`id_rating`);

--
-- Indeks untuk tabel `sewa_alat`
--
ALTER TABLE `sewa_alat`
  ADD KEY `id_sewa` (`id_sewa`);

--
-- Indeks untuk tabel `tempat_inap`
--
ALTER TABLE `tempat_inap`
  ADD KEY `id_tempatinap` (`id_tempatinap`);

--
-- Indeks untuk tabel `toilet`
--
ALTER TABLE `toilet`
  ADD KEY `id_toilet` (`id_toilet`);

--
-- Indeks untuk tabel `warung_makan`
--
ALTER TABLE `warung_makan`
  ADD KEY `id_warung` (`id_warung`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `biaya`
--
ALTER TABLE `biaya`
  MODIFY `id_biaya` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pariwisata`
--
ALTER TABLE `pariwisata`
  MODIFY `id_wisata` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `parkir_mobil`
--
ALTER TABLE `parkir_mobil`
  MODIFY `id_parkirmobil` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `parkir_motor`
--
ALTER TABLE `parkir_motor`
  MODIFY `id_parkirmotor` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `prokes`
--
ALTER TABLE `prokes`
  MODIFY `id_prokes` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `rating`
--
ALTER TABLE `rating`
  MODIFY `id_rating` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `sewa_alat`
--
ALTER TABLE `sewa_alat`
  MODIFY `id_sewa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tempat_inap`
--
ALTER TABLE `tempat_inap`
  MODIFY `id_tempatinap` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `toilet`
--
ALTER TABLE `toilet`
  MODIFY `id_toilet` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `warung_makan`
--
ALTER TABLE `warung_makan`
  MODIFY `id_warung` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
