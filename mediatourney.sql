-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Des 2020 pada 20.05
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mediatourney`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(11) NOT NULL,
  `judul` text NOT NULL,
  `deskripsi_blog` text NOT NULL,
  `author` text NOT NULL,
  `nama_games` text NOT NULL,
  `publish` date NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `blog`
--

INSERT INTO `blog` (`id_blog`, `judul`, `deskripsi_blog`, `author`, `nama_games`, `publish`, `gambar`) VALUES
(1, 'Tak Terima Zuxxy Juarai Esports Awards, Fans Nobru Minta Hitung Ulang!', '<p>Salah satu pemain pro scene PUBG Mobile di tim Bigetron Red Allienz yakni Zuxxy pada tanggal 21 November yang lalu berhasil meraih juara Esports Awards.</p>\r\n\r\n<p>Pemain ini memang dikenal sangat jago dalam bermain game PUBG Mobile dan kualitasnya sudah diakui oleh dunia.</p>\r\n\r\n<p>Apalagi timnya yakni Bigetron Red Allienz juga merupakan tim yang sangat tangguh dan beberapa kali menjuarai ajang International.</p>\r\n\r\n<p>Tentunya, penghargaan yang berhasil dimenangkan oleh Zuxxy patut diberi apresiasi karena dengan begitu nama Indonesia bisa dikenal oleh dunia.</p>\r\n\r\n<p>Zuxxy menjadi satu-satunya wakil Indonesia yang terpilih dalam Esports Awars yang diadakan beberapa hari yang lalu.</p>\r\n\r\n<p>Pemain ini berhasil meraih penghargaan Esports Awards kategori Esports Mobile Player of the Year.</p>\r\n\r\n<p>Pemain bernama lengkap Made Bagas &ldquo;Zuxxy&rdquo; Pramudita ini berhasil mengalahkan beberapa player lain yang kualitasnya hampir sama dengan Zuxxy.</p>\r\n\r\n<h2>Kemenangan Zuxxy diprotes oleh fans dari player lain</h2>\r\n\r\n<p><img alt=\"zuxxy esports awards\" src=\"https://media-assets-ggwp.s3.ap-southeast-1.amazonaws.com/2020/11/WhatsApp-Image-2020-11-26-at-12.24.37.jpeg\" style=\"height:450px; width:800px\" /></p>\r\n\r\n<p>Kemenangan Esports Awards yang dimenangkan oleh Zuxxy ternyata diprotes oleh beberapa orang yang tidak terima atas kemenangan pemain ini.</p>\r\n\r\n<p>Dilansir dari akun Instagram&nbsp;<a href=\"https://www.instagram.com/p/CH3oKgZFuvB/?igshid=fpaegtsuu3wg\"><em>@esportsawards</em></a>, kolom komentar yang memposting informasi Zuxxy yang berhasil juarai Esports Awards dibanjiri oleh banyak orang yang kebanyakan berasal dari fans Nobru.</p>\r\n\r\n<p>Nobru sendiri merupakan player pro scene Free Fire asal Brazil yang kualitasnya memang hampir sama dengan Zuxxy.</p>\r\n\r\n<p>Alhasil, para fans Nobru menginginkan hitung ulang karena mereka mengaku memberikan vote bersama-sama sampai menembus angka 13k di fanbase miliknya.</p>\r\n\r\n<p><em>&ldquo;Tolong hitung ulang, kami lebih dari 13 ribu orang telah melakukan voting secara bersama-sama untuk Nobru itu belum termasuk orang di luar club&rdquo;</em>&nbsp;ungkap salah satu komentar dari fans Nobru.</p>\r\n\r\n<p>Postingan Esports Awards yang menginformasikan Zuxxy tersebut saat ini telah menembus angka 2000 orang lebih yang kebanyakan terjadi perdebatan antara fans Zuxxy asal Indonesia dan fans Nobru asal Brazil.</p>\r\n\r\n<p>Kayaknya, belum tahu kali ya kalau di Indonesia penduduknya banyak banget, kalau sampai 13k sih mungkin kecil ya&nbsp;<em>guys</em>&nbsp;buat gamers di tanah air.</p>\r\n', 'admin', 'PUBG Mobile', '2020-12-17', '70-640x3602.jpeg'),
(2, 'Bigetron RA Kuasai Puncak Klasemen Super Weekend PMGC 2020 Minggu Pertama', '<p>Babak Super Weekend hari ketiga minggu pertama PMGC 2020 dilanjutkan hari ini, Bigetron RA masih berada di puncak klasemen.</p>\r\n\r\n<p>Setelah sempat tertunda beberapa waktu lamanya, babak Super Weekend PMGC 2020 hari ketiga di minggu yang pertama dilanjutkan pada hari Jumat ini.</p>\r\n\r\n<h2>Bigetron RA di puncak klasemen Super Weekend PMGC 2020</h2>\r\n\r\n<p><img alt=\"bigetron-ra-puncak-klasemen\" src=\"https://media-assets-ggwp.s3.ap-southeast-1.amazonaws.com/2020/12/Screen-Shot-2020-12-04-at-21.46.28.png\" style=\"height:347px; width:617px\" /></p>\r\n\r\n<p>Pada hari pamungkas di minggu pertama Super Weekend PMGC 2020, Bigetron RA mampu berada di posisi puncak.</p>\r\n\r\n<p>Mereka bahkan mampu membuka match pertama dengan meraih WWCD mereka di hari ini, secara keseluruhan BTR Ryzen menjadi bintang Bigetron RA pada hari ini dengan banyaknya kill yang dia lakukan.</p>\r\n\r\n<p>Sementara itu permainan Aerowolf sendiri masih terlihat belum memuaskan, penampilan terbaik mereka berada pada match ke 4 di mana mereka mampu meraih posisi top 5.</p>\r\n\r\n<p>Babak Super Weekend Week 1 Day 3 PMGC 2020 yang sempat ditunda kini resmi dilanjutkan mulai hari ini, Aerowolf Limax masih bermain.</p>\r\n\r\n<p><img src=\"https://media-assets-ggwp.s3.ap-southeast-1.amazonaws.com/2020/12/super-weekend-w1-day-3-300x169.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Yang menarik pada hari ini RRQ Athena mampu memaksa dan menyalip tim Four Angry Men ke posisi 2.</p>\r\n\r\n<p>RRQ Athena berhasil memanfaatkan momentum di mana pada hari ini Four Angry Men bermain dengan kurang maksimal.</p>\r\n\r\n<h2>Posisi klasemen</h2>\r\n\r\n<p><img alt=\"bigetron-ra-puncak-klasemen\" src=\"https://media-assets-ggwp.s3.ap-southeast-1.amazonaws.com/2020/12/Screen-Shot-2020-12-04-at-21.46.35.png\" style=\"height:340px; width:627px\" /></p>\r\n\r\n<p>Dengan permainan yang bagus serta konsisten, Bigetron RA mampu bertahan di posisi puncak klasemen Super Weekend PMGC 2020.</p>\r\n\r\n<p>Sementara RRQ Athena yang berhasil memanfaatkan penurunan performa dari Four Angry Men mampu menyalip posisi 2.</p>\r\n\r\n<p>Di luar dugaan Four Angry Men justru harus turun dua tingkat ke posisi 4, di mana posisi ketiga diisi oleh Klas Digital Athletics.</p>\r\n\r\n<p>Satu tim lainnya yang juga tidak disangka turun cukup signifikan adalah Nova XQF yang berada di posisi 9.</p>\r\n\r\n<p>Sedangkan Aerowolf Limax harus berjuang masuk ke Super Weekend minggu ketiga karena saat ini mereka hanya menempati posisi 12 klasemen sementara.</p>\r\n\r\n<p>Mau jadi atlet esports, tapi gak punya tim? Bingung cari turnamen esports buat diikutin? Santuy lur, GGWP.ID punya platform turnamen di GGWP.ID/tournament. Di sini, kamu bisa mencari teman untuk buat tim, buat turnamenmu sendiri, dan juga daftar turnamen buat mengasah skill plus menang hadiah! Yuk daftarin diri kamu di sini, GRATIS slur!</p>\r\n', 'admin', 'PUBG Mobile', '0000-00-00', 'bigetron-ra-puncak-klasemen-640x360.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `career`
--

CREATE TABLE `career` (
  `id_career` int(11) NOT NULL,
  `judul_career` text NOT NULL,
  `deskripsi_career` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `games`
--

CREATE TABLE `games` (
  `no` int(11) NOT NULL,
  `nama_games` varchar(256) NOT NULL,
  `divisi_games` varchar(256) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `games`
--

INSERT INTO `games` (`no`, `nama_games`, `divisi_games`, `gambar`) VALUES
(1, 'Arena Of Valer', 'Arena-Of-Valer', 'aov1.png'),
(2, 'COD Mobile', 'Call-Of-Duty-Mobile', 'codm1.png'),
(3, 'CS: GO', 'CS-GO', 'csgo1.png'),
(4, 'Free Fire', 'Free-Fire', 'freefire1.png'),
(5, 'Mobile Legends', 'Mobile-Legends', 'mlbb1.png'),
(6, 'PUBG Mobile', 'PUBG-Mobile', 'pubgm1.png'),
(7, 'Valorant', 'Valorant', 'valorant1.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `partner`
--

CREATE TABLE `partner` (
  `id_partner` int(11) NOT NULL,
  `nama_partner` text NOT NULL,
  `instagram` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `player`
--

CREATE TABLE `player` (
  `id_player` int(11) NOT NULL,
  `nama_player` varchar(256) NOT NULL,
  `instagram` varchar(256) NOT NULL,
  `role` varchar(100) NOT NULL,
  `nickname` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `team`
--

CREATE TABLE `team` (
  `id_team` int(11) NOT NULL,
  `nama_team` varchar(256) NOT NULL,
  `instagram` varchar(256) NOT NULL,
  `logo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tournament`
--

CREATE TABLE `tournament` (
  `id_tourney` int(11) NOT NULL,
  `nama_tourney` varchar(256) NOT NULL,
  `oleh` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `biaya` int(11) NOT NULL,
  `event` date NOT NULL,
  `gambar` text NOT NULL,
  `slot` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `hadiah` int(11) NOT NULL,
  `tipe` enum('Online','Offline') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tournament`
