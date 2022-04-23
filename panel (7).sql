-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 23 Nis 2022, 13:17:02
-- Sunucu sürümü: 8.0.17
-- PHP Sürümü: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `panel`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `abouts`
--

CREATE TABLE `abouts` (
  `abouts_id` int(11) NOT NULL,
  `abouts_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `abouts_slug` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `abouts_content` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `abouts`
--

INSERT INTO `abouts` (`abouts_id`, `abouts_title`, `abouts_slug`, `abouts_content`) VALUES
(8, 'Misyon', 'misyon', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum quis magna vel massa pulvinar sollicitudin. Vivamus rhoncus vitae felis ut ornare. Fusce et suscipit mauris, vehicula molestie mauris. Cras vitae nibh non nulla euismod lobortis a ac tortor. Nunc mauris lorem, accumsan a vulputate a, accumsan ut risus. Nunc molestie tempor consectetur. Nam aliquet, tortor at ullamcorper aliquam, est sem tempor augue, vitae fermentum erat ipsum vitae mi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>\r\n\r\n<p>Nulla sagittis, enim ut hendrerit sollicitudin, ante dolor rhoncus elit, nec efficitur orci ex eget leo. Interdum et malesuada fames ac ante ipsum primis in faucibus. Morbi sed laoreet felis. Integer vel metus eleifend, lobortis orci in, pellentesque turpis. In elit sem, maximus a arcu ac, accumsan facilisis nisi. Suspendisse efficitur commodo ligula vel consequat. Morbi tempor arcu vel arcu accumsan, eu dignissim turpis feugiat. Aliquam quis suscipit tellus. Nam placerat vestibulum dictum.</p>\r\n\r\n<p>Morbi tristique mollis scelerisque. In pretium, magna ac pretium congue, justo lacus iaculis libero, nec viverra velit metus ut est. Etiam sit amet iaculis magna. Praesent consequat mi quam, eu volutpat ante convallis non. Vestibulum tempor faucibus sollicitudin. Duis vehicula massa eu dui porta, non ultrices odio sagittis. Cras et nisi lacus. Sed sit amet ante commodo, consectetur magna at, dignissim quam. Curabitur imperdiet sit amet lacus a vestibulum. Etiam vel leo tellus. Donec vehicula laoreet est vitae sodales. Sed tristique porta ligula. Nullam eget ante dolor.</p>\r\n\r\n<p>Nullam vehicula tincidunt elit non tincidunt. In elementum pulvinar urna sit amet dapibus. Curabitur in aliquet metus. Vestibulum pretium ex orci, eget luctus urna imperdiet eu. Aenean finibus et magna at consectetur. Sed non orci convallis, malesuada mauris et, vestibulum neque. Suspendisse nulla magna, luctus quis mattis nec, semper et lacus. Sed molestie lacus ut nisi convallis tempus. Nullam tristique molestie ante vitae cursus. In neque arcu, vehicula eu velit sit amet, feugiat vehicula metus. Aliquam erat volutpat. Aliquam faucibus, nulla in aliquam tempor, sapien enim vehicula ligula, eu tincidunt nisl lectus vel purus. Vestibulum sit amet facilisis sapien, eget ultrices massa. Ut auctor ornare odio vitae efficitur.</p>\r\n\r\n<p>Curabitur nisi turpis, blandit sit amet blandit vel, varius non sem. Aliquam erat volutpat. Nunc eu orci finibus, dictum augue at, viverra orci. Etiam posuere, turpis at vulputate consectetur, urna risus pulvinar ex, a fermentum turpis ipsum cursus enim. Donec at bibendum neque. Phasellus dictum orci a lectus scelerisque tristique. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>\r\n'),
(9, 'Vizyon', 'vizyon', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum quis magna vel massa pulvinar sollicitudin. Vivamus rhoncus vitae felis ut ornare. Fusce et suscipit mauris, vehicula molestie mauris. Cras vitae nibh non nulla euismod lobortis a ac tortor. Nunc mauris lorem, accumsan a vulputate a, accumsan ut risus. Nunc molestie tempor consectetur. Nam aliquet, tortor at ullamcorper aliquam, est sem tempor augue, vitae fermentum erat ipsum vitae mi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>\r\n\r\n<p>Nulla sagittis, enim ut hendrerit sollicitudin, ante dolor rhoncus elit, nec efficitur orci ex eget leo. Interdum et malesuada fames ac ante ipsum primis in faucibus. Morbi sed laoreet felis. Integer vel metus eleifend, lobortis orci in, pellentesque turpis. In elit sem, maximus a arcu ac, accumsan facilisis nisi. Suspendisse efficitur commodo ligula vel consequat. Morbi tempor arcu vel arcu accumsan, eu dignissim turpis feugiat. Aliquam quis suscipit tellus. Nam placerat vestibulum dictum.</p>\r\n\r\n<p>Morbi tristique mollis scelerisque. In pretium, magna ac pretium congue, justo lacus iaculis libero, nec viverra velit metus ut est. Etiam sit amet iaculis magna. Praesent consequat mi quam, eu volutpat ante convallis non. Vestibulum tempor faucibus sollicitudin. Duis vehicula massa eu dui porta, non ultrices odio sagittis. Cras et nisi lacus. Sed sit amet ante commodo, consectetur magna at, dignissim quam. Curabitur imperdiet sit amet lacus a vestibulum. Etiam vel leo tellus. Donec vehicula laoreet est vitae sodales. Sed tristique porta ligula. Nullam eget ante dolor.</p>\r\n\r\n<p>Nullam vehicula tincidunt elit non tincidunt. In elementum pulvinar urna sit amet dapibus. Curabitur in aliquet metus. Vestibulum pretium ex orci, eget luctus urna imperdiet eu. Aenean finibus et magna at consectetur. Sed non orci convallis, malesuada mauris et, vestibulum neque. Suspendisse nulla magna, luctus quis mattis nec, semper et lacus. Sed molestie lacus ut nisi convallis tempus. Nullam tristique molestie ante vitae cursus. In neque arcu, vehicula eu velit sit amet, feugiat vehicula metus. Aliquam erat volutpat. Aliquam faucibus, nulla in aliquam tempor, sapien enim vehicula ligula, eu tincidunt nisl lectus vel purus. Vestibulum sit amet facilisis sapien, eget ultrices massa. Ut auctor ornare odio vitae efficitur.</p>\r\n\r\n<p>Curabitur nisi turpis, blandit sit amet blandit vel, varius non sem. Aliquam erat volutpat. Nunc eu orci finibus, dictum augue at, viverra orci. Etiam posuere, turpis at vulputate consectetur, urna risus pulvinar ex, a fermentum turpis ipsum cursus enim. Donec at bibendum neque. Phasellus dictum orci a lectus scelerisque tristique. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>\r\n'),
(10, 'Hakkımızda', 'hakkimizda', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum quis magna vel massa pulvinar sollicitudin. Vivamus rhoncus vitae felis ut ornare. Fusce et suscipit mauris, vehicula molestie mauris. Cras vitae nibh non nulla euismod lobortis a ac tortor. Nunc mauris lorem, accumsan a vulputate a, accumsan ut risus. Nunc molestie tempor consectetur. Nam aliquet, tortor at ullamcorper aliquam, est sem tempor augue, vitae fermentum erat ipsum vitae mi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>\r\n\r\n<p>Nulla sagittis, enim ut hendrerit sollicitudin, ante dolor rhoncus elit, nec efficitur orci ex eget leo. Interdum et malesuada fames ac ante ipsum primis in faucibus. Morbi sed laoreet felis. Integer vel metus eleifend, lobortis orci in, pellentesque turpis. In elit sem, maximus a arcu ac, accumsan facilisis nisi. Suspendisse efficitur commodo ligula vel consequat. Morbi tempor arcu vel arcu accumsan, eu dignissim turpis feugiat. Aliquam quis suscipit tellus. Nam placerat vestibulum dictum.</p>\r\n\r\n<p>Morbi tristique mollis scelerisque. In pretium, magna ac pretium congue, justo lacus iaculis libero, nec viverra velit metus ut est. Etiam sit amet iaculis magna. Praesent consequat mi quam, eu volutpat ante convallis non. Vestibulum tempor faucibus sollicitudin. Duis vehicula massa eu dui porta, non ultrices odio sagittis. Cras et nisi lacus. Sed sit amet ante commodo, consectetur magna at, dignissim quam. Curabitur imperdiet sit amet lacus a vestibulum. Etiam vel leo tellus. Donec vehicula laoreet est vitae sodales. Sed tristique porta ligula. Nullam eget ante dolor.</p>\r\n\r\n<p>Nullam vehicula tincidunt elit non tincidunt. In elementum pulvinar urna sit amet dapibus. Curabitur in aliquet metus. Vestibulum pretium ex orci, eget luctus urna imperdiet eu. Aenean finibus et magna at consectetur. Sed non orci convallis, malesuada mauris et, vestibulum neque. Suspendisse nulla magna, luctus quis mattis nec, semper et lacus. Sed molestie lacus ut nisi convallis tempus. Nullam tristique molestie ante vitae cursus. In neque arcu, vehicula eu velit sit amet, feugiat vehicula metus. Aliquam erat volutpat. Aliquam faucibus, nulla in aliquam tempor, sapien enim vehicula ligula, eu tincidunt nisl lectus vel purus. Vestibulum sit amet facilisis sapien, eget ultrices massa. Ut auctor ornare odio vitae efficitur.</p>\r\n\r\n<p>Curabitur nisi turpis, blandit sit amet blandit vel, varius non sem. Aliquam erat volutpat. Nunc eu orci finibus, dictum augue at, viverra orci. Etiam posuere, turpis at vulputate consectetur, urna risus pulvinar ex, a fermentum turpis ipsum cursus enim. Donec at bibendum neque. Phasellus dictum orci a lectus scelerisque tristique. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admins`
--

CREATE TABLE `admins` (
  `admins_id` int(11) NOT NULL,
  `admins_namesurname` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `admins_file` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `admins_username` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `admins_pass` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `admins_status` enum('0','1') CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `admins`
--

INSERT INTO `admins` (`admins_id`, `admins_namesurname`, `admins_file`, `admins_username`, `admins_pass`, `admins_status`) VALUES
(9, 'Muhammet Özdemir', '6258011e44509.jpg', 'rootozdemir', 'fe01ce2a7fbac8fafaed7c982a04e229', '1'),
(13, 'Ugur Evren', '6263f46b3506d.png', 'root', '63a9f0ea7bb98050796b649e85481845', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blogs`
--

CREATE TABLE `blogs` (
  `blogs_id` int(11) NOT NULL,
  `blogs_time` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `blogs_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `blogs_slug` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `blogs_file` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `blogs_content` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `blogs`
--

INSERT INTO `blogs` (`blogs_id`, `blogs_time`, `blogs_title`, `blogs_slug`, `blogs_file`, `blogs_content`) VALUES
(15, '2022-04-22 00:38:09', 'HONDA', 'honda', '6261cdecd773a.png', '<p><strong>TEKNİK &Ouml;ZELLİKLER</strong></p>\r\n\r\n<ul>\r\n	<li>Silindir Hacmi1996 cc</li>\r\n	<li>Maksimum Hız272 km/s</li>\r\n	<li>Beygir G&uuml;c&uuml;320 HP</li>\r\n	<li>0-100 Km Hızlanma5.8 sn</li>\r\n	<li>Maksimum Tork400 Nm</li>\r\n	<li>Uzunluk4557 mm</li>\r\n	<li>Vites Tipi6 İleri D&uuml;z</li>\r\n	<li>Genişlik1877 mm</li>\r\n	<li>Yakıt T&uuml;r&uuml;Benzin</li>\r\n	<li>Y&uuml;kseklik1427 mm</li>\r\n	<li>Şehir İ&ccedil;i Ortalama T&uuml;ketim9.8 lt</li>\r\n	<li>Boş Ağırlık1451 kg</li>\r\n	<li>Şehir Dışı Ortalama T&uuml;ketim6.5 lt</li>\r\n	<li>Bagaj Hacmi420 lt</li>\r\n	<li>Karma Yakıt T&uuml;ketimi7.7 lt</li>\r\n	<li>Yakıt Deposu47 lt</li>\r\n</ul>\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `cars`
--

CREATE TABLE `cars` (
  `cars_id` int(11) NOT NULL,
  `cars_title` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `cars_url` text COLLATE utf8_turkish_ci NOT NULL,
  `cars_file` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `cars_content` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `cars`
--

INSERT INTO `cars` (`cars_id`, `cars_title`, `cars_url`, `cars_file`, `cars_content`) VALUES
(17, 'HONDA', 'https://www.sahibinden.com/otomotiv-ekipmanlari-yedek-parca-otomobil-arazi-araci-sanziman-vites/sanziman-komple?a91552=1016702', '6263fa211b0d5.png', '<p>Buraya par&ccedil;a ismi yazılacak</p>\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `frontpages`
--

CREATE TABLE `frontpages` (
  `frontpages_id` int(11) NOT NULL,
  `frontpages_title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `frontpages_file` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `frontpages_url` text COLLATE utf8_turkish_ci NOT NULL,
  `frontpages_content` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `frontpages`
--

INSERT INTO `frontpages` (`frontpages_id`, `frontpages_title`, `frontpages_file`, `frontpages_url`, `frontpages_content`) VALUES
(14, 'Şanzıman', '62608a70e9a19.png', 'https://www.sahibinden.com/otomotiv-ekipmanlari-yedek-parca-otomobil-arazi-araci-sanziman-vites/sanziman-komple?a91552=1016702', '<p><strong>HONDA</strong></p>\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `posts`
--

CREATE TABLE `posts` (
  `posts_id` int(11) NOT NULL,
  `posts_title` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `posts_file` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `posts_content` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `posts_url` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `settings`
--

CREATE TABLE `settings` (
  `settings_id` int(11) NOT NULL,
  `settings_description` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `settings_key` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `settings_value` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `settings_type` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `settings_must` int(3) NOT NULL,
  `settings_delete` enum('0','1') CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `settings_status` enum('0','1') CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `settings`
--

INSERT INTO `settings` (`settings_id`, `settings_description`, `settings_key`, `settings_value`, `settings_type`, `settings_must`, `settings_delete`, `settings_status`) VALUES
(1, 'Site Başlığı', 'title', 'Evren Otomotiv', 'text', 0, '0', '1'),
(2, 'Site Açıklama', 'description', 'Evren Otomotiv Açıklama', 'text', 1, '0', '1'),
(3, 'Site Logo', 'logo', '6263f26ec11f5.png', 'file', 2, '0', '1'),
(4, 'Fav Icon', 'icon', '6263f38f52e91.ico', 'file', 4, '0', '1'),
(5, 'Anahtar Kelimeler', 'keywords', 'parça,alaşehir,araba,evren', 'text', 5, '0', '1'),
(6, 'Telefon Numarası', 'phone', '+905419359985', 'text', 10, '0', '1'),
(7, 'Mail Adresi', 'email', 'evren@gmail.com', 'text', 11, '0', '1'),
(18, 'Site Sahibi', 'author', 'Evren Otomotiv', 'text', 6, '0', '1'),
(19, 'Copyright', 'copyright', 'Copyright © Evren Otomotiv 2022', 'text', 7, '0', '1'),
(20, 'Slogan', 'slogan', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.', 'text', 8, '0', '1'),
(22, 'Site Logo Text', 'logo_text', 'Evren Otomotiv', 'text', 3, '0', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sliders`
--

CREATE TABLE `sliders` (
  `sliders_id` int(11) NOT NULL,
  `sliders_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `sliders_file` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sliders`
--

INSERT INTO `sliders` (`sliders_id`, `sliders_title`, `sliders_file`) VALUES
(3, 'Honda', '626086f7c2629.png'),
(7, 'BMW', '626087921761c.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `users_namesurname` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `users_mail` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `users_file` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `users_username` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `users_pass` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `users_status` enum('0','1') CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`users_id`, `users_namesurname`, `users_mail`, `users_file`, `users_username`, `users_pass`, `users_status`) VALUES
(55, 'Ugur Evren', 'evren@mail.com', '', 'evren', '65a034b17a4b20e650e857b6a7c4d04f', '1'),
(56, '31', '31@31', '', '31', 'c16a5320fa475530d9583c34fd356ef5', '1');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`abouts_id`);

--
-- Tablo için indeksler `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admins_id`);

--
-- Tablo için indeksler `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blogs_id`);

--
-- Tablo için indeksler `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`cars_id`);

--
-- Tablo için indeksler `frontpages`
--
ALTER TABLE `frontpages`
  ADD PRIMARY KEY (`frontpages_id`);

--
-- Tablo için indeksler `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`posts_id`);

--
-- Tablo için indeksler `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`settings_id`);

--
-- Tablo için indeksler `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`sliders_id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `abouts`
--
ALTER TABLE `abouts`
  MODIFY `abouts_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `admins`
--
ALTER TABLE `admins`
  MODIFY `admins_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Tablo için AUTO_INCREMENT değeri `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blogs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Tablo için AUTO_INCREMENT değeri `cars`
--
ALTER TABLE `cars`
  MODIFY `cars_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Tablo için AUTO_INCREMENT değeri `frontpages`
--
ALTER TABLE `frontpages`
  MODIFY `frontpages_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Tablo için AUTO_INCREMENT değeri `posts`
--
ALTER TABLE `posts`
  MODIFY `posts_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Tablo için AUTO_INCREMENT değeri `settings`
--
ALTER TABLE `settings`
  MODIFY `settings_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Tablo için AUTO_INCREMENT değeri `sliders`
--
ALTER TABLE `sliders`
  MODIFY `sliders_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
