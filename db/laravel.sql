-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 05, 2020 at 11:20 AM
-- Server version: 10.4.15-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u556391734_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `body`, `updated_at`, `created_at`) VALUES
(1, 'phuoc test', 'bodyedit', '2020-05-24 11:52:06', '2020-05-24 04:50:35'),
(2, 'test2', 'bodytest2', '', '2020-05-26 09:09:40'),
(3, 'test3', 'bodytest3', '', '2020-05-26 09:10:19'),
(4, 'test4', 'bodytest4', '', '2020-05-26 09:10:19'),
(5, 'test5', 'bodytest5', '', '2020-05-26 09:11:10'),
(6, 'test6', 'bodytest6', '', '2020-05-26 09:11:10'),
(8, 'test8', 'bodytest8', '', '2020-05-26 09:12:05');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order_value` tinyint(4) NOT NULL DEFAULT 1,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `order_value`, `updated_at`, `created_at`) VALUES
(1, 'MÁY XÚC LẬT SDLG', 1, '2020-06-07 00:42:55', '2020-05-29 12:48:42'),
(2, 'MÁY XÚC LẬT MINI', 2, '2020-05-30 03:23:11', '2020-05-29 12:48:42'),
(3, 'MÁY NÂNG', 3, '2020-05-30 03:32:40', '2020-05-30 03:32:11'),
(4, 'MÁY MÚC', 4, '2020-05-30 03:32:50', '2020-05-30 03:32:28'),
(5, 'XE CHUYÊN DỤNG', 5, '2020-05-30 03:38:44', '2020-05-30 03:33:15'),
(6, 'XE BEN CHẠY MỎ', 6, '2020-05-30 03:38:51', '2020-05-30 03:33:32'),
(7, 'PHỤ TÙNG', 7, '2020-06-10 06:53:38', '2020-05-30 03:33:44');

-- --------------------------------------------------------

--
-- Table structure for table `configurations`
--

CREATE TABLE `configurations` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `admin_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video_ytb` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phonenumber` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hotline` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `configurations`
--

INSERT INTO `configurations` (`id`, `title`, `company_name`, `role`, `admin_name`, `video_ytb`, `address`, `phonenumber`, `email`, `website`, `hotline`, `updated_at`, `created_at`) VALUES
(1, 'Máy xúc lật mini, máy cơ giới chất lượng tại Đà Nẵng | miền trung', 'Công Ty TNHH Hoằng Giai', 'NHÂN VIÊN KINH DOANH', 'TRƯƠNG HẢI HOÀNG', 'https://www.youtube.com/embed/ahti_WTmuec,\r\nhttps://www.youtube.com/embed/PTB-pUZuxL0', 'Quốc lộ 1A, Thôn Phong Nam, Xã Hòa Châu, Huyện Hòa Vang, Thành Phố Đà Nẵng', '0762562968', 'truonghaihoang1996@gmail.com', 'xuclatmientrung.com', '0762562968', '2020-09-22 10:27:13', '2020-05-31 06:58:29');

-- --------------------------------------------------------

--
-- Table structure for table `master_specifications`
--

CREATE TABLE `master_specifications` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_bold` tinyint(1) DEFAULT 0,
  `unit` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `categories_id` int(11) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `master_specifications`
--

INSERT INTO `master_specifications` (`id`, `name`, `is_bold`, `unit`, `categories_id`, `created_at`, `updated_at`) VALUES
(1, 'Trọng lượng máy', 0, 'kg', 1, '2020-06-06 07:26:56', '2020-06-06 07:26:56'),
(2, 'Dung tích gầu tiêu chuẩn', 0, 'm3', 1, '2020-06-06 07:29:49', '2020-06-06 07:29:49'),
(3, 'Trọng lượng nâng', 0, 'kg', 1, '2020-06-06 07:29:49', '2020-06-06 07:29:49'),
(4, 'Độ leo dốc', 0, 'o', 1, '2020-06-06 07:33:13', '2020-06-06 07:33:13'),
(5, 'Vận tốc lớn nhất', 0, 'km/h', 1, '2020-06-06 07:33:13', '2020-06-06 07:33:13'),
(6, 'Độ đổ lớn nhất', 0, 'o', 1, '2020-06-06 07:33:13', '2020-06-06 07:33:13'),
(7, 'Thời gian nâng hạ đổ', 0, 's', 1, '2020-06-06 07:33:13', '2020-06-06 07:33:13'),
(8, 'Tốc độ vòng quay r/m', 0, 'r/m', 1, '2020-06-06 07:33:13', '2020-06-06 07:33:13'),
(9, 'Chiều cao đổ', 0, 'mm', 1, '2020-06-06 07:33:13', '2020-06-06 07:33:13'),
(10, 'Khoảng cách bốc xếp', 0, 'mm', 1, '2020-06-06 07:33:13', '2020-06-06 07:33:13'),
(11, 'Cự ly trục', 0, 'mm', 1, '2020-06-06 07:33:13', '2020-06-06 07:33:13'),
(12, 'Cự ly bánh', 0, 'o', 1, '2020-06-06 07:33:13', '2020-06-06 07:33:13'),
(13, 'Kích thước xe DxRxC', 0, 'mm', 1, '2020-06-06 07:33:13', '2020-06-06 07:33:13'),
(14, 'Hình Thức chuyển động', 0, '', 1, '2020-06-06 07:33:13', '2020-06-06 07:33:13'),
(15, 'Hình thức khởi động', 0, '', 1, '2020-06-06 07:39:38', '2020-06-06 07:39:38'),
(16, 'Động cơ', 1, '', 1, '2020-06-06 07:39:38', '2020-06-06 07:39:38'),
(17, 'Model', 0, '', 1, '2020-06-06 07:39:38', '2020-06-06 07:39:38'),
(18, 'Kích thước lốp', 0, '', 1, '2020-06-06 07:39:38', '2020-06-06 07:39:38'),
(19, 'Các trang bị thêm', 0, '', 1, '2020-06-06 07:39:38', '2020-06-06 07:39:38'),
(52, 'Tự trọng', 0, 'kg', 6, '2020-06-15 11:38:43', '2020-06-15 11:38:43'),
(53, 'Tổng trọng tải', 0, 'kg', 6, '2020-06-15 11:38:43', '2020-06-15 11:38:43'),
(54, 'Tải trọng hàng hóa lớn nhất', 0, 'tấn', 6, '2020-06-15 11:38:43', '2020-06-15 11:38:43'),
(55, 'Động cơ', 0, '', 6, '2020-06-15 11:38:43', '2020-06-15 11:38:43'),
(56, 'Hộp số', 0, '', 6, '2020-06-15 11:38:43', '2020-06-15 11:38:43'),
(57, 'Khă năng chịu tải trên các trục', 0, '', 6, '2020-06-15 11:38:43', '2020-06-15 11:38:43'),
(58, 'Kích thước lốp', 0, '', 6, '2020-06-15 11:38:43', '2020-06-15 11:38:43'),
(59, 'Tốc độ lớn nhất', 0, 'km/h', 6, '2020-06-15 11:38:43', '2020-06-15 11:38:43'),
(60, 'Dung tích thùng ben', 0, 'm3', 6, '2020-06-15 11:38:43', '2020-06-15 11:38:43'),
(61, 'Kích thước', 0, '', 6, '2020-06-15 11:38:43', '2020-06-15 11:38:43'),
(62, 'Trọng lượng máy', 0, 'kg', 2, '2020-06-06 00:26:56', '2020-06-06 00:26:56'),
(63, 'Dung tích gầu tiêu chuẩn', 0, 'm3', 2, '2020-06-06 00:29:49', '2020-06-06 00:29:49'),
(64, 'Trọng lượng nâng', 0, 'kg', 2, '2020-06-06 00:29:49', '2020-06-06 00:29:49'),
(65, 'Độ leo dốc', 0, 'o', 2, '2020-06-06 00:33:13', '2020-06-06 00:33:13'),
(66, 'Vận tốc lớn nhất', 0, 'km/h', 2, '2020-06-06 00:33:13', '2020-06-06 00:33:13'),
(67, 'Độ đổ lớn nhất', 0, 'o', 2, '2020-06-06 00:33:13', '2020-06-06 00:33:13'),
(68, 'Thời gian nâng hạ đổ', 0, 's', 2, '2020-06-06 00:33:13', '2020-06-06 00:33:13'),
(69, 'Tốc độ vòng quay r/m', 0, 'r/m', 2, '2020-06-06 00:33:13', '2020-06-06 00:33:13'),
(70, 'Chiều cao đổ', 0, 'mm', 2, '2020-06-06 00:33:13', '2020-06-06 00:33:13'),
(71, 'Khoảng cách bốc xếp', 0, 'mm', 2, '2020-06-06 00:33:13', '2020-06-06 00:33:13'),
(72, 'Cự ly trục', 0, 'mm', 2, '2020-06-06 00:33:13', '2020-06-06 00:33:13'),
(73, 'Cự ly bánh', 0, 'o', 2, '2020-06-06 00:33:13', '2020-06-06 00:33:13'),
(74, 'Kích thước xe DxRxC', 0, 'mm', 2, '2020-06-06 00:33:13', '2020-06-06 00:33:13'),
(75, 'Hình Thức chuyển động', 0, '', 2, '2020-06-06 00:33:13', '2020-06-06 00:33:13'),
(76, 'Hình thức khởi động', 0, '', 2, '2020-06-06 00:39:38', '2020-06-06 00:39:38'),
(77, 'Động cơ', 1, '', 2, '2020-06-06 00:39:38', '2020-06-06 00:39:38'),
(78, 'Model', 0, '', 2, '2020-06-06 00:39:38', '2020-06-06 00:39:38'),
(79, 'Kích thước lốp', 0, '', 2, '2020-06-06 00:39:38', '2020-06-06 00:39:38'),
(80, 'Các trang bị thêm', 0, '', 2, '2020-06-06 00:39:38', '2020-06-06 00:39:38');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `categories_id` int(11) NOT NULL DEFAULT 1,
  `file_path` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `categories_id`, `file_path`, `price`, `description`, `updated_at`, `created_at`) VALUES
