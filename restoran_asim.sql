-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 03 Ara 2017, 12:00:13
-- Sunucu sürümü: 5.7.17-log
-- PHP Sürümü: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `restoran_asim`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `dosya_klasor_bilgiler`
--

CREATE TABLE IF NOT EXISTS `dosya_klasor_bilgiler` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dosya_ismi` varchar(75) COLLATE utf8_turkish_ci NOT NULL,
  `dosya_aciklama` text COLLATE utf8_turkish_ci NOT NULL,
  `dosya_yuklenme_tarihi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `yukleyen_kullanici` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `dosya_boyutu` double NOT NULL,
  `yukleyen_birim` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=214 ;

--
-- Tablo döküm verisi `dosya_klasor_bilgiler`
--

INSERT INTO `dosya_klasor_bilgiler` (`id`, `dosya_ismi`, `dosya_aciklama`, `dosya_yuklenme_tarihi`, `yukleyen_kullanici`, `dosya_boyutu`, `yukleyen_birim`) VALUES
(209, 'sercan-goger SecretCV.pdf', '', '23.08.2016 12:01:27', 'sercan', 38429, 'meclis'),
(210, 'Kariyer CV.pdf', 'iş sürecini tanımlamak ona gore bilgi sahibi olmak amacı ile', '23.08.2016 12:02:02', 'sercan', 186889, 'meclis'),
(211, '4.jpg', 'programlama üzerine taslak çalışması', '23.08.2016 12:03:05', 'sercan', 220860, 'encumen'),
(212, 'jQuery_Cookbook 61.pdf', 'kıymetlı evraklardan birisi 2 no lu ada parsel calisma bilgisi', '23.08.2016 12:04:12', 'sercan', 5951960, 'evlendirme'),
(213, 'tablo bilgisi.pptx', '', '23.08.2016 12:07:13', 'sercan', 0, 'evrak-kayit');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `girenler`
--

CREATE TABLE IF NOT EXISTS `girenler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(225) NOT NULL,
  `tarih` varchar(225) NOT NULL,
  `adi` varchar(225) NOT NULL,
  `sifre` varchar(255) NOT NULL,
  `durum` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=38 ;

--
-- Tablo döküm verisi `girenler`
--

INSERT INTO `girenler` (`id`, `ip`, `tarih`, `adi`, `sifre`, `durum`) VALUES
(2, '', '29.08.16', 'Asım Gür', '123456', 0),
(3, '', '29.08.16', 'Asım Gürlük', '123', 0),
(4, '', '29.08.16', 'Asım Gürlü', '123456', 0),
(5, '88.238.84.47', '29.08.16', 'Asım Gürlü', '123456', 0),
(11, '176.54.97.76', '1472503942', 'Asim gürlük', '123456', 0),
(12, '88.238.84.47', '1472556058', 'asimgurluk@asimgurluk.com', '123456', 1),
(13, '88.234.249.221', '2016-08-31', 'asim gürlük', '123456', 0),
(14, '88.234.249.221', '2016-08-31', 'asım gürlük', '123456', 0),
(15, '88.234.249.221', '2016-08-31', 'asimgurluk@asimgurluk.com', '123456', 1),
(16, '88.238.84.47', '2016-08-31', 'asimgurluk@asimgurluk.com', '123456', 1),
(17, '88.238.84.47', '2016-08-31', 'mehmet@asimgurluk.com', '123456', 0),
(18, '88.238.84.47', '2016-08-31', 'mehmet@asimgurluk.com', '123', 0),
(19, '88.238.84.47', '2016-08-31', 'mehmet2@asimgurluk.com', '123456', 1),
(20, '88.238.84.47', '2016-08-31', 'mehmet2@asimgurluk.com', '123456', 1),
(21, '88.238.84.47', '2016-08-31', 'asimgurluk@asimgurluk.com', '123456', 1),
(22, '88.238.84.47', '2016-08-31', 'mehmet2@asimgurluk.com', '123456', 1),
(23, '88.238.84.47', '2016-08-31', 'asimgurluk@asimgurluk.com', '123456', 1),
(24, '88.234.249.221', '2016-08-31', 'asimgurluk@asimgurluk.com', '123456', 1),
(25, '85.102.48.83', '2016-09-01', 'asimgurluk@asimgurluk.com', '123456', 1),
(26, '85.102.252.20', '2016-09-08', 'asimgurluk@asimgurluk.com', '123456', 1),
(27, '88.238.84.47', '2016-09-09', 'asimgurluk@asimgurluk.com', '123456', 1),
(28, '88.238.84.47', '2016-09-09', 'asimgurluk@asimgurluk.com', '123456', 1),
(29, '88.238.84.47', '2016-09-09', 'asimgurluk@asimgurluk.com', '123456', 1),
(30, '88.238.84.47', '2016-09-09', 'asimgurluk@asimgurluk.com', '123456', 1),
(31, '88.238.84.47', '2016-09-09', 'asimgurluk@asimgurluk.com', '123456', 1),
(32, '78.164.60.12', '2016-09-10', 'asimgurluk@asimgurluk.com', '123456', 1),
(33, '::1', '2017-09-05', 'sercan', '1234', 0),
(34, '::1', '2017-09-05', 'sercan', '1234', 0),
(35, '::1', '2017-09-05', 'sercan', '1234', 0),
(36, '::1', '2017-09-05', 'Asım Gürlük', '123456', 0),
(37, '::1', '2017-09-05', 'asimgurluk@asimgurluk.com', '123456', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE IF NOT EXISTS `kullanici` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kadi` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `rutbe` int(11) NOT NULL,
  `parola` varchar(225) NOT NULL,
  `giris` varchar(225) NOT NULL,
  `cikis` varchar(225) NOT NULL,
  `kayit` varchar(225) NOT NULL,
  `durum` int(1) NOT NULL,
  `kisi` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`id`, `kadi`, `email`, `rutbe`, `parola`, `giris`, `cikis`, `kayit`, `durum`, `kisi`) VALUES
