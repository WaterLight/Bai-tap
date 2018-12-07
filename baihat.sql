-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 06, 2018 lúc 04:48 PM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quan_ly_web_nhac`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baihat`
--

CREATE TABLE `baihat` (
  `mabh` int(11) NOT NULL,
  `tenbh` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `tencs` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tenns` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `quocgia` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `theloai` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `capnhat` int(1) NOT NULL DEFAULT '0',
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `baihat`
--

INSERT INTO `baihat` (`mabh`, `tenbh`, `tencs`, `tenns`, `quocgia`, `theloai`, `capnhat`, `url`) VALUES
(1, 'Faded - Alan Walker', 'Alan Walker', 'Alan Walker', 'Thế Giới', 'balad', 1, '../mp3/Faded - Alan Walker.mp3'),
(2, 'Look What You made Me Do', 'Taylort Swift', 'Taylort Swift', 'Thế Giới', 'pop', 0, '../mp3/Look What You Made Me Do - Taylor Swift.mp3'),
(4, 'Cháº¡y ngay Ä‘i', 'SÆ¡n TÃ¹ng MTP', 'SÆ¡n TÃ¹ng MTP', 'Việt Nam', 'hiphop', 1, '../../mp3/ChayNgayDi.mp3'),
(9, 'BangBang', 'Jessie J, Ariana Grande, Nicki Minaj', 'Jessie J', 'Thế Giới', 'pop', 1, 'mp3/BangBang.mp3'),
(10, 'Cant Be Tamed', 'Miley Cyrus', 'Antonina Armato, Tim James,  John Shanks', 'Thế Giới', 'rock', 0, 'mp3/CantBeTamed.mp3'),
(11, 'Chandelier', 'Sia', 'Sia', 'Thế Giới', 'balad', 1, 'mp3/Chandelier.mp3'),
(12, 'Chạy ngay đi', 'Sơn Tùng MTP', 'Sơn Tùng MTP', 'Việt Nam', 'hiphop', 1, 'mp3/ChayNgayDi.mp3'),
(13, 'Chúng ta không thuộc về nhau', 'Sơn Tùng MTP', 'Sơn Tùng MTP', 'Việt Nam', 'pop', 0, 'mp3/ChungTaKhongThuocVeNhau.mp3'),
(14, 'Không phải dạng vừa đâu', 'Sơn Tùng MTP', 'Sơn Tùng MTP', 'Việt Nam', 'hiphop', 0, 'mp3/KhongPhaiDangVuaDau.mp3'),
(15, 'Haru Haru', 'Big Bang', 'Big Bang', 'Thế Giới', 'hiphop', 0, 'mp3/HaruHaru.mp3'),
(16, 'Smile', 'Vitas', 'Vitas', 'Thế Giới', 'opera', 1, 'mp3/Smile.mp3'),
(17, 'Gee', 'SNSD', 'SNSD', 'Thế Giới', 'pop', 1, 'mp3/Gee.mp3'),
(18, 'Wreaking Ball', 'Miley Cyrus', 'Miley Cyrus', 'Thế Giới', 'hiphop', 1, 'mp3/WreakingBall.mp3'),
(19, 'Love Yourself', 'Justin Bieber', 'Justin Bieber', 'Thế Giới', 'pop', 1, 'mp3/LoveYourself.mp3'),
(20, 'Marshmello – Wolves', 'Selena Gomes', 'Selena Gomes', 'Thế giới', 'balad', 0, 'mp3/Marshmello – Wolves.mp3');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baihat`
--
ALTER TABLE `baihat`
  ADD PRIMARY KEY (`mabh`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `baihat`
--
ALTER TABLE `baihat`
  MODIFY `mabh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
