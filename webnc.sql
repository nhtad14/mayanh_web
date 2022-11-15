-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 17, 2021 lúc 04:46 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webnc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`username`, `password`, `email`) VALUES
('duy', '123asd', 'duy98@gmail.com'),
('khanh', 'duy456', 'khanhdrm@gmail.com'),
('nhat', 'nhat123', 'lnhat3333@gmail.com'),
('tuấn anh', '123', 'duy98@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dathang`
--

CREATE TABLE `dathang` (
  `id` int(11) NOT NULL,
  `tenkh` varchar(50) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dc` varchar(50) NOT NULL,
  `note` varchar(255) NOT NULL,
  `tinhtrang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `dathang`
--

INSERT INTO `dathang` (`id`, `tenkh`, `phone`, `email`, `dc`, `note`, `tinhtrang`) VALUES
(26, 'PHẠM VĂN NHẬT ', '0971918645', 'lnhat3333@gmail.com', 'Trực Đại -Trực Ninh-Nam Định', 'helo shop', 'Khách hàng hủy'),
(27, 'Trần Ngọc Bảo Duy', '0971918645', 'duy3333@gmail.com', 'Nam Đàn-Nghệ An', '123', 'Chưa xử lí'),
(28, 'Phạm Văn Minh', '0971826984', 'minhhien793@gmail.com', 'Mê Linh _Hà Nội', 'nhanh giúp em', 'Đã xử lí'),
(29, 'Lưu Duy Khánh', '0363890327', 'khánh98@gmail.com', 'Mê Linh _Hà Nội', 'Thanks shop', 'Chưa xử lí'),
(30, 'Hoàng Văn Toàn', '0363890327', 'Toàn@gmail.com', 'Bắc Ninh', 'Hàng dễ vỡ xin nhẹ tay', 'Đã xử lí'),
(31, 'Phạm Thị Hoa', '0359418575', 'hoa', 'Trực Đại -Trực Ninh-Nam Định', 'Thánk shop nhiều', 'Khách hàng hủy');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `idkh` int(50) NOT NULL,
  `tenkh` varchar(50) NOT NULL,
  `tk` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`idkh`, `tenkh`, `tk`, `password`, `phone`, `address`) VALUES
(1, 'PHẠM VĂN NHẬT ', 'nhat123', '123', '036265684', 'nam định'),
(2, 'Lưu Duy Khánh', 'khanh54', '5465', '087458451', 'Mê Linh-Ha Noi'),
(3, 'NGUYEN VAN BA', 'LONG', '123456', '0971918645', 'đống đa hà nội'),
(4, 'Phạm Bảo Long', 'Long65', '5516', '056416574', 'Hưng Yên'),
(20, 'Phạm Văn Minh', 'minh1234', '1234567', '0363890326', 'Hải Hậu');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_id`
--

CREATE TABLE `order_id` (
  `id` int(11) NOT NULL,
  `tensp` varchar(50) NOT NULL,
  `image` char(255) NOT NULL,
  `sl` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `order_id`
--

INSERT INTO `order_id` (`id`, `tensp`, `image`, `sl`) VALUES
(26, 'CANON EOS 77D + KIT 18-135MM IS STM', '1.JPG', 1),
(26, 'CANON EOS 90D BODY (CHÍNH HÃNG)', '2.JPG', 1),
(27, 'CANON EOS 77D + KIT 18-135MM IS STM', '1.JPG', 1),
(27, 'NIKON FA GOLD LEN 50MM 1.4 AIS LIMITED', '7.JPEG', 1),
(28, 'CANON EOS 77D + KIT 18-135MM IS STM', '1.JPG', 1),
(28, 'CANON EOS 800D KIT 18-55MM STM', '4.JPG', 1),
(28, 'SIGMA SD QUATTRO DIGITAL CAMERA + 30MM', '5.JPG', 1),
(29, 'NIKON D5600 KIT AF-P 18-55MM VR', '8.JPG', 1),
(29, 'SONY ALPHA A6500 + SONY E 18-135MM', '9.JPG', 1),
(29, 'SONY ALPHA A6500 + SONY E 18-135MM F/3.5-5.6 OSS', '6.JPG', 1),
(29, 'CANON EOS 800D KIT 18-55MM STM', '4.JPG', 1),
(30, 'CANON EOS 90D BODY (CHÍNH HÃNG)', '2.JPG', 2),
(30, 'CANON EOS 77D + KIT 18-135MM IS STM', '1.JPG', 1),
(30, 'NIKON D5600 KIT AF-P 18-55MM VR', '8.JPG', 2),
(31, 'CANON EOS 77D + KIT 18-135MM IS', '1.jpg', 1),
(31, 'CANON EOS 90D BODY (CHÍNH HÃNG)', '2.jpG', 1),
(31, 'CANON EOS 800D KIT 18-55MM STM', '4.JPG', 1),
(31, 'SIGMA SD QUATTRO DIGITAL CAMERA + 30MM', '5.JPG', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `idsp` int(50) NOT NULL,
  `tensp` varchar(50) NOT NULL,
  `image` char(255) NOT NULL,
  `price` float NOT NULL,
  `information` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`idsp`, `tensp`, `image`, `price`, `information`) VALUES
(1, 'CANON EOS 77D + KIT 18-135MM IS', '1.jpg', 14000000, '- Cảm biến CMOS APS-C 24.2MP<br>\r\n- Bộ xử lý hình ảnh DIGIC 7<br>\r\n- Màn hình LCD cảm ứng đa điểm 3.0\" 1.04m-Dot<br>\r\n- Quay phim Full HD 1080p 60fps<br>\r\n- Tốc độ chụp liên tiếp lên đến 6fps<br>\r\n- Lấy nét tự động theo pha 45 điểm<br>\r\n- ISO 100-25600 (mở rộng đến 51200)<br>\r\n- Động cơ lấy nét tự động Dual Pixel CMOS<br>\r\n- Màn hình LCD phụ phía trên<br>\r\n- Tích hợp kết nối Wi-Fi với NFC, Bluetooth<br>\r\n- Ống kính EF-S 18-135mm f/3.5-5.6 IS USM<br>'),
(2, 'CANON EOS 90D BODY (CHÍNH HÃNG)', '2.jpG', 22000000, '- Cảm biến: APS-C CMOS 32.5MP<br>\r\n- Bộ xử lý hình ảnh: Digic 8<br>\r\n- Chụp liên tiếp: 10fps<br>\r\n- Dải ISO: 100-25600<br>\r\n- Quay video: UHD 4K30p & Full HD 120p<br>\r\n- Màn hình cảm ứng Vari-Angle<br>\r\n- Tốc độ màn trập: 1/16000<br>\r\n- Hệ thống lấy nét tự động 45 điểm<br>\r\n- Dual Pixel CMOS AF với 5481 điểm AF<br>\r\n- Tích hợp Wifi và Bluetooth<br>\r\n- Cảm biến đo sáng 220000-Pixel AE<br>\r\n- Kích thước: 139.7 x 104.14 x 76.2 mm<br>\r\n- Trọng lượng: 701g<br>'),
(4, 'CANON EOS 800D KIT 18-55MM STM', '4.JPG', 12700000, '- Cảm biến CMOS APS-C 24.2MP<br>\r\n- Bộ xử lý hình ảnh DIGIC 7<br>\r\n- Màn hình LCD 3\" 1.04m-Dot<br>\r\n- Quay phim Full HD 1080p 60fps<br>\r\n- Tốc độ chụp liên tiếp lên đến 6fps<br>\r\n- ISO 100-25600 (mở rộng đến 51200)<br>\r\n- Động cơ lấy nét tự động Dual Pixel CMOS<br>\r\n- Tích hợp kết nối Wi-Fi với NFC<br>'),
(5, 'SIGMA SD QUATTRO DIGITAL CAMERA + 30MM', '5.JPG', 12800000, 'Cảm biến ảnh CMOS APS-C Foveon X3 Quattro 29MP (1.5x Crop)<br>\r\nBộ xử lý hình ảnh Dual TRUE III Imaging<br>\r\nNgàm ống kính Sigma SA Bayonet<br>\r\nỐng ngắm điện tử: 2.36 triệu điểm<br>\r\nMàn hình LCD 3.0\"<br>\r\nHệ thống lấy nét tự động theo Phase & Contrast-Detect Hybrid<br>\r\nDải nhạy sáng ISO 100 - 6400<br>\r\nChụp liên tục 3.6 fps<br>\r\nNút bấm điều chỉnh nhanh Quick Set, Lock Switch<br>\r\nCơ chế hỗ trợ lấy nét Focus Peaking<br>\r\nLossless Compressed Raw<br>'),
(6, 'SONY ALPHA A6500 + SONY E 18-135MM F/3.5-5.6 OSS', '6.JPG', 24200000, '- Cảm biến APS-C Exmor CMOS 24.2 MPs<br>\r\n- Bộ xử lý ảnh BIONZ X<br>\r\n- Chống rung 5 trục, lấy nét theo pha 4D 425 điểm<br>\r\n- Tốc độ chụp liên tục 11 fps, ISO tới 51.200<br>\r\n- Kính ngắm điện tử XGA OLED EVF độ phân giải 2.36 MPs<br>\r\n- Quay phim UHD 4K<br>\r\n- Màn hình LCD cảm ứng lật xoay 3.0\"<br>\r\n- Kết nối Wi-Fi và NFC<br>'),
(7, 'NIKON FA GOLD LEN 50MM 1.4 AIS LIMITED', '7.jpeg', 27500000, '- Máy ảnh Nikon siêu zoom 83x với cảm biến CMOS 16MP<br>\r\n- Ống kính tương đương 24-2000mm Nikkor Super ED VR<br>\r\n- Hệ thống chống rung kép Dual Detect Optical VR<br>\r\n- Độ nhạy sáng ISO 100-6400 , chụp liên tiếp 7 hình/giây<br>\r\n- Quay phim Full-HD 1080p 60fps trên toàn dải zoom quang<br>\r\n- Các chế độ chụp tự động thông minh và thủ công hoàn toàn<br>\r\n- Màn hình lật xoay TFT, kính ngắm điện tử<br>'),
(8, 'NIKON D5600 KIT AF-P 18-55MM VR', '8.JPG', 9500000, '- Cảm biến ảnh DX CMOS 24 MPs không bộ lọc Low-pass<br>\r\n- Bộ xử lý ảnh EXPEED 4, ISO cao nhất tới 25,600<br>\r\n- Hệ thống lấy nét tự động 3D-tracking AF 39 điểm<br>\r\n- Hệ thống đo sáng Active D-Lighting thế hệ mới<br>\r\n- Chế độ HDR cho các tình huống ánh sáng phức tạp<br>\r\n- Quay phim Full-HD 1080p với hiệu ứng Cinematic <br>\r\n- Kết nối Wifi, Blue, NFC cho chuyển và chụp ảnh<br>\r\n- Màn hình cảm ứng xoay 3.2” phân giải 1.037.000 điểm ảnh<br>'),
(9, 'SONY ALPHA A6500 + SONY E 18-135MM', '9.JPG', 24200000, '- Cảm biến APS-C Exmor CMOS 24.2 MPs<br>\r\n- Bộ xử lý ảnh BIONZ X<br>\r\n- Chống rung 5 trục, lấy nét theo pha 4D 425 điểm<br>\r\n- Tốc độ chụp liên tục 11 fps, ISO tới 51.200<br>\r\n- Kính ngắm điện tử XGA OLED EVF độ phân giải 2.36 MPs<br>\r\n- Quay phim UHD 4K<br>\r\n- Màn hình LCD cảm ứng lật xoay 3.0\"<br>\r\n- Kết nối Wi-Fi và NFC<br>');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `status`
--

CREATE TABLE `status` (
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `status`
--

INSERT INTO `status` (`status`) VALUES
('Đã xử lí'),
('Khách hàng hủy'),
('Chưa xử lí');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `dathang`
--
ALTER TABLE `dathang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`idkh`);

--
-- Chỉ mục cho bảng `order_id`
--
ALTER TABLE `order_id`
  ADD KEY `id` (`id`),
  ADD KEY `id_order` (`id`),
  ADD KEY `id_order_2` (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`idsp`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `dathang`
--
ALTER TABLE `dathang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `idkh` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `idsp` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `order_id`
--
ALTER TABLE `order_id`
  ADD CONSTRAINT `order_id_ibfk_1` FOREIGN KEY (`id`) REFERENCES `dathang` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
