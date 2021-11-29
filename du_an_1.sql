-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 29, 2021 lúc 04:06 PM
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
-- Cơ sở dữ liệu: `du_an_1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `id_binhluan` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `noi_dung` varchar(1000) NOT NULL,
  `ngay_binhluan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `binh_luan`
--

INSERT INTO `binh_luan` (`id_binhluan`, `id_sanpham`, `id_khachhang`, `noi_dung`, `ngay_binhluan`) VALUES
(3, 24, 17, 'Sp tệ không như quảng cáo', '2021-11-17'),
(4, 20, 15, 'Váy mặc rất thoải mái', '2021-11-18');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cau_hinh`
--

CREATE TABLE `cau_hinh` (
  `logo` varchar(1000) NOT NULL,
  `dia_chi_web` varchar(1000) NOT NULL,
  `sdt_web` int(11) NOT NULL,
  `facebook` varchar(1000) NOT NULL,
  `twitter` varchar(1000) NOT NULL,
  `instagram` varchar(1000) NOT NULL,
  `youtube` varchar(1000) NOT NULL,
  `tiktok` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `don_hang`
--

CREATE TABLE `don_hang` (
  `id_donhang` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `ghi_chu` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don_chi_tiet`
--

CREATE TABLE `hoa_don_chi_tiet` (
  `id_hoadon` int(11) NOT NULL,
  `id_donhang` int(11) NOT NULL,
  `ten_khachhang` varchar(255) NOT NULL,
  `sdt_khachhang` int(11) NOT NULL,
  `dia_chi` varchar(500) NOT NULL,
  `ten_sanpham` varchar(1000) NOT NULL,
  `gia` int(11) NOT NULL,
  `thuong_hieu` varchar(255) NOT NULL,
  `ngay_mua` date NOT NULL,
  `trang_thai` varchar(500) NOT NULL,
  `ghi_chu` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `id_khachhang` int(11) NOT NULL,
  `ten_khachhang` varchar(255) NOT NULL,
  `img_khachhang` varchar(500) NOT NULL,
  `sdt_khachhang` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `dia_chi` varchar(500) NOT NULL,
  `gioi_tinh` varchar(10) NOT NULL,
  `vai_tro` varchar(10) NOT NULL,
  `ngay_dky` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`id_khachhang`, `ten_khachhang`, `img_khachhang`, `sdt_khachhang`, `email`, `password`, `dia_chi`, `gioi_tinh`, `vai_tro`, `ngay_dky`) VALUES
(13, 'Lê Thanh Bình', '11111.jpg', '0346759178', 'binhltph16803@fpt.edu.vn', '26062002', 'Hà Nam', 'Nam', 'Admin', '2021-11-27'),
(15, 'Cao Thị Hồng Thắm', '12.jpg', '000000000', 'thamcthph16766@fpt.edu.vn', '23062002', 'Hà Tây', 'Nữ', 'Admin', '2021-11-27'),
(16, 'Nguyễn Hồng Nhung', '2222.jpg', '0123456789', 'nhungnhph11111@fpt.edu.vn', '11102002', 'Hà Nam', 'Nữ', 'User', '2021-11-27'),
(17, 'Trần Việt Hoàng', 'E-G6b1hWUAE2FYJ.png', '0123654987', 'hoangtvph12222@fpt.edu.vn', '15012002', 'Hà Nam', 'Nam', 'User', '2021-11-27');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_hang`
--

CREATE TABLE `loai_hang` (
  `id_loaihang` int(11) NOT NULL,
  `ten_loaihang` varchar(255) NOT NULL,
  `img_loaihang` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loai_hang`
--

INSERT INTO `loai_hang` (`id_loaihang`, `ten_loaihang`, `img_loaihang`) VALUES
(2, 'Đồ công sở', '11111.jpg'),
(3, 'Đồ nam', '11_qqhv.jpg'),
(4, 'Đồ trẻ em', '222.png'),
(5, 'Dồ nữ', '20191213184141.jpg'),
(8, 'Đồ ngủ', '12.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `id_sanpham` int(11) NOT NULL,
  `id_loaihang` int(11) NOT NULL,
  `ten_sanpham` varchar(200) NOT NULL,
  `img_sanpham` varchar(200) NOT NULL,
  `gia` int(11) NOT NULL,
  `giam_gia` int(11) NOT NULL,
  `kich_co` text NOT NULL,
  `so_luong` int(10) NOT NULL,
  `mo_ta` text NOT NULL,
  `luot_xem` int(11) NOT NULL,
  `ngay_nhap` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`id_sanpham`, `id_loaihang`, `ten_sanpham`, `img_sanpham`, `gia`, `giam_gia`, `kich_co`, `so_luong`, `mo_ta`, `luot_xem`, `ngay_nhap`) VALUES
