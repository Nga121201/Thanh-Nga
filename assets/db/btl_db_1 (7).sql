-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 30, 2021 lúc 10:57 AM
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
-- Cơ sở dữ liệu: `btl_db_1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_chu_de`
--

CREATE TABLE `tbl_chu_de` (
  `chu_de_id` int(11) NOT NULL,
  `chu_de` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_chu_de`
--

INSERT INTO `tbl_chu_de` (`chu_de_id`, `chu_de`) VALUES
(1, 'Diễn biến dịch bệnh'),
(2, 'Chiến dịch tiêm chủng'),
(3, 'Thuốc điều trị'),
(4, 'Ảnh hưởng của đại dịch'),
(5, 'Cách phòng chống'),
(6, 'Các nghiên cứu');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `comment_id` int(11) NOT NULL,
  `tin_tuc_id` int(11) NOT NULL,
  `nguoi_dung_id` int(11) NOT NULL,
  `comment` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ngay_comment` datetime NOT NULL,
  `trang_thai` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_doctors`
--

CREATE TABLE `tbl_doctors` (
  `bac_si_id` int(11) NOT NULL,
  `ten_bac_si` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `chuc_vu` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ghi_chu` text COLLATE utf8_unicode_ci,
  `anh_minh_hoa` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_doctors`
--

INSERT INTO `tbl_doctors` (`bac_si_id`, `ten_bac_si`, `chuc_vu`, `ghi_chu`, `anh_minh_hoa`) VALUES
(1, 'Dr Tr.D.Trung Hiáº¿u', 'BÃ¡c sÄ©', 'Y há»c lÃ  ngÆ°á»i vá»£ há»£p phÃ¡p cá»§a tÃ´i, vÃ  vÄƒn há»c lÃ  cÃ´ bá»“. Khi tÃ´i phÃ¡t chÃ¡n vá»›i má»™t bÃªn, tÃ´i qua Ä‘Ãªm vá»›i bÃªn cÃ²n láº¡i.', 'bacsi2.jpg'),
(2, 'Dr L.T.Thanh Nga', 'Y tÃ¡ ', 'ChÃºng tÃ´i cá»‘ khÃ´ng bao giá» quÃªn Ä‘i ráº±ng y há»c lÃ  vÃ¬ con ngÆ°á»i. Y há»c khÃ´ng pháº£i lÃ  vÃ¬ lá»£i nhuáº­n. Lá»£i nhuáº­n theo sau, vÃ  náº¿u chÃºng tÃ´i nhá»› Ä‘Æ°á»£c Ä‘iá»u Ä‘Ã³, lá»£i nhuáº­n khÃ´ng bao giá» khÃ´ng xuáº¥t hiá»‡n. ChÃºng tÃ´i cÃ ng ghi nhá»› tá»‘t Ä‘iá»u Ä‘Ã³, lá»£i nhuáº­n láº¡i cÃ ng lá»›n.', 'bacsi3.jpg'),
(3, 'Dr Ng.T.Lan Anh', 'Y tÃ¡ trÆ°á»Ÿng', 'Nghá»‡ thuáº­t y khoa lÃ  viá»‡c lÃ m bá»‡nh nhÃ¢n vui váº» trong khi tá»± nhiÃªn chá»¯a bá»‡nh.', 'bacsi5.jpg'),
(4, 'Dr Nguyá»…n PhÆ°Æ¡ng Linh', 'BÃ¡c sÄ©', 'Trong phÃ²ng bá»‡nh, sá»± cáº£m thÃ´ng Ä‘Ã¡ng giÃ¡ mÆ°á»i xu báº±ng vá»›i y há»c Ä‘Ã¡ng giÃ¡ mÆ°á»i Ä‘Ã´ la.', 'bacsi4.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_lien_he`
--

CREATE TABLE `tbl_lien_he` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_lien_he`
--

INSERT INTO `tbl_lien_he` (`contact_id`, `name`, `email`, `phone`, `message`) VALUES
(9, 'Lan Anh Nguyễn', 'imlananh.01@gmail.com', '0965698119', 'thông tin hữu ích'),
(11, 'Huyền', 'huyenfsd@gmail.com', '0976765445', ''),
(12, 'Linh', 'phuonglinh@gmail.com', '0943232', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_nguoi_dung`
--

CREATE TABLE `tbl_nguoi_dung` (
  `nguoi_dung_id` int(11) NOT NULL,
  `ten_nguoi_dung` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mat_khau` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT CURRENT_TIMESTAMP,
  `admin` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_nguoi_dung`
--

INSERT INTO `tbl_nguoi_dung` (`nguoi_dung_id`, `ten_nguoi_dung`, `email`, `mat_khau`, `last_login`, `admin`) VALUES
(1, 'Lan Anh Nguyen', 'imlananh.01@gmail.com', 'x123', NULL, 1),
(2, 'Thanh Nga', 'ngathanh@gmail.com', '234', NULL, 0),
(3, 'Phuong Linh', 'phuonglinh@gmail.com', 'x123', NULL, 0),
(4, 'Tran Hieu', 'hieutran@gmail.com', 'aasas', '2021-10-17 22:19:05', 1),
(15, 'Chu Van Huy ', 'imlananh.01@gmail.com', '1212', '2021-10-20 14:09:16', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_reply_comment`
--

CREATE TABLE `tbl_reply_comment` (
  `rep_comment_id` int(11) NOT NULL,
  `comment_od` int(11) NOT NULL,
  `rep_commnent` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngay_rep_comment` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_tin_tuc`
--

CREATE TABLE `tbl_tin_tuc` (
  `tin_tuc_id` int(11) NOT NULL,
  `tieu_de` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hashtag_id` int(11) NOT NULL,
  `chu_de_id` int(11) NOT NULL,
  `mo_ta` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tac_gia` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `anh_minh_hoa` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `ngay_dang_tin` datetime NOT NULL,
  `so_lan_doc` int(11) NOT NULL,
  `ghi_chu` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_tin_tuc`
--

INSERT INTO `tbl_tin_tuc` (`tin_tuc_id`, `tieu_de`, `hashtag_id`, `chu_de_id`, `mo_ta`, `noi_dung`, `tac_gia`, `anh_minh_hoa`, `ngay_dang_tin`, `so_lan_doc`, `ghi_chu`) VALUES
(3, 'Chuyện vượt \"cửa tử\" của những F0', 6, 1, 'Có những gia đình cả nhà là F0 hay những sản phụ mang thai \"vượt mặt\" mắc Covid-19 đã kiên cường vượt \"cửa tử\" nhờ có sự đồng hành của các y bác sĩ.', 'Ngày 30/7, 6 người trong gia đình chị T. về đến quê và thực hiện cách ly tập trung thì 2 ngày sau chồng chị T. có kết quả xét nghiệm dương tính với SARS-CoV-2 và được chuyển lên điều trị tại Bệnh viện Phổi Thanh Hóa. Sau chồng, đến chị T. rồi từng thành viên trong gia đình đều mắc Covid-19.', 'Bình Minh', 'blog-1.jpeg', '2021-10-29 06:32:41', 10, ''),
(4, '\"Chìa khóa\" để chấm dứt Covid-19', 3, 2, 'Các chuyên gia cho rằng, đảm bảo chuỗi cung vắc xin an toàn và không bị gián đoạn là chìa khóa quan trọng để chấm dứt đại dịch Covid-19.', 'Đó là điều mà cựu Tổng thư ký Liên Hợp Quốc Ban Ki-moon đã nói với các lãnh đạo thế giới về cuộc khủng hoảng đại dịch Covid-19 ở Tây Phi hồi tháng 4/2015.\r\nTháng trước khi Tổng thống Mỹ Joe Biden đề nghị các nguyên thủ thế giới và các lãnh đạo doanh nghiệp đưa ra những cam kết mới nhằm chấm dứt đại dịch Covid-19, họ dường như đã quên mất vấn đề mà ông Ban Ki-moon lưu ý cách đây 6 năm: chặng cuối cùng.', 'Los Angles Times', 'blog-2.jpg', '2021-10-29 08:38:00', 20, ''),
(5, 'Các thuốc kháng virus điều trị </br>Covid-19 hiệu quả như thế nào?', 3, 3, 'Tại Việt Nam, hai loại thuốc Remdesivir và Molnupiravir đang được sử dụng điều trị cho bệnh nhân Covid-19. Có gì khác biệt giữa hai loại thuốc này?', 'Theo hướng dẫn sử dụng thuốc Remdesivir 100mg trong hỗ trợ điều trị Covid-19 của Bộ Y tế dành ưu tiên cho nhóm nguy cơ cao như người trên 65 tuổi, người có bệnh nền, béo phì.', 'Hồng Hải', 'blog-3.jpeg', '2021-10-29 10:00:00', 36, ''),
(6, 'Chuyên gia: 30% bệnh nhân \"hậu Covid-19\" bị stress, trầm cảm', 3, 4, ' Thống kê cho thấy có 30-40% bệnh nhân Covid-19 sau khi khỏi bệnh gặp vấn đề lo lắng, trầm cảm, rối loạn giấc ngủ và stress sau sang chấn.', 'Thông tin này được thầy thuốc ưu tú, BS Đinh Quang Thanh, Bệnh viện Phục hồi chức năng và Điều trị bệnh nghề nghiệp TPHCM, cho biết tại hội thảo trực tuyến Phục hồi chức năng hậu Covid-19 diễn ra chiều 1/10.', 'Quang Huy', 'blog-4.jpg', '2021-10-29 10:40:00', 45, ''),
(7, 'PC-Covid được tạo ra như thế nào?', 3, 5, 'PC-Covid là ứng dụng được phát triển phục vụ cho công tác phòng, chống dịch Covid-19 của Việt Nam, để người dân sớm có được cuộc sống \"bình thường mới\".', 'Theo chia sẻ từ đại diện Trung tâm Công nghệ phòng, chống dịch Covid-19 Quốc gia, PC-Covid là ứng dụng tổng hợp các tính năng hiện có của các ứng dụng chống dịch khác (Ncovi, Bluezone VHD, Covid-19...) và được thiết kế lại sao cho thuận tiện nhất đối với người dùng.', 'Quốc Anh', 'blog-5.jpg', '2021-10-29 12:10:00', 77, ''),
(10, 'Hỏi đáp vắc xin: Điều trị \"Cánh tay Covid\" có giảm hiệu quả vắc xin?', 5, 2, 'Tình trạng phản ứng quá mẫn gây sưng tấy tại chỗ tiêm vắc xin được gọi là phản ứng \"Cánh tay Covid\". Nhiều người lo ngại khi tay sưng đau sau vài ngày đến một tuần, cảm giác sưng tấy khó chịu.', 'Đau và sưng tấy tại chỗ tiêm là những phản ứng phổ biến thường gặp đối với vắc xin Covid-19 mRNA của Moderna và Pfizer-BioNTech. Đôi khi, một số các triệu chứng ít gặp hơn khác cũng xuất hiện sau tiêm vắc xin như phát ban, ngứa... Các phản ứng này được gọi là phản ứng sau tiêm vắc xin Covid-19 tại cánh tay, gọi tắt là \"Cánh tay Covid\".', 'Nikkei', 'blog-6.jpg', '2021-10-29 08:07:00', 0, ''),
(11, 'Bắt đầu tiêm vắc xin Covid-19 </br> cho phụ nữ mang thai, bà mẹ </br> đang cho con bú', 1, 2, 'Tỉnh Quảng Ninh bắt đầu triển khai chiến dịch tiêm vắc xin phòng Covid-19 cho phụ nữ mang thai trên 13 tuần và phụ nữ đang cho con bú dưới 6 tháng tuổi trên địa bàn tỉnh.', 'Theo đó, việc thực hiện tiêm bắt đầu từ ngày 23/9. Trong đợt tiêm này, Quảng Ninh sẽ có 15.690 liều vắc xin phòng Covid-19 do Viện vệ sinh dịch tễ Trung ương bổ sung tại Quyết định số 1084/QĐ-VSDTTƯ ngày 15/9/2021. Sau khi nhận, tỉnh đã phân bổ đến Trung tâm Y tế các địa phương trên địa bàn để triển khai tiêm chủng cho đối tượng phụ nữ mang thai trên 13 tuần và phụ nữ đang cho con bú dưới 6 tháng tuổi.', 'An Nhiên', 'blog-8.jpg', '2021-10-29 22:41:30', 68, ''),
(12, 'WHO lập nhóm điều tra Covid-19 </br>mới,  hơn 700 người đăng ký', 2, 6, 'Hơn 700 người đã đăng ký tham gia nhóm điều tra mới của WHO nhằm làm rõ nguồn gốc của đại dịch Covid-19.', 'Ủy ban mới có tên gọi \"Nhóm cố vấn khoa học về nguồn gốc của mầm bệnh\", dự kiến sẽ được công bố trong tuần này. Nhóm đại diện cho nỗ lực của cơ quan y tế toàn cầu trong việc thiết lập lại cách tiếp cận để tìm ra nguồn gốc virus.', 'Thành Đạt', 'blog-11.jpg', '2021-10-29 23:41:30', 32, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_tin_tuc_hashtag`
--

CREATE TABLE `tbl_tin_tuc_hashtag` (
  `hashtag_id` int(11) NOT NULL,
  `ten_hashtag` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_tin_tuc_hashtag`
--

INSERT INTO `tbl_tin_tuc_hashtag` (`hashtag_id`, `ten_hashtag`) VALUES
(1, 'vacxin'),
(2, 'xét nghiệm');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_tu_van`
--

CREATE TABLE `tbl_tu_van` (
  `tu_van_id` int(11) NOT NULL,
  `ten` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bac_si_id` int(11) NOT NULL,
  `gioi_tinh` tinyint(4) NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngay_tu_van` date NOT NULL,
  `thoi_gian` time NOT NULL,
  `phuong_thuc` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_tu_van`
--

INSERT INTO `tbl_tu_van` (`tu_van_id`, `ten`, `bac_si_id`, `gioi_tinh`, `email`, `sdt`, `ngay_tu_van`, `thoi_gian`, `phuong_thuc`) VALUES
(1, 'HAI', 0, 0, '', '', '0000-00-00', '00:00:00', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_vaccine`
--

CREATE TABLE `tbl_vaccine` (
  `vaccine_id` int(11) NOT NULL,
  `ten_vaccine` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mo_ta` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `anh_minh_hoa` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_vaccine`
--

INSERT INTO `tbl_vaccine` (`vaccine_id`, `ten_vaccine`, `mo_ta`, `anh_minh_hoa`) VALUES
(1, 'Vaccine AstraZeneca', '<p>Váº¯c-xin AstraZeneca do Táº­p Ä‘o&agrave;n AstraZeneca sáº£n xuáº¥t Ä‘&atilde; Ä‘Æ°á»£c cáº¥p ph&eacute;p sá»­ dá»¥ng kháº©n cáº¥p táº¡i 181 quá»‘c gia, v&ugrave;ng l&atilde;nh thá»• v&agrave; Ä‘Æ°á»£c Tá»• chá»©c Y táº¿ tháº¿ giá»›i (WHO) Ä‘Æ°a v&agrave;o danh s&aacute;ch sá»­ dá»¥ng kháº©n cáº¥p. AstraZeneca Ä‘Æ°á»£c Viá»‡t nam ph&ecirc; duyá»‡t ng&agrave;y 01/02/2021 v&agrave; triá»ƒn khai ti&ecirc;m chá»§ng tá»« th&aacute;ng 3/2021, hiá»‡n Ä‘ang c&oacute; sá»‘ lÆ°á»£ng sá»­ dá»¥ng nhiá»u nháº¥t táº¡i Viá»‡t Nam. Ä&acirc;y l&agrave; loáº¡i váº¯c xin sáº£n xuáº¥t theo c&ocirc;ng nghá»‡ vector, sá»­ dá»¥ng 2 liá»u c&aacute;ch nhau 8-12 tuáº§n.</p>', 'astrazeneca.jpg'),
(2, 'Vaccine Gam-COVID-Vac', '<p>Váº¯c xin Gam-COVID-Vac (t&ecirc;n kh&aacute;c l&agrave; SPUTNIK V) do Viá»‡n Nghi&ecirc;n cá»©u Gamaleya, Nga sáº£n xuáº¥t Ä‘&atilde; Ä‘Æ°á»£c cáº¥p ph&eacute;p sá»­ dá»¥ng táº¡i 70 quá»‘c gia, v&ugrave;ng l&atilde;nh thá»•. Táº¡i Viá»‡t Nam, vaccine Sputnik V Ä‘&atilde; Ä‘Æ°á»£c Bá»™ Y táº¿ ph&ecirc; duyá»‡t c&oacute; Ä‘iá»u kiá»‡n vaccine cho nhu cáº§u cáº¥p b&aacute;ch trong ph&ograve;ng, chá»‘ng dá»‹ch COVID-19 v&agrave;o ng&agrave;y 23/3/2021. Ä&acirc;y l&agrave; váº¯c xin sá»­ dá»¥ng c&ocirc;ng nghá»‡ t&aacute;i tá»• há»£p há»£p mang gen m&atilde; h&oacute;a protein S cá»§a SARS-CoV-2. Váº¯c xin Ä‘Æ°á»£c ti&ecirc;m 2 liá»u c&aacute;ch nhau 3 tuáº§n..</p>', 'gam.jpg'),
(3, 'Vaccine Vero Cell', '<p>Váº¯c xin Vero Cell do Sinopharm ph&aacute;t triá»ƒn v&agrave; Beijing Institute of Biological Products Co. Ltd - Trung Quá»‘c sáº£n xuáº¥t, Ä‘&atilde; Ä‘Æ°á»£c cáº¥p ph&eacute;p sá»­ dá»¥ng táº¡i 64 quá»‘c gia, v&ugrave;ng l&atilde;nh thá»•, Ä‘&atilde; Ä‘Æ°á»£c Tá»• chá»©c Y táº¿ tháº¿ giá»›i Ä‘Æ°a v&agrave;o danh s&aacute;ch sá»­ dá»¥ng kháº©n cáº¥p. Ng&agrave;y 3/6/2021, váº¯c-xin Vero Cell Ä‘&atilde; Ä‘Æ°á»£c Bá»™ Y táº¿ ph&ecirc; duyá»‡t c&oacute; Ä‘iá»u kiá»‡n vaccine cho nhu cáº§u cáº¥p b&aacute;ch trong ph&ograve;ng, chá»‘ng dá»‹ch COVID-19. Váº¯c xin n&agrave;y sáº£n xuáº¥t theo c&ocirc;ng nghá»‡ báº¥t hoáº¡t vi r&uacute;t, ti&ecirc;m 2 liá»u c&aacute;ch nhau 3-4 tuáº§n.</p>', 'vero.jpg'),
(4, 'Vaccine Comirnaty', '<p>Váº¯c xin Comirnaty cá»§a Pfizer/BioNTech Ä‘&atilde; Ä‘Æ°á»£c cáº¥p ph&eacute;p sá»­ dá»¥ng táº¡i 111 quá»‘c gia v&agrave; v&ugrave;ng l&atilde;nh thá»• v&agrave; Ä‘Æ°á»£c Tá»• chá»©c Y táº¿ tháº¿ giá»›i Ä‘Æ°a v&agrave;o danh s&aacute;ch sá»­ dá»¥ng kháº©n cáº¥p. Váº¯c xin n&agrave;y Ä‘&atilde; Ä‘Æ°á»£c Bá»™ Y táº¿ ph&ecirc; duyá»‡t c&oacute; Ä‘iá»u kiá»‡n cho nhu cáº§u cáº¥p b&aacute;ch trong ph&ograve;ng, chá»‘ng dá»‹ch COVID-19 v&agrave;o ng&agrave;y 16/6/2021. Váº¯c xin Ä‘Æ°á»£c sáº£n xuáº¥t theo c&ocirc;ng nghá»‡ mRNA, sá»­ dá»¥ng ti&ecirc;m 2 liá»u c&aacute;ch nhau 3-4 tuáº§n. Äáº¿n ng&agrave;y 23/8/2021, Cá»¥c Quáº£n l&yacute; thuá»‘c v&agrave; thá»±c pháº©m Hoa Ká»³ (FDA) ch&iacute;nh thá»©c Ä‘Æ°a ra cháº¥p thuáº­n ho&agrave;n to&agrave;n Ä‘á»‘i vá»›i vaccine Pfizer-BioNTech trong ph&ograve;ng ngá»«a COVID-19 á»Ÿ nhá»¯ng ngÆ°á»i tá»« 16 tuá»•i trá»Ÿ l&ecirc;n.</p>', 'comir.jpg'),
(6, 'Vaccine Spikevax', '<p>Váº¯c xin Spikevax (T&ecirc;n kh&aacute;c l&agrave; Moderna) do Moderna sáº£n xuáº¥t Ä‘&atilde; Ä‘Æ°á»£c cáº¥p ph&eacute;p sá»­ dá»¥ng táº¡i 64 quá»‘c gia, v&ugrave;ng l&atilde;nh thá»• v&agrave; Ä‘Æ°á»£c Tá»• chá»©c Y táº¿ tháº¿ giá»›i Ä‘Æ°a v&agrave;o danh s&aacute;ch sá»­ dá»¥ng kháº©n cáº¥p. Váº¯c-xin n&agrave;y cÅ©ng Ä‘Æ°á»£c sáº£n xuáº¥t dá»±a tr&ecirc;n c&ocirc;ng nghá»‡ mRNA, sá»­ dá»¥ng 2 liá»u c&aacute;ch nhau 4 tuáº§n. Bá»™ Y táº¿ Ä‘&atilde; ph&ecirc; duyá»‡t c&oacute; Ä‘iá»u kiá»‡n cho nhu cáº§u cáº¥p b&aacute;ch trong ph&ograve;ng, chá»‘ng dá»‹ch COVID-19 cho loáº¡i váº¯c-xin n&agrave;y v&agrave;o ng&agrave;y 28/6/2021.</p>', 'moderna.jpg'),
(7, 'Vaccine Janssen ', '<p>Váº¯c xin Janssen do Janssen Pharmaceutica NV (Bá»‰) v&agrave; Janssen Biologics B.V (H&agrave; Lan) sáº£n xuáº¥t Ä‘Æ°á»£c cáº¥p ph&eacute;p sá»­ dá»¥ng táº¡i 56 quá»‘c gia, v&ugrave;ng l&atilde;nh thá»• v&agrave; Ä‘Æ°á»£c Tá»• chá»©c Y táº¿ tháº¿ giá»›i Ä‘Æ°a v&agrave;o danh s&aacute;ch sá»­ dá»¥ng kháº©n cáº¥p. Váº¯c xin Ä‘Æ°á»£c sáº£n xuáº¥t báº±ng c&ocirc;ng nghá»‡ v&eacute;c-tÆ¡ vi-r&uacute;t, sá»­ dá»¥ng 1 liá»u duy nháº¥t. Hiá»‡n nay, Viá»‡t Nam chÆ°a tiáº¿p nháº­n&nbsp;loáº¡i váº¯c xin n&agrave;y nhÆ°ng Bá»™ Y táº¿ Ä‘&atilde; ph&ecirc; duyá»‡t c&oacute; Ä‘iá»u kiá»‡n cho nhu cáº§u cáº¥p b&aacute;ch trong ph&ograve;ng, chá»‘ng dá»‹ch COVID-19 Ä‘á»‘i vá»›i loáº¡i váº¯c-xin n&agrave;y v&agrave;o ng&agrave;y 15/7/2021.</p>', 'janssen.jpg'),
(8, ' Vaccine Hayat - Vax ', '<p>Váº¯c-xin vaccine Hayat - Vax do C&ocirc;ng ty TNHH Viá»‡n Sinh pháº©m Báº¯c Kinh thuá»™c Táº­p Ä‘o&agrave;n Biotec Quá»‘c gia Trung Quá»‘c (CNBG), Trung Quá»‘c, sáº£n xuáº¥t b&aacute;n th&agrave;nh pháº©m. Váº¯c xin n&agrave;y Ä‘Æ°á»£c Ä‘&oacute;ng g&oacute;i sÆ¡ cáº¥p, thá»© cáº¥p v&agrave; xuáº¥t xÆ°á»Ÿng táº¡i Julphar (Gulf Pharmaceutical Industries) - C&aacute;c tiá»ƒu VÆ°Æ¡ng quá»‘c áº¢ ráº­p thá»‘ng nháº¥t. Vaccine Hayat - Vax má»—i liá»u 0,5 ml chá»©a 6.5 Ä‘Æ¡n vá»‹ kh&aacute;ng nguy&ecirc;n SARS-CoV-2 (táº¿ b&agrave;o vero) báº¥t hoáº¡t, b&agrave;o cháº¿ á»Ÿ dáº¡ng há»—n dá»‹ch ti&ecirc;m. Vaccine Ä‘Æ°á»£c Ä‘&oacute;ng g&oacute;i há»™p má»™t lá» chá»©a má»™t liá»u 0,5 ml v&agrave; há»™p má»™t lá» chá»©a 2 liá»u, má»—i liá»u 0,5 ml. Bá»™ Y táº¿ Ä‘&atilde; c&oacute; quyáº¿t Ä‘á»‹nh ph&ecirc; duyá»‡t c&oacute; Ä‘iá»u kiá»‡n cho nhu cáº§u cáº¥p b&aacute;ch trong ph&ograve;ng, chá»‘ng dá»‹ch bá»‡nh COVID-19 Ä‘á»‘i vá»›i váº¯c-xin n&agrave;y v&agrave;o ng&agrave;y 10/9/2021. Liá»u ti&ecirc;m Ä‘ang chá» Bá»™ Y táº¿ cáº­p nháº­t hÆ°á»›ng dáº«n.</p>', 'hayat.jpg'),
(9, 'Vaccine Abdala', '<p>Váº¯c-xin Abdala Ä‘Æ°á»£c sáº£n xuáº¥t th&agrave;nh pháº©m táº¡i C&ocirc;ng ty AICA Laboraries, Base Business Unit (BBU) AICA - Cuba v&agrave; Ä‘Æ°á»£c xuáº¥t b&aacute;n th&agrave;nh pháº©m, Ä‘&oacute;ng g&oacute;i cáº¥p 2 táº¡i Trung t&acirc;m Ká»¹ thuáº­t Di truyá»n v&agrave; C&ocirc;ng nghá»‡ Sinh há»c (CIGB) - Cuba.&nbsp; Váº¯c-xin Abdala má»—i liá»u 0,5ml chá»©a 50 mcg váº¯c-xin protein t&aacute;i tá»• há»£p chá»©a v&ugrave;ng li&ecirc;n káº¿t vá»›i thá»¥ thá»ƒ (RBG) cá»§a vi-r&uacute;t SARS-CoV-2, b&agrave;o cháº¿ á»Ÿ dáº¡ng há»—n dá»‹ch ti&ecirc;m báº¯p. Váº¯c-xin Ä‘Æ°á»£c Ä‘&oacute;ng g&oacute;i há»™p 10 lá», má»—i lá» chá»©a 10 liá»u, má»—i liá»u 0,5ml. Bá»™ Y táº¿ Ä‘&atilde; ph&ecirc; duyá»‡t c&oacute; Ä‘iá»u kiá»‡n váº¯c-xin cho nhu cáº§u cáº¥p b&aacute;ch&nbsp;trong ph&ograve;ng, chá»‘ng dá»‹ch bá»‡nh COVID-19 Ä‘á»‘i vá»›i loáº¡i váº¯c-xin n&agrave;y v&agrave;o ng&agrave;y 17/9/2021.</p>', 'abdala.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_vaccine_chi_tiet`
--

CREATE TABLE `tbl_vaccine_chi_tiet` (
  `vaccine_id` int(11) NOT NULL,
  `ten_vaccine` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_vaccine_chi_tiet`
--

INSERT INTO `tbl_vaccine_chi_tiet` (`vaccine_id`, `ten_vaccine`, `noi_dung`) VALUES
(1, ' Vaccine AstraZeneca', 'Vắc xin phòng COVID-19 của AstraZeneca là gì?\r\nVaccine phòng COVID-19 của AstraZeneca là loại vaccine phòng SARS-CoV-2, được đồng phát triển bởi Đại học Oxford và Hãng dược nổi tiếng thế giới – AstraZeneca (Vương quốc Anh). Vắc xin phòng COVID-19 của AstraZeneca có hiệu lực bảo vệ con người trước tác nhân gây bệnh COVID-19 lên đến hơn 89%, dựa trên kết quả nghiên cứu lâm sàng. (1)\r\n\r\nDữ liệu gần đây của Cơ quan Y tế Công cộng Anh (PHE) chứng minh, hai liều vắc xin COVID-19 của AstraZeneca có hiệu quả 92% trong việc giảm số ca nhập viện do biến thể Delta và cho thấy không có trường hợp tử vong trong số những người được tiêm chủng.\r\n\r\nCOVID-19 vaccine Astrazeneca là một loại vắc xin được sử dụng để bảo vệ các đối tượng từ 18 tuổi trở lên chống lại COVID-19. Vắc xin giúp cho hệ miễn dịch của người được được tiêm chủng có khả năng nhận biết và tiêu diệt virus corona (SARS-COV-2). Đây là loại virus gây ra bệnh COVID-19, khiến một số bệnh nhân diễn tiến nặng và có thể tử vong.\r\n\r\nVắc xin COVID-19 của Astrazeneca chứa một loại virus gây cảm lạnh thông thường đã được biến đổi gen. Công nghệ “virus biến đổi” đã từng được thử nghiệm và ứng dụng thành công trong việc tạo ra vắc xin cho các bệnh lý khác.\r\n\r\nVắc xin phòng COVID-19 của AstraZeneca có hiệu lực bảo vệ trước tác nhân gây bệnh COVID-19 lên đến 89%, dựa trên kết quả nghiên cứu lâm sàng. Đây là một con số vượt quá sự kỳ vọng của Tổ chức Y tế Thế giới (WHO), khi WHO công bố hiệu lực bảo vệ trước COVID-19 của vắc xin chỉ cần đạt trên 50% là đã có thể được sản xuất rộng rãi phục vụ nhu cầu phòng bệnh của người dân.\r\n\r\nPhân tích chính của các thử nghiệm lâm sàng giai đoạn III từ Anh, Brazil và Nam Phi, mới được công bố trên tờ The Lancet, xác nhận COVID-19 vaccine AstraZeneca an toàn và hiệu quả trong việc ngăn ngừa COVID-19, không có trường hợp nặng hay nhập viện xảy ra sau 22 ngày sau liều đầu tiên.\r\n\r\nBên cạnh hiệu lực vắc xin từ chương trình thử nghiệm lâm sàng được xác định và phê duyệt, mới đây hãng dược phẩm AstraZeneca đã đưa ra thông báo về hiệu lực của vắc xin phòng COVID-19. Theo đó, vắc xin AstraZeneca có hiệu quả 92% trong việc giảm tỉ lệ nhập viện do biến thể virus Delta (B1.617.2 còn được biết đến là biến thể Ấn Độ) – nhân tố chủ chốt khiến dịch bệnh bùng phát mạnh mẽ tại Ấn Độ và nhiều quốc gia trên thế giới.\r\n\r\nMặt khác, vắc xin cũng đã được chứng minh mang lại hiệu quả cao với biến thể Alpha (B.1.1.7, hay được gọi là biến thể Kent), giảm 86% số ca nhập viện và không có trường hợp tử vong nào được báo cáo. Đối với những trường hợp có triệu chứng nhẹ, vắc xin giảm nguy cơ mắc bệnh COVID-19 có triệu chứng là 74% với biến chủng Alpha và 64% đối với biến chủng Delta.\r\n\r\nBên cạnh đó, kết quả nghiên cứu lâm sàng của vắc xin phòng COVID-19 của AstraZeneca cũng đã chứng minh được tính an toàn của loại vắc xin này, khi không ghi nhận bất kỳ vấn đề sức khỏe nghiêm trọng nào. Theo hãng AstraZeneca, vắc xin phòng COVID-19 của họ tạo ra phản ứng miễn dịch tốt, cũng như gây ít phản ứng phụ ở người lớn tuổi.\r\n\r\nTrước đó, báo Financial Times (London, Anh) cũng đã công bố thông tin vắc xin phòng COVID-19 của AstraZeneca có khả năng kích thích đáp ứng miễn dịch của tế bào lympho T và lympho B và sinh kháng thể bảo vệ ở nhóm người cao tuổi. Đây là kết quả rất đáng mừng, bởi tuổi càng cao khả năng miễn dịch của con người càng thấp. Trong khi đó, người cao tuổi lại là nhóm có nguy cơ mắc và tử vong cao do COVID-19. Hiệu quả của vaccine tiếp tục củng cố bằng chứng cho tính an toàn và khả năng miễn dịch của vắc xin đối với cơ thể người. (2)'),
(2, 'Gam-COVID-Vac ', 'Ngày 23/3, Bộ Y tế đã phê duyệt có điều kiện vắc xin cho nhu cầu cấp bách trong phòng chống dịch COVID-19 đối với vắc xin Sputnik V của Nga . Như vậy đây là vắc xin phòng COVID-19 thứ 2 được Việt Nam phê duyệt đến nay.\r\nTại Quyết định số 1654/QĐ-BYT do Thứ trưởng Bộ Y tế Trương Quốc Cường ký ban hành phê duyệt có điều kiện đối với vắc xin Gam-COVID-Vac (tên khác là Sputnik V) của Nga cho nhu cầu cấp bách trong phòng, chống dịch COVID-19 theo quy định tại Điều 67 Nghị định số 54/2017/NĐ-CP ngày 8/5/2017 của Chính phủ quy định chi tiết một số điều và biện pháp thi hành Luật dược (Nghị định 54/2017/NĐ-CP), cụ thể:\r\n\r\nTên vắc xin: Gam-COVID-Vac (tên khác là SPUTNIK V).\r\n\r\nThành phần hoạt chất, nồng độ/hàm lượng: - Mỗi liều 0,5ml thành phần I (mũi tiêm 1): Chứa (1,0 ± 0,5) x 1011 hạt vi rút Adeno typ huyết thanh 26 của người tái tổ hợp mang gen mã hóa protein S của SARS-CoV-2. 1 - Mỗi liều 0,5ml thành phần II (mũi tiêm 2): Chứa (1,0 ± 0,5) x 1011 hạt vi rút Adeno typ huyết thanh 5 của người tái tổ hợp mang gen mã hóa protein S của SARS-CoV-2\r\n\r\n Dạng bào chế: Dung dịch tiêm.\r\n\r\n Quy cách đóng gói: Hộp 1 lọ 3ml (chứa 5 liều).\r\n\r\nTên cơ sở sản xuất - Nước sản xuất: JSC Generium - Liên Bang Nga.\r\n\r\nTên cơ sở đề nghị phê duyệt vắc xin: Trung tâm nghiên cứu, sản xuất Vắc xin và Sinh phẩm y tế (POLYVAC).\r\n\r\nCác điều kiện đi kèm việc phê duyệt vắc xin Gam-COVID-Vac cho nhu cầu cấp bách trong phòng, chống dịch bệnh COVID-19 được ban hành tại Phụ lục kèm theo Quyết định này.\r\n\r\nvac xin sputnik\r\n\r\nVắc xin Sputnik V của Nga là vắc xin thứ 2 được Bộ Y tế phê duyệt có điều kiện vắc xin cho nhu cầu cấp bách trong phòng chống dịch COVID-19\r\n\r\nQuyết định của Bộ Y tế yêu cầu Cục Quản lý Dược có trách nhiệm cấp phép nhập khẩu vắc xin Gam-COVID-Vac theo quy định tại Điều 67 Nghị định 54/2017/NĐ-CP khi nhận được hồ sơ của cơ sở nhập khẩu. Thực hiện đúng quy định của pháp luật về quản lý nhập khẩu, quản lý chất lượng vắc xin nhập khẩu.\r\n\r\nCục Khoa học Công nghệ và Đào tạo có trách nhiệm làm đầu mối triển khai đánh giá lâm sàng tại Việt Nam về tính an toàn và tính sinh miễn dịch của vắc xin Gam-COVID-Vac.\r\n\r\nCục Y tế Dự phòng thực hiện các trách nhiệm liên quan đến tiêm chủng vắc xin Gam-COVID-Vac được quy định tại Quyết định số 1464/QĐ-BYT ngày 05/03/2021 của Bộ trưởng Bộ Y tế về việc phê duyệt kế hoạch tiêm vắc xin phòng COVID-19 giai đoạn 2021 - 2022 và Quyết định số 1467/QĐ-BYT ngày 05/03/2021 của Bộ trưởng Bộ Y tế về việc ban hành hướng dẫn tiếp nhận, bảo quản, phân phối và sử dụng vắc xin phòng COVID-19.\r\n\r\nViện Kiểm định Quốc gia vắc xin và sinh phẩm y tế có trách nhiệm tiến hành kiểm định vắc xin Gam-COVID-Vac trước khi đưa ra sử dụng.\r\n\r\nTrước đó, ngày 25/2, Hội đồng tư vấn cấp giấy đăng ký lưu hành thuốc đã họp và nhất trí đề xuất Bộ Y tế phê duyệt cho vắc xin này.\r\n\r\nSputnik V là vắc xin ngừa COVID-19 đầu tiên trên thế giới được phê duyệt. Từ 11/8/2020, Bộ Y tế Nga đã cho triển khai tiêm quy mô toàn quốc vắc xin Sputnik V khi vắc xin này chưa thực hiện xong thử nghiệm lâm sàng giai đoạn 3. Tuy nhiên đến nay vắc xin Sputnik V được hơn 50 quốc gia phê chuẩn sử dụng.\r\n\r\nTheo kết quả thử nghiệm lâm sàng giai đoạn 3 được công bố trên tạp chí The Lancet , vắc xin Sputnik V hiệu quả lên tới 91,6 %,  riêng đối với tình nguyện viên trên 60 tuổi, tỷ lệ này là 91,8%. Sau tiêm, 98 % tình nguyện viên sản sinh kháng thể chống lại virút SARS CoV-2.\r\n\r\nLiên quan đến vắc xin này, ngày 16/3, ông Đặng Việt Hùng, Vụ trưởng Vụ hợp tác quốc tế, Bộ Y tế cho biết, sáng nay Bộ Y tế đã tiếp nhận lô vắc xin này từ sân bay Nội Bài, ngay sau đó vắc xin được chuyển vào kho lạnh của Viện vệ sinh dịch tễ trung ương để bảo quản.\r\n\r\nLô vắc xin gồm 1000 liều. Thời gian tới việc điều phối lô vắc xin này sẽ do Chính phủ quyết định, có thể điều tiết về Bộ y tế hoặc các đơn vị khác.  Đây là những điều vắc xin ngừa COVID-19 đầu tiên của Nga có mặt tại Việt Nam.'),
(3, 'Vaccine Vero Cell', 'Vaccine Vero Cell của Sinopharm đã được Tổ chức Y tế Thế giới phê duyệt và chấp thuận đưa vào sử dụng từ ngày 07/05/2021. Hiệu quả bảo vệ của loại vaccine này lên đến 78.2%. Đây cũng là vaccine phòng Covid-19 đầu tiên được nghiên cứu sản xuất bởi một quốc gia không thuộc các nước phương Tây, được WHO phê duyệt.\r\n\r\n\r\nThông tin về Vaccine Sinopharm\r\n\r\nVaccine Sinopharm được sản xuất tại cơ sở Beijing Institute of Biological Products Co., Ltd – Trung Quốc. Tên gọi khác của vaccine này là SARS-COV-2 Vaccine (Vero Cell), Inactivated. Khác với những loại vaccine khác, Vero Cell được sản xuất bằng công nghệ bất hoạt. Đây là một công nghệ truyền thống hơn, vốn đã được sử dụng thành công ở nhiều loại vaccine phổ biến.\r\n\r\nHiện tại, vaccine Vero Cell của Sinopharm đã được cấp phép sử dụng tại 64 quốc gia, vùng lãnh thổ. Tại Việt Nam, căn cứ theo Quyết định số 2763/QĐ-BYT ngày 03/06/201, Vero Cell đã đủ điều kiện đưa vào sử dụng để phòng chống dịch COVID-19.\r\n\r\nVacine Sinopharm là gì?\r\n\r\nVaccine Sinopharm là loại vaccine được chỉ định để tạo miễn dịch chủ động, giúp cơ thể chống lại bệnh COVID-19 do virus SARS-CoV-2 gây ra. Ngày 30/12/2020, Cục Quản lý Dược Trung Quốc đã tiến hành cấp phép sử dụng vaccine Sinopharm. Hiệu quả bảo vệ được công bố là 79,34%.\r\n\r\nNguồn gốc của vaccine Sinopharm\r\n\r\nVaccine Verocell là vaccine được nghiên cứu và phát triển bởi Viện Nghiên cứu Sinh phẩm Bắc Kinh Sinopharm. Sinopharm còn được biết đến là Tập đoàn Y Dược Trung Quốc. Đây là đơn vị sản xuất vaccine lớn nhất Trung Quốc với hơn 1500 công ty con. Năm 2020, công ty này đã được xếp hạng 145 trong danh sách 500 công ty hàng đầu thế giới.\r\n\r\nVaccine Sinopharm được Việt Nam phê duyệt như thế nào?\r\n\r\nTại Việt Nam, Vero Cell là vaccine thứ 3 được Bộ Y tế thông qua, sau AstraZeneca và Sputnik V. Trong bối cảnh dịch bệnh đang diễn tiến phức tạp thì việc cấp phép khẩn cấp cho một loại vaccine là vô cùng cần thiết. Tuy nhiên, điều này không có nghĩa là vaccine bị bỏ qua các giai đoạn thử nghiệm lâm sàng bắt buộc. Việc cấp phép khẩn cấp vaccine Vero Cell vẫn đảm bảo được tính an toàn của vaccine vì đã thực hiện đầy đủ các quy trình đánh giá.\r\n\r\nNhững vaccine khi đưa vào sử dụng khẩn cấp tại Việt Nam, đều phải tuân thủ quy trình thử nghiệm lâm sàng gồm 3 bước, dựa trên nguyên tắc đảm bảo được 3 yếu tố: an toàn, sinh miễn dịch và hiệu quả bảo vệ.\r\n\r\nCơ chế của vaccine Trung Quốc có giống các loại vaccine khác?\r\n\r\nSo với các loại vaccine khác như Moderna hay Pfizer là vaccine mARN, thì vaccine Vero Cell của Sinopharm được phát triển theo cách truyền thống hơn. Nghĩa là vaccine Vero Cell sử dụng những phần tử virus đã bị tiêu diệt để kích thích cơ thể tạo ra miễn dịch.\r\n\r\nVaccine Sinopharm được tiêm đại trà hay tiêm cho đối tượng cụ thể?\r\n\r\nVaccine Vero Cell của Sinopharm được chỉ định tiêm cho đối tượng trên 18 tuổi.\r\n\r\nMột số đối tượng không nên tiêm vaccine Sinopharm\r\n\r\nNgười đã từng có dị ứng với bất kỳ thành phần nào của vaccine hoặc những loại vaccine tương tự.\r\nNgười có tình trạng thần kinh nghiêm trọng như viêm tủy cắt ngang, hội chứng Guillain-Barré, bệnh khử men,…\r\nBệnh nhân mắc các bệnh mãn tính nặng không kiểm soát được.\r\nPhụ nữ có thai hoặc đang cho con bú.\r\nHiệu quả của vaccine Sinopharm\r\n\r\nSau 14 ngày kể từ khi tiêm đủ liều, vaccine sẽ cho hiệu quả bảo vệ lên đến 79%. Hiệu quả trong việc phòng ngừa nhập viện là 79%.\r\n\r\nỞ đối tượng từ 60 tuổi trở lên cho thấy vaccine an toàn và tạo miễn dịch tốt. Dữ liệu về hiệu quả ở giai đoạn III còn hạn chế cho những người trên 60 tuổi vì cỡ mẫu nhỏ. Tuy nhiên, WHO vẫn đưa ra khuyến nghị sử dụng.\r\n\r\nNhìn chung, vaccine Vero Cell  vẫn phát huy hiệu quả tốt đối với hầu hết các trường hợp. Đây là một lựa chọn tốt trong việc giải quyết tình trạng khan hiếm vaccine Covid-19 trên toàn cầu.\r\n\r\nCần tiêm mấy mũi vaccine Sinopharm\r\n\r\nNên tiêm 2 liều để đảm bảo hiệu quả chủng ngừa. Liều thứ 2 được tiêm cách liều đầu tiên 28 ngày. Liều lượng cho mỗi lần tiêm là 0,5mL.\r\n\r\nNhững lưu ý khi tiêm vaccine Sinopharm\r\n\r\nCũng như những loại vaccine nào khác, vaccine Sinopharm có thể gây ra một số tác dụng phụ. Tuy nhiên, những tác dụng này thường không ảnh hưởng nhiều đến các hoạt động hằng ngày. Một vài ngày sau khi tiêm, những tác dụng phụ này sẽ biến mất.\r\n\r\nMột vài tác dụng phụ thường gặp\r\n\r\nĐau nhức tại vị trí tiêm.\r\nMệt mỏi, uể oải.\r\nNhức đầu, sốt, cảm giác ớn lạnh, buồn nôn…\r\nTiêu chảy\r\nNgoài ra, mặc dù hiếm nhưng cũng có khả năng gặp phải những phản ứng dị ứng nghiêm trọng hơn như chảy máu cam, hạ huyết áp, xung huyết mắt, xung huyết kết mạc, nóng bừng… Vì vậy, cần phải theo dõi kỹ lưỡng sức khỏe sau khi tiêm để có biện pháp xử trí kịp thời.\r\n\r\nTính đến thời điểm hiện tại, vaccine Vero Cell của Sinopharm vẫn được đánh giá là một trong những loại vaccine hiệu quả để phòng chống đại dịch COVID-19, góp phần giảm thiểu những thiệt hại do đại dịch gây ra.'),
(4, 'Vaccine Comirnaty', '1. Giới thiệu về Vắc xin\r\n\r\nVắc xin Comirnaty của Pfizer – BioNTech là vắc xin RNA (mRNA). Vắc xin mRNA giúp các tế bào cơ thể tạo ra một loại protein vô hại. Sau đó, protein vô hại này sẽ kích hoạt phản ứng miễn dịch của cơ thể tạo kháng thể chống lại vi rút SARS-COV-2. Vắc xin mRNA: không làm thay đổi hoặc tương tác với DNA của người được tiêm chủng theo bất kỳ cách nào, không sử dụng vi rút sống gây bệnh COVID-19; không thể gây bệnh COVID-19 cho người được tiêm chủng.\r\n\r\nVắc xin Comirnaty của Pfizer – BioNTech được Tổ chức Y tế thế giới thông qua chấp thuận sử dụng vắc xin trong trường hợp khẩn cấp vào ngày 31/12/2020. Vắc xin này đã được nhiều quốc gia trên thế giới cấp phép lưu hành và sử dụng.\r\n\r\nTại Việt Nam vắc xin Comirnaty của Pfizer – BioNTech đã được Bộ Y tế phê duyệt có điều kiện vắc xin cho nhu cầu cấp bách trong phòng, chống dịch bệnh COVID-19 tại Quyết định số 2908/QĐ-BYT ngày 12/6/2021.\r\n\r\nNước sản xuất:\r\n\r\n+    Pfizer Manufacturing Belgium NV - Bỉ.\r\n\r\n+    BioNTech Manufacturing GmbH - Đức.\r\n\r\nDạng trình bày của vắc xin\r\n\r\n+ Lọ vắc xin chứa 0,45 ml vắc xin dạng hỗn dịch đậm đặc pha tiêm, tương đương 6 liều vắc xin sau pha loãng với dung dịch pha. Mỗi liều gồm 0,3ml chứa 30mcg vắc xin mRNA COVID-19 (được bọc trong các hạt nano lipid).\r\n\r\n+ Vắc xin được đóng 195 lọ (1.170 liều) trong 1 khay. Mỗi khay có thể tích: 23 cm x 23 cm x 4 cm.\r\n\r\n+ Dung dịch pha tiêm là nước muối sinh lý 0.9 % (Natri clorua 0.9%) không chất bảo quản. Sử dụng bơm kim tiêm 5 ml (hoặc 3 ml) hút 1,8 ml để pha cho 1 lọ vắc xin.\r\n\r\nHiệu lực của vắc xin theo kết quả nghiên cứu lâm sàng cho thấy vắc xin Comirnaty của Pfizer – BioNTech có hiệu lực bảo vệ trước tác nhân gây bệnh COVID-19 từ 95% đến 100% sau khi tiêm liều thứ 2 khoảng 7 ngày.\r\n\r\n2.  Bảo quản vắc xin:\r\n\r\n2.1 Bảo quản vắc xin ở nhiệt độ âm sâu từ -90ºC đến -60ºC:\r\n\r\nỞ nhiệt độ -90ºC đến -60ºC vắc xin có thể được bảo quản cho đến ngày hết hạn sử dụng được ghi trên nhãn của lọ vắc xin (6 tháng kể từ ngày sản xuất).\r\n\r\nTrong trường hợp không có tủ âm sâu bảo quản có thể sử dụng thùng vận chuyển giữ nhiệt của Pfizer để tối đa hóa thời gian sử dụng. Thời gian bảo quản trong thùng vận chuyển được tối đa 30 ngày nếu được bổ sung đã khô thường xuyên theo định kỳ 5 ngày 1 lần. Không nên mở thùng vận chuyển giữ nhiệt quá 3 phút mỗi lần.\r\n\r\nĐể lọ vắc xin thẳng đứng trong khay và tránh ánh sáng. Không mở khay lọ hoặc tháo lọ vắc xin ra cho đến khi sẵn sàng rã đông /sử dụng vắc xin.\r\n\r\n2.2 Bảo quản vắc xin trong buồng lạnh/tủ lạnh âm -25°C đến -15°C.\r\n\r\nVắc xin có thể được bảo quản trong buồng lạnh/tủ lạnh âm từ -25°C đến -15°C tối đa 2 tuần.\r\n\r\nBất cứ khi nào vận chuyển vắc xin ở nhiệt độ -25°C đến -15°C thì thời gian vận chuyển đều được tính vào giới hạn 2 tuần. Tuy nhiên lưu ý vắc xin khi để ở nhiệt độ - 25°C đến -15°C thì chỉ được bảo quản trở lại nhiệt độ âm sâu (-90ºC đến -60ºC) 1 lần.\r\n\r\nGhi lại thời gian bắt đầu bảo quản vắc xin trong ở nhiệt độ “-25oC đến -15oC”.\r\n\r\nNếu hết thời hạn 2 tuần bảo quản trong buồng lạnh/tủ lạnh âm, chuyển vắc xin sang tủ lạnh dương +2oC đến +8oC thì bảo quản thêm tối đa 1 tháng (31 ngày). Ghi thời gian bắt đầu bảo quản ở +2oC đến +8oC.\r\n\r\n2.3 Bảo quản vắc xin trong buồng lạnh/tủ lạnh dương nhiệt độ +2°C đến +8°C.\r\n\r\nVắc xin có thể được bảo quản trong buồng lạnh/tủ lạnh dương từ +2oC đến +8oC tối đa 1 tháng (31 ngày). Bất cứ khi nào vận chuyển vắc xin ở nhiệt độ +2oC đến +8oC thì thời gian vận chuyển đều được tính vào giới hạn 1 tháng (31 ngày), tổng thời gian vận chuyển ở nhiệt độ +2oC đến +8oC không vượt quá 12 giờ.\r\n\r\nGhi ngày bắt đầu bảo quản ở nhiệt độ từ +2°C đến +8°C để theo dõi thời gian vắc xin đã được để trong buồng lạnh/tủ lạnh ở nhiệt độ này.\r\n\r\nKHÔNG làm đông băng lại vắc xin.\r\n\r\n \r\n\r\nLưu ý: Khi chuyển khay/ lọ vắc xin giữa các môi trường bảo quản:\r\n\r\n+    Không chạm vào lọ vắc xin cho đến khi có nhu cầu lấy chúng ra khỏi khay lọ để sử dụng hoặc chuyển môi trường bảo quản.\r\n\r\n+    Đeo găng tay bảo hộ khi chuyển các lọ vắc xin đông lạnh.\r\n\r\n+    Khi lấy lọ vắc xin ra khỏi khay không nên mang cả khay ra khỏi môi trường đông lạnh. Nếu khay lấy ra khỏi tủ âm từ -25°C đến -15°C , hãy để lại tủ đông trong vòng chưa đầy 1 phút.\r\n\r\n+    Sau khi lọ riêng lẻ được lấy ra khỏi khay ở nhiệt độ phòng, không được đưa trở lại bảo quản đông lạnh và nên được rã đông để sử dụng.\r\n\r\n+    Không làm đông lại các lọ đã rã đông.\r\n\r\n2.4 Bảo quản vắc xin sau khi pha loãng:\r\n\r\nBảo quản lọ vắc xin đã pha loãng ở nhiệt độ +2°C đến +8°C trên miếng xốp trong phích vắc xin. Vắc xin đã pha chỉ được sử dụng trong vòng 6 giờ\r\n\r\n3. Lịch tiêm chủng\r\n\r\nVắc xin Comirnaty của Pfizer – BioNTech được chỉ định tiêm phòng cho người từ 12 tuổi trở lên.\r\n\r\nLịch tiêm gồm 2 mũi, khoảng cách giữa mũi 2 và mũi 1 từ 3 đến 4 tuần (21 -28 ngày)\r\n\r\n4. Liều lượng, đường tiêm: 0,3ml, tiêm bắp.\r\n\r\n5. Chỉ định, chống chỉ định:\r\n\r\n5.1 Tiêm chủng vắc xin COVID-19 cho một số nhóm đối tượng đặc biệt:\r\n\r\n+    Nhóm người mắc bệnh kèm theo: Người có bệnh nền, bệnh mãn tính là đối tượng có nguy cơ nhiễm cao và mắc COVID-19 nặng nên cần được tiêm vắc xin, tuy nhiên trước khi tiêm cần được khám sàng lọc cẩn thận, tiêm chủng khi bệnh đã ổn định.\r\n\r\n+  Nhóm phụ nữ mang thai: không khuyến cáo tiêm vắc xin cho phụ nữ mang thai, vì không đủ dữ liệu về rủi ro xảy ra ở phụ nữ có thai. Tuy nhiên, nếu lợi ích của việc tiêm phòng vượt trội hơn các rủi ro tiềm ẩn của vắc xin đối với phụ nữ mang thai. Không khuyến cáo phải thử thai trước khi tiêm chủng.\r\n\r\n+    Nhóm phụ nữ cho con bú: Tiêm vắc xin nếu họ thuộc nhóm đối tượng nguy cơ. Không cần tạm ngừng cho con bú sau khi tiêm vắc xin.\r\n\r\n+    Nhóm người bị suy giảm miễn dịch: Có thể tiêm vắc xin nếu họ thuộc nhóm nguy cơ, các thông tin, hồ sơ về suy giảm miễn dịch cần được cung cấp cho nhân viên y tế để tư vấn về lợi ích và rủi ro cũng như theo dõi, đánh giá sau tiêm chủng.\r\n\r\n+    Nhóm người có bệnh tự miễn: Có thể được tiêm chủng nếu họ không có các chống chỉ định tiêm vắc xin.\r\n\r\n+    Nhóm người bị HIV: Có thể tiêm vắc xin nếu đã kiểm soát tốt bằng điều trị thuốc kháng vi rút và họ thuộc nhóm nguy cơ cần tiêm vắc xin.\r\n\r\n+    Nhóm người có tiền sử liệt mặt: có thể tiêm vắc xin nếu không có chống chỉ định\r\n\r\n+    Nhóm người có tiền sử dùng kháng thể đơn dòng hoặc huyết tương của người bệnh để điều trị COVID-19 trước đó: Tiêm vắc xin được ít nhất sau 90 ngày để tránh ảnh hưởng của việc điều trị tới đáp ứng miễn dịch do vắc xin gây ra.\r\n\r\n5.2 Chống chỉ định:\r\n\r\n+    Có tiền sử phản ứng dị ứng (phản vệ) với bất cứ thành phần nào của vắc xin Comminaty Pfizer - BioNTech COVID-19. Đặc biệt, không nên sử dụng cho những người có tiền sử phản ứng dị ứng nghiêm trọng với polyethylene glycol (PEG) hoặc các phân tử liên quan.\r\n\r\n+    {C}{C}Những người có phản ứng dị ứng ngay lập tức (ví dụ: phản vệ, nổi mày đay, phù mạch, suy hô hấp) với liều đầu tiên của vắc xin này sẽ không tiêm liều tiếp theo.\r\n\r\n5.3 Tiêm chủng đồng thời cùng các vắc xin khác:\r\n\r\n+  Chưa có đầy đủ dữ liệu về khả năng sử dụng thay thế cho nhau của vắc xin với vắc xin phòng COVID-19 khác. Khuyến cáo tiêm đủ 2 liều của cùng một loại vắc xin phòng COVID-19.\r\n\r\n+    Nên tiêm vắc xin phòng COVID-19 tối thiểu cách 14 ngày với tiêm chủng các vắc xin phòng bệnh khác.\r\n\r\n6. Phản ứng sau tiêm chủng:\r\n\r\n+    Phản ứng rất phổ biến (≥10%) như đau đầu, đau khớp, đau cơ, đau tại vị trí tiêm, mệt mỏi, ớn lạnh, sốt (tần suất cao hơn đối với liều thứ 2), sưng tại chỗ tiêm.\r\n\r\n+    Phản ứng phổ biến (từ 1/100 đến dưới 1/10): Buồn nôn, mẩn đỏ chỗ tiêm\r\n\r\n+    Không phổ biến (≥1/1.000 đến ˂1/100): Nổi hạch, mất ngủ, đau tứ chi, khó chịu, ngứa chỗ tiêm.\r\n\r\n+    Hiếm (≥1/10.000 đến ˂ 1/1.000): Bell’s palsy (liệt mặt ngoại biên cấp tính).\r\n\r\nNhà sản xuất chưa có khuyến cáo về phản ứng phản vệ,viêm cơ tim, huyết khối giảm cầu. Những phản ứng này được ghi nhận ở một số quốc gia với tỷ lệ rất hiếm gặp.\r\n\r\nTài liệu: Sổ tay Hướng dẫn thực hành tiêm chủng vắc xin COVID-19 Comirnaty của Pfizer- BioNTech của Chương trình Tiêm chủng mở rộng Quốc gia. Công văn 1209/VSDTTU-TCQG của Viện vệ sinh dịch tể trung ương, ngày 15 tháng 07 năm 2021.'),
(6, 'Vắc xin Spikevax', 'Vắc xin mRNA-1273 hay Spikevax (vắc xin COVID-19 Moderna) là một trong các vắc xin mRNA đầu tiên được sản xuất để phòng ngừa SARS-CoV-2. Vắc xin này được phát triển và sử dụng trên người chỉ trong vòng 2 tháng sau khi kết quả giải trình tự gen của SARS-CoV-2 được công bố. Vắc xin được sử dụng qua đường tiêm bắp, liệu trình 2 liều cách nhau 28 ngày. mRNA-1273 được cấp phép lưu hành tại Hoa Kỳ và Liên minh Châu Âu [5], [7].\r\n\r\n \r\n\r\nHiệu quả\r\n\r\n \r\n\r\n     Trong một thử nghiệm lâm sàng lớn, pha III, có đối chứng, mRNA-1273 được ghi nhận đạt hiệu quả  94,1% (95% CI 89,3-96,8) trong dự phòng COVID-19 có triệu chứng kể từ ngày thứ 14 sau khi tiêm liều thứ 2 [1].\r\n\r\n \r\n\r\n     Hiệu quả này được đánh giá sau khi phân tích 196 trường hợp mắc COVID-19 (11 trường hợp trong nhóm đã được tiêm vắc xin và 185 trường hợp trong nhóm tiêm giả dược) trong tổng số gần 30.000 người tham gia từ 18 tuổi trở lên với thời gian theo dõi trung bình là 2 tháng sau tiêm vắc xin. Đối với nhóm người ≥65 tuổi được tiêm vắc xin, hiệu quả của vắc xin là 86,4% (95% CI 61,4-95,5). Trong quần thể nghiên cứu, có 30 trường hợp nặng và tất cả đều xuất hiện trong nhóm tiêm giả dược. Trong khoảng 2000 người chỉ tiêm 1 liều vắc xin hoặc sử dụng giả dược, hiệu quả của vắc xin sau 1 liều là 80,2% (95% CI 55,2-92,5); tuy nhiên, những người này chỉ được theo dõi trung bình 28 ngày, vì vậy hiệu quả bảo vệ khi tiêm 1 liều chưa được xác định chính xác. Phân tính sơ bộ cũng gợi ý vắc xin có thể giảm các trường hợp nhiễm COVID-19 không có triệu chứng trong khoảng thời gian giữa hai mũi tiêm [10].\r\n\r\n \r\n\r\n     Các nghiên cứu quan sát đánh giá hiệu quả của vắc xin cũng hỗ trợ kết quả từ thử nghiệm lâm sàng [12], [14]. Trong một nghiên cứu trên 489 người từ 65 tuổi trở lên, những người này nhập viện tại Hoa Kỳ với biểu hiện lâm sàng của COVID 19, chỉ có 1 người (0,5%) được khẳng định mắc COVID 19 bởi xét nghiệm SARS-CoV-2 đã được tiêm 2 liều vắc xin mRNA so với 18 người (8%) có xét nghiệm SARS-CoV-2 âm tính; hiệu quả ước tính của vắc xin trong dự phòng COVID-19 nhập viện là 94% [14].\r\n\r\n \r\n\r\nĐộ an toàn và các phản ứng có hại\r\n\r\n \r\n\r\n     Các phản ứng có hại tại chỗ và toàn thân tương đối phổ biến, đặc biệt là sau liều vắc xin thứ 2, hầu hết các phản ứng ở mức độ nhẹ và trung bình (không cản trở hoạt động hàng ngày hay cần giảm đau) và thường tự khỏi trong 2 ngày sau tiêm vắc xin [4], [9], [11]. Trong số gần 2 triệu người được tiêm vắc xin tại Hoa Kỳ đã trả lời khảo sát sau tiêm, phản ứng tại vị trí tiêm (chủ yếu là đau, cũng có trường hợp mẩn đỏ, sưng và ngứa chỗ tiêm) được báo cáo với tỷ lệ 74 và 82% sau mỗi liều vắc xin; mệt mỏi, đau đầu, và đau cơ được báo cáo với tỷ lệ 33, 27, và 21% sau khi tiêm liều đầu tiên và 60, 53, và 51% sau liều thứ 2 [4].\r\n\r\n \r\n\r\n     Sau liều thứ hai, sốt và rét run xuất hiện với tỷ lệ khoảng 40% và đau khớp là 32%. Các phản ứng thường được báo cáo vào ngày sau khi tiêm chủng. Các phản ứng tại chỗ và toàn thân ít xảy ra hơn ở những người từ 65 tuổi trở lên, tuy nhiên, các phản ứng này vẫn tương đối phổ biến.\r\n\r\n \r\n\r\n     Phản vệ sau tiêm vắc xin được báo cáo với tỷ lệ khoảng 2,8 biến cố/1.000.000 triệu liều vắc xin [7][13]. Sau 7,581,429 liều mRNA-1273 đầu tiên được tiêm tại Hoa Kỳ, có 21 trường hợp phản vệ đã được báo cáo cho CDC Hoa Kỳ; 86% xuất hiện ở bệnh nhân có tiền sử dị ứng trước đó và 90% xảy ra trong 30 phút. Có một tỷ lệ hiếm gặp liệt dây thần kinh mặt (Bell\'s palsy), phản ứng được coi là có khả năng liên quan đến vắc xin. Tuy nhiên, tỷ lệ này không vượt quá tỷ lệ nền nói chung trên quần thể (15 đến 30 trường hợp/100.000 người/năm) [13]. Không có phản ứng có hại nghiêm trọng liên quan đến vắc xin được xác định trong chương trình giám sát sau khi lưu hành [11]. Tính đến 12/04/2021, không ghi nhận báo cáo về huyết khối tĩnh mạch cùng với giảm tiểu cầu sau tiêm gần 98 triệu liều mRNA-1273 tại Hoa Kỳ [2].\r\n\r\n \r\n\r\n     Viêm cơ tim và viêm màng ngoài tim cũng là các phản ứng đang được các Cơ quan quản lý dược phẩm tại Hoa Kỳ, Châu Âu, Israel rà soát mối liên quan với vắc xin mRNA như mRNA-1273 [3], [8]. Gần đây, Ủy ban đánh giá nguy cơ về Cảnh giác Dược của Châu Âu (PRAC) đã kết luận viêm cơ tim và viêm màng ngoài tim là các phản ứng có hại hiếm gặp có thể xuất hiện sau khi tiêm vắc xin mRNA-1273 [6]. PRAC khuyến nghị nhân viên y tế cần cảnh giác với các dấu hiệu và triệu chứng như khó thở, tim đập mạnh có thể không đều và đau ngực. Đồng thời, cần tư vấn người bệnh gọi hỗ trợ y tế ngay khi xuất hiện các triệu chứng này.'),
(7, 'Vắc xin Janssen', 'Vắc xin ngừa COVID-19 của Johnson & Johnson là vắc xin đầu tiên trên thế giới chỉ cần tiêm 1 liều duy nhất. Tuy nhiên, sự xuất hiện của biến thể Delta đã khiến hãng cân nhắc việc tiêm tăng cường mũi 2.\r\n\r\nKết quả thử nghiệm lâm sàng được Johnson & Johnson công bố ngày 21-9 cho thấy nếu tiêm mũi 2 khoảng 8 tuần sau mũi đầu tiên, nguy cơ bệnh nhân có triệu chứng từ nhẹ tới nặng sẽ giảm tới 94%. Mức độ hiệu quả khi tiêm 1 mũi là 74%.\r\n\r\nCũng theo Johnson & Johnson, lượng kháng thể khi tiêm mũi 2 trong 8 tuần sau mũi 1 sẽ tăng từ 4 đến 6 lần.\r\n\r\nMột thử nghiệm khác của Johnson & Johnson cho thấy nếu tiêm mũi 2 khoảng 6 tháng sau mũi đầu tiên, lượng kháng thể sẽ tăng tới 12 lần, theo báo New York Times. \r\n\r\nKết quả thử nghiệm này được công bố hồi tháng trước với mức tăng kháng thể chỉ là 9 lần. Tuy nhiên trong thông cáo ngày 21-9, Johnson & Johnson cho biết lượng kháng thể thực sự đã tăng đến 12 lần.\r\n\r\nTheo New York Times, việc lượng kháng thể tăng gấp 12 lần ở nhóm người tiêm mũi 2 sau 6 tháng làm dấy lên câu hỏi phải chăng chờ đợi tiêm mũi 2 càng lâu thì hiệu quả càng cao? Hiện Johnson & Johnson chưa có câu trả lời khẳng định cho điều này.\r\n\r\nCác tác dụng phụ khi tiêm 2 liều tương đương với những tác dụng phụ đã thấy trong các nghiên cứu nếu tiêm 1 liều.\r\n\r\nTheo Johnson & Johnson, các dữ liệu thử nghiệm đã được trình lên Cục quản lý thực phẩm và dược phẩm Mỹ (FDA) để thuyết phục cơ quan này chấp thuận kế hoạch tiêm tăng cường mũi 2. Tính từ tháng 2-2021 đến nay, khoảng 14,6 triệu người ở Mỹ đã được tiêm vắc xin Johnson & Johnson.\r\n\r\nMỹ đang thận trọng với kế hoạch tiêm tăng cường cho những người được tính đã tiêm chủng đầy đủ.\r\n\r\nHồi cuối tuần trước, một ủy ban cố vấn cho FDA khuyến nghị những người đã tiêm loại vắc xin có phác đồ 2 mũi, trên 65 tuổi hoặc dễ bị tổn thương nếu mắc COVID-19 nên được tiêm tăng cường mũi 3.\r\n\r\nTheo ủy ban này, nguyên nhân là do hiệu quả bảo vệ của vắc xin Pfizer và Moderna suy giảm đáng kể sau một thời gian.\r\n\r\nTrong khi đó, vắc xin của Johnson & Johnson lại ít có dấu hiệu suy yếu, theo Hãng tin Reuters. Nghiên cứu cho thấy hiệu quả ngăn chặn bệnh nhân COVID-19 nhập viện của vắc xin Johnson & Johnson vẫn ở mức cao là 81%.\r\n\r\nĐối với ngăn ngừa lây nhiễm, vắc xin Johnson & Johnson cho hiệu quả tới 79%. Theo Johnson & Johnson, hiệu quả ngăn chặn nhập viện của vắc xin có thay đổi chút ít ở các nhóm dưới 60 và trên 60 tuổi.'),
(8, 'Vaccine Hayat - Vax', 'Theo thông tin của Bộ Y tế Việt Nam, vaccine Hayat – Vax được sản xuất bởi Công ty TNHH Viện Sinh phẩm Bắc Kinh trực thuộc Tập đoàn Biotec Quốc gia Trung Quốc (CNBG). Quá trình đóng gói, sơ cấp, thứ cấp vaccine được thực hiện tại xưởng của công ty Julphar (Gulf Pharmaceutical Industries) đến từ các tiểu Vương quốc Ả Rập Thống nhất (UAE).\r\n\r\nHayat - Vax\r\nVaccine Hayat – Vax đã được Bộ Y tế cấp phép, sử dụng trong phòng chống dịch Covid-19\r\nThực chất vaccine Hayat – Vax là sản phẩm hợp tác giữa Viện Sinh phẩm Bắc Kinh (Trung Quốc) với G42 Medications Trading LLC – Một tập đoàn công nghệ lớn của UAE\r\n\r\nVề cơ bản, vaccine Hayat – Vax có thành phần hoạt chất, công dụng y hệt vaccine Sinopharm của Trung Quốc. Khác biệt duy nhất là Hayat Vax Sinopharm được sản xuất tại UAE. Để lan tỏa thông điệp cả thế giới cùng phòng chống COVID-19 đến cộng đồng và người dân vùng Trung Đông, nhà sản xuất đã quyết định đổi tên loại vaccine này thành Hayat – Vax.\r\n\r\nTừ “Hayat” theo ngôn nghĩa UAE là “sự sống”. Ý nghĩa tên gọi của loại vaccine thể hiện niềm tin cả thế giới sẽ chiến thắng đại dịch Covid-19, sự sống sẽ được duy trì, trả lại sự bình yên cho toàn cầu.\r\n\r\nHayat – Vax sản sinh miễn dịch chống lại virus Covid-19 như thế nào?\r\nHayat – Vax Sinopharm là vaccine bất hoạt, có khả năng tạo miễn dịch cho cơ thể từ chính virus Covid-19. Theo lý giải của các chuyên gia, khi virus Covid-19 xâm nhập vào cơ thể, hệ miễn dịch sẽ nhanh chóng nhận biết kháng nguyên đặc trưng của loại virus này. Sau đó, cơ thể sẽ sản sinh ra các kháng thể tương ứng với kháng nguyên của virus, tiếp cận và bất hoạt (vô hiệu hóa) virus gây bệnh. Sau khi tiêu diệt thành công virus, kháng thể này vẫn còn tồn tại trong cơ thể một thời gian dài, bảo vệ người bệnh khỏi nguy cơ tái mắc.\r\n\r\nDựa trên cơ chế trên, các nhà nghiên cứu vaccine Hayat – Vax đã tìm ra cách để cơ thể chủ động có kháng thể chống lại virus Covid-19. Trước tiên, các chuyên gia đã nuôi cấy virus SARS-CoV-2, sau đó bất hoạt chúng bằng cách sử dụng nhiệt, tia xạ hoặc hóa chất.\r\n\r\nKhi đó, virus sẽ chết đi, không có khả năng phát triển, nhân lên và gây bệnh nữa. Khi đi vào cơ thể, virus bất hoạt sẽ kích thích hệ miễn dịch sản sinh ra kháng thể chống lại virus và “ghi nhớ” lại quá trình này. Khi người bệnh bị nhiễm virus gây bệnh thật sự, cơ thể đã có sẵn kháng thể. Chúng sẽ nhanh chóng tiêu diệt được virus, ngăn ngừa nguy cơ bệnh tiến triển nặng và gây biến chứng.\r\n\r\nHayat - Vax\r\nCơ chế sản sinh miễn dịch của vắc-xin Hayat – Vax\r\nHayat – Vax vaccine có hiệu quả ra sao?\r\nSau khi đã được tiêm vaccine Hayat – Vax, người được tiêm có thể hoàn toàn yên tâm rằng nguy cơ mắc bệnh đã được giảm thiểu. Vaccine này đã trải qua các bước kiểm định nghiêm ngặt trước khi đưa vào ứng dụng, đảm bảo an toàn, hiệu quả cho phần lớn người dùng.\r\n\r\nTheo SCMP, Vaccine Hayat – Vax đã được thử nghiệm đầy đủ qua 3 giai đoạn. Trong đó, vào ngày 23/06/2020, Hayat – Vax đã hoàn thành cuộc thử nghiệm giai đoạn 3 trên hơn 40.000 tình nguyện viên từ 18 – 59 tuổi, đến từ 125 quốc gia khác nhau như: UAE, Bahrain, Peru, Ai Cập, Maroc và Argentina,…\r\n\r\nKết quả cho thấy Hayat – Vax đạt hiệu quả bảo vệ lên tới 86%. Việc loại vaccine này được thử nghiệm lâm sàng với sự đa dạng về sắc tộc là yếu tố rất quan trọng để khẳng định sự an toàn, hiệu quả khi sử dụng tại các quốc gia, khu vực khác nhau trên toàn thế giới.\r\n\r\nTại Abu Dhabi, Hayat-vax là vaccine phòng chống Covid-19 đầu tiên được đất nước này phê duyệt, trước Pfizer. Theo nghiên cứu, vaccine này đã chứng minh được hiệu quả cao trong bảo vệ người bệnh. Tỷ lệ chuyển biến bệnh nặng giảm đến 93%. Đồng thời, hiệu quả trong việc ngăn ngừa tử vong đạt 100%. Cũng Tại Abu Dhabi Vaccine Hayat-vax là vaccine duy nhất được phê duyệt và sử dụng.\r\n\r\nNgày 30 tháng 12 năm 2020, Cục Quản lý Dược Trung Quốc quyết định đưa vaccine Hayat – Vax vào sử dụng. Theo nghiên cứu, tỷ lệ sản sinh kháng thể trung hòa của Hayat – Vax đạt 99.52%, hiệu quả bảo vệ của vaccine đạt 79,34%.\r\n\r\nTrong khi đó, Tổ chức Y tế Thế giới (WHO) cũng đã tiến hành thử nghiệm giai đoạn 3 trên những người khỏe mạnh, nam giới dưới 60 tuổi. Kết quả ghi nhận, sau 14 ngày kể từ khi tiêm đủ hai liều, hiệu quả giảm nguy cơ nhiễm Covid-19 và nhập viện đạt 79%.\r\n\r\nHạn sử dụng và cách bảo quản của vaccine Hayat – Vax\r\nVacxin Hayat có hạn sử dụng là 12 tháng, trong khi đó, một số vaccine Covid-19 khác có hạn sử dụng kéo dài lên tới 24 tháng.\r\n\r\nTuy nhiên, một trong những lợi thế vượt trội của vaccine Hayat – Vax là rất dễ bảo quản. Loại vaccine này có thể được trữ trong điều kiện nhiệt độ 2 – 8 độ C, không yêu cầu nhiệt độ quá thấp như nhiều vaccine khác. Vì thế, ngay cả tủ lạnh bình thường cũng có thể dùng để bảo quản vaccine Hayat – Vax. Điều này giúp các nước đang phát triển, nguồn lực về cơ sở vật chất, trang thiết bị y tế có thể lưu trữ, vận chuyển vaccine theo số lượng lớn dễ dàng hơn.\r\n\r\n \r\n\r\nHayat - Vax\r\nVaccine Hayat – Vax có thể được bảo quản dễ dàng\r\nĐối tượng nên và không nên tiêm vắc xin Hayat – Vax\r\nTheo các chuyên gia y tế, không phải bất cứ ai cũng có thể tiêm vaccine Hayat – Vax. Việc tiêm chủng cần thực hiện đúng theo chỉ định sau:\r\n\r\nTrường hợp được chỉ định tiêm: Vaccine Hayat – Vax được chỉ định tiêm cho những người trưởng thành khỏe mạnh từ 18 tuổi trở lên.\r\n\r\nTrường hợp hoãn tiêm: Những người cần hoãn tiêm vaccine Covid-19 bao gồm: Người đang sốt ≥ 37,5 độ C, hoặc thân nhiệt ≤ 35,5 độ C.'),
(9, 'Vaccine Abdala', 'Việt Nam phê chuẩn sử dụng đối với vắc xin Abdala\r\n\r\nTheo hướng dẫn mới nhất của Bộ Y tế, vắc xin phòng Covid-19 Abdala sẽ được tiêm cho người từ 19 đến 65 tuổi. Chống chỉ định được đưa ra đối với người dưới 19 tuổi, người mẫn cảm với bất cứ thành phần nào của vắc xin...\r\n\r\nNgười tiêm vắc xin sẽ nhận 3 liều, tiêm cách nhau 14 ngày. Các trường hợp cần thận trọng khi tiêm vắc xin Abdala bao gồm những người có bệnh nền mãn tính, người mắc bệnh tự miễn hoặc chuyển hóa nội tiết, tăng huyết áp, nhiễm trùng cấp tính. Phụ nữ có thai cần cân nhắc lợi ích của việc tiêm vắc xin Abdala trong thai kỳ so với rủi ro tiềm ẩn đối với thai phụ và thai nhi.\r\n\r\nTiêm vắc xin Abdala của Cuba - những điều nên biết\r\nAbdala là vắc xin thứ 8 được Việt Nam phê duyệt khẩn cấp. Ảnh: Reuters. \r\nAbdala là vắc xin thứ 8 được Việt Nam phê duyệt khẩn cấp hôm 17-9 trong điều kiện cấp bách phòng, chống dịch Covid-19. Đây là loại vắc xin được các nhà khoa học Cuba phát triển và trực tiếp tiêm phòng cho đội ngũ nhân viên y tế nước này gồm 141.000 người từ tháng 3 vừa qua. Tới tháng 5-2021, chương trình vắc xin của Cuba đã được mở rộng cho tất cả người dân nước này. Đây là biện pháp cấp bách nhằm kiểm soát và giảm mức độ lây lan của các biến thể SARS-CoV-2 đang lan rộng ra toàn thế giới, trong đó có Cuba.\r\n\r\nSau khi tiêm vắc xin Abdala, phản ứng thể nhẹ chiếm 97% và không phải điều trị bằng thuốc. Các phản ứng như đau, đỏ cứng tại chỗ tiêm, nhức đầu, nhức toàn thân, buồn ngủ, tăng huyết áp, và mệt mỏi thường xuất hiện từ 24 đến 48 giờ sau khi tiêm. Rất ít biến chứng bất lợi; các phản ứng như buồn nôn, đau khớp xảy ra ít, chỉ khoảng 0,1%.\r\n\r\nHiệu quả tương đương các loại vắc xin tốt nhất\r\n\r\nVắc xin Abdala sử dụng phần hoạt chất protein tái tổ hợp vùng liên kết thụ thể virus tương tác với thụ thể ACE2 của người. Nói một cách dễ hiểu hơn, theo hãng ABC News của Australia, Adbala tiêm trực tiếp một phần nhỏ gai protein của virus vào cơ thể người để cơ thể tự sản xuất kháng thể chống lại virus SARS-CoV-2, giúp cơ thể có khả năng bảo vệ khi bị virus thực sự xâm nhập. Cơ chế hoạt động của Abdala không giống với các loại vắc xin mRNA (vắc xin dạng “người đưa tin”) như Moderna, Pfizer hay các loại vắc xin vector như AstraZeneca. Các loại vắc xin này đều đưa một đoạn mã gene của virus vào cơ thể để kích thích sản sinh kháng thể.\r\n\r\nVắc xin Abdala cũng không đòi hỏi phải bảo quản ở nhiệt độ cực thấp, vốn là một khó khăn đối với các nước thiếu cơ sở hạ tầng lưu trữ vắc xin. Trong khi đó, Abdala cũng có hiệu quả phòng Covid-19 lên tới trên 90% như các loại vắc xin tốt nhất hiện nay và giúp giảm đáng kể khả năng lây nhiễm thông qua người đã tiêm, giảm tỷ lệ chuyển nặng và tử vong.\r\n\r\nNăng lực sẵn có, phát triển nhanh chóng\r\n\r\nPhân tích của các chuyên gia cho rằng, sở dĩ Cuba nhanh chóng có được vắc xin phòng Covid-19 là do nước này vẫn thường xuyên đầu tư vào y tế và nghiên cứu khoa học trong nhiều thập niên trước đây. Theo ABC News, đầu năm 2020, ngay sau khi Chủ tịch Miguel Díaz-Canel đề nghị cả nước dồn mọi nguồn lực nghiên cứu vắc xin phòng Covid-19, toàn bộ ngành công nghệ sinh học Cuba đã vào cuộc. Kết quả là đã có 5 loại vắc xin được phát triển, trong đó 3 loại, gồm Abdala, Soberana 2 và Soberana Plus, đã được cấp phép sử dụng khẩn cấp.\r\n\r\nTiến sĩ José Moya, đại diện Tổ chức Y tế thế giới (WHO) và Tổ chức Y tế liên Mỹ (PAHO) tại Cuba, cho rằng việc vắc xin Abdala đem lại hiệu quả phòng dịch trên 90% “là một tin tốt lành và đem lại sự lạc quan cho cả khu vực, nơi rõ ràng đang rất thiếu vắc xin”. Tiến sĩ Moya là người theo sát quá trình phát triển các loại vắc xin của Cuba.\r\n\r\nThực tế cũng cho thấy, Cuba là nước có kinh nghiệm hơn 30 năm nghiên cứu và sản xuất các loại vắc xin và hơn 80% vắc xin nước này đang sử dụng là do tự sản xuất. Trong đó, vắc xin viêm gan B và viêm màng não của Cuba hiện đang được sử dụng rộng rãi ở khu vực Mỹ Latinh và các quốc gia khác trên toàn thế giới với sự đảm bảo của WHO. Theo Tiến sĩ Moya, những kinh nghiệm của Cuba và uy tín của các loại vắc xin trước đây của nước này là sự một sự bảo đảm chắc chắn rằng vắc xin phòng Covid-19 Abdala là một trong những loại vắc xin tốt nhất trong khu vực.\r\n\r\nTrong bài viết \"Cuba announces its Abdala vaccine is 92.28% effective against Covid-19\" (Cuba tuyên bố vắc xin Abdala có hiệu quả ngăn chặn Covid-19 đạt 92,28%), tờ El País của Tây Ban Nha cho biết Cuba dự kiến sẽ hoàn thành tiêm phòng Covid-19 cho 100% dân số vào cuối năm nay bằng chính các loại vắc xin do nước này tự phát triển và sản xuất.');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_chu_de`
--
ALTER TABLE `tbl_chu_de`
  ADD PRIMARY KEY (`chu_de_id`);

--
-- Chỉ mục cho bảng `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Chỉ mục cho bảng `tbl_doctors`
--
ALTER TABLE `tbl_doctors`
  ADD PRIMARY KEY (`bac_si_id`);

--
-- Chỉ mục cho bảng `tbl_lien_he`
--
ALTER TABLE `tbl_lien_he`
  ADD PRIMARY KEY (`contact_id`);

--
-- Chỉ mục cho bảng `tbl_nguoi_dung`
--
ALTER TABLE `tbl_nguoi_dung`
  ADD PRIMARY KEY (`nguoi_dung_id`);

--
-- Chỉ mục cho bảng `tbl_reply_comment`
--
ALTER TABLE `tbl_reply_comment`
  ADD PRIMARY KEY (`rep_comment_id`);

--
-- Chỉ mục cho bảng `tbl_tin_tuc`
--
ALTER TABLE `tbl_tin_tuc`
  ADD PRIMARY KEY (`tin_tuc_id`),
  ADD KEY `hashtag_id` (`hashtag_id`),
  ADD KEY `chu_de_id` (`chu_de_id`);

--
-- Chỉ mục cho bảng `tbl_tin_tuc_hashtag`
--
ALTER TABLE `tbl_tin_tuc_hashtag`
  ADD PRIMARY KEY (`hashtag_id`);

--
-- Chỉ mục cho bảng `tbl_tu_van`
--
ALTER TABLE `tbl_tu_van`
  ADD PRIMARY KEY (`tu_van_id`);

--
-- Chỉ mục cho bảng `tbl_vaccine`
--
ALTER TABLE `tbl_vaccine`
  ADD PRIMARY KEY (`vaccine_id`);

--
-- Chỉ mục cho bảng `tbl_vaccine_chi_tiet`
--
ALTER TABLE `tbl_vaccine_chi_tiet`
  ADD KEY `vaccine_id` (`vaccine_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_chu_de`
--
ALTER TABLE `tbl_chu_de`
  MODIFY `chu_de_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_doctors`
--
ALTER TABLE `tbl_doctors`
  MODIFY `bac_si_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_lien_he`
--
ALTER TABLE `tbl_lien_he`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `tbl_nguoi_dung`
--
ALTER TABLE `tbl_nguoi_dung`
  MODIFY `nguoi_dung_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `tbl_reply_comment`
--
ALTER TABLE `tbl_reply_comment`
  MODIFY `rep_comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_tin_tuc`
--
ALTER TABLE `tbl_tin_tuc`
  MODIFY `tin_tuc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `tbl_tin_tuc_hashtag`
--
ALTER TABLE `tbl_tin_tuc_hashtag`
  MODIFY `hashtag_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_tu_van`
--
ALTER TABLE `tbl_tu_van`
  MODIFY `tu_van_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_vaccine`
--
ALTER TABLE `tbl_vaccine`
  MODIFY `vaccine_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_vaccine_chi_tiet`
--
ALTER TABLE `tbl_vaccine_chi_tiet`
  ADD CONSTRAINT `tbl_vaccine_chi_tiet_ibfk_1` FOREIGN KEY (`vaccine_id`) REFERENCES `tbl_vaccine` (`vaccine_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
