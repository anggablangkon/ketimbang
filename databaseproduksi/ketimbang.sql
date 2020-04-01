-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Apr 2020 pada 10.03
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ketimbang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `noanggota` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `statusanggota` varchar(20) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `fb` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `ig` varchar(50) NOT NULL,
  `cby` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`noanggota`, `nama`, `statusanggota`, `foto`, `fb`, `email`, `ig`, `cby`) VALUES
(1, 'Siti Alawiah', 'Anggota', '/imageanggota/D5BA2FD2-A10A-48E4-93EC-2E0A0BF30FAB.jpeg', 'Siti Alawiah', 'sitialawiah17', 'stalawiah_', 'KNP'),
(2, 'Miftahul Hakim', 'Anggota', '/imageanggota/C4606AE2-8BF3-4FD0-8432-DA1D553EBE42.jpeg', 'Miftahul Hakim', 'kn_pandeglang', 'mr._kim_07', 'KNP'),
(3, 'Ade Juanda', 'Anggota', '/imageanggota/F9041EB9-FC02-4E6C-8545-D29B44C37F5B.jpeg', 'Ade Juanda', 'adee_juanda', 'adee_juanda', 'KNP'),
(4, 'Siti Haerunnisa', 'Anggota', '/imageanggota/C4396BFD-691A-4907-BCDC-ED8E15BA80FD.jpeg', 'Nisa Siti Haerunnisa', 'kn_pandeglang', 'sitihaerunnisa26', 'KNP'),
(5, 'Resti Devianingsih', 'Anggota', '/imageanggota/0500C13C-627A-47F0-8C67-3EAF64614E41.jpeg', 'Restii Devianingsih', 'kn_pandeglang', 'Restideviani', 'KNP'),
(6, 'Siti Ahwaliah', 'Anggota', '/imageanggota/E98F1E25-2F32-4AA9-8C1B-131EE79BC3FC.jpeg', 'ketimbang.ngemis.pandeglang90', 'kn_pandeglang', 'stahwaliah', 'KNP'),
(7, 'Rina Deswita Maharani', 'Anggota', '/imageanggota/40FF6176-F6FF-4D43-959A-F630CB9585FF.jpeg', 'ketimbang.ngemis.pandeglang90', 'Rina Deswita Maharani', 'rinades_', 'KNP'),
(8, 'Saefullah', 'Anggota', '/imageanggota/300ED1C5-7752-465B-91BB-EB74E6B9C63E.jpeg', 'Saefullah', 'kn_pandeglang', 'saefullah4940', 'KNP'),
(9, 'Elis Sulastri', 'Anggota', '/imageanggota/495A3A16-2E63-4CBC-B7AA-6086F648D549.jpeg', 'ketimbang.ngemis.pandeglang90', 'kn_pandeglang', 'elsu256', 'KNP'),
(10, 'Rizki Triguna', 'Anggota', '/imageanggota/7FB87455-ACF1-47A4-A4F6-EB41256DDAB8.jpeg', 'Rizky Threeguna', 'kn_pandeglang', 'rizky3g', 'KNP'),
(15, 'Een Nuraeni', 'Anggota', '/imageanggota/4A7B9461-C475-4223-879A-08CEFE2723AA.jpeg', 'Een Nuraeni', 'kn_pandeglang', 'n_nuraeni', 'KNP'),
(16, 'Ayi Sutiawan', 'Anggota', '/imageanggota/162FDD63A5-633E-4549-BC07-D76999D202C2.jpeg', 'Biell ZtOne', 'Ayi_Qubil', 'Biellsayi', 'KNP'),
(17, 'Dewi Siti Khualaifah', 'Anggota', '/imageanggota/A918B72D-3497-4F42-AD83-410618B32C6D.jpeg', 'Dewi Siti Khualaifah', 'dewilaifah', 'de.wiy', 'KNP'),
(18, 'Fikar Sugiawan', 'Founder', '/imageanggota/18FAE5F1A1-EA02-462C-AF2B-95AC01547F8D.jpeg', 'Fikar Sugiawan', 'kn_pandeglang', 'fikarsugiawan', 'KNP'),
(19, 'Dea Virly Alviona', 'Anggota', '/imageanggota/19F0299ADA-6FAD-43B0-9C31-81C1D37A26E7.jpeg', 'Dea Virly Alviona', 'abcdeavwxyz', 'abcdeavwxyz', 'KNP'),
(20, 'Hendi Agus', 'Anggota', '/imageanggota/20IMG-20190803-WA0012.jpg', 'Hendi Agus', 'cenoldoank', 'Hendiagus0', 'KNP'),
(21, 'Angga Kurniawan', 'Founder', '/imageanggota/21kirun makarun.png', '#', '#', '#', 'KNP');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `postingan`
--

