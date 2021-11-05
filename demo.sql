-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 03, 2021 lúc 02:56 PM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `demo`
--

DELIMITER $$
--
-- Thủ tục
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_timkiem` (`_param` VARCHAR(255))  BEGIN
IF CONVERT(_param,DECIMAL) = 0 THEN
SELECT *
FROM product
WHERE title LIKE CONCAT('%',_param,'%') OR content LIKE CONCAT('%',_param,'%');
ELSE
 SELECT *
 FROM product
 WHERE price >= CONVERT(_param,DECIMAL);
END IF;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brand`
--

CREATE TABLE `brand` (
  `idbrand` int(11) NOT NULL,
  `namebrand` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `brand`
--

INSERT INTO `brand` (`idbrand`, `namebrand`, `logo`) VALUES
(1, 'Dell', 'https://seeklogo.com/images/D/dell-logo-970ADE9CAE-seeklogo.com.png'),
(2, 'Asus', 'https://i.ibb.co/gzd9tmG/logo-Asus-removebg-preview.png'),
(3, 'Apple', 'https://upload.wikimedia.org/wikipedia/commons/a/ab/Apple-logo.png'),
(4, 'Lenovo', 'https://laptopwin.com/uploads/product/600-6002930_lenovo-laptop-logo-hd-png-download.png'),
(5, 'MSI', 'https://banner2.cleanpng.com/20180417/hdq/kisspng-laptop-graphics-cards-video-adapters-micro-star-game-logo-5ad605b9ca8ed0.2489552615239756098297.jpg'),
(6, 'HP', 'https://brasol.vn/public/ckeditor/uploads/thiet-ke-logo-tin-tuc/logo-hp-png.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `idcat` int(11) NOT NULL,
  `namecat` varchar(225) DEFAULT NULL,
  `thumbnailcat` varchar(255) NOT NULL,
  `descriptioncat` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`idcat`, `namecat`, `thumbnailcat`, `descriptioncat`) VALUES
(1, 'Laptop Gaming', 'https://phuongtung.vn/pt/images/blog/10/asus-fx504ge-i5-8300h-8gb-1tb-gtx1050ti-win10-e41-content-thietke_800x444.jpg', ' Laptop gaming (laptop chuyên chơi game) là loại máy tính xách tay được thiết kế chuyên biệt phục vụ cho việc chơi game nặng, các trò chơi điện tử trên máy tính cần xử lý mạnh về đồ họa.  Cấu trúc máy được thiết kế và hoàn thiện với chất lượng vượt trội, thêm vào đó những chiếc laptop gaming luôn được áp dụng các công nghệ mới nhất, nâng cấp mạnh nhất về phần cứng.                                 '),
(2, 'Laptop Văn phòng', 'https://acup.vn/image/bai_viet/20-laptop-van-phong/laptop-van-phong-gia-re-acup_(1).jpg', 'Đối với nhân viên văn phòng, công việc chung chủ yếu là soạn thảo văn bản trong word, tính toán excel, trình chiếu PowerPoint, sử dụng các phần mềm nhập dữ liệu, số liệu… Ngoài ra, còn có một số hoạt động học tập và giải trí khác, thì chiếc laptop là công cụ hỗ trợ cần thiết và đắc lực nhất. Vì vậy việc lựa chọn một chiếc laptop phù hợp với đặc thù công việc là hết sức quan trọng. Nếu bạn không rành bạn không thể bỏ qua cách chọn laptop cho dân văn phòng ở dưới đây:'),
(3, 'Laptop đồ hoạ', 'https://cdn.tgdd.vn/Files/2018/04/08/1080524/maxresdefault_1280x720-800-resize.jpg', 'Nhiều người nói rằng muốn mua Laptop cho sinh viên chuyên đồ họa hay kỹ thuật thì cứ thấy cái nhiều tiền mà \"xúc\". Đúng! Nhưng chỉ ở một khía cạnh, vì dòng laptop này còn đòi hỏi thêm nhiều yêu cầu khác như card đồ họa mạnh, màn hình chuẩn xác...'),
(4, 'Phụ kiện', 'https://binhduongcomputer.vn/uploads/linhvuc/linh-kien-laptop-binh-duong.jpg', 'phụ kiện desa');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `orderdate` int(20) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 2 COMMENT '1: đang giao hàng, chờ xác nhận,3 Đã hủy'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `iduser`, `fullname`, `phone`, `email`, `address`, `orderdate`, `status`) VALUES
(7, 1, 'Dương Chí Hướng', 123, 'admin@huong.com', '12, Xã Long Hòa, Huyện Cần Giờ, Hồ Chí Minh', 1635865591, 1),
(8, 1, 'Dương Chí Hướng', 366823243, 'admin@huong.com', 're, Xã Long Hòa, Huyện Cần Giờ, Hồ Chí Minh', 1635815191, 3),
(9, 1, 'Dương Chí Hướng', 32847234, 'admin@huong.com', 'haha, Phường Mai Dịch, Quận Cầu Giấy, Hà Nội', 1635523591, 1),
(10, 1, 'Dương Chí Hướng', 368329432, 'admin@huong.com', 'haha, Phường Mai Dịch, Quận Cầu Giấy, Hà Nội', 1635739591, 3),
(11, 2, 'Testuser', 367344384, 'user@huong.com', 'ten duong, Xã Ea Kuêh, Huyện Cư M\'gar, Đắc Lắc', 1635423631, 1),
(12, 2, 'Testuser', 7438344, 'user@huong.com', 'we, Xã Chiềng Sơ, Huyện Điện Biên Đông, Điện Biên', 1635432631, 2),
(13, 1, 'Dương Chí Hướng', 3743343, 'admin@huong.com', 'as, Xã Hưng Phú, Huyện Phước Long, Bạc Liêu', 1635439631, 2),
(14, 1, 'Dương Chí Hướng', 37324324, 'admin@huong.com', 'as, Xã Hưng Phú, Huyện Phước Long, Bạc Liêu', 1635432661, 2),
(15, 1, 'Dương Chí Hướng', 345345, 'admin@er.fg', 'as, Xã Hưng Phú, Huyện Phước Long, Bạc Liêu', 1635869760, 1),
(16, 1, 'Dương Chí Hướng', 32847324, 'admin@mail.com', 'as, Xã Hưng Phú, Huyện Phước Long, Bạc Liêu', 1635930980, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `num` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `order_details`
--

INSERT INTO `order_details` (`id`, `product_id`, `order_id`, `num`, `price`) VALUES
(7, 5, 7, 2, 1500000),
(8, 9, 8, 1, 13232300),
(9, 1, 9, 1, 99999),
(10, 1, 10, 1, 99999),
(11, 1, 11, 1, 99999),
(12, 1, 12, 1, 99999),
(13, 1, 13, 1, 99999),
(14, 9, 13, 1, 13232300),
(15, 1, 14, 2, 99999),
(16, 7, 15, 2, 9999),
(17, 5, 16, 1, 1500000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `brand` varchar(255) NOT NULL,
  `thumbnail` varchar(500) DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `id_category` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `title`, `price`, `brand`, `thumbnail`, `content`, `id_category`, `created_at`, `updated_at`) VALUES
(1, 'Laptop dell', 99999, 'dell', 'https://laptoptitan.vn/wp-content/uploads/2021/04/15-Laptop-Tot-nhat-2021-1.jpg', 'hehehehe', 2, '2021-10-12 00:00:00', '2021-10-12 00:00:00'),
(5, 'Laptop asus', 1500000, '', 'https://cdn.tgdd.vn/Products/Images/44/238139/lg-gram-17-i7-17z90pgah78a5-3-600x600.jpg', 'ram 16bg', 1, '2021-10-13 14:46:52', '2021-10-13 14:46:52'),
(7, 'Laptop dell xyz', 9999, 'dell', 'https://laptopdaiphong.com/wp-content/uploads/2020/03/laptop-do-hoa-2019.jpg', 'okok', 1, '2021-10-20 17:54:05', '2021-10-20 17:54:05'),
(9, 'laptop asus vippro', 13232300, 'Asus', 'https://laptopdaiphong.com/wp-content/uploads/2020/03/laptop-do-hoa-2019.jpg', 'ok', 1, '2021-10-20 17:08:37', '2021-10-20 17:08:37');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 2,
  `created_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `fullname`, `email`, `phone`, `address`, `password`, `role`, `created_at`) VALUES
(1, 'Dương Chí Hướng', 'admin', 0, 'as, Xã Hưng Phú, Huyện Phước Long, Bạc Liêu', '$2y$10$bf6maRLGa4pY8KmTDATjD.gU9AcZgWxRqmYx05.tmV9cuHQHowsne', 1, 1635863499),
(2, 'Testuser', 'user', 0, '', '$2y$10$bf6maRLGa4pY8KmTDATjD.gU9AcZgWxRqmYx05.tmV9cuHQHowsne', 2, 1635863499),
(3, 'Testuser2', 'user2@user2.user2', 0, '', '$2y$10$Oul11DBTU9w/csFOqawrVeg5/AuFATObEs9HywlO5IbZ/5Pm0Wt16', 2, 1635863499),
(4, 'Duong Chi Huong', 'email@em.com', 0, '', '$2y$10$JXvq1uDO0gua/zC7.N1kVeqCR.KByD6ExjQnSZOeh.7YhxygwZD7q', 2, 1635779415),
(5, 'Dương Chí Hướng', 'jaxuatt6@gmail.com', 2147483647, '', '$2y$10$sKXZl.Vva/6TAx6ZehzVvumwxIUqDNuTaNVF8ZMURkqFI/8L4Gtm2', 2, 1635865815);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`idbrand`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`idcat`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `brand`
--
ALTER TABLE `brand`
  MODIFY `idbrand` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `idcat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
