-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2025 at 08:42 PM
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
(1, 'Bánh ngon tuyệt vời, cốt bánh mềm mịn.', 2, 1, '08:30:00am 01/12/2025'),
(2, 'Giao hàng nhanh, đóng gói cẩn thận.', 5, 3, '09:15:20am 01/12/2025'),
(3, 'Hơi ngọt so với khẩu vị của mình.', 8, 5, '10:00:00am 02/12/2025'),
(4, 'Bánh kem bắp rất thơm, sẽ ủng hộ tiếp.', 3, 10, '02:30:45pm 02/12/2025'),
(5, 'Shop tư vấn nhiệt tình, 10 điểm.', 12, 15, '04:20:10pm 03/12/2025'),
(6, 'Bánh Tiramisu chuẩn vị Ý, rất ngon.', 15, 20, '08:45:00am 04/12/2025'),
(7, 'Macaron màu đẹp nhưng hơi bé.', 20, 35, '09:30:30am 04/12/2025'),
(8, 'Bánh mì hoa cúc thơm nức mũi.', 7, 40, '11:11:11am 05/12/2025'),
(9, 'Bánh sinh nhật trang trí đẹp lắm shop ơi.', 25, 2, '01:00:00pm 05/12/2025'),
(10, 'Sẽ giới thiệu cho bạn bè.', 10, 8, '03:45:22pm 05/12/2025'),
(11, 'Giá cả hợp lý, chất lượng tốt.', 4, 12, '07:30:00pm 05/12/2025'),
(12, 'Tuyệt vời!', 29, 45, '08:00:00am 06/12/2025'),
(13, 'Bánh bông lan trứng muối nhiều sốt, ngon.', 18, 25, '09:20:15am 06/12/2025'),
(14, 'Donut socola hơi bị vỡ lớp phủ.', 6, 30, '10:10:10am 06/12/2025'),
(15, 'Yêu shop quá đi <3', 22, 18, '02:22:22pm 06/12/2025');

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
(1, 1, 1, 1, 250000),
(2, 1, 5, 2, 45000),
(3, 2, 10, 1, 300000),
(4, 3, 15, 5, 20000),
(5, 3, 20, 1, 65000),
(6, 4, 25, 2, 80000),
(7, 4, 30, 3, 25000),
(8, 4, 35, 1, 150000),
(9, 5, 40, 1, 90000),
(10, 5, 45, 2, 35000),
(11, 6, 2, 1, 280000),
(12, 6, 4, 1, 40000),
(13, 7, 8, 2, 320000),
(14, 8, 12, 1, 55000),
(15, 8, 14, 4, 15000);

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`, `deleted`) VALUES
(1, 'Bánh Kem Sinh Nhật', 0),
(2, 'Bánh Mousse', 0),
(3, 'Cheesecake', 0),
(4, 'Tiramisu', 0),
(5, 'Bánh Bông Lan', 0),
(6, 'Donut', 0),
(7, 'Macaron', 0),
(8, 'Bánh Mì Ngọt', 0),
(9, 'Cupcake', 0),
(10, 'Bánh Quy (Cookies)', 0);

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
(1, 'Nguyễn Văn A', '123 Đường Láng, Hà Nội', '0912345678', '2025-12-01 10:00:00', 340000, 1, 4),
(2, 'Trần Thị B', '456 Cầu Giấy, Hà Nội', '0987654321', '2025-12-01 14:30:00', 300000, 0, 4),
(3, 'Lê Văn C', '789 Kim Mã, Hà Nội', '0909090909', '2025-12-02 09:15:00', 165000, 1, 3),
(4, 'Phạm Thị D', '12 Hàng Bài, Hà Nội', '0911223344', '2025-12-02 16:45:00', 385000, 0, 2),
(5, 'Hoàng Văn E', '34 Phố Huế, Hà Nội', '0922334455', '2025-12-03 11:20:00', 160000, 1, 1),
(6, 'Vũ Thị F', '56 Trần Hưng Đạo, Hà Nội', '0933445566', '2025-12-04 08:00:00', 320000, 0, 0),
(7, 'Đặng Văn G', '78 Bà Triệu, Hà Nội', '0944556677', '2025-12-05 13:10:00', 640000, 1, 0),
(8, 'Bùi Thị H', '90 Nguyễn Trãi, Hà Nội', '0955667788', '2025-12-06 15:50:00', 115000, 0, 0);

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
(1, 'admin', '123', 'admin@bakery.com', 'Hanoi', '0901234567', 1),
(2, 'nguyenvana', '123', 'a@gmail.com', 'Hanoi', '0911111111', 0),
(3, 'tranthib', '123', 'b@gmail.com', 'Hanoi', '0922222222', 0),
(4, 'levanc', '123', 'c@gmail.com', 'Danang', '0933333333', 0),
(5, 'phamthid', '123', 'd@gmail.com', 'HCMC', '0944444444', 0),
(6, 'hoangvane', '123', 'e@gmail.com', 'Haiphong', '0955555555', 0),
(7, 'vuthif', '123', 'f@gmail.com', 'Cantho', '0966666666', 0),
(8, 'dangvang', '123', 'g@gmail.com', 'Hue', '0977777777', 0),
(9, 'buithih', '123', 'h@gmail.com', 'Nhatrang', '0988888888', 0),
(10, 'dovanyi', '123', 'i@gmail.com', 'Dalat', '0999999999', 0),
(11, 'ngothik', '123', 'k@gmail.com', 'Hanoi', '0900000001', 0),
(12, 'lyvanl', '123', 'l@gmail.com', 'HCMC', '0900000002', 0),
(13, 'trinhthim', '123', 'm@gmail.com', 'Danang', '0900000003', 0),
(14, 'maivann', '123', 'n@gmail.com', 'Hanoi', '0900000004', 0),
(15, 'caothio', '123', 'o@gmail.com', 'HCMC', '0900000005', 0),
(16, 'phungvanp', '123', 'p@gmail.com', 'Haiphong', '0900000006', 0),
(17, 'duongthiq', '123', 'q@gmail.com', 'Cantho', '0900000007', 0),
(18, 'luuvanr', '123', 'r@gmail.com', 'Hanoi', '0900000008', 0),
(19, 'thaithis', '123', 's@gmail.com', 'HCMC', '0900000009', 0),
(20, 'lamvant', '123', 't@gmail.com', 'Danang', '0900000010', 0),
(21, 'chuthiv', '123', 'v@gmail.com', 'Hanoi', '0900000011', 0),
(22, 'truongvanw', '123', 'w@gmail.com', 'HCMC', '0900000012', 0),
(23, 'dinhthix', '123', 'x@gmail.com', 'Haiphong', '0900000013', 0),
(24, 'kiềuvany', '123', 'y@gmail.com', 'Hanoi', '0900000014', 0),
(25, 'bachthiz', '123', 'z@gmail.com', 'HCMC', '0900000015', 0),
(26, 'huvana1', '123', 'a1@gmail.com', 'Danang', '0900000016', 0),
(27, 'khanhthib1', '123', 'b1@gmail.com', 'Hanoi', '0900000017', 0),
(28, 'nhanvanc1', '123', 'c1@gmail.com', 'HCMC', '0900000018', 0),
(29, 'omthid1', '123', 'd1@gmail.com', 'Haiphong', '0900000019', 0),
(30, 'quachvane1', '123', 'e1@gmail.com', 'Cantho', '0900000020', 0),
(31, 'sontungmtp', '123', 'tung@gmail.com', 'Thaibinh', '0900000021', 0);

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
  `iddm` int(11) NOT NULL,
  `deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `price`, `img`, `mota`, `luotxem`, `iddm`, `deleted`) VALUES