(73, 'Xúc lật HJ15(gầu 0.5 m3)', 2, 'uploads/18254897495eecbf2a1524c6.03408836.jpg', NULL, NULL, '2020-07-02 02:04:18', '2020-06-17 11:29:42'),
(74, 'Xúc lật HJ18B(gầu 0.7 m3)', 2, 'uploads/5272575395eecbf5057e081.52045428.jpg', NULL, NULL, '2020-07-02 02:04:47', '2020-06-17 11:29:42'),
(75, 'Xúc lật HJ928(gầu 0.8 m3)', 2, 'uploads/11043017105eecbf7f811ba9.52473255.jpg', NULL, NULL, '2020-07-02 02:05:19', '2020-06-17 11:29:42'),
(76, 'Xúc lật HJ928B(gầu 0.8 m3)', 2, 'uploads/16968928665eecbf99a9ea99.15747722.jpg', NULL, NULL, '2020-07-02 02:05:41', '2020-06-17 11:29:42'),
(77, 'Xúc lật HJ930GK( 1.2 m3)', 2, 'uploads/14593068365eecc78ad3e6f5.39454748.jpg', NULL, NULL, '2020-07-02 02:13:15', '2020-06-17 11:29:42'),
(78, 'Xúc lật HJ932(gầu 1.0 m3)', 2, 'uploads/18789443935eecc0ed29ddc2.22245117.jpg', NULL, NULL, '2020-07-02 02:06:48', '2020-06-17 11:29:42'),
(79, 'Xúc lật HJ946B(gầu 1.4 m3)', 2, 'uploads/5358929095eecc09f5adea6.42333807.jpg', NULL, NULL, '2020-07-02 02:07:27', '2020-06-17 11:29:42'),
(80, 'Xúc lật HJ946GK(2.0 m3)', 2, 'uploads/16069500575eecc72a8da2d4.14212087.jpg', NULL, NULL, '2020-07-02 02:14:57', '2020-06-17 11:29:42'),
(82, 'Xúc lật LG933L( 1,8 m3)', 1, 'uploads/8309035625eecc1670c8525.57953891.jpg', NULL, '– Điều hòa hai chiều– Khoảng sáng tầm nhìn trước 180 độ<br>\r\n                    – Hệ thống âm thanh 2 loa cùng đầu đọc USB. – Vô lăng gật gù<br>\r\n                    – Khóa điện an toàn khi có số. <br>\r\n                    – Cần điều khiển hệ thống chiếu sáng tín hiệu mới. <br>\r\n                    – Ghế mềm,điều chỉnh.', '2020-07-02 02:10:15', '2020-06-17 14:29:43'),
(83, 'Xúc lật LG936L( 1.8-2.2 m3)', 1, 'uploads/7919588605eecc19038baf3.41528883.jpg', NULL, '– Điều hòa hai chiều– Khoảng sáng tầm nhìn trước 180 độ<br>\r\n                    – Hệ thống âm thanh 2 loa cùng đầu đọc USB. – Vô lăng gật gù<br>\r\n                    – Khóa điện an toàn khi có số. <br>\r\n                    – Cần điều khiển hệ thống chiếu sáng tín hiệu mới. <br>\r\n                    – Ghế mềm,điều chỉnh.', '2020-07-02 02:10:31', '2020-06-17 14:29:43'),
(84, 'Xúc lật L953(3.0-3.6 m3)', 1, 'uploads/17657381585eecc1d58c17d0.70128309.jpg', NULL, '– Điều hòa hai chiều– Khoảng sáng tầm nhìn trước 180 độ<br>\r\n                    – Hệ thống âm thanh 2 loa cùng đầu đọc USB. – Vô lăng gật gù<br>\r\n                    – Khóa điện an toàn khi có số. <br>\r\n                    – Cần điều khiển hệ thống chiếu sáng tín hiệu mới. <br>\r\n                    – Ghế mềm,điều chỉnh.', '2020-07-02 02:10:44', '2020-06-17 14:29:43'),
(85, 'Xúc lật L953F(3.6 m3)', 1, 'uploads/8341763775eecc20cc2dfb7.08149216.jpg', NULL, '– Điều hòa hai chiều– Khoảng sáng tầm nhìn trước 180 độ<br>\r\n                    – Hệ thống âm thanh 2 loa cùng đầu đọc USB. – Vô lăng gật gù<br>\r\n                    – Khóa điện an toàn khi có số. <br>\r\n                    – Cần điều khiển hệ thống chiếu sáng tín hiệu mới. <br>\r\n                    – Ghế mềm,điều chỉnh.', '2020-07-02 02:10:58', '2020-06-17 14:29:43'),
(86, 'Xúc lật LG956F-AL(3.6-4.2)', 1, 'uploads/13733090445eecc25ba91ca5.35822135.jpg', NULL, '– Điều hòa hai chiều– Khoảng sáng tầm nhìn trước 180 độ<br>\r\n                    – Hệ thống âm thanh 2 loa cùng đầu đọc USB. – Vô lăng gật gù<br>\r\n                    – Khóa điện an toàn khi có số. <br>\r\n                    – Cần điều khiển hệ thống chiếu sáng tín hiệu mới. <br>\r\n                    – Ghế mềm,điều chỉnh.', '2020-07-02 02:12:57', '2020-06-17 14:29:43'),
(87, 'Xúc lật L956FH(4.2-4.5m3)', 1, 'uploads/801818645eecc3af81d6e6.25812308.jpg', NULL, '– Điều hòa hai chiều– Khoảng sáng tầm nhìn trước 180 độ<br>\r\n                    – Hệ thống âm thanh 2 loa cùng đầu đọc USB. – Vô lăng gật gù<br>\r\n                    – Khóa điện an toàn khi có số. <br>\r\n                    – Cần điều khiển hệ thống chiếu sáng tín hiệu mới. <br>\r\n                    – Ghế mềm,điều chỉnh.', '2020-07-02 02:11:33', '2020-06-17 14:29:43'),
(88, 'Xúc lật LG978(5.0-6.5m3)', 1, 'uploads/19478070685eecc41cc7bc27.42613364.JPG', NULL, '– Điều hòa hai chiều– Khoảng sáng tầm nhìn trước 180 độ<br>\r\n                    – Hệ thống âm thanh 2 loa cùng đầu đọc USB. – Vô lăng gật gù<br>\r\n                    – Khóa điện an toàn khi có số. <br>\r\n                    – Cần điều khiển hệ thống chiếu sáng tín hiệu mới. <br>\r\n                    – Ghế mềm,điều chỉnh.', '2020-07-02 02:11:52', '2020-06-17 14:29:43'),
(89, 'Ắc gầu', 7, 'uploads/11442880355eec160f25e951.25537143.jpg', NULL, NULL, '2020-06-19 01:34:07', '2020-06-19 01:34:07'),
(90, 'La răng', 7, 'uploads/10396795785eec1657897bf5.90610727.jpg', NULL, NULL, '2020-06-19 01:35:19', '2020-06-19 01:35:19'),
(91, 'Bộ phớt xi lanh nâng, hạ, đổ', 7, 'uploads/6313595015eec1754a7b342.00632152.jpg', NULL, NULL, '2020-06-19 01:39:32', '2020-06-19 01:39:32'),
(92, 'Cụm điều khiển điều hòa', 7, 'uploads/20405719685eec1796c4aad4.90218496.jpg', NULL, NULL, '2020-06-19 01:40:38', '2020-06-19 01:40:38'),
(93, 'Dây tay chang cơ', 7, 'uploads/12388474345eec17c9121a53.87905856.jpg', NULL, NULL, '2020-06-19 01:41:29', '2020-06-19 01:41:29'),
(94, 'Cụm tổng phanh', 7, 'uploads/7207457235eec1923b80330.65542336.jpg', NULL, NULL, '2020-06-19 01:47:15', '2020-06-19 01:47:15'),
(95, 'Má phanh', 7, 'uploads/741601425eec1af9a09cd2.17165830.jpg', NULL, NULL, '2020-06-19 01:55:05', '2020-06-19 01:55:05'),
(96, 'Lọc diesel', 7, 'uploads/13623691725eec1b2d9b7aa9.16373109.jpg', NULL, NULL, '2020-06-19 01:55:57', '2020-06-19 01:55:57'),
(97, 'Xe nâng FD25T(2,5 tấn)', 3, 'uploads/16579674315eec1c07787d58.04941312.JPG', NULL, 'Công suất : 40 KW(2650 vòng/phút)\r\nTrọng lượng nâng:2500 kg\r\nChiều cao đổ: 3 m \r\nTrọng lượng máy:3800 kg\r\nSố tự động\r\nĐộng cơ:C490BPG\r\nKích thước xe:3770*1225*2110\r\nKích thước Càng nâng:1070*125*40\r\nVận tốc nâng:36 M/phút\r\nlốp đặc，các cấu hình khác tiêu chuẩn', '2020-07-02 02:00:46', '2020-06-19 01:59:40'),
(98, 'Xe nâng FD30T(3 tấn)', 3, 'uploads/15907272745eec1c8c8675e0.72934643.jpg', NULL, 'Công suất : 40 KW(2650 vòng/phút)\r\nĐộng cơ:C490BPG\r\nTrọng lượng nâng:3000 kg\r\nChiều cao nâng: 3 m \r\nTrọng lượng máy:4250 kg\r\nSố tự động,sản xuất năm 2019\r\nKích thước xe:3770*1225*2110cm\r\nVận tốc nâng:36 M/phút\r\nbánh đặc.dịch ngang,chui công', '2020-07-02 02:00:28', '2020-06-19 02:01:48'),
(99, 'Xe nâng FD35T (3,5 tấn)', 3, 'uploads/3734562835eec1e38b1d143.20023008.jpg', NULL, 'Công suất : 40 KW(2650 vòng/phút)\r\nĐộng cơ:C490BPG\r\nTrọng lượng nâng:3500 kg\r\nChiều cao nâng: 4.5 m \r\nTrọng lượng máy:5112 kg\r\nSố tự động,sản xuất năm 2019\r\nKích thước xe:3930*1240*2210cm\r\nVận tốc nâng:36 M/phút\r\nbánh hơi.dịch ngang.chui công', '2020-07-02 02:00:11', '2020-06-19 02:09:04'),
(100, 'Xe nâng LG70DT (7 tấn)', 3, 'uploads/13717535835eec200e47e443.05056408.jpg', NULL, NULL, '2020-07-02 01:59:52', '2020-06-19 02:16:46'),
(101, 'Xe nâng FD20T(2 tấn) ISUZU', 3, 'uploads/752650385eec20b9c545c7.38633086.jpg', NULL, NULL, '2020-07-02 01:59:26', '2020-06-19 02:19:37'),
(102, 'Xe múc BD95W-9A(0.3m3)', 4, 'uploads/7365537295eec21c4bbffe9.20664971.jpg', NULL, 'Dung tích gầu :0.3 khối\r\nCông suất :65 KW\r\nĐộng cơ:YN38GBZ1\r\nÁp suất:21 Mpa\r\nLưu lượng định mức:2*55L/min\r\nChiều cao đổ: 5250 mm \r\nTrọng lượng nâng:500 Kg\r\nTrọng lượng máy:8000 Kg\r\nMột tay trang thao tác thủy lực\r\nNăm sản xuất:2020\r\nKích thước :6730*2100*2900', '2020-07-02 01:59:04', '2020-06-19 02:24:09'),
(103, 'Xe múc SDLG  E6300F (1.4m3)', 4, 'uploads/3953242905eed673b129586.46186283.jpg', NULL, 'SDLG  E6300F	dung tích gầu	1.4 khối		\r\nChiều sâu đào lớn nhất	6800mm		\r\nModel động cơ : SD70B                        \r\nChiều cao đào lớn nhất	9600mm		\r\nĐường kính xilanh:108*130 mm	\r\nChiểu cao đổ lớn nhất	6690mm		\r\nBán kính đào	10160mm		\r\nCông suất：170KW/2000r/min	\r\nCự ly trục	4015 mm		\r\nLực đào lớn nhất	193.5kN		\r\nKích thước 	10500*2190*3430mm	 \r\nTrọng lượng máy	29300kg', '2020-07-02 01:58:36', '2020-06-19 02:34:31'),
(104, 'Xe múc SDLG  E7150F( 0.6m3)', 4, 'uploads/19526490455eed6837b22f26.76024444.jpg', NULL, 'Dung tích gầu	0.6 khối		\r\nChiều sau đào lớn nhất	4700mm		\r\nChiều cao đào lớn nhất	8300mm		\r\nChiểu cao đổ lớn nhất	5900mm		\r\nBán kính đào	7700mm		\r\nBán kính quay đầu	3650 mm		\r\nLực đào lớn nhất	97.7kN		\r\nCự ly trục	2800 mm		\r\nKích thước máy	7500*2490*3530mm		\r\nTrọng lượng máy	13100kg		\r\nTy gầu	1-100*70*865		\r\nTy càng	1-110*70*980		\r\nTy nền	1-120*80*1030		\r\nTốc độ di chuyển	3.6/37.5 km/h		\r\nModel động cơ : SD60B   DEUTZ của Đức \r\nXinh lanh:98*126mm\r\nTăng áp.làm mát bằng nước\r\nCông suất：110KW/2000r/min\r\nTay trang thủy lực\r\nHệ thống Dien VOLVO\r\nHình thức lưu lực:02 bơm điều khiển \r\nBơm thủy lực:K5V80DT\r\nVan chia:UX22\r\nLưu lượng:2*118+20\r\nBánh Hoi chuyển động', '2020-07-02 01:57:47', '2020-06-19 02:44:19'),
(105, 'Xe múc SDLG  E6210F( 0,9m3)', 4, 'uploads/14023921285eec2808c19504.30832028.jpg', NULL, 'Dung tích gầu	0.9 khối		\r\nChiều sau đào lớn nhất	6730mm		\r\nChiều cao đào lớn nhất	9450mm		\r\nChiểu cao đổ lớn nhất	6650mm		\r\nBán kính đào	9940mm		\r\nBán kính quay đầu	3650 mm		\r\nLực đào lớn nhất	147.1kN		\r\nKích thước máy	9700*2990*2940mm		\r\nTrọng lượng máy	21250kg		\r\nTốc độ di chuyển	3.5/5.7 km/h		\r\n1.động cơ\r\nModel động cơ : BF6M2012C DEUTZ của Đức \r\nTăng áp.làm mát bằng nước\r\nCông suất：120KW/2000r/min\r\n2.hệ thống thủy lực VOLVO\r\nTay trang thủy lực\r\nHệ thống Dien VOLVO\r\nHình thức lưu lực:02 bơm điều khiển \r\nBánh xích chuyển động', '2020-07-02 01:58:11', '2020-06-19 02:50:53'),
(106, 'Xe lu rung RS8140', 5, 'uploads/12001527295eec2c1b4a2e31.41444905.jpg', NULL, 'Tự trọng: 14000kg\r\nTrọng lượng bánh sau: 7000kg\r\nTrọng lượng bánh trước: 7000kg\r\nĐộng cơ (TURBO): WD10G24E21\r\nCông suất hạn định /vận tốc quay: 92kw/2000r/min\r\nTiêu chuẩn khí thải: GB2089-2007EUROII\r\nBiên độ rung: 1.8/1.0 mm\r\nTần suất rung: 30hz\r\nLực rung( cao/ thấp): 261/145kn\r\nKính thước ngoại hình (D*R*C): 6113*2300*3140mm\r\nChiều dài bánh lu: 2130mm\r\nĐường kính bánh lu: 1500mm\r\nTải trọng tĩnh: 322N/cm\r\nChiều dài bánh lu: 2130mm\r\nXuất xứ: Nhập khẩu', '2020-06-19 03:08:11', '2020-06-19 03:08:11'),
(107, 'Máy san G9220F', 5, 'uploads/19316542005eec2e15751519.89396763.jpg', NULL, NULL, '2020-06-19 03:16:37', '2020-06-19 03:16:37'),
(108, 'MT86', 6, 'uploads/13418833925eec2feee17ae1.98651940.jpg', NULL, NULL, '2020-06-19 03:24:30', '2020-06-19 03:24:30'),
(109, 'xúc lật L965F-GBH( 4.2 m3)', 1, 'uploads/4212984485eecc61ab6f861.29100000.jpg', NULL, '– Điều hòa hai chiều– Khoảng sáng tầm nhìn trước 180 độ\r\n                                            – Hệ thống âm thanh 2 loa cùng đầu đọc USB. – Vô lăng gật gù\r\n                                            – Khóa điện an toàn khi có số. \r\n                                            – Cần điều khiển hệ thống chiếu sáng tín hiệu mới. \r\n                                            – Ghế mềm,điều chỉnh.', '2020-07-02 01:56:25', '2020-06-19 14:05:18');

