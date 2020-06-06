-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jun 2020 pada 09.22
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
-- Database: `db_peonpegu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `gambar` varchar(250) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama_lengkap`, `username`, `password`, `email`, `no_hp`, `tgl_lahir`, `gambar`, `created`, `modified`) VALUES
(1, 'Moehammad Rizki Karianata', 'RizkiKarianata', '$2y$10$Uf1sCBPtD574y/aE1iSTcupC02ilcpXn0jXFdaWJBeMTEeiY95bgK', 'natarizky884@gmail.com', '0895395333224', '2002-11-01', 'Gambar1.jpeg', '2020-05-04 11:16:10', '2020-05-04 11:16:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_aktivitas`
--

CREATE TABLE `tb_aktivitas` (
  `id_aktivitas` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `data_baru` varchar(100) DEFAULT NULL,
  `data_lama` varchar(100) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_aktivitas`
--

INSERT INTO `tb_aktivitas` (`id_aktivitas`, `nama`, `data_baru`, `data_lama`, `keterangan`, `status`, `created`, `modified`) VALUES
(1, 'Intan Puja Ningrum', '94000', NULL, 'Tambah data transaksi pada tabel tb_transaksi', 'Add', '2020-05-04 21:16:28', '2020-05-04 21:16:28'),
(2, 'Farrah Arisqa', '192000', NULL, 'Tambah data transaksi pada tabel tb_transaksi', 'Add', '2020-05-07 10:44:35', '2020-05-07 10:44:35'),
(3, 'Farrah Arisqa', '192000', NULL, 'Tambah data transaksi pada tabel tb_transaksi', 'Add', '2020-05-07 10:51:13', '2020-05-07 10:51:13'),
(4, 'Intan Puja Ningrum', '96000', NULL, 'Tambah data transaksi pada tabel tb_transaksi', 'Add', '2020-05-07 14:05:07', '2020-05-07 14:05:07'),
(5, 'RizkiKarianata', 'Balita Ini Jadi Orang Termuda yang Mendaki 3 Gunun', 'Balita Ini Jadi Orang Termuda yang Mendaki 3 Gunun', 'Ubah data berita pada tabel tb_berita', 'Update', '2020-05-07 14:24:09', '2020-05-07 14:24:09'),
(6, 'RizkiKarianata', 'Balita Ini Jadi Orang Termuda yang Mendaki 3 Gunun', 'Balita Ini Jadi Orang Termuda yang Mendaki 3 Gunun', 'Ubah data berita pada tabel tb_berita', 'Update', '2020-05-07 14:24:13', '2020-05-07 14:24:13'),
(7, 'RizkiKarianata', 'Balita Ini Jadi Orang Termuda yang Mendaki 3 Gunung', 'Balita Ini Jadi Orang Termuda yang Mendaki 3 Gunun', 'Ubah data berita pada tabel tb_berita', 'Update', '2020-05-07 14:24:23', '2020-05-07 14:24:23'),
(8, 'RizkiKarianata', 'Mukjizat, 30 Pendaki Gunung Kerinci Dilaporkan Selamat', 'Mukjizat, 30 Pendaki Gunung Kerinci Dilaporkan Sel', 'Ubah data berita pada tabel tb_berita', 'Update', '2020-05-07 14:24:38', '2020-05-07 14:24:38'),
(9, 'RizkiKarianata', 'Miris, Ketika Pendaki Rampok Sesama Pendaki di Gunung', 'Miris, Ketika Pendaki Rampok Sesama Pendaki di Gun', 'Ubah data berita pada tabel tb_berita', 'Update', '2020-05-07 14:24:42', '2020-05-07 14:24:42'),
(10, 'RizkiKarianata', 'Cerita Menegangkan Tim SAR Evakuasi 13 Pendaki', 'Cerita Menegangkan Tim SAR Evakuasi 13 Pendaki di ', 'Ubah data berita pada tabel tb_berita', 'Update', '2020-05-07 14:24:47', '2020-05-07 14:24:47'),
(11, 'RizkiKarianata', 'A', NULL, 'Tambah data wisata pada tabel tb_wisata', 'Add', '2020-05-29 16:05:01', '2020-05-29 16:05:01'),
(12, 'RizkiKarianata', 'B', 'A', 'Ubah data wisata pada tabel tb_wisata', 'Update', '2020-05-29 16:05:38', '2020-05-29 16:05:38'),
(13, 'RizkiKarianata', NULL, 'B', 'Hapus data wisata pada tabel tb_wisata', 'Delete', '2020-05-29 16:05:57', '2020-05-29 16:05:57'),
(14, 'RizkiKarianata', 'A', NULL, 'Tambah data berita pada tabel tb_berita', 'Add', '2020-05-29 16:06:18', '2020-05-29 16:06:18'),
(15, 'RizkiKarianata', 'B', 'A', 'Ubah data berita pada tabel tb_berita', 'Update', '2020-05-29 16:06:49', '2020-05-29 16:06:49'),
(16, 'RizkiKarianata', NULL, 'B', 'Hapus data berita pada tabel tb_berita', 'Delete', '2020-05-29 16:07:08', '2020-05-29 16:07:08'),
(17, 'Intan Puja Ningrum', '94000', NULL, 'Tambah data transaksi pada tabel tb_transaksi', 'Add', '2020-05-29 17:29:55', '2020-05-29 17:29:55'),
(18, 'Intan Puja Ningrum', '94000', NULL, 'Tambah data transaksi pada tabel tb_transaksi', 'Add', '2020-06-03 00:24:13', '2020-06-03 00:24:13'),
(19, 'Intan Puja Ningrum', '94000', NULL, 'Tambah data transaksi pada tabel tb_transaksi', 'Add', '2020-06-04 09:02:39', '2020-06-04 09:02:39'),
(20, 'Intan Puja Ningrum', '94000', NULL, 'Tambah data transaksi pada tabel tb_transaksi', 'Add', '2020-06-04 19:01:32', '2020-06-04 19:01:32'),
(21, 'Aziizah Bashir', '188000', NULL, 'Tambah data transaksi pada tabel tb_transaksi', 'Add', '2020-06-06 08:49:28', '2020-06-06 08:49:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `ket_singkat` text DEFAULT NULL,
  `ket_lengkap` text DEFAULT NULL,
  `quotes` text DEFAULT NULL,
  `gambar` varchar(250) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_berita`
--

INSERT INTO `tb_berita` (`id_berita`, `judul`, `keterangan`, `ket_singkat`, `ket_lengkap`, `quotes`, `gambar`, `created`, `modified`) VALUES
(1, 'Cerita Masa Kecil', 'Jika mengingat kembali tentang masa kecil, rasanya jadi ingin kembali ke masa tersebut. Masa yang sangat menyenangkan.', 'Disuatu hari ketika aku terbangun dari tidur nyenyakku, aku mendengar suara burung berkicau sangat ramai sekali menandakan bahwa cuaca dipagi hari ini sangat cerah, ditambah dengan pantulan sinar matahari yang menembus kaca hingga dinding kamarku itu, aku semakin yakin bahwa cuaca di pagi hari ini sangat cerah dan bagus.', '<p>Akupun terdiam, lalu berfikir dan telah menyadari bahwa hari ini adalah hari minggu, begitu menyadari bahwa hari itu adalah hari minggu rasanya sangat senang dan gembira sekali, karena dihari minggu ini tidak ada kegiatan belajar disekolah.</p><p>Seketika itu, akupun tiba-tiba ingin memejamkan mata kembali dalam tidurku seolah-olah ingin menghabiskan hari minggu dengan tertidur dikamar sambil menikmati hangatnya tempat tidurku yang terkena pantulan cahaya matahari.</p><p>Ketika aku sedang asik memeluk guling dan sudah siap untuk mulai memejamkan mata kembali ditempat tidurku yang hangat ini, tak lama kemudian aku mencium harum-harum masakan ibuku yang sangat mengubah selera.</p><p>Tak banyak berfikir lagi yang tadinya ingin memejamkan mata kembali setelah mencium aroma-aroma masakan ibu, akupun langsung terbangun dari tempat tidurku lalu meminum satu gelas air putih mineral dan menuju kekamar mandi untuk cuci muka dan gosok gigi.</p><p>Setelah selesai mencuci muka dan menggosok gigi, akupun langsung menuju ke dapur untuk memastikan benar atau tidak ibu yang memasak masakan yang aroma masakannya itu dapat mengubah selera, semuapun terjawab oleh senyuman ibu yang sangat manis.</p>', '\"Dunia ini ibarat bayangan, jika kamu mengejarnya, kau tidak akan pernah mendapatkannya. Tetapi jika kau berpaling dan mengejar akhirat, maka dia tidak punya pilihan lain kecuali akan mengikutimu.\"', 'haha2.jpeg', '2020-05-03 16:26:38', '2020-05-03 16:26:39'),
(2, 'Kejuaraan Internasional', 'Puji syukur kita masih diberi kemenangan pada kejuaraan Internasioal tahun ini. Jangan lupa bersyukur.', 'Tiga kejuaraan tersebut, South East Asia Youth Training Camp Air Rifle (15-22 Agustus), 1st Indonesia Shooting Championship Open Tournamen dan 43 South East Asia Shooting Championship/SEASA (18-27 Agustus ), di Lapangan Tembak Senayan, Jakarta. Ketua Harian PB Perbakin, Siswanto, menerangkan jika Ketua Umum PB Perbakin Letjen TNI Joni Supriyanto memiki sejumlah target penting dalam kesempatan tersebut.', '<p>Misalnya saja, untuk mempersiapkan atlet di ajang SEA Games 2019 dan sambil melihat kekuatan negara tetangga. Sampai di mana prestasi yang mereka buat, sehingga mampu melecut dan memotivasi atlet-atlet Indonesia. Dengan demikian, atlet Indonesia terbiasa belajar dengan atlet internasional. Nantinya, kejuaraan itu akan diikuti sekitar 21 negara yang melibatkan hampir 400 atlet dan ofisial.</p><p>Sebanyak 11 negara Asia Tenggara akan terlibat di kejuaraan SEASA dan 10 negara berpartisipasi dalam Indonesia Open. Negara yang sudah memastikan tampil di SEASA, yakni Singapura, Hong Kong, Macau, Malaysia, viaetnam, Thailand, Timor Leste, Filipina, Myanmar, Indonesia dan China Taipe. Sedangkan peserta Indonesia Open, yaitu Australia, Kazakhstan, Sri Lanka, Korea, Nepal, Jepang, China, Tajikistan, Banglades dan Kuwait.</p>Semua cabang menembak yang dilombakan dalam SEA Games akan dimainkan dalam kejuaraan internasional yang digelar Perbakin. Kemudian atlet yang ikut terdiri atas atlet Perbakin dan anggota TNI-Polri. “Jadi kita mengadakan tiga kegiatan penting dalam Agustus ini. Ketiga ajang ini saling mendukung, dan kita bertekad akan membuat banyak even agar setiap bulan bisa terus brrtanding dan tidak hanya berlatih saja. Youth ini merupakan satu kalender kegiatan yang dilakukan oleh ASC (Asian Shooting Confederation), itu setiap tahunnya berubah.</p><p> Kita tahun lalu di Kuwait nomor Pistol yang dipertandingkan. Nah, sekarang nomor Air Rifle, kita koordinasi terus ke Presiden KSF (Kuwait Shooting Federation), dan akhirnya kita diberikan kesempatan untuk mengadakan Youth di Indonesia dan diikuti negara Asia Tenggara,” katanya didampingin Wakil Ketua Bidang Hubungan Luar Negeri, Inge Inkiriwang, di Lapangan Tembak Senayan, Rabu (24/08/2019) siang. “Tahun ini, merupakan rekor terbaik. Padahal sebelumnya, tidak pernah diikuti sekian banyak negara seperti ini. Ini suatu rekor yang luar biasa. Sehingga pihak ASC pun mengapresiasi untuk nomor Youth Training. Akhirnya, Korea juga tertantang untuk ikut dengan pelatih yang dari Kazhaktan,” tambahnya. Dipaparkannya lagi, ajang tersebut dilaksanakan setiap tahun, tapi selalu berubah. “Air Rifle dan Pistol. Youth diikuti golongan 15-18 tahun.</p><p>Tujuannya untuk mencari bibit-bibit atlet muda yang kira-kira bisa kita kembangkan untuk kedepannya. Kita juga menyeleksinya sangat ketat karena ini baru pertama kali dilaksanakan, tentunya banyak potensi yang tergali. Mungkin kalau sudah dua tahun berjalan, minat masyarakat juga ikut meningkat dan seleksinya juga lebih bagus dari sekarang,” tutupnya.</p>', '\"Terkadang apapun yang mudah untuk didapatkan akan mudah pula untuk dilepaskan. Dan apapun yang butuh perjuangan untuk mendapatkannya akan sulit untuk dilepaskan.\"', 'haha3.jpeg', '2020-05-03 16:26:41', '2020-05-03 16:26:41'),
(3, 'Balita Ini Jadi Orang Termuda yang Mendaki 3 Gunung', 'Seorang balita, mendaki gunung pertamanya di usia dua minggu di punggung ayahnya, menjadi orang termuda yang pernah mendaki gunung tertinggi di Inggris.', '<p>Bocah tersebut bernama Jaxon Krzysik yang menerima tantangan tiga puncak gunung yang terkenal yaitu; Mount Snowdon, Scafell Pike, Ben Nevis. Ia melakukannya bersama sang ayah untuk mengumpulkan uang untuk temannya, Ralph Rowlands, yang meninggal dalam usia dua tahun setelah menderita kerusakan otak.</p><p>Dilansir dari The Telegraph, Selasa (9/7/2019), ayah si bocah bernama Cal Krzysik mengatakan, Jaxon berjalan sampai ke puncak tanpa bantuan. Tapi, dia harus menggendongnya kembali ke bawah.</p><p>\"Dia mencintai pegunungannya, dia mencintai bebatuan, dia suka memanjat di atas batu. Itu yang dia sukai,\" kata Krzysik kepada The Telegraph.</p><p>\"Aku tak akan berbohong, dia memang mengeluh. Ketika kami berada di Ben Nevis sekitar 10 menit, dia mulai lagi lalu berkata, \'Oh kakiku sakit, aku tidak bisa melakukannya,\" sambungnya.</p>', '<p>Namun, setelah itu ia kembali berjalan dan tak mengeluh lagi. Saat tiba di Ben Nevis, semua orang yang melewati mereka berteriak. \"Dan kemudian dia menoleh kepadaku dan berkata, \'lihat ayah, semua orang sangat bangga padaku\'.\"</p><p>Jaxon menyelesaikan 20 jam perjalanan, sejauh 23 mil dan total panjatan 10.052 kaki.</p><p>Teman baik Jaxon, Ralph, didiagnosis menderita celebral palsy pada usia 2 minggu setelah ibunya, Jade Smith mengalami kesulitan selama kelahiran. Ralph menderita kerusakan otak setelah kekurangan oksigen dan lumpuh total dan tak dapat berbicara. Sebelum Ralph meninggal, mereka seperti kacang polong yang sulit dipisahkan. Sejauh ini Jaxon telah mengumpulkan lebih dari 800 Pound sterling atau Rp14 juta untuk Cerebra, sebuah badan amal untuk anak-anak yang mengalami kerusakan otak.</p><p>Anak berusia tiga tahun yang luar biasa ini telah berjalan dan mendaki gunung bersama ayahnya sejak dia bisa berjalan. Krzysik mengatakan dia berharap untuk menyelesaikan Tantangan Tiga Puncak dengan putranya sebelum ulang tahunnya yang keempat pada Agustus 2019.</p>', '\"Dunia ini ibarat bayangan, jika kamu mengejarnya, kau tidak akan pernah mendapatkannya. Tetapi jika kau berpaling dan mengejar akhirat, maka dia tidak punya pilihan lain kecuali akan mengikutimu.\"', 'Bocah.jpg', '2020-05-03 16:30:42', '2020-05-03 16:30:43'),
(4, 'Cerita Menegangkan Tim SAR Evakuasi 13 Pendaki', 'Evakuasi itu berlangsung menegangkan karena dilakukan di tengah kondisi kebakaran yang masih berada di beberapa titik di jalur pendakian Gunung Raung,\" kata Koordinator Basarnas Pos SAR.', '<p>Ia menjelaskan, Search and Rescue Unit (SRU) 1 dan SRU 2 yang dikerahkan tim SAR gabungan dari Posko SAR gabungan di Pos Perizinan Kalibaru berhasil bertemu dengan 13 orang pendaki tersebut di pos pendakian 4 gunung dengan ketinggian 3.332 meter dari permukaan laut (mdpl) tersebut pada Sabtu pukul 02.36 WIB.</p><p>\"Kondisi 13 orang pendaki tersebut sangat kelelahan setelah berupaya turun di jalur pendakian Gunung Raung agar terhindar dari bahaya kebakaran,\" tuturnya seperti dilansir Antara.</p><p>\"Sekitar satu jam kemudian, tim SAR gabungan pun kembali mengerahkan satu SRU untuk membantu proses evakuasi 13 orang pendaki tersebut. SRU ketiga itu membawa tambahan makanan, minuman dan juga personel medis untuk memeriksa kondisi para pendaki,\" kata dia.</p>', '<p>Meskipun menghadapi sejumlah hambatan, seperti jalur pendakian yang ekstrem dan masih terdapat titik kebakaran, tim SAR gabungan yang di antaranya terdiri dari tim Pos SAR Jember, 851 Rescue, Serdadu Alam, BPBD Banyuwangi, SAR OPA Jember dan warga sekitar, sangat bersemangat dalam membantu evakuasi para pendaki.</p><p>\"Dalam proses evakuasi para pendaki tersebut, tim SAR gabungan didukung dengan sejumlah peralatan SAR, di antaranya peralatan vertical rescue, APD (Alat Pelindung Diri), peralatan navigasi, dan peralatan medis,\" katanya.</p><p>Setelah belasan pendaki tiba di basecamp pendakian, lalu dilakukan pemeriksaan kesehatan oleh Puskemas Kalibaru dengan hasil seluruh penyintas secara umum dalam keadaan sehat dan hanya mengalami luka ringan berupa lecet dan iritasi akibat asap.</p><p>Sebanyak 13 orang pendaki yang selamat dari kebakaran lahan di Gunung Raung yakni, Ng Hui-Lin (23/P) WNA Singapura, Kom Jun Wei (25/L) WNA Singapura, Shervon Ong (24/P) WNA Singapura, Teo Yi Xian (24/L) WNA Singapura, Pang Jia Hui (25/L) WNA Singapura, Beh Ing Tsyr (23/P) WNA Singapura, dan Chua Ying Jie (27/L) WNA Singapura.</p><p>Sedangkan pendaki lainnya asal Indonesia yakni, Widi (L) warga Kalibaru-Banyuwangi, Sam (L) warga warga Kalibaru-Banyuwangi, Sinyo Gimbal (L) warga Kalibaru-Banyuwangi, Putri (L) warga Kalibaru-Banyuwangi, Lutfi Sofian (23/L) mahasiswa asal Ajung-Jember, Felisianus Jeremy (35/L) warga Kecamatan Kelapa Gading-Jakarta Utara.</p>', '\"Banyak orang gagal dalam kehidupan, bukan karena kurangnya kemampuan, pengetahuan, atau keberanian, namun hanya karena mereka tidak pernah mengatur energinya pada sasaran.\"', 'Sar.jpeg', '2020-05-03 16:49:45', '2020-05-03 16:49:45'),
(5, 'Mukjizat, 30 Pendaki Gunung Kerinci Dilaporkan Selamat', 'Petugas dari tim serbu Pos Penjagaan Pendakian Gunung Kerinci, Maryono, menyebut seluruh pendaki yang bertahan di Gunung Kerinci saat terjadi erupsi, Rabu (31/7/2019) siang, dilaporkan selamat.', '<p>\"Kami dibantu Polhut dan relawan bergerak ke atas untuk mengevakuasi di jalur pendakian, semua pendaki aman dan selamat, sekarang sedang turun ke pos,\" kata Maryono kepada Liputan6.com, Kamis sore (31/7/2019).</p><p>Saat terjadi letusan erupsi tersebut, para pendaki bertahan di ketinggian 2.700 meter dari permukaan laut (MDPL). Beruntung, para pendaki itu bertahan dari kolom abu vulkanik yang tidak mengarah ke arah selatan jalur pendakian.</p><p>\"Abu vulkanik mengarah ke arah timur dan tidak mengarah ke jalur pendakian, sehingga semua aman,\" kata dia.</P>', '<p>Selain itu, kondisi Gunung Kerinci saat puncaknya terjadi erupsi diselimuti kabut. Sehingga puncak di atas gunung tidak tampak dari pos penjagaan di R10, Desa Kersik Tuo, Kecamatan Kayu Aro, Kerinci.</p><p>Kepala Resort Pos Penjagaan Pendakian di R10 Evarizal Mirzal menyebutkan, terdapat 30 pendaki yang masih bertahan di Gunung Kerinci saat terjadi erupsi.</p><p>\"Informasi yang saya terima ada sekitar 30-an lebih pendaki yang bertahan di atas Gunung Kerinci saat terjadi erupsi itu,\" kata Evarizal.</p><p>Kepala Resort Pos Jaga Pendakian Gunung Kerinci di Kabupaten Kerinci, Evarizal Mirzal, mengatakan pihaknya mulai menutup sementara jalur pendakian di R10 Desa Kersik Tuo, Kayu Aro, Kerinci. Penutupan sementara pendakian tersebut dilakukan hingga kondisi normal kembali atau benar-benar aman.</p><p>\"Sekarang untuk pendakian juga kita setop untuk sementara hingga waktu yang belum ditentukan sesuai kondisi,\" katanya.</p>', '\"Semoga kita termasuk orang yang berhati-hati dalam menjaga hati dan tidak memberikan kepada seseorang yang tak bisa menghargai. Karena ketika diberi, dia takkan sepenuhnya kembali.\"', 'Kerinci.jpg', '2020-05-03 17:05:46', '2020-05-03 17:05:47'),
(6, 'Miris, Ketika Pendaki Rampok Sesama Pendaki di Gunung', 'Boyolali - Kejadian miris menimpa Lusiana Intan, remaja pendaki gunung berusia 17 tahun asal Ngawen, Klaten, Jawa Tengah meregang nyawa setelah menjadi korban pencurian disertai kekerasan.', '<p>Beruntung korban bisa meminta tolong kepada warga yang kemudian dilarikan ke RSUD Pandan Arang, Boyolali.</p><p>Kejadian bermula ketika keduanya bertemu untuk melakukan pendakian di Gunung Slamet, Kamis, 13 September 2018. Keduanya bertemu di base camp Komunitas Pendaki Gunung (KPG) Solo. Selanjutnya mereka berangkat dengan mengendarai sepeda motor milik korban bernomor polisi D 2522 IH.</p><p>\"Saat itu saya sudah merasa tidak enak, kenapa jalur yang dilalui berbeda. Tapi saya diam saja,\" urai Lusiana saat ditemui di RSUD Pandan Arang, Boyolali, Kamis, 20 September 2018.</p><p>Di sana, tersangka mencekik leher Lusiana dengan cukup keras hingga membekas warna biru. Tidak berhenti di situ, Bagas juga berusaha menusuk perut korban menggunakan pisau lipat tetapi tidak berhasil. Kemudian, ia mengalihkan sasaran ke tangan korban.</p><p>\"Saya mencoba membalas tetapi tidak berdaya. Saya langsung dicekik. Habis itu dipukul menggunakan tanah kering di persawahan,\" katanya.</p>', '<p>Korban sempat berusaha kabur, tetapi tersangka menyeret kakinya. Melihat korbannya tidak berdaya, tersangka langsung kabur membawa sepeda motor korban bersama perlengkapan gunung.</p><p>Korban yang tersadar langsung berusaha meminta pertolongan warga dan akhirnya dilarikan ke rumah sakit. Kejadian ini lantas dilaporkan kepada pihak kepolisian.</p><p>Setelah diselidiki, jajaran Polres Boyolali berhasil mengetahui identitas pelaku. Pelaku berhasil ditangkap di Desa Mertoyudan, Kabupaten Magelang.</p><p>\"Pelaku dijerat dengan pasal 365 KUHP yaitu pencurian dengan kekerasan. Saat ini, pelaku mendekam di sel tahanan Polres Boyolali,\" ucap Kapolsek Mojosongo AKP Joko Winarno.</p>', '\"Dalam hidup akan selalu ada yang tidak suka terhadap kita, ada 2 alasan mengapa seseorang tidak menyukai kita, kita menikmati hidup kita dan dia tidak menikmati hidupnya.\"', 'Rampok.jpg', '2020-05-03 17:08:48', '2020-05-03 17:08:48');

--
-- Trigger `tb_berita`
--
DELIMITER $$
CREATE TRIGGER `Hapus Berita` AFTER DELETE ON `tb_berita` FOR EACH ROW INSERT INTO tb_aktivitas(nama, data_lama, status, keterangan, created, modified) VALUES ('RizkiKarianata', old.judul, 'Delete', 'Hapus data berita pada tabel tb_berita', NOW(), NOW())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `Tambah Berita` AFTER INSERT ON `tb_berita` FOR EACH ROW INSERT INTO tb_aktivitas(nama, data_baru, status, keterangan, created, modified) VALUES ('RizkiKarianata', new.judul, 'Add', 'Tambah data berita pada tabel tb_berita', NOW(), NOW())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `Update Berita` AFTER UPDATE ON `tb_berita` FOR EACH ROW INSERT INTO tb_aktivitas(nama, data_baru, data_lama, status, keterangan, created, modified) VALUES ('RizkiKarianata', new.judul, old.judul, 'Update', 'Ubah data berita pada tabel tb_berita', NOW(), NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `nama_kategori`, `created`, `modified`) VALUES
(1, 'Sumatra', '2020-05-02 09:02:19', '2020-05-02 09:02:19'),
(2, 'Jawa', '2020-05-02 09:02:24', '2020-05-02 09:02:24'),
(3, 'Kalimantan', '2020-05-02 09:02:31', '2020-05-02 09:02:31'),
(4, 'Sulawesi', '2020-05-02 09:02:39', '2020-05-02 09:02:39'),
(5, 'Papua', '2020-05-02 09:02:44', '2020-05-02 09:02:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_komentar`
--

CREATE TABLE `tb_komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_berita` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_komentar`
--

INSERT INTO `tb_komentar` (`id_komentar`, `id_berita`, `id_user`, `isi`, `created`, `modified`) VALUES
(4, 4, 6, 'Bagus mas bet hehe', '2020-05-29 17:21:43', '2020-05-29 17:21:43'),
(5, 4, 1, 'Mantap kak joyy', '2020-05-29 17:22:55', '2020-05-29 17:22:55'),
(6, 4, 17, 'Mantapp gann', '2020-06-06 08:50:16', '2020-06-06 08:50:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_testimoni`
--

CREATE TABLE `tb_testimoni` (
  `id_testimoni` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_wisata` int(11) DEFAULT NULL,
  `pekerjaan` varchar(100) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_testimoni`
--

INSERT INTO `tb_testimoni` (`id_testimoni`, `id_user`, `id_wisata`, `pekerjaan`, `isi`, `created`, `modified`) VALUES
(3, 3, 14, 'CEO Kedai Mie Setan', 'Sangat bermanfaat untuk memudahkan pemesanan tiket pendakian gunung kak', '2020-05-07 10:00:12', '2020-05-07 10:00:12'),
(5, 1, 10, 'CEO Kedai Mie Setan', 'Sangat membantu untuk memudahkan memesan tiket pendakian bet', '2020-05-29 17:28:45', '2020-05-29 17:28:45'),
(6, 17, 10, 'CEO Pesan Kopi', 'Mantap mas', '2020-06-06 08:49:13', '2020-06-06 08:49:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `kode` varchar(10) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_wisata` int(11) DEFAULT NULL,
  `jumlah_pesan` int(11) DEFAULT NULL,
  `total_harga` varchar(50) DEFAULT NULL,
  `status` enum('0','1','2') DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_transaksi`, `kode`, `id_user`, `id_wisata`, `jumlah_pesan`, `total_harga`, `status`, `created`, `modified`) VALUES
(5, '0147', 3, 14, 2, '192000', '2', '2020-05-07 10:51:13', '2020-05-29 16:08:56'),
(7, '2379', 1, 10, 1, '94000', '2', '2020-05-29 17:29:55', '2020-05-29 17:31:14'),
(8, '1237', 1, 10, 1, '94000', '1', '2020-06-03 00:24:13', '2020-06-03 00:24:22'),
(9, '0179', 1, 10, 1, '94000', '0', '2020-06-04 09:02:39', '2020-06-04 09:02:39'),
(10, '1249', 1, 10, 1, '94000', '1', '2020-06-04 19:01:31', '2020-06-04 19:01:59'),
(11, '1689', 17, 10, 2, '188000', '2', '2020-06-06 08:49:27', '2020-06-06 08:49:49');

--
-- Trigger `tb_transaksi`
--
DELIMITER $$
CREATE TRIGGER `Tambah Transaksi` AFTER INSERT ON `tb_transaksi` FOR EACH ROW INSERT INTO tb_aktivitas(nama, data_baru, status, keterangan, created, modified) SELECT tb_user.nama_lengkap, new.total_harga, 'Add', 'Tambah data transaksi pada tabel tb_transaksi', NOW(), NOW() FROM tb_user WHERE tb_user.id_user = new.id_user
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `gambar` varchar(250) DEFAULT 'coretan.png',
  `status` enum('0','1') DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_lengkap`, `username`, `password`, `email`, `no_hp`, `tgl_lahir`, `gambar`, `status`, `created`, `modified`) VALUES
(1, 'Intan Puja Ningrum', 'Intanpuja', '$2y$10$ieWMsJJOEB6mt4C92AXbCe01qM93R4EXV4NNOd95h7Buub2tZ1V3i', 'intanpuja@gmail.com', '0895395333223', '2003-04-21', 'Gambar17.jpg', '1', '2020-05-04 12:27:38', '2020-05-29 17:25:55'),
(3, 'Farrah Arisqa', 'Farrah', '$2y$10$5dBbW8lY4ZmsOkPedi1pyO3pKSEfXpLE3NFmh3YFqFWGMDUs1./0q', 'farrah112@gmail.com', '089687667825', '2002-08-21', 'Gambar25.jpg', '1', '2020-05-06 17:00:27', '2020-05-07 12:11:59'),
(4, 'Nina Aryi Nabilah Wati', 'Ninaanw', '$2y$10$lduYtXQWe1qx2WCj0MtSY.1RSQQV4ffb6ry2sSkRL/t2cBcvKazva', 'ninaanw@gmail.com', '089654437281', '2003-01-19', 'Gambar24.jpg', '1', '2020-05-20 18:25:17', '2020-05-20 18:25:17'),
(6, 'Zenda Eka Muhammad', 'ZendaEka', '$2y$10$lOcNvYYwF673j6rVLazjlOz73zCq6BfVpvUItPTYMKrLOWQK0auS6', 'zendaeka@gmail.com', '089655420988', '2002-02-18', 'coretan.png', '1', '2020-05-29 16:10:49', '2020-05-29 16:10:49'),
(17, 'Aziizah Bashir', 'Aziizah', '$2y$10$sSIeorUDtu4puDEnuqq0cONHiiSqjlDHYfLZKakD03RMTTk5XFH/K', 'aziizahbashir@gmail.com', '0895395333224', '2002-11-01', 'Gambar17.jpg', '1', '2020-06-06 08:47:43', '2020-06-06 08:48:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_wisata`
--

CREATE TABLE `tb_wisata` (
  `id_wisata` int(11) NOT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `nama_wisata` varchar(50) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `ket_singkat` text DEFAULT NULL,
  `ket_lengkap` text DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `gambar` varchar(250) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_wisata`
--

INSERT INTO `tb_wisata` (`id_wisata`, `id_kategori`, `nama_wisata`, `alamat`, `ket_singkat`, `ket_lengkap`, `harga`, `stok`, `gambar`, `created`, `modified`) VALUES
(1, 1, 'Gunung Merapi', 'Sumatra Barat, Indonesia', 'Gunung Marapi (juga dikenal sebagai Merapi atau Berapi) adalah gunung berapi yang terletak di Sumatra Barat, Indonesia. Gunung ini tergolong gunung yang paling aktif di Sumatra. Terletak dalam kawasan administrasi Kabupaten Agam. Gunung ini dapat juga dilihat dari kota Bukittinggi, kota Padangpanjang dan kabupaten Tanah Datar dan memiliki ketinggian 2.891 m. Gunung Marapi sudah meletus lebih dari 50 kali sejak akhir abad 18.', '<p>Pada tanggal 8 September 1830 dilaporkan Gunung Marapi mengeluarkan awan yang berbentuk kembang kol abu-abu kehitaman dengan ketebalan 1.500 m di atas kawahnya, disertai dengan suara gemuruh.</p><p>Pada tanggal 30 April 1979, menurut laporan pers disebutkan 60 orang tewas akibat letusan Gunung Marapi dan disebutkan juga 19 orang pekerja penyelamat terperangkap oleh tanah longsor. Letusan tersebut dikatakan juga mengeluarkan batu dan lumpur yang menyebabkan kerusakan sedikitnya pada lima daerah kawasan pemukiman penduduk setempat.</p><p>Memasuki akhir tahun 2011 hingga awal tahun 2014, Gunung Marapi menampakkan peningkatan aktivitasnya melalui letusan yang menyemburkan abu dan awan hitam. Pernah diakhir tahun 2011 semburan abu terbawa angin berkilo-kilo jaraknya hingga mencapai Kabupaten Padang Pariaman.</p><p>Tanggal 26 Februari 2014, Gunung Marapi meletus pada pukul 16.15 WIB, melepaskan material pasir, tefra, dan abu vulkanik ke wilayah Kabupaten Tanah Datar dan Agam. Status gunung ditetapkan Siaga (level 2) dan radius 3 km dari pusat kawah harus dikosongkan. Tidak ada evakuasi pada letusan ini.</p>', 100000, 19, 'Gunung1.jpg', '2020-05-02 09:55:09', '2020-05-02 09:55:09'),
(2, 1, 'Gunung Sinabung', 'Sumatra Utara, Indonesia', 'Gunung Sinabung adalah gunung api di Dataran Tinggi Karo, Kabupaten Karo, Sumatra Utara, Indonesia. Sinabung bersama Gunung Sibayak di dekatnya adalah dua gunung berapi aktif di Sumatra Utara dan menjadi puncak tertinggi ke 2 di provinsi itu. Ketinggian gunung ini adalah 2.451 meter.', '<p>Pada 27 Agustus 2010, gunung ini mengeluarkan asap dan abu vulkanis.Pada tanggal 29 Agustus 2010 dini hari sekitar pukul 00.15 WIB (28 Agustus 2010, 17.15 UTC), gunung Sinabung mengeluarkan lava. Status gunung ini dinaikkan menjadi Awas. Dua belas ribu warga disekitarnya dievakuasi dan ditampung di 8 lokasi. Abu Gunung Sinabung cenderung meluncur dari arah barat daya menuju timur laut.[9] Sebagian Kota Medan juga terselimuti abu dari Gunung Sinabung. Bandar Udara Polonia di Kota Medan dilaporkan tidak mengalami gangguan perjalanan udara. Satu orang dilaporkan meninggal dunia karena gangguan pernapasan ketika mengungsi dari rumahnya.</p><p>Pada tanggal 3 September, terjadi 2 letusan. Letusan pertama terjadi sekitar pukul 04.45 WIB sedangkan letusan kedua terjadi sekitar pukul 18.00 WIB. Letusan pertama menyemburkan debu vuklkanis setinggi 3 kilometer.</p><p>Letuasn kedua terjadi bersamaan dengan gempa bumi vulkanis yang dapat terasa hingga 25 kilometer di sekitar gunung ini.</p><p>Pada tanggal 7 September, Gunung Sinabung kembali metelus. Ini merupakan letusan terbesar sejak gunung ini menjadi aktif pada tanggal 29 Agustus 2010. Suara letusan ini terdengar sampai jarak 8 kilometer. Debu vulkanis ini tersembur hingga 5.000 meter di udara.</p>', 93000, 20, 'Gunung2.jpg', '2020-05-02 09:56:58', '2020-05-02 09:56:58'),
(3, 1, 'Gunung Kerinci', 'Sumatra Barat, Indonesia', 'Gunung Kerinci adalah gunung tertinggi di Sumatra, gunung berapi tertinggi di Indonesia, dan puncak tertinggi di Indonesia di luar Papua. Gunung Kerinci terletak di Provinsi Jambi, di Pegunungan Bukit Barisan, dekat pantai barat, dan terletak sekitar 130 km sebelah selatan Padang Provinsi Sumatra Barat.', '<p>Puncak Gunung Kerinci berada pada ketinggian 3.805 mdpl, di Kabupaten Kerinci, Provinsi Jambi, di sini pengunjung dapat melihat di kejauhan membentang pemandangan indah Kota Jambi, Padang, dan Bengkulu. Bahkan Samudera Hindia yang luas dapat terlihat dengan jelas. Gunung Kerinci memiliki kawah seluas 400 x 120 meter dan berisi air yang berwarna hijau. Di sebelah timur terdapat danau Bento, rawa berair jernih tertinggi di Sumatra. Di belakangnya terdapat gunung tujuh dengan kawah yang sangat indah yang hampir tak tersentuh.</p><p>Gunung Kerinci berbentuk kerucut dengan lebar 13 km (8 mil) dan panjang 25 km (16 mil), memanjang dari utara ke selatan. Pada puncaknya di sisi timur laut terdapat kawah sedalam 600 meter (1.969 kaki) berisi air berwarna hijau. Hingga sekarang, kawah yang berukuran 400 x 120 meter ini masih berstatus aktif.</p><p>Gunung Kerinci termasuk dalam bagian dari Taman Nasional Kerinci Seblat (TNKS). TNKS adalah sebuah wilayah konservasi yang memiliki luas 1.484.650 hektare dan terletak di wilayah empat provinsi, yang mana sebagian besarnya berada di wilayah Jambi. TNKS sendiri merupakan bagian dari Pegunungan Bukit Barisan yang memanjang dari utara ke selatan di Pulau Sumatra. Gunung Kerinci merupakan gunung tipe A aktif yang berada sekitar 130 kilometer arah Selatan Kota Padang. Tipe Letusan : Tipe Hawaii Bentuk Gunung : Gunung Strato atau Kerucut Tipe Erupsi : Erupsi Eksplosif Keaktifan Gunung : Tipe A</p><p>Tumbuhan dataran rendah didominasi oleh beberapa jenis mahoni, terdapat juga tumbuhan raksasa Bunga Raflesia Rafflesia Arnoldi dan Suweg Raksasa Amorphophallus Titanum. Pohon cemara juga tumbuh di Gunung Kerinci. Dengan Taman Nasional Leuser, taman ini terhalang oleh Danau Toba dan Ngarai Sianok. Sehingga beberapa binatang yang tidak terdapat di Taman Leuser ada di sini, seperti tapir (Tapirus indicus) dan kuskus (Tarsius bancanus).</p><p>Banyak terdapat binatang khas Sumatra seperti gajah, badak sumatera, harimau, beruang madu, macan tutul, kecuali orang utan. Berbagai primata seperti siamang, gibbon, monyet ekor panjang, dan Presbytis melapophos. Terdapat juga 140 jenis burung.</p>', 76000, 20, 'Gunung3.jpg', '2020-05-02 09:57:58', '2020-05-02 09:57:58'),
(4, 2, 'Gunung Semeru', 'Pronojiwo Candipuro, Lumajang, Indonesia', 'Gunung Semeru atau Gunung Meru adalah sebuah gunung berapi kerucut di Jawa Timur, Indonesia. Gunung Semeru merupakan gunung tertinggi di Pulau Jawa, dengan puncaknya Mahameru, 3.676 meter dari permukaan laut.', '<p>Gunung Semeru atau Gunung Meru adalah sebuah gunung berapi kerucut di Jawa Timur, Indonesia. Gunung Semeru merupakan gunung tertinggi di Pulau Jawa, dengan puncaknya Mahameru, 3.676 meter dari permukaan laut (mdpl). Gunung Semeru juga merupakan gunung berapi tertinggi ketiga di Indonesia setelah Gunung Kerinci di Sumatra dan Gunung Rinjani di Nusa Tenggara Barat. Kawah di puncak Gunung Semeru dikenal dengan nama Jonggring Saloko. Gunung Semeru secara administratif termasuk dalam wilayah dua kabupaten, yakni Kabupaten Malang dan Kabupaten Lumajang, Provinsi Jawa Timur. Gunung ini termasuk dalam kawasan Taman Nasional Bromo Tengger Semeru. </p><p>Pada tahun 1913 dan 1946 Kawah Jonggring Saloka memiliki kubah dengan ketinggian 3.744,8 m hingga akhir November 1973. Di sebelah selatan, kubah ini mendobrak tepi kawah menyebabkan aliran lava mengarah ke sisi selatan meliputi daerah Pronojiwo dan Candipuro di Lumajang. Diperlukan waktu sekitar empat hari untuk mendaki puncak gunung Semeru pergi-pulang. Untuk mendaki gunung dapat ditempuh lewat kota Malang atau Lumajang. Dari terminal Kota Malang naik angkutan umum menuju desa Tumpang. Disambung lagi dengan jeep atau truk/pickup yang banyak terdapat di belakang pasar terminal Tumpang dengan biaya per orang Rp60.000,00 - Rp100.000,0 hingga Pos Ranu Pani. Sebelumnya mampir di Gubugklakah untuk memperoleh surat izin, dengan perincian, biaya surat izin Rp6.000,00 untuk maksimal 10 orang, karcis masuk taman Rp2.000,00 per orang, asuransi per orang Rp2.000,00 (perkiraan biaya sudah termasuk transportasi jip atau truk sayuran).</p><p>Dengan menggunakan truk sayuran atau jip perjalanan dimulai dari Tumpang menuju Ranu Pani, desa terakhir di kaki Semeru. Adapun dari arah Lumajang dapat dijangkau dengan menggunakan kendaraan pribadi atau naik ojek di sekitar pasar Senduro menuju ke Pos Ranu Pani. Di sini terdapat pos pemeriksaan, terdapat juga warung dan pondok penginapan. Setiap orang yang ingin melakukan pendakian dikenakan biaya Rp17.500 per orang per hari untuk hari biasa, dan Rp22.500 per orang per hari untuk hari libur. Di pos ini pun dapat mencari portir (warga lokal untuk membantu menunjukkan arah pendakian, mengangkat barang dan memasak). Pendaki juga dapat bermalam di pos penjagaan. Di pos Ranu Pani juga terdapat dua buah danau yakni Ranu Pani (1 ha) dan Ranu Regulo (0,75 ha) yang terletak pada ketinggian 2.200 mdpl. Setelah sampai di gapura \"Selamat Datang\", perjalanan berlanjut terus ke kiri ke arah bukit, tetapi jangan mengikuti jalanan yang lebar ke arah kebun penduduk. Selain jalur yang biasa dilewati para pendaki, juga ada jalur pintas yang biasa dipakai para pendaki lokal, tetapi jalur ini sangat curam.</p><p>Jalur awal landai, menyusuri lereng bukit yang didominasi dengan tumbuhan alang-alang. Tidak ada tanda penunjuk arah jalan, tetapi terdapat tanda ukuran jarak pada setiap 100 m. Banyak terdapat pohon tumbang, dan ranting-ranting di atas kepala. Setelah berjalan sekitar 5 km menyusuri lereng bukit yang banyak ditumbuhi bunga edelweis, lalu akan sampai di Watu Rejeng. Di sini terdapat batu terjal yang sangat indah. Pemandangan sangat indah ke arah lembah dan bukit-bukit, yang ditumbuhi hutan cemara dan pinus. Kadangkala dapat menyaksikan kepulan asap dari puncak Semeru. Untuk menuju Ranu Kumbolo masih harus menempuh jarak sekitar 4,5 km. Di Ranu Kumbolo dapat didirikan tenda. Juga terdapat pondok pendaki (shelter). Terdapat danau dengan air yang bersih dan memiliki pemandangan indah terutama di pagi hari dapat menyaksikan matahari terbit disela-sela bukit. Banyak terdapat ikan, kadang burung belibis liar. Ranu Kumbolo berada pada ketinggian 2.400 m dengan luas 14 ha. Dari Ranu Kumbolo sebaiknya menyiapkan air sebanyak mungkin. Meninggalkan Ranu Kumbolo kemudian mendaki bukit terjal, dengan pemandangan yang sangat indah di belakang ke arah danau. Di depan bukit terbentang padang rumput yang luas yang dinamakan oro-oro ombo. Oro-oro ombo dikelilingi bukit dan gunung dengan pemandangan yang sangat indah, padang rumput luas dengan lereng yang ditumbuhi pohon pinus seperti di Eropa. Dari balik Gn. Kepolo tampak puncak Gn. Semeru menyemburkan asap wedus gembel.</p>', 140000, 20, 'Gunung4.jpg', '2020-05-02 10:23:30', '2020-05-02 10:23:30'),
(5, 2, 'Gunung Sumbing', 'Kabupaten Magelang, Jawa Tengah, Indonesia', 'Gunung Sumbing adalah gunung api yang terdapat di Jawa Tengah, Indonesia., gunung Sumbing merupakan gunung tertinggi ketiga di Pulau Jawa setelah Gunung Semeru dan Gunung Slamet. Gunung ini secara administratif terletak di tiga wilayah kabupaten, yaitu Kabupaten Magelang; Kabupaten Temanggung; dan Kabupaten Wonosobo.', '<p>Gunung Sumbing adalah gunung api yang terdapat di Jawa Tengah, Indonesia. (Ketinggian puncak 3.371 mdpl), gunung Sumbing merupakan gunung tertinggi ketiga di Pulau Jawa setelah Gunung Semeru dan Gunung Slamet. Gunung ini secara administratif terletak di tiga wilayah kabupaten, yaitu Kabupaten Magelang; Kabupaten Temanggung; dan Kabupaten Wonosobo. Bersama dengan Gunung Sindoro, Gunung Sumbing membentuk bentang alam gunung kembar, seperti Gunung Merapi dan Gunung Merbabu, apabila dilihat dari arah Temanggung. Celah antara gunung ini dan Gunung Sindoro dilalui oleh jalan provinsi yang menghubungkan kota Temanggung dan kota Wonosobo. Jalan ini biasa dijuluki sebagai \"Kledung Pass\". Letusan terakhir tercatat pada tahun 1730, yang membentuk kubah lava dengan aliran lava ke arah bibir kawah terendah.</p><p>Gunung Sumbing mempunyai kawasan hutan Dipterokarp Bukit, hutan Dipterokarp Atas, hutan Montane, dan Hutan Ericaceous atau hutan gunung. Sebagian besar wilayah lereng gunung ini telah digunakan untuk lahan pertanian.</p><p>Jalur pendakian Gunung Sumbing paling populer adalah melalui pos Garung. Garung adalah sebuah desa di kaki bagian utara Gunung Sumbing, di kawasan Kledung Pass. Dekat dengan Desa Garung tersebut juga terdapat basecamp untuk pendakian ke Gunung Sindoro. Selain itu juga terdapat jalur lain seperti Bowongso, Cepit, Lamuk, Banaran, Butuh Kaliangkrik, dan Mangli Kaliangkrik.</p><p>Letak Gunung Sumbing dan Gunung Sindoro saling berhadapan. Banyak disebut oleh masyarakat bahwa gunung Sumbing-Sindoro adalah gunung kembar layaknya gunung Merapi-Merbabu. Tinggi yang tidak jauh berbeda, dan juga kondisi alam gunung yang juga hampir sama. Namun bagi para pendaki Gunung Sumbing memiliki trek yang lebih berat daripada Gunung Sindoro dikarenakan gradien kemiringan yang terjal dan rute yang lebih panjang.</p>', 98000, 20, 'Gunung14.jpg', '2020-05-02 10:23:31', '2020-05-02 10:23:32'),
(6, 2, 'Gunung Slamet', 'Kabupate Brebes, Jawa Tengah, Indonesia', 'Gunung Slamet adalah sebuah gunung berapi kerucut yang terdapat di Pulau Jawa, Indonesia. Gunung Slamet terletak di antara 5 kabupaten, yaitu Kabupaten Brebes, Kabupaten Banyumas, Kabupaten Purbalingga, Kabupaten Tegal, dan Kabupaten Pemalang, Provinsi Jawa Tengah.', '<p>Gunung Slamet (3.428 meter dpl.) adalah sebuah gunung berapi kerucut yang terdapat di Pulau Jawa, Indonesia. Gunung Slamet terletak di antara 5 kabupaten, yaitu Kabupaten Brebes, Kabupaten Banyumas, Kabupaten Purbalingga, Kabupaten Tegal, dan Kabupaten Pemalang, Provinsi Jawa Tengah. Gunung Slamet merupakan gunung tertinggi di Jawa Tengah serta kedua tertinggi di Pulau Jawa setelah Gunung Semeru. Kawah IV merupakan kawah terakhir yang masih aktif sampai sekarang, dan terakhir aktif hingga pada level siaga medio-2009.</p><p>Sebagaimana gunung api lainnya di Pulau Jawa, Gunung Slamet terbentuk akibat subduksi Lempeng Indo-Australia pada Lempeng Eurasia di selatan Pulau Jawa. Retakan pada lempeng membuka jalur lava ke permukaan. Catatan letusan diketahui sejak abad ke-19. Gunung ini aktif dan sering mengalami erupsi skala kecil. Aktivitas terakhir adalah pada bulan Mei 2009 dan sampai Juni masih terus mengeluarkan lava pijar.[1] Sebelumnya ia tercatat meletus pada tahun 1999.</p><p>Maret 2014 Gunung Slamet menunjukkan aktifitas dan statusnya menjadi Waspada. Berdasarkan data PVMBG, aktivitas vukanik Gunung Slamet masih fluktuatif. Setelah sempat terjadi gempa letusan hingga 171 kali pada Jumat 14 Maret 2014 dari pukul 00.00-12.00 WIB, pada durasi waktu yang sama, tercatat sebanyak 57 kali gempa letusan. Tercatat pula 51 kali embusan. Pemantauan visual, embusan asap putih tebal masih keluar dari kawah gunung ke arah timur hingga setinggi 1 km.</p><p>Sejarawan Belanda, J. Noorduyn berteori bahwa nama \"Slamet\" adalah relatif baru, yaitu setelah masuknya Islam ke Jawa (kata itu merupakan pinjaman dari bahasa Arab). Ia mengemukakan pendapat bahwa yang disebut sebagai Gunung Agung dalam naskah berbahasa Sunda mengenai petualangan Bujangga Manik adalah Gunung Slamet, berdasarkan pemaparan lokasi yang disebutkan </p>', 70000, 20, 'Gunung10.jpg', '2020-05-02 10:23:33', '2020-05-02 10:23:33'),
(7, 2, 'Gunung Merbabu', 'Semarang, Boyolali, Magelang (Jawa Tengah), Indonesia', 'Gunung Merbabu adalah gunung api yang bertipe Strato yang terletak secara geografis pada 7,5° LS dan 110,4° BT.', '<p>Gunung Merbabu adalah gunung api yang bertipe Strato (lihat Gunung Berapi) yang terletak secara geografis pada 7,5° LS dan 110,4° BT. Secara administratif gunung ini berada di wilayah Kabupaten Magelang di lereng sebelah barat dan Kabupaten Boyolali di lereng sebelah timur dan selatan, Kabupaten Semarang di lereng sebelah utara, Provinsi Jawa Tengah.</p><p>Gunung Merbabu dikenal melalui naskah-naskah masa pra-Islam sebagai Gunung Damalung atau Gunung Pam(a)rihan. Di lerengnya pernah terdapat pertapaan terkenal dan pernah disinggahi oleh Bujangga Manik pada abad ke-15. Menurut etimologi, \"merbabu\" berasal dari gabungan kata \"meru\" (gunung) dan \"abu\" (abu). Nama ini baru muncul pada catatan-catatan Belanda.</p><p>Gunung ini pernah meletus pada tahun 1560 dan 1797. Dilaporkan juga pada tahun 1570 pernah meletus, akan tetapi belum dilakukan konfirmasi dan penelitian lebih lanjut. Puncak gunung Merbabu berada pada ketinggian 3.145 meter di atas permukaan air laut.</p><p>Gunung Merbabu mempunyai kawasan Hutan Dipterokarp Bukit, Hutan Dipterokarp Atas, Hutan Montane, dan hutan Ericaceous atau hutan gunung.</p>', 99000, 20, 'Gunung11.jpg', '2020-05-02 10:23:35', '2020-05-02 10:23:35'),
(8, 2, 'Gunung Lawu', 'Perbatasan Jawa Tengah & Jawa Timur', 'Gunung Lawu terletak di Pulau Jawa, Indonesia, tepatnya di perbatasan Provinsi Jawa Tengah dan Jawa Timur. Gunung Lawu terletak di antara tiga kabupaten yaitu Kabupaten Karanganyar, Jawa Tengah, Kabupaten Ngawi, dan Kabupaten Magetan, Jawa Timur. ', '<p>Gunung Lawu (Hanacaraka: ????????? ) (3.265 MDPL) terletak di Pulau Jawa, Indonesia, tepatnya di perbatasan Provinsi Jawa Tengah dan Jawa Timur. Gunung Lawu terletak di antara tiga kabupaten yaitu Kabupaten Karanganyar, Jawa Tengah, Kabupaten Ngawi, dan Kabupaten Magetan, Jawa Timur. Status gunung ini adalah gunung api \"istirahat\" (diperkirakan terahkir meletus pada tanggal 28 November 1885) dan telah lama tidak aktif, terlihat dari rapatnya vegetasi serta puncaknya yang tererosi. Di lerengnya terdapat kepundan kecil yang masih mengeluarkan uap air (fumarol) dan belerang (solfatara). Gunung Lawu mempunyai kawasan hutan Dipterokarp Bukit, hutan Dipterokarp Atas, hutan Montane, dan hutan Ericaceous. Gunung Lawu adalah sumber inspirasi dari nama kereta api Argo Lawu, kereta api eksekutif yang melayani Solo Balapan-Gambir.</p><p>Gunung Lawu memiliki tiga puncak, Puncak Hargo Dalem, Hargo Dumiling dan Hargo Dumilah. Yang terakhir ini adalah puncak tertinggi.</p><p>Di lereng gunung ini terdapat sejumlah tempat yang populer sebagai tujuan wisata, terutama di daerah Tawangmangu, Cemorosewu, dan Sarangan. Agak ke bawah, di sisi barat terdapat dua komplek percandian dari masa akhir Majapahit: Candi Sukuh dan Candi Cetho. Di kaki gunung ini juga terletak komplek pemakaman kerabat Praja Mangkunagaran: Astana Girilayu dan Astana Mangadeg. Di dekat komplek ini terletak Astana Giribangun, mausoleum untuk keluarga presiden kedua Indonesia, Soeharto.</p><p>Gunung Lawu sangat populer untuk kegiatan pendakian. Setiap malam 1 Sura banyak orang berziarah dengan mendaki hingga ke puncak. Karena populernya, di puncak gunung bahkan dapat dijumpai pedagang makanan.</p>', 121000, 20, 'Gunung12.jpg', '2020-05-02 10:23:39', '2020-05-02 10:23:39'),
(9, 2, 'Gunung Arjuno', 'Pasuruan, Jawa Timur, Indonesia', 'Gunung Arjuno adalah sebuah gunung berapi kerucut di Jawa Timur, Indonesia dengan ketinggian 3.339 m dpl. Gunung Arjuno secara administratif terletak di perbatasan Kota Batu, Kabupaten Malang, dan Kabupaten Pasuruan dan berada di bawah pengelolaan Taman Hutan Raya Raden Soerjo.', '<p>Gunung Arjuno (terkadang dieja Gunung Arjuna) adalah sebuah gunung berapi kerucut (istirahat) di Jawa Timur, Indonesia dengan ketinggian 3.339 m dpl. Gunung Arjuno secara administratif terletak di perbatasan Kota Batu, Kabupaten Malang, dan Kabupaten Pasuruan dan berada di bawah pengelolaan Taman Hutan Raya Raden Soerjo. Gunung Arjuno merupakan gunung tertinggi kedua di Jawa Timur setelah Gunung Semeru, serta menjadi yang tertinggi keempat di Pulau Jawa. Biasanya gunung ini dicapai dari tiga titik pendakian yang cukup dikenal yaitu dari Lawang, Tretes dan Batu. Nama Arjuno berasal dari salah satu tokoh pewayangan Mahabharata, Arjuna.</p><p>Gunung Arjuno bersebelahan dengan Gunung Welirang, Gunung Kembar I, dan Gunung Kembar II. Puncak Gunung Arjuno terletak pada satu punggungan yang sama dengan puncak gunung Welirang, sehingga kompleks ini sering disebut juga dengan Arjuno-Welirang. Kompleks Arjuno-Welirang sendiri berada di dua gunung berapi yang lebih tua, Gunung Ringgit di timur dan Gunung Lincing di selatan. Area fumarol dengan cadangan belerang ditemukan di sejumlah lokasi pegunungan ini, seperti pada puncak Gunung Welirang, puncak Gunung Kembar II, dan pada sejumlah jalur pendakian.</p><p>Gunung Arjuno merupakan salah satu tujuan pendakian. Di samping tingginya yang telah mencapai lebih dari 3000 meter, di gunung ini terdapat beberapa objek wisata. Salah satunya adalah objek wisata air terjun Kakek Bodo yang juga merupakan salah satu jalur pendakian menuju puncak Gunung Arjuno. Meskipun selain objek wisata air terjun Kakek Bodo terdapat pula air terjun lain, tetapi para wisatawan jarang yang mendatangi air terjun lainnya, mungkin karena letak dan sarana wisatanya kurang mendukung. Di kawasan lerengnya juga terdapat mata air Sungai Brantas yang berasal dari simpanan air Gunung Arjuno. Mata air Sungai Brantas terletak di Desa Sumber Brantas, Bumiaji, Kota Batu yang merupakan sungai terpanjang kedua di Pulau Jawa setelah Bengawan Solo. Beberapa destinasi wisata yang terkenal hingga ke seluruh Indonesia maupun luar negeri juga terletak di lereng Gunung Arjuno, di antaranya adalah Tretes, Kota Wisata Batu, dan Taman Safari Indonesia 2.</p><p>Gunung Arjuno dapat didaki dan berbagai arah, arah Utara (Tretes) melalui Gunung Welirang, dan arah Timur (Lawang) dan dari arah Barat (Batu-Selecta), dan arah selatan (Karangploso), juga dari Sumberawan, Singosari. Desa Sumberawan adalah desa pusat kerajinan tangan di kecamatan Singosari, Kabupaten Malang dan merupakan desa terakhir untuk mempersiapkan diri sebelum memulai pendakian. Bisa juga melewati Purwosari yang lebih gampang dilewati, karena hanya setengah jam dari jalan raya dan langsung sampai di Tambakwatu.</p>', 80000, 20, 'Gunung13.jpg', '2020-05-02 10:23:41', '2020-05-02 10:23:41'),
(10, 2, 'Gunung Bromo', 'Kabupaten Malang, Jawa Timur, Indonesia', 'Gunung Bromo atau dalam bahasa Tengger dieja \"Brama\", adalah sebuah gunung berapi aktif di Jawa Timur, Indonesia. Gunung ini memiliki ketinggian 2.329 meter di atas permukaan laut dan berada dalam empat wilayah kabupaten, yakni Kabupaten Probolinggo, Kabupaten Pasuruan, Kabupaten Lumajang, dan Kabupaten Malang. ', '<p>Gunung Bromo (dari bahasa Sanskerta: Brahma, salah seorang Dewa Utama dalam agama Hindu) atau dalam bahasa Tengger dieja \"Brama\", adalah sebuah gunung berapi aktif di Jawa Timur, Indonesia. Gunung ini memiliki ketinggian 2.329 meter di atas permukaan laut dan berada dalam empat wilayah kabupaten, yakni Kabupaten Probolinggo, Kabupaten Pasuruan, Kabupaten Lumajang, dan Kabupaten Malang. Gunung Bromo terkenal sebagai objek wisata utama di Jawa Timur. Sebagai sebuah objek wisata, Bromo menjadi menarik karena statusnya sebagai gunung berapi yang masih aktif. Gunung Bromo termasuk dalam kawasan Taman Nasional Bromo Tengger Semeru.</p><p>Bentuk tubuh Gunung Bromo bertautan antara lembah dan ngarai dengan kaldera atau lautan pasir seluas sekitar 10 kilometer persegi. Ia mempunyai sebuah kawah dengan garis tengah ± 800 meter (utara-selatan) dan ± 600 meter (timur-barat). Sedangkan daerah bahayanya berupa lingkaran dengan jari-jari 4 km dari pusat kawah Bromo.</p><p>Selama abad 20 dan abad 21, Gunung Bromo telah meletus sebanyak beberapa kali, dengan interval waktu yang teratur, yaitu 30 tahun. Letusan terbesar terjadi 1974, sedangkan letusan terakhir terjadi pada 2015-sekarang.</p><p>Bagi penduduk sekitar Gunung Bromo, suku Tengger, Gunung Bromo/Gunung Brahma dipercaya sebagai gunung suci. Setiap setahun sekali masyarakat Tengger mengadakan upacara Yadnya Kasada atau Kasodo. Upacara ini bertempat di sebuah pura yang berada di bawah kaki Gunung Bromo dan dilanjutkan ke puncak Bromo. Upacara diadakan pada tengah malam hingga dini hari setiap bulan purnama sekitar tanggal 14 atau 15 di bulan Kasodo (kesepuluh) menurut penanggalan Jawa.</p>', 94000, 20, 'Gunung5.jpg', '2020-05-02 10:23:42', '2020-05-02 10:23:43'),
(11, 3, 'Gunung Palung', 'Padu Banjar, Kec. Simpang Hilir, Kabupaten Ketapang, Kalimantan Barat 78857', 'Taman Nasional Gunung Palung adalah taman nasional yang terletak di Kabupaten Kayong Utara dan Kabupaten Ketapang, Kalimantan Barat.', 'Kawasan hutan ini mula-mula dilindungi pada tahun 1937 sebagai hutan cagar alam dengan luas 300 km².[1] Pada tahun 1981, luasnya jauh meningkat menjadi 900 km² dan mengalami kenaikan status menjadi suaka margasatwa, dan barulah pada tanggal 24 Maret 1990[1] berdasarkan Keputusan Menteri Kehutanan Nomor 448/Menhut-VI/1990 dengan luas ± 90.000 ha menjadi taman nasional. Kemudian taman nasional ini mengalami perluasan hingga 108.043,90 hektar, berdasarkan SK no. 4191/Menhut-VII/KUH/2014 tanggal 10 Juni 2014.[2] Taman nasion ini terbentang di Kecamatan Matan Hilir Utara, Sukadana, Simpang Hilir, Nanga Tayap, dan Sandai.', 90000, 20, 'Gunung6.jpg', '2020-05-02 11:22:39', '2020-05-02 11:22:39'),
(12, 3, 'Gunung Niut', 'Kabupaten Landak, Kalimantan Barat, Indonesia', 'Gunung Niut adalah sebuah gunung yang terletak di Kabupaten Landak, Provinsi Kalimantan Barat, Indonesia. Gunung ini adalah gunung tertinggi di Provinsi Kalimantan Barat dengan ketinggian mencapai 1.701 meter diatas permukaan air laut.', 'Gunung Niut adalah sebuah gunung yang terletak di Kabupaten Landak, Provinsi Kalimantan Barat, Indonesia. Gunung ini adalah gunung tertinggi di Provinsi Kalimantan Barat dengan ketinggian mencapai 1.701 meter diatas permukaan air laut. Gunung Niut berada di bagian barat dari Pegununagn Kapuas Hilir. Beberapa puncak disekitarnya antara lain Puncak Setawi, dan Puncak Keliung. Sementara Gunung Disekitarnya diantaranya Gunung Anggah, Gunung Semedun, Gunung Panggah, Gunung Sinjang, Gunung Sekaju, Gunung Sebabak, Gunung Bengkarun, Gunung Damus, dan Gunung Seraang.', 85000, 20, 'Gunung7.jpg', '2020-05-02 11:22:37', '2020-05-02 11:22:37'),
(13, 3, 'Gunung Halau - Halau', 'Kalimantan Selatan, Indonesia', 'Gunung Halau-halau atau Gunung Besar adalah gunung yang terletak di perbatasan tiga kabupaten, yaitu Kabupaten Hulu Sungai Tengah, Kabupaten Hulu Sungai Selatan dan Kabupaten Tanah Bumbu di Provinsi Kalimantan Selatan.', 'DeskripsiGunung Halau-halau atau Gunung Besar adalah gunung yang terletak di perbatasan tiga kabupaten, yaitu Kabupaten Hulu Sungai Tengah, Kabupaten Hulu Sungai Selatan dan Kabupaten Tanah Bumbu di Provinsi Kalimantan Selatan.', 77000, 20, 'Gunung8.jpg', '2020-05-02 11:22:35', '2020-05-02 11:22:36'),
(14, 3, 'Gunung Bawang', 'Desa Suka Bangun, Kalimantan Barat, Indonesia', 'Gunung Bawang merupakan sebuah gunung yang terdapat di Provinsi Kalimantan Barat, Indonesia. Gunung ini mempunyai bentuk menyerupai pegunungan ', '<p>Gunung Bawang merupakan sebuah gunung yang terdapat di Provinsi Kalimantan Barat, Indonesia. Gunung ini mempunyai bentuk menyerupai pegunungan karena memanjang sekira 18 Km mencangkup 4 kecamatan di Kabupaten Bengkayang. Gunung Bawang memiliki empat puncak runcing yang memiliki ketinggian lebih dari 1.000 Mdpl.</p><p>Dinamakan Gunung Bawang dikarenakan bentuknya berlapis hingga 7 lapis seperti bawang. Gunung Bawang memiliki cerita yang berkaitan erat dengan Suku Dayak Bengkayang, Suku Dayak Kanayatn dan Suku Dayak Lara. Gunung ini merupakan daerah yang dikeramatkan bagi Suku Dayak Bengkayan. Karena mitosnya dari tempat tersebut asal mula Suku Dayak Bengkayan. Kisah bermula dari Jubata (yang didewa-kan/di-agungkan bagi suku dayak) yang turun ke dunia dan menempati Gunung Bawang. Nama-nama Jubata yang menghuni gunung ini yakni Jubata Lupo, Jubata Barabatn Ampor, Jubata Siru dan Jubata Sulujatn Maniamas dll. Berjalan dari waktu-ke-waktu hingga jadilah Gunung Bawang sebagai tempat yang terhormat bagi para suku dayak tersebut.</p><p>Gunung Bawang adalah gunung yang terletak di Kabupaten Bengkayang, Kalimantan Barat. Wilayah pegunungan nya mencakup mencangkup 4 kecamatan yaitu Kecamatan Lembah Bawang, Kecamatan Lumar, Kecamatan Sungai Betung dan Kecamatan Bengkayang. Sementara puncak Gunung Bawang berada di perbatasan Desa Tiga Berkat, Kecamatan Lumar dengan Desa Saka Taru, Kecamatan Lembah Bawang. Gunung Bawang berjarak 184 Km berkendara dari Pontianak. Rute yang ditempuh adalah Pontianak-Bengkayang-Suka Bangun.</p><p>Gunung Bawang merupakan salah satu gunung favorite bagi pendaki di Kalimantan. Waktu tempuh pendakian untuk mencapai puncak yang cukup singkat yaitu sekitar 7-8 jam. Terdapat tiga jalur pendakian menuju puncak Gunung Bawang, namun jalur termudah dan umum digunakan yaitu melalui Desa Suka Bangun, Kecamatan Sungai Betung, Kabupaten Bengkayang.</p><p>Fauna khas di Gunung Bawang diantaranya Rusa, Orang utan, Beruang madu, Macan dahan (Borneo Leopard), Burung RuaiBurung Enggang Gading, berbagai jenis kupu-kupu dan serangga, sedangkan flora khasnya adalah Kantong Semar dan Anggrek bulananggrek ekor tikus, anggrek lurikSungai yang berhulu di Gunung Bawang diantaranya adalah Sungai Raya yang bermuara di Selakau, Sungai Plagoi dan Sungai Batu Timah, Sungai Banan.</p>', 96000, 20, 'Gunung9.jpg', '2020-05-02 11:22:33', '2020-05-02 11:22:34'),
(15, 4, 'Gunung Latimohong', 'Sulawesi Selatan, Indonesia', 'Gunung Latimojong adalah satu nama gunung di Kabupaten Enrekang, Sulawesi Selatan, Indonesia. Gunung Latimojong berada di tengah-tengah Sulawesi Selatan. Sebagian besar pengunungan ini terletak di daerah Kabupaten Enrekang.', '<p>Provinsi Sulawesi Selatan merupakan bagian dari provinsi-provinsi di Indonesia yang mempunyai gunung dengan titik tertinggi di negeri ini. Pegunungan Latimojong yang terletak di Kabupaten Enrekang merupakan bagian dari tujuh puncak tertinggi di Indonesia (Seven Summits of Indonesia). Pegunungan yang berada di utara Provinsi Sulawesi Selatan ini memiliki beberapa puncak. Titik tertinggi dari pegunungan ini dinamai Puncak Rante Mario dengan ketinggian 3.430 mdpl. Titik awal pendakian pegunungan ini dapat dimulai dari Desa Karangan.</p><p>Pegunungan Latimojong merupakan titik tertinggi di Pulau Sulawesi. Rangkaian pegunungan ini bukan merupakan gunung berapi seperti gunung-gunung lain yang tersebar di beberapa wilayah Indonesia. Wilayah dari pegunungan Latimojong dipenuhi oleh hutan tipe Montana dimana karakteristik dari hutan tipe ini adalah tumbuh di wilayah dengan ketinggian 2.000 hingga 3.000 meter dari permukaan laut. Jika beruntung, para pendaki dapat bersua dengan babi rusa dan anoa di wilayah hutan gunung ini. Pegunungan Latimojong diketahui memiliki tujuh puncak dan masing-masing puncak mempunyai namanya sendiri. Buntu Rante Mario sebagai titik tertinggi di Pulau Sulawesi, diikuti  oleh Buntu Nenemori sebagai titik tertinggi kedua, dan puncak-puncak lainnya yaitu Buntu Sinaji, Buntu Sikolong, Buntu Rante Kambola, Buntu Bajaja, dan Buntu Latimojong. Di Desa Karangan yang merupakan titik awal pendakian terdapat sebuah sungai berair jernih yang cukup besar bernama Salu Karangan. Di desa ini juga, para pendaki yang membutuhkan jasa porter dapat meminta jasa penduduk setempat.</p><p>Terdapat tujuh pos peristirahatan yang bisa digunakan para pendaki untuk beristirahat atau mendirikan tenda sebelum mencapai Puncak Rante Mario. Setelah melewati pos tujuh, vegetasi mulai berubah. Pohon-pohon tinggi mulai berkurang, sehingga pemandangan lebih jelas terlihat. Melewati pos tujuh, para pendaki akan menemui sebuah tanah lapang yang memiliki jalanan bercabang. Cabang ini mengarahkan para pendaki ke dua titik yang berbeda, yang satu menuju Puncak Rante Mario dan satunya lagi menuju Puncak Nenemori. Jika telah tiba di Puncak Rante Mario, para pendaki akan disuguhi pemandangan dari puncak-puncak lain yang menjadi bagian Pegunungan Latimojong. Sedangkan puncaknya sendiri ditandai dengan sebuah tugu triangulasi di tengah-tengah lahan yang cukup datar, bertuliskan Puncak Rante Mario.</p>', 69000, 20, 'Gunung15.jpg', '2020-05-02 11:24:29', '2020-05-02 11:24:29'),
(16, 4, 'Gunung Kablat', 'Sulawesi Utara, Indonesia', 'Gunung Klabat merupakan gunung tertinggi di Provinsi Sulawesi Utara. Puncak ketinggiannya mencapai sekitar 1.995 mdpl. Gunung ini oleh masyarakat Tonsea disebut juga Gunung Tamporok. Gunung ini merupakan objek wisata alam dan dapat ditelusuri mulai dari Airmadidi. Gunung ini merupakan gunung api yang tidak aktif lagi.', '<p>Gunung Klabat merupakan gunung tertinggi di Provinsi Sulawesi Utara. Puncak ketinggiannya mencapai sekitar 1.995 mdpl. Gunung ini oleh masyarakat Tonsea (Minahasa Utara) disebut juga Gunung Tamporok. Gunung ini merupakan objek wisata alam dan dapat ditelusuri mulai dari Airmadidi (Ibu Kota Kabupaten Minahasa Utara). Gunung ini merupakan gunung api yang tidak aktif lagi. Puncak Gunung Klabat ini mempunyai kepundan berbentuk danau kecil dengan air yang sangat jernih. Mendaki gunung klabat melalui daerah air madidi ditempuh sekitar 8 jam perjalanan.</p><p>Kata Klabat diambil dari bahasa Minahasa \"Kalawat\" dialek Tonsea \"Kalabat\". Kalawat adalah nama dari sejenis satwa lokal yang juga disebut babirusa. Kata ini disebutkan oleh para pelaut Portugis \"Calabets\" sebagai nama gunung di pulau sulawesi, dari kata ini dinamakan sebagai nama pulau yang kemudian Calabes jadi Calabes = Celebes yang menjadi Sulawesi akhirnya kata ini menjadi nama pulau Sulawesi. Baca sejarah Sulawesi oleh David DS Lumoindong.</p>', 78000, 20, 'Gunung16.jpg', '2020-05-02 11:24:27', '2020-05-02 11:24:28'),
(17, 5, 'Puncak Jaya', 'Papua, Indonesia', 'Puncak Jaya atau Piramida Carstensz ialah sebuah puncak yang menjadi bagian dari Barisan Sudirman yang terdapat di Provinsi Papua, Indonesia.', '<p>Puncak Jaya atau Carstensz Pyramid ialah sebuah puncak yang menjadi bagian dari Barisan Sudirman yang terdapat di Provinsi Papua, Indonesia. Puncak Jaya mempunyai ketinggian 4.884 m dan di sekitarnya terdapat gletser Carstensz, satu-satunya gletser tropika di Indonesia, yang kemungkinan besar segera akan lenyap akibat pemanasan global.</p><p>Dataran tinggi di sekitar puncak awalnya sudah dihuni sebelum adanya kontak dengan bangsa Eropa, dan puncaknya dikenal sebagai Nemangkawi di Amungkal. Puncak Jaya sebelumnya bernama Piramida Carstensz setelah penjelajah Belanda Jan Carstenszoon menamainya ketika pertama kali melihat gletser di puncak gunung pada hari yang cerah pada tahun 1623.</p><p>Padang salju (gletser) Puncak Jaya berhasil didaki pada awal tahun 1909 oleh seorang penjelajah Belanda, Hendrikus Albertus Lorentz dengan enam orang suku Kenyah yang direkrut dari Apau Kayan di Kalimantan Utara. Taman Nasional Lorentz yang juga meliputi Piramida Carstensz, didirikan pada tahun 1919 menyusul laporan ekspedisi ini.</p><p>Pada tahun 1936, ekspedisi Carstensz yang diprakarsai Belanda, tidak mampu menetapkan dengan pasti yang mana dari ke tiga puncak adalah yang tertinggi, memutuskan untuk berusaha mendaki masing-masing puncak. Anton Colijn, Jean Jacques Dozy, dan Frits Julius Wissel mencapai padang gletser Carstensz Timur dan Puncak Ngga Pulu pada 5 Desember. Karena gletser yang mencair, ketinggian Puncak Ngga Pulu menjadi 4.862 meter, tetapi telah diperkirakan bahwa pada tahun 1936 (ketika gletser masih tertutup puncak seluas 13 kilometer persegi), Ngga Pulu memang puncak yang tertinggi dengan ketinggian lebih dari 5.000 meter.</p>', 200000, 20, 'Gunung17.jpg', '2020-05-02 11:27:59', '2020-05-02 11:27:59'),
(18, 5, 'Puncak Trikora', 'Papua, Indonesia', 'Puncak Trikora atau Ettiakup merupakan sebuah gunung yang terdapat di Papua Barat, Indonesia. Puncak Trikora mempunyai ketinggian setinggi 4,751 meter, menjadikannya gunung tertinggi ketiga di Indonesia setelah Puncak Jaya dan Puncak Mandala.', 'Puncak Trikora atau Ettiakup merupakan sebuah gunung yang terdapat di Papua Barat, Indonesia. Puncak Trikora mempunyai ketinggian setinggi 4,751 meter, menjadikannya gunung tertinggi ketiga di Indonesia setelah Puncak Jaya dan Puncak Mandala. Puncak Trikora mempunyai kawasan hutan Dipterokarp Bukit, hutan Dipterokarp Atas, hutan Montane, dan Hutan Ericaceous atau hutan gunung. Di zaman pemerintahan Belanda gunung ini dikenal dengan nama Wilhelminatop (Puncak Wilhelmina).', 123000, 20, 'Gunung18.jpg', '2020-05-02 11:28:01', '2020-05-02 11:28:01'),
(19, 5, 'Puncak Mandala', 'Papua, Indonesia', 'Puncak Mandala adalah salah satu gunung di Papua, Indonesia. Dengan ketinggian 4.760 m, Puncak Mandala adalah gunung tertinggi ke-2 di Indonesia setelah Puncak Jaya. Puncak Mandala membentuk bagian Pegunungan Bintang bagian timur dan berada dekat perbatasan Papua Nugini.', 'Puncak Mandala (pada masa penjajahan Belanda dikenal sebagai Julianatop atau Puncak Juliana) adalah salah satu gunung di Papua, Indonesia. Dengan ketinggian 4.760 m, Puncak Mandala adalah gunung tertinggi ke-2 di Indonesia setelah Puncak Jaya. Puncak Mandala membentuk bagian Pegunungan Bintang bagian timur dan berada dekat perbatasan Papua Nugini.', 150000, 20, 'Gunung19.jpg', '2020-05-02 11:28:02', '2020-05-02 11:28:03');

--
-- Trigger `tb_wisata`
--
DELIMITER $$
CREATE TRIGGER `Hapus Wisata` AFTER DELETE ON `tb_wisata` FOR EACH ROW INSERT INTO tb_aktivitas(nama, data_lama, status, keterangan, created, modified) VALUES ('RizkiKarianata', old.nama_wisata, 'Delete', 'Hapus data wisata pada tabel tb_wisata', NOW(), NOW())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `Tambah Wisata` AFTER INSERT ON `tb_wisata` FOR EACH ROW INSERT INTO tb_aktivitas(nama, data_baru, status, keterangan, created, modified) VALUES ('RizkiKarianata', new.nama_wisata, 'Add', 'Tambah data wisata pada tabel tb_wisata', NOW(), NOW())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `Ubah Wisata` AFTER UPDATE ON `tb_wisata` FOR EACH ROW INSERT INTO tb_aktivitas(nama, data_baru, data_lama, status, keterangan, created, modified) VALUES ('RizkiKarianata', new.nama_wisata, old.nama_wisata, 'Update', 'Ubah data wisata pada tabel tb_wisata', NOW(), NOW())
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tb_aktivitas`
--
ALTER TABLE `tb_aktivitas`
  ADD PRIMARY KEY (`id_aktivitas`);

--
-- Indeks untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tb_komentar`
--
ALTER TABLE `tb_komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `FK_tb_komentar_tb_berita` (`id_berita`),
  ADD KEY `FK_tb_komentar_tb_user` (`id_user`);

--
-- Indeks untuk tabel `tb_testimoni`
--
ALTER TABLE `tb_testimoni`
  ADD PRIMARY KEY (`id_testimoni`),
  ADD KEY `FK_tb_testimoni_tb_user` (`id_user`),
  ADD KEY `FK_tb_testimoni_tb_wisata` (`id_wisata`);

--
-- Indeks untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `FK_tb_transaksi_tb_user` (`id_user`),
  ADD KEY `FK_tb_transaksi_tb_wisata` (`id_wisata`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `tb_wisata`
--
ALTER TABLE `tb_wisata`
  ADD PRIMARY KEY (`id_wisata`),
  ADD KEY `FK_tb_wisata_tb_kategori` (`id_kategori`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_aktivitas`
--
ALTER TABLE `tb_aktivitas`
  MODIFY `id_aktivitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_komentar`
--
ALTER TABLE `tb_komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_testimoni`
--
ALTER TABLE `tb_testimoni`
  MODIFY `id_testimoni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tb_wisata`
--
ALTER TABLE `tb_wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_komentar`
--
ALTER TABLE `tb_komentar`
  ADD CONSTRAINT `FK_tb_komentar_tb_berita` FOREIGN KEY (`id_berita`) REFERENCES `tb_berita` (`id_berita`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_tb_komentar_tb_user` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_testimoni`
--
ALTER TABLE `tb_testimoni`
  ADD CONSTRAINT `FK_tb_testimoni_tb_user` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_tb_testimoni_tb_wisata` FOREIGN KEY (`id_wisata`) REFERENCES `tb_wisata` (`id_wisata`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD CONSTRAINT `FK_tb_transaksi_tb_user` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_tb_transaksi_tb_wisata` FOREIGN KEY (`id_wisata`) REFERENCES `tb_wisata` (`id_wisata`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_wisata`
--
ALTER TABLE `tb_wisata`
  ADD CONSTRAINT `FK_tb_wisata_tb_kategori` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