(1, 'Bánh Kem Dâu Tây Cao Cấp', 250000, 'anh_1.jpg', 'Lớp kem béo ngậy kết hợp dâu tây tươi Đà Lạt.', 100, 1, 0),
(2, 'Bánh Kem Socola Bỉ', 280000, 'anh_2.jpg', 'Hương vị socola đắng nguyên chất.', 120, 1, 0),
(3, 'Bánh Kem Bắp Phô Mai', 220000, 'anh_3.jpg', 'Vị ngọt thanh của bắp và béo của phô mai.', 90, 1, 0),
(4, 'Bánh Kem Matcha Nhật Bản', 260000, 'anh_4.jpg', 'Bột trà xanh Nhật Bản thơm mát.', 85, 1, 0),
(5, 'Mousse Chanh Dây', 45000, 'anh_5.jpg', 'Chua chua ngọt ngọt, tan ngay trong miệng.', 200, 2, 0),
(6, 'Mousse Xoài Nhiệt Đới', 45000, 'anh_6.jpg', 'Hương xoài chín mọng, mát lạnh.', 180, 2, 0),
(7, 'Mousse Dâu Tằm', 48000, 'anh_7.jpg', 'Màu sắc bắt mắt, vị ngon khó cưỡng.', 150, 2, 0),
(8, 'Mousse Socola Hạt Dẻ', 50000, 'anh_8.jpg', 'Sự kết hợp hoàn hảo giữa socola và hạt dẻ.', 160, 2, 0),
(9, 'Cheesecake New York', 60000, 'anh_9.jpg', 'Phô mai nướng kiểu Mỹ truyền thống.', 110, 3, 0),
(10, 'Cheesecake Oreo', 55000, 'anh_10.jpg', 'Đế bánh Oreo giòn rụm.', 130, 3, 0),
(11, 'Cheesecake Việt Quất', 65000, 'anh_11.jpg', 'Mứt việt quất chua nhẹ trên lớp phô mai.', 140, 3, 0),
(12, 'Cheesecake Chanh', 55000, 'anh_12.jpg', 'Thơm hương chanh vàng tươi mát.', 105, 3, 0),
(13, 'Tiramisu Cổ Điển', 55000, 'anh_13.jpg', 'Hương vị Ý với cafe và rượu rum.', 210, 4, 0),
(14, 'Tiramisu Trà Xanh', 58000, 'anh_14.jpg', 'Biến tấu mới lạ với bột matcha.', 190, 4, 0),
(15, 'Bánh Bông Lan Trứng Muối', 40000, 'anh_15.jpg', 'Sốt phô mai chảy và trứng muối mặn mà.', 300, 5, 0),
(16, 'Bánh Bông Lan Phô Mai Nhật', 70000, 'anh_16.jpg', 'Núng nính, mềm như mây.', 250, 5, 0),
(17, 'Roll Cake Vani', 35000, 'anh_17.jpg', 'Bánh cuộn kem tươi vani đơn giản mà ngon.', 120, 5, 0),
(18, 'Roll Cake Socola', 38000, 'anh_18.jpg', 'Bánh cuộn vị socola đậm đà.', 115, 5, 0),
(19, 'Donut Socola Cốm', 20000, 'anh_19.jpg', 'Bánh vòng phủ socola và cốm màu.', 400, 6, 0),
(20, 'Donut Dâu Hồng', 20000, 'anh_20.jpg', 'Màu hồng dễ thương vị dâu tây.', 380, 6, 0),
(21, 'Donut Đường Phấn', 18000, 'anh_21.jpg', 'Đơn giản với lớp đường bột trắng.', 350, 6, 0),
(22, 'Donut Hạnh Nhân', 25000, 'anh_22.jpg', 'Phủ hạnh nhân lát nướng giòn.', 320, 6, 0),
(23, 'Macaron Set 6', 120000, 'anh_23.jpg', 'Hộp 6 bánh macaron nhiều vị.', 90, 7, 0),
(24, 'Macaron Set 12', 230000, 'anh_24.jpg', 'Hộp quà tặng 12 bánh sang trọng.', 80, 7, 0),
(25, 'Macaron Vị Hoa Hồng', 22000, 'anh_25.jpg', 'Hương thơm hoa hồng quyến rũ.', 100, 7, 0),
(26, 'Macaron Vị Pistachio', 25000, 'anh_26.jpg', 'Vị hạt dẻ cười bùi béo.', 110, 7, 0),
(27, 'Bánh Mì Hoa Cúc', 85000, 'anh_27.jpg', 'Bánh mì Pháp thớ dai, thơm bơ.', 150, 8, 0),
(28, 'Bánh Sừng Bò (Croissant)', 30000, 'anh_28.jpg', 'Ngàn lớp giòn rụm thơm bơ.', 200, 8, 0),
(29, 'Bánh Mì Bơ Tỏi Phô Mai', 45000, 'anh_29.jpg', 'Hương tỏi nướng và phô mai ngập tràn.', 220, 8, 0),
(30, 'Bánh Mì Nhân Custard', 25000, 'anh_30.jpg', 'Nhân kem trứng chảy béo ngậy.', 180, 8, 0),
(31, 'Cupcake Red Velvet', 35000, 'anh_31.jpg', 'Màu đỏ nhung quyến rũ.', 140, 9, 0),
(32, 'Cupcake Vani Kem Bơ', 30000, 'anh_32.jpg', 'Trang trí hoa kem bơ đẹp mắt.', 130, 9, 0),
(33, 'Cupcake Chocolate Chip', 32000, 'anh_33.jpg', 'Bánh xốp ẩm với hạt socola.', 150, 9, 0),
(34, 'Cupcake Cà Rốt', 35000, 'anh_34.jpg', 'Healthy với cà rốt và hạt óc chó.', 100, 9, 0),
(35, 'Cookies Hạnh Nhân', 40000, 'anh_35.jpg', 'Túi 200g bánh quy hạnh nhân.', 170, 10, 0),
(36, 'Cookies Yến Mạch', 45000, 'anh_36.jpg', 'Giàu chất xơ, tốt cho sức khỏe.', 160, 10, 0),
(37, 'Cookies Socola Chip', 42000, 'anh_37.jpg', 'Bánh quy giòn tan với socola chip.', 190, 10, 0),
(38, 'Bánh Lưỡi Mèo', 35000, 'anh_38.jpg', 'Giòn tan, thơm mùi bơ sữa.', 180, 10, 0),
(39, 'Tart Trứng KFC', 15000, 'anh_39.jpg', 'Vỏ ngàn lớp, nhân trứng nướng.', 500, 5, 0),
(40, 'Tart Hoa Quả', 45000, 'anh_40.jpg', 'Đế tart giòn chứa kem và trái cây tươi.', 120, 5, 0),
(41, 'Bánh Crepe Sầu Riêng', 80000, 'anh_41.jpg', 'Ngập tràn sầu riêng tươi.', 200, 2, 0),
(42, 'Bánh Crepe Xoài', 70000, 'anh_42.jpg', 'Lớp vỏ mỏng dai bọc kem xoài.', 180, 2, 0),
(43, 'Bánh Pía Sóc Trăng', 60000, 'anh_43.jpg', 'Đặc sản nhân đậu xanh sầu riêng trứng muối.', 100, 8, 0),
(44, 'Bánh Trung Thu Thập Cẩm', 120000, 'anh_44.jpg', 'Vị truyền thống đậm đà.', 50, 1, 0),
(45, 'Bánh Trung Thu Đậu Xanh', 100000, 'anh_45.jpg', 'Nhân đậu xanh mịn màng.', 60, 1, 0),
(46, 'Bánh Su Kem (Choux)', 30000, 'anh_46.jpg', 'Hộp 6 chiếc su kem vỏ giòn.', 250, 5, 0),
(47, 'Opera Cake', 65000, 'anh_47.jpg', 'Nhiều lớp hương vị cafe và socola.', 90, 4, 0),
(48, 'Black Forest', 300000, 'anh_48.jpg', 'Rừng đen huyền bí với cherry và rượu.', 80, 1, 0),
(49, 'Bánh Mì Gối Sandwich', 25000, 'anh_49.jpg', 'Mềm mịn cho bữa sáng.', 300, 8, 0),
(50, 'Bánh Mì Đen Nguyên Cám', 35000, 'anh_50.jpg', 'Dành cho người ăn kiêng.', 150, 8, 0);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
