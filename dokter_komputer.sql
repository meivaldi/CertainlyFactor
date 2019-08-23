-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 20, 2019 at 04:44 PM
-- Server version: 5.7.27-0ubuntu0.16.04.1
-- PHP Version: 7.0.33-0ubuntu0.16.04.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dokter_komputer`
--

-- --------------------------------------------------------

--
-- Table structure for table `aturan`
--

CREATE TABLE `aturan` (
  `id` int(11) NOT NULL,
  `kode_aturan` varchar(4) NOT NULL,
  `kode_kerusakan` varchar(4) NOT NULL,
  `kode_gejala` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aturan`
--

INSERT INTO `aturan` (`id`, `kode_aturan`, `kode_kerusakan`, `kode_gejala`) VALUES
(1, 'R01', 'H01', 'E01'),
(2, 'R01', 'H01', 'E02'),
(3, 'R01', 'H01', 'E26'),
(4, 'R02', 'H02', 'E03'),
(5, 'R02', 'H02', 'E04'),
(6, 'R02', 'H02', 'E05'),
(7, 'R02', 'H02', 'E11'),
(8, 'R02', 'H02', 'E12'),
(9, 'R02', 'H02', 'E33'),
(10, 'R03', 'H03', 'E06'),
(11, 'R03', 'H03', 'E07'),
(12, 'R03', 'H03', 'E08'),
(13, 'R03', 'H03', 'E10'),
(14, 'R03', 'H03', 'E21'),
(15, 'R03', 'H03', 'E22'),
(16, 'R03', 'H03', 'E34'),
(17, 'R04', 'H04', 'E01'),
(18, 'R04', 'H04', 'E03'),
(19, 'R04', 'H04', 'E09'),
(20, 'R04', 'H04', 'E12'),
(21, 'R05', 'H05', 'E10'),
(22, 'R05', 'H05', 'E13'),
(23, 'R05', 'H05', 'E14'),
(24, 'R06', 'H06', 'E11'),
(25, 'R06', 'H06', 'E15'),
(26, 'R06', 'H06', 'E40'),
(27, 'R07', 'H07', 'E07'),
(28, 'R07', 'H07', 'E12'),
(29, 'R08', 'H08', 'E16'),
(30, 'R08', 'H08', 'E17'),
(31, 'R08', 'H08', 'E35'),
(32, 'R09', 'H09', 'E01'),
(33, 'R09', 'H09', 'E03'),
(34, 'R09', 'H09', 'E04'),
(35, 'R09', 'H09', 'E05'),
(36, 'R09', 'H09', 'E09'),
(37, 'R10', 'H10', 'E18'),
(38, 'R10', 'H10', 'E19'),
(39, 'R11', 'H11', 'E09'),
(40, 'R11', 'H11', 'E20'),
(41, 'R12', 'H12', 'E19'),
(42, 'R13', 'H13', 'E41'),
(43, 'R14', 'H14', 'E05'),
(44, 'R14', 'H14', 'E23'),
(45, 'R15', 'H15', 'E10'),
(46, 'R16', 'H16', 'E10'),
(47, 'R16', 'H16', 'E24'),
(48, 'R16', 'H16', 'E27'),
(49, 'R17', 'H17', 'E10'),
(50, 'R17', 'H17', 'E25'),
(51, 'R18', 'H18', 'E28'),
(52, 'R18', 'H18', 'E31'),
(53, 'R18', 'H18', 'E36'),
(54, 'R19', 'H19', 'E29'),
(55, 'R19', 'H19', 'E30'),
(56, 'R19', 'H19', 'E32'),
(57, 'R20', 'H20', 'E10'),
(58, 'R20', 'H20', 'E21'),
(59, 'R21', 'H21', 'E37'),
(60, 'R21', 'H21', 'E38'),
(61, 'R22', 'H22', 'E03'),
(62, 'R22', 'H22', 'E39');

-- --------------------------------------------------------

