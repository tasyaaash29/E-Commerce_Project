-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2023 at 05:29 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbtokohp`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori_produk`
--

CREATE TABLE `kategori_produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `kategori_produk`
--

INSERT INTO `kategori_produk` (`id`, `nama`) VALUES
(6, 'Samsung'),
(8, 'iphone'),
(9, 'xiomi'),
(10, 'ASUS');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_pemesan` varchar(45) NOT NULL,
  `alamat_pemesan` varchar(45) NOT NULL,
  `jumlah_pesanan` int(11) NOT NULL,
  `produk_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `foto` blob NOT NULL,
  `deskripsi` text NOT NULL,
  `kategori_produk_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama`, `harga`, `stok`, `foto`, `deskripsi`, `kategori_produk_id`) VALUES
(8, 'iPhone 14 Pro Max', 21670, 100, 0x68747470733a2f2f6a2e746f7034746f702e696f2f705f323638397563356374312e706e67, 'iPhone 14 Pro Max. Memotret detail menakjubkan dengan kamera Utama 48 MP. Nikmati iPhone dalam cara yang sepenuhnya baru dengan layar yang Selalu Aktif dan Dynamic Island. Deteksi Tabrakan, sebuah fitur keselamatan baru, memanggil bantuan saat Anda tak bisa. Isi Kotak : • iPhone dengan iOS 16. • Kabel USB-C ke Lightning. • Buku Manual dan dokumentasi lain.', 8),
(9, 'Samsung Galaxy Z flip 4 5G Ex Sein', 19750, 100, 0x68747470733a2f2f6c2e746f7034746f702e696f2f705f323638397975726468312e706e67, '* 5G *RAM 8GB  * ROM 128gb/ 256/512GB ', 6),
(10, 'SAMSUNG Galaxy S22 Ultra', 23099, 100, 0x68747470733a2f2f662e746f7034746f702e696f2f705f323638397972736735312e6a7067, '- Processor : Qualcomm Snapdragon 8 Gen 1 - Size : 6.8\" - Technology : Dynamic AMOLED 2X - Resolution : QHD+ - Rear Camera Resolution : 108.0 MP + 12.0 MP + 10.0 MP + 10.0 MP - Main Camera Auto Focus : Yes - Rear Camera - OIS : Yes - Rear Camera - Zoom : Optical Zoom at 3x and 10x, Digital Zoom up to 100x - Front Camera Auto Focus : 40.0 MP - Video Resolution : UHD 8K (7680 x 4320) @24fps - RAM : 8GB/12GB - ROM : 128GB/256GB/512GB - SIM Tray : Dual-SIM - Network Type : 5G - USB Interface : USB Type-C - USB Version : USB 3.2 Gen 1 - Earjack : USB Type-C - Bluetooth Version : Bluetooth v5.0 - NFC : Yes - Battery Capacity : 5.000mAh - SamsungDex Support : Yes - S-Pen Support : Yes', 6),
(11, 'SAMSUNG Galaxy Tab S7 FE 5G', 9499, 100, 0x68747470733a2f2f632e746f7034746f702e696f2f705f32363839706c61756d312e6a7067, 'The beauty in simplicity Level up work and play Much more than a pen Enjoy seamless multi-device experience', 6),
(12, 'Redmi Pad', 3140, 100, 0x68747470733a2f2f6a2e746f7034746f702e696f2f705f323638396767336d38312e6a7067, 'Layar 10,61” beresolusi 2K,90Hz Baterai awet 8000mAh (typ) Total RAM hingga 8GB(6GB+2GB) Quad speaker dengan Dolby Atmos® Prosesor gaming Helio G99', 6),
(13, 'iPad Pro (Generasi ke-6)', 14999, 100, 0x68747470733a2f2f692e746f7034746f702e696f2f705f323638393268347276312e6a7067, 'iPad Pro. Dengan performa yang menakjubkan, konektivitas nirkabel super cepat, dan pengalaman Apple Pencil generasi berikutnya. Ditambah, fitur produktivitas dan kolaborasi baru yang andal di iPadOS 16. iPad Pro adalah pengalaman iPad terbaik.   Isi Kotak :  • iPad dengan iPadOS 16. • Kabel USB-C (1 meter). • Adaptor Daya USB-C 20 W. • Buku Manual dan dokumentasi lain.', 8),
(14, 'HP Notebook 14s-cf2516TU', 6104, 50, 0x68747470733a2f2f652e746f7034746f702e696f2f705f323638397a65397174312e6a7067, 'Processor : Intel Celeron N4020 RAM : 4GB SSD : 256GB VGA : Integrated Konektivitas : Wifi + Bluetooth Ukuran Layar : 14 inch HD Sistem Operasi : WIndows 10 Home Unit Utama', 6),
(15, 'Samsung Chromebook 4', 8700, 30, 0x68747470733a2f2f6b2e746f7034746f702e696f2f705f323638393035767532312e706e67, 'Tahan lama, desain ringan Koneksi cepat dan mudah Tombol ergonomis', 6),
(16, 'ASUS Zenbook Flip UX362FA EL501T EL502T -i5 ', 14000, 40, 0x68747470733a2f2f672e746f7034746f702e696f2f705f323638396a716c3679312e6a7067, 'ASUS Zenbook Flip UX362FA EL501T EL502T -i5 8265U 8GB 512 13.3FHD W10 * Processor : Intel Core i5-8265U * Graphics : Intel HD * Memory : 8GB LPDDR3 (On Board) * Operating System : Windows 10 (64bit) * Display : 13.3 LED-backlit FHD (1920 x 1080) touchscreen ; 3.5mm-thin bezel with 90% screen-to-body ratio ; Wide 100% sRGB color gamut ; 178 wide-view technology * Storage : 512 PCIE * Wireless Data Network : - 802.11AC - Bluetooth 5.0 * Webcam : HD IR/RGB Combo Camera * Ports : - 1x Headphone-out & Audio-in Combo Jack - 1x HDMI - 1x USB 2.0 - 1x USB3.1 Type A (Gen1) - 1x USB3.1 Type C (Gen 2) - 1x Micro SD Card Reader * Battery : 50WHrs, 3S1P, 3-cell Li-ion', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_UNIQUE` (`tanggal`),
  ADD KEY `fk_pesanan_produk1_idx` (`produk_id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_produk_kategori_produk_idx` (`kategori_produk_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `fk_pesanan_produk1` FOREIGN KEY (`produk_id`) REFERENCES `produk` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `fk_produk_kategori_produk` FOREIGN KEY (`kategori_produk_id`) REFERENCES `kategori_produk` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
