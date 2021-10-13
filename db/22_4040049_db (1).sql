-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 12, 2021 lúc 04:57 AM
-- Phiên bản máy phục vụ: 10.1.37-MariaDB
-- Phiên bản PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `22@4040049_db`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_phong_ban`
--

CREATE TABLE `tbl_phong_ban` (
  `phong_ban_id` int(11) NOT NULL,
  `ten_phong_ban` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_phong_ban`
--

INSERT INTO `tbl_phong_ban` (`phong_ban_id`, `ten_phong_ban`) VALUES
(1, 'Phòng Đào Tạo'),
(2, 'Phòng Quản trị thiết bị'),
(3, 'Phòng Thanh Tra và Quản lý chất lượng'),
(4, 'Phòng Tài chính Kế Toán');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_tai_lieu_noi_bo`
--

CREATE TABLE `tbl_tai_lieu_noi_bo` (
  `tai_lieu_noi_bo_id` int(11) NOT NULL,
  `phong_ban_id` int(11) NOT NULL,
  `ten_tai_lieu` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ngay_ban_hanh` date NOT NULL,
  `link_tai_ve` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ghi_chu` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_tai_lieu_noi_bo`
--

INSERT INTO `tbl_tai_lieu_noi_bo` (`tai_lieu_noi_bo_id`, `phong_ban_id`, `ten_tai_lieu`, `ngay_ban_hanh`, `link_tai_ve`, `ghi_chu`) VALUES
(1, 1, 'văn', '2021-10-13', '121211', ''),
(2, 3, 'truy vấn', '2021-10-30', '12437564', ''),
(3, 2, 'bút chì', '2021-10-11', '6755', ''),
(4, 4, 'tiefn học', '2021-10-23', 'ádadsdfsf', ''),
(5, 1, 'điểm', '2021-10-21', 'sfsđf', ''),
(6, 2, 'tẩy', '2021-10-15', 'dfsdf', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_phong_ban`
--
ALTER TABLE `tbl_phong_ban`
  ADD PRIMARY KEY (`phong_ban_id`);

--
-- Chỉ mục cho bảng `tbl_tai_lieu_noi_bo`
--
ALTER TABLE `tbl_tai_lieu_noi_bo`
  ADD PRIMARY KEY (`tai_lieu_noi_bo_id`),
  ADD KEY `phong_ban_id` (`phong_ban_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_phong_ban`
--
ALTER TABLE `tbl_phong_ban`
  MODIFY `phong_ban_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_tai_lieu_noi_bo`
--
ALTER TABLE `tbl_tai_lieu_noi_bo`
  MODIFY `tai_lieu_noi_bo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_tai_lieu_noi_bo`
--
ALTER TABLE `tbl_tai_lieu_noi_bo`
  ADD CONSTRAINT `tbl_tai_lieu_noi_bo_ibfk_1` FOREIGN KEY (`phong_ban_id`) REFERENCES `tbl_phong_ban` (`phong_ban_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