CREATE TABLE `postingan` (
  `id` int(20) NOT NULL,
  `judul` varchar(150) NOT NULL,
  `slug` varchar(180) NOT NULL,
  `jenispost` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `foto` varchar(200) NOT NULL,
  `cby` varchar(50) NOT NULL,
  `mby` int(10) DEFAULT NULL,
  `date` varchar(50) NOT NULL,
  `cdate` datetime NOT NULL,
  `mdate` datetime DEFAULT NULL,
  `startdate` date DEFAULT NULL,
  `enddate` date DEFAULT NULL,
  `isdelete` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `postingan`
--

INSERT INTO `postingan` (`id`, `judul`, `slug`, `jenispost`, `isi`, `foto`, `cby`, `mby`, `date`, `cdate`, `mdate`, `startdate`, `enddate`, `isdelete`) VALUES
(9, 'Bantu Yepi Untuk Sembuh', 'bantu-yepi-untuk-sembuh', 'Donasi', '<p><strong>Yepi (13th)</strong> warga Kp. Namrak RT/RW 006/003, Ds. Mendung, Kec. Cibaliung, Pandeglang-Banten merupakan salah satu siswa yang saat ini duduk dibangku sekolah menengah pertama.<br><br>Yepi menderita penyakit Tumor pada tulang sejak Oktober 2018.<br><br>Untuk kondisinya saat ini, Yepi mengalami pembengkakan dibagian lutut kiri yang mengakibatkan Yepi terus merintih kesakitan.&nbsp;<br>Informasi terakhir yang tim KNP terima bahwa Yepi saat ini sedang melakukan rawat jalan di RSCM.&nbsp;<br>Untuk itu, <a href=\"https://www.instagram.com/ketimbang.ngemis.pandeglang/\">@ketimbang.ngemis.pandeglang </a>ersama PPI Kab. Pandeglang <a href=\"https://www.instagram.com/ppikab.pandeglang/\">@ppikab.pandeglang</a> mengajak teman-teman untuk turut berpartisipasi membantu Yepi.</p>', '/imagepost/WhatsApp Image 2019-02-22 at 6.41.41 AM.jpeg', 'KNP', NULL, '25 Mar 2019', '0000-00-00 00:00:00', NULL, NULL, NULL, 0),
(10, 'Kegiatan Rutin dan Rencana Kerja Ketimbang Ngemis Pandeglang', 'kegiatan-rutin-dan-rencana-kerja-ketimbang-ngemis-pandeglang', 'Blogs', '<h4>Kegiatan Rutin :</h4><ul><li>Menemukan dan memposting profil sosok mulia sebanyak 2 sosok dalam 1 bulan. (2 minggu 1 sosok)</li><li>Melakukan survey/eksekusi langsung (penyaluran donasi) terhadap 2 sosok tsb.</li><li>Bentuk donasi untuk setiap sosok yaitu uang tunai senilai Rp.100.000 dan sembako senilai Rp. 100.000. Jadi untuk 2 sosok dalam satu bulan kita perlu kas sebanyak Rp.400.000/bulan.</li><li>Jadi 1 sosok 2kali posting di sosmed yaitu profil dan penyaluran donasi</li></ul><h4>Rencana kerja berdasarkan hasil rapat:</h4><p><strong>1. Ketua</strong></p><ul><li>Membuat grup WA untuk Pengurus dan anggota</li><li>Mengkordinasikan tiap-tiap perangkat pengurus untuk membuat dan merapihkan rencana kerja sebelum mulai dijalankan bulan November.</li><li>Mengingatkan semua anggota untuk mencari 1 sosok/bulan dan membayar uang kas minimal Rp.20.000/bulan dan dimulai diaktifkan bulan November.</li></ul><p><strong>2. Sekretaris</strong></p><ul><li>Merapihkan database anggota KNP</li><li>Merapihkan database sosok yang telah di eksekusi</li><li>Membuatdatabase untuk setiap sosok yang di laporkan anggota ke grup.</li><li>Membuat konsep konten dari setiap sosok yang akan di posting untuk didiskusikan dengan admin media.</li></ul><p><strong>3. Admin Media</strong></p><ul><li>Mengaktifkan semua perangkat media KNP: Instagram, Facebook, Twitter, Youtube dan email.</li><li>Membuat rencana konten yang akan ditampilkan : sosok mulia, sosok inspiratif, open donasi, instalive, quote sosial.</li><li>Menetukan jadwal posting.</li><li>Membuat watermark.</li><li>Berkordinasi dengan sekretaris.</li></ul><p><strong>4. Eksekutor</strong></p><ul><li>Melakukan survey ke lapangan dan mengajak anggota lain untuk ikut serta.</li><li>Berkordinasi dengan bendahara untuk keuangan keperluan survey.</li><li>Melakukan dokumentasi dan di kirimkan ke admin media dan sekretaris untuk database</li></ul>', '/imagepost/ktb.jpg', 'KNP', NULL, '25 Mar 2019', '0000-00-00 00:00:00', NULL, NULL, NULL, 0),
(11, 'BERTEMU SOSOK MULIA? BERITAHU KAMI!', 'bertemu-sosok-mulia-beritahu-kami', 'blogs', '<p>Halo Sahabat KNP!&nbsp;<br>Jika kamu bertemu dengan sosok mulia, khsusunya di Pandeglang, BERITAHU KAMI!</p><p>Caranya gampang banget.<br>Kamu hanya perlu cari tahu nama, alamat, dan usia. Serta ceritakan kisah hidupnya. Lalu, tag ke akun Instagram <a href=\"https://www.instagram.com/ketimbang.ngemis.pandeglang/\">@ketimbang.ngemis.pandeglang</a> dengan hashtag #ketimbangngemispandeglang atau DM ke akun instagram kami.</p><p>Sebagai wujud aksi nyata kita. Yuk bantu dan peduli terhadap sosok mulia disekeliling kita yang selalu berusaha keras menghidupi keluarga dengan tidak meminta-minta.</p>', '/imagepost/WhatsApp Image 2019-03-25 at 5.07.44 PM.jpeg', 'KNP', NULL, '26 Mar 2019', '0000-00-00 00:00:00', NULL, NULL, NULL, 0),
(12, 'KEMBALI', 'kembali', 'blogs', '<h4>“Apa mimpi terbesarmu di dunia ini?”</h4><p>“Aku ingin menebar kebermanfaatan bagi manusia di setiap detik kehidupanku.”</p><p>“Munafik! Bukankah kau ingin pengakuan dari manusia: banyaknya harta yang kau punya, besarnya gaji yang kau terima, kekuasaan yang kau pegang, strata pendidikan yang telah kau selesaikan, bahkan usaha yang telah kau rintis? Tetapi tidak termasuk banyaknya mantanmu, ya”</p><p>&nbsp;</p><p>“Tidak. Aku diciptakan untuk beribadah kepada-Nya, dan sebermanfaat apa aku untuk orang lain selama aku hidup. Terserah kau, jika kau memiliki orientasi berbeda tentang mimpi terbesar yang sedang kita perbincangkan ini.”</p><p>&nbsp;</p><p>Itulah sekelumit perdebatan yang terjadi dalam diriku sendiri. Pelik, rumit, penuh drama, bukan?</p><p>&nbsp;</p><p>Matahari tepat di atas kepalaku. Terik, panas, keringat bercucuran menganak sungai. Kugerakkan mataku menyapu sekitar. Sahut-menyahut abang-abang ojek pangkalan menawarkan jasanya bak rayuan Dilan, manis. Sayangnya, <i>cool</i>nya abang ojek daring <i>millenial </i>lebih menggoda. Tepat di depan kuberdiri berjajar banyak pedagang: cilok, batagor, bakso, nasi uduk, ketoprak, siomay, minuman dingin, gorengan, aneka kue, payung, tisu, kopi, masker, buah-buahan, semuanya lengkap. Hiruk pikuk manusia hilir mudik, semua kasta manusia ada di sana: tua muda, kaya cukup, ganteng cantik, perlente lusuh. Namun, apakah yang membuat kita berbeda?</p><p>&nbsp;</p><p>“Neng, ojek?” ucap salah satu abang ojek pangkalan, membuatku tersadar dari lamunan.</p><p>&nbsp;</p><p>Aku hanya menggelengkan kepala sambil terus menatap layar hpku. ‘Ah, <i>driver</i>ku sudah dekat, aku harus bergegas.’Sambil menuju lokasi penjemputan, aku sempat melirik beberapa barang dagangan di sekitarku. Sempat ingin membeli sesuatu, tapi ‘ah, sepertinya aku tidak membutuhkan barang tersebut.’Akhirnya kulanjutkan langkahku, bertemu <i>driver</i> dan menuju ke tempat yang sedari tadi ingin kutuju.</p><p>&nbsp;</p><p>Sekitar 15 menit kutunggu kedatangannya, barulah dia sampai di tempatku dengan senyumnya yang ramah. Kuamati lamat-lamat penampilan <i>driver</i> yang menjemputku: motor bebeknya sudah agak berumur, jaket yang dikenakannya lusuh, sepatu yang sepertinya hanya dicuci sebulan sekali, dan wajah yang mulai keriput. ‘Hmmm, semoga perjalananku aman dan selamat sampai tujuan.’</p><p>&nbsp;</p><p>Pernahkah kau tidak membeli suatu barang yang tidak kau butuhkan dari seorang pedagang? Pernahkah kau lebih memilih ojek daring dibandingkan ojek pangkalan? Padahal bisa saja hari itu kaulah pembeli atau pelanggan pertama mereka, sedikit rezeki yang Allah titipkan pada mereka melalui dirimu. Meskipun tak seberapa, hal tersebut dapat membuat mereka tersenyum haru, penuh syukur. Uang yang terkadang tak seberapa untukmu dapat bernilai besar bagi mereka untuk mencukupi kehidupan sehari-hari mereka yang sederhana, membayar biaya sekolah anak-anak mereka. Atau untuk hal yang menurutmu sepele, namun berharga untuk mereka. Bahkan untuk sekedar bertahan hidup bagi mereka yang masih sendiri namun mawas diri dan mandiri.</p><p>&nbsp;</p><p>‘Kan mubadzir beli barang yang tidak terpakai,’ pikirmu. Sini, biar kutanya, “Lebih mubadzir mana, kau membeli dari mereka yang memang membutuhkan atau membeli barang mahal di <i>mall</i> hanya untuk <i>lifestyle</i>mu itu? Bahkan kau berlagak sok kaya ketika di <i>mall</i>, namun seperti pengemis pada pedagang kecil. Mikir!”</p><p>&nbsp;</p><p>‘Kan lebih murah kalau naik ojek daring daripada naik ojek pangkalan, apalagi kalau ada promo kan lumayan,’ ucapmu sumringah. Ya, baiklah, akupun terkadang sepemikiran denganmu: murah dan mudah, siapa yang tak mau? Tetapi, apakah hidupmu hanya bergantung pada promo atau sesatu hal yang gratis? Apakah kau tak malu dengan gajimu yang sudah berjuta-juta itu? Sulitkah untukmu mengeluarkan uang lebih untuk mereka sambil bersedekah? Hei, tidak maukah kau menjadi pemberi, bukan yang diberi? Jika kau tak sependapat denganku, silahkan, namun setidaknya jadilah manusia yang adil: adil untuk dirimu sendiri, pun orang lain.</p><p>&nbsp;</p><p>‘Lama amat sih, Pak. Saya sudah nunggu lebih dari 15 menit nih!’ ‘Kok pesanannya ga sesuai sih? Kan saya tadi sudah bilang blablabla…’ Pernahkah kau <i>ndumel </i>seperti itu saat menggunakan jasa ojek daring? Atau pernahkan kau membatalkan pesananmu begitu saja tanpa alasan yang rasional? Padahal, kita tak pernah tahu sekeras apa perjuangan mereka: melewati kemacetan, menahan teriknya matahari dan dinginnya angin malam hanya untuk menjemput kita, menerjang hujan hanya untuk mengantarkan masakan untuk kita yang lapar sementara mungkin mereka kelaparan, dan menguatkan diri untuk tetap bekerja meski raga mereka tak lagi muda. Bahkan terkadang perjuangan mereka tak sebanding dengan argo yang tertera di aplikasimu itu. Pantaskah mereka yang berjuang untuk tidak mengemis, justru kita rendahkan hanya karena merasa diri kita lebih baik daripada mereka?</p><p>&nbsp;</p><p>Akupun pernah seperti itu, dulu. Semoga kalian tidak pernah menjadi manusia seperti diriku, ya!</p><p>&nbsp;</p><p>Kita sama-sama manusia. Manusia yang tak bisa hidup tanpa Dia Yang Maha Hidup. Tak ada yang namanya kasta dalam kehidupan manusia, yang membedakan kita adalah tingkat keimanan dan ketaqwaan pada-Nya. Menolong sesama membuat kita ditolong oleh-Nya. Memberi sesama tak kan membuat kita miskin, justru sebaliknya. Pedulilah terhadap sesama, bersyukurlah setiap saat, dan hargailah setiap ‘perbedaan’ yang membuatmu merasa ‘berbeda’.</p><p>&nbsp;</p><p><i><strong>Sehebat apakah dirimu yang pada akhirnya akan kembali pada-Nya?</strong></i></p><p>&nbsp;</p><p>RED, March 29th, 2019</p><p>&nbsp;</p>', '/imagepost/747CD32E-8301-472F-A8B0-7433817FA1D6.jpeg', 'KNP', NULL, '06 Apr 2019', '0000-00-00 00:00:00', NULL, NULL, NULL, 0),
(13, 'MENGEMIS RAHMAT TUHAN', 'mengemis-rahmat-tuhan', 'blogs', '<p>Di saat matahari sedang terik-teriknya, seorang pria tua memikul kayu yang menopang dua keranjang besar di bahu kirinya. Berjalan perlahan dari ujung jalan raya menuju tempat saya menanti angkutan kota.</p><p>&nbsp;</p><p>Langkahnya tidak tegap, bahkan terlihat sangat payah saat mencoba menyeimbangkan beban pikulannya. Sesekali ia mengusap peluh diwajahnya dengan handuk kecil yang tersampir di lehernya.</p><p>&nbsp;</p><p>Semakin dekat jarak kami, semakin terlihat jelas garis usia yang tergambar di wajahnya.</p><p>Keriput di setiap sudut wajahnya, bungkuk di punggungnya, serta helai rambut yang sudah memutih di balik topi lusuhnya, menandakan bahwa usianya memang sudah tidak lagi muda.</p><p>&nbsp;</p><p><i>’60 tahun? 70 tahun?</i>’ batin saya mulai berlomba untuk menebak usianya, sebelum saya sadar bahwa kakek tersebut sudah berdiri tepat di depan saya.</p><p>“Mau beli <i>Opak</i> neng?” Tanya kakek tersebut.</p><p>***</p><p>&nbsp;</p><p>&nbsp;</p><p>Kalian pernah melihat sosok seperti kakek tersebut? Atau mungkin pernah mengalami langsung kejadian tersebut?</p><p>Seringkali kita melihat seorang lelaki renta yang hari demi hari berusaha menyelamatkan martabatnya dari perilaku meminta-meminta.</p><p>&nbsp;</p><p>Disaat orang lain memanfaatkan kelemahan dan keterbatasannya untuk meminta belas kasihan, orang-orang seperti Kakek penjual opak ini justru lebih memilih menjaga harga diri dan martabatnya dengan sisa tenaga yang dimilikinya.</p><p>&nbsp;</p><p>Disaat orang lain mengetuk pintu setiap rumah untuk mengemis sedekah, Kakek penjual opak ini justru berusaha menjemput rejekinya dengan cara yang sepatutnya.</p><p>&nbsp;</p><p>Ia hanya ingin mengetuk pintu langit dan mengemis rahmat Tuhan dengan cara yang dianjurkan oleh Rasulullah SAW.</p><p>Ia tidak sedang meminta belas kasih orang-orang yang ditemuinya, yang ada dalam benaknya adalah, bagaimana ia bisa menghidupi diri dan keluarganya dengan cara yang diridhoi dan diberkahi oleh-Nya. Daripada mengemis harta pada manusia, ia lebih memilih mengemis rahmat kepada Tuhannya. Karena ia percaya, sebaik-baiknya meminta, ialah hanya pada Sang Pencipta.</p><p>&nbsp;</p><p>[RD.07.04.19]</p>', '/imagepost/782C9EC5-5B38-4CD0-AF75-51F508288607.jpeg', 'KNP', NULL, '07 Apr 2019', '0000-00-00 00:00:00', NULL, NULL, NULL, 0),
(14, 'Melihat Keluar', 'melihat-keluar', 'blogs', '<p>Memang bukan hal yang mudah untuk menyembunyikan rasa lelah<br>Lelah dengan segala tuntutan yang ada<br>Lelah dengan beribu masalah yang menghujam.</p><p><br>Asal kau tahu...<br>Bukan dirimu saja yang merasakan hal itu.<br>Banyak di luar sana yang memiliki beribu mungkin sejuta masalah yang harus mereka hadapi.</p><p><br>Namun, mereka lebih memilih menutupinya dengan senyuman manis yang kau lihat setiap harinya.<br>Menjalani hari-harinya dengan indah dan ceria.</p><p><br>Ya, kau benar...<br>Mereka menjalani hari-harinya dengan semua itu.&nbsp;<br>Dengan keindahan yang semu yang mereka karang sendiri.</p><p>&nbsp;</p><p><i><strong>Safa Azalea Henka</strong></i><br><i>Serang, 9/4/19 17:13</i></p>', '/imagepost/88A7DE8E-A0D6-4CFA-99F9-7ADAA41E455E.jpeg', 'KNP', NULL, '09 Apr 2019', '0000-00-00 00:00:00', NULL, NULL, NULL, 0),
(15, 'Menuju Ramadhan', 'menuju-ramadhan', 'blogs', '<p>Komunitas <strong>Ketimbang Ngemis Pandeglang</strong> menggelar <i>gathering</i> anggota baru sekaligus rapat persiapan ramadhan. Acara tersebut digelar di Saung Banyu Djawi, Cikupa, Pandeglang pada tanggal 28 April 2019.</p><p><i>Gathering</i> kali ini dilaksanakan untuk menjalin silaturrahim terutama untuk anggota baru yang sebelumnya telah dilakukan <i>recruitment</i>. Ketua KNP, Ade menjelaskan selain untuk bersilaturrahim antar anggota juga untuk rapat menyambut datangnya bulan suci ramadhan.</p><p>\"Insya Allah untuk ramadhan kali ini kami memiliki beberapa agenda diantaranya buka puasa bersama sosok mulia, tebar Al-Quran dan pembagian Paket Lebaran\" lanjutnya</p><p>KNP sendiri telah rutin menggelar kegiatan dibulan ramadhan. Hendi, relawan KNP mengatakan \"kegiatan bulan ramadhan telah dilaksnakan 2 tahun sebelumnya dan Insya Allah akan kami lakukan setiap tahunnya\".</p>', '/imagepost/20190430_200304.jpg', 'KNP', NULL, '30 Apr 2019', '0000-00-00 00:00:00', NULL, NULL, NULL, 0),
(16, 'Silaturahmi bersama Bapak Efendi', 'silaturahmi-bersama-bapak-efendi', 'blogs', '<p>Kamis (16/5/2019), KNP melakukan kunjungan ke rumah bapak Efendi di Mengger-Pandeglang. Ketika datang, pak Efendi sedang berkumpul bersama sang istri serta dua orang anaknya disebuah rumah kecil, tepat disamping TPU Mengger.</p><p>Kedua anak beliau saat ini berusia 12 dan 7 tahun dan belum pernah mengenyam pendidikan dengan alasan tidak ada biaya. Beliau mengatakan, untuk makan sehari-hari pun sulit. Pendapatan yang hanya mengandalkan penjualan barang-barang bekas serta istri yang hanya sebagai ART tidak mampu memenuhi &nbsp;kebutuhan lain selain untuk makan.</p><p>Pada kunjungan tersebut, KNP menyalurkan donasi sebesar Rp.400.000 yang sebagian dibelikan sembako dan sisanya uang tunai.</p><p>Kami mengucapakan Terimakasih kepada donator yang telah memberikan donasinya.</p><p>Kita doakan semoga bapak Efendi selalu diberikan kesehatan dan rezeki yang cukup.</p><p>#ketimbangngemis<br>#ketimbangngemispandeglang<br>#saynotongemis</p>', '/imagepost/IMG_20190517_205821_531.jpg', 'KNP', NULL, '17 May 2019', '0000-00-00 00:00:00', NULL, NULL, NULL, 0),
(17, 'Wakaf 2000 Al-Quran', 'wakaf-2000-al-quran', 'blogs', '<p><strong>WAKAF 2000 AL QURAN</strong></p><p><strong>[ T A H A P &nbsp;2 ]</strong></p><p><strong>STREETWELL TEBAR BERKAH RAMADHAN</strong></p><p>&nbsp;</p><p><i>Assalamualaikum warahmatullahi wabarakaatuh.</i></p><p>&nbsp;</p><p><i><strong>Streetwell</strong></i> &nbsp;menyediakan Al-Qur\'an gratis untuk di wakafkan ke mesjid/mushola/pesantren/madrasah maupun perorangan.<br><strong>(Khusus</strong> <strong>Wilayah</strong> <strong>PANDEGLANG)</strong></p><p>&nbsp;</p><p><strong>GRATIS, TANPA PROPOSAL.</strong></p><p>&nbsp;</p><p><i>Periode pengajuan permohonan: 18-22 Mei 2019</i></p><p>&nbsp;</p><p>Permohonan dapat diajukan melalui WA dengan format sebagai berikut:</p><p>&nbsp;</p><p>Nama pemohon:<br>Peruntukan:&nbsp;<br>Alamat Lengkap:<br>Jumlah Permintaan:<br>Diambil/diantar*</p><p>&nbsp;</p><p>Kirim ke 085945924627 (Een)</p><p>&nbsp;</p><p><i>Keterangan:</i><br><i>Diantar jika daerah terjangkau/ada relawan kami di daerah tsb, atau dapat diambil dilokasi pengambilan terdekat.</i></p><p>&nbsp;</p><p>Semoga dengan adanya Al-Qur’an wakaf ini dapat menjadikan wasilah kebaikan serta penyemangat kita semua untuk bertilawah dan memburu berkah Ramadhan sebanyak mungkin &nbsp;Dan semoga para wakif selalu mandapatkan pahala yang tak terhingga dari Allah SWT. Aamiin</p><p>&nbsp;</p><p><i>Supported by:</i></p><p><a href=\"https://instagram.com/ketimbang.ngemis.pandeglang?igshid=1k56nmp2thjfv\">https://instagram.com/ketimbang.ngemis.pandeglang</a></p><p><i>Wassalamu\'alaikum warahmatullahi wabarakaatuh</i></p>', '/imagepost/IMG-20190517-WA0027.jpg', 'KNP', NULL, '18 May 2019', '0000-00-00 00:00:00', NULL, NULL, NULL, 0),
(18, 'Peringati Hari Anak Nasional, KNP Gelar Kegiatan Sosial di Sekolah dekat Samudera Hindia', 'peringati-hari-anak-nasional-knp-gelar-kegiatan-sosial-di-sekolah-dekat-samudera-hindia', 'blogs', '<p>Dalam rangka memperingati Hari Anak Nasional yang jatuh pada tanggal 23 Juli 2019, Beberapa Komunitas Relawan Pandeglang gelar kegiatan sosial di sekolah terpencil di bagian Selatan Kabupaten Pandeglang.</p><p>Komunitas Ketimbang Ngemis Pandeglang (KNP), komunitas AREK (Aliansi Remaja Kreatif) dan Foodbank Pandeglang berangkat dengan misi sosial yang sama, membawa bantuan alat sekolah bagi para siswa, menuju salah satu sekolah di pesisir pantai selatan Kabupaten Pandeglang, yaitu MI Kutakarang.</p><p>&nbsp;</p><p>Madrasah Ibtidaiyah (MI) Kutakarang berlokasi di Kp. Kutakarang Pantai, Desa Kutakarang, kecamatan Cibitung, sekolah yang tepat berada didaerah perbatasan antara Kecamatan Cikeusik dan Cibitung. Tepat dibelakang sekolah, merupakan lautan lepas Samudera Hindia yang memiliki panorama alam yang sangat indah.</p><p>&nbsp;</p><p>Untuk mencapai ke sekolah ini, dibutuhkan waktu sekitar 4 jam dari pusat Kota Pandeglang dengan akses jalan yang lumayan menantang. Dari Cikeusik, 200 meter setelah jembatan Cijambu belok kanan ke arah Desa Sukawaris dan Desa Tanjungan. Melewati jalan pasir berbatu, lurus terus hingga ke Muara Laut Mantiung dengan jarak sekitar 15 km.</p><p><br>Akses jalan bagi kendaraan roda 4 hanya bisa sampai Muara Laut Mantiung, selebihnya hanya bisa dilalui oleh kendaraan roda dua. Di Muara Laut Mantiung, kendaraan roda dua harus di naikkan ke perahu rakit agar bisa menyebrangi muara untuk kemudian bisa melanjutkan ke Kp. Kutakarang Pantai.</p><p>&nbsp;</p><p>“Ada dua jalur yang bisa di tempuh untuk ke lokasi ini, lewat Cibaliung dan lewat Cikeusik. Kami memilih jalan cikeusik karena ini jalan yang cukup aman meskipun harus menyebrangi muara untuk sampai ke tujuan, daripada lewat cibaliung yang harus melewati jalan setapak berkilo-kilo meter, agak sulit dilalui kendaraan” tutur Ade, salah satu anggota KNP.</p><p>&nbsp;</p><p>Sekitar 500 meter setelah menyebrangi muara, kalian akan sampai di MI Kutakarang. Sekolah terpencil yang berada di selatan Pandeglang, jauh dari jangkauan dan perhatian. Saat sampai di sekolah ini, kalian akan disuguhkan pemandangan gedung sekolah yang terbengkalai, tidak berjendela dan tidak pula beratap.</p><p>&nbsp;</p><p>Sekolah terpencil yang tidak memiliki ruang kelas dan bangunan yang layak. Semua serba terbatas, serba sederhana. Tiga ruang kelas yang hancur dan tidak bisa digunakan sejak 2 tahun yang lalu, terpaksa membuat para guru memutar otak menjadikan 2 ruang kelas yang masih bisa digunakan menjadi ruang belajar bersama dari kelas 1 sampai 6.</p><p>&nbsp;</p><p>Dengan jumlah siswa sebanyak 64, fasilitas di sekolah ini sungguh memprihatinkan. Jumlah papan tulis hanya ada satu, digunakan bergantian. Jumlah bangku dan kursi bisa dihitung dengan jari. Tidak ada toilet atau mushola, apalagi ruang guru.</p><p>&nbsp;</p><p>MI Kutakarang berada dibawah naungan Yayasan Darul Rohmah dan berdiri sejak tahun 1997. Menurut Pak Sofyan, yang merupakan ketua yayasan menuturkan bahwa dulu saat bangunan masih bisa digunakan jumlah siswa bisa mencapai 200 orang, namun sejak ruang kelas hancur banyak siswa yang memilih pindah ke sekolah lain meski jarak tempuh cukup jauh hingga 3 km lebih.</p><p>&nbsp;</p><p>Jumlah pengajar di sekolah ini hanya ada 3 orang dan satu orang kepala sekolah. Ketiga orang pengajar merupakan alumni lulusan MI kutakarang yang mengabdi kembali di sekolah tempat mereka pertama kali menuntut ilmu.</p><p>&nbsp;</p><p>Diakui Pak Sofyan bahwa tidak ada yang mau mengajar di sekolah tersebut karena jauh kemana-mana, terlebih dengan kondisi sekolah yang hancur dan kesejahteran yang sangat minim. Padahal anak-anak sangat membutuhkan pendidikan dari guru.</p><p>&nbsp;</p><p>Pendidikan merupakan hak semua warga, salah satu hak dasar anak yang harus dipenuhi. Namun keterbatasan sarana dan prasarana menjadi faktor utama yang menghambat tercapainya penyampaian pengetahuan secara maksimal. Kesenjangan terlihat begitu mencolok dibandingkan dengan sekolah-sekolah lain yang dekat dengan pusat kota.</p><p>&nbsp;</p><p>Semoga, siapapun kita, instansi, komunitas ataupun perorangan, bisa bergotong royong memaksimalkan usaha untuk membantu membangkitkan semangat sekolah-sekolah pedalaman seperti MI Kuakarang, agar bisa bangkit dan mampu mendidik anak-anak Kutakarang menjadi anak-anak yang bisa membawa perubahan bagi kesejahteraan hidupnya dan bagi Indonseia.</p><p>&nbsp;</p><p>Selamat Hari Anak Nasional, mari bekerja sama &nbsp;wujudkan mimpi dan cita mereka.</p>', '/imagepost/IMG-20190723-WA0005.jpg', 'KNP', NULL, '24 Jul 2019', '0000-00-00 00:00:00', NULL, NULL, NULL, 0),
(19, 'Gubuk Abah Kasman Pemulung Plastik', 'gubuk-abah-kasman-pemulung-plastik', 'blogs', '<p>Minggu, 01 september 2019 tim KNP berkesempatan bersilaturahmi dengan bapak Kasman. Seorang kakek berusia sekitar 60 tahun, yang tinggal seorang diri di sebuah gubuk yang jauh dari kata layak.</p><p>Kegiatan sehari-hari beliau berkeliling mulai dari Cijolang-Sodong untuk mengumpulkan barang bekas/sampah plastik &nbsp;yang nantinya akan beliau jual lagi untuk memenuhi kebutuhan sehari-hari. Pendapatan beliau dari mengumpulkan barang-barang bekas dan memulung tidak menentu, yaitu sekitar 10.000 sampai dengan 15.000/hari dan bahkan pulang dengan tangan hampa.</p><p>Rumah papan yang serupa gubuk kecil itu&nbsp;hampir tak terlihat seperti tempat tinggal. Tumpukan sampah plastik menggunung hampir menutupi seluruh bagian dan sangat tidak layak disebut sebagai \'rumah\'. Tiang tempat bertumpu atap dan tempat menempelkan dinding terpal adalah pohon kelapa hidup. Tidak ada kamar ataupun kamar mandi. Hanya sepetak ruangan ditutupi plastik terpal, karung dan berlantai kayu yang disusun seadanya untuk tempat beristirahat. Perabotan masak, ember, baju berserakan karena tidak ada tempat lain untuk menyimpannya, semua disatu tempat dibiarkan berceceran.</p><p>Beliau sudah lama tinggal sebatang kara, setelah bercerai dengan istrinya dan anaknya telah memiliki keluarga yang tinggal jauh didaerah lain, sehingga semua beliau lakukan sendirian, memasak dan mencuci.</p><p>Semoga Allah selalu memberikan kesehatan dan rejeki untuk Bapak Kasman. Kehidupan beliau mengajarkan banyak hal pada kita semua, betapa bagitu banyak nikmat dan karunia Allah. mencukupi kebutuhan kita, memberikan tempat tinggal yang nyaman dan penghidupan yang layak. Jangan sampai lalai kita syukuri dan mari berbagi dengan mereka yang membutuhkan.</p>', '/imagepost/WhatsApp Image 2019-09-01 at 10.25.33.jpeg', 'KNP', NULL, '06 Sep 2019', '0000-00-00 00:00:00', NULL, NULL, NULL, 0),
(20, 'Bantu Kakek Suki Punya Rumah Kembali', 'bantu-kakek-suki-punya-rumah-kembali', 'donasi', '<p>Senin, 18 November 2019 sekitar pukul 01.00 dini hari terjadi kebakaran di Kp. Cipahul, Ds. Ciodeng, Kec. Sindangresmi, Kab. Pandeglang. Pasangan lansia kakek Suki (70 th) dan nenek Emah (65 th) harus merelakan seluruh harta bendanya dilalap si jago merah.</p><p>Saat beliau tengah terlelap tidur. Api membakar habis rumah dan seluruh isinya. Api diduga berasal dari korsleting arus pendek listrik. Tidak ada korban jiwa, namun tak ada lagi harta benda yang tersisa.</p><p>Kakek Suki dan nenek Emah saat ini menumpang di rumah saudaranya, tak ada yang bisa mereka lakukan selain berserah dan sabar atas musibah yang dialaminya.</p><p>Guna membantu kakek Suki dan nenek Emah, tim Ketimbang Ngemis Pandeglang, mengajak teman-teman semua untuk gotong royong membantu membangun kembali rumah kakek Suki dan nenek Emah.</p><p>Mari kita bantu beliau agar bisa menikmati masa tuanya tanpa khawatir lagi tentang tempat tinggalnya.</p><p>&nbsp;</p><p>Donasi dapat dikirimkan melalui rekening KNP<br>BRI 386601013702505<br>A.n. Resti Devianingsih</p><p>Konfirmasi (WA): 087881468607 (Resti)</p>', '/imagepost/901B3451-FD29-4BD2-8BB6-2B4C440CBCDF.jpeg', 'KNP', NULL, '24 Nov 2019', '0000-00-00 00:00:00', NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `recruitment`
--

CREATE TABLE `recruitment` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `devisi` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `periode` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `recruitment`
--

INSERT INTO `recruitment` (`id`, `nama`, `devisi`, `date`, `periode`) VALUES
(1, 'Agizka Yolanda', 'Survey\r\n', '0000-00-00', 0),
(2, 'Inisa Alfath Amara', 'Survey\r\n', '0000-00-00', 0),
(3, 'Masitoh\r\n', 'Survey\r\n', '0000-00-00', 0),
(4, 'Meliyana\r\n', 'Survey\r\n', '0000-00-00', 0),
(5, 'Mia Nuramalia\r\n', 'Fundraising\r\n', '0000-00-00', 0),
(6, 'Moch Suryana\r\n', 'Fundraising', '0000-00-00', 0),
(7, 'Moh Irfan\r\n', 'Media and Design Graphic\r\n', '0000-00-00', 0),
(8, 'Muhammad Fikri Nurawan\r\n', 'Media and Design Graphic\r\n', '0000-00-00', 0),
(9, 'Nurbayti\r\n', 'Survey\r\n', '0000-00-00', 0),
(10, 'Nurmayanti\r\n', 'Fundraising\r\n', '0000-00-00', 0),
(11, 'Rika Febri Listyaningrum\r\n', 'Survey\r\n', '0000-00-00', 0),
(12, 'Robi Al Gifari\r\n', 'Media and Design Graphic\r\n', '0000-00-00', 0),
(13, 'Romi Junaedi\r\n', 'Media and Design Graphic\r\n', '0000-00-00', 0),
(14, 'Silvia Widyawati\r\n', 'Survey\r\n', '0000-00-00', 0),
(15, 'Taufik Ridwan\r\n', 'Media and Design Graphic\r\n', '0000-00-00', 0),
(16, 'Titi Nurholipah\r\n', 'Survey\r\n', '0000-00-00', 0),
(17, 'Ulfiyah Nuraini\r\n', 'Survey\r\n', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'KNP', 'knp@gmail.com', NULL, '$2y$10$4koxH.2W05PyzhQ3lgl6oes.vU.mw0ct0OzCBsYww.eFiMO0TUyTi', NULL, '2019-03-17 08:01:29', '2019-03-17 08:01:29');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`noanggota`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `postingan`
--
ALTER TABLE `postingan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `recruitment`
--
ALTER TABLE `recruitment`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `postingan`
--
ALTER TABLE `postingan`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `recruitment`
--
ALTER TABLE `recruitment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
