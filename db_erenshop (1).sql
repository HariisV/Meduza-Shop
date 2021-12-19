-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2021 at 11:07 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_erenshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_ID` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`id`, `nama_file`, `jenis`, `post_ID`, `created_at`, `updated_at`) VALUES
(1, '9909_Stefan  Freya Cosmetic PouchTas Kosmetik.jpg', 'Produk', '1', '2021-06-04 11:27:10', '2021-06-04 11:27:10'),
(2, '2797_Jims Honey Tas Selempang Wanita Kezia Sling Bag.jpg', 'Produk', '2', '2021-06-04 11:30:39', '2021-06-04 11:30:39'),
(3, '4230_Jam Tangan Wanita JHW 01 Jam Tangan Fashion Terbaru.jpg', 'Produk', '3', '2021-06-04 11:31:52', '2021-06-04 11:31:52'),
(4, '6645_Sambal Bawang Raja Rawit X Terbaru.jpg', 'Produk', '4', '2021-06-04 11:32:39', '2021-06-04 11:32:39');

-- --------------------------------------------------------

--
-- Table structure for table `metode_pembayaran`
--

CREATE TABLE `metode_pembayaran` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `metode_pembayaran`
--

INSERT INTO `metode_pembayaran` (`id`, `judul`, `isi`, `created_at`, `updated_at`) VALUES
(1, 'BNI Syariah', '<hr />\r\n<p><strong>Atas Nama : Haris Wahyudi<br />\r\nNomor Rekening&nbsp; : 885049031</strong></p>\r\n\r\n<hr />\r\n<p>&nbsp;</p>', '2021-06-05 09:39:06', '2021-06-05 09:39:06');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(17) NOT NULL,
  `stok` int(11) NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(277) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(277) COLLATE utf8mb4_unicode_ci NOT NULL,
  `terjual` int(7) NOT NULL,
  `dilihat` int(7) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `nama_product`, `harga`, `stok`, `photo`, `deskripsi`, `kategori`, `status`, `terjual`, `dilihat`, `created_at`, `updated_at`) VALUES
(1, 'Stefan  Freya Cosmetic PouchTas Kosmetik', 100007, 4, '9909_Stefan  Freya Cosmetic PouchTas Kosmetik.jpg', '<p>Jadwal Operasional CS: Senin - Jumat | 09.00 - 17.00 WIB<br />\r\nJadwal Pengiriman Pesanan: Senin - Jumat | 09.00 - 15.00 WIB<br />\r\n<br />\r\nPadded interior for extra protection<br />\r\nEasily cleaned<br />\r\nWater resistant<br />\r\n<br />\r\nMaterials:<br />\r\nPremium faux leather<br />\r\nSatin lining<br />\r\nStainless steel zipper<br />\r\nHand painted edges with craftsmanship<br />\r\n<br />\r\nDimension: 20 cm x 13 cm x 7 cm</p>', 'Tas', 'Tersedia', 0, 0, '2021-06-04 11:27:10', '2021-06-04 11:27:36'),
(2, 'Jims Honey Tas Selempang Wanita Kezia Sling Bag', 250000, 2, '2797_Jims Honey Tas Selempang Wanita Kezia Sling Bag.jpg', '<p>Ladies, get to know Kezia Bag from Jims Honey. Tas mini dengan bahan kulit sintetis grade A serta perpaduan rantai berwarna gold membuat kezia bag terlihat menawan ketika dipakai.<br />\r\nFREE Exclusive Box - Sehingga sangat cocok untuk dijadikan hadiah untuk orang terkasih maupun diri sendiri ❤️<br />\r\n.<br />\r\nSpesifikasi Produk :<br />\r\nBrand : Jims Honey<br />\r\nSeries : Exclusive Series<br />\r\nTersedia 1 Ruang Penyimpanan, Muat HP Ukuran 14CM + Dompet Kecil / Powerbank<br />\r\nTersedia 1 Slot Penyimpanan Kecil, Muat Kartu<br />\r\nLengkap Kotak Tas + Dustbag<br />\r\nMaterial : Kulit Sintestis Grade A<br />\r\nTali Rantai Tas Bisa Dilepas (Tidak Bisa Di Adjust)<br />\r\nUkuran Tas : 17.5cm x 12cm x 7cm<br />\r\nUkuran Kotak : 19.5cm x 16.5cm x 7.5cm<br />\r\nPengiriman Via Sicepat, JNT, dll = akan kami bungkus dengan bubble wrap<br />\r\nBerat : 500gram<br />\r\n.<br />\r\nBelanja Lebih Cepat, Mudah Dan Nyaman Hanya di Jims Honey Official ^^</p>', 'Tas', 'Tersedia', 0, 0, '2021-06-04 11:30:39', '2021-06-04 11:30:39'),
(3, 'Jam Tangan Wanita JHW 01 Jam Tangan Fashion Terbaru', 139, 3, '4230_Jam Tangan Wanita JHW 01 Jam Tangan Fashion Terbaru.jpg', '<p>JIMS HONEY TIME PIECE JHW-01<br />\r\nJam tangan dengan design minimalis futuristik. Is a perfect companion untuk pergelangan tangan kamu. We love simplicity and we believe, simplicity is the new sexy. Jam tangan stainless steel dengan design yang humble, minimalis modern, sangat cocok untuk kamu yang bergaya hidup minimalis. Ke kantor? ke sekolah? ke kampus? atau sekedar hang out? JIMS HONEY TIMEPIECE JHW 01 dengan keminimalisannya, siap menemani aktivitas harianmu<br />\r\n.<br />\r\nReady to grab yours?<br />\r\n<br />\r\nSpesifikasi Produk :<br />\r\n100% Jims Honey High Quality<br />\r\nElegant, Stylish And Generous<br />\r\nGender : Wanita<br />\r\nTampilan Dial : Analog<br />\r\nBottom Cover = Stainless Steel 304<br />\r\nDiameter : 3,8 CM (*Atau 380 MM)<br />\r\nWater Proof : 3 ATM / 3M (water resistant 3 ATM atau 30M, artinya jam anda hanya mampu tahan terhadap percikan air / hujan tidak disarankan melakukan kegiatan snorkeling, berenang, atau bahkan diving )<br />\r\nLengkap Box Karton (*Kotak Jam Tangan)<br />\r\n<br />\r\nBelanja Lebih Cepat, Mudah Dan Nyaman Di Toko Jims Honey Official ^^</p>', 'Jam', 'Tersedia', 0, 0, '2021-06-04 11:31:52', '2021-06-04 11:31:52'),
(4, 'Sambal Bawang Raja Rawit X Terbaru', 50000, 5, '6645_Sambal Bawang Raja Rawit X Terbaru.jpg', '<p>NOTE PEMBELIAN PRODUK INI :<br />\r\n1. SAAT INI SEMUA ORDER AKAN DIKIRIMKAN DI H+1 SETELAH ORDER (Hari Minggu/tanggal merah tidak termasuk)<br />\r\n2. PRODUK INI TAHAN 3 HARI DI SUHU RUANGAN.<br />\r\n3. AMAN UTK SEGALA JENIS PENGIRIMAN<br />\r\n4. APABILA ADA KETERLAMBATAN PENGIRIMAN DARI PIHAK JNE/TIKI BUKAN MENJADI TANGGUNG JAWAB RAJA RAWIT.<br />\r\n<br />\r\nSambal Bawang Raja Rawit<br />\r\n<br />\r\nSambal bawang Raja Rawit memiliki cita rasa gurih pedas dan terasa bawang merah dan terasi.<br />\r\nDeskripsi rasa : Pedas, asin dan beraroma terasi.<br />\r\nBerat Bersih : 150 ML per pax (sekitar 5 - 6 porsi)<br />\r\nDaya Tahan :<br />\r\n- Suhu Ruangan : 3 - 5 hari<br />\r\n- Kulkas : 1 Bulan.<br />\r\n- Freezer : 1 - 2 Bulan<br />\r\nNote : selalu pakai sendok bersih saat mengambil sambalnya.</p>', 'Makanan', 'Tersedia', 0, 0, '2021-06-04 11:32:39', '2021-06-04 11:32:39');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categori1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categori2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `categori1`, `categori2`, `judul`, `link`, `image`, `created_at`, `updated_at`) VALUES
(1, '/Product|Product', '/Accesoris|Accesoris', 'Collection beautiful wooden ring made by', '/Product', '8622_46431.jpg', '2021-06-04 11:14:55', '2021-06-04 11:14:55'),
(2, '/Photography|Photography', '/Photography|Photography', 'Lens camera overview', '/Photography', '4179_77763.jpg', '2021-06-04 11:15:46', '2021-06-04 11:15:46'),
(3, '/School|School', '/Art|ART', 'All You Need For School Here', '/School', '4392_85211.jpg', '2021-06-04 11:25:08', '2021-06-04 11:25:08');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kabupaten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_pos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `user_id`, `product_id`, `payment`, `total`, `nama_lengkap`, `alamat`, `kabupaten`, `provinsi`, `kode_pos`, `nomor_hp`, `status`, `catatan`, `created_at`, `updated_at`) VALUES
(1, '1', '4', '1', '50000', 'Aris Ovo', 'Jl Laksamana Malahayati', 'Aceh Besar', 'Aceh', '23373', '082288855562', 'Selesai', 'ttr', '2021-06-05 09:39:16', '2021-06-05 09:39:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('L','P') COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('Admin','Customer') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`, `alamat`, `phone`, `gender`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rafi Ahmad', 'rafi@gmail.com', '$2y$10$BBP0x9.zryTmDxo9981cM.5taSOipdoZAf3LeTEfiNwCx9hrhwOaW', 'rafi@gmail.com', 'rafi@gmail.com', 'L', 'Admin', NULL, '2021-06-04 11:11:57', '2021-06-04 11:11:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `metode_pembayaran`
--
ALTER TABLE `metode_pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `metode_pembayaran`
--
ALTER TABLE `metode_pembayaran`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