--
-- Table structure for table `diagnosa`
--

CREATE TABLE `diagnosa` (
  `kode_diagnosa` varchar(5) NOT NULL,
  `kode_gejala` varchar(4) NOT NULL,
  `nama_gejala` varchar(4) NOT NULL,
  `tanggal` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `kode_gejala` varchar(4) NOT NULL,
  `nama_gejala` varchar(200) NOT NULL,
  `nilai_gejala` varchar(4) NOT NULL,
  `nilai_gejala_user` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`kode_gejala`, `nama_gejala`, `nilai_gejala`, `nilai_gejala_user`) VALUES
('E01', 'Tombol hidup tapi tidak ada gambar tertampil di monitor', '0.8', '0.4'),
('E02', 'Terdapat garis horisontal/vertikal ditengah monitor', '0.8', '0.4'),
('E03', 'Tidak ada tampilan awal bios', '0.8', '0.4'),
('E04', 'Muncul Pesan eror pada bios (isi pesan selalu berbeda tergantung pada kondisi tertentu)', '0.4', '0.8'),
('E05', 'Alarm bios berbunyi', '0.4', '0.8'),
('E06', 'Terdengar suara aneh pada HDD', '0.8', '0.4'),
('E07', 'Sering terjadi hang/crash saat menjalankan aplikasi ', '0.8', '0.4'),
('E08', 'Selalu Scandisk ketika booting ', '0.8', '0.4'),
('E09', 'Muncul pesan error saat menjalankan aplikasi ', '0.4', '0.4'),
('E10', 'Device driver informasi tidak terdeteksi dalam device manager,meski driver telah di install', '0.4', '0.8'),
('E11', 'Tiba-tiba OS melakukan restart otomatis', '0.4', '0.4'),
('E12', 'Keluarnya blue screen pada OS (isi pesan selalu berbeda tergantung pada kondisi tertentu)', '0.8', '0.4'),
('E13', 'Suara tetap tidak keluar meskipun driver dan setting device ', '0.8', '0.4'),
('E14', 'Muncul pesan error saat menjalankan aplikasi audio ', '1.0', '0.8'),
('E15', 'Muncul pesan error saat pertama OS di load dari HDD ', '0.8', '0.4'),
('E16', 'Tidak  ada  tanda-tanda  dari  sebagain/seluruh  perangkat  bekerja  (semua  kipas pendingin tidak berputar) ', '0.4', '0.4'),
('E17', 'Sering tiba-tiba mati tanpa sebab', '0.8', '0.4'),
('E18', 'Muncul pesan pada windows, bahwa windows kekurangan virtual memori ', '0.8', '0.4'),
('E19', 'Aplikasi berjalan dengan lambat, respon yang lambat terhadap inputan', '0.8', '0.4'),
('E20', 'Kinerja grafis terasa sangat berat (biasanya dalam membuka internet dan manipulasi gambar)', '1.0', '0.8'),
('E21', 'Device tidak terdeteksi dalam bios', '1.0', '0.8'),
('E22', 'Informasi deteksi yang salah dalam bios', '0.4', '0.4'),
('E23', 'Hanya sebagaian perangkat yang bekerja', '1.0', '0.8'),
('E24', 'Sebagain/seluruh karakter inputan mati', '1.0', '0.8'),
('E25', 'Pointer mouse tidak merespon gerakan mouse', '1.0', '0.8'),
('E26', 'Tampak blok hitam, dan gambar tidak simetris/acak', '1.0', '0.8'),
('E27', 'Keluar bunyi beep panjang pada saat laptop dinyalakan', '0.4', '0.8'),
('E28', 'Di hidupkan agak sulit', '0.4', '0.8'),
('E29', 'Kabel power mengalami goresan', '0.4', '0.4'),
('E30', 'Tidak ada indikasi masuk power', '0.8', '0.4'),
('E31', 'Mati total', '0.8', '1.0'),
('E32', 'Komputer posisi hidup kemudian tiba-tiba mati layar', '0.8', '0.4'),
('E33', 'Keluar beep berulang-ulang kali', '0.4', '0.4'),
('E34', 'Belum sampai sistem operasi sudah restart lagi', '0.4', '0.4'),
('E35', 'Kipas power supply tidak berputar', '1.0', '0.8'),
('E36', 'Kipas power supply dan kipas processor berputar', '0.4', '0.8'),
('E37', 'CD/ DVD/ ROM/ RW tidak terdeteksi di OS', '1.0', '0.8'),
('E38', 'CD/DVD/ROM/RW yang tidak bisa keluar masuk CD', '0.4', '0.8'),
('E39', 'Muncul pesan â€œBIOS ROM checksum error â€“ System haltedâ€', '1.0', '0.8'),
('E40', 'Sistem Operasi Tidak Muncul', '1.0', '0.8'),
('E41', 'Ketika di tekan tombol power tidak menyala', '1.0', '0.8');

