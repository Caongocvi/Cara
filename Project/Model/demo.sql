-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 21, 2024 lúc 01:16 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `demo`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan1`
--

CREATE TABLE `binhluan1` (
  `mabl` int(11) NOT NULL,
  `mahh` int(11) NOT NULL,
  `makh` int(11) NOT NULL,
  `ngaybl` date NOT NULL,
  `noidung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `idcomment` int(11) NOT NULL,
  `idkh` int(11) NOT NULL,
  `idhanghoa` int(11) NOT NULL,
  `content` text NOT NULL,
  `luotthich` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`idcomment`, `idkh`, `idhanghoa`, `content`, `luotthich`) VALUES
(1, 3, 24, '  đẹp', 0),
(2, 3, 22, '  thấp', 0),
(3, 6, 22, '  đẹp vậy', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cthanghoa`
--

CREATE TABLE `cthanghoa` (
  `idhanghoa` int(11) NOT NULL,
  `idmau` int(11) NOT NULL,
  `idsize` int(11) NOT NULL,
  `dongia` float NOT NULL,
  `soluongton` int(11) NOT NULL,
  `hinh` varchar(100) NOT NULL,
  `giamgia` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cthanghoa`
--

INSERT INTO `cthanghoa` (`idhanghoa`, `idmau`, `idsize`, `dongia`, `soluongton`, `hinh`, `giamgia`) VALUES
(2, 1, 1, 39, 12, 'f2.jpg', 0),
(2, 1, 2, 39, 12, 'f2.jpg', 0),
(2, 1, 3, 39, 12, 'f2.jpg', 0),
(3, 1, 1, 49, 12, 'f3.jpg', 0),
(3, 1, 2, 49, 12, 'f3.jpg', 0),
(4, 1, 1, 59, 12, 'f4.jpg', 0),
(5, 1, 1, 39, 12, 'f5.jpg', 0),
(6, 3, 1, 49, 12, 'f6.jpg', 0),
(7, 1, 1, 59, 12, 'f7.jpg', 0),
(8, 1, 1, 39, 12, 'f8.jpg', 0),
(9, 1, 1, 49, 12, 'n1.jpg', 0),
(10, 1, 1, 59, 12, 'n2.jpg', 0),
(11, 1, 1, 39, 12, 'n3.jpg', 0),
(12, 1, 1, 19, 12, 'n4.jpg', 0),
(13, 1, 1, 59, 12, 'f1.jpg', 0),
(13, 1, 2, 59, 4, 'f2.jpg', 0),
(13, 1, 3, 59, 4, 'f3.jpg', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cthoadon`
--

CREATE TABLE `cthoadon` (
  `masohd` int(11) NOT NULL,
  `mahh` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL,
  `mausac` varchar(20) NOT NULL,
  `size` int(3) NOT NULL,
  `thanhtien` int(11) NOT NULL,
  `tinhtrang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cthoadon`
--

INSERT INTO `cthoadon` (`masohd`, `mahh`, `soluongmua`, `mausac`, `size`, `thanhtien`, `tinhtrang`) VALUES
(1, 22, 1, 'Màu Xanh Navy', 36, 500000, 0),
(1, 24, 2, ' Màu Hồng', 35, 1000000, 0),
(2, 22, 1, 'Màu Xanh Navy', 36, 500000, 0),
(2, 24, 2, ' Màu Hồng', 35, 1000000, 0),
(3, 24, 1, ' Màu Hồng', 36, 500000, 0),
(5, 24, 2, 'Màu Trắng', 36, 1000000, 0),
(8, 24, 2, 'Màu Trắng', 36, 1000000, 0),
(9, 24, 2, 'Màu Trắng', 36, 1000000, 0),
(10, 24, 2, ' Màu Hồng', 36, 1000000, 0),
(12, 24, 2, ' Màu Hồng', 35, 1000000, 0),
(14, 24, 3, ' Màu Hồng', 36, 1500000, 0),
(16, 24, 4, ' Màu Hồng', 36, 2000000, 0),
(19, 24, 4, ' Màu Hồng', 36, 2000000, 0),
(20, 22, 5, 'Màu Xanh Navy', 37, 2500000, 0),
(21, 22, 4, 'Màu Xanh Navy', 37, 2000000, 0),
(23, 22, 4, 'Màu Trắng', 37, 2000000, 0),
(24, 22, 4, 'Màu Trắng', 37, 2000000, 0),
(25, 22, 2, 'Màu Xanh Navy', 37, 1000000, 0),
(26, 22, 2, 'Màu Trắng', 37, 1000000, 0),
(27, 22, 2, 'Màu Trắng', 37, 1000000, 0),
(28, 13, 3, 'White', 1, 177, 0),
(29, 13, 2, 'White', 1, 118, 0),
(30, 13, 2, 'White', 1, 118, 0),
(31, 13, 2, 'White', 1, 118, 0),
(32, 10, 2, 'White', 1, 118, 0),
(32, 13, 3, 'White', 1, 177, 0),
(33, 10, 2, 'White', 1, 118, 0),
(33, 13, 3, 'White', 1, 177, 0),
(34, 10, 2, 'White', 1, 118, 0),
(34, 13, 3, 'White', 1, 177, 0),
(35, 10, 2, 'White', 1, 118, 0),
(35, 13, 3, 'White', 1, 177, 0),
(36, 10, 2, 'White', 1, 118, 0),
(36, 13, 3, 'White', 1, 177, 0),
(37, 10, 2, 'White', 1, 118, 0),
(37, 13, 3, 'White', 1, 177, 0),
(38, 10, 2, 'White', 1, 118, 0),
(38, 13, 3, 'White', 1, 177, 0),
(39, 10, 2, 'White', 1, 118, 0),
(39, 13, 3, 'White', 1, 177, 0),
(40, 10, 2, 'White', 1, 118, 0),
(40, 13, 3, 'White', 1, 177, 0),
(41, 10, 2, 'White', 1, 118, 0),
(41, 13, 3, 'White', 1, 177, 0),
(42, 10, 2, 'White', 1, 118, 0),
(42, 13, 3, 'White', 1, 177, 0),
(43, 10, 2, 'White', 1, 118, 0),
(43, 13, 3, 'White', 1, 177, 0),
(44, 10, 2, 'White', 1, 118, 0),
(44, 13, 3, 'White', 1, 177, 0),
(45, 10, 2, 'White', 1, 118, 0),
(45, 13, 3, 'White', 1, 177, 0),
(46, 10, 2, 'White', 1, 118, 0),
(46, 13, 3, 'White', 1, 177, 0),
(47, 10, 2, 'White', 1, 118, 0),
(47, 13, 3, 'White', 1, 177, 0),
(48, 10, 2, 'White', 1, 118, 0),
(48, 13, 3, 'White', 1, 177, 0),
(49, 10, 2, 'White', 1, 118, 0),
(49, 13, 3, 'White', 1, 177, 0),
(50, 10, 2, 'White', 1, 118, 0),
(50, 13, 3, 'White', 1, 177, 0),
(51, 10, 2, 'White', 1, 118, 0),
(51, 13, 3, 'White', 1, 177, 0),
(52, 10, 2, 'White', 1, 118, 0),
(52, 13, 3, 'White', 1, 177, 0),
(53, 10, 2, 'White', 1, 118, 0),
(53, 13, 3, 'White', 1, 177, 0),
(54, 10, 2, 'White', 1, 118, 0),
(54, 13, 3, 'White', 1, 177, 0),
(55, 10, 2, 'White', 1, 118, 0),
(55, 13, 3, 'White', 1, 177, 0),
(56, 10, 2, 'White', 1, 118, 0),
(56, 13, 3, 'White', 1, 177, 0),
(57, 10, 2, 'White', 1, 118, 0),
(57, 13, 3, 'White', 1, 177, 0),
(58, 10, 2, 'White', 1, 118, 0),
(58, 13, 3, 'White', 1, 177, 0),
(59, 10, 2, 'White', 1, 118, 0),
(59, 13, 3, 'White', 1, 177, 0),
(60, 10, 2, 'White', 1, 118, 0),
(60, 13, 3, 'White', 1, 177, 0),
(61, 10, 2, 'White', 1, 118, 0),
(61, 13, 3, 'White', 1, 177, 0),
(62, 10, 2, 'White', 1, 118, 0),
(62, 13, 3, 'White', 1, 177, 0),
(63, 10, 2, 'White', 1, 118, 0),
(63, 13, 3, 'White', 1, 177, 0),
(64, 10, 2, 'White', 1, 118, 0),
(64, 13, 3, 'White', 1, 177, 0),
(65, 10, 2, 'White', 1, 118, 0),
(65, 13, 3, 'White', 1, 177, 0),
(66, 10, 2, 'White', 1, 118, 0),
(66, 13, 3, 'White', 1, 177, 0),
(67, 10, 2, 'White', 1, 118, 0),
(67, 13, 3, 'White', 1, 177, 0),
(68, 10, 2, 'White', 1, 118, 0),
(68, 13, 3, 'White', 1, 177, 0),
(69, 10, 2, 'White', 1, 118, 0),
(69, 13, 3, 'White', 1, 177, 0),
(70, 10, 2, 'White', 1, 118, 0),
(70, 13, 3, 'White', 1, 177, 0),
(71, 10, 2, 'White', 1, 118, 0),
(71, 13, 3, 'White', 1, 177, 0),
(72, 10, 2, 'White', 1, 118, 0),
(72, 13, 3, 'White', 1, 177, 0),
(73, 10, 2, 'White', 1, 118, 0),
(73, 13, 3, 'White', 1, 177, 0),
(74, 10, 2, 'White', 1, 118, 0),
(74, 13, 3, 'White', 1, 177, 0),
(75, 10, 2, 'White', 1, 118, 0),
(75, 13, 3, 'White', 1, 177, 0),
(76, 10, 2, 'White', 1, 118, 0),
(76, 13, 3, 'White', 1, 177, 0),
(77, 10, 2, 'White', 1, 118, 0),
(77, 13, 3, 'White', 1, 177, 0),
(78, 10, 2, 'White', 1, 118, 0),
(78, 13, 3, 'White', 1, 177, 0),
(79, 10, 2, 'White', 1, 118, 0),
(79, 13, 3, 'White', 1, 177, 0),
(80, 10, 2, 'White', 1, 118, 0),
(80, 13, 3, 'White', 1, 177, 0),
(81, 10, 2, 'White', 1, 118, 0),
(81, 13, 3, 'White', 1, 177, 0),
(82, 10, 2, 'White', 1, 118, 0),
(82, 13, 3, 'White', 1, 177, 0),
(83, 13, 2, 'White', 1, 118, 0),
(84, 11, 2, 'White', 1, 78, 0),
(84, 13, 2, 'White', 1, 118, 0),
(85, 11, 2, 'White', 1, 78, 0),
(85, 13, 4, 'White', 1, 236, 0),
(86, 11, 2, 'White', 1, 78, 0),
(86, 13, 4, 'White', 1, 236, 0),
(87, 11, 2, 'White', 1, 78, 0),
(87, 13, 4, 'White', 1, 236, 0),
(88, 11, 2, 'White', 1, 78, 0),
(88, 13, 4, 'White', 1, 236, 0),
(89, 11, 2, 'White', 1, 78, 0),
(89, 13, 4, 'White', 1, 236, 0),
(90, 11, 2, 'White', 1, 78, 0),
(90, 13, 4, 'White', 1, 236, 0),
(91, 11, 2, 'White', 1, 78, 0),
(91, 13, 4, 'White', 1, 236, 0),
(92, 11, 2, 'White', 1, 78, 0),
(92, 13, 4, 'White', 1, 236, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hanghoa`
--

CREATE TABLE `hanghoa` (
  `mahh` int(11) NOT NULL,
  `tenhh` varchar(60) NOT NULL,
  `maloai` int(11) NOT NULL,
  `dacbiet` bit(1) NOT NULL,
  `soluotxem` int(11) NOT NULL,
  `ngaylap` date NOT NULL,
  `mota` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hanghoa`
--

INSERT INTO `hanghoa` (`mahh`, `tenhh`, `maloai`, `dacbiet`, `soluotxem`, `ngaylap`, `mota`) VALUES
(2, 'Cartoon Astronaut T-Shirts', 2, b'1', 3, '2020-08-08', 'Get on board with your new everyday tee. Inspired by American regattas, our Hydra Sport collection brings a color blocked, nautical touch to your rotation. Lightweight and comfortable, this men’s T-shirt is made for casual, everyday wear. It has a standard fit and a classic T-shirt silhouette that pairs well with all your favorite sweats and shorts. Champion details like the bound neck and double-needle construction level up your T-shirt game. Regatta-inspired graphics at the left chest and full back sets your rotation up for smooth sailing.'),
(3, 'Cartoon Astronaut T-Shirts', 1, b'0', 4, '2020-08-08', 'Get on board with your new everyday tee. Inspired by American regattas, our Hydra Sport collection brings a color blocked, nautical touch to your rotation. Lightweight and comfortable, this men’s T-shirt is made for casual, everyday wear. It has a standard fit and a classic T-shirt silhouette that pairs well with all your favorite sweats and shorts. Champion details like the bound neck and double-needle construction level up your T-shirt game. Regatta-inspired graphics at the left chest and full back sets your rotation up for smooth sailing.'),
(4, 'Cartoon Astronaut T-Shirts', 3, b'0', 1, '2020-08-08', 'Get on board with your new everyday tee. Inspired by American regattas, our Hydra Sport collection brings a color blocked, nautical touch to your rotation. Lightweight and comfortable, this men’s T-shirt is made for casual, everyday wear. It has a standard fit and a classic T-shirt silhouette that pairs well with all your favorite sweats and shorts. Champion details like the bound neck and double-needle construction level up your T-shirt game. Regatta-inspired graphics at the left chest and full back sets your rotation up for smooth sailing.'),
(5, 'Cartoon Astronaut T-Shirts', 3, b'1', 0, '2020-08-08', 'Get on board with your new everyday tee. Inspired by American regattas, our Hydra Sport collection brings a color blocked, nautical touch to your rotation. Lightweight and comfortable, this men’s T-shirt is made for casual, everyday wear. It has a standard fit and a classic T-shirt silhouette that pairs well with all your favorite sweats and shorts. Champion details like the bound neck and double-needle construction level up your T-shirt game. Regatta-inspired graphics at the left chest and full back sets your rotation up for smooth sailing.'),
(6, 'Cartoon Astronaut Jacket', 3, b'0', 0, '2020-08-08', 'Get on board with your new everyday tee. Inspired by American regattas, our Hydra Sport collection brings a color blocked, nautical touch to your rotation. Lightweight and comfortable, this men’s T-shirt is made for casual, everyday wear. It has a standard fit and a classic T-shirt silhouette that pairs well with all your favorite sweats and shorts. Champion details like the bound neck and double-needle construction level up your T-shirt game. Regatta-inspired graphics at the left chest and full back sets your rotation up for smooth sailing.'),
(7, 'Cartoon Astronaut Pants', 5, b'1', 1, '2020-08-08', 'Get on board with your new everyday tee. Inspired by American regattas, our Hydra Sport collection brings a color blocked, nautical touch to your rotation. Lightweight and comfortable, this men’s T-shirt is made for casual, everyday wear. It has a standard fit and a classic T-shirt silhouette that pairs well with all your favorite sweats and shorts. Champion details like the bound neck and double-needle construction level up your T-shirt game. Regatta-inspired graphics at the left chest and full back sets your rotation up for smooth sailing.'),
(8, 'Cartoon Astronaut Sweater', 5, b'1', 1, '2020-08-08', 'Get on board with your new everyday tee. Inspired by American regattas, our Hydra Sport collection brings a color blocked, nautical touch to your rotation. Lightweight and comfortable, this men’s T-shirt is made for casual, everyday wear. It has a standard fit and a classic T-shirt silhouette that pairs well with all your favorite sweats and shorts. Champion details like the bound neck and double-needle construction level up your T-shirt game. Regatta-inspired graphics at the left chest and full back sets your rotation up for smooth sailing.'),
(9, 'Cartoon Astronaut Hoodie', 1, b'0', 1, '2020-08-08', 'Get on board with your new everyday tee. Inspired by American regattas, our Hydra Sport collection brings a color blocked, nautical touch to your rotation. Lightweight and comfortable, this men’s T-shirt is made for casual, everyday wear. It has a standard fit and a classic T-shirt silhouette that pairs well with all your favorite sweats and shorts. Champion details like the bound neck and double-needle construction level up your T-shirt game. Regatta-inspired graphics at the left chest and full back sets your rotation up for smooth sailing.'),
(10, 'Cartoon Astronaut Hoodie', 1, b'0', 2, '2020-08-08', 'Get on board with your new everyday tee. Inspired by American regattas, our Hydra Sport collection brings a color blocked, nautical touch to your rotation. Lightweight and comfortable, this men’s T-shirt is made for casual, everyday wear. It has a standard fit and a classic T-shirt silhouette that pairs well with all your favorite sweats and shorts. Champion details like the bound neck and double-needle construction level up your T-shirt game. Regatta-inspired graphics at the left chest and full back sets your rotation up for smooth sailing.'),
(11, 'Cartoon Astronaut Jacket', 1, b'0', 3, '2023-10-30', 'Get on board with your new everyday tee. Inspired by American regattas, our Hydra Sport collection brings a color blocked, nautical touch to your rotation. Lightweight and comfortable, this men’s T-shirt is made for casual, everyday wear. It has a standard fit and a classic T-shirt silhouette that pairs well with all your favorite sweats and shorts. Champion details like the bound neck and double-needle construction level up your T-shirt game. Regatta-inspired graphics at the left chest and full back sets your rotation up for smooth sailing.'),
(12, 'Cartoon Astronaut Jacket', 4, b'0', 12, '2023-10-30', 'Get on board with your new everyday tee. Inspired by American regattas, our Hydra Sport collection brings a color blocked, nautical touch to your rotation. Lightweight and comfortable, this men’s T-shirt is made for casual, everyday wear. It has a standard fit and a classic T-shirt silhouette that pairs well with all your favorite sweats and shorts. Champion details like the bound neck and double-needle construction level up your T-shirt game. Regatta-inspired graphics at the left chest and full back sets your rotation up for smooth sailing.'),
(13, 'Cartoon Astronaut T-Shirts', 1, b'1', 5, '2020-08-08', 'Get on board with your new everyday tee. Inspired by American regattas, our Hydra Sport collection brings a color blocked, nautical touch to your rotation. Lightweight and comfortable, this men’s T-shirt is made for casual, everyday wear. It has a standard fit and a classic T-shirt silhouette that pairs well with all your favorite sweats and shorts. Champion details like the bound neck and double-needle construction level up your T-shirt game. Regatta-inspired graphics at the left chest and full back sets your rotation up for smooth sailing.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `masohd` int(11) NOT NULL,
  `makh` int(11) NOT NULL,
  `ngaydat` date NOT NULL,
  `tongtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`masohd`, `makh`, `ngaydat`, `tongtien`) VALUES
(1, 3, '2023-10-16', 1500000),
(2, 3, '2023-10-16', 1500000),
(20, 6, '0000-00-00', 2500000),
(21, 6, '2024-02-21', 2000000),
(22, 6, '2024-02-21', 0),
(23, 6, '2024-02-21', 2000000),
(24, 6, '2024-02-22', 0),
(25, 6, '2024-02-22', 1000000),
(26, 6, '2024-02-22', 1000000),
(27, 6, '2024-02-22', 1000000),
(28, 6, '2024-02-29', 177),
(29, 6, '2024-03-13', 118),
(30, 6, '2024-03-13', 118),
(31, 6, '2024-03-13', 118),
(32, 6, '2024-03-19', 295),
(33, 6, '2024-03-19', 295),
(34, 6, '2024-03-20', 295),
(35, 6, '2024-03-20', 295),
(36, 6, '2024-03-20', 295),
(37, 6, '2024-03-20', 295),
(38, 6, '2024-03-20', 295),
(39, 6, '2024-03-20', 295),
(40, 6, '2024-03-20', 295),
(41, 6, '2024-03-20', 295),
(42, 6, '2024-03-20', 295),
(43, 6, '2024-03-20', 295),
(44, 6, '2024-03-20', 295),
(45, 6, '2024-03-20', 295),
(46, 6, '2024-03-20', 295),
(47, 6, '2024-03-20', 295),
(48, 6, '2024-03-20', 295),
(49, 6, '2024-03-20', 295),
(50, 6, '2024-03-20', 295),
(51, 6, '2024-03-20', 295),
(52, 6, '2024-03-20', 295),
(53, 6, '2024-03-20', 295),
(54, 6, '2024-03-20', 295),
(55, 6, '2024-03-20', 295),
(56, 6, '2024-03-20', 295),
(57, 6, '2024-03-20', 295),
(58, 6, '2024-03-20', 295),
(59, 6, '2024-03-20', 295),
(60, 6, '2024-03-20', 295),
(61, 6, '2024-03-20', 295),
(62, 6, '2024-03-20', 295),
(63, 6, '2024-03-20', 295),
(64, 6, '2024-03-20', 295),
(65, 6, '2024-03-20', 295),
(66, 6, '2024-03-20', 295),
(67, 6, '2024-03-20', 295),
(68, 6, '2024-03-20', 295),
(69, 6, '2024-03-20', 295),
(70, 6, '2024-03-20', 295),
(71, 6, '2024-03-20', 295),
(72, 6, '2024-03-20', 295),
(73, 6, '2024-03-20', 295),
(74, 6, '2024-03-20', 295),
(75, 6, '2024-03-20', 295),
(76, 6, '2024-03-20', 295),
(77, 6, '2024-03-20', 295),
(78, 6, '2024-03-20', 295),
(79, 6, '2024-03-20', 295),
(80, 6, '2024-03-20', 295),
(81, 6, '2024-03-20', 295),
(82, 6, '2024-03-20', 295),
(83, 6, '2024-03-20', 118),
(84, 6, '2024-03-20', 196),
(85, 8, '2024-03-21', 314),
(86, 8, '2024-03-21', 314),
(87, 8, '2024-03-21', 314),
(88, 8, '2024-03-21', 314),
(89, 8, '2024-03-21', 314),
(90, 8, '2024-03-21', 314),
(91, 8, '2024-03-21', 314),
(92, 8, '2024-03-21', 314);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `makh` int(11) NOT NULL,
  `tenkh` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `diachi` text DEFAULT NULL,
  `sodienthoai` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`makh`, `tenkh`, `username`, `matkhau`, `email`, `diachi`, `sodienthoai`) VALUES
(1, 'tú trần', 'tutran', '8f8e2909a8f683c31159ee51d593a642', 'tu@gmail.com', 'hcm', '9090789678'),
(2, 'minh minh', 'minhminh', '8f8e2909a8f683c31159ee51d593a642', 'minh@gmail.com', 'bình định', '90907896789'),
(3, 'teo', 'teoteo', '3ff19fad9f5844248f601ab23381cc88', 'teo123@gmail.com', 'hcm', '9090789698'),
(4, 'ý nhi', 'nhinhi', '87f038af05196e3dfa958a521f6f400e', 'ngvynhi.itc@gmail.com', 'thoại ngọc hầu', '9090789699'),
(8, 'Cao Ngọc Vĩ', 'phoenix', '43f528d7371b02153b1b49dc32ba6da5', 'caongocvi16022004@gmail.com', 'Thống Nhất', '0938032029');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `maloai` int(11) NOT NULL,
  `tenloai` varchar(50) NOT NULL,
  `idmenu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`maloai`, `tenloai`, `idmenu`) VALUES
(1, 'T-shirts', 3),
(2, 'Polos', 3),
(3, 'Hoodies', 3),
(5, 'Pants', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mausac`
--

CREATE TABLE `mausac` (
  `Idmau` int(11) NOT NULL,
  `mausac` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `mausac`
--

INSERT INTO `mausac` (`Idmau`, `mausac`) VALUES
(1, 'White'),
(2, 'Pink'),
(3, 'Blue'),
(4, 'Brown'),
(5, 'Black'),
(6, 'Green'),
(7, 'Gray');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `idnv` int(11) NOT NULL,
  `hoten` varchar(250) NOT NULL,
  `dia` text NOT NULL,
  `username` varchar(250) NOT NULL,
  `matkhau` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`idnv`, `hoten`, `dia`, `username`, `matkhau`) VALUES
(1, 'nguyễn hạo vy', 'hcm', 'admin', '123456'),
(2, 'Cao Ngọc Vĩ', 'hcm', 'phoenix', '123456');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sizegiay`
--

CREATE TABLE `sizegiay` (
  `Idsize` int(11) NOT NULL,
  `size` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sizegiay`
--

INSERT INTO `sizegiay` (`Idsize`, `size`) VALUES
(1, 'M'),
(2, 'L'),
(3, 'XL');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `star_rating`
--

CREATE TABLE `star_rating` (
  `idhanghoa` int(11) NOT NULL,
  `idkhachhang` int(11) NOT NULL,
  `rating` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan1`
--
ALTER TABLE `binhluan1`
  ADD PRIMARY KEY (`mabl`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`idcomment`);

--
-- Chỉ mục cho bảng `cthanghoa`
--
ALTER TABLE `cthanghoa`
  ADD PRIMARY KEY (`idhanghoa`,`idmau`,`idsize`);

--
-- Chỉ mục cho bảng `cthoadon`
--
ALTER TABLE `cthoadon`
  ADD PRIMARY KEY (`masohd`,`mahh`);

--
-- Chỉ mục cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`mahh`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`masohd`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makh`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`maloai`);

--
-- Chỉ mục cho bảng `mausac`
--
ALTER TABLE `mausac`
  ADD PRIMARY KEY (`Idmau`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`idnv`);

--
-- Chỉ mục cho bảng `sizegiay`
--
ALTER TABLE `sizegiay`
  ADD PRIMARY KEY (`Idsize`);

--
-- Chỉ mục cho bảng `star_rating`
--
ALTER TABLE `star_rating`
  ADD PRIMARY KEY (`idhanghoa`,`idkhachhang`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan1`
--
ALTER TABLE `binhluan1`
  MODIFY `mabl` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `idcomment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  MODIFY `mahh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `masohd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `makh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `loai`
--
ALTER TABLE `loai`
  MODIFY `maloai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `mausac`
--
ALTER TABLE `mausac`
  MODIFY `Idmau` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `idnv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `sizegiay`
--
ALTER TABLE `sizegiay`
  MODIFY `Idsize` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