-- --------------------------------------------------------

--
-- Table structure for table `specifications`
--

CREATE TABLE `specifications` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `unit` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `specifications`
--

INSERT INTO `specifications` (`id`, `name`, `value`, `unit`, `product_id`, `updated_at`, `created_at`) VALUES
(553, 'Trọng lượng máy', '2300', 'kg', 73, NULL, '2020-06-17 14:17:54'),
(554, 'Dung tích gầu tiêu chuẩn', '0.5', 'm³', 73, NULL, '2020-06-17 14:17:54'),
(555, 'Trọng lượng nâng', '500', 'kg', 73, NULL, '2020-06-17 14:17:54'),
(556, 'Độ leo dốc', '30', '°', 73, NULL, '2020-06-17 14:17:54'),
(557, 'Vận tốc lớn nhất', '25', 'km/h', 73, NULL, '2020-06-17 14:17:54'),
(558, 'Độ đổ lớn nhất', '40', '°', 73, NULL, '2020-06-17 14:17:54'),
(559, 'Thời gian nâng hạ đổ', '≤12', '0', 73, '2020-06-19 14:21:05', '2020-06-17 14:17:54'),
(560, 'Tốc độ vòng quay', '2400', 'r/m', 73, NULL, '2020-06-17 14:17:54'),
(561, 'Chiều cao đổ', '2300', 'mm', 73, NULL, '2020-06-17 14:17:54'),
(562, 'Khoảng cách bốc xếp', '740', 'mm', 73, NULL, '2020-06-17 14:17:54'),
(563, 'Cự ly trục', '2065', 'mm', 73, NULL, '2020-06-17 14:17:54'),
(564, 'Cự ly bánh', '1105', 'mm', 73, NULL, '2020-06-17 14:17:54'),
(565, 'Kích thước xe DxRxC', '4480x1350x2370', 'mm', 73, NULL, '2020-06-17 14:17:54'),
(566, 'Hình thức chuyển động', 'Cơ', '0', 73, '2020-06-19 14:21:05', '2020-06-17 14:17:54'),
(567, 'Hình thức khởi động', '4 bánh', '0', 73, '2020-06-19 14:21:05', '2020-06-17 14:17:54'),
(568, 'Model', '4DBY4', '0', 73, '2020-06-19 14:21:05', '2020-06-17 14:17:54'),
(569, 'Công suất động cơ', '40', 'kw', 73, NULL, '2020-06-17 14:17:54'),
(570, 'Kích thước lốp', '7.50-16', '0', 73, '2020-06-19 14:21:05', '2020-06-17 14:17:54'),
(571, 'Các cơ cấu trang bị thêm', '.', '0', 73, '2020-06-19 14:21:05', '2020-06-17 14:17:54'),
(572, 'Trọng lượng máy', '3100', 'kg', 74, NULL, '2020-06-17 14:17:54'),
(573, 'Dung tích gầu tiêu chuẩn', '0.7', 'm³', 74, NULL, '2020-06-17 14:17:54'),
(574, 'Trọng lượng nâng', '1500', 'kg', 74, NULL, '2020-06-17 14:17:54'),
(575, 'Độ leo dốc', '30', '°', 74, NULL, '2020-06-17 14:17:54'),
(576, 'Vận tốc lớn nhất', '25', 'km/h', 74, NULL, '2020-06-17 14:17:54'),
(577, 'Độ đổ lớn nhất', '40', '°', 74, NULL, '2020-06-17 14:17:54'),
(578, 'Thời gian nâng hạ đổ', '≤11', '0', 74, '2020-06-19 12:15:15', '2020-06-17 14:17:54'),
(579, 'Tốc độ vòng quay', '2400', 'r/m', 74, NULL, '2020-06-17 14:17:54'),
(580, 'Chiều cao đổ', '2900', 'mm', 74, NULL, '2020-06-17 14:17:54'),
(581, 'Khoảng cách bốc xếp', '780', 'mm', 74, NULL, '2020-06-17 14:17:54'),
(582, 'Cự ly trục', '2280', 'mm', 74, NULL, '2020-06-17 14:17:54'),
(583, 'Cự ly bánh', '1450', 'mm', 74, NULL, '2020-06-17 14:17:54'),
(584, 'Kích thước xe DxRxC', '5230x1750x2660', 'mm', 74, NULL, '2020-06-17 14:17:54'),
(585, 'Hình thức chuyển động', 'Cơ', '0', 74, '2020-06-19 12:15:15', '2020-06-17 14:17:54'),
(586, 'Hình thức khởi động', '4 bánh', '0', 74, '2020-06-19 12:15:15', '2020-06-17 14:17:54'),
(587, 'Model', '4DBY4', '0', 74, '2020-06-19 12:15:15', '2020-06-17 14:17:54'),
(588, 'Công suất động cơ', '40', 'kw', 74, NULL, '2020-06-17 14:17:54'),
(589, 'Kích thước lốp', '12.00-16', '0', 74, '2020-06-19 12:15:15', '2020-06-17 14:17:54'),
(590, 'Các cơ cấu trang bị thêm', '.', '0', 74, '2020-06-19 12:15:15', '2020-06-17 14:17:54'),
(591, 'Trọng lượng máy', '3500', 'kg', 75, NULL, '2020-06-17 14:17:54'),
(592, 'Dung tích gầu tiêu chuẩn', '0.8', 'm³', 75, NULL, '2020-06-17 14:17:54'),
(593, 'Trọng lượng nâng', '1600', 'kg', 75, NULL, '2020-06-17 14:17:54'),
(594, 'Độ leo dốc', '30', '°', 75, NULL, '2020-06-17 14:17:54'),
(595, 'Vận tốc lớn nhất', '25', 'km/h', 75, NULL, '2020-06-17 14:17:54'),
(596, 'Độ đổ lớn nhất', '40', '°', 75, NULL, '2020-06-17 14:17:54'),
(597, 'Thời gian nâng hạ đổ', '≤11', '0', 75, '2020-06-19 12:38:00', '2020-06-17 14:17:54'),
(598, 'Tốc độ vòng quay', '2400', 'r/m', 75, NULL, '2020-06-17 14:17:54'),
(599, 'Chiều cao đổ', '3200', 'mm', 75, NULL, '2020-06-17 14:17:54'),
(600, 'Khoảng cách bốc xếp', '620', 'mm', 75, NULL, '2020-06-17 14:17:54'),
(601, 'Cự ly trục', '2250', 'mm', 75, NULL, '2020-06-17 14:17:54'),
(602, 'Cự ly bánh', '1465', 'mm', 75, NULL, '2020-06-17 14:17:54'),
(603, 'Kích thước xe DxRxC', '5650x1850x2690', 'mm', 75, NULL, '2020-06-17 14:17:54'),
(604, 'Hình thức chuyển động', 'Cơ', '0', 75, '2020-06-19 12:38:00', '2020-06-17 14:17:54'),
(605, 'Hình thức khởi động', '4 bánh', '0', 75, '2020-06-19 12:38:00', '2020-06-17 14:17:54'),
(606, 'Model', '4DBY4', '0', 75, '2020-06-19 12:38:00', '2020-06-17 14:17:54'),
(607, 'Công suất động cơ', '40', 'kw', 75, NULL, '2020-06-17 14:17:54'),
(608, 'Kích thước lốp', '20.5/70-16', '0', 75, '2020-06-19 12:38:00', '2020-06-17 14:17:54'),
(609, 'Các cơ cấu trang bị thêm', 'Kẹp gỗ Càng nâng', '0', 75, '2020-06-19 12:38:00', '2020-06-17 14:17:54'),
(610, 'Trọng lượng máy', '3650', 'kg', 76, NULL, '2020-06-17 14:17:54'),
(611, 'Dung tích gầu tiêu chuẩn', '0.8', 'm³', 76, NULL, '2020-06-17 14:17:54'),
(612, 'Trọng lượng nâng', '1800', 'kg', 76, NULL, '2020-06-17 14:17:54'),
(613, 'Độ leo dốc', '30', '°', 76, NULL, '2020-06-17 14:17:54'),
(614, 'Vận tốc lớn nhất', '25', 'km/h', 76, NULL, '2020-06-17 14:17:54'),
(615, 'Độ đổ lớn nhất', '40', '°', 76, NULL, '2020-06-17 14:17:54'),
(616, 'Thời gian nâng hạ đổ', '≤11', '0', 76, '2020-06-19 12:38:23', '2020-06-17 14:17:54'),
(617, 'Tốc độ vòng quay', '2400', 'r/m', 76, NULL, '2020-06-17 14:17:54'),
(618, 'Chiều cao đổ', '3200', 'mm', 76, NULL, '2020-06-17 14:17:54'),
(619, 'Khoảng cách bốc xếp', '620', 'mm', 76, NULL, '2020-06-17 14:17:54'),
(620, 'Cự ly trục', '2250', 'mm', 76, NULL, '2020-06-17 14:17:54'),
(621, 'Cự ly bánh', '1450', 'mm', 76, NULL, '2020-06-17 14:17:54'),
(622, 'Kích thước xe DxRxC', '5650x1850x2690', 'mm', 76, NULL, '2020-06-17 14:17:54'),
(623, 'Hình thức chuyển động', 'Thủy lực', '0', 76, '2020-06-19 12:38:23', '2020-06-17 14:17:54'),
(624, 'Hình thức khởi động', '4 bánh', '0', 76, '2020-06-19 12:38:23', '2020-06-17 14:17:54'),
(625, 'Model', '4DBYZ4', '0', 76, '2020-06-19 12:38:23', '2020-06-17 14:17:54'),
(626, 'Công suất động cơ', '55', 'kw', 76, NULL, '2020-06-17 14:17:54'),
(627, 'Kích thước lốp', '20.5/70-16', '0', 76, '2020-06-19 12:38:23', '2020-06-17 14:17:54'),
(628, 'Các cơ cấu trang bị thêm', 'Kẹp gỗ Càng nâng', '0', 76, '2020-06-19 12:38:23', '2020-06-17 14:17:54'),
(629, 'Trọng lượng máy', '4750', 'kg', 77, NULL, '2020-06-17 14:17:54'),
(630, 'Dung tích gầu tiêu chuẩn', '1.4', 'm³', 77, NULL, '2020-06-17 14:17:54'),
(631, 'Trọng lượng nâng', '1800', 'kg', 77, NULL, '2020-06-17 14:17:54'),
(632, 'Độ leo dốc', '30', '°', 77, NULL, '2020-06-17 14:17:54'),
(633, 'Vận tốc lớn nhất', '25', 'km/h', 77, NULL, '2020-06-17 14:17:54'),
(634, 'Độ đổ lớn nhất', '40', '°', 77, NULL, '2020-06-17 14:17:54'),
(635, 'Thời gian nâng hạ đổ', '≤13', '0', 77, '2020-06-19 12:38:43', '2020-06-17 14:17:54'),
(636, 'Tốc độ vòng quay', '2400', 'r/m', 77, NULL, '2020-06-17 14:17:54'),
(637, 'Chiều cao đổ', '3200', 'mm', 77, NULL, '2020-06-17 14:17:54'),
(638, 'Khoảng cách bốc xếp', '620', 'mm', 77, NULL, '2020-06-17 14:17:54'),
(639, 'Cự ly trục', '2250', 'mm', 77, NULL, '2020-06-17 14:17:54'),
(640, 'Cự ly bánh', '1465', 'mm', 77, NULL, '2020-06-17 14:17:54'),
(641, 'Kích thước xe DxRxC', '5650x1850x2690', 'mm', 77, NULL, '2020-06-17 14:17:54'),
(642, 'Hình thức chuyển động', 'Thủy lực', '0', 77, '2020-06-19 12:38:43', '2020-06-17 14:17:54'),
(643, 'Hình thức khởi động', '4 bánh', '0', 77, '2020-06-19 12:38:43', '2020-06-17 14:17:54'),
(644, 'Model', '4DBYZ4', '0', 77, '2020-06-19 12:38:43', '2020-06-17 14:17:54'),
(645, 'Công suất động cơ', '55', 'kw', 77, NULL, '2020-06-17 14:17:54'),
(646, 'Kích thước lốp', '16/70-20', '0', 77, '2020-06-19 12:38:43', '2020-06-17 14:17:54'),
(647, 'Các cơ cấu trang bị thêm', 'Kẹp gỗ', '0', 77, '2020-06-19 12:38:43', '2020-06-17 14:17:54'),
(648, 'Trọng lượng máy', '5000', 'kg', 78, NULL, '2020-06-17 14:17:54'),
(649, 'Dung tích gầu tiêu chuẩn', '1', 'm³', 78, NULL, '2020-06-17 14:17:54'),
(650, 'Trọng lượng nâng', '2000', 'kg', 78, NULL, '2020-06-17 14:17:54'),
(651, 'Độ leo dốc', '30', '°', 78, NULL, '2020-06-17 14:17:54'),
(652, 'Vận tốc lớn nhất', '25', 'km/h', 78, NULL, '2020-06-17 14:17:54'),
(653, 'Độ đổ lớn nhất', '40', '°', 78, NULL, '2020-06-17 14:17:54'),
(654, 'Thời gian nâng hạ đổ', '≤12', '0', 78, '2020-06-19 12:39:37', '2020-06-17 14:17:54'),
(655, 'Tốc độ vòng quay', '2400', 'r/m', 78, NULL, '2020-06-17 14:17:54'),
(656, 'Chiều cao đổ', '3200', 'mm', 78, NULL, '2020-06-17 14:17:54'),
(657, 'Khoảng cách bốc xếp', '940', 'mm', 78, NULL, '2020-06-17 14:17:54'),
(658, 'Cự ly trục', '2420', 'mm', 78, NULL, '2020-06-17 14:17:54'),
(659, 'Cự ly bánh', '1680', 'mm', 78, NULL, '2020-06-17 14:17:54'),
(660, 'Kích thước xe DxRxC', '5670x2100x2850', 'mm', 78, NULL, '2020-06-17 14:17:54'),
(661, 'Hình thức chuyển động', 'Thủy lực', '0', 78, '2020-06-19 12:39:37', '2020-06-17 14:17:54'),
(662, 'Hình thức khởi động', '4 bánh', '0', 78, '2020-06-19 12:39:37', '2020-06-17 14:17:54'),
(663, 'Model', '4DBYZ4', '0', 78, '2020-06-19 12:39:37', '2020-06-17 14:17:54'),
(664, 'Công suất động cơ', '76', 'kw', 78, NULL, '2020-06-17 14:17:54'),
(665, 'Kích thước lốp', '16/70-20', '0', 78, '2020-06-19 12:39:37', '2020-06-17 14:17:54'),
(666, 'Các cơ cấu trang bị thêm', 'Kẹp gỗ Càng nâng', '0', 78, '2020-06-19 12:39:37', '2020-06-17 14:17:54'),
(667, 'Trọng lượng máy', '6900', 'kg', 79, NULL, '2020-06-17 14:17:54'),
(668, 'Dung tích gầu tiêu chuẩn', '1.4', 'm³', 79, NULL, '2020-06-17 14:17:54'),
(669, 'Trọng lượng nâng', '2200', 'kg', 79, NULL, '2020-06-17 14:17:54'),
(670, 'Độ leo dốc', '30', '°', 79, NULL, '2020-06-17 14:17:54'),
(671, 'Vận tốc lớn nhất', '25', 'km/h', 79, NULL, '2020-06-17 14:17:54'),
(672, 'Độ đổ lớn nhất', '40', '°', 79, NULL, '2020-06-17 14:17:54'),
(673, 'Thời gian nâng hạ đổ', '≤12', '0', 79, '2020-06-19 12:39:53', '2020-06-17 14:17:54'),
(674, 'Tốc độ vòng quay', '2600', 'r/m', 79, NULL, '2020-06-17 14:17:54'),
(675, 'Chiều cao đổ', '3500', 'mm', 79, NULL, '2020-06-17 14:17:54'),
(676, 'Khoảng cách bốc xếp', '1040', 'mm', 79, NULL, '2020-06-17 14:17:54'),
(677, 'Cự ly trục', '2650', 'mm', 79, NULL, '2020-06-17 14:17:54'),
(678, 'Cự ly bánh', '1680', 'mm', 79, NULL, '2020-06-17 14:17:54'),
(679, 'Kích thước xe DxRxC', '6670x2150x3050', 'mm', 79, NULL, '2020-06-17 14:17:54'),
(680, 'Hình thức chuyển động', 'Thủy lực', '0', 79, '2020-06-19 12:39:53', '2020-06-17 14:17:54'),
(681, 'Hình thức khởi động', '4 bánh', '0', 79, '2020-06-19 12:39:53', '2020-06-17 14:17:54'),
(682, 'Model', 'YCD4J22G', '0', 79, '2020-06-19 12:39:53', '2020-06-17 14:17:54'),
(683, 'Công suất động cơ', '85-87', 'kw', 79, NULL, '2020-06-17 14:17:54'),
(684, 'Kích thước lốp', '16/70-24', '0', 79, '2020-06-19 12:39:53', '2020-06-17 14:17:54'),
(685, 'Các cơ cấu trang bị thêm', 'Kẹp gỗ Càng nâng', '0', 79, '2020-06-19 12:39:53', '2020-06-17 14:17:54'),
(686, 'Trọng lượng máy', '7100', 'kg', 80, NULL, '2020-06-17 14:17:54'),
(687, 'Dung tích gầu tiêu chuẩn', '2', 'm³', 80, NULL, '2020-06-17 14:17:54'),
(688, 'Trọng lượng nâng', '2200', 'kg', 80, NULL, '2020-06-17 14:17:54'),
(689, 'Độ leo dốc', '30', '°', 80, NULL, '2020-06-17 14:17:54'),
(690, 'Vận tốc lớn nhất', '25', 'km/h', 80, NULL, '2020-06-17 14:17:54'),
(691, 'Độ đổ lớn nhất', '40', '°', 80, NULL, '2020-06-17 14:17:54'),
(692, 'Thời gian nâng hạ đổ', '≤13', '0', 80, '2020-06-19 12:40:13', '2020-06-17 14:17:54'),
(693, 'Tốc độ vòng quay', '2600', 'r/m', 80, NULL, '2020-06-17 14:17:54'),
(694, 'Chiều cao đổ', '4300', 'mm', 80, NULL, '2020-06-17 14:17:54'),
(695, 'Khoảng cách bốc xếp', '1310', 'mm', 80, NULL, '2020-06-17 14:17:54'),
(696, 'Cự ly trục', '2820', 'mm', 80, NULL, '2020-06-17 14:17:54'),
(697, 'Cự ly bánh', '1680', 'mm', 80, NULL, '2020-06-17 14:17:54'),
(698, 'Kích thước xe DxRxC', '7180x2520x3180', 'mm', 80, NULL, '2020-06-17 14:17:54'),
(699, 'Hình thức chuyển động', 'Thủy lực', '0', 80, '2020-06-19 12:40:13', '2020-06-17 14:17:54'),
(700, 'Hình thức khởi động', '4 bánh', '0', 80, '2020-06-19 12:40:13', '2020-06-17 14:17:54'),
(701, 'Model', 'YCD4J22G', '0', 80, '2020-06-19 12:40:13', '2020-06-17 14:17:54'),
(702, 'Công suất động cơ', '85-87', 'kw', 80, NULL, '2020-06-17 14:17:54'),
(703, 'Kích thước lốp', '16/70-24', '0', 80, '2020-06-19 12:40:13', '2020-06-17 14:17:54'),
(704, 'Các cơ cấu trang bị thêm', 'Kẹp gỗ', '0', 80, '2020-06-19 12:40:13', '2020-06-17 14:17:54'),
(724, 'KT tổng thể (DxRxC)', '6900x2510x3087', 'mm', 82, NULL, '2020-06-17 16:06:00'),
(725, 'Chiểu dài xả tải lớn nhất', '2900', 'mm', 82, NULL, '2020-06-17 16:06:00'),
(726, 'Cự ly bốc xếp (G)', '1020-1050', 'mm', 82, NULL, '2020-06-17 16:06:00'),
(727, 'Độ leo dốc (H)', '30°', '0', 82, NULL, '2020-06-17 16:06:00'),
(728, 'Dung tích gầu', '1,8m³', 'm³', 82, NULL, '2020-06-17 16:06:00'),
(729, 'Trọng lượng nâng', '3000', 'kg', 82, NULL, '2020-06-17 16:06:00'),
(730, 'Tự trọng', '10200-10600', 'kg', 82, NULL, '2020-06-17 16:06:00'),
(731, 'Lực kéo lớn nhất', '>96', 'kn', 82, NULL, '2020-06-17 16:06:00'),
(732, 'Model Động Cơ', 'WP6G125E21', '0', 82, '2020-06-18 01:17:01', '2020-06-17 16:06:00'),
(733, 'Công xuất hạn định/vận tốc quay', '92kw/2200r', 'kw/r', 82, NULL, '2020-06-17 16:06:00'),
(734, 'Dung tích xilanh', '6750', 'ml', 82, NULL, '2020-06-17 16:06:00'),
(735, 'Model xoắn cực đại', '500', 'nm', 82, NULL, '2020-06-17 16:06:00'),
(736, 'Tiêu hao nhiên liệu', '<240g/kw/h', '0', 82, '2020-06-18 01:17:01', '2020-06-17 16:06:00'),
(737, 'Hộp số', 'Số thủy lực', '0', 82, '2020-06-18 01:17:01', '2020-06-17 16:06:00'),
(738, 'Cần số', '4 số tiến 2 số lùi', '0', 82, '2020-06-18 01:17:01', '2020-06-17 16:06:00'),
(739, 'Số tiến', '0 ~ 38', 'km/h', 82, NULL, '2020-06-17 16:06:00'),
(740, 'Số lùi', '0 ~ 9', 'km/h', 82, '2020-06-18 01:17:01', '2020-06-17 16:06:00'),
(741, 'Thời gian chu trình làm việc', '<9s', 'S', 82, NULL, '2020-06-17 16:06:00'),
(742, 'Áp suất', '14', 'mpa', 82, NULL, '2020-06-17 16:06:00'),
(743, 'Quy cách lốp', '17.5-25', '0', 82, '2020-06-18 01:17:01', '2020-06-17 16:06:00'),
(744, 'Cabin', 'Điều hòa', '0', 82, '2020-06-18 01:17:01', '2020-06-17 16:06:00'),
(745, 'KT tổng thể (DxRxC)', '7040x2510x3170', 'mm', 83, NULL, '2020-06-17 16:06:00'),
(746, 'Chiểu dài xả tải lớn nhất', '2950', 'mm', 83, NULL, '2020-06-17 16:06:00'),
(747, 'Cự ly bốc xếp (G)', '1050-1198', 'mm', 83, NULL, '2020-06-17 16:06:00'),
(748, 'Độ leo dốc (H)', '30°', '0', 83, NULL, '2020-06-17 16:06:00'),
(749, 'Dung tích gầu', '1,8-2,2m³', 'm³', 83, NULL, '2020-06-17 16:06:00'),
(750, 'Trọng lượng nâng', '3000', 'kg', 83, NULL, '2020-06-17 16:06:00'),
(751, 'Tự trọng', '10500-11200', 'kg', 83, NULL, '2020-06-17 16:06:00'),
(752, 'Lực kéo lớn nhất', '>105', 'kn', 83, NULL, '2020-06-17 16:06:00'),
(753, 'Model Động Cơ', 'WP6G122E22', '0', 83, '2020-06-19 01:18:45', '2020-06-17 16:06:00'),
(754, 'Công xuất hạn định/vận tốc quay', '92kw/2200r', 'kw/r', 83, NULL, '2020-06-17 16:06:00'),
(755, 'Dung tích xilanh', '6750', 'ml', 83, NULL, '2020-06-17 16:06:00'),
(756, 'Model xoắn cực đại', '500', 'nm', 83, NULL, '2020-06-17 16:06:00'),
(757, 'Tiêu hao nhiên liệu', '<215g/kw/h', '0', 83, '2020-06-19 01:18:45', '2020-06-17 16:06:00'),
(758, 'Hộp số', 'Số thủy lực', '0', 83, '2020-06-19 01:18:45', '2020-06-17 16:06:00'),
(759, 'Cần số', '2 số tiến 1 số lùi', '0', 83, '2020-06-19 01:18:45', '2020-06-17 16:06:00'),
(760, 'Số tiến', '0 ~ 38', 'km/h', 83, NULL, '2020-06-17 16:06:00'),
(761, 'Số lùi', '0 ~ 17', 'km/h', 83, NULL, '2020-06-17 16:06:00'),
(762, 'Thời gian chu trình làm việc', '<9s', 'S', 83, NULL, '2020-06-17 16:06:00'),
(763, 'Áp suất', '16', 'mpa', 83, NULL, '2020-06-17 16:06:00'),
(764, 'Quy cách lốp', '17.5-25', '0', 83, '2020-06-19 01:18:45', '2020-06-17 16:06:00'),
(765, 'Cabin', 'Điều hòa', '0', 83, '2020-06-19 01:18:45', '2020-06-17 16:06:00'),
(766, 'KT tổng thể (DxRxC)', '7900x3016x3423', 'mm', 84, NULL, '2020-06-17 16:06:00'),
(767, 'Chiểu dài xả tải lớn nhất', '3050', 'mm', 84, NULL, '2020-06-17 16:06:00'),
(768, 'Cự ly bốc xếp (G)', '1120', 'mm', 84, NULL, '2020-06-17 16:06:00'),
(769, 'Độ leo dốc (H)', '30°', '0', 84, NULL, '2020-06-17 16:06:00'),
(770, 'Dung tích gầu', '3,0-3,6m³', 'm³', 84, NULL, '2020-06-17 16:06:00'),
(771, 'Trọng lượng nâng', '5000', 'kg', 84, NULL, '2020-06-17 16:06:00'),
(772, 'Tự trọng', '16900-17300', 'kg', 84, NULL, '2020-06-17 16:06:00'),
(773, 'Lực kéo lớn nhất', '>166', 'kn', 84, NULL, '2020-06-17 16:06:00'),
(774, 'Model Động Cơ', 'WD10G220E21', '0', 84, '2020-06-19 01:21:23', '2020-06-17 16:06:00'),
(775, 'Công xuất hạn định/vận tốc quay', '162kw/2200r', 'kw/r', 84, NULL, '2020-06-17 16:06:00'),
(776, 'Dung tích xilanh', '9726', 'ml', 84, NULL, '2020-06-17 16:06:00'),
(777, 'Model xoắn cực đại', '950', 'nm', 84, NULL, '2020-06-17 16:06:00'),
(778, 'Tiêu hao nhiên liệu', '<215g/kw/h', '0', 84, '2020-06-19 01:21:23', '2020-06-17 16:06:00'),
(779, 'Hộp số', 'Số thủy lực', '0', 84, '2020-06-19 01:21:23', '2020-06-17 16:06:00'),
(780, 'Cần số', '2 số tiến 1 số lùi', '0', 84, '2020-06-19 01:21:23', '2020-06-17 16:06:00'),
(781, 'Số tiến', '0 ~ 38', 'km/h', 84, NULL, '2020-06-17 16:06:00'),
(782, 'Số lùi', '0 ~ 17', 'km/h', 84, NULL, '2020-06-17 16:06:00'),
(783, 'Thời gian chu trình làm việc', '<9.5s', 'S', 84, NULL, '2020-06-17 16:06:00'),
(784, 'Áp suất', '18', 'mpa', 84, NULL, '2020-06-17 16:06:00'),
(785, 'Quy cách lốp', '23.5-25', '0', 84, '2020-06-19 01:21:23', '2020-06-17 16:06:00'),
(786, 'Cabin', 'Điều hòa', '0', 84, '2020-06-19 01:21:23', '2020-06-17 16:06:00'),
(787, 'KT tổng thể (DxRxC)', '8000x3016x3423', 'mm', 85, NULL, '2020-06-17 16:06:00'),
(788, 'Chiểu dài xả tải lớn nhất', '3200', 'mm', 85, NULL, '2020-06-17 16:06:00'),
(789, 'Cự ly bốc xếp (G)', '1280', 'mm', 85, NULL, '2020-06-17 16:06:00'),
(790, 'Độ leo dốc (H)', '30°', '0', 85, NULL, '2020-06-17 16:06:00'),
(791, 'Dung tích gầu', '3,6m³', 'm³', 85, NULL, '2020-06-17 16:06:00'),
(792, 'Trọng lượng nâng', '5000', 'kg', 85, NULL, '2020-06-17 16:06:00'),
(793, 'Tự trọng', '17180-17400', 'kg', 85, NULL, '2020-06-17 16:06:00'),
(794, 'Lực kéo lớn nhất', '>166', 'kn', 85, NULL, '2020-06-17 16:06:00'),
(795, 'Model Động Cơ', 'WD10G220E23', '0', 85, '2020-06-19 01:21:52', '2020-06-17 16:06:00'),
(796, 'Công xuất hạn định/vận tốc quay', '162kw/2200r', 'kw/r', 85, NULL, '2020-06-17 16:06:00'),
(797, 'Dung tích xilanh', '9726', 'ml', 85, NULL, '2020-06-17 16:06:00'),
(798, 'Model xoắn cực đại', '980', 'nm', 85, NULL, '2020-06-17 16:06:00'),
(799, 'Tiêu hao nhiên liệu', '<215g/kw/h', '0', 85, '2020-06-19 01:21:52', '2020-06-17 16:06:00'),
(800, 'Hộp số', 'Số thủy lực', '0', 85, '2020-06-19 01:21:52', '2020-06-17 16:06:00'),
(801, 'Cần số', '2 số tiến 1 số lùi', '0', 85, '2020-06-19 01:21:52', '2020-06-17 16:06:00'),
(802, 'Số tiến', '0 ~ 38', 'km/h', 85, NULL, '2020-06-17 16:06:00'),
(803, 'Số lùi', '0 ~ 17', 'km/h', 85, NULL, '2020-06-17 16:06:00'),
(804, 'Thời gian chu trình làm việc', '<10s', 'S', 85, NULL, '2020-06-17 16:06:00'),
(805, 'Áp suất', '18', 'mpa', 85, NULL, '2020-06-17 16:06:00'),
(806, 'Quy cách lốp', '23.5-25', '0', 85, '2020-06-19 01:21:52', '2020-06-17 16:06:00'),
(807, 'Cabin', 'Điều hòa', '0', 85, '2020-06-19 01:21:52', '2020-06-17 16:06:00'),
(808, 'KT tổng thể (DxRxC)', '8200x3024x3450', 'mm', 86, NULL, '2020-06-17 16:06:00'),
(809, 'Chiểu dài xả tải lớn nhất', '3200', 'mm', 86, NULL, '2020-06-17 16:06:00'),
(810, 'Cự ly bốc xếp (G)', '1360', 'mm', 86, NULL, '2020-06-17 16:06:00'),
(811, 'Độ leo dốc (H)', '30°', '0', 86, NULL, '2020-06-17 16:06:00'),
(812, 'Dung tích gầu', '3,6-4,2m³', 'm³', 86, NULL, '2020-06-17 16:06:00'),
(813, 'Trọng lượng nâng', '5000', 'kg', 86, NULL, '2020-06-17 16:06:00'),
(814, 'Tự trọng', '18000-18260', 'kg', 86, NULL, '2020-06-17 16:06:00'),
(815, 'Lực kéo lớn nhất', '>183', 'kn', 86, NULL, '2020-06-17 16:06:00'),
(816, 'Model Động Cơ', 'WD10G220E23', '0', 86, '2020-06-19 01:28:08', '2020-06-17 16:06:00'),
(817, 'Công xuất hạn định/vận tốc quay', '162kw/2200r', 'kw/r', 86, NULL, '2020-06-17 16:06:00'),
(818, 'Dung tích xilanh', '9726', 'ml', 86, NULL, '2020-06-17 16:06:00'),
(819, 'Model xoắn cực đại', '980', 'nm', 86, NULL, '2020-06-17 16:06:00'),
(820, 'Tiêu hao nhiên liệu', '<215g/kw/h', '0', 86, '2020-06-19 01:28:08', '2020-06-17 16:06:00'),
(821, 'Hộp số', 'Số thủy lực', '0', 86, '2020-06-19 01:28:08', '2020-06-17 16:06:00'),
(822, 'Cần số', '2 số tiến 1 số lùi', '0', 86, '2020-06-19 01:28:08', '2020-06-17 16:06:00'),
(823, 'Số tiến', '0 ~ 38', 'km/h', 86, NULL, '2020-06-17 16:06:00'),
(824, 'Số lùi', '0 ~ 17', 'km/h', 86, NULL, '2020-06-17 16:06:00'),
(825, 'Thời gian chu trình làm việc', '<10s', 'S', 86, NULL, '2020-06-17 16:06:00'),
(826, 'Áp suất', '19', 'mpa', 86, NULL, '2020-06-17 16:06:00'),
(827, 'Quy cách lốp', '23.5-25', '0', 86, '2020-06-19 01:28:08', '2020-06-17 16:06:00'),
(828, 'Cabin', 'Điều hòa', '0', 86, '2020-06-19 01:28:08', '2020-06-17 16:06:00'),
(829, 'KT tổng thể (DxRxC)', '8775x3016x3410', 'mm', 87, NULL, '2020-06-17 16:06:00'),
(830, 'Chiểu dài xả tải lớn nhất', '3200', 'mm', 87, NULL, '2020-06-17 16:06:00'),
(831, 'Cự ly bốc xếp (G)', '1380', 'mm', 87, NULL, '2020-06-17 16:06:00'),
(832, 'Độ leo dốc (H)', '30°', '0', 87, NULL, '2020-06-17 16:06:00'),
(833, 'Dung tích gầu', '4,2-4,5m³', 'm³', 87, NULL, '2020-06-17 16:06:00'),
(834, 'Trọng lượng nâng', '5400', 'kg', 87, NULL, '2020-06-17 16:06:00'),
(835, 'Tự trọng', '18300-19000', 'kg', 87, NULL, '2020-06-17 16:06:00'),
(836, 'Lực kéo lớn nhất', '>195', 'kn', 87, NULL, '2020-06-17 16:06:00'),
(837, 'Model Động Cơ', 'WD10G220E23', '0', 87, '2020-06-19 01:28:45', '2020-06-17 16:06:00'),
(838, 'Công xuất hạn định/vận tốc quay', '162kw/2200r', 'kw/r', 87, NULL, '2020-06-17 16:06:00'),
(839, 'Dung tích xilanh', '9726', 'ml', 87, NULL, '2020-06-17 16:06:00'),
(840, 'Model xoắn cực đại', '1000', 'nm', 87, NULL, '2020-06-17 16:06:00'),
(841, 'Tiêu hao nhiên liệu', '<215g/kw/h', '0', 87, '2020-06-19 01:28:45', '2020-06-17 16:06:00'),
(842, 'Hộp số', 'Số thủy lực', '0', 87, '2020-06-19 01:28:45', '2020-06-17 16:06:00'),
(843, 'Cần số', '2 số tiến 1 số lùi', '0', 87, '2020-06-19 01:28:45', '2020-06-17 16:06:00'),
(844, 'Số tiến', '0 ~ 38', 'km/h', 87, NULL, '2020-06-17 16:06:00'),
(845, 'Số lùi', '0 ~ 17', 'km/h', 87, NULL, '2020-06-17 16:06:00'),
(846, 'Thời gian chu trình làm việc', '<10s', 'S', 87, NULL, '2020-06-17 16:06:00'),
(847, 'Áp suất', '21', 'mpa', 87, NULL, '2020-06-17 16:06:00'),
(848, 'Quy cách lốp', '23.5-25', '0', 87, '2020-06-19 01:28:45', '2020-06-17 16:06:00'),
(849, 'Cabin', 'Điều hòa', '0', 87, '2020-06-19 01:28:45', '2020-06-17 16:06:00'),
(850, 'KT tổng thể (DxRxC)', '9150x3038x3470', 'mm', 88, NULL, '2020-06-17 16:06:00'),
(851, 'Chiểu dài xả tải lớn nhất', '3200', 'mm', 88, NULL, '2020-06-17 16:06:00'),
(852, 'Cự ly bốc xếp (G)', '1380', 'mm', 88, NULL, '2020-06-17 16:06:00'),
(853, 'Độ leo dốc (H)', '30°', '0', 88, NULL, '2020-06-17 16:06:00'),
(854, 'Dung tích gầu', '5,0-6,5m³', 'm³', 88, NULL, '2020-06-17 16:06:00'),
(855, 'Trọng lượng nâng', '7000', 'kg', 88, NULL, '2020-06-17 16:06:00'),
(856, 'Tự trọng', '24000-24650', 'kg', 88, NULL, '2020-06-17 16:06:00'),
(857, 'Lực kéo lớn nhất', '>225', 'kn', 88, NULL, '2020-06-17 16:06:00'),
(858, 'Model Động Cơ', 'WDE12G310E221', '0', 88, '2020-06-19 01:30:14', '2020-06-17 16:06:00'),
(859, 'Công xuất hạn định/vận tốc quay', '226kw/2100r', 'kw/r', 88, NULL, '2020-06-17 16:06:00'),
(860, 'Dung tích xilanh', '11596', 'ml', 88, NULL, '2020-06-17 16:06:00'),
(861, 'Model xoắn cực đại', '1100', 'nm', 88, NULL, '2020-06-17 16:06:00'),
(862, 'Tiêu hao nhiên liệu', '<215g/kw/h', '0', 88, '2020-06-19 01:30:14', '2020-06-17 16:06:00'),
(863, 'Hộp số', 'Số điện VOLVO', '0', 88, '2020-06-19 01:30:14', '2020-06-17 16:06:00'),
(864, 'Cần số', '4 số tiến 4 số lùi', '0', 88, '2020-06-19 01:30:14', '2020-06-17 16:06:00'),
(865, 'Số tiến', '0 ~ 38', 'km/h', 88, NULL, '2020-06-17 16:06:00'),
(866, 'Số lùi', '0 ~ 38', 'km/h', 88, NULL, '2020-06-17 16:06:00'),
(867, 'Thời gian chu trình làm việc', '<10.2s', 'S', 88, NULL, '2020-06-17 16:06:00'),
(868, 'Áp suất', '25', 'mpa', 88, NULL, '2020-06-17 16:06:00'),
(869, 'Quy cách lốp', '26.5-25', '0', 88, '2020-06-19 01:30:14', '2020-06-17 16:06:00'),
(870, 'Cabin', 'Điều hòa', '0', 88, '2020-06-19 01:30:14', '2020-06-17 16:06:00'),
(871, 'Tự trọng', '31000KG', 'kg', 108, '2020-06-19 03:24:30', '2020-06-19 03:24:30'),
(872, 'Tổng trọng tải', '60000KG', 'kg', 108, '2020-06-19 03:24:30', '2020-06-19 03:24:30'),
(873, 'Tải trọng hàng hóa lớn nhất', '91000KG', 'tấn', 108, '2020-06-19 03:24:30', '2020-06-19 03:24:30'),
(874, 'Động cơ', 'Weichai WD12G420E211  khí thái tiêu chuẩn 2 của Châu Âu', '0', 108, '2020-06-19 03:24:30', '2020-06-19 03:24:30'),
(875, 'Hộp số', 'Fast 7DS200', '0', 108, '2020-06-19 03:24:30', '2020-06-19 03:24:30'),
(876, 'Khă năng chịu tải trên các trục', '.', '0', 108, '2020-06-19 03:24:30', '2020-06-19 03:24:30'),
(877, 'Kích thước lốp', '14.00-25-36PR 11PCS', '0', 108, '2020-06-19 03:24:30', '2020-06-19 03:24:30'),
(878, 'Tốc độ lớn nhất', '.', 'km/h', 108, '2020-06-19 03:24:30', '2020-06-19 03:24:30'),
(879, 'Dung tích thùng ben', '.', 'm3', 108, '2020-06-19 03:24:30', '2020-06-19 03:24:30'),
(880, 'Kích thước', '.', '0', 108, '2020-06-19 03:24:30', '2020-06-19 03:24:30'),
(881, 'Trọng lượng máy', '18680', 'kg', 109, '2020-06-19 14:05:18', '2020-06-19 14:05:18'),
(882, 'Dung tích gầu tiêu chuẩn', '4.2', 'm3', 109, '2020-06-19 14:05:18', '2020-06-19 14:05:18'),
(883, 'Trọng lượng nâng', '5000', 'kg', 109, '2020-06-19 14:05:18', '2020-06-19 14:05:18'),
(884, 'Độ leo dốc', '30', 'o', 109, '2020-06-19 14:05:18', '2020-06-19 14:05:18'),
(885, 'Vận tốc lớn nhất', '.', 'km/h', 109, '2020-06-19 14:05:18', '2020-06-19 14:05:18'),
(886, 'Độ đổ lớn nhất', '.', 'o', 109, '2020-06-19 14:05:18', '2020-06-19 14:05:18'),
(887, 'Thời gian nâng hạ đổ', '10', 's', 109, '2020-06-19 14:05:18', '2020-06-19 14:05:18'),
(888, 'Tốc độ vòng quay r/m', '.', 'r/m', 109, '2020-06-19 14:05:18', '2020-06-19 14:05:18'),
(889, 'Chiều cao đổ', '3200', 'mm', 109, '2020-06-19 14:05:18', '2020-06-19 14:05:18'),
(890, 'Khoảng cách bốc xếp', '1380', 'mm', 109, '2020-06-19 14:05:18', '2020-06-19 14:05:18'),
(891, 'Cự ly trục', '.', 'mm', 109, '2020-06-19 14:05:18', '2020-06-19 14:05:18'),
(892, 'Cự ly bánh', '.', 'o', 109, '2020-06-19 14:05:18', '2020-06-19 14:05:18'),
(893, 'Kích thước xe DxRxC', '8775x3016x3410', 'mm', 109, '2020-06-19 14:05:18', '2020-06-19 14:05:18'),
(894, 'Hình Thức chuyển động', '.', '0', 109, '2020-06-19 14:05:18', '2020-06-19 14:05:18'),
(895, 'Hình thức khởi động', '4', '0', 109, '2020-06-19 14:05:18', '2020-06-19 14:05:18'),
(896, 'Động cơ', 'weichai', '0', 109, '2020-06-19 14:05:18', '2020-06-19 14:05:18'),
(897, 'Model', '.', '0', 109, '2020-06-19 14:05:18', '2020-06-19 14:05:18'),
(898, 'Kích thước lốp', '23.5-25', '0', 109, '2020-06-19 14:05:18', '2020-06-19 14:05:18'),
(899, 'Các trang bị thêm', 'camera lùi', '0', 109, '2020-06-19 14:05:18', '2020-06-19 14:05:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `remember_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `updated_at`, `created_at`, `remember_token`) VALUES
(4, 'phuoc', 'nguyenphuoc2a2@gmail.com', '$2y$10$y9AwzJKiQ2Yn3cAOu.szzOgKJiIzLjKhQYvyXVHEsLXxNtSjgyRw6', '2020-05-28 07:06:07', '2020-05-28 07:06:07', 'X6Tm3YkLY8ZxYgGBSuDesAAgmSqvwcoOB2bi68wOQsSuuSBzI1mu0apKHhIs');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `configurations`
--
ALTER TABLE `configurations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_specifications`
--
ALTER TABLE `master_specifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_id` (`categories_id`);

--
-- Indexes for table `specifications`
--
ALTER TABLE `specifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `configurations`
--
ALTER TABLE `configurations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `master_specifications`
--
ALTER TABLE `master_specifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `specifications`
--
ALTER TABLE `specifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=900;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `specifications`
--
ALTER TABLE `specifications`
  ADD CONSTRAINT `specifications_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
