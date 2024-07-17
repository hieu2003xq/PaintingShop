-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 21, 2024 lúc 10:07 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webbh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdon`
--
create database webBH;

CREATE TABLE `chitietdon` (
  `STT` int(11) NOT NULL,
  `maDon` int(11) NOT NULL,
  `maSP` int(11) NOT NULL,
  `tenSP` varchar(40) NOT NULL,
  `soLuong` int(11) NOT NULL,
  `giaBan` decimal(10,2) NOT NULL,
  `tinhTrangGH` varchar(30) NOT NULL,
  `thanhTien` decimal(10,2) NOT NULL,
  `hinhAnh` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdon`
--


-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dondat`
--

CREATE TABLE `dondat` (
  `maDon` int(11) NOT NULL,
  `maKH` int(11) NOT NULL,
  `ngayDat` datetime DEFAULT NULL,
  `tongTien` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `dondat`
--



-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `maKH` int(11) NOT NULL,
  `tenKH` varchar(40) NOT NULL,
  `SDT` varchar(40) NOT NULL,
  `diaChi` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--


-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `maSP` int(11) NOT NULL,
  `tenSP` varchar(40) NOT NULL,
  `giaBan` decimal(10,2) NOT NULL,
  `hinhAnh` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`maSP`, `tenSP`, `giaBan`, `hinhAnh`) VALUES
(3, 'Tranh B', 600000.00, 'tranhB.png'),
(4, 'Tranh c', 700000.00, 'tranhK.png'),
(5, 'Tranh D', 800000.00, 'tranhA.png'),
(6, 'Tranh E', 900000.00, 'tranhD.png'),
(7, 'Tranh F', 1000000.00, 'tranhA.png'),
(8, 'Tranh X', 110000.00, 'tranhK.png'),
(9, 'Tranh M', 112000.00, 'tranhJ.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tkad`
--

CREATE TABLE `tkad` (
  `id` int(11) NOT NULL,
  `hoTen` varchar(50) NOT NULL,
  `tenDN` varchar(40) NOT NULL,
  `matKhau` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tkad`
--

INSERT INTO `tkad` (`id`, `hoTen`, `tenDN`, `matKhau`) VALUES
(1, 'Trung Hiếu', 'lehieu2003', 'lehieu2003'),
(2, 'LE HIEU', 'trunghieu', 'trunghieu'),

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietdon`
--
ALTER TABLE `chitietdon`
  ADD PRIMARY KEY (`STT`),
  ADD KEY `maDon` (`maDon`);

--
-- Chỉ mục cho bảng `dondat`
--
ALTER TABLE `dondat`
  ADD PRIMARY KEY (`maDon`),
  ADD KEY `maKH` (`maKH`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`maKH`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`maSP`);

--
-- Chỉ mục cho bảng `tkad`
--
ALTER TABLE `tkad`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitietdon`
--
ALTER TABLE `chitietdon`
  MODIFY `STT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT cho bảng `dondat`
--
ALTER TABLE `dondat`
  MODIFY `maDon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `maKH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `maSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `tkad`
--
ALTER TABLE `tkad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietdon`
--
ALTER TABLE `chitietdon`
  ADD CONSTRAINT `chitietdon_ibfk_1` FOREIGN KEY (`maDon`) REFERENCES `dondat` (`maDon`);

--
-- Các ràng buộc cho bảng `dondat`
--
ALTER TABLE `dondat`
  ADD CONSTRAINT `dondat_ibfk_1` FOREIGN KEY (`maKH`) REFERENCES `khachhang` (`maKH`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