-- --------------------------------------------------------

--
-- Table structure for table `kerusakan`
--

CREATE TABLE `kerusakan` (
  `kode_kerusakan` varchar(4) NOT NULL,
  `nama_kerusakan` varchar(35) NOT NULL,
  `solusi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kerusakan`
--

INSERT INTO `kerusakan` (`kode_kerusakan`, `nama_kerusakan`, `solusi`) VALUES
('H01', 'MONITOR/LCD RUSAK', 'Solusi pertama bisa dengan matikan komputer dengan hard off sampai mati lalu tekan beberapa detik untuk menghilangkan muatan kapasitas lalu nyalakan. Jika masih muncul gejala kerusakan, maka kemungkinan ada kerusakan hardware, cek konektor. Solusi untuk mengatasinya LCD buram dapat dilakukan hanya dengan mengganti tabung katoda monitor. Sedangkan untuk warna yang tidak lengkap bisa mengganti mainboard atau mengganti kabel VGA.'),
('H02', 'RAM RUSAK', 'Cobalah bersihkan RAM menggunakan karet penghapus dengan cara menggosok kuningan pada RAM.\n\nCek RAM yang anda gunakan apakah sudah sejenis dengan komputer yang anda gunakan.'),
('H03', 'HDD RUSAK', 'Periksa hubungan hardisk dengan soket. Periksa apakah harddisk terdengar bunyi keras bila iya maka ada kemungkinan ada bad sector, segera back up data anda sebelum hardisk mati total, dan siapkan hardisk baru.'),
('H04', 'VGA RUSAK', 'Matikan komputer lalu cabut VGA Card, kemudian 	pasangkan kembali dengan hati-hati dan pastikan terpasang dengan benar.\n\nJika VGA Card yang anda gunakan bentrok dengan VGA On Board pada motherboard, anda harus mendisable fungsi VGA On Board dari BIOS.\n\nJika sudah tidak bisa diperbaiki secara manual, anda harus segera membawa ke service center terdekat atau dengan mengganti motherboard.'),
('H05', 'SOUND CARD RUSAK', 'Instal ulang driver sound card dan pastikan sound card sudah terpasang dengan benar pada slotnya.\n\nPastikan konektor kabel sudah terpasang dengan benar \nJika ada kabel yang putus maka segera ganti kabel penghubung yang putus dengan yang baru.\n\nCara lainnya adalah dengan mengganti sound card atau speaker dengan yang baru.'),
('H06', 'OS BERMASALAH', 'Cek kabel harddisk apakah sudah terpasang.\n\nApakah komputer sudah bersih dari virus, jika belum silahkan bersihkan virus atau install ulang.\n\nCek pengaturan bios pada menu booting, apakah sudah sesuai booting dari harddisk'),
('H07', 'APLIKASI RUSAK', 'Paksa tutup aplikasinya. Jika program menjadi tidak responsif, Anda dapat menekan (dan tahan) Ctrl dan Alt dan Delete (Control, Alt, dan Delete) pada keyboard Anda untuk membuka Task Manager. Anda kemudian dapat memilih aplikasi yang tidak responsif dan klik End Task untuk menutup paksa.\n\nInstal ulang aplikasi yang rusak\n\nMatikan protect anti virus jika aplikasi tersebut berguna sebagai debug'),
('H08', 'POWER SUPPLAY RUSAK', 'Periksalah apakah kabel terhubung dengan benar dan steker terpasang dengan baik pada soketnya.\n\nPeriksa juga apakah ada tombol on/off dibelakang tepatnya dibelakang Power Supply sudah dalam posisi On.\n\nJika sudah yakin terpasang dengan benar tapi tetap tidak ada respond. kemungkinan kabel / power supply itu sendiri yang rusak. gantikan dengan kabel baru atau power supply baru.'),
('H09', 'PROSESOR RUSAK', 'Buka prosesor dari slotnya, bersihkan prosessor dengan tisue dan beri pasta agar tetap dingin.\n\nCek pin slot di motherboard apakah tidak ada yg cacat, apabila cacat silahkan rapikan.\n\nProsessor dan motherboard harus cocok, apabila tidak cocok maka harus di ganti.'),
('H10', 'MEMORY KURANG (PERLU UPGRADE RAM)', 'Cabut RAM yang sudah lama.\n\nPasang dengan RAM yang baru, pastikan kapasitasnya lebih besar dibandingkan yang lama'),
('H11', 'MEMORY VGA KURANG (PERLU UPGRADE ME', 'Cabut VGA yang sudah lama.\n\nPasang dengan VGA yang baru, pastikan kapasitasnya lebih besar dibandingkan yang lama\n'),
('H12', 'CLOCK PROSESOR KURANG TINGGI (PERLU', 'Cabut Clock Prosessor yang sudah lama.\n\n.Pasang dengan Clock Prosessor yang baru, pastikan kapasitasnya lebih besar dibandingkan yang lama.\n'),
('H13', 'FRONT PANEL ERROR', 'Cek penyusunan dan pemasangan kabel\nLihat petunjuk pemasangan di motherboard\n'),
('H14', 'KURANG DAYA PADA POWER SUPPLY', 'Disarankan agar mengganti baru, karena kalau di pertahankan akan berakibat kepada komponen lainnya'),
('H15', 'PERANGKAT USB RUSAK', 'Cek drivernya di device manager apakah sudah terinstall, apabila belum akan ada tanda seru. Kalau belum terinstall agar di install terlebih dahulu.\n\nApabila sudah terinstall tapi tidak terdeteksi, cek pemasangan kabel usb.\n'),
('H16', 'KEYBOARD RUSAK', 'Matikan kembali komputer dan cek apakah kabel keyboard telah tertancap dengan benar ke CPU.\n\nJika perlu keyboard bisa dibersihkan dengan menyedotnya dengan menggunakan penyedot debu atau bersihkan dengan kuas.\n\nPembersihan dilakukan pada waktu komputer mati dan keyboard lepas dari portnya.'),
('H17', 'MOUSE RUSAK', 'Solusi pertama untuk pointer mouse yang tidak bergerak cobalah untuk memulihkan perintah task manager, caranya dari keyboard tekan ctrl + alt + delete bersama-sama, kemudian jika sudah muncul jendela task manager, anda bisa mematikan program-program yang tidak responding. \n\nSolusi kedua untuk mouse tidak bekerja sama sekali pertama anda harus memeriksa koneksi fisik mouse. Pada kasus yang terburuk, mungkin mouse anda sudah rusak dan anda harus membeli yang baru.Solusi ketiga untuk masalah double klik coba lalukan Contorl panel> Hardware and Sound > Device and printer > mouse. Dari sini anda data mengatur keceatan double click sesuai kehendak anda'),
('H18', 'MOTHERBOARD RUSAK', 'Periksa disekitar motherboard apakah ada kapasitor yang mengembung, jika ada segera ganti jika tidak bisa bawa ketempat service. '),
('H19', 'KABEL POWER RUSAK', 'Lepas kabel, lalu pasang kembali. Pastikan kabel power terpasang dengan benar.\n\nCek apakah ada goresan di kabel, balut kabel dengan silotif untuk menutupi kabel yg putus.\n\nSebaiknya ganti barU.'),
('H20', 'KABEL SATA/IDE RUSAK', 'Pastikan kabel terpasang dengan benar.\nGanti apabila kabel mengalami kerusakan.\n'),
('H21', 'CD/DVD/ROM/RW RUSAK', 'Coba dengan mengganti motor baki yang rusak dengan yang baru pada CD/DVD Rom.\n\nSelanjutnya jika kepingan CD/DVD tidak bisa terbaca maka lalukan dengan membersihkan bagian optic CD/DVD Rom, kemudian lakukan kalibrasi trimpot (sejenis potensiometer) yang ada di seputaran optic. Memutar sedikit trimpot tersebut searah jarum jam dengan menggunakan alat apa saja, baik itu dengan tang lancip maupun obeng mini. Pastikan dan perhatikan apakah trimpot pada CD/DVD anda sudah benar terputar.\n\nCara lainnya adalah dengan memperbaiki bagian regulator CD/DVD Rom. Solusinya adalah dengan mengganti IC maupun mengganti total board CD/DVD Rom yang baru.'),
('H22', 'BIOS ERROR', 'Matikan pc, tunggu kira-kira 5 menit, kemudian On kan kembali. \n\nSaat proses booting, tekan tombol yg disarankan (Del, Esc, F1, F2, F10, dll) untuk masuk ke menu BIOS-Setup, silahkan baca artikelnya.\n\nPilih setting BIOS pada Default_settings. Dan ubah setting waktu dan tanggal dalam BIOS.\n\nTekan F10 atau  Save & Exit BIOS.\n\nKomputer akan me-restart, dan lihat, jika booting bisa berjalan normal berarti semua selesai.\n\nJika pesan error masih muncul dan ternyata BIOS tidak bisa menyimpan seting tanggal (step-3), ganti batere CMOS dengan yang baru, On-kan pc, lakukan langkah no.2 â€“ 4. Semoga disini bisa berjalan dengan normal.\n');

-- --------------------------------------------------------

--
-- Table structure for table `komputer`
--

CREATE TABLE `komputer` (
  `kode_pc` varchar(5) NOT NULL,
  `nama_pc` varchar(100) NOT NULL,
  `spesifikasi` text NOT NULL,
  `tahun` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komputer`
--

INSERT INTO `komputer` (`kode_pc`, `nama_pc`, `spesifikasi`, `tahun`) VALUES
('PC01', 'Asus ROG', 'Spesifikasi laptop gaming', 2019);

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `kode_kerusakan` varchar(4) NOT NULL,
  `nama_kerusakan` varchar(35) NOT NULL,
  `kode_pc` varchar(2) NOT NULL,
  `solusi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `nama` varchar(25) NOT NULL,
  `jabatan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `jenis_kelamin`, `nama`, `jabatan`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'L', 'Admin', 'admin'),
('rido_meivaldi', '17c4520f6cfd1ab53d8745e84681eb49', 'L', 'Rido Meivaldi', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aturan`
--
ALTER TABLE `aturan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diagnosa`
--
ALTER TABLE `diagnosa`
  ADD PRIMARY KEY (`kode_diagnosa`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`kode_gejala`);

--
-- Indexes for table `kerusakan`
--
ALTER TABLE `kerusakan`
  ADD PRIMARY KEY (`kode_kerusakan`);

--
-- Indexes for table `komputer`
--
ALTER TABLE `komputer`
  ADD PRIMARY KEY (`kode_pc`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aturan`
--
ALTER TABLE `aturan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
