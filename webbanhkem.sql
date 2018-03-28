-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 11, 2017 lúc 12:56 CH
-- Phiên bản máy phục vụ: 5.7.14
-- Phiên bản PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webbanhkem`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `price_cart` int(11) DEFAULT NULL,
  `status` varchar(11) DEFAULT NULL,
  `buydatedon` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `price_cart`, `status`, `buydatedon`) VALUES
(53, 3, 30, '', '2017-05-11 11:43:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(15) NOT NULL,
  `createdon` datetime NOT NULL,
  `updatedon` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`category_id`, `name`, `type`, `createdon`, `updatedon`) VALUES
(1, 'BÃ¡nh kem', 'NhÃ¢n socola', '2017-05-11 11:02:47', '2017-05-11 11:02:47'),
(2, 'BÃ¡nh ngá»t', 'NhÃ¢n dá»«a', '2017-05-11 11:03:09', '2017-05-11 11:03:09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tel` varchar(11) NOT NULL,
  `detail` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `tel`, `detail`) VALUES
(4, 'qá»«gh', 'sdg', '1234', 'Ã¡df');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detailcart`
--

CREATE TABLE `detailcart` (
  `id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `detailcart`
--

INSERT INTO `detailcart` (`id`, `cart_id`, `product_id`) VALUES
(4, 26, 6),
(3, 26, 4),
(5, 26, 7),
(6, 27, 6),
(7, 28, 6),
(8, 29, 10),
(9, 30, 10),
(10, 31, 10),
(11, 32, 10),
(12, 33, 9),
(13, 34, 9),
(14, 35, 9),
(15, 36, 9),
(16, 37, 9),
(17, 38, 9),
(18, 39, 9),
(19, 40, 1),
(20, 40, 2),
(21, 41, 1),
(22, 42, 2),
(23, 43, 2),
(24, 44, 2),
(25, 45, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `image` varchar(30) NOT NULL,
  `detail` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `detail` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `createdon` datetime NOT NULL,
  `updatedon` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`product_id`, `category_id`, `name`, `price`, `detail`, `image`, `status`, `createdon`, `updatedon`) VALUES
(3, 2, 'BÃ¡nh má»›i', 20, 'adsa', '/MinaBakery/assets/images/uploads/bo fe tim giang son.jpg', 0, '2017-05-11 12:06:53', '2017-05-11 12:06:53'),
(2, 2, 'Coffee Cake', 30, 'abcdefgh', '/MinaBakery/assets/images/uploads/coffee cake.jpg', 3, '2017-05-11 11:15:02', '2017-05-11 11:15:02'),
(1, 1, 'Black Forest', 50, 'abcdef', '/MinaBakery/assets/images/uploads/black forest.jpg', 3, '2017-05-11 11:12:20', '2017-05-11 11:12:20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `group_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `createdon` datetime NOT NULL,
  `updatedon` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `role`
--

INSERT INTO `role` (`group_id`, `name`, `createdon`, `updatedon`) VALUES
(1, 'admin', '2017-03-31 08:35:21', '2017-03-31 08:35:21'),
(2, 'Sales', '2017-03-31 08:35:39', '2017-03-31 08:35:39'),
(3, 'Customer', '2017-03-31 08:36:04', '2017-03-31 08:36:04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sex` varchar(3) NOT NULL,
  `birthday` int(11) NOT NULL,
  `createdon` datetime NOT NULL,
  `updatedon` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`user_id`, `group_id`, `username`, `password`, `fullname`, `email`, `sex`, `birthday`, `createdon`, `updatedon`) VALUES
(1, 1, '1', '1', '4', '1', '1', 1, '2017-03-23 17:04:24', '2017-03-24 02:50:55'),
(2, 2, '2', '2', '2', '2', '', 2, '2017-03-24 04:39:06', '2017-03-24 04:39:06'),
(3, 3, '3', '3', '3', '3', '3', 3, '2017-03-31 18:11:51', '2017-03-31 18:11:51'),
(4, 3, '4', '4', '4', '4', '', 4, '2017-05-11 12:36:43', '2017-05-11 12:36:43');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `detailcart`
--
ALTER TABLE `detailcart`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Chỉ mục cho bảng `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`group_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `detailcart`
--
ALTER TABLE `detailcart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
