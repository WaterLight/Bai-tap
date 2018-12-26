-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 23, 2018 lúc 04:56 PM
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
-- Cơ sở dữ liệu: `quan_ly_web_nhac_`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `music`
--

CREATE TABLE `music` (
  `id` int(11) NOT NULL,
  `song` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `singer` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `musician` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `style` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `new` int(1) NOT NULL,
  `best` int(1) NOT NULL,
  `topten` int(2) NOT NULL,
  `numoflisten` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mp3` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `music`
--

INSERT INTO `music` (`id`, `song`, `singer`, `musician`, `country`, `style`, `new`, `best`, `topten`, `numoflisten`, `img`, `mp3`) VALUES
(1, 'Faded', 'Alan Walker', 'Alan Walker', 'Âu Mỹ', 'BALLAD', 1, 2, 1, 10, 'image/faded.jpg', 'mp3/Faded - Alan Walker.mp3'),
(2, 'Look What You made Me Do', 'Taylort Swift', 'Taylort Swift', 'Âu Mỹ', 'POP', 1, 0, 4, 1, 'image/lwymmd.jpg', 'mp3/Look What You Made Me Do.mp3'),
(3, 'BangBang', 'Jessie J, Ariana Grande, Nicki Minaj', 'Jessie J', 'Âu Mỹ', 'POP', 1, 0, 8, 0, 'image/bangbang.jpg', 'mp3/BangBang.mp3'),
(4, 'Cant Be Tamed', 'Miley Cyrus', 'Antonina Armato, Tim James,  John Shanks', 'Âu Mỹ', 'ROCK', 0, 0, 3, 0, 'image/cantbetamed.jpg', 'mp3/CantBeTamed.mp3'),
(5, 'Chandelier', 'Sia', 'Sia', 'Âu Mỹ', 'BALLAD', 0, 1, 2, 3, 'image/chandelier.jpg', 'mp3/Chandelier.mp3'),
(6, 'Chạy ngay đi', 'Sơn Tùng MTP', 'Sơn Tùng MTP', 'Việt Nam', 'HIPHOP', 1, 0, 7, 9, 'image/chayngaydi.jpg', 'mp3/ChayNgayDi.mp3'),
(7, 'Chúng ta không thuộc về nhau', 'Sơn Tùng MTP', 'Sơn Tùng MTP', 'Việt Nam', 'POP', 0, 0, 4, 0, 'image/ctktvn.jpg', 'mp3/ChungTaKhongThuocVeNhau.mp3'),
(8, 'Không phải dạng vừa đâu', 'Sơn Tùng MTP', 'Sơn Tùng MTP', 'Việt Nam', 'HIPHOP', 0, 1, 8, 0, 'image/kpdvd.jpg', 'mp3/KhongPhaiDangVuaDau.mp3'),
(9, 'Haru Haru', 'Big Bang', 'Big Bang', 'Hàn Quốc', 'HIPHOP', 0, 1, 8, 8, 'image/haru.jpg', 'mp3/HaruHaru.mp3'),
(10, 'Smile', 'Vitas', 'Vitas', 'Âu Mỹ', 'ROCK', 1, 0, 9, 0, 'image/smile.jpg', 'mp3/Smile.mp3'),
(11, 'Gee', 'SNSD', 'SNSD', 'Hàn Quốc', 'POP', 1, 1, 1, 6, 'image/gee.jpg', 'mp3/Gee.mp3'),
(12, 'Wrecking Ball', 'Miley Cyrus', 'Miley Cyrus', 'Thế Giới', 'HIPHOP', 0, 1, 10, 2, 'image/wreckingball.jpg', 'mp3/WreckingBall.mp3'),
(13, 'Love Yourself', 'Justin Bieber', 'Justin Bieber', 'Thế Giới', 'POP', 1, 0, 6, 0, 'image/loveuself.jpg', 'mp3/LoveYourself.mp3'),
(14, 'Marshmello Wolves', 'Selena Gomes', 'Selena Gomes', 'Âu Mỹ', 'BALLAD', 0, 0, 5, 0, 'image/mmwolves.jpg', 'mp3/Marshmello – Wolves.mp3'),
(15, 'Anh', 'Thùy Chi - Anh Vũ', 'Anh Vũ', 'Việt Nam', 'POP', 0, 0, 5, 0, '', 'mp3/Anh.mp3'),
(16, 'Lạc Trôi', 'Sơn Tùng MTP', 'Sơn Tùng MTP', 'Việt Nam', 'HIPHOP', 0, 0, 2, 0, '', 'mp3/LacTroi.mp3'),
(17, 'Xe Đạp', 'Thùy Chi', 'Thùy Chi - M4U', 'Việt Nam', 'BALLAD', 0, 0, 6, 7, '', 'mp3/XeDap.mp3'),
(18, 'Bùa Yêu', 'Bích Phương', 'Tiên Cookie - Phạm Thanh Hà - Dương K', 'Việt Nam', 'POP', 0, 0, 3, 0, '', 'mp3/BuaYeu.mp3'),
(19, 'Giấc Mơ Trưa', 'Thùy Chi', 'Giáng Son', 'Việt Nam', 'BALLAD', 0, 0, 1, 5, '', 'mp3/GiacMoTrua.mp3'),
(20, 'Ngốc Nghếch', 'Bảo Thy', 'Bảo Thy', 'Việt Nam', 'POP', 0, 0, 9, 0, '', 'mp3/NgocNghech.mp3'),
(21, 'Kí Ức Của Mưa', 'Bảo Thy', 'Sỹ Luân - Nguyễn Hải Phong', 'Việt Nam', 'BALLAD', 0, 0, 10, 4, '', 'mp3/KiUcCuaMua.mp3'),
(22, 'Roar', 'Katy Perry', 'Katy Perry', 'Âu Mỹ', 'POP', 0, 0, 6, 0, '', 'mp3/Roar.mp3'),
(23, 'Dark Horse', 'Katy Perry', 'Katy Perry', 'Âu Mỹ', 'POP', 0, 0, 7, 0, '', 'mp3/DarkHorse.mp3'),
(24, 'Ed Sheeran - Shape Of You (cover by J.Fla)', 'J.Fla', 'Ed Sheeran', 'Âu Mỹ', 'BALLAD', 0, 0, 10, 0, '', 'mp3/ShapeOfYou.mp3'),
(25, 'Sexy Love', 'T Ara', 'T Ara', 'Hàn Quốc', 'POP', 0, 0, 5, 0, '', 'mp3/SexyLove.mp3'),
(26, 'Lolipop', '2NE1 - BigBang', '2NE1', 'Hàn Quốc', 'ROCK', 0, 0, 4, 0, '', 'mp3/Lolipop.mp3'),
(27, 'Fantastic Baby', 'BigBang', 'BigBang', 'Hàn Quốc', 'ROCK', 0, 0, 6, 0, '', 'mp3/FantasticBaby.mp3'),
(28, 'Fire', '2NE1', '2NE1', 'Hàn Quốc', 'HIPHOP', 0, 0, 9, 0, '', 'mp3/Fire.mp3'),
(29, 'DduDuDduDu', 'BlackPink', 'BlackPink', 'Hàn Quốc', 'POP', 0, 0, 3, 0, '', 'mp3/DduDuDduDu - BlackPink.mp3'),
(30, 'We Were In Love', 'T Ara', 'Davichi', 'Hàn Quốc', 'BALLAD', 0, 0, 2, 0, '', 'mp3/WeWereInLove.mp3'),
(31, 'Likey', 'Twice', 'Twice', 'Hàn Quốc', 'POP', 0, 0, 7, 0, '', 'mp3/Likey.mp3'),
(32, 'TT', 'Twice', 'Twice', 'Hàn Quốc', 'POP', 0, 0, 10, 0, '', 'mp3/TT.mp3');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `musicians`
--

CREATE TABLE `musicians` (
  `mid` int(11) NOT NULL,
  `mname` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `minfomation` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `musicians`
--

INSERT INTO `musicians` (`mid`, `mname`, `minfomation`) VALUES
(1, 'Alan Walker', 'Nhac si viet thi thich'),
(2, 'Taylor Swift', 'Nhac si thich thi viet'),
(3, 'Jessie J', 'Nhac si thich thi hat'),
(4, 'Antonina Armato, Tim James,  John Shanks', 'Nhac si thich thi viet'),
(5, 'Sia', 'Nhac si thich thi thich'),
(6, 'Sơn Tùng MTP', 'Nhac si thich noi loan'),
(7, 'Big Bang', 'Nhac si thich tham thi'),
(8, 'Vista', 'Nhac si thich vit qua ta'),
(9, 'SNSD', 'Nhac si thich hat'),
(10, 'Miley Cyrus', 'Nhac si thich quay'),
(11, 'Justin Bieber', 'Nhac si thich an bo'),
(12, 'Selena Gomes', 'Nhac si ban nhom');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mylist`
--

CREATE TABLE `mylist` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `mylist`
--

INSERT INTO `mylist` (`id`, `userid`) VALUES
(11, 16),
(6, 16),
(9, 16),
(8, 16),
(7, 16),
(1, 16),
(12, 17),
(4, 17);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `singers`
--

CREATE TABLE `singers` (
  `sid` int(11) NOT NULL,
  `sname` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `sinfomation` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `singers`
--

INSERT INTO `singers` (`sid`, `sname`, `sinfomation`) VALUES
(1, 'Alan Walker', 'Ca si thich thi hat'),
(2, 'Taylor Swift', 'Ca si hat thi thich'),
(3, 'Ariana Grande', 'Ca si thich bo show'),
(4, 'Nicki Minaj', 'Ca si thich thi show'),
(5, 'Jessie J', 'Ca si thich lam mau'),
(6, 'Sơn Tùng MTP', 'Ca si ban ti vi'),
(7, 'Sia', 'Ca si thich bi a'),
(8, 'Big Bang', 'Nhom ca si thich thi hat'),
(9, 'Vista', 'Ca si thich qua ta'),
(10, 'Justin Bieber', 'Ca si thich bia co'),
(11, 'Selena Gomes', 'Ca si thich seo di'),
(12, 'Miley Cyrus', 'Ca si thich du quay'),
(13, 'SNSD', 'Ca si thich nhay nhot');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `fname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(1) NOT NULL DEFAULT '0',
  `activation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('0','1') COLLATE utf8_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`userid`, `fname`, `lname`, `address`, `email`, `username`, `password`, `level`, `activation`, `status`) VALUES
(15, 'ad', 'ad', 'Số 7 - Phùng Hưng - Hà Đông - Hà Nội', 'admin169@gmail.com', 'admin', '25f9e794323b453885f5181f1b624d0b', 2, '', '1'),
(16, 'Đồng năm', 'Cân team 20 gg', 'Số 17 - Phùng Hưng - Hà Đông - Hà Nội', 'gdnhell169@gmail.com', 'cauvang', '25f9e794323b453885f5181f1b624d0b', 1, '', '1'),
(17, 'Thần kiếm', 'Vô địch', '', 'thankiem@gmail.com', 'thankiem', 'cc569360a083da71d8c1731bf97f82bd', 0, '', '1'),
(18, 'Hổ mang', 'trắng', '', 'homangtrang169@gmail.com', 'homangtrang', '25d55ad283aa400af464c76d713c07ad', 0, '', '1'),
(19, 'Lão', 'Hạc', '', 'gdnhell169@gmail.com', 'laohac', '25d55ad283aa400af464c76d713c07ad', 0, '', '1'),
(20, 'Thêm một', 'Tài khoản', '', 'gdnhell169@gmail.com', 'themmottaikhoan', '25f9e794323b453885f5181f1b624d0b', 0, '', '1'),
(21, 'yasuo', 'moe', '', 'yasuo@gmail.com', 'yasuo', '03cce43f8b49ea165c6effeb3e141e08', 0, '', '1');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `musicians`
--
ALTER TABLE `musicians`
  ADD PRIMARY KEY (`mid`);

--
-- Chỉ mục cho bảng `mylist`
--
ALTER TABLE `mylist`
  ADD KEY `fk_music` (`id`),
  ADD KEY `fk_users` (`userid`);

--
-- Chỉ mục cho bảng `singers`
--
ALTER TABLE `singers`
  ADD PRIMARY KEY (`sid`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `music`
--
ALTER TABLE `music`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `musicians`
--
ALTER TABLE `musicians`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `singers`
--
ALTER TABLE `singers`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `mylist`
--
ALTER TABLE `mylist`
  ADD CONSTRAINT `fk_music` FOREIGN KEY (`id`) REFERENCES `music` (`id`),
  ADD CONSTRAINT `fk_users` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