(4, 'sercan', 'sercan@asimgurluk.com', 1, '1234', '28.08.16-18:35', '29.08.16-9:13', '23.08.16', 0, ''),
(6, 'Asım Gürlük', 'asimgurluk@asimgurluk.com', 1, '123456', '05.09.17-15:37', '31.08.16-14:23', '23.08.16', 1, ''),
(9, 'mehmet2', 'mehmet2@asimgurluk.com', 0, '123456', '31.08.16-14:24', '31.08.16-14:34', '23.08.16', 1, ''),
(11, 'sercan2', 'sercan2@asimgurluk.com', 0, '123', '28.08.16-18:19', '28.08.16-18:22', '28.08.16', 1, '4');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `modul`
--

CREATE TABLE IF NOT EXISTS `modul` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mid` int(11) NOT NULL,
  `modul` varchar(225) NOT NULL,
  `link` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Tablo döküm verisi `modul`
--

INSERT INTO `modul` (`id`, `mid`, `modul`, `link`) VALUES
(1, 10, 'Randevu Sistemi', '../../Eklentiler/AJANDA/emlak_calendar.php'),
(2, 11, 'Meclis Bİrimi', 'yazi_isleri_meclis-birimi.php'),
(3, 12, 'Sekreterya Yönetimi', 'yazi_isleri_sekreterya-yonetimi-yazisleri.php'),
(4, 13, 'Encümen Birimi', 'yazi_isleri_encumen-birimi.php'),
(5, 14, 'Evlendirme Birimi', 'yazi_isleri_evlendirme-birimi.php'),
(6, 15, 'Arşiv Birimi', 'yazi_isleri_arsiv-birimi.php'),
(7, 16, 'Evrak Kayıt Birimi', 'yazi_isleri_evrak-kayit-birimi.php'),
(8, 17, 'Fotoğraf Yükle', 'yazi_isleri_fotograf_yukle.php'),
(9, 18, 'Özgeçmiş EKle', 'yazi_isleri_ozgecmis.php'),
(10, 19, 'Fotoğraflar', 'yazi_isleri_album.php'),
(11, 110, 'Rapor Oluştur', 'yazi_isleri_rapor-olustur.php'),
(12, 111, 'Anlık Mesajlaşma', 'yazi_isleri_chat_islemi.php'),
(13, 20, 'Randevu Sistemi', 'sahsi_yonetimi_ajanda/sahsi_calendar.php'),
(14, 21, 'Rehber', 'sahsi_yonetim_rehber.php'),
(15, 112, 'Özlük Bilgiler', 'Ozgecmis-Bilgileri.php'),
(16, 113, 'Performans Yönetimi', 'performans-yonetimi.php'),
(17, 114, 'Proje Yönetimi', 'proje-yonetimi.php');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ozgecmis`
--