--

INSERT INTO `tournament` (`id_tourney`, `nama_tourney`, `oleh`, `instagram`, `biaya`, `event`, `gambar`, `slot`, `deskripsi`, `hadiah`, `tipe`) VALUES
(1, 'FORSETI FOREVER⁣ Mlbb Online Tournament', 'forse.ti⁣', 'forse.ti', 30000, '2020-12-05', 'AhipIq43.jpg', 128, '<p>FORSETI FOREVER⁣<br />\r\nMlbb Online Tournament⁣<br />\r\n.⁣<br />\r\n&ndash; Detail Turnamen :⁣<br />\r\nMatch Day : 5-6 Desember 2020⁣<br />\r\nPendaftaran akan ditutup tanggal 4 Desember 2020 pukul 19.00 WIB⁣<br />\r\nTM tanggal 4 Desember 2020, Jam 21.00 WIB via Grup WA⁣<br />\r\nBiaya pendaftaran IDR 30.000,- / Team⁣<br />\r\nVenue : Online⁣<br />\r\nOpen 100++ Slot⁣<br />\r\nMulti Slot On⁣<br />\r\n1 Team Max 2slot⁣<br />\r\nSkin Bebas⁣<br />\r\nAll Tier/Rank⁣<br />\r\nCostum Draft Pick Mode⁣<br />\r\nSingle Elimination BO1 Semi Finals BO3 Grand Final BO3⁣<br />\r\n.⁣<br />\r\n&ndash; Hadiah :⁣<br />\r\nJuara 1 : Rp. 1.500.000,-⁣<br />\r\nJuara 2 : Rp. 1.000.000,- ⁣<br />\r\nJuara 3 : Rp. 500.000,-⁣<br />\r\n⁣<br />\r\n*Hadiah bisa berubah sesuai dengan jumlah peserta⁣<br />\r\n.⁣<br />\r\n&ndash; Pendaftaran :⁣<br />\r\nPembayaran melalui :⁣<br />\r\nBCA 586 5281657 a.n Fatin rahimatun rashidah⁣<br />\r\nDana 087814557149⁣<br />\r\nGopay 087814557149 (+5k khusus gopay)⁣<br />\r\n*Harap cantumkan note nama team saat pembayaran⁣<br />\r\n*Bukti transfer harap dikirimkan ke Contact Person yang telah tersedia⁣<br />\r\n.⁣<br />\r\n&ndash; Contact Person :⁣<br />\r\nWA : 087867001156⁣<br />\r\n087814557149⁣<br />\r\n@forse.ti⁣</p>\r\n', 3000000, 'Online'),
(2, 'Impreuna E_sport – Open Tournament Season Perdana⁣', 'Impreuna E_sport', 'Impreuna E_sport', 30000, '2020-12-28', 'banner.jpg', 64, '<p><br />\r\nImpreuna E_sport &ndash; Open Tournament Season Perdana⁣<br />\r\nOpen Regis : Sekarang sampai 26 December 22.00 WIB⁣<br />\r\nTM Tanggal 27 Desember Via Grup Wa⁣<br />\r\nMatch Day 28,29,30 Dec⁣<br />\r\nRegistration Fee = 30.000,-/Slot⁣<br />\r\nVenue : Online⁣<br />\r\nMulti Slot On⁣<br />\r\nMulti Winner On⁣<br />\r\nSkin bebas⁣<br />\r\nAll tier/rank⁣<br />\r\nLive di youtube &ldquo;Impreuna Family&rdquo;⁣<br />\r\nCustom Draft pick Mode⁣<br />\r\nKualifikasi bo1⁣<br />\r\nSemi Final &ndash; Grand Final BO3⁣<br />\r\nHadiah⁣<br />\r\nJuara 1 : Rp 700.000 + E-Certificate⁣<br />\r\nJuara 2 : Rp 500.000+ E-Certificate⁣<br />\r\nJuara 3 : Rp 300.000 + E-Certificate⁣<br />\r\n4-8th = E-Certificate⁣<br />\r\n(*Hadiah menyesuaikan slot )⁣<br />\r\nPembayaran bisa melalui transfer ke⁣<br />\r\n1. BCA⁣<br />\r\n2. Gopay/Ovo/Dana ⁣<br />\r\n3: Pulsa + 10k⁣<br />\r\nbukti transfer harap di Konfirmasi ke kontak person tersedia⁣<br />\r\n⁣<br />\r\nIG : @Impreuna_esport⁣<br />\r\nWa : 0857-9790-7507</p>\r\n', 1500000, 'Online'),
(3, 'Funtastic E-Sport', 'Funtastic E-Sport', 'Funtastic E-Sport', 20000, '2020-12-20', '2_PERSIAPAN_-_Membuat_Sistem_Login_Lengkap_dengan_CODEIGNITER_3_mp4_snapshot_25_59_9152.jpg', 28, '<p>Ku Daftar!!</p>\r\n', 1000000, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','member') NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `role`, `is_active`) VALUES
(1, 'fahal', 'fahal', 'admin', 1),
(2, 'admin', 'admin', 'admin', 1),
(3, 'fahalf', 'fahalf', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indeks untuk tabel `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`id_career`);

--
-- Indeks untuk tabel `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id_partner`);

--
-- Indeks untuk tabel `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`id_player`);

--
-- Indeks untuk tabel `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id_team`);

--
-- Indeks untuk tabel `tournament`
--
ALTER TABLE `tournament`
  ADD PRIMARY KEY (`id_tourney`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `career`
--
ALTER TABLE `career`
  MODIFY `id_career` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `games`
--
ALTER TABLE `games`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `partner`
--
ALTER TABLE `partner`
  MODIFY `id_partner` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `player`
--
ALTER TABLE `player`
  MODIFY `id_player` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `team`
--
ALTER TABLE `team`
  MODIFY `id_team` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tournament`
--
ALTER TABLE `tournament`
  MODIFY `id_tourney` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
