-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2020 at 06:12 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banhang`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitiethang`
--

CREATE TABLE `chitiethang` (
  `id_chitiet` int(11) NOT NULL,
  `tenchitiet` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `gia` int(11) DEFAULT NULL,
  `hinhanh` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `mota` longtext COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `thutu` int(11) DEFAULT NULL,
  `id_loai` int(11) DEFAULT NULL,
  `hangthietbi` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `chitiethang`
--

INSERT INTO `chitiethang` (`id_chitiet`, `tenchitiet`, `gia`, `hinhanh`, `mota`, `thutu`, `id_loai`, `hangthietbi`) VALUES
(1, 'iphone11 max', 27000000, 'iphone-xs-gold.png', 'cấu hình mạnh', 1, 4, 'Apple'),
(2, 'Macbook2017', 32100000, 'apple-macbook-air-mref2sa-a-i5-8gb-256gb-content-manhinhdmx-1-1-600x600.jpg', 'cấu hình bắt mắt', 2, 3, 'Apple'),
(3, 'iphone7', 12000000, 'iphone7.jpg', 'thiet ke bat mat', 3, 4, 'Apple'),
(4, 'iphone6s', 6000000, 'iphone6.jpg', 'ngon bổ re', 2, 4, 'Apple'),
(7, 'iPhone 11 Pro Max', 32000000, 'iphone-11-pro-max-512gb-gold-400x460.png', 'sản phẩm đẹp thiết kế bắt mắt ', 0, 4, 'Apple'),
(8, 'Samsung Galaxy A30s', 7500000, 'samsung-galaxy-a30s-green-400x460.png', 'đẹp không nói gì thêm', 0, 4, 'samsung'),
(9, 'Samsung Galaxy Note 10', 12000000, 'samsung-galaxy-note-10-pink-400x460.png', 'thiết kế bắt mắt người dùng và dễ trải nghiệm', 0, 4, 'samsung'),
(10, 'Samsung Galaxy Note 10+', 22000000, 'samsung-galaxy-note-10-plus-white-400x460.png', 'đẹp', 0, 4, 'samsung'),
(11, 'Dell Vostro 14 3481', 12500000, 'dell-vostro-3468-i3-7020u-70161069-15-600x600.jpg', 'cấu hình mậng trang bị chio xủ lý i5', 0, 3, 'Dell'),
(12, 'Dell Vostro 3468', 15000000, 'dell-vostro-3481-core-i3-7020u-6-1-1-1-600x600.jpg', 'cấu hình mạng mẻ', 0, 3, 'Dell'),
(13, 'Acer Aspire 3 A315 54K 30FK', 9500000, 'acer-swift-sf114-32-c7u5-n4000-4gb-64gb-14f-win10-17-600x600.jpg', 'cấu hình ổn ', 0, 3, 'Acer'),
(14, 'Acer Swift 1 SF114 32', 11520000, 'acer-swift-sf114-32-p8ts-n5000-4gb-64gb-14f-win10-16-600x600.jpg', 'đẹp', 0, 3, 'Acer'),
(15, 'Macbook Air 2019', 46000000, 'apple-macbook-pro-touch-2019-i5-14ghz-8gb-128gb-m-2-2-600x600.jpg', 'ngon', 0, 3, 'Apple'),
(16, 'Macbook Pro Touch 2019', 47500000, 'apple-macbook-air-mqd32sa-a-i5-5350u-600x600.jpg', 'dẹpđepk', 0, 3, 'Apple'),
(17, 'OPPO Reno2', 9000000, 'oppo-reno2-black-mtp1-400x460.png', 'chất', 0, 4, 'Oppo'),
(18, 'OPPOA5s', 7000000, 'oppo-a5s-red-400x460.png', 'oppo sơn tùng ', 0, 4, 'Oppo'),
(19, 'Asus VivoBook', 15000000, 'asus-vivobook-a412f-i3-8145u-4gb-32gb-512gb-win10-600x600.jpg', 'scv', 0, 3, 'Asus');

-- --------------------------------------------------------

--
-- Table structure for table `chitietoder`
--

CREATE TABLE `chitietoder` (
  `id` int(11) NOT NULL,
  `id_khach` int(11) DEFAULT NULL,
  `masp` int(11) DEFAULT NULL,
  `tensp` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `gia` float DEFAULT NULL,
  `soluong` int(11) DEFAULT NULL,
  `tongtien` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `chitietoder`
--

INSERT INTO `chitietoder` (`id`, `id_khach`, `masp`, `tensp`, `gia`, `soluong`, `tongtien`) VALUES
(10, 25, 1, 'iphone11 max', 27000000, 1, 27000000),
(11, 26, 3, 'iphone7', 12000000, 1, 12000000),
(12, 27, 5, 'Samsung Galaxy A30s', 11000000, 1, 11000000),
(13, 27, 2, 'Macbook2017', 32100000, 1, 32100000),
(14, 28, 5, 'Samsung Galaxy A30s', 11000000, 1, 11000000),
(15, 29, 1, 'iphone11 max', 27000000, 1, 27000000),
(16, 30, 2, 'Macbook2017', 32100000, 1, 32100000);

-- --------------------------------------------------------

--
-- Table structure for table `dangky`
--

CREATE TABLE `dangky` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `diachi` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `sdt` int(11) DEFAULT NULL,
  `gmail` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `dangky`
--

INSERT INTO `dangky` (`id`, `username`, `password`, `diachi`, `sdt`, `gmail`) VALUES
(4, 'lâm văn bình', '325', 'qưed', 0, 'lamvantan03@g'),
(5, 'LamDung', '$2y$10$J.Yw8JU4dJcHku41q2VL0OjFuUIlvC2p.Ky0iixmG0uZBeKX8kdNC', 'sd', 44, 'lamvantan@jj'),
(6, 'vantan123', 'lamvantan', 'Thôn 1 thái sơn điện tiến điện bàn quảng nam', 792219129, 'lamvantan03@gmail.com'),
(7, 'kuteo', '123', '29', 792219129, 'lamvantan03@gmail.com'),
(8, 'rose', 'aye', 'korea', 792219129, 'vantan291@yahoo.com'),
(9, 'lisa', 'yêum', 'quang nam', 902072887, 'lamvantan03@g');

-- --------------------------------------------------------

--
-- Table structure for table `loaihang`
--

CREATE TABLE `loaihang` (
  `id_loai` int(11) NOT NULL,
  `tenthietbi` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `thutu` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `loaihang`
--

INSERT INTO `loaihang` (`id_loai`, `tenthietbi`, `thutu`) VALUES
(3, 'LapTop', 1),
(4, 'Điện Thoại', 2),
(5, 'Ablet', 3),
(6, 'Phụ Kiện Khác', 4),
(7, 'Airport', 5);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'lamvantan', '123');

-- --------------------------------------------------------

--
-- Table structure for table `oder`
--

CREATE TABLE `oder` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `diachi` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `sdt` int(12) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `thanhtoan` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `oder`
--

INSERT INTO `oder` (`id`, `name`, `diachi`, `sdt`, `email`, `thanhtoan`) VALUES
(25, 'lâm văn tân', '29', 792219129, 'lam@123', 'Trả Khi Giao Hàng Tới'),
(26, 'lê nguyễn thịnh', 'hòa tiến - hòa vang - đà nẵng', 792219129, 'lamvantan03@gmail.com', 'Trả Khi Giao Hàng Tới'),
(27, 'lâm thị dung', 'quảng nam city', 782219129, 'lamvantan03@gmail.com', 'Trả Khi Giao Hàng Tới'),
(28, 'tuấn', 'quang nam', 792219129, 'lamvantan03@gmail.com', 'Trả Khi Giao Hàng Tới'),
(29, 'lâm văn tân', 'quang nam', 792219129, 'lamvantan03@gmail.com', 'Trả Khi Giao Hàng Tới'),
(30, 'rose', 'korea', 792219129, 'vantan291@yahoo.com', 'Trả Bằng Thẻ Ví');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitiethang`
--
ALTER TABLE `chitiethang`
  ADD PRIMARY KEY (`id_chitiet`);

--
-- Indexes for table `chitietoder`
--
ALTER TABLE `chitietoder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dangky`
--
ALTER TABLE `dangky`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loaihang`
--
ALTER TABLE `loaihang`
  ADD PRIMARY KEY (`id_loai`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oder`
--
ALTER TABLE `oder`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitiethang`
--
ALTER TABLE `chitiethang`
  MODIFY `id_chitiet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `chitietoder`
--
ALTER TABLE `chitietoder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `dangky`
--
ALTER TABLE `dangky`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `loaihang`
--
ALTER TABLE `loaihang`
  MODIFY `id_loai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `oder`
--
ALTER TABLE `oder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