CREATE TABLE IF NOT EXISTS `ozgecmis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adi` varchar(225) NOT NULL,
  `soyadi` varchar(225) NOT NULL,
  `unvan` varchar(225) NOT NULL,
  `ulke` varchar(225) NOT NULL,
  `sehir` varchar(225) NOT NULL,
  `ilce` varchar(225) NOT NULL,
  `semt` varchar(225) NOT NULL,
  `tel` varchar(225) NOT NULL,
  `tel2` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `cinsiyet` varchar(225) NOT NULL,
  `dtarihi` varchar(225) NOT NULL,
  `dyeri` varchar(225) NOT NULL,
  `askerlik` varchar(225) NOT NULL,
  `surucu` varchar(225) NOT NULL,
  `medeni` varchar(225) NOT NULL,
  `egitimseviyesi` varchar(225) NOT NULL,
  `universiteadi` varchar(225) NOT NULL,
  `usehir` varchar(225) NOT NULL,
  `fakulte` varchar(225) NOT NULL,
  `bolumadi` varchar(225) NOT NULL,
  `lise` varchar(225) NOT NULL,
  `ortaogretim` varchar(225) NOT NULL,
  `enot` text NOT NULL,
  `isdeneyim` text NOT NULL,
  `yetkinlikler` text NOT NULL,
  `projeler` text NOT NULL,
  `hobiler` text NOT NULL,
  `topluluklar` text NOT NULL,
  `kgrubu` varchar(225) NOT NULL,
  `sigara` varchar(225) NOT NULL,
  `statu` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Tablo döküm verisi `ozgecmis`
--

