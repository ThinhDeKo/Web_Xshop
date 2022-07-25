-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 03, 2021 lúc 06:29 AM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `project`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(11) NOT NULL,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pay` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_price` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id_cart`, `user`, `name_user`, `phone`, `email`, `address`, `pay`, `note`, `total_price`, `date`, `status`) VALUES
(40, 'ntn', 'Dungncph16456', 865158931, 'cresht2000@gmail.com', 'HN', 'Tiền mặt', 'Chính hãng là được', 43899000, '2021-11-29 11:07:12', 1),
(42, 'abc', 'nguyen van a', 6515561, 'cresht2000@gmail.com', 'Số nhà 18 thanh đa hà nội', 'Tiền mặt', 'vận chuyển hết sức lưu ý', 30999000, '2021-11-30 03:56:07', 0),
(43, 'bbb', 'abcdef', 32453, 'Dungncph16456@fpt.edu.vn', 'thanh xuân hà nội', 'ATM', 'dfbf', 12900000, '2021-11-30 09:04:31', 0),
(44, 'dung', 'dung', 54454554, 'cresht2000@gmail.com', 'HN', 'Tiền mặt', 'hg', 30999000, '2021-11-30 09:13:35', 0),
(45, 'thinh', 'Phạm Văn Thịnh', 378424010, 'thinhpvph16403@fpt.edu.vn', 'xóm 9 xã quang thiện', 'Tiền mặt', 'Giao hàng cẩn thận ', 43899000, '2021-12-01 09:36:57', 0),
(46, 'thinh', 'Thịnh Phạm', 378424010, 'thinhpham1404@gmail.com', 'xóm 9 xã quang thiện', 'Tiền mặt', '', 12900000, '2021-12-01 09:37:49', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart_detail`
--

CREATE TABLE `cart_detail` (
  `id_cart_detail` int(11) NOT NULL,
  `id_cart` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cart_detail`
--

INSERT INTO `cart_detail` (`id_cart_detail`, `id_cart`, `id_product`, `quantity`, `price`) VALUES
(24, 40, 10, 1, 12900000),
(25, 40, 12, 1, 30999000),
(28, 42, 12, 1, 30999000),
(29, 43, 10, 1, 12900000),
(30, 44, 12, 1, 30999000),
(31, 45, 10, 1, 12900000),
(32, 45, 12, 1, 30999000),
(33, 46, 10, 1, 12900000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `name_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id_category`, `name_category`, `create_at`) VALUES
(1, 'IPHONE', '2021-11-29 15:28:36'),
(2, 'SAMSUNG', '2021-11-29 15:28:31');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id_comment` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_product` int(11) NOT NULL,
  `user` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id_comment`, `content`, `id_product`, `user`, `create_at`) VALUES
(9, 'máy tính xịn', 13, 'mon', '2021-10-11 02:46:27'),
(10, 'máy chính hãng, sản phẩm tốt', 12, 'master', '2021-10-11 02:51:59');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `information`
--

CREATE TABLE `information` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(10) NOT NULL,
  `license` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `information`
--

INSERT INTO `information` (`id`, `logo`, `address`, `email`, `phone`, `license`) VALUES
(1, '5afbe7b3e6.png', 'thị trấn phúc thọ - Phúc Thọ - Hà Nội', 'Dungncshop@gmail.com', 865998921, 'Giám đốc nội dung: Nguyễn Chí Dũng'),
(2, '842ec8cc75.png', 'Hà nội', 'Dungncph16456@fpt.edu.vn', 1234567678, 'nhà nước cấp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `name_product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(10,0) NOT NULL,
  `sale` float NOT NULL,
  `special` tinyint(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `view` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id_product`, `name_product`, `image`, `price`, `sale`, `special`, `amount`, `detail`, `view`, `id_category`, `create_at`) VALUES
(11, 'Samsung Galaxy A72', '17c5ef0e11.jpg', 11490000, 39999000, 1, 15, '15', 0, 2, '2021-12-03 05:08:10'),
(13, 'Samsung Galaxy S21+ 128G', 'e23208b4d1.jpg', 20990000, 33970000, 1, 10, '10', 0, 2, '2021-12-03 05:07:21'),
(15, 'Samsung Galaxy S21 Ultra 256GB', 'e4afdfad64.jpg', 28990000, 28000000, 1, 10, '', 0, 2, '2021-12-03 05:11:51'),
(16, 'Samsung Galaxy Z Flip3 5G 128GB', '4d02bfcc08.jpg', 24990000, 24000000, 1, 15, '', 0, 2, '2021-12-03 05:12:27'),
(18, 'Samsung Galaxy Z Fold3 5G 256GB', '3b1a85d49f.jpg', 41990000, 41000000, 1, 5, '5', 0, 2, '2021-12-03 05:15:23'),
(20, 'iPhone 13 Pro Max 128GB', 'a44f21468c.png', 33990000, 33000000, 1, 10, '', 0, 1, '2021-12-03 05:22:25'),
(21, 'iPhone 13 128GB', '3f10ec955a.png', 24990000, 24000000, 1, 5, '', 0, 1, '2021-12-03 05:23:25'),
(22, 'iPhone 12 Mini 64GB', '0c143e9ecc.png', 15999000, 15900000, 1, 10, '', 0, 1, '2021-12-03 05:26:35'),
(23, 'iPhone XR 64GB', '06869aac70.png', 12499000, 12400000, 1, 20, '', 0, 1, '2021-12-03 05:27:30'),
(24, 'iPhone 11 64GB', '4fba5c57b7.png', 16999000, 16900000, 1, 10, '', 0, 1, '2021-12-03 05:28:29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `id_silde` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_slide` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `special` int(11) NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permission` int(11) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`user`, `password`, `avatar`, `name`, `address`, `permission`, `create_at`) VALUES
('abc', '123', 'a6fdb7cc5c.jfif', 'xyz', 'đố biết', 0, '2021-11-29 16:19:19'),
('bbb', '123', '', 'bbb', 'hnoi', 0, '2021-11-29 16:19:19'),
('bmw', '123', '94a6a50108.png', 'mon', 'mẽo', 0, '2021-11-29 16:19:19'),
('bo', '123', '35825cf969.png', 'ntn', 'tàu', 0, '2021-11-29 16:19:19'),
('dung', '123', 'user.jpg', 'dungchi', 'ko biet', 1, '2021-11-29 16:19:19'),
('mai', '123', '839947a2de.jpg', 'mai', 'sss', 0, '2021-11-29 16:19:19'),
('ntn', '123', '46da347ef0.jpg', 'wwe', 'hanoi', 0, '2021-11-29 16:22:00'),
('thinh', '123', '3896224ab1.jpeg', 'Phạm Văn Thịnh', 'xóm 9 xã quang thiện', 0, '2021-12-01 09:34:57');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Chỉ mục cho bảng `cart_detail`
--
ALTER TABLE `cart_detail`
  ADD PRIMARY KEY (`id_cart_detail`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_comment`);

--
-- Chỉ mục cho bảng `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id_silde`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT cho bảng `cart_detail`
--
ALTER TABLE `cart_detail`
  MODIFY `id_cart_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `information`
--
ALTER TABLE `information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id_silde` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
