-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2025 at 06:38 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duanbanhngot`
--

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idpro` int(11) NOT NULL,
  `ngaybinhluan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `iduser`, `idpro`, `ngaybinhluan`) VALUES
(1, 'dcsd', 0, 0, '03:50:18pm 02/08/2024'),
(2, '1111', 0, 0, '03:50:38pm 02/08/2024'),
(3, '1111', 0, 0, '03:53:10pm 02/08/2024'),
(4, 'San pham dep qua troi, shop 10 diem.', 0, 28, '03:54:07pm 02/08/2024'),
(5, 'San pham dep qua troi, shop 1 diem.', 0, 26, '04:00:35pm 02/08/2024'),
(6, 'San pham dep qua troi, shop 10 diem.', 0, 34, '04:08:43pm 02/08/2024'),
(7, '2222', 0, 34, '04:32:15pm 02/08/2024'),
(8, 'giay dep', 0, 32, ''),
(9, 'giay dep', 0, 33, ''),
(10, 'giay dep', 0, 28, ''),
(11, '333', 0, 28, ''),
(12, 'szdgzsdgds', 0, 33, ''),
(13, 'dsgf', 0, 31, ''),
(14, 'giay dep', 0, 31, '04:52:48pm 02/08/2024'),
(15, 'vai ca lon', 0, 26, '02:43:39am 03/08/2024'),
(16, 'dep qua shop oi', 0, 25, '12:11:37pm 03/08/2024'),
(17, 'giay dep', 0, 33, '12:13:36pm 03/08/2024'),
(18, 'dep qua shop oi', 0, 33, '12:22:37pm 03/08/2024'),
(19, 'dep qua shop oi', 0, 29, '12:58:02pm 03/08/2024'),
(20, 'a', 0, 34, '05/08/2024');

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `id` int(11) NOT NULL,
  `id_hoadon` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`id`, `id_hoadon`, `id_sanpham`, `soluong`, `gia`) VALUES
(1, 3, 32, 5, 2000),
(2, 3, 34, 6, 20001),
(3, 3, 33, 3, 2000),
(4, 3, 26, 2, 11111),
(5, 3, 29, 1, 2000),
(6, 4, 32, 5, 2000),
(7, 4, 34, 6, 20001),
(8, 4, 33, 3, 2000),
(9, 4, 26, 2, 11111),
(10, 4, 29, 1, 2000),
(11, 4, 27, 1, 170000),
(12, 5, 32, 5, 2000),
(13, 5, 34, 6, 20001),
(14, 5, 33, 3, 2000),
(15, 5, 26, 2, 11111),
(16, 5, 29, 1, 2000),
(17, 5, 27, 1, 170000),
(18, 5, 31, 1, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`) VALUES
(25, 'Túi sách'),
(26, 'Va li'),
(27, 'Điện thoại'),
(28, 'Máy tính để bàn'),
(29, 'Đông hồ'),
(30, 'Điện thoại'),
(31, 'trung'),
(32, 'trung'),
(33, 'dcm'),
(34, 'trung');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `id` int(11) NOT NULL,
  `tenkhachhang` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `sdt` varchar(12) NOT NULL,
  `ngaygiodat` datetime NOT NULL DEFAULT current_timestamp(),
  `tongtien` int(11) NOT NULL,
  `pttt` int(11) NOT NULL,
  `trangthai` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`id`, `tenkhachhang`, `diachi`, `sdt`, `ngaygiodat`, `tongtien`, `pttt`, `trangthai`) VALUES
(3, 'Chiến', 'HP', '123123123', '2024-08-09 11:09:51', 160228, 0, 1),
(4, 'Lượng', 'HP', '0123345655', '2024-08-05 11:11:44', 330228, 1, 1),
(5, 'Hoàng', 'HP', '0123123', '2024-08-05 11:12:22', 332228, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(50) DEFAULT NULL,
  `tel` varchar(50) DEFAULT NULL,
  `role` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`id`, `user`, `pass`, `email`, `address`, `tel`, `role`) VALUES
(1, 'Nam', '123', 'chiennmpp03120@gmail.com', 'Hai Duong', '0377153845', 0),
(2, 'admin', '321', 'admin@gmail.com', 'Hai Phong', '03939393933', 1),
(7, 'tuan', '123', 'tuan123@gmail.com', 'Hai Phong', '0377253890', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `mota` varchar(255) DEFAULT NULL,
  `luotxem` int(11) NOT NULL,
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `price`, `img`, `mota`, `luotxem`, `iddm`) VALUES
(25, 'giay khen', 2000, 'dong ho2.jpg', 'mmmmm', 0, 29),
(26, 'Yen', 11111, 'Screenshot 2024-07-24 132630.png', 'xinh', 0, 30),
(27, 'Bongmizz', 170000, 'OIP.jpg', 'tt', 0, 27),
(28, 'Dong ho', 2000, 'dong ho2.jpg', 'rrr', 0, 26),
(29, 'Giay da', 2000, 'Screenshot 2024-07-24 133807.png', 'sds', 0, 30),
(31, 'Giay 7 mau', 2000, 'Screenshot 2024-07-24 133856.png', 'asa', 0, 27),
(32, 'Dong ho', 2000, 'Screenshot 2024-07-24 133953.png', '', 0, 25),
(33, 'Dong ho', 2000, 'Screenshot 2024-07-24 133944.png', '', 0, 25),
(34, 'Dong ho', 20001, 'Screenshot 2024-07-24 133910.png', '', 0, 26);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_sanpham_danhmuc` (`iddm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `lk_sanpham_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
