-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2022 at 05:36 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpakar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `password`, `level`, `status`, `created_date`, `modified_date`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'A', '2015-10-12 10:23:00', NULL),
(2, 'edi', '7b8a17c3f48d4453fde0fd74b4fa9212', 'staf', 'A', '2015-12-23 12:00:00', NULL),
(3, 'sutanto', '4b583376b2767b923c3e1da60d10de59', 'operator', 'A', '2015-12-23 12:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `analisa_hasil`
--

CREATE TABLE `analisa_hasil` (
  `id` int(4) UNSIGNED ZEROFILL NOT NULL,
  `nama` varchar(60) NOT NULL,
  `kelamin` enum('P','W') NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` int(16) NOT NULL,
  `kd_solusi` char(4) NOT NULL,
  `noip` varchar(60) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `analisa_hasil`
--

INSERT INTO `analisa_hasil` (`id`, `nama`, `kelamin`, `alamat`, `no_telp`, `kd_solusi`, `noip`, `tanggal`) VALUES
(0101, 'aaaa', 'P', 'Jambi', 0, 'P008', '::1', '2014-12-10 03:26:18'),
(0100, 'Mira', 'W', 'Jalan Samudra Kota Jambi', 0, 'P008', '::1', '2014-06-10 16:16:34'),
(0099, 'Bibi', 'P', 'Jambi', 0, 'P015', '::1', '2014-06-10 16:01:21'),
(0102, 'NINJA EXPRESS', 'P', 'dsadxzc', 0, 'P008', '::1', '2022-04-21 21:06:17'),
(0103, 'NINJA EXPRESS', 'P', 'dsadxzc', 0, 'P004', '::1', '2022-04-21 21:41:06'),
(0104, 'NINJA EXPRESS', 'P', 'dsadxzc', 0, 'P014', '::1', '2022-04-21 21:44:34'),
(0105, 'NINJA EXPRESS', 'P', 'dsadxzc', 0, 'P008', '::1', '2022-04-22 22:35:21'),
(0106, 'NINJA EXPRESS', 'P', 'dsadxzc', 0, 'P008', '::1', '2022-04-22 23:17:16'),
(0107, 'NINJA EXPRESS', 'P', 'dsadxzc', 0, 'P008', '::1', '2022-04-22 23:17:16'),
(0108, 'SAP Express', 'P', 'dsadxzc', 0, 'P008', '::1', '2022-05-14 06:28:07'),
(0109, 'NINJA EXPRESS', 'P', 'dsadxzc', 0, 'P004', '::1', '2022-05-14 06:31:19'),
(0110, 'NINJA EXPRESS', 'P', 'dsadxzc', 0, 'P008', '::1', '2022-05-14 14:24:10'),
(0111, 'NINJA EXPRESS', 'P', 'dsadxzc', 0, 'P05', '::1', '2022-06-19 16:13:53'),
(0112, 'NINJA EXPRESS', 'P', 'dsadxzc', 0, 'P01', '::1', '2022-06-19 16:51:14'),
(0113, 'NINJA EXPRESS', 'P', 'dsadxzc', 0, 'P01', '::1', '2022-06-19 16:51:14'),
(0114, 'NINJA EXPRESS', 'P', 'dsadxzc', 0, '', '::1', '2022-06-19 16:54:24'),
(0115, 'NINJA EXPRESS', 'P', 'dsadxzc', 0, '', '::1', '2022-06-19 16:54:38'),
(0116, 'SAP Express', 'P', 'dsadxzc', 0, '', '::1', '2022-06-19 16:54:47'),
(0117, 'mohammadalfian', 'P', 'tess', 0, '', '::1', '2022-06-19 16:55:01'),
(0118, 'alfian', 'P', 'banjar', 0, '', '::1', '2022-06-19 17:10:35'),
(0119, 'alfian', 'P', 'banjar', 0, 'P01', '::1', '2022-06-19 17:11:41'),
(0120, 'alfian', 'P', 'banjar', 0, 'P04', '::1', '2022-06-19 17:28:50'),
(0121, 'alfian', 'P', 'banjar', 0, 'P04', '::1', '2022-06-19 17:28:50'),
(0122, 'alfian', 'P', 'banjar', 0, 'P04', '::1', '2022-06-19 17:29:09'),
(0123, 'alfian', 'P', 'banjar', 0, 'P04', '::1', '2022-06-19 17:29:09'),
(0124, 'apin', 'P', 'banjar', 0, 'P04', '::1', '2022-06-19 17:29:32'),
(0125, 'apin', 'P', 'banjar', 0, 'P04', '::1', '2022-06-19 17:29:32'),
(0126, 'NINJA EXPRESS', 'P', 'dsadxzc', 0, 'P04', '::1', '2022-06-19 17:29:50'),
(0127, 'NINJA EXPRESS', 'P', 'dsadxzc', 0, 'P06', '::1', '2022-06-19 17:29:50'),
(0128, 'NINJA EXPRESS', 'P', 'dsadxzc', 0, 'P06', '::1', '2022-06-19 17:29:50'),
(0129, 'NINJA EXPRESS', 'P', 'dsadxzc', 0, 'P06', '::1', '2022-06-19 17:29:50'),
(0130, 'NINJA EXPRESS', 'P', 'dsadxzc', 0, 'P06', '::1', '2022-06-19 17:29:50'),
(0131, 'NINJA EXPRESS', 'P', 'dsadxzc', 0, 'P06', '::1', '2022-06-19 17:29:50'),
(0132, 'NINJA EXPRESS', 'P', 'dsadxzc', 0, 'P06', '::1', '2022-06-19 17:29:50'),
(0133, 'NINJA EXPRESS', 'P', 'dsadxzc', 0, 'P06', '::1', '2022-06-19 17:29:50'),
(0134, 'tes', 'P', 'dsadxzc', 0, 'P06', '::1', '2022-06-19 17:34:24'),
(0135, 'tes', 'P', 'dsadxzc', 0, 'P02', '::1', '2022-06-24 20:34:29'),
(0136, 'NINJA EXPRESS', 'P', 'dsadxzc', 2147483647, 'P02', '::1', '2022-06-24 22:38:19'),
(0137, 'tes', 'P', 'dsadxzc', 2147483647, 'P02', '::1', '2022-06-25 08:51:56'),
(0138, 'tes', 'P', 'dsadxzc', 2147483647, 'P02', '::1', '2022-06-25 08:51:56'),
(0139, 'tes', 'P', 'dsadxzc', 2147483647, 'P02', '::1', '2022-06-25 08:51:56'),
(0140, 'tes', 'P', 'dsadxzc', 2147483647, 'P02', '::1', '2022-06-25 08:59:13'),
(0141, 'NINJA EXPRESS', 'P', 'dsadxzc', 2147483647, 'P02', '::1', '2022-06-25 09:41:07');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(15) NOT NULL,
  `idadmin` varchar(55) DEFAULT NULL,
  `tgl` varchar(55) DEFAULT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `ket` enum('Y','T') DEFAULT NULL,
  `keyword` varchar(100) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `idadmin`, `tgl`, `judul`, `isi`, `foto`, `ket`, `keyword`, `deskripsi`) VALUES
(5, '', '2014-05-15', 'Menggosok Gigi Membuat Badan Bugar', '<p style=\"text-align: justify;\"><strong>Vemale.com</strong>&nbsp;- Bunda, apakah Anda dan keluarga selalu menggosok gigi? Perlu Anda ketahui lho, Bunda. Menggosok itu penting, selain untuk menjaga gigi dan muut tetap sehat, juga membuat badan bugar.&nbsp;Bunda, jika Anda dan keluarga tidak merawat gigi dengan baik, dampaknya tidak hanya pada kerusakan gigi saja lho. Tetapi juga mempengaruhi kesehatan badan dan kebugaran tubuh Anda.&nbsp;Tidak menggosok gigi juga mengurangi sejumlah fungsi organ dalam tubuh dan akan menyebabkan penyakit seperti diabetes sampai jantung koroner.&nbsp;Hal ini tentu saja sangat mempengaruhi kualitas kesehatan Anda. Bagaimana tidak, seperti yang dijelaskan oleh fitbodynow.com bahwa saat Anda tidak menggosok gigi Anda, plak akan mudah terbentuk disela-sela gigi. Jika sudah lama, ini akan menjadi karang gigi dan membutuhkan tindak lanjut.</p>\r\n<p style=\"text-align: justify;\">Bunda, disarankan untuk menggosok gigi minimal dua kali sehari yaitu setelah sarapan pagi dan sebelum tidur malam. Aktifitas ini akan sangat bermanfaat jika sudah menjadi kebiasaan Anda.</p>\r\n<p style=\"text-align: justify;\">Memang membuat suatu kebiasaan itu tidak lah muda. Tapi, Anda cukup membutuhkan 21 hari untuk membiasakan aktifitas ini.</p>\r\n<p style=\"text-align: justify;\">Bunda, perlu Anda ketahui pula bahwa Anda akan terhindar dari penyakit yang akan menyerang mulut Anda dan tubuh Anda. Dan tentunya, Anda akan merasakan tubuh yang sangat bugar dan sehat. Karena, pada dasarnya menggosok gigi sangat bermanfaat untuk kesehatan dan kebugaran Anda.</p>', 'menggosok-gigi-membuat-badan-bugar.jpg', 'Y', 'kesehatan gigi', 'menggosok gigi'),
(6, '', '2014-05-15', 'Inilah Tips Merawat Gigi Bagi Pengguna Behel', '<p style=\"text-align: justify;\"><strong>Vemale.com</strong>&nbsp;- Gigi yang rapi adalah salah satu dari bagian keindahan yang Anda miliki. Tidak heran jika banyak dari Anda yang rela mengeluarkan banyak yang untuk mendapatkan gigi rapi dengan cara menggunakan behel. Akan tetapi, saat menggunakan behel atau kawat gigi, Anda justru membutuhkan perawatan ekstra. Jika tidak, gigi Anda akan menjadi sarang pertumbuhan bakteri akibat sisa makanan serta plak yang menodai gigi dan tentunya dapat merusak warna gigi Anda.</p>\r\n<p style=\"text-align: justify;\">Menurut lansiran dari&nbsp;<a href=\"http://meetdoctor.com/\" target=\"_top\">MeetDoctor.com</a>, salah satu cara merawat gigi adalah dengan menggunakan pasta gigi yang mengandung fluoride dan selalu menggosok gigi Anda setelah makan. Setelah menggosokpun Anda disarankan untuk melakukan pengecekan guna melihat apakah masih ada sisa makanan yang menyangkut di sela-sela gigi. Sementara untuk sikat gigi, sebaiknya Anda memilih sikat yang berbulu lembut. Anda bisa menggosok gigi Anda dengan gerakan dari atas ke bawah dan sebaliknya.</p>\r\n<p style=\"text-align: justify;\">Kemudian mulailah menggosok gigi dengan menggunakan sikat gigi proxabrush atau sikat gigi yang berbentuk seperti pohon natal. Proxabrush didesain secara khusus guna membersihkan di antara dua kawat. Gerakkan sikat dari atas ke bawah dan dari bawah ke atas di antara kedua jalur kawat. Gerakkan beberapa kali sebelum berpindah ke area lain hingga gigi bersih. Di samping itu, jangan lupa juga untuk menggunakan obat kumur yang juga mengandung fluoride</p>\r\n<p style=\"text-align: justify;\">Dalam penggunaan kawat gigi Anda, terkadang Anda menemukan beberapa masalah seperti karet mengendur, kawat rusak, atau jalur kawat yang berada di tempatnya yang menimbulkan ketidaknyamanan. Oleh karena itu, ketika Anda mengalaminya, Anda bisa melakukan pertolongan seperti di bawah ini.</p>\r\n<ul style=\"text-align: justify;\">\r\n<li>Karet dan kawat lepas. Jika Anda mengalami hal ini, Anda dapat menggunakan sedikit lilin ortodontis untuk menempelkan kawat ke posisi semula untuk sementara waktu. Anda juga seharusnya menyimpan karet dan segeralah jadwalkan pemeriksaan dengan dokter gigi yang menangani.</li>\r\n<li>Kawat rusak. Gunakanlah ujung pensil yang memiliki penghapus untuk menggerakkan kawat yang mencuat ke posisi yang tidak mengganggu. Jangan mencoba memotong kawat karena adanya risiko kawat tertelan atau terhirup e paru-paru. Jika terjadi sariawan atau luka akibat kawat yang mencuat, kumur dengan air gara atau obat kumur antiseptik.</li>\r\n</ul>\r\n<p style=\"text-align: justify;\">Nah Ladies, jangan biarkan gigi dan organ mulut Anda bermasalah karena Anda malas melakukan perawatan gigi dan mulut. Terlebih lagi gigi tersambung dengan saraf penting lainnya dan jika terjadi kerusakan pada gigi maka akan membawa masalah terhadap organ lainnya.</p>', 'inilah-tips-merawat-gigi-bagi-pengguna-behel.jpg', 'Y', 'merawat, gigi', 'tips merawat gigi'),
(7, '', '2014-05-15', '12 Cara Menjaga Kesehatan Gigi dan Mulut Secara Alami', '<p style=\"text-align: justify;\">Inilah tips&nbsp;<strong>12 cara menjaga kesehatan gigi dan mulut secara alami</strong>. Sakit gigi terjadi karena kurang memperhatikan kesehatan gigi dan mulut, sehingga bisa menimbulakan gigi berlubang, gusi berbengkak dan berdarah serta bau mulut. Apa lagi terkena yang namanya sakit gigi sungguh merasa menggangu dan tidak menyenangkan bahkan kesenanganpun terasa hilang.&nbsp;Nah ada baiknya Anda baca artikel dibawah ini cara menjaga kesehatan gigi dan mulut agar tidak terjadi hal-hal yang tidak menyenangkan. Berikut adalah 12 cara menjaga kesehatan gigi dan mulut, yuk simak:<br /><br /><strong>1. Makanan Sehat</strong><br /><br />Makan makanan yang sehat dan seimbang. Selain karbohidrat Anda juga memerlukan tambahan nutrisi seperti vitamin dan mineral agar gigi dan gusi tetap sehat. Terutama vitamin A, vitamin C dan vitamin D<br /><br /><strong>2. Air Putih</strong><br /><br />Air putih adalah komponen utama dari air liur yang berfungsi untuk menyimpan mineral-mineral yang diperlukan gigi, sekaligus membersihkan partikel makanan yang menempel di sela-sela gigi. Air juga mengandung fluoride yang dapat membuat gusi anda tetap lembab dan memperkuat enamel gigi.<br /><strong><br />3. Waktu Makan</strong><br /><br />Berikan jeda waktu antara makan dan ngemil. Ini membantu gigi agar tidak selalu terkena asam. Karena setelah makan, asam akan terbentuk antara 20 &ndash; 40 menit.<br /><br /><strong>4. Keju dan Susu</strong><br /><strong><br /></strong><br />Dua bahan makanan ini mengandung kalsium yang kaya dan baik bagi kesehatan gigi. Kandungan vitamin D dan fosfat juga akan memperkuat gigi agar tak gampang keropos dan dapat memperbaiki komponen gigi yang rusak dengan efektif.<br /><br /><strong>5. Hindari Gula</strong><br /><br />Minuman dengan gula tambahan seperti jus, teh dan kopi akan membentuk asam pada gigi. Batasi minum minuman dengan gula tambahan. Termasuk juga memakan permen lollipop.<br /><br /><strong>6. Kesehatan Gigi Anak</strong><br /><br />Jangan membiarkan bayi terlalu lama menggunakan botol susu. Kebiasaan ngedot ini akan membuat gigi terlalu lama terkena karbohidrat sehingga merusak gigi si kecil. Gantilah isi botol susunya dengan air putih, dan biasakan ia minum susu dari gelas.<br /><br /><strong>7. Sikat Gigi</strong><br /><br />Sikatlah gigi minimal dua kali sehari. Namun, bila memungkinkan sikat gigi setelah makan akan membantu menghilangkan plak yang dapat menciptakan asam.<br /><br /><strong>8. Konsumsi Teh</strong><br /><br />Teh mengandung polifenol yang dapat menekan pertumbuhan bakteri yang menyebabkan plak pada gigi. Selain itu, teh juga dapat mencegah gigi berlubang. Untuk hasil yang lebih baik, gunakan madu sebagai pengganti gula biasa. Namun jangan berlebihan karena teh juga bisa membuat gigi menjadi kuning.<br /><br /><strong>9. Benang Gigi</strong><br /><br />Untuk permukaan gigi yang lebih sehat, Anda bisa menggunakan benang gigi setiap sekali atau dua kali sehari.<br /><br /><strong>10. Berhentilah merokok</strong><br /><br />Tembakau akan meningkatkan resiko kerusakan gigi dan bahkan gangguan mulut lainnya.<br /><br /><strong>11. Kacang-kacangan</strong><br /><br />Kacang-kacangan terbukti mengandung kalsium dan vitamin D serta mineral yang tinggi. Ketiga komponen ini amat baik bagi gigi. Namun mengunyah kacang terlalu sering, apalagi kacang-kacangan yang keras, dapat merusak enamel gigi. Jadi tetaplah berhati-hati saat mengunyah kacang.<br /><br /><strong>12. Lakukan Pemeriksaan</strong><br /><br />Setiap 6 bulan sekali datanglah ke dokter gigi untuk pemeriksaan dan perawatan gigi Anda.<br /><br />Nah itulah sahabat sehat&nbsp;<span style=\"text-decoration: underline;\">12 cara menjaga kesehatan gigi dan mulut secara alami</span>. Artikel diatas yang mungkin dapat membantu anda untuk menjaga kesehatan gigi dan mulut. Semoga cara diatas bisa membantu dan bermanfaat untuk Anda.</p>', 'gigi sehat.jpg', 'Y', 'kesehatan, gigi', 'menjaga kesehatan gigi dan mulut');

-- --------------------------------------------------------

--
-- Table structure for table `buku_tamu`
--

CREATE TABLE `buku_tamu` (
  `id` int(15) NOT NULL,
  `nama` varchar(40) DEFAULT NULL,
  `email` varchar(55) DEFAULT NULL,
  `isi` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku_tamu`
--

INSERT INTO `buku_tamu` (`id`, `nama`, `email`, `isi`) VALUES
(1, 'Fery', 'f3rypurn4m4@gmail.com', 'Terima kasih atas bantuannya'),
(3, 'Niken', 'niken@gmail.com', 'Terima Kasih');

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `kd_gejala` char(4) NOT NULL DEFAULT '',
  `nm_gejala` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`kd_gejala`, `nm_gejala`) VALUES
('G01', 'Nafsu makan menurun'),
('G02', 'Demam tinggi'),
('G03', 'Diare'),
('G04', 'Sulit bernafas'),
('G05', 'Sapi kurus (Penurunan berat badan)'),
('G06', 'Sapi terlihat depresi'),
('G07', 'Selaput mata menjadi bengkak'),
('G08', 'Air liur berlebihan'),
('G32', 'Diare bercampur darah'),
('G31', 'Air kencing berwarna merah'),
('G30', 'Kelenjar susu membengkak'),
('G29', 'Batuk kronis'),
('G28', 'Gerakan sempoyongan dan kurang lincah'),
('G27', 'Kuku keluar Cairan kuning dan membusuk'),
('G26', 'Selaput kuku mengelupas'),
('G25', 'Bagian pergelangan kaki berdekatan kuku bengkak'),
('G24', 'Gerakan kaki pincang'),
('G23', 'Bulu Rontok'),
('G22', 'Selaput Lendir Menguning'),
('G21', 'Selaput bening mata kornea menjadi keruh'),
('G20', 'Perut Kiri Membesar Sebelah'),
('G19', 'Hidung Mengeluarkan Cairan'),
('G18', 'Ngorok'),
('G17', 'Pinggang Sedikit Membungkuk'),
('G16', 'Keluar air mata terus menerus'),
('G15', 'Terjadi luka pada selaput mata'),
('G14', 'Bulu kasar, kusam, kaku dan berdiri'),
('G13', 'Lemas dan lesu'),
('G12', 'Gerakan sapi sempoyongan, berputar- putar dan mubeng'),
('G11', 'Pernafasan cepat dan pendek'),
('G10', 'Keluar darah dari mulut'),
('G09', 'Kejang-kejang');

-- --------------------------------------------------------

--
-- Table structure for table `rule`
--

CREATE TABLE `rule` (
  `kd_solusi` char(4) NOT NULL,
  `kd_gejala` char(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rule`
--

INSERT INTO `rule` (`kd_solusi`, `kd_gejala`) VALUES
('P01', 'G01'),
('P01', 'G02'),
('P01', 'G08'),
('P01', 'G11'),
('P01', 'G13'),
('P01', 'G18'),
('P01', 'G19'),
('P02', 'G01'),
('P02', 'G03'),
('P02', 'G05'),
('P02', 'G11'),
('P02', 'G14'),
('P02', 'G17'),
('P02', 'G20'),
('P03', 'G01'),
('P03', 'G02'),
('P03', 'G04'),
('P03', 'G09'),
('P03', 'G10'),
('P03', 'G11'),
('P03', 'G31'),
('P03', 'G32'),
('P04', 'G07'),
('P04', 'G15'),
('P04', 'G16'),
('P04', 'G21'),
('P05', 'G24'),
('P05', 'G25'),
('P05', 'G26'),
('P05', 'G27'),
('P06', 'G04'),
('P06', 'G20'),
('P06', 'G28'),
('P07', 'G01'),
('P07', 'G02'),
('P07', 'G05'),
('P07', 'G11'),
('P07', 'G13'),
('P07', 'G19'),
('P07', 'G29'),
('P07', 'G30'),
('P08', 'G01'),
('P08', 'G02'),
('P08', 'G06'),
('P08', 'G12'),
('P08', 'G13'),
('P08', 'G22'),
('P08', 'G23');

-- --------------------------------------------------------

--
-- Table structure for table `solusi`
--

CREATE TABLE `solusi` (
  `kd_penyakit` char(4) NOT NULL,
  `nm_penyakit` varchar(300) NOT NULL,
  `solusi` text NOT NULL,
  `definisi` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `solusi`
--

INSERT INTO `solusi` (`kd_penyakit`, `nm_penyakit`, `solusi`, `definisi`) VALUES
('P01', 'Sapi Ngorok (Septicemia Epizootica)', '', ''),
('P02', 'Cacingan', '', ''),
('P03', 'Penyakit Antrak (Radang Limpa)', '', ''),
('P04', 'Pink Eye (Penyakit Mata)', '', ''),
('P05', 'Kuku Busuk', '', ''),
('P06', 'Perut Kembung', '', ''),
('P07', 'TBC (Tuber Culosis)', '', ''),
('P08', 'Surra (Penyakit Sapi Mubeng)', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `statistik`
--

CREATE TABLE `statistik` (
  `ip` varchar(20) NOT NULL DEFAULT '',
  `tanggal` date NOT NULL,
  `hits` int(10) NOT NULL DEFAULT 1,
  `online` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statistik`
--

INSERT INTO `statistik` (`ip`, `tanggal`, `hits`, `online`) VALUES
('127.0.0.2', '2009-09-11', 1, '1252681630'),
('::1', '2014-12-09', 10, '1418156879'),
('::1', '2014-07-08', 1, '1404811988'),
('::1', '2014-07-04', 2, '1404441411'),
('::1', '2014-06-17', 4, '1402973989'),
('::1', '2014-06-13', 7, '1402651504'),
('127.0.0.1', '2010-04-16', 11, '1271389426'),
('::1', '2014-06-10', 90, '1402399216');

-- --------------------------------------------------------

--
-- Table structure for table `tmp_analisa`
--

CREATE TABLE `tmp_analisa` (
  `noip` varchar(60) NOT NULL DEFAULT '',
  `kd_solusi` char(4) NOT NULL DEFAULT '',
  `kd_gejala` char(4) NOT NULL DEFAULT '',
  `status` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tmp_analisa`
--

INSERT INTO `tmp_analisa` (`noip`, `kd_solusi`, `kd_gejala`, `status`) VALUES
('::1', 'P02', 'G20', 'N'),
('::1', 'P02', 'G17', 'N'),
('::1', 'P02', 'G14', 'N'),
('::1', 'P02', 'G01', 'N'),
('::1', 'P02', 'G03', 'N'),
('::1', 'P02', 'G05', 'N'),
('::1', 'P02', 'G11', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `tmp_gejala`
--

CREATE TABLE `tmp_gejala` (
  `kd_gejala` char(4) NOT NULL,
  `noip` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tmp_gejala`
--

INSERT INTO `tmp_gejala` (`kd_gejala`, `noip`) VALUES
('G01', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `tmp_pasien`
--

CREATE TABLE `tmp_pasien` (
  `id` int(4) UNSIGNED ZEROFILL NOT NULL,
  `nama` varchar(60) NOT NULL,
  `kelamin` enum('P','W') NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(16) NOT NULL,
  `noip` varchar(60) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tmp_pasien`
--

INSERT INTO `tmp_pasien` (`id`, `nama`, `kelamin`, `alamat`, `no_telp`, `noip`, `tanggal`) VALUES
(0193, 'NINJA EXPRESS', 'P', 'dsadxzc', '08121341221', '::1', '2022-06-25 09:41:07');

-- --------------------------------------------------------

--
-- Table structure for table `tmp_solusi`
--

CREATE TABLE `tmp_solusi` (
  `kd_solusi` char(4) NOT NULL,
  `noip` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tmp_solusi`
--

INSERT INTO `tmp_solusi` (`kd_solusi`, `noip`) VALUES
('P02', '::1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `analisa_hasil`
--
ALTER TABLE `analisa_hasil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_news` (`idadmin`);

--
-- Indexes for table `buku_tamu`
--
ALTER TABLE `buku_tamu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`kd_gejala`);

--
-- Indexes for table `solusi`
--
ALTER TABLE `solusi`
  ADD PRIMARY KEY (`kd_penyakit`);

--
-- Indexes for table `tmp_pasien`
--
ALTER TABLE `tmp_pasien`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `analisa_hasil`
--
ALTER TABLE `analisa_hasil`
  MODIFY `id` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `buku_tamu`
--
ALTER TABLE `buku_tamu`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tmp_pasien`
--
ALTER TABLE `tmp_pasien`
  MODIFY `id` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
