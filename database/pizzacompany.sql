-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 25, 2019 lúc 04:51 PM
-- Phiên bản máy phục vụ: 10.4.8-MariaDB
-- Phiên bản PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `pizzacompany`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `MACTHD` int(20) NOT NULL,
  `MADH` int(20) NOT NULL,
  `MASP` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `GIASP` int(20) NOT NULL,
  `SOLUONG` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`MACTHD`, `MADH`, `MASP`, `GIASP`, `SOLUONG`) VALUES
(1, 3, 'TT003', 99000, 10),
(2, 10, 'TT001', 99000, 1),
(3, 1, 'TC006', 109000, 9),
(4, 2, 'TT006', 99000, 6),
(5, 3, 'TT007', 159000, 2),
(6, 3, 'TT002', 99000, 3),
(7, 5, 'TT006', 99000, 5),
(8, 1, 'TC005', 109000, 10),
(9, 10, 'TC003', 109000, 6),
(10, 2, 'HS001', 239000, 1),
(11, 6, 'TT003', 99000, 10),
(12, 1, 'TT005', 99000, 1),
(13, 9, 'TC006', 109000, 7),
(14, 9, 'TT004', 99000, 6),
(15, 7, 'TC006', 109000, 3),
(16, 2, 'TT002', 99000, 1),
(17, 10, 'TC004', 109000, 1),
(18, 9, 'HS005', 119000, 2),
(19, 2, 'TC006', 109000, 10),
(20, 6, 'TT003', 99000, 10),
(21, 2, 'TT005', 99000, 9),
(22, 4, 'TT003', 99000, 1),
(23, 1, 'TC003', 109000, 5),
(24, 4, 'TT005', 99000, 4),
(25, 2, 'NN003', 89000, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `MADH` int(20) NOT NULL,
  `IDUSER` int(20) NOT NULL,
  `NAME` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `PHONE` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ADDRESS` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `EMAIL` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TONGTIEN` int(20) NOT NULL,
  `NGAYDH` date NOT NULL,
  `STATUS` int(1) NOT NULL,
  `MANV` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`MADH`, `IDUSER`, `NAME`, `PHONE`, `ADDRESS`, `EMAIL`, `TONGTIEN`, `NGAYDH`, `STATUS`, `MANV`) VALUES