(13, 3, 'Áo trắng', 'ct00192-549k-800x800.jpg', 225000, 0, '39', 6265, 'Vải nịn chống nhăn', 0, '2021-11-10'),
(18, 3, 'Áo nam đen', 'ao-thun-nam-chat-1.jpg', 222000, 0, '', 51, 'Áo co dãn tốt', 0, '2021-11-28'),
(19, 5, 'Váy trắng', '8c67beb9b8e6dae8436b40d95e28a6e5.jpg', 250000, 0, '', 326, 'Vải mịn', 0, '2021-11-28'),
(20, 5, 'Váy cưới', 'hinh-anh-vay-cuoi-den-ca-tinh.jpg', 1200000, 0, '', 21, 'Vái mặc thoải mái ôm dáng', 1, '2021-11-28'),
(21, 5, 'Váy ngắn', 'pngtree-black-writes-a-sense-of-small-dress-png-image_4477742.jpg', 255000, 0, '', 565, 'Váy được may với chất liệu tốt nhất ', 2, '2021-11-29'),
(22, 3, 'Áo đá bóng', 'barca_ao_moi_1.jpg', 100000, 0, '', 354, 'Áo bán chạy nhất 2021', 8, '2021-11-29'),
(23, 2, 'Áo nữ công sở', 'LLQkRXoljclnquQl2dA9.jpg', 240000, 0, '', 351, 'Áo vải mềm mịn thoáng khí ', 0, '2021-11-29'),
(24, 2, 'Áo khoác ', 'thoi-trang-kieu-ao-khoac-da-nu-dep-nhat-hien-nay-01.jpg', 352000, 0, '', 326, 'Áo khoác dài lót bông mịn ấm áp', 1, '2021-11-29'),
(25, 4, 'Quần bò rộng', '9344af25d013f45721e8943e5940ce04.jpg', 230000, 0, '', 351, 'Quần ống rộng thoải mái gọn gàng', 0, '2021-11-29'),
(26, 8, 'Áo ngủ nữ', 'ao-nu-rong-thoang-1.jpg', 82000, 0, '', 351, 'Áo rộng rãi thoải mái khi ngủ chất vải thoáng mát không thấm mồ hôi', 5, '2021-11-29'),
(27, 4, 'Áo đồng phục lớp', 'ao-lop-chibi.jpg', 8500, 0, '', 120, 'Áo lớp rộng , thoải mái , vải thoáng khí', 0, '2021-11-29'),
(28, 8, 'Đồ ngủ nam nữ', 'BdtlkuG6t9dPlQ9lxPnv.jpg', 75000, 0, '', 231, 'Sản phẩm chất lượng cao', 9, '2021-11-29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `id_slide` int(11) NOT NULL,
  `ten_slide` varchar(255) NOT NULL,
  `img_slide` varchar(500) NOT NULL,
  `ulr` varchar(500) NOT NULL,
  `hien_thi` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`id_slide`, `ten_slide`, `img_slide`, `ulr`, `hien_thi`) VALUES
(1, 'Home', '1.png', 'abc', '0'),
(7, 'abc', '123.png', 'aaaa', '0'),
(8, 'test', 'zalo_last_screenshot.png', 'avc', '0');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`id_binhluan`),
  ADD KEY `id_sanpham` (`id_sanpham`),
  ADD KEY `id_khachhang` (`id_khachhang`);

--
-- Chỉ mục cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  ADD PRIMARY KEY (`id_donhang`),
  ADD KEY `id_sanpham` (`id_sanpham`),
  ADD KEY `id_khachhang` (`id_khachhang`);

--
-- Chỉ mục cho bảng `hoa_don_chi_tiet`
--
ALTER TABLE `hoa_don_chi_tiet`
  ADD PRIMARY KEY (`id_hoadon`),
  ADD KEY `id_donhang` (`id_donhang`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`id_khachhang`);

--
-- Chỉ mục cho bảng `loai_hang`
--
ALTER TABLE `loai_hang`
  ADD PRIMARY KEY (`id_loaihang`);

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`id_sanpham`),
  ADD KEY `id_loaihang` (`id_loaihang`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id_slide`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `id_binhluan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  MODIFY `id_donhang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hoa_don_chi_tiet`
--
ALTER TABLE `hoa_don_chi_tiet`
  MODIFY `id_hoadon` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `id_khachhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT cho bảng `loai_hang`
--
ALTER TABLE `loai_hang`
  MODIFY `id_loaihang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id_slide` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `binh_luan_ibfk_1` FOREIGN KEY (`id_sanpham`) REFERENCES `san_pham` (`id_sanpham`),
  ADD CONSTRAINT `binh_luan_ibfk_2` FOREIGN KEY (`id_khachhang`) REFERENCES `khach_hang` (`id_khachhang`);

--
-- Các ràng buộc cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  ADD CONSTRAINT `don_hang_ibfk_1` FOREIGN KEY (`id_sanpham`) REFERENCES `san_pham` (`id_sanpham`),
  ADD CONSTRAINT `don_hang_ibfk_2` FOREIGN KEY (`id_khachhang`) REFERENCES `khach_hang` (`id_khachhang`);

--
-- Các ràng buộc cho bảng `hoa_don_chi_tiet`
--
ALTER TABLE `hoa_don_chi_tiet`
  ADD CONSTRAINT `hoa_don_chi_tiet_ibfk_1` FOREIGN KEY (`id_donhang`) REFERENCES `don_hang` (`id_donhang`);

--
-- Các ràng buộc cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `san_pham_ibfk_1` FOREIGN KEY (`id_loaihang`) REFERENCES `loai_hang` (`id_loaihang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