INSERT INTO `ozgecmis` (`id`, `adi`, `soyadi`, `unvan`, `ulke`, `sehir`, `ilce`, `semt`, `tel`, `tel2`, `email`, `cinsiyet`, `dtarihi`, `dyeri`, `askerlik`, `surucu`, `medeni`, `egitimseviyesi`, `universiteadi`, `usehir`, `fakulte`, `bolumadi`, `lise`, `ortaogretim`, `enot`, `isdeneyim`, `yetkinlikler`, `projeler`, `hobiler`, `topluluklar`, `kgrubu`, `sigara`, `statu`) VALUES
(4, 'mehmet', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Seçiniz', 'Seçiniz', ''),
(5, 'Asım', '', '', '', '', 'Fatih', '', '05327398025', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Seçiniz', 'Seçiniz', ''),
(6, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Seçiniz', 'Seçiniz', 'Meclis Birimi'),
(7, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(13, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(14, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ozgecmis_ekbilgiler`
--

CREATE TABLE IF NOT EXISTS `ozgecmis_ekbilgiler` (
  `Numara` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Hobiler` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Topluluklar` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `KanGrubu_id` int(10) NOT NULL,
  `Sigara_id` int(10) NOT NULL,
  PRIMARY KEY (`Numara`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=7 ;

--
-- Tablo döküm verisi `ozgecmis_ekbilgiler`
--

INSERT INTO `ozgecmis_ekbilgiler` (`Numara`, `Hobiler`, `Topluluklar`, `KanGrubu_id`, `Sigara_id`) VALUES
(1, 'Teknoloji hakkında bilgi', 'sol marjinal örgüt', 0, 1),
(5, 'çiçek böcek', 'kalpten gelen sevgi Derneğine üye', 2, 0),
(6, 'seksiyooletist', 'kevin duran', 2, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ozgecmis_projeler`
--

CREATE TABLE IF NOT EXISTS `ozgecmis_projeler` (
  `Numara` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `proje_bilgi` text NOT NULL,
  `Kullanici_id` int(10) NOT NULL,
  PRIMARY KEY (`Numara`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin5 AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `ozgecmis_projeler`
--

INSERT INTO `ozgecmis_projeler` (`Numara`, `proje_bilgi`, `Kullanici_id`) VALUES
(1, '<p>kefen yırt</p>', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ozgecmis_yetkinlikler`
--

CREATE TABLE IF NOT EXISTS `ozgecmis_yetkinlikler` (
  `Numara` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `yetkinlik_bilgi` text COLLATE utf8_turkish_ci NOT NULL,
  `Kullanici_id` int(10) NOT NULL,
  PRIMARY KEY (`Numara`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `ozgecmis_yetkinlikler`
--

INSERT INTO `ozgecmis_yetkinlikler` (`Numara`, `yetkinlik_bilgi`, `Kullanici_id`) VALUES
(1, '<p>say bakalım bunu say</p>', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personelin_olusturdugu_raporlar`
--

CREATE TABLE IF NOT EXISTS `personelin_olusturdugu_raporlar` (
  `rapor_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `olusturan_personel_id` int(10) NOT NULL,
  `raporlanan_veri` text COLLATE utf8_turkish_ci NOT NULL,
  `tarih_saat` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`rapor_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=19 ;

--
-- Tablo döküm verisi `personelin_olusturdugu_raporlar`
--

INSERT INTO `personelin_olusturdugu_raporlar` (`rapor_id`, `olusturan_personel_id`, `raporlanan_veri`, `tarih_saat`, `tarih`) VALUES
(6, 1, '<p>atam sağ olsaydın keşke</p>\r\n', '1470485595', '15/08/2016'),
(7, 1, '<p>sultanım hanım eve geldi</p>\r\n', '1470485636', '12/08/2016'),
(8, 1, '<p>şirket yapılanması i&ccedil;in yoneticilerle konuşulup anlaşma saglandı.</p>\r\n', '1470485656', '10/08/2016'),
(9, 1, '<p>elemanlara yıllık izinler hakkında bilgi verildi.</p>\r\n', '1470485674', '07/08/2016'),
(10, 1, '<p>ge&ccedil; gelen mehmet aslan uyarıldı.savunması alındı.</p>\n', '1470485695', '07/08/2016'),
(11, 1, '<p>KELİMELER KİFAYETSİZ KALIR</p>\r\n', '1470486930', '06/08/2016'),
(12, 1, '<p>nesin sen soyle sermisin</p>\r\n', '1470486946', '09/08/2016'),
(13, 1, '<p>keyifli işler bunlar</p>\r\n', '1470486967', '12/08/2016'),
(14, 1, '<p>meclis bombalanıyo</p>\r\n', '1470486979', '06/08/2016'),
(15, 1, '<p>halk sahib cıkıyo</p>\r\n', '1470486994', '06/08/2016'),
(16, 1, '<blockquote>\r\n<ul>\r\n	<li>bu d&uuml;nya kimmsye kalmaz yarab sen bizim i&ccedil;in hayırlı g&uuml;el olanı&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n</ul>\r\n\r\n<p><a href="https://www.youtube.com/watch?v=zBwA4O0DLDw">https://www.youtube.com/watch?v=zBwA4O0DLDw</a></p>\r\n\r\n<hr />\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n</blockquote>\r\n', '1470773883', '09/08/2016'),
(17, 1, '<p><strong><em><span style="font-size:22px">adeyo lala leyo</span></em></strong></p>\r\n\r\n<p><span style="font-size:22px"><strong><em>eyvallah</em></strong></span></p>\r\n', '1470774771', '09/08/2016'),
(18, 1, '<p>adam baslı araba ile ge&ccedil;iyo</p>\r\n', '1470821340', '10/08/2016');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sahsi_isler_ajanda`
--

CREATE TABLE IF NOT EXISTS `sahsi_isler_ajanda` (
  `id` double NOT NULL,
  `veri` varchar(255) NOT NULL,
  `tarih` text NOT NULL,
  `baslangicSaat` time NOT NULL,
  `bitisSaat` time NOT NULL,
  `renk` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `sahsi_isler_ajanda`
--

INSERT INTO `sahsi_isler_ajanda` (`id`, `veri`, `tarih`, `baslangicSaat`, `bitisSaat`, `renk`) VALUES
(1470692043089, 'fecr süresi', '2016-8-10', '03:00:00', '03:15:00', 'turuncu'),
(1470692073184, 'bi cehennem', '2016-8-12', '03:00:00', '03:15:00', 'pembe'),
(1470692092977, 'yetimin başını okşamıyorsunuz', '2016-8-12', '07:15:00', '07:30:00', ''),
(1470692092981, 'fakiri doyurmuyor', '2016-8-9', '06:15:00', '06:30:00', ''),
(1470692092982, 'birbirinize yardım etmiyorsunuz', '2016-8-14', '03:45:00', '04:00:00', 'turuncu'),
(1470692092983, 'yetim bakın', '2016-8-8', '01:15:00', '01:30:00', 'pembe'),
(1470692148151, 'eyyetü hen nefsül', '2016-7-5', '00:00:00', '00:30:00', 'pembe'),
(1471890998596, 'Konu: Ecümen toplantısı katılımcılar: başkan yrd.meclis üyeleri müdürler yer: başkanlık', '2016-8-23', '09:00:00', '10:00:00', 'turuncu'),
(1472062764711, 'Yeni Veri Girişi', '2016-8-25', '06:30:00', '06:45:00', ''),
(1472064181010, 'Yeni Veri Girişi', '2016-8-24', '08:30:00', '08:45:00', ''),
(1472064181014, 'Yeni Veri Girişi', '2016-8-26', '07:30:00', '07:45:00', ''),
(1472464048514, 'kalmaaz yaz', '2016-9-1', '06:45:00', '07:00:00', 'turuncu');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sahsi_isler_ajanda_gecici`
--

CREATE TABLE IF NOT EXISTS `sahsi_isler_ajanda_gecici` (
  `id` double NOT NULL,
  `veri` varchar(255) NOT NULL,
  `tarih` text NOT NULL,
  `baslangicSaat` time NOT NULL,
  `bitisSaat` time NOT NULL,
  `renk` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `sahsi_isler_ajanda_gecici`
--

INSERT INTO `sahsi_isler_ajanda_gecici` (`id`, `veri`, `tarih`, `baslangicSaat`, `bitisSaat`, `renk`) VALUES
(1470692043089, 'fecr süresi', '2016-8-10', '03:00:00', '03:15:00', 'turuncu'),
(1470692073184, 'bi cehennem', '2016-8-12', '03:00:00', '03:15:00', 'pembe'),
(1470692092977, 'yetimin başını okşamıyorsunuz', '2016-8-12', '07:15:00', '07:30:00', ''),
(1470692092981, 'fakiri doyurmuyor', '2016-8-9', '06:15:00', '06:30:00', ''),
(1470692092982, 'birbirinize yardım etmiyorsunuz', '2016-8-14', '03:45:00', '04:00:00', 'turuncu'),
(1470692092983, 'yetim bakın', '2016-8-8', '01:15:00', '01:30:00', 'pembe'),
(1470692148151, 'eyyetü hen nefsül', '2016-7-5', '00:00:00', '00:30:00', 'pembe'),
(1471890998596, 'Konu: Ecümen toplantısı katılımcılar: başkan yrd.meclis üyeleri müdürler yer: başkanlık', '2016-8-23', '09:00:00', '10:00:00', 'turuncu'),
(1472062764711, 'Yeni Veri Girişi', '2016-8-25', '06:30:00', '06:45:00', ''),
(1472464048514, 'kalmaaz yaz', '2016-9-1', '06:45:00', '07:00:00', 'turuncu');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sahsi_yonetim_rehber`
--

CREATE TABLE IF NOT EXISTS `sahsi_yonetim_rehber` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ad` varchar(50) NOT NULL,
  `soyad` varchar(50) NOT NULL,
  `adres` varchar(255) NOT NULL,
  `eposta` varchar(120) NOT NULL,
  `sehir` varchar(50) NOT NULL,
  `BilgiNotu` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin5 AUTO_INCREMENT=9 ;

--
-- Tablo döküm verisi `sahsi_yonetim_rehber`
--

INSERT INTO `sahsi_yonetim_rehber` (`id`, `ad`, `soyad`, `adres`, `eposta`, `sehir`, `BilgiNotu`) VALUES
(2, 'Sercan', 'Göger', 'turgut reis mahallaesi karaosmanoğlu caddes', 'sercan.goger@mynet.com', 'malatya', 'birlikte halledicem bu işi tek başıma                                                        '),
(3, 'Kader', 'Göger', 'Nişantaşı Mah.No:2 İstanbul', 'gul.goger@gmail.com', 'İstanbul - Beyoğlu', 'Canfeza dinleyen bi aşık                                             '),
(4, 'Ramazan', 'DUMAN', 'Karadeniz Mahallesi Cebeci 500 Evler', 'ramazan@mynet.com', 'Sinop-Gerze', 'nasıl olurda boyle birşeyin altında bunu yapmak istersiniz                                                        '),
(5, 'Emin', 'Demir', 'pınarbaşı sokakta no:2', 'emindemir@gmail.com', 'Kastamonu-Dep', 'emin iyi cocuk klüb usulü olan                                                        '),
(6, 'rihanna', 'drake', 'america new york city', 'rihanna@yahoo.com', 'new york', 'kendisi sanatçı olup melezliği ile meşhurdur.çok güzel hatun beya :):)                                                        '),
(7, 'EDAA', 'YERGOK', 'tekirdağ hastane karşısında', 'eda_yergok@hotmail.com', 'Edirne', 'kendisi otomobil satış bayiisinde çalışıyor                                                        '),
(8, 'Rukiye', 'KENT', 'manisa kırkağaçta', 'rukiyeKent@yahoo.com', 'Manisa', 'Kenidis memur olmak için bin dereden su getiriyo allah gönlüne göre versin.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sahsi_yonetim_sik_kullanilanlar`
--

CREATE TABLE IF NOT EXISTS `sahsi_yonetim_sik_kullanilanlar` (
  `num` int(10) NOT NULL AUTO_INCREMENT,
  `site_adi` varchar(100) NOT NULL,
  `site_url` varchar(150) NOT NULL,
  `ekleme_tarihi` varchar(100) NOT NULL,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin5 AUTO_INCREMENT=4 ;

--
-- Tablo döküm verisi `sahsi_yonetim_sik_kullanilanlar`
--

INSERT INTO `sahsi_yonetim_sik_kullanilanlar` (`num`, `site_adi`, `site_url`, `ekleme_tarihi`) VALUES
(1, 'Mynet Haber Sitesi', 'http://www.mynet.com', '1470813352'),
(2, 'Hürriyet Gazete', 'http://www.hurriyet.com.tr', '1470813388'),
(3, 'E-Devlet', 'http://www.turkiye.gov.tr', '1470819210');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yazi_isleri_ajanda`
--

CREATE TABLE IF NOT EXISTS `yazi_isleri_ajanda` (
  `id` double NOT NULL,
  `veri` varchar(255) NOT NULL,
  `tarih` date NOT NULL,
  `baslangicSaat` time NOT NULL,
  `bitisSaat` time NOT NULL,
  `renk` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `yazi_isleri_ajanda`
--

INSERT INTO `yazi_isleri_ajanda` (`id`, `veri`, `tarih`, `baslangicSaat`, `bitisSaat`, `renk`) VALUES
(1472060831468, 'Yeni Veri Girişi', '2016-08-26', '04:30:00', '04:45:00', ''),
(1472060831472, 'Yeni Veri Girişi', '2016-08-25', '04:30:00', '04:45:00', ''),
(1472061969609, 'Yeni Veri Girişi', '2016-08-25', '07:30:00', '07:45:00', ''),
(1472061969613, 'Yeni Veri Girişi', '2016-08-26', '07:30:00', '07:45:00', ''),
(1472062446758, 'Yeni Veri Girişi', '2016-08-25', '09:30:00', '09:45:00', ''),
(1472062566786, 'Yeni Veri Girişi', '2016-08-27', '04:30:00', '04:45:00', ''),
(1472062566790, 'Yeni Veri Girişi', '2016-08-24', '06:30:00', '06:45:00', 'pembe'),
(1472064161649, 'Yeni Veri Girişi', '2016-08-24', '08:30:00', '08:45:00', 'turuncu'),
(1472067817881, 'Yeni Veri Girişi', '2016-08-26', '09:30:00', '09:45:00', ''),
(1472067895999, 'Yeni Veri Girişi', '2016-08-25', '11:15:00', '11:30:00', ''),
(1472321252839, 'Yeni Veri Girişi', '2016-08-27', '10:15:00', '10:30:00', ''),
(1472463957512, 'kasim asim asmak lazım', '2016-08-29', '04:00:00', '04:15:00', 'pembe');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yazi_isleri_ajanda_gecici`
--

CREATE TABLE IF NOT EXISTS `yazi_isleri_ajanda_gecici` (
  `id` double NOT NULL,
  `veri` varchar(255) NOT NULL,
  `tarih` date NOT NULL,
  `baslangicSaat` time NOT NULL,
  `bitisSaat` time NOT NULL,
  `renk` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin5;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yazi_isleri_rehber`
--

CREATE TABLE IF NOT EXISTS `yazi_isleri_rehber` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `soyad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `telefon` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=153 ;

--
-- Tablo döküm verisi `yazi_isleri_rehber`
--

INSERT INTO `yazi_isleri_rehber` (`id`, `ad`, `soyad`, `email`, `telefon`) VALUES
(30, 'soner', 'evcil', 'SONEREVC@yahoo.com', '0539-785-98-56'),
(41, 'sercan', 'göger', 'sercan.goger@mynet.com', '0538-577-55-58'),
(142, 'ahmet', 'necdet sezer', 'gnlkurmay@gmail.com', '1515-696-32-14'),
(143, 'dursun', 'göger', 'dursun.goger@yahoo.com', '6985-253-15-74'),
(144, 'ali', 'metin', 'feyyaz@mynet.com', '6548-123-65-97'),
(145, 'sultan', 'firat', 'firat06@mynet.com', '0535-079-14-25'),
(146, 'nicki', 'minaj', 'baby@google.com', '1548-365-78-98'),
(147, 'Semih', 'Emirza', 'dewil_night@kero.com', '5698-214-56-98'),
(151, 'Kader', 'Göger', 'fela@mynet.com', '6548-548-96-23'),
(152, 'Sinan', 'Soylu', 'soylu.as@mynet.com', '6545-875-32-15');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yetki`
--

CREATE TABLE IF NOT EXISTS `yetki` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kid` int(11) NOT NULL,
  `mid` int(11) NOT NULL,
  `durum` int(11) NOT NULL,
  `midd` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=69 ;

--
-- Tablo döküm verisi `yetki`
--

INSERT INTO `yetki` (`id`, `kid`, `mid`, `durum`, `midd`) VALUES
(62, 5, 14, 1, 21),
(63, 4, 2, 1, 11),
(64, 9, 7, 1, 16),
(65, 9, 9, 1, 18),
(66, 9, 17, 1, 114),
(67, 9, 16, 1, 113),
(68, 9, 15, 1, 112);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
