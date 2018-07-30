-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 23, 2018 lúc 11:57 AM
-- Phiên bản máy phục vụ: 10.1.30-MariaDB
-- Phiên bản PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `csdlctybanhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id_bl` int(11) NOT NULL COMMENT 'ID binh luan',
  `id_sp` int(11) NOT NULL COMMENT 'ID san pham',
  `Ho_ten` int(50) NOT NULL COMMENT 'Ho ten ngoi binh luan',
  `Ngay_gio` datetime NOT NULL COMMENT 'Thoi diem binh luan',
  `Noi_dung` varchar(250) NOT NULL COMMENT 'Noi dung binh luan',
  `Dien_thoai` int(11) NOT NULL COMMENT 'So dien thoai nguoi binh luan'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ct_hd`
--

CREATE TABLE `ct_hd` (
  `id_ct_hd` int(11) NOT NULL COMMENT 'ID chi tiet hoa don',
  `id_hd` int(11) NOT NULL COMMENT 'ID cua hoa don',
  `id_sp` int(11) NOT NULL COMMENT 'ID cua san pham',
  `So_luong_mua` int(5) NOT NULL COMMENT 'So san pham trong hoa don',
  `Don_gia` int(15) NOT NULL COMMENT 'Don gia cua hoa don'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc_sp`
--

CREATE TABLE `danhmuc_sp` (
  `id_danhmuc` int(11) NOT NULL COMMENT 'ID danh muc',
  `Ten_dm` varchar(50) NOT NULL COMMENT 'Ten danh muc'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `don_dh`
--

CREATE TABLE `don_dh` (
  `id_hd` int(11) NOT NULL COMMENT 'ID hoa don',
  `id_kh` int(11) NOT NULL COMMENT 'ID khach hang',
  `id_tinhtrang` int(11) NOT NULL COMMENT 'ID tinh trang don hang',
  `id_nvgh` int(11) NOT NULL COMMENT 'ID nhan vien giao hang',
  `Ngay_lap` datetime NOT NULL COMMENT 'Ngay lap hoa don',
  `Tong_gia` int(15) NOT NULL COMMENT 'Tong gia cua hoa don',
  `Noi_nhan` varchar(100) NOT NULL COMMENT 'Noi nhan don hang',
  `Ghi_chu` varchar(100) NOT NULL COMMENT 'Ghi chu cua nhan vien'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id_kh` int(11) NOT NULL COMMENT 'ID khach hang',
  `Ten_kh` varchar(50) NOT NULL COMMENT 'Ten khach hang',
  `Sdt` varchar(50) NOT NULL COMMENT 'So dien thoai khach hang',
  `Mail` varchar(50) NOT NULL COMMENT 'Email khach hang',
  `Diachi_kh` varchar(100) NOT NULL COMMENT 'Dia chi khach hang'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `id_nd` int(11) NOT NULL COMMENT 'ID nguoi dung',
  `Ten_nd` varchar(50) NOT NULL COMMENT 'Ten nguoi dung',
  `Tai_khoan` varchar(50) NOT NULL COMMENT 'Tai khoan cua ngoi dung',
  `Mat_khau` varchar(25) NOT NULL COMMENT 'Mat khau ngoi dung'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nv_gh`
--

CREATE TABLE `nv_gh` (
  `id_nv_gh` int(11) NOT NULL COMMENT 'ID nhan vien giao hang',
  `Ten_nvgh` int(11) NOT NULL COMMENT 'Ten nhan vien giao hang',
  `SDT1` int(11) NOT NULL COMMENT 'So dien thoai cua nhan vien giao hang',
  `SDT2` int(11) NOT NULL COMMENT 'So dien thoai cua nhan vien giao hang'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sp` int(11) NOT NULL COMMENT 'ID san pham',
  `id_khuyenmai` int(11) NOT NULL COMMENT 'ID khuyen mai',
  `id_dm` int(11) NOT NULL COMMENT 'ID danh muc',
  `Ten_sp` varchar(100) NOT NULL COMMENT 'Ten san pham',
  `Anh_sp` varchar(50) NOT NULL COMMENT 'Anh  san pham',
  `Gia_sp` int(13) NOT NULL COMMENT 'Gia san pham',
  `Soluong_sp` int(5) NOT NULL COMMENT 'So luong san pham',
  `Kich_thuoc` varchar(255) NOT NULL COMMENT 'Kich thuoc san pham',
  `Trong_luong` varchar(255) NOT NULL COMMENT 'Trong luong san pham',
  `Mau_sac` varchar(255) NOT NULL COMMENT 'Mau sac san pham',
  `Am_thanh` varchar(255) NOT NULL COMMENT 'Am thanh ',
  `Bo_nho` varchar(255) NOT NULL COMMENT 'Bo nho cua san pham',
  `He_Dieu_hanh` varchar(255) NOT NULL COMMENT 'He dieu hanh cua san pham',
  `RAM` varchar(255) NOT NULL COMMENT 'RAM san pham',
  `Camera` varchar(255) NOT NULL COMMENT 'Camera san pham',
  `Pin` varchar(255) NOT NULL COMMENT 'Pin cua san pham',
  `Bao_hanh` varchar(255) NOT NULL COMMENT 'Bao hanh',
  `Ket _noi` varchar(255) NOT NULL COMMENT 'Ket noi cua thiet bi',
  `Gia_km` int(12) NOT NULL COMMENT 'Gia khuyen mai(neu co)',
  `Batdau_km` datetime NOT NULL COMMENT 'Ngay bat dau khuyen mai',
  `Ketthuc_km` datetime NOT NULL COMMENT 'Ngay ket thuc khuyen mai'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sp_ban`
--

CREATE TABLE `sp_ban` (
  `id_sp_ban` int(11) NOT NULL COMMENT 'ID san pham ban',
  `id_sp` int(11) NOT NULL COMMENT 'ID san pham',
  `So_luong_ban` int(5) NOT NULL COMMENT 'SO luong ban ra'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tinh_trang`
--

CREATE TABLE `tinh_trang` (
  `id_tinh_trang` int(11) NOT NULL COMMENT 'ID tinh trang san pham',
  `Tinh_trang` int(11) NOT NULL COMMENT 'Tinh trang cua san pham'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `ct_hd`
--
ALTER TABLE `ct_hd`
  ADD PRIMARY KEY (`id_ct_hd`);

--
-- Chỉ mục cho bảng `danhmuc_sp`
--
ALTER TABLE `danhmuc_sp`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `don_dh`
--
ALTER TABLE `don_dh`
  ADD PRIMARY KEY (`id_hd`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id_kh`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`id_nd`);

--
-- Chỉ mục cho bảng `nv_gh`
--
ALTER TABLE `nv_gh`
  ADD PRIMARY KEY (`id_nv_gh`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sp`);

--
-- Chỉ mục cho bảng `sp_ban`
--
ALTER TABLE `sp_ban`
  ADD PRIMARY KEY (`id_sp_ban`);

--
-- Chỉ mục cho bảng `tinh_trang`
--
ALTER TABLE `tinh_trang`
  ADD PRIMARY KEY (`id_tinh_trang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
