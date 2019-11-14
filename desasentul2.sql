-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 30 Des 2014 pada 10.17
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `desasentul2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id_admin` int(100) unsigned NOT NULL,
  `nama_depan` varchar(50) NOT NULL,
  `nama_belakang` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_depan`, `nama_belakang`, `username`, `email`, `password`) VALUES
(1, 'Supriyo', 'Handoko', 'supriyo', 'supriyo@gmail.com', 'bismillah'),
(2, 'Agus', 'Harianto', 'ahri', 'ahri@gmail.com', 'fjkfjgkfkjgfkklll'),
(3, 'andi', 'artanto', 'anto', 'anto@gmail.com', 'bismillah'),
(4, 'Admin', 'Admin', 'admin', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku_induk`
--

CREATE TABLE IF NOT EXISTS `buku_induk` (
`id_buku` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nik` int(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `shdk` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `pendidikan_terakhir` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `nama_ibu` varchar(255) NOT NULL,
  `nama_ayah` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `buku_induk`
--

INSERT INTO `buku_induk` (`id_buku`, `nama`, `nik`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `shdk`, `agama`, `pendidikan_terakhir`, `pekerjaan`, `nama_ibu`, `nama_ayah`) VALUES
(4, 'SUYATNO', 2147483647, 'dsd', '1981-02-28', 'L', 'Kepala Keluarga', 'Islam', 'SMA', 'dkss', 'SUPINI', 'SAREHAN'),
(6, 'Atik Yulianan', 2147483647, 'SURABAYA', '1981-12-07', 'P', 'Istri', 'Islam', 'D3', 'MENGURUS RUMAH TANGGA', 'NINIK HARIANI', 'SUGENG'),
(7, 'ATHA ARIFATUL NASYWAN G', 2147483647, 'JOMBANG', '2009-06-02', 'L', 'Anak', 'Islam', 'Lainnya', 'BELUM/TIDAK BEKERJA', 'ATIK YULIANAN', 'SUYATNO');

-- --------------------------------------------------------

--
-- Struktur dari tabel `download`
--

CREATE TABLE IF NOT EXISTS `download` (
`id_download` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `download` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `download`
--

INSERT INTO `download` (`id_download`, `keterangan`, `download`) VALUES
(8, 'Dokumen Susunan Organisasi', 'https://www.dropbox.com/s/3kvsebbwjpq2mnl/SUSUNAN%20ORANISASI%20PEMERINTAH%20DESA.doc?dl=0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galery`
--

CREATE TABLE IF NOT EXISTS `galery` (
`id_galery` int(100) NOT NULL,
  `keterangan_galery` text NOT NULL,
  `gambar_galery` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `galery`
--

INSERT INTO `galery` (`id_galery`, `keterangan_galery`, `gambar_galery`) VALUES
(2, 'Peternakan sapi di daerah desa Sentul', 'Peternakan Sapi.JPG'),
(4, 'Persawahan', '220x95.gif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `halaman`
--

CREATE TABLE IF NOT EXISTS `halaman` (
`id_halaman` int(100) NOT NULL,
  `judul_halaman` varchar(200) NOT NULL,
  `isi` text NOT NULL,
  `gambar_halaman` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `halaman`
--

INSERT INTO `halaman` (`id_halaman`, `judul_halaman`, `isi`, `gambar_halaman`) VALUES
(2, 'Gambaran Desa', '<b>GAMBARAN  UMUM  DESA</b>\r\n<br>Untuk mengetahui gambaran secara umum Desa Sentul Kecamatan Tembelang Kabupaten  Jombang  untuk  kondisi  Tahun  2014 adalah sebagai berikut  : <br><br>KONDISI GEOGRAFIS &nbsp;<br>Secara  Geografis <br>Desa : Sentul <br>Kecamatan 	                    : Tembelang\r\n<br>Kabupaten 		          :  Jombang <br>terdiri dari : 2 ( Dua   ) Dusun,   yaitu :\r\n<br><ol><li>Dusun 			: Sentul Timur&nbsp;</li><li>Dusun 			: Sentul Barat Desa  Sentul,  dengan batas-batas  : &nbsp;</li></ol>Batas   Desa	Desa/Kelurahan	Kecamatan :<br>&nbsp;<br><ol><li>Sebelah Utara : Bedah Lawak/Tembelang</li><li>&nbsp;Sebelah Timur :&nbsp;Pulorejo/Tembelang</li><li>&nbsp;Sebelah Selatan :&nbsp;Kedungrejo/Tembelang</li><li>&nbsp;Sebelah Barat :&nbsp;Megaluh/Tembelang</li></ol>&nbsp;dengan   :\r\n<br>&nbsp;a.	Kode  Administrasi Desa 	:  415.58.15&nbsp;<br>&nbsp;b. Luas  Pemukiman 		:   54,40 Ha\r\n<br>&nbsp;c.	Luas  Tanah  Sawah		:    205 Ha\r\n<br>&nbsp;d.	Luas Tanah  Kas  Desa    :  ..............  Ha<br>', 'maps.jpg'),
(3, 'Biografi Kepala Desa', '<b>Sugyono</b> yang akrab dengan panggilan “Kades” yang lahir pada tanggal 20 Agustus 1969 adalah seorang Kepala Desa Sentul Kecamatan Tembelang Kabupaten Jombang. Beliau memulai menjadi seorang Kepala Desa  pada tahun 2014 hingga 2019, beliau adalah seorang pemimpin yang sangat tegas dan cepat tanggap dalam  menyikapi dan menyelsaikan berbagai permasalahan baik dilingkungan kepemerintahan ataupun dilingkungan masyarakat.\r\n\r\n<br><br>Selama menjabat sebagai Kepala Desa, beliau banyak menyumbangkan tenaga dan pikiran untuk kemajuan masyarakat Desa Nengkelan, dan bahkan terkadang  waktu dan tempat tak menjadi halangan dalam melaksanakan tugas dan tanggung jawabnya sebagai seorang pemimpin.', 'lurah_lagi.jpg'),
(4, 'Struktural Organisasi', '', 'struktural2.jpg'),
(5, 'Visi dan Misi', 'Berikut ini adalah Visi dan Misi Desa Sentul<br><br><h4><b>Visi Pemerintah Desa Sentul</b>&nbsp;</h4><div>“MEWUJUDKAN MASYARAKAT YANG DAMAI, SEJAHTERA, INDAH,AMAN, SENTOSA, TERTIB, RUKUN DAN LESTARI”&nbsp;<br><br></div><h4><b>Misi Pemerintah Desa Sentul&nbsp;</b></h4><ol><li>Membangun Masyarakat yang agamis dan Agraris\r\n</li><li>Mengembangkan dan membangunsistem pemerintahan desa yang professional, efektif, bersih serta berorientasi pada pelayanan public.\r\n</li><li>Membangun infrastruktur perdesaan untuk industrialisasi pertanian.\r\n</li><li>Mengembangkan dan membangun system pendidikan yang berbasis kompetensi.\r\n</li><li>Mengembangkan pelayanan kebutuhan dasar masyarakat seperti pendidikan, kesehatan,dan tempat tinggal.\r\n</li><li>Mengembangkan potensi desa sebagai potensi unggulan disemua bidang.\r\n</li><li>Menanggulangi kemiskinan dengan peningkatan ketrampilan dan pengembangan pertanian, industry kecil dan perdagangan serta peningkatan peran koperasi dalam pemberdayaan ekonomi kerakyatan dan dalam upaya menciptakan lapangan pekerjaan.</li><li>Membangun dan menodorong usaha-usaha untuk optimalisasi sector pertanian, perkebunan,peternakan,perikanan dan kehutanan, baik tahap produksinya maupun pengolahan hasilnya.</li></ol>', 'visi_misi.png'),
(6, 'Keadaan Ekonomi', 'Kondisi perekonomian di Desa Sentul Kecamatan Tembelang Kabupaten Jombang  pada tahun 2011 adalah didominasi pada sektor pertanian  sebesar   45 %, dan sektor lain diantarannya perdagangan, Wiraswasta, PNS/ABRI/POLRI dan Pensiunan  sebesar 55 %.', 'ekonomi2.jpg'),
(7, 'Keadaan Demografis', 'Jumlah Penduduk Desa Sentul  Kecamatan Tembelang Kabupaten Jombang  sampai dengan akhir Agustus  2012 :<br><ul><li>Laki  -  laki 					:  2219  	orang&nbsp;</li><li>Perempuan 					:  2289   	orang&nbsp;</li><li>Jumlah 						:  4508   	orang&nbsp;</li></ul><b>TINGKAT&nbsp; USIA</b>\r\n<br><ul><li><span>Usia dibawah 5 tahun&nbsp;: 223 orang&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></li><li>orang\r\n\r\n<span>-&nbsp;Usia&nbsp;\r\n5&nbsp; - 12 tahun&nbsp;: 427 orang&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></li><li>orang\r\n\r\n<span>-&nbsp;Usia 13 - 18 tahun&nbsp;: 693 orang&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></li><li>orang\r\n\r\n<span>-&nbsp;Usia 19 - 50 tahun&nbsp;&nbsp;2329 orang&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></li><li>orang\r\n\r\n<span>-&nbsp; Usia diatas 50 tahun&nbsp;: 836&nbsp;orang&nbsp;</span></li></ul><b>TINGKAT PENDIDIKAN <br></b><ul><li>Pendidikan Prasekolah Play Group/TK/RA&nbsp;:149&nbsp;orang</li><li>Pendidikan Dasar tingkat\r\nSD/SMP/MTS :2255&nbsp;orang&nbsp;</li><li>Pendidikan Lanjutan&nbsp; Tingkat SLTA&nbsp;:564&nbsp;orang&nbsp;</li><li>Pendidikan Perguruan Tinggi :115 orang</li><li>Droup Out :15&nbsp;orang</li><li>Tidak&nbsp; sekolah/buta huruf&nbsp;:8&nbsp;orang</li></ul><b><br>TINGKAT&nbsp; PEKERJAAN</b>\r\n<br><ul><li>Buruh Tani&nbsp;: 832&nbsp;orang</li><li>Petani&nbsp;: 559&nbsp;orang&nbsp;</li><li>Wiraswasta&nbsp;: 2896&nbsp;orang&nbsp;</li><li>PNS : 92 orang&nbsp;</li><li>TNI/POLRI : 26 orang&nbsp;</li><li>Pensiunan : 21 orang</li></ul><b>TINGKAT KEAGAMAAN</b>&nbsp;<br><ul><li>Pemeluk&nbsp;\r\nAgama Islam &nbsp;: 4459 orang&nbsp;</li><li>Pemeluk&nbsp;\r\nAgama Kisten : 13 orang</li><li>Pemeluk&nbsp;\r\nAgama Protestan : ... orang &nbsp;&nbsp;</li><li>Pemeluk&nbsp;\r\nAgama Hindu : ... orang&nbsp;</li><li>Pemeluk&nbsp;\r\nAgama Budha &nbsp;: ... orang</li></ul>', 'DEMOGRAFI.jpg'),
(8, 'Potensi Desa', '<b>Potensi desa dapat\r\nterbagi dalam dua macam yaitu :</b>\r\n\r\n<br><span><span><br>1.&nbsp;</span>Potensi Fisik</span>\r\n\r\n<ol>\r\n <li>Tanah,\r\n     tanah di desa sentul yang memiliki kesuburan yang lumayan membangakan.\r\n     Dikarenakan sebagian besar warganya adalah petani maka, tanah adalah\r\n     sumber daya utama yang dimiliki desa kami</li>\r\n <li>Air,\r\n     pengairan desa sentul yang bisa dibilang memadahi, hamper tidak pernah ada\r\n     ataupun terjadi kekeringan di desa kami</li>\r\n <li>Ternak berfungsi sebagai sumber tenaga dan sumber\r\n     gizi bagi masyarakat pedesaan.pada desa agraris, ternak juga dapat menjadi\r\n     investasi dan sumber pupuk.</li>\r\n <li>Manusia merupakan sumber tenaga dalam proses\r\n     pengolahan lahan petani, sehingga manusia sebagai potensi yang sangat\r\n     berharga bagi suatu wilayah untuk mengelolah sumber daya alam yang ada.</li>\r\n</ol>\r\n\r\n2.&nbsp;Potensi Nonfisik\r\n\r\n<br><ol><li>Masyarakat desa cirinya memiliki semangat\r\nkegotongroyongan yang tinggi dalam &nbsp;ikatan kekeluargaan yang erat&nbsp; merupakan landasan yang kokoh bagi\r\nkelangsungan program pembangunan.&nbsp;</li><li>Lembag-lembaga sosial,pendidikan,serta\r\norganisasi sosial desa.Lembaga-lembaga tersebut banyak memberikan pembinaan dan\r\narah bagi perkembangan dan pelaksanaan pembangunan desa dalam meningkatkan\r\ntaraf hidup warganya.lembaga-lembaga sosial yang terdapat di desa,antara lain\r\nyaitu lembaga: Pemerintahan, seperti Badan Perwakilan Desa (BPD), Lembaga\r\nPemberdayaan Masyarakat Desa (LPMD), Remaja Masjid (Remas), .</li><li>Pendidikan, seperti penyuluhan, simulasi,dan\r\nlain-lain.&nbsp;</li><li>Kesehatan, seperti\r\nposyandu.&nbsp;</li><li>Ekonomi, seperti Koperasi\r\nUnit Desa (KUD) dan lumbung desa.</li></ol>', 'potensi.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `post`
--

CREATE TABLE IF NOT EXISTS `post` (
`id_post` int(100) NOT NULL,
  `judul_post` varchar(100) NOT NULL,
  `post` text NOT NULL,
  `tanggal_post` date NOT NULL,
  `gambar_post` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `post`
--

INSERT INTO `post` (`id_post`, `judul_post`, `post`, `tanggal_post`, `gambar_post`) VALUES
(2, 'Jalan Desa Diaspal, Warga Pesta Rakyat ', 'Jombang-(satujurnal.com) Ribuan warga Desa Sentul, Kecamatan Tembelang, Kabupaten Jombang menggelar pesta rakyat menandai selesainya pembangunan jalan desa sepanjang satu kilometer. Pesta yang sebagai bentuk rasa syukur karena jalan yang memperlancar akses dan perekonomian warga kini beraspal. http://www.satujurnal.com/2013/01/jalan-desa-diaspal-warga-desa-pesta.html\r\n', '2014-12-27', 'aspal.jpg'),
(11, 'GROPYOKAN TIKUS DI DESA SENTUL TEMBELANG', 'Di desa Sentul setiap turun tanam dilakukan gerakan gropyokan tikus secara rutin yang dilakukan oleh seluruh petani (Gapoktan dan Poktan) yang didampingi oleh Petugas Pertanian Kecamatan dan POPT.&nbsp;Gerakan gropyokan dilakukan swadaya oleh petani dengan dana sebesar 17-25 Juta yang diperoleh dari iuran petani.<br>Adapun teknis kegiatan dilakukan dengan :<br>1.&nbsp;&nbsp; &nbsp;Pemberantasan tikus secara massal dengan memukul tikus (manual).<br>2.&nbsp;&nbsp; &nbsp;Pemberantasan tikus dengan alat emposan (mekanik).<br>3.&nbsp;&nbsp; &nbsp;Pemberantasan tikus dengan umpan.<br>4.&nbsp;&nbsp; &nbsp;Pembelian tikus buruan per ekor Rp.500<br>', '2014-12-29', 'tikus2.jpg'),
(12, 'Sedekah Desa', 'Sedekah bumi adalah suatu pesta dan perayaan guna memeringati jin penjaga desa (mbahu rekso, jawa) untuk mengharapkan kebahagiaan dan keselamatan, dan kadang terdapat hal-hal yang mungkar. Perayaan tersebut dinamakan sedekah bumi yang biasa dikerjakan penduduk desa (kampung), karena telah menjadi adat kebiasaan sejak dahulu kala.', '2014-12-30', 'ahem.jpg'),
(13, 'Takbir Keliling', 'Menyambut datangnya Hari Raya Desa sentul&nbsp;mengadakan Takbir keliling secara meriah. Acara ini diadakan dan dimulai di Balai desa sentul. Selanjutnya berkeliling hingga kembali lagi desa sentul<br><a target="" rel=""></a>Peserta takbir keliling diikuti oleh seluruh wrga , baik SD,SMP,SMA,bahkan ibu-ibu dan apak-baak&nbsp;dll. Suasana yang sangat ramai hingga membuat arus kendaraan macet total hingga acara selesai. Nah berikut secuplik peserta yang telah saya abadikan gambarnya', '2014-12-30', 'takbir.jpg'),
(14, 'Tahun Baru', '<div>Malam tahun baru 2012 di desa sentul. Malam pergantian tahun kali ini desa sentul memeriahkan dengan menampilkan kesenian ketoprak KRIDHO MUDHO&nbsp; SONDHONG MAJERUK.<br><br></div><div>Malam tahun baru yang di adakan di desa ini menghibur warga sendang agung jeruk yang bertempat di Punden jeruk.&nbsp; Hiburan ini cukup meriah di tonton warga dusun jeruk ini, ada juga dari luar dusun jeruk&nbsp; yang mampir untuk melihat atau menonto ketoprak jeruk ini.</div><div>Dagelam Gimbur/ Jordan ini membuat Warga Dsn. Jeruk ini tertawa lebar melihan kekonyolan dagelan ini yang masih duduk di kelas 2 SMP, mempunyai badan besar dan gemuk gimbur-gimbur ini membuat tertawa&nbsp; terbahak-bahak.</div><div><br></div>', '2014-12-30', 'tahunbaru.JPG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
`id_slide` int(11) NOT NULL,
  `judul_slide` varchar(50) NOT NULL,
  `gambar_slide` varchar(255) NOT NULL,
  `pesan_slide` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `slider`
--

INSERT INTO `slider` (`id_slide`, `judul_slide`, `gambar_slide`, `pesan_slide`) VALUES
(7, 'Welcome', 'logo7.jpg', 'Selamat datang di Kota Jombang'),
(8, 'Gapura Desa', 'gapura12.jpg', 'Gapura masuk balai desa sentul'),
(9, 'Potensi desa', 'jaranan11.jpg', 'Seni Jaranan Wak Agung adalah salah satu dari potensi kesenian desa sentul'),
(10, 'Sedekah Desa', 'kegiatan1.jpg', 'Acara Sedekah desa sebagai acara wujud terimakasih kepada tuhan atas berkahnya'),
(12, 'LOMBA', 'berita4.jpg', 'Lomba agustusan di desa sentul');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `buku_induk`
--
ALTER TABLE `buku_induk`
 ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
 ADD PRIMARY KEY (`id_download`);

--
-- Indexes for table `galery`
--
ALTER TABLE `galery`
 ADD PRIMARY KEY (`id_galery`);

--
-- Indexes for table `halaman`
--
ALTER TABLE `halaman`
 ADD PRIMARY KEY (`id_halaman`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
 ADD PRIMARY KEY (`id_post`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
 ADD PRIMARY KEY (`id_slide`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id_admin` int(100) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `buku_induk`
--
ALTER TABLE `buku_induk`
MODIFY `id_buku` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `download`
--
ALTER TABLE `download`
MODIFY `id_download` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `galery`
--
ALTER TABLE `galery`
MODIFY `id_galery` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `halaman`
--
ALTER TABLE `halaman`
MODIFY `id_halaman` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
MODIFY `id_post` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
MODIFY `id_slide` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
