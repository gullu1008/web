-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 21 Ara 2023, 17:36:29
-- Sunucu sürümü: 5.7.36
-- PHP Sürümü: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `misir_tanrilari`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

DROP TABLE IF EXISTS `kullanicilar`;
CREATE TABLE IF NOT EXISTS `kullanicilar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kulad` varchar(10) NOT NULL,
  `sifre` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `kulad`, `sifre`) VALUES
(1, 'ozcan', '123');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tanrilar`
--

DROP TABLE IF EXISTS `tanrilar`;
CREATE TABLE IF NOT EXISTS `tanrilar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(100) NOT NULL,
  `baslik` varchar(255) NOT NULL,
  `icerik` text NOT NULL,
  `resim` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `tanrilar`
--

INSERT INTO `tanrilar` (`id`, `url`, `baslik`, `icerik`, `resim`) VALUES
(3, 'amon', 'Amon', 'Amon (US /ˈɑːmən/ ; ayrıca Amun, Ammon ; (Eski Mısır:jmn ve erken Orta Mısır Ja\'ma:ne, Geç Mısır: a\'mo:n), Yunanca Ámmōn, Hammon ; Fenike,[1] romanlaştırılmış: ʾmn), Hermopolitan Ogdoad\'ın bir üyesi olarak görünen önemli bir eski Mısır tanrısıdır.\r\n\r\nAmon, Teb\'in baş tanrısıdır ve ilk tanrıdır ve bütün tanrıların tanrısıdır. Eşi Amunet\'le birlikte tanrıdır. Kutsal hayvanları kaz ve koçtur. Orta Krallık Dönemi\'nde sadece yerel bir tanrıydı ama Tebliler Mısır\'a hakim olunca Amen önemli bir tanrı oldu. 18. Hanedan\'dan itibaren Tanrıların Kralı oldu. Ünlü Amen Tapınağı Karnak, dünyanın en büyük dinî yapısıdır. 19. ve 20. Hanedanlar Amen’in “görünmeyen yaratıcı güç” olduğunu cennetteki, dünyadaki, engin derinlerde ve yer altı dünyasındaki hayatın temeli olduğunu düşünürlerdi.\r\n\r\nAmon daha sonra Ra ile birleşerek dini törenlerde adı anılan ve kendisine yücelikler atfedilen Mısırın en güçlü tanrısı oldu.\r\n\r\nKral IV. Amenhotep Amon hoşnuttur anlamına gelen adını Akhenaton (Aton\'un hizmetkarı) olarak değiştirdi ve Mısır\'da herhangi bir betimleme yapılmayan Aton dinini kurdu ve diğer tanrılara tapınmayı yasakladı. Kralların da tanrı değil insan olduğu düşüncesini yaydı. Ancak Amon rahipleri bu durum karşısında ayaklandılar. Akhenaton\'un ölümünden sonra Aton\'un tek tanrıcı Güneş dini\' tarihten silindi.\r\n\r\nAmun, eşi Amunet ile birlikte Eski Krallık\'tan miras alındı. 11. Hanedan ile (y. MÖ 21. yüzyıl) birlikte Montu\'nun yerini alarak Thebes\'in koruyucu tanrısı konumuna yükseldi.[2]\r\n\r\nThebes\'in Hiksos\'a karşı isyanı sonrasında I. Ahmose yönetimiyle (MÖ 16. yüzyıl), Amun ulusal önem kazandı ve Güneş tanrısı Ra ile birleştirilerek Amon-Ra olarak ifade edildi.\r\n\r\nAmon-Ra, Akhenaten yönetimindeki \" Atenist sapkınlık \" dışında Yeni Krallık boyunca Mısır panteonundaönemini korudu. MÖ 16. ila 11. yüzyıllarda aşkın, kendi kendini yaratan,[3] yaratıcı tanrı, \"mükemmel\" konumunu elinde tuttu; yoksulların ya da sorunluların savunucusuydu ve kişisel dindarlığın merkezinde yer alıyordu. Osiris ile birlikte Mısır tanrılarının en çok kaydedilenidir.[4]\r\n\r\nLibya ve Nubia\'daki eski Yunan tarih yazarlarının ifadelerine göre, Mısır İmparatorluğu\'nun baş tanrısı olan Amon-Ra\'ya Mısır dışında da tapınıldı. Yunanistan\'da Zeus ile özdeşleşir ve Zeus-Ammon olarak anılır.\r\n\r\nGüncel etkiler; Amon\'un adı günümüzde bile Yahudi, Hristiyan ve müslümanlar arasında dini tören ve dualarda Âmin, Âmen şeklinde tekrarlanmaktadır.[5][6][7] Diyanet\'e göre bu görüş tartışmalıdır.[8] ', '1703147097_81f8a0425ce5bba61f7c.png'),
(4, 'horus', 'Horus', 'Horus (Heru, Hor, Her, Har), Antik Mısır mitolojisinde gök tanrısıdır. Osiris ve İsis\'in oğludur. Horus, şahin başlı tasvir edilir, bazı tasvirlerde firavunlar İsis\'in kucağında sembolize edilmiştir. Bunun sebebi firavunların dünya üzerindeki Horus olduğuna inanılmasındandır. Firavunlar kendilerini Horus\'un yeryüzündeki cisimleşmiş hâlleri olarak gördükleri için Horus, Antik Mısır\'ın en önemli tanrılarından biridir. Firavunlar, Horus\'un ismini kendi isimlerinden biri olarak alırlardı. Aynı zamanda Firavunlar Ra\'nın takipçisiydiler, bu yüzden Horus aynı zamanda güneş ile de ilişkilendirilirdi. Güneş tanrısı olarak gösterilmesi yanında Osiris\'in oğluydu. Mısır\'ın farklı bölgelerinde farklı Horus varyasyonları konusundaki ihtilafı çözmek için en az on beş farklı Horus formu kullanılmıştır. Bu formlar ait oldukları soy ağacına bağlı olarak güneş ve Osiris tipi olmak üzere iki kategoriye ayrılabilir. Eğer İsis\'in oğlu olduğu söyleniyorsa, Osiris tipi; yoksa güneş tipi kabul edilmektedir. Güneş tipi Horus, Atum, Ra, Geb ya da Nut çeşitli tanrıların oğlu olarak adlandırılırdı.', '1703147136_c1c187ab924209688809.png'),
(6, 'set', 'Set', 'Set, Osiris\'in erkek kardeşidir. İsis, Osiris\'in karısıdır, oğlu Horus\'tur. Set\'in oğlu Anubis sayılır, fakat aslında onun oğlu değildir. Neftis kocasından yeterince ilgi göremediği için büyüyle kendini İsis gibi gözüktürmüştür. İsis ve Nephthys birbirlerine çok benzerler. Bir akşam Osiris\'in biraz sarhoş olmasını sağlar ve ondan çocuğu olur. Bu çocukta Anubis\'tir.\r\n\r\nSet aynı zamanda bereketli Osiris\'in anti-tezidir. Horus ile savaşları boyunca, tanrıça Neith Horus\'a taht, Set\'e ise Astarte ve Anat tanrıçalarını veren bir anlaşma önerdi.\r\n\r\nSet, erkek kardeşi Osiris\'i öldürmesi ile ünlüdür, mitolojiye göre insanlar ve tanrı\'lar Osiris\'i severler. Koyduğu kuralları severek yerine getirirler. Kardeşi Set onun bu başarısını kıskanır. Set Osiris\'ten kurtulmak için bir plan yapar. 72 kişi Seth\'e bu plan için yardımda bulunmuştur. Kardeşinin ölçülerine uygun bir tabut yaptırır ve tabutu çok pahalı elmaslarla süsler. Bir şölen düzenler ve Osiris\'i de o şölene davet eder. Şölenin en sonunda önceden yaptırdığı tabutu çıkararak bu tabutun kime uyarsa ona verileceğini söyler. Herkes tabutu sırayla dener ve sıra Osiris\'e geldiğinde Osiris tabutun içine girdiğinde Seth tabutu hızlıca kapayıp çiviler ve Tabutu Nil nehrine bırakır, aynı zamanda onun oğlu Horus\'u da öldürmeye teşebbüs etmiştir. Horus, yaşamış, babasının ölümünün intikamını almış ve Set\'i sonsuza kadar çöle sürgüne yollamıştır. Set\'in sürgüne gönderilme kararı Ra tarafından yönetilen tanrılar konseyinde alınmıştır. Tanrıların çoğu Horus ve onun annesi İsis\'in Osiris\'ten gelen Mısır tacının mirasçısının Horus olduğu iddiasını desteklerken, Ra bu fikre katılmamıştır. O, Horus\'un böyle güçlü bir pozisyon için çok genç olduğuna inanıyordu. Böylece, duruşma kimse yenişemeden uzun yıllar sürdü. İsis\'in bir kurnazlığı davanın kapanmasına neden oldu.\r\n', '1703147188_3bd2f31d598c85cf180e.png'),
(7, 'aker', 'Aker', 'qqwfqwf qwf qwf q', '1703150988_3d910c9c44e628a3e423.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
