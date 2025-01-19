-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Jan 2025 pada 13.58
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_web`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akreditasi`
--

CREATE TABLE `akreditasi` (
  `id` int(11) NOT NULL,
  `akreditasi` varchar(255) NOT NULL,
  `nosk` text NOT NULL,
  `masa` date NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `akreditasi`
--

INSERT INTO `akreditasi` (`id`, `akreditasi`, `nosk`, `masa`, `file`) VALUES
(1, 'AKREDITASI BAIK', 'No. 007/SK/LAM-INFOKOM/Ak.B/S/III/2023', '2028-03-29', 'sertifikat.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `dosen` varchar(255) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`id`, `nama`, `dosen`, `foto`) VALUES
(6, 'Achmad Marzuki S.Kom.,M.Kom', 'Informatika', '67822abea9744.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `event_description` varchar(255) NOT NULL,
  `id_kalender` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `fasilitas`
--

INSERT INTO `fasilitas` (`id`, `judul`, `deskripsi`, `foto`) VALUES
(8, 'aula', 'Aula kampus ini terletak di lantai 3 Gedung Utama UNIBA MADURA dan digunakan untuk kegiatan workshop, seminar, kuliah umum, kuliah tamu, pembekalan, pengenalan kehidupan kampus mahasiswa baru, serta kegiatan-kegiatan lain yang diizinkan oleh Rektor UNIBA MADURA.', '6779245eb31b8.jpg'),
(12, 'parkir', 'parkir dosen', '6785fa20374f8.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil`
--

CREATE TABLE `hasil` (
  `id` int(11) NOT NULL,
  `penelitian` text NOT NULL,
  `dosen` text NOT NULL,
  `tahun` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `hasil`
--

INSERT INTO `hasil` (`id`, `penelitian`, `dosen`, `tahun`) VALUES
(2, 'menanam padi', 'Informatika', '2025-01-31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi`
--

CREATE TABLE `informasi` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `informasi`
--

INSERT INTO `informasi` (`id`, `judul`, `deskripsi`, `foto`) VALUES
(7, 'ghuyij', 'desedede', ''),
(8, 'berita kampus 1 berita kampus 1 berita kampus 1 berita kampus 1 berita kampus 1 berita kampus 1 berita kampus 1 berita kampus 1 berita kampus 1 berita kampus 1berita kampus 1', 'berita kampus 1 berita kampus 1 berita kampus 1 berita kampus 1 berita kampus 1 berita kampus 1 berita kampus 1 berita kampus 1 berita kampus 1 berita kampus 1berita kampus', '6785f4d9536eb.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kalender`
--

CREATE TABLE `kalender` (
  `id` int(11) NOT NULL,
  `semester` enum('Ganjil','Genap') NOT NULL,
  `mulai` varchar(45) NOT NULL,
  `sampai` varchar(45) NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kalender`
--

INSERT INTO `kalender` (`id`, `semester`, `mulai`, `sampai`, `file`) VALUES
(6, 'Ganjil', '2024', '2025', 'kalender_akademik.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id` int(11) NOT NULL,
  `lokasi` text NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `wa` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `web` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id`, `lokasi`, `alamat`, `telepon`, `wa`, `email`, `web`) VALUES
(1, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.014798759279!2d113.84186247318036!3d-7.007539868634671!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd9e797e29e7493%3A0x3d2b3e4ec086a13d!2sUniversitas%20Bahaudin%20Mudhary%20Madura%20(UNIBA%20Madura)!5e0!3m2!1sid!2sid!4v1735959889206!5m2!1sid!2sid', 'Jl. Raya Lenteng, No. 10 Batuan, Sumenep - Madura', '6771010', '082181661010', 'info@unibamadura.ac.id', 'unibamadura.ac.id');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kurikulum`
--

CREATE TABLE `kurikulum` (
  `id` int(11) NOT NULL,
  `kurikulum` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kurikulum`
--

INSERT INTO `kurikulum` (`id`, `kurikulum`) VALUES
(1, 'Peraturan Presiden RI No. 8 tahun 2012 tentang Kerangka Kualifikasi Nasional Indonesia (KKNI) berbasis Sistem Kredit Semester;'),
(3, 'Peraturan Menteri Pendidikan dan Kebudayaan Republik Indonesia Nomor 3 Tahun 2020 tentang Standar Nasional Pendidikan Tinggi;'),
(4, 'Buku Panduan Merdeka Belajar – Kampus Merdeka Kementerian Pendidikan dan Kebudayaan tahun 2020;'),
(5, 'Buku Panduan Penyusunan Kurikulum Pendidikan Tinggi di Era Industri 4.0 tahun 2019.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `misi`
--

CREATE TABLE `misi` (
  `id` int(11) NOT NULL,
  `misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `misi`
--

INSERT INTO `misi` (`id`, `misi`) VALUES
(2, 'Menghasilkan lulusan yang berkualitas dan beretika.'),
(3, 'Pembelajaran yang mendasari karir sepanjang hidup secara mandiri.'),
(4, 'Orientasi pada kebutuhan dan perkembangan IPTEK untuk menghasilkan lulusan dengan kualitas tinggi.'),
(5, 'Melakukan penelitian dan pengembangan yang berkelanjutan demi kemajuan ilmu pengetahuan dan teknologi serta bermanfaat bagi masyarakat dengan unggul.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `panduan`
--

CREATE TABLE `panduan` (
  `id` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `panduan`
--

INSERT INTO `panduan` (`id`, `deskripsi`, `foto`) VALUES
(3, ' duds rduds rduds rduds rduds rduds rduds rduds r', '6785f93f640ad.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paragraf`
--

CREATE TABLE `paragraf` (
  `id` int(11) NOT NULL,
  `paragraf` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `paragraf`
--

INSERT INTO `paragraf` (`id`, `paragraf`) VALUES
(1, 'Sistem Pendidikan di Program Studi Informatika diturunkan dari Sistem Pembelajaran UNIBA yang menjabarkan Sistem Pendidikan Nasional sesuai Undang-Undang Republik Indonesia No. 20 tahun 2003. Secara umum, Prodi Informatika memberlakukan sistem Pendidikan berbasis Sistem Kredit Semester dengan tujuan agar setiap peserta didik dapat menentukan dan mengatur strategi proses belajar masing-masing sesuai rencana dan kondisi masing-masing peserta didik.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pedoman`
--

CREATE TABLE `pedoman` (
  `id` int(11) NOT NULL,
  `awal` date NOT NULL,
  `akhir` date NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pedoman`
--

INSERT INTO `pedoman` (`id`, `awal`, `akhir`, `file`) VALUES
(3, '2025-01-01', '2028-08-24', 'lapres_iip.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `judul`, `deskripsi`, `foto`) VALUES
(6, 'guyik', 'bnnn', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sejarah`
--

CREATE TABLE `sejarah` (
  `id` int(11) NOT NULL,
  `paragraf` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `sejarah`
--

INSERT INTO `sejarah` (`id`, `paragraf`) VALUES
(1, 'Sekolah Tinggi Ilmu Ekonomi KH. Bahaudin Mudhary Madura (STIEBA MADURA) merupakan kampus yang baru berdiri dan di resmikan pada tahun 2018 oleh 2 Menteri Riset dan Pendidikan Tinggi Bapak Moh. Nasir dan Menteri Pariwisata Indonesia Bapak Arif yahya bersama Bupati Sumenep Bapak A. Busyro Karim dan ketua Yayasan Qudsiyah Bahaudin Mudhary Bapak Dr. Achsanul Qosasi. Awal mula berdiri, kampus STIEBA MADURA terdiri dari 2 program studi yaitu S1 Akuntansi dan S1 Manajemen. Kemudian pada tahun 2019 tepatnya di bulan September, STIEBA MADURA alih bentuk menjadi UNIVERSITAS setelah di resmikan melalui surat keputusan Menteri Pendidikan dan Kebudayaan yang kemudian berubah nama menjadi Universitas KH. Bahaudin Mudhary Madura (UNIBA MADURA).'),
(2, 'Dalam rangka mencapai tujuan pendidikan nasional sebagaimana tercantum dalam pembukaan Undang-Undang dasar 1945, maka perguruan tinggi memiliki tugas pokok sebagai pusat penyelenggaraan dan pengembangan ilmu pengetahuan, teknologi dan/atau kesenian, sebagai suatu masyarakat ilmiah yang penuh cita-cita luhur, guna mencerdaskan kehidupan bangsa. Sebagai perguruan tinggi yang otonom, Universitas Bahaudin Mudhary Madura (UNIBA MADURA) merupakan bagian dari sistem pendidikan nasional yang berdasarkan Pancasila dan Undang-Undang Dasar 1945 bertujuan menyiapkan mahasiswa menjadi anggota masyarakat yang memiliki kemampuan, kecakapan dan keterampilan dalam pengembangan atau penyebarluasan ilmu pengetahuan, teknologi dan kesenian serta mengupayakan penggunaannya bagi Masyarakat, Bangsa dan Negara.'),
(3, 'Universitas Bahaudin Mudhary Madura (UNIBA MADURA) sebagai perguruan tinggi yang berkedudukan di Sumenep - Madura, memiliki tugas dan tanggung jawab untuk mengembangkan sumber daya manusia sesuai kebutuhan pembangunan, baik di wilayah Sumenep, Madura maupun kawasan Nusantara lainnya, dengan mengingat pula kedudukannya sebagai bagian dari masyarakat ilmiah yang bersifat universal.'),
(4, 'Universitas Bahaudin Mudhary Madura (UNIBA MADURA) sebagai perguruan tinggi yang otonom dan mandiri, dalam menyelenggarakan fungsi, tugas dan tanggung jawabnya untuk merencanakan, mengembangkan program dan penyelenggaraan kegiatan Tri Dharma Perguruan Tinggi serta rujukan pengembangan peraturan umum, peraturan akademik dan prosedur operasional yang berlaku.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tendik`
--

CREATE TABLE `tendik` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tendik`
--

INSERT INTO `tendik` (`id`, `nama`, `jabatan`, `foto`) VALUES
(1, 'Akmal S.Pd.,M.Pd', 'IT', '6781071509d60.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `email`, `password`, `status`) VALUES
(1, 'zaifur rohman', 'iip', 'iip@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `visi`
--

CREATE TABLE `visi` (
  `id` int(11) NOT NULL,
  `visi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `visi`
--

INSERT INTO `visi` (`id`, `visi`) VALUES
(7, 'Menjadi Lembaga Pendidikan yang Unggul, Mandiri dan Berkualitas.');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akreditasi`
--
ALTER TABLE `akreditasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kalender`
--
ALTER TABLE `kalender`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kurikulum`
--
ALTER TABLE `kurikulum`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `misi`
--
ALTER TABLE `misi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `panduan`
--
ALTER TABLE `panduan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `paragraf`
--
ALTER TABLE `paragraf`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pedoman`
--
ALTER TABLE `pedoman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sejarah`
--
ALTER TABLE `sejarah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tendik`
--
ALTER TABLE `tendik`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `visi`
--
ALTER TABLE `visi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akreditasi`
--
ALTER TABLE `akreditasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `kalender`
--
ALTER TABLE `kalender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kurikulum`
--
ALTER TABLE `kurikulum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `misi`
--
ALTER TABLE `misi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `panduan`
--
ALTER TABLE `panduan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `paragraf`
--
ALTER TABLE `paragraf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pedoman`
--
ALTER TABLE `pedoman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `sejarah`
--
ALTER TABLE `sejarah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tendik`
--
ALTER TABLE `tendik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `visi`
--
ALTER TABLE `visi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
