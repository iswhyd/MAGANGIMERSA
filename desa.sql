-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2025 at 04:20 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `desa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(50) DEFAULT NULL,
  `username_admin` varchar(30) DEFAULT NULL,
  `password_admin` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username_admin`, `password_admin`) VALUES
(1, 'Administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `agama`
--

CREATE TABLE `agama` (
  `id` int(11) NOT NULL,
  `kd_agama` varchar(20) DEFAULT NULL,
  `nama_agama` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agama`
--

INSERT INTO `agama` (`id`, `kd_agama`, `nama_agama`) VALUES
(1, 'ISLAM', 'ISLAM'),
(2, 'HINDU', 'HINDU');

-- --------------------------------------------------------

--
-- Table structure for table `agamapenduduk`
--

CREATE TABLE `agamapenduduk` (
  `id` int(11) NOT NULL,
  `tahun` varchar(5) DEFAULT NULL,
  `kdagama` varchar(20) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `jk` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agamapenduduk`
--

INSERT INTO `agamapenduduk` (`id`, `tahun`, `kdagama`, `jumlah`, `jk`) VALUES
(2, '2024', 'ISLAM', 800, 'L'),
(3, '2024', 'HINDU', 90, 'P');

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `id_agenda` int(11) NOT NULL,
  `judul_agenda` varchar(200) DEFAULT NULL,
  `isi_agenda` text DEFAULT NULL,
  `tempat_agenda` varchar(100) DEFAULT NULL,
  `tgl_agenda` date DEFAULT NULL,
  `waktu_agenda` varchar(10) DEFAULT NULL,
  `foto_agenda` varchar(100) DEFAULT NULL,
  `tglinput_agenda` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id_agenda`, `judul_agenda`, `isi_agenda`, `tempat_agenda`, `tgl_agenda`, `waktu_agenda`, `foto_agenda`, `tglinput_agenda`) VALUES
(1, 'JALAN SANTAI HUT DESA LAMBANGKUNING', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', 'Balai Desa Lambangkuning', '2019-01-31', '07:00', 'media/agenda/1546839303.jpg', '2019-01-07 12:35:03'),
(2, 'LOMBA BERSIH DUSUN ROHMAN', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', 'Rumah Kamituwo Dusun', '2019-01-09', '07:00', 'media/agenda/1546839651.jpg', '2024-02-21 12:07:29'),
(3, 'PENGAJIAN UMUM SE KEC.PATIANROWO', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', 'Balai Desa Lambangkuning', '2019-01-21', '10:00', 'media/agenda/1546839510.jpg', '2019-01-07 12:38:30'),
(4, 'LAMBANG KUNING BERSHOLAWAT', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', 'Lapangan Desa Lambangkuning', '2019-01-23', '19:00', 'media/agenda/1546839409.jpg', '2019-01-07 12:36:49');

-- --------------------------------------------------------

--
-- Table structure for table `apbdesbelanja`
--

CREATE TABLE `apbdesbelanja` (
  `id` int(11) NOT NULL,
  `tahun` varchar(5) DEFAULT NULL,
  `kdjenisbelanja` varchar(20) DEFAULT NULL,
  `penyerapan` int(11) DEFAULT NULL,
  `pagu` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `apbdesbelanja`
--

INSERT INTO `apbdesbelanja` (`id`, `tahun`, `kdjenisbelanja`, `penyerapan`, `pagu`) VALUES
(1, '2024', 'makan', 50000, 500000),
(2, '2024', 'minum', 30000, 3000000);

-- --------------------------------------------------------

--
-- Table structure for table `apbdesdapat`
--

CREATE TABLE `apbdesdapat` (
  `id` int(11) NOT NULL,
  `tahun` varchar(5) DEFAULT NULL,
  `kdjenisdapat` varchar(20) DEFAULT NULL,
  `penyerapan` int(11) DEFAULT NULL,
  `pagu` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `apbdesdapat`
--

INSERT INTO `apbdesdapat` (`id`, `tahun`, `kdjenisdapat`, `penyerapan`, `pagu`) VALUES
(1, '2024', 'hibah', 40000000, 80000000),
(2, '2024', 'sumbangan', 500000, 1000000);

-- --------------------------------------------------------

--
-- Table structure for table `apbdespel`
--

CREATE TABLE `apbdespel` (
  `id` int(11) NOT NULL,
  `tahun` varchar(5) NOT NULL,
  `dapat` int(11) DEFAULT NULL,
  `pagudapat` int(11) DEFAULT NULL,
  `belanja` int(11) DEFAULT NULL,
  `pagubelanja` int(11) DEFAULT NULL,
  `biaya` int(11) DEFAULT NULL,
  `pagubiaya` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `apbdespel`
--

INSERT INTO `apbdespel` (`id`, `tahun`, `dapat`, `pagudapat`, `belanja`, `pagubelanja`, `biaya`, `pagubiaya`) VALUES
(1, '2024', 2000000, 10000000, 500000, 780000, 1000, 3000);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(11) NOT NULL,
  `judul_blog` varchar(100) DEFAULT NULL,
  `id_kategoriblog` int(11) DEFAULT NULL,
  `isi_blog` text DEFAULT NULL,
  `foto_blog` varchar(100) DEFAULT NULL,
  `tglinput_blog` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id_blog`, `judul_blog`, `id_kategoriblog`, `isi_blog`, `foto_blog`, `tglinput_blog`) VALUES
(1, 'BUMDes Menyentuh Perekonomian Rakyat Lapisan Paling Bawah', 2, '<p>BUMDes (Badan Usaha Milik Desa) nyatanya memang mampu membangun perekonomian di desa. Sudah ada beberapa desa yang layak untuk dijadikan percontohan. Hanya saja, jumlah desa di Indonesia sangat banyak sehingga prosentase desa yang ikut mengembangkan perekonomian desa melalui BUMDes relatif sangat sedikit.</p>\r\n\r\n<p>Tentu ada alasan. Kurangnya kualitas sumber daya manusia serta kekurangan ide kreasi di setiap masyarakat desa membuat BUMDes hanya bisa ditemukan di beberapa wilayah saja.</p>\r\n\r\n<p>Salah satu&nbsp;<strong>tujuan BUMDes</strong>&nbsp;adalah untuk meningkatkan kesejahteraan asli desa. Berangkat dari tujuan ini, sebenarnya tidak ada patokan bagaimana cara agar desa bisa lebih sejahtera. Semua harus kembali pada apa yang dimiliki desa dan bagaimana mengembangkan potensi tersebut.</p>\r\n\r\n<p>Keuntungan tersebut didapatkan dari proses pengelolaan sampah menjadi biji plastik. Hal ini disebabkan di sana banyak sekali sampah yang sama sekali tidak dikelola. Ternyata, sampah tersebut bisa menghasilkan uang.</p>\r\n\r\n<p>Ini berasal dari kesepakatan warga untuk membangun BUMDes. Dengan suntikan modal Rp 290 juta, BUMDes Berkah dibangun dan fokus untuk mengelola sampah. Hasilnya sudah bisa dirasakan sekarang ini.</p>\r\n', 'media/fotoblog/1546832406.jpg', '2019-01-07 10:40:06'),
(2, 'Perkembangan Desa Bisa Signifikan Asal Tahu Kuncinya', 1, '<p>Desa adalah bagian lingkungan terkecil yang berada di bawah kecamatan dan dipimpin oleh Kepala Desa. Perkembangan desa menjadi titik penting dalam pembangunan sebuah negara. Dengan berkembangnya sebuah desa diharapkan mampu untuk mengatasi dan mengurai permasalahan yang dihadapi di kota. Karena itu, pemerintah berupaya untuk memajukan desa yang tertinggal dengan beberapa program pembangunan desa.</p>\r\n\r\n<h2>Tingkatan Perkembangan Desa</h2>\r\n\r\n<p>Desa memiliki tingkatannya sendiri sesuai dengan kemajuan perkembangan yang dialami oleh desa. Sebuah desa dikatakan mencapai tingkatan maju jika dinilai mampu untuk mengatasi permasalahan yang ada dihadapi desa itu sendiri. Tingkat perkembangan desa dibagi menjadi 3 tingkatan yaitu Desa Swasembada, Desa Swakarya, dan Desa Swadaya.</p>\r\n\r\n<p>Desa Swasembada atau biasa disebut desa maju atau berkembang adalah desa yang masyarakatnya dinilai mampu memanfaatkan dan mengembangkan potensi yang dimiliki desa baik sumber daya alam maupun fasilitas yang disediakan. Berpikiran lebih modern dan perekonomian masyarakatnya sudah terpenuhi.</p>\r\n\r\n<p>Sedangkan desa yang dalam tingkatan Desa Swakarya termasuk desa yang tingkatannya berada dibawah desa swasembada. Desa swakarya adalah desa yang sedang dalam tahap pengembangan, pola pemikiran yang mulai terbuka dan memiliki sarana yang mampu meningkatkan perekonomian, pendidikan, dan bidang lainnya.</p>\r\n', 'media/fotoblog/1546830914.png', '2019-01-07 10:15:14'),
(3, 'Pembagian Beras Miskin Warga Sebagai Bentuk Kesejahteraan', 2, '<p><strong>Jakarta</strong>&nbsp;- Presiden Joko Widodo (Jokowi) meminta kepada seluruh kementerian dan lembaga (K/L) untuk berkontribusi dalam menekan angka kemiskinan di Indonesia.<br />\r\n<br />\r\nHal tersebut diungkapkannya dalam membuka sidang kabinet paripurna yang membahas soal rancangan anggaran pendapatan dan belanja negara (RAPBN) Tahun Anggaran 2018, di Istana Negara, Jakarta, Senin (24/7/2017).<br />\r\n<br />\r\n&quot;Saya minta juga semua kementerian, lembaga untuk memberikan perhatian dalam menekan kemiskinan,&quot; kata Jokowi.<br />\r\n<br />\r\nBelum lama ini, Badan Pusat Statistik (BPS) mencatat jumlah penduduk miskin di Indonesia mengalami kenaikan 6.900 orang dari September 2016 ke Maret 2017.<br />\r\nMantan Wali Kota Solo ini berpendapat, jika dalam pendistribusian rastra (beras sejahtera) sesuai dengan jadwal yang telah ditentukan. Namun, faktanya telah terjadi keterlambatan pendistribusian rastra kepada masyarakat.<br />\r\n<br />\r\n&quot;Kalau kemarin sinkron enggak akan, saya jamin pasti turun yang namanya kemiskinan itu. Hanya keterlambatan rastra itu sampai ke rumah tangga sasaran. Ini tolong hati-hati mengelola hal-hal yang sensitif seperti ini,&quot; tutup dia.</p>\r\n', 'media/fotoblog/1706013032.jpg', '2024-01-23 19:30:52'),
(4, 'Perkembangan Wisata Desa Lambangkuning Lebih Produktif', 3, '<p>Desa adalah bagian yang penting dari suatu masyarakat yang mana tak dapat terpisahkan. Pentingnya desa ini disampaikan oleh berbagai ahli yang memberikan pendapatnya. Oleh karena itulah, keberadaan desa semestinya tidak boleh diremehkan termasuk juga oleh pemerintah karena pentingnya keberadaan desa tersebut. Berikut beberapa definisi desa menurut berbagai ahli.</p>\r\n\r\n<p>Sebelum memulai untuk membaca mengenai definisi desa menurut para ahli, kita sebaiknya melihat terlebih dahulu definisinya. Definisi desa menurut Kamus Besar Bahasa Indonesia atau KBBI, Desa adalah kesatuan wilayah yang dihuni oleh sejulah keluarga yang mempunyai sistem pemerintahan sendiri (dikepalai oleh seorang Kepala Desa) atau desa merupakan kelompok rumah di luar kota yang merupakan kesatuan.</p>\r\n\r\n<p>Kata desa sendiri berasal dari bahasa Sansekerta yakni &ldquo;dhesi&rdquo; yang berarti tempat lahir. Namun, perlahan artian dari desa sendiri berkembang baik yang menambah maknanya hingga mengurangi maknanya sehingga memiliki kesan negatif. Padahal, berbagai ahli berpendapat bahwa desa memiliki berbagai peranan penting.</p>\r\n', 'media/fotoblog/1546832669.jpg', '2019-01-07 10:44:29');

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE `download` (
  `id_download` int(11) NOT NULL,
  `judul_download` varchar(100) DEFAULT NULL,
  `file_download` varchar(100) DEFAULT NULL,
  `didownload` int(11) NOT NULL,
  `tglinput_download` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id_gallery` int(11) NOT NULL,
  `ket_gallery` varchar(100) DEFAULT NULL,
  `id_kategorigallery` int(11) DEFAULT NULL,
  `foto_gallery` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id_gallery`, `ket_gallery`, `id_kategorigallery`, `foto_gallery`) VALUES
(1, '', 1, 'media/gallery/1546833081.jpg'),
(2, '', 2, 'media/gallery/1546833157.jpg'),
(3, '', 1, 'media/gallery/1546833260.JPG'),
(4, '', 1, 'media/gallery/1546833277.jpg'),
(5, 'Saya coba', 1, 'media/gallery/1706013242.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `halaman`
--

CREATE TABLE `halaman` (
  `id_halaman` int(11) NOT NULL,
  `judul_halaman` varchar(100) DEFAULT NULL,
  `isi_halaman` text DEFAULT NULL,
  `tglinput_halaman` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jenisbelanja`
--

CREATE TABLE `jenisbelanja` (
  `id` int(11) NOT NULL,
  `kd_jenisbelanja` varchar(20) DEFAULT NULL,
  `nama_jenisbelanja` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jenisbelanja`
--

INSERT INTO `jenisbelanja` (`id`, `kd_jenisbelanja`, `nama_jenisbelanja`) VALUES
(1, 'makan', 'MAKAN'),
(2, 'minum', 'MINUM');

-- --------------------------------------------------------

--
-- Table structure for table `jenisdapat`
--

CREATE TABLE `jenisdapat` (
  `id` int(11) NOT NULL,
  `kd_jenisdapat` varchar(20) DEFAULT NULL,
  `nama_jenisdapat` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jenisdapat`
--

INSERT INTO `jenisdapat` (`id`, `kd_jenisdapat`, `nama_jenisdapat`) VALUES
(2, 'hibah', 'DANA HIBAH'),
(3, 'sumbangan', 'SUMBANGAN');

-- --------------------------------------------------------

--
-- Table structure for table `kategoriblog`
--

CREATE TABLE `kategoriblog` (
  `id_kategoriblog` int(11) NOT NULL,
  `nama_kategoriblog` varchar(100) DEFAULT NULL,
  `parameter_kategoriblog` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `kategoriblog`
--

INSERT INTO `kategoriblog` (`id_kategoriblog`, `nama_kategoriblog`, `parameter_kategoriblog`) VALUES
(1, 'Dana Desa', 'dana-desa'),
(2, 'Seputar Desa', 'seputar-desa'),
(3, 'Wisata Desa', 'wisata-desa');

-- --------------------------------------------------------

--
-- Table structure for table `kategorigallery`
--

CREATE TABLE `kategorigallery` (
  `id_kategorigallery` int(11) NOT NULL,
  `nama_kategorigallery` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `kategorigallery`
--

INSERT INTO `kategorigallery` (`id_kategorigallery`, `nama_kategorigallery`) VALUES
(1, 'Kegiatan Desa'),
(2, 'Sosialisasi');

-- --------------------------------------------------------

--
-- Table structure for table `linkterkait`
--

CREATE TABLE `linkterkait` (
  `id_linkterkait` int(11) NOT NULL,
  `nama_linkterkait` varchar(100) NOT NULL,
  `link_linkterkait` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `linkterkait`
--

INSERT INTO `linkterkait` (`id_linkterkait`, `nama_linkterkait`, `link_linkterkait`) VALUES
(1, 'Google', 'https://www.google.co.id/?hl=id');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(100) NOT NULL,
  `urutan_menu` int(11) NOT NULL,
  `link_menu` varchar(100) NOT NULL,
  `onoff` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`, `urutan_menu`, `link_menu`, `onoff`) VALUES
(1, 'Home', 1, 'http://localhost/WEBDESA/', ''),
(3, 'Berita Desa', 2, 'http://localhost/WEBDESA/home/blog', ''),
(4, 'Galeri', 3, '#', ''),
(5, 'Agenda', 4, 'http://localhost/WEBDESA/home/agenda', ''),
(6, 'Staff Desa', 5, 'http://localhost/WEBDESA/home/staff', ''),
(7, 'Download', 6, 'http://localhost/WEBDESA/home/download', '');

-- --------------------------------------------------------

--
-- Table structure for table `ourservice`
--

CREATE TABLE `ourservice` (
  `id_ourservice` int(11) NOT NULL,
  `judul_ourservice` varchar(100) NOT NULL,
  `ket_ourservice` text NOT NULL,
  `foto_ourservice` varchar(100) NOT NULL,
  `link_ourservice` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `ourservice`
--

INSERT INTO `ourservice` (`id_ourservice`, `judul_ourservice`, `ket_ourservice`, `foto_ourservice`, `link_ourservice`) VALUES
(1, 'Pelayanan Dokumen', 'Desa kami dengan sepenuh hati melayani dalam pengurusan surat atau dokumen tanpa harus membayar', 'media/ourservice/1546827451.png', '#'),
(2, 'Program Keluarga Sehat', 'Desa kami melayani berbagai kebutuhan dalam pengurusan kesehatan baik  dipusekesmas atau rumah sakit', 'media/ourservice/1546827015.png', ''),
(3, 'Pelayanan Masyarakat', 'Kami menerima masukan atau krikitan sebagai bentuk aspirasi masyarakat dengan respon yang lebih cepat', 'media/ourservice/1546827148.png', ''),
(4, 'Program Wisata Religi', 'Desa kami memliki dan mengelola beberapa tempat wisata sebagai sarana promosi dan menambah pendapatan desa ', 'media/ourservice/1546828553.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `id` int(11) NOT NULL,
  `kd_pekerjaan` varchar(20) DEFAULT NULL,
  `nama_pekerjaan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pekerjaan`
--

INSERT INTO `pekerjaan` (`id`, `kd_pekerjaan`, `nama_pekerjaan`) VALUES
(1, 'tani', 'TANI'),
(3, 'polisi', 'POLISI');

-- --------------------------------------------------------

--
-- Table structure for table `pekerjaanpenduduk`
--

CREATE TABLE `pekerjaanpenduduk` (
  `id` int(11) NOT NULL,
  `tahun` varchar(5) DEFAULT NULL,
  `kdpekerjaan` varchar(20) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `jk` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pekerjaanpenduduk`
--

INSERT INTO `pekerjaanpenduduk` (`id`, `tahun`, `kdpekerjaan`, `jumlah`, `jk`) VALUES
(1, '2024', 'polisi', 90, 'L'),
(2, '2024', 'tani', 55, 'L');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id` int(11) NOT NULL,
  `kd_pendidikan` varchar(20) DEFAULT NULL,
  `nama_pendidikan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id`, `kd_pendidikan`, `nama_pendidikan`) VALUES
(1, 'SMA', 'SMA'),
(2, 'SD', 'SD');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikanpenduduk`
--

CREATE TABLE `pendidikanpenduduk` (
  `id` int(11) NOT NULL,
  `tahun` varchar(5) DEFAULT NULL,
  `kdpendidikan` varchar(20) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `jk` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pendidikanpenduduk`
--

INSERT INTO `pendidikanpenduduk` (`id`, `tahun`, `kdpendidikan`, `jumlah`, `jk`) VALUES
(1, '2024', 'SD', 50, 'L'),
(2, '2024', 'SD', 90, 'P');

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `id` int(11) NOT NULL,
  `tahun` varchar(5) DEFAULT NULL,
  `cowok` int(11) DEFAULT NULL,
  `cewek` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`id`, `tahun`, `cowok`, `cewek`) VALUES
(1, '2023', 12500, 24981),
(2, '2024', 25000, 50001);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id_slider` int(11) NOT NULL,
  `ket_slider` varchar(100) DEFAULT NULL,
  `des_slider` text NOT NULL,
  `foto_slider` varchar(100) DEFAULT NULL,
  `status_slider` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id_slider`, `ket_slider`, `des_slider`, `foto_slider`, `status_slider`) VALUES
(1, 'PEMBINAAN BERCOCOK TANAM DENGAN EFEKTIF', 'Desa kami mendatangkan ahli pertanian guna memberikan sosialisasi untuk para petani', 'media/slider/1546831276.jpg', 'on'),
(3, 'PERBAIKAN JALAN RUSAK', 'Dana desa digunakan untuk perbaikan jalan rusak', 'media/slider/1546831833.jpeg', 'on'),
(4, 'SYUKURAN HASIL PANEN DESA LAMBANGKUNING', 'Tradisi desa kami setelah masa panen dan menyambut masa menanam kembali', 'media/slider/1546832179.jpg', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id_staff` int(11) NOT NULL,
  `nama_staff` varchar(100) DEFAULT NULL,
  `jabatan_staff` varchar(100) NOT NULL,
  `nip_staff` varchar(30) DEFAULT NULL,
  `teml_staff` varchar(50) DEFAULT NULL,
  `tangl_staff` date DEFAULT NULL,
  `alamat_staff` text DEFAULT NULL,
  `foto_staff` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `submenu`
--

CREATE TABLE `submenu` (
  `id_submenu` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `nama_submenu` varchar(100) NOT NULL,
  `urutan_submenu` int(11) NOT NULL,
  `link_submenu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `submenu`
--

INSERT INTO `submenu` (`id_submenu`, `id_menu`, `nama_submenu`, `urutan_submenu`, `link_submenu`) VALUES
(1, 4, 'Galeri Foto', 1, 'http://localhost/WEBDESA/home/galerifoto'),
(2, 4, 'Galeri Video', 2, 'http://localhost/WEBDESA/home/galerivideo');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id_video` int(11) NOT NULL,
  `ket_video` text DEFAULT NULL,
  `link_video` text DEFAULT NULL,
  `tglinput_video` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id_video`, `ket_video`, `link_video`, `tglinput_video`) VALUES
(1, 'KUMPULAN DOKUMENTASI KEGIATAN DESA', 'https://www.youtube.com/watch?v=uogCYf4eujI', '2019-01-07 10:56:48'),
(2, 'Kegiatan KKN UMP 2018 Kelompok 23 Desa Lambangkuning,', 'https://www.youtube.com/watch?v=oCXkjXxs2CI', '2019-01-07 10:57:43'),
(3, 'Video kegiatan Musyawarah Masyarakat Desa / RW', 'https://www.youtube.com/watch?v=t9R-5h1KnOA', '2019-01-07 10:58:24');

-- --------------------------------------------------------

--
-- Table structure for table `website`
--

CREATE TABLE `website` (
  `id_website` int(11) NOT NULL,
  `nama_website` varchar(100) DEFAULT NULL,
  `logo_website` varchar(100) DEFAULT NULL,
  `logo_menu` varchar(100) NOT NULL,
  `nama_email` varchar(100) DEFAULT NULL,
  `protocol_email` varchar(100) DEFAULT NULL,
  `smtp_host_email` varchar(100) DEFAULT NULL,
  `smtp_user_email` varchar(100) DEFAULT NULL,
  `smtp_pass_email` varchar(100) DEFAULT NULL,
  `smtp_port_email` varchar(100) DEFAULT NULL,
  `alamat_desa` varchar(200) NOT NULL,
  `tlp_desa` varchar(30) NOT NULL,
  `email_desa` varchar(100) NOT NULL,
  `facebook` text NOT NULL,
  `twitter` text NOT NULL,
  `youtube` text NOT NULL,
  `instagram` text NOT NULL,
  `sambutan_kades` text NOT NULL,
  `foto_kades` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `website`
--

INSERT INTO `website` (`id_website`, `nama_website`, `logo_website`, `logo_menu`, `nama_email`, `protocol_email`, `smtp_host_email`, `smtp_user_email`, `smtp_pass_email`, `smtp_port_email`, `alamat_desa`, `tlp_desa`, `email_desa`, `facebook`, `twitter`, `youtube`, `instagram`, `sambutan_kades`, `foto_kades`) VALUES
(1, 'DESA LAMBANGKUNING', 'media/logo/1546834280.png', 'media/logo/1546836529.png', 'Admin Desa Lambang Kuning', 'smtp', 'mail.demolapakcode.net', 'admin@demolapakcode.net', 'admin1427', '26', 'Jl. Merdeka No 5 Lambangkuning Kertosono', '+622518680051', 'sandiemail@gmail.com', '#', '#', 'https://www.youtube.com/channel/UCayRCkGe8rPQH_VzXCf5LDg?view_as=subscriber', '#', '<p><em>Assalamualaikum Wr. Wb.</em><br />\r\nSalam sejahtera untuk kita semua.</p>\r\n\r\n<p>&nbsp;Dengan menghaturkan puji syukur kehadirat Allah SWT yang telah menyatukan kita di dalam ikatan tali silaturahmi, semoga kita selalu di dalam lindungan-Nya, amien. Pemerintah Desa Wolo mengucapkan selamat datang di desa kami&nbsp;, yang merupakan Website Pemerintah Desa Lambangkuning.</p>\r\n\r\n<p>Dengan adanya Website Pemerintah Desa Lambangkuning&nbsp;ini, kami berharap dapat sebagai jendela komunikasi, saling tukar informasi yang bermanfaat, dan silaturahmi antara masyarakat yang ada di Desa Lambangkuning khususnya dan seluruh masyarakat lain pada umumnya dapat terjalin dengan baik. Diharapkan pula dengan adanya Website Pemerintah Desa Lambangkuning ini dapat meningkatkan pelayanan terhadap masyarakat, serta tugas pembantuan yang diembankan dari pemerintahan daerah atau pusat.</p>\r\n', 'media/kades/1546839900.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agamapenduduk`
--
ALTER TABLE `agamapenduduk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Indexes for table `apbdesbelanja`
--
ALTER TABLE `apbdesbelanja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apbdesdapat`
--
ALTER TABLE `apbdesdapat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apbdespel`
--
ALTER TABLE `apbdespel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`id_download`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `halaman`
--
ALTER TABLE `halaman`
  ADD PRIMARY KEY (`id_halaman`);

--
-- Indexes for table `jenisbelanja`
--
ALTER TABLE `jenisbelanja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenisdapat`
--
ALTER TABLE `jenisdapat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategoriblog`
--
ALTER TABLE `kategoriblog`
  ADD PRIMARY KEY (`id_kategoriblog`);

--
-- Indexes for table `kategorigallery`
--
ALTER TABLE `kategorigallery`
  ADD PRIMARY KEY (`id_kategorigallery`);

--
-- Indexes for table `linkterkait`
--
ALTER TABLE `linkterkait`
  ADD PRIMARY KEY (`id_linkterkait`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `ourservice`
--
ALTER TABLE `ourservice`
  ADD PRIMARY KEY (`id_ourservice`);

--
-- Indexes for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pekerjaanpenduduk`
--
ALTER TABLE `pekerjaanpenduduk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendidikanpenduduk`
--
ALTER TABLE `pendidikanpenduduk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id_staff`);

--
-- Indexes for table `submenu`
--
ALTER TABLE `submenu`
  ADD PRIMARY KEY (`id_submenu`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`);

--
-- Indexes for table `website`
--
ALTER TABLE `website`
  ADD PRIMARY KEY (`id_website`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `agama`
--
ALTER TABLE `agama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `agamapenduduk`
--
ALTER TABLE `agamapenduduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id_agenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `apbdesbelanja`
--
ALTER TABLE `apbdesbelanja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `apbdesdapat`
--
ALTER TABLE `apbdesdapat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `apbdespel`
--
ALTER TABLE `apbdespel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `download`
--
ALTER TABLE `download`
  MODIFY `id_download` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_gallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `halaman`
--
ALTER TABLE `halaman`
  MODIFY `id_halaman` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenisbelanja`
--
ALTER TABLE `jenisbelanja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jenisdapat`
--
ALTER TABLE `jenisdapat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategoriblog`
--
ALTER TABLE `kategoriblog`
  MODIFY `id_kategoriblog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategorigallery`
--
ALTER TABLE `kategorigallery`
  MODIFY `id_kategorigallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `linkterkait`
--
ALTER TABLE `linkterkait`
  MODIFY `id_linkterkait` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ourservice`
--
ALTER TABLE `ourservice`
  MODIFY `id_ourservice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pekerjaanpenduduk`
--
ALTER TABLE `pekerjaanpenduduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pendidikanpenduduk`
--
ALTER TABLE `pendidikanpenduduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id_staff` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `submenu`
--
ALTER TABLE `submenu`
  MODIFY `id_submenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `website`
--
ALTER TABLE `website`
  MODIFY `id_website` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