(1, 10, 'Lương Ái Ngọc', '0987654321', '150 Nguyễn Thị Minh Khai', 'tranquocthang@gmail.com', 267000, '2019-11-25', 1, 27),
(2, 9, 'Phan Văn Thuận', '0987654321', '150 Nguyễn Thị Minh Khai', 'tranquocthang@gmail.com', 1195000, '2019-11-25', 1, 38),
(3, 9, 'Lê Hồng Lan', '0987654321', '150 Nguyễn Thị Minh Khai', 'tranquocthang@gmail.com', 297000, '2019-11-25', 1, 40),
(4, 28, 'Lê Anh Hậu', '0987654321', '150 Nguyễn Thị Minh Khai', 'tranquocthang@gmail.com', 198000, '2019-11-25', 1, 47),
(5, 23, 'Võ Quốc Tuấn', '0987654321', '150 Nguyễn Thị Minh Khai', 'tranquocthang@gmail.com', 545000, '2019-11-25', 1, 34),
(6, 32, 'Hồ Hồng Linh', '0987654321', '150 Nguyễn Thị Minh Khai', 'tranquocthang@gmail.com', 218000, '2019-11-25', 1, 42),
(7, 38, 'Lê Hồng Lan', '0987654321', '150 Nguyễn Thị Minh Khai', 'tranquocthang@gmail.com', 872000, '2019-11-25', 1, 38),
(8, 19, 'Phan Thị Như', '0987654321', '150 Nguyễn Thị Minh Khai', 'tranquocthang@gmail.com', 990000, '2019-11-25', 1, 19),
(9, 9, 'Lý Huyền Như', '0987654321', '150 Nguyễn Thị Minh Khai', 'tranquocthang@gmail.com', 327000, '2019-11-25', 1, 29),
(10, 22, 'Lý Văn Thắng', '0987654321', '150 Nguyễn Thị Minh Khai', 'tranquocthang@gmail.com', 267000, '2019-11-25', 1, 41),
(11, 12, 'Hồ Ái Linh', '0987654321', '150 Nguyễn Thị Minh Khai', 'tranquocthang@gmail.com', 357000, '2019-11-25', 1, 4),
(12, 35, 'Phan Anh Thuận', '0987654321', '150 Nguyễn Thị Minh Khai', 'tranquocthang@gmail.com', 297000, '2019-11-25', 1, 44),
(13, 14, 'Lương Thái Thắng', '0987654321', '150 Nguyễn Thị Minh Khai', 'tranquocthang@gmail.com', 327000, '2019-11-25', 1, 48),
(14, 13, 'Nguyễn Thị Linh', '0987654321', '150 Nguyễn Thị Minh Khai', 'tranquocthang@gmail.com', 178000, '2019-11-25', 1, 18),
(15, 38, 'Lý Quốc Thắng', '0987654321', '150 Nguyễn Thị Minh Khai', 'tranquocthang@gmail.com', 872000, '2019-11-25', 1, 22),
(16, 6, 'Trần Thị Linh', '0987654321', '150 Nguyễn Thị Minh Khai', 'tranquocthang@gmail.com', 981000, '2019-11-25', 1, 28),
(17, 26, 'Lý Ái Lan', '0987654321', '150 Nguyễn Thị Minh Khai', 'tranquocthang@gmail.com', 119000, '2019-11-25', 1, 42),
(18, 11, 'Nguyễn Hồng Như', '0987654321', '150 Nguyễn Thị Minh Khai', 'tranquocthang@gmail.com', 693000, '2019-11-25', 1, 8),
(19, 38, 'Trần Hồng Như', '0987654321', '150 Nguyễn Thị Minh Khai', 'tranquocthang@gmail.com', 99000, '2019-11-25', 1, 17),
(20, 7, 'Lương Văn Phúc', '0987654321', '150 Nguyễn Thị Minh Khai', 'tranquocthang@gmail.com', 693000, '2019-11-25', 1, 16),
(21, 39, 'Lê Hồng Linh', '0987654321', '150 Nguyễn Thị Minh Khai', 'tranquocthang@gmail.com', 297000, '2019-11-25', 1, 21),
(22, 14, 'Lý Hồng Linh', '0987654321', '150 Nguyễn Thị Minh Khai', 'tranquocthang@gmail.com', 693000, '2019-11-25', 1, 22),
(23, 26, 'Nguyễn Văn Tuấn', '0987654321', '150 Nguyễn Thị Minh Khai', 'tranquocthang@gmail.com', 436000, '2019-11-25', 1, 9),
(24, 38, 'Lý Thái Phúc', '0987654321', '150 Nguyễn Thị Minh Khai', 'tranquocthang@gmail.com', 1431000, '2019-11-25', 1, 42),
(25, 11, 'Trần Văn Hậu', '0987654321', '150 Nguyễn Thị Minh Khai', 'tranquocthang@gmail.com', 623000, '2019-11-25', 1, 37);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donnhap`
--

CREATE TABLE `donnhap` (
  `MANCC` int(10) NOT NULL,
  `MASP` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TONGTIEN` int(20) NOT NULL,
  `NGAYNHAP` datetime NOT NULL DEFAULT current_timestamp(),
  `DUYET` tinyint(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donnhap`
--

INSERT INTO `donnhap` (`MANCC`, `MASP`, `TONGTIEN`, `NGAYNHAP`, `DUYET`) VALUES
(1, 'HS001', 63492010, '2019-04-13', 1),
(2, 'TT006', 97212491, '2019-08-20', 1),
(3, 'HS006', 88404995, '2019-03-05', 1),
(4, 'HS002', 19259404, '2018-02-11', 1),
(4, 'TT006', 23587463, '2018-01-06', 1),
(6, 'HS002', 94730807, '2017-11-16', 1),
(6, 'HS004', 39401946, '2018-06-28', 1),
(6, 'NN003', 25892368, '2018-12-03', 1),
(7, 'TC005', 18949683, '2017-04-27', 1),
(8, 'HS003', 36871511, '2017-10-01', 1),
(8, 'TC005', 64849343, '2019-01-26', 1),
(8, 'TT003', 15005134, '2019-11-22', 1),
(8, 'TT004', 16529809, '2019-12-19', 1),
(9, 'HS006', 21725444, '2019-04-18', 1),
(9, 'NN001', 46618857, '2019-03-23', 1),
(9, 'TC003', 62351021, '2019-04-17', 1),
(9, 'TT004', 50210198, '2017-03-26', 1),
(10, 'NN003', 41058546, '2018-02-20', 1),
(10, 'TC003', 18898858, '2017-06-03', 1),
(10, 'TT001', 75691083, '2019-12-28', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `MAKM` int(20) NOT NULL,
  `TENKM` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TENKM_KD` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `IDUSER` int(20) NOT NULL,
  `NGAYDANGKM` date NOT NULL,
  `NGAYBD` date NOT NULL,
  `NGAYKT` date NOT NULL,
  `MOTAKM` text COLLATE utf8_unicode_ci NOT NULL,
  `HINHANHKM` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khuyenmai`
--

INSERT INTO `khuyenmai` (`MAKM`, `TENKM`, `TENKM_KD`, `IDUSER`, `NGAYDANGKM`, `NGAYBD`, `NGAYKT`, `MOTAKM`, `HINHANHKM`) VALUES
(1, 'COMBO MÓN NGON SAY MÊ (2-3 người)', 'combo mon ngon say me', 1, '2019-04-01', '2019-04-01', '2019-04-30', '<p><strong>COMBO MÓN NGON SAY MÊ (2-3 người)</strong></p>\r\n<p>Combo bao gồm: 1 Pizza Classic (cỡ M, đế đặc biệt viền phô mai/viền phô mai xúc xích), 1 Mỳ Ý (bất kỳ), 1 Cánh gà nướng BBQ/Cánh gà tẩm bột chiên giòn (10pcs).</p>\r\n<p>&diams;  Áp dụng tất cả các ngày trong tuần</p>\r\n\r\n', 'combo2-3nguoi.png'),
(2, 'MUA 1 TẶNG 1', 'mua 1 tang 1', 1, '2019-04-01', '2019-04-01', '2019-04-30', '<p><strong>MUA 1 TẶNG 1</strong></p>\r\n<p>Mua 1 Pizza bất kỳ từ size M tặng 1 Pizza (Pan/Crispy Thin) dòng Classic cùng cỡ.</br>\r\n&diams;  Áp dụng từ 17h-19h thứ 5 hàng tuần\r\n<p>&diams; Không áp dụng với các chương trình ưu đãi khác</p>\r\n', 'mua1tang1.png'),
(3, 'GIẢM 50% CHO PIZZA THỨ 2', 'giam 50% cho pizza thu 2', 1, '2019-04-01', '2019-04-01', '2019-04-30', '<p><strong> GIẢM 50% CHO PIZZA THỨ 2</strong></p>\r\n<p>Mua 1 Pizza (size M, L) và bất kỳ 1 nước kèm theo được giảm 50% Pizza cho Pizza thứ 2 (cùng size, giá trị thấp hơn hoặc bằng pizza nguyên giá). Áp dụng cho mua mang về hoặc giao hàng tận nơi khi đặt hàng qua website. Miễn phí giao hàng tận nơi trong phạm vi bán kính 3km</p>\r\n<p>&diams;  Chỉ áp dụng thứ 2 hàng tuần</p>\r\n<p>&diams;  Không áp dụng với các ưu đãi khác</p>\r\n', 'giam50.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `MACL` int(20) NOT NULL,
  `TENCL` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `HINHANHSP` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisanpham`
--

INSERT INTO `loaisanpham` (`MACL`, `TENCL`, `HINHANHSP`) VALUES
(1, 'Truyền thống', 'TruyenThong'),
(2, 'Thập cẩm', 'ThapCam'),
(3, 'Hải sản cao cấp', 'HaiSanCaoCap'),
(4, 'Nhân nhồi', 'NhanNhoi'),
(5, 'Pizza Nướng', 'Nuong'),
(6, 'Pizza Chay', 'Chay'),
(7, 'Loại Đặc Biệt', 'DacBiet'),
(8, 'Hawaii', 'Hawaiian');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhacungcap`
--

CREATE TABLE `nhacungcap` (
  `MANCC` int(10) NOT NULL,
  `TENNCC` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `THONGTIN` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhacungcap`
--

INSERT INTO `nhacungcap` (`MANCC`, `TENNCC`, `THONGTIN`) VALUES
(1, 'Anh Tuấn', 'Công ty cung cấp nguyên liệu Anh Tuấn'),
(2, 'Ái Lan', 'Công ty cung cấp nguyên liệu Ái Lan'),
(3, 'Thái Phúc', 'Công ty cung cấp nguyên liệu Thái Phúc'),
(4, 'Hồng Lan', 'Công ty cung cấp nguyên liệu Hồng Lan'),
(5, 'Hồng Linh', 'Công ty cung cấp nguyên liệu Hồng Linh'),
(6, 'Huyền Ngọc', 'Công ty cung cấp nguyên liệu Huyền Ngọc'),
(7, 'Anh Tuấn', 'Công ty cung cấp nguyên liệu Anh Tuấn'),
(8, 'Quốc Thắng', 'Công ty cung cấp nguyên liệu Quốc Thắng'),
(9, 'Huyền Linh', 'Công ty cung cấp nguyên liệu Huyền Linh'),
(10, 'Huyền Linh', 'Công ty cung cấp nguyên liệu Huyền Linh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phanhoi`
--

CREATE TABLE `phanhoi` (
  `IDPH` int(20) NOT NULL,
  `IDUSER` int(20) NOT NULL,
  `NAME` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ADDRESS` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `PHONE` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TIEUDE` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `MOTA` text COLLATE utf8_unicode_ci NOT NULL,
  `NGAYPH` date NOT NULL,
  `STATUS` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phanhoi`
--

INSERT INTO `phanhoi` (`IDPH`, `IDUSER`, `NAME`, `ADDRESS`, `PHONE`, `TIEUDE`, `MOTA`, `NGAYPH`, `STATUS`) VALUES
(1, 2, 'Tuấn Hùng', '123 ngô quyền, quận 5, tp hcm', '1234567890', 'Tuyệt Vời', '<p><strong>Đồ ăn của cửa hàng rất &nbsp;ư l&agrave; tuyệt vời&nbsp;ạ.</strong></p>\r\n', '2017-05-19', 0),
(2, 0, 'Dân Thường', 'nhà đối diện', '2147483647', 'Cửa hàng đẹp', 'Thức ăn ngon, cửa hàng sạch đẹp\r\n', '2017-06-01', 1),
(3, 0, 'Cô hàng xóm', 'sát vách', '2147483647', 'Anh chủ shop đẹp trai', '<p>Cho hỏi anh chủ shop c&oacute; người y&ecirc;u chưa&nbsp;ạ?</p>\r\n', '2018-04-16', 1),
(4, 5, 'Nguyễn Duy Vàng', '123 đường 3 tháng 2 quận 10 tp hcm', '01234567890', 'Chất lượng sản phẩm', '<p>thức ăn ngon lắm cửa h&agrave;ng ơi!!!</p>\r\n', '2019-05-17', 1),
(5, 13, 'duy vang', '132 3 tháng 2 quận 10 tp hcm', '0911482088', 'dịch vụ', '<p>dịch vụ của cửa h&agrave;ng rất tốt</p>\r\n', '2019-05-17', 0),
(6, 13, 'duy vang', '132 3 tháng 2 quận 10 tp hcm', '0911482088', 'Chất lượng sản phẩm', '<p>ngon v&agrave; rẻ</p>\r\n', '2019-05-18', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `MASP` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MACL` int(20) NOT NULL,
  `TENSP` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TENSPKD` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `GIA` int(20) NOT NULL,
  `MOTA` text COLLATE utf8_unicode_ci NOT NULL,
  `MANCC` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `DUYET` tinyint(2) NOT NULL DEFAULT 2,
  `HINHANHSP` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SOLUONG` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`MASP`, `MACL`, `TENSP`, `TENSPKD`, `GIA`, `MOTA`, `MANCC`, `DUYET`, `HINHANHSP`, `SOLUONG`) VALUES
('HS001', 3, 'Pizza \"Lẩu\" Thái Tom', 'pizza lau thai tom', 239000, '<p>Pizza Tom Yum Kung, lấy cảm hứng từ món lẩu Tom Yum nổi tiếng Thái Lan,\"đánh bật\" vị giác với sốt Tom Yum chua chua, cay cay, ngọt ngọt, béo béo làm thay đổi hoàn toàn nhận định của bạn về chiếc bánh pizza đơn thuần.</p>\r\n', '', 2, 'LauThaiTom.png', 1),
('HS002', 3, 'Pizza Hải Sản Pesto', 'pizza hai san pesto', 239000, '<p>Quý cô Pizza Hải Sản sốt Pesto đúng chất \"sành điệu kiểu Ý\": Làm cho bạn có cảm giác khác lạ lúc ban đầu, nhưng một khi đã \"tiếp xúc\" thì sẽ mê mẩn ngay càng xa càng nhớ.</p>\r\n', '', 2, 'HaiSanPesto.png', 1),
('HS003', 3, 'Pizza Hải Sản Cao Cấp', 'hai san cao cap', 119000, '<p>Pizza tuyệt hảo từ hải sản tươi ngon tôm, cua, mực và nghêu mang bạn đến thiên đường hải sản></p>\r\n', '', 2, 'HaiSanCaoCap.png', 1),
('HS004', 3, 'Pizza Hải Sản Cocktail', 'hai san cocktail', 119000, '<p>Pizza hải sản với sốt Thousand Island và vô vàn các topping tươi ngon từ tôm, cua, giăm bông,...</p>\r\n', '', 2, 'HaiSanCocktail.png', 1),
('HS005', 3, 'Pizza Hải Sản Nhiệt Đới', 'hai san nhiet doi', 119000, '<p>Với sự kết hợp hoàn hảo của hải sản vùng nhiệt đới như tôm, nghêu, mực, cua, dứa với sốt Thousand Island.></p>\r\n', '', 2, 'HaiSanNhietDoi.png', 1),
('HS006', 3, 'Pizza Tôm Cocktail', 'tom cocktail', 119000, '<p>Pizza cocktail tôm với nấm, dứa, cà chua và sốt Thousand Island.</p>\r\n', '', 2, 'TomCocktail.png', 1),
('NN001', 4, '5 Loại Thịt Đặc Biệt', '5 loai thit dac biet', 99000, '<p>Nhân nhồi bên trong siêu thượng hạng với nhiểu loại thịt và rau phong phú.</p>\r\n', '', 2, '5LoaiThitNN.png', 1),
('NN002', 4, 'Hawaiian Nhân Nhồi', 'hawaiian nhân nhồi', 89000, '<p>Nhân nhồi bên trong là đặc trưng miền nhiệt đới với giăm bông, thịt muối và dứa.</p>\r\n', '', 2, 'hawaiianNN.png', 1),
('NN003', 4, 'Gà Nướng 3 Vị Nhân Nhồi', 'ga nuong 3 vi nhan nhoi', 89000, '<p>Nhân nhồi bên trong được kết hợp giữa ba cách chế biến gà nướng, gà bơ tỏi và gà ướp sốt nấm mang đến cho bạn hương vị mới lạ.</p>\r\n', '', 2, 'GaNuong3ViNN.png', 1),
('TC001', 2, 'Pizza Aloha', 'aloha', 109000, '<p>Thịt nguội, xúc xích tiêu cay và dứa hòa quyện với sôt Thousand Island mang đến hương vị đặc trưng của bánh./p>\r\n', '', 2, 'aloha.png', 1),
('TC002', 2, 'Ba Loại Thịt Thập Cẩm', 'ba loai thit thap cam', 109000, '<p>Bánh là sự kết hợp hài hòa\r\ncủa ba loại thịt và rau củ.</p>\r\n', '', 2, 'BaLoaiThit.png', 1),
('TC003', 2, 'Pizza Thịt Xông Khói', 'thit xong khoi', 109000, '<p>Bánh pizza kết hợp giữa thịt giăm bông, thịt xông khói và hai loại rau của ớt xanh, cà chua.</p>\r\n', '', 2, 'ThitXongKhoi.png', 1),
('TC004', 2, 'Pizza Gà Nướng 3 Vị', 'ga nuong 3 vi', 109000, '<p>Bánh pizza được kết hợp giữa ba cách chế biến gà nướng, gà bơ tỏi và gà ướp sốt nấm mang đến cho bạn hương vị mới lạ.</p>\r\n', '', 2, 'GaNuong3Vi.png', 1),
('TC005', 2, 'Pizza Kiểu Canada', 'pizza kieu canada', 109000, '<p>Bánh pizza thịt nguội kiểu Canada mang đến cho bạn phong cách Canadian bằng sự kết hợp giữa thịt nguội và bắp ngọt.</p>\r\n', '', 2, 'Canada.png', 1),
('TC006', 2, '5 Loại Thịt Đặc Biệt', '5 loại thịt đặc biệt', 109000, '<p>Bánh pizza siêu thượng hạng với vô vàn loại thịt đặc biệt như xúc xích heo, giăm bông, thịt xông khói,...và cả thế giới rau phong phú.</p>\r\n', '', 2, '5LoaiThit.png', 1),
('TT001', 1, 'Pizza Xúc xích Ý', 'xuc xich y', 99000, '<p>Bánh Pizza xúc xích cay kiểu Ý trên nền sốt cà chua mang lại hương vị trộn lẫn giữa cay cay và chua chua.</p>', '', 2, 'XucXichY.png', 1),
('TT002', 1, 'Pizza Phô mai', 'pho mai', 99000, '<p>Bánh pizza với vô vàn phô mai để bạn tha hồ tận hưởng.</p>\r\n\r\n\r\n', '', 2, 'PhoMai.png', 1),
('TT003', 1, 'Pizza Thịt nguội & Nấm', 'thit nguoi & nam', 99000, '<p>Bánh pizza giăm bông với nấm đem đến cho bạn đến những trãi nghiệm thú vị.</p>\r\n', '', 2, 'ThitNguoi&Nam.png', 1),
('TT004', 1, 'Pizza Gà Nướng Dứa', 'ga nuong dua', 99000, '<p>Bánh pizza thịt gà mang vị ngọt của dứa kết với vị cay nóng của ớt tạo nên một nét rất riêng.</p>\r\n', '', 2, 'GaNuongDua.png', 1),
('TT005', 1, 'Pizza Rau Củ', 'rau cu', 99000, '<p>Bánh pizza rau củ gồm hành, ớt chuông, nấm, dứa, cà chua là sự lựa chọn tuyệt vời cho người ăn chay.</p>\r\n', '', 2, 'RauCu.png', 1),
('TT006', 1, 'Pizza Hawaiian', 'hawaiian', 99000, '<p>Bánh pizza đặc trưng miền nhiệt đới với giăm bông, thịt muối và dứa tạo nên sự kết hợp ngon tuyệt giữa vị ngọt và chua.></p>\r\n', '', 2, 'hawaiian.png', 1),
('TT007', 1, 'Pizza Bò', 'pizzabo', 159000, '<p>vị b&ograve; ngon</p>\r\n', '', 2, 'xdmhpl.jpg', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `IDUSER` int(11) NOT NULL,
  `USERNAME` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `PASSWORD` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NAME` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `CMND` int(12) NOT NULL,
  `ADDRESS` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `EMAIL` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `PHONE` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `LEVEL` int(1) NOT NULL,
  `NOTE` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`IDUSER`, `USERNAME`, `PASSWORD`, `NAME`, `CMND`, `ADDRESS`, `EMAIL`, `PHONE`, `LEVEL`, `NOTE`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'admin', 123456789, '123 admin', 'admin@gmail.com', '0120147841', 2, 1),
(2, 'anhtuan', '15f8182445bac21b05802649a8a698e7', 'Trần Anh Tuấn', 1234567890, '123 thiên đàng, quận 12', 'anhtuan@gmail.com', '0123456789', 1, 1),
(3, 'duyvang', '8d0fa2cd4ed157b401daa62590c4c27a', 'Nguyễn Duy Vàng', 1234567891, '287 thành công, quận tân phú, tp Hồ Chí Minh', 'duyvang@gmail.com', '0123456744', 1, 1),
(8, 'thientam', 'b58c6ee1f5147f41204f3225a3039e99', 'Phan Thiên Tâm', 123456789, 'Số 10 đường 13, Thiên Đàng, TP. Cửu U', 'thientam@gmail.com', '01234567120', 0, 1),
(10, 'huatiensinh', 'ccef8c9a83e883430038c91805b316ed', 'Hứa Bán Thần', 123456789, 'tiểu miếu sông Vong Thủy', 'huatiensinh@gmail.com', '01234567877', 0, 1),
(13, 'vang01', 'e10adc3949ba59abbe56e057f20f883e', 'duy vang', 123456789, '132 3 tháng 2 quận 10 tp hcm', 'duyvang260498@gmail.com', '0911482088', 0, 1),
(14, 'xuantai', 'b4bec8de2e29ee17f082d03ff139c361', 'Nguyễn Xuân Tài', 1231648941, '287 thành công quận tân phú tp hcm', 'xuantai@gmail.com', '0120369850', 0, 0),
(15, 'minhkhai', '25f9e794323b453885f5181f1b624d0b', 'Nguyễn Thị Minh Khai', 1012410124, '123 bùi đình túy quận bình thạnh, tp hcm', 'vang260498@gmail.com', '0985102104', 0, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`MACTHD`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`MADH`);

--
-- Chỉ mục cho bảng `donnhap`
--
ALTER TABLE `donnhap`
  ADD PRIMARY KEY (`MANCC`,`MASP`);

--
-- Chỉ mục cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`MAKM`);

--
-- Chỉ mục cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`MACL`);

--
-- Chỉ mục cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD PRIMARY KEY (`MANCC`);

--
-- Chỉ mục cho bảng `phanhoi`
--
ALTER TABLE `phanhoi`
  ADD PRIMARY KEY (`IDPH`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MASP`),
  ADD KEY `idCL` (`MACL`),
  ADD KEY `maNCC` (`MANCC`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`IDUSER`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `MACTHD` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `MADH` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `MAKM` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `MACL` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  MODIFY `MANCC` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `phanhoi`
--
ALTER TABLE `phanhoi`
  MODIFY `IDPH` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `IDUSER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
