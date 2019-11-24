-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 23, 2019 lúc 10:11 AM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.3.2

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
  `idCTDH` int(20) NOT NULL,
  `idDH` int(20) NOT NULL,
  `idSP` int(20) NOT NULL,
  `giaSP` int(20) NOT NULL,
  `soluongDH` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`idCTDH`, `idDH`, `idSP`, `giaSP`, `soluongDH`) VALUES
(1, 1, 6, 1000000, 1),
(2, 1, 24, 500000, 2),
(3, 3, 36, 750000, 1),
(4, 4, 15, 450000, 2),
(5, 4, 12, 600000, 2),
(6, 4, 3, 500000, 1),
(7, 5, 31, 1600000, 99),
(8, 6, 34, 650000, 1),
(9, 6, 40, 750000, 1),
(10, 6, 41, 1100000, 1),
(11, 7, 21, 900000, 1),
(12, 7, 17, 800000, 1),
(13, 7, 35, 1500000, 1),
(14, 8, 41, 1100000, 1),
(15, 8, 43, 500000, 1),
(16, 9, 7, 600000, 1),
(17, 9, 8, 450000, 1),
(18, 10, 1, 99000, 1),
(19, 10, 2, 99000, 1),
(20, 10, 3, 99000, 1),
(21, 11, 1, 99000, 1),
(22, 12, 1, 99000, 15),
(23, 13, 21, 89000, 1),
(24, 13, 10, 109000, 1),
(25, 13, 14, 239000, 1),
(26, 14, 20, 89000, 3),
(27, 14, 17, 119000, 1),
(28, 14, 15, 119000, 1),
(29, 15, 21, 89000, 1),
(30, 15, 20, 89000, 1),
(31, 16, 21, 89000, 1),
(32, 16, 20, 89000, 1),
(33, 17, 21, 89000, 1),
(34, 17, 20, 89000, 1),
(35, 18, 21, 89000, 1),
(36, 18, 20, 89000, 1),
(37, 19, 21, 89000, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `idDH` int(20) NOT NULL,
  `idUser` int(20) NOT NULL,
  `nameDH` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phoneDH` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `addressDH` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `emailDH` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tongtienDH` int(20) NOT NULL,
  `ngayDH` date NOT NULL,
  `statusDH` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`idDH`, `idUser`, `nameDH`, `phoneDH`, `addressDH`, `emailDH`, `tongtienDH`, `ngayDH`, `statusDH`) VALUES
(10, 13, 'Nguyễn Duy Vàng', '01686883887', '119/38 đường 3 tháng 2, quận 10, tp Hồ Chí Minh', 'vang260498@gmail.com', 297000, '2019-04-17', 3),
(11, 5, 'Nguyễn Duy Vàng', '01234567890', '123 đường 3 tháng 2 quận 10 tp hcm', 'duyvang123@gmail.com', 99000, '2019-05-16', 1),
(13, 13, 'duy vang', '09114820881', '132 3 tháng 2 quận 10 tp hcm', 'duyvang260498@gmail.com', 437000, '2019-05-17', 1),
(14, 14, 'Nguyễn Xuân Tài', '09142417521', '287 thành công quận tân phú tp hcm', 'xuantai@gmail.com', 505000, '2019-05-17', 1),
(15, 13, 'duy vang', '0911482088', '132 3 tháng 2 quận 10 tp hcm', 'duyvang260498@gmail.com', 178000, '2019-05-17', 1),
(16, 13, 'duy vang', '0911482088', '132 3 tháng 2 quận 10 tp hcm', 'duyvang260498@gmail.com', 178000, '2019-05-17', 1),
(17, 13, 'duy vang', '0911482088', '132 3 tháng 2 quận 10 tp hcm', 'duyvang260498@gmail.com', 178000, '2019-05-17', 1),
(18, 13, 'duy vang', '0911482088', '132 3 tháng 2 quận 10 tp hcm', 'duyvang260498@gmail.com', 178000, '2019-05-17', 1),
(19, 13, 'duy vang', '0911482088', '132 3 tháng 2 quận 10 tp hcm', 'duyvang260498@gmail.com', 178000, '2019-05-17', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `idKM` int(20) NOT NULL,
  `tenKM` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tenKM_kd` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idUser` int(20) NOT NULL,
  `ngaydangKM` date NOT NULL,
  `ngaytuKM` date NOT NULL,
  `ngaydenKM` date NOT NULL,
  `motaKM` text COLLATE utf8_unicode_ci NOT NULL,
  `hinhanhKM` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khuyenmai`
--

INSERT INTO `khuyenmai` (`idKM`, `tenKM`, `tenKM_kd`, `idUser`, `ngaydangKM`, `ngaytuKM`, `ngaydenKM`, `motaKM`, `hinhanhKM`) VALUES
(1, 'COMBO MÓN NGON SAY MÊ (2-3 người)', 'combo mon ngon say me', 1, '2019-04-01', '2019-04-01', '2019-04-30', '<p><strong>COMBO MÓN NGON SAY MÊ (2-3 người)</strong></p>\r\n<p>Combo bao gồm: 1 Pizza Classic (cỡ M, đế đặc biệt viền phô mai/viền phô mai xúc xích), 1 Mỳ Ý (bất kỳ), 1 Cánh gà nướng BBQ/Cánh gà tẩm bột chiên giòn (10pcs).</p>\r\n<p>&diams;  Áp dụng tất cả các ngày trong tuần</p>\r\n\r\n', 'combo2-3nguoi.png'),
(2, 'MUA 1 TẶNG 1', 'mua 1 tang 1', 1, '2019-04-01', '2019-04-01', '2019-04-30', '<p><strong>MUA 1 TẶNG 1</strong></p>\r\n<p>Mua 1 Pizza bất kỳ từ size M tặng 1 Pizza (Pan/Crispy Thin) dòng Classic cùng cỡ.</br>\r\n&diams;  Áp dụng từ 17h-19h thứ 5 hàng tuần\r\n<p>&diams; Không áp dụng với các chương trình ưu đãi khác</p>\r\n', 'mua1tang1.png'),
(3, 'GIẢM 50% CHO PIZZA THỨ 2', 'giam 50% cho pizza thu 2', 1, '2019-04-01', '2019-04-01', '2019-04-30', '<p><strong> GIẢM 50% CHO PIZZA THỨ 2</strong></p>\r\n<p>Mua 1 Pizza (size M, L) và bất kỳ 1 nước kèm theo được giảm 50% Pizza cho Pizza thứ 2 (cùng size, giá trị thấp hơn hoặc bằng pizza nguyên giá). Áp dụng cho mua mang về hoặc giao hàng tận nơi khi đặt hàng qua website. Miễn phí giao hàng tận nơi trong phạm vi bán kính 3km</p>\r\n<p>&diams;  Chỉ áp dụng thứ 2 hàng tuần</p>\r\n<p>&diams;  Không áp dụng với các ưu đãi khác</p>\r\n', 'giam50.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `idCL` int(20) NOT NULL,
  `tenCL` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thutuCL` int(20) NOT NULL,
  `hinhanhCL` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisanpham`
--

INSERT INTO `loaisanpham` (`idCL`, `tenCL`, `thutuCL`, `hinhanhCL`) VALUES
(1, 'Truyền thống', 1, 'XucXichY.png'),
(2, 'Thập cẩm', 2, 'XucXichY.png'),
(3, 'Hải sản cao cấp', 3, 'XucXichY.png'),
(4, 'Nhân nhồi', 4, 'XucXichY.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhacungcap`
--

CREATE TABLE `nhacungcap` (
  `maNCC` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tenNCC` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `thongtin` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phanhoi`
--

CREATE TABLE `phanhoi` (
  `idPH` int(20) NOT NULL,
  `idUser` int(20) NOT NULL,
  `namePH` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `addressPH` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phonePH` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tieudePH` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `motaPH` text COLLATE utf8_unicode_ci NOT NULL,
  `ngayPH` date NOT NULL,
  `statusPH` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phanhoi`
--

INSERT INTO `phanhoi` (`idPH`, `idUser`, `namePH`, `addressPH`, `phonePH`, `tieudePH`, `motaPH`, `ngayPH`, `statusPH`) VALUES
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
  `idSP` int(20) NOT NULL,
  `idCL` int(20) NOT NULL,
  `maSP` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tenSP` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tenSP_kd` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `giaSP` int(20) NOT NULL,
  `motaSP` text COLLATE utf8_unicode_ci NOT NULL,
  `maNCC` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `duyet` tinyint(2) NOT NULL DEFAULT '2',
  `hinhanhSP` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `soluong` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`idSP`, `idCL`, `maSP`, `tenSP`, `tenSP_kd`, `giaSP`, `motaSP`, `maNCC`, `duyet`, `hinhanhSP`, `soluong`) VALUES
(1, 1, 'TT001', 'Pizza Xúc xích Ý', 'xuc xich y', 99000, '<p>Bánh Pizza xúc xích cay kiểu Ý trên nền sốt cà chua mang lại hương vị trộn lẫn giữa cay cay và chua chua.</p>', '', 2, 'XucXichY.png', 1),
(2, 1, 'TT002', 'Pizza Phô mai', 'pho mai', 99000, '<p>Bánh pizza với vô vàn phô mai để bạn tha hồ tận hưởng.</p>\r\n\r\n\r\n', '', 2, 'PhoMai.png', 1),
(3, 1, 'TT003', 'Pizza Thịt nguội & Nấm', 'thit nguoi & nam', 99000, '<p>Bánh pizza giăm bông với nấm đem đến cho bạn đến những trãi nghiệm thú vị.</p>\r\n', '', 2, 'ThitNguoi&Nam.png', 1),
(4, 1, 'TT004', 'Pizza Gà Nướng Dứa', 'ga nuong dua', 99000, '<p>Bánh pizza thịt gà mang vị ngọt của dứa kết với vị cay nóng của ớt tạo nên một nét rất riêng.</p>\r\n', '', 2, 'GaNuongDua.png', 1),
(5, 1, 'TT005', 'Pizza Rau Củ', 'rau cu', 99000, '<p>Bánh pizza rau củ gồm hành, ớt chuông, nấm, dứa, cà chua là sự lựa chọn tuyệt vời cho người ăn chay.</p>\r\n', '', 2, 'RauCu.png', 1),
(6, 1, 'TT006', 'Pizza Hawaiian', 'hawaiian', 99000, '<p>Bánh pizza đặc trưng miền nhiệt đới với giăm bông, thịt muối và dứa tạo nên sự kết hợp ngon tuyệt giữa vị ngọt và chua.></p>\r\n', '', 2, 'hawaiian.png', 1),
(7, 2, 'TC001', 'Pizza Aloha', 'aloha', 109000, '<p>Thịt nguội, xúc xích tiêu cay và dứa hòa quyện với sôt Thousand Island mang đến hương vị đặc trưng của bánh./p>\r\n', '', 2, 'aloha.png', 1),
(8, 2, 'TC002', 'Ba Loại Thịt Thập Cẩm', 'ba loai thit thap cam', 109000, '<p>Bánh là sự kết hợp hài hòa\r\ncủa ba loại thịt và rau củ.</p>\r\n', '', 2, 'BaLoaiThit.png', 1),
(9, 2, 'TC003', 'Pizza Thịt Xông Khói', 'thit xong khoi', 109000, '<p>Bánh pizza kết hợp giữa thịt giăm bông, thịt xông khói và hai loại rau của ớt xanh, cà chua.</p>\r\n', '', 2, 'ThitXongKhoi.png', 1),
(10, 2, 'TC004', 'Pizza Gà Nướng 3 Vị', 'ga nuong 3 vi', 109000, '<p>Bánh pizza được kết hợp giữa ba cách chế biến gà nướng, gà bơ tỏi và gà ướp sốt nấm mang đến cho bạn hương vị mới lạ.</p>\r\n', '', 2, 'GaNuong3Vi.png', 1),
(11, 2, 'TC005', 'Pizza Kiểu Canada', 'pizza kieu canada', 109000, '<p>Bánh pizza thịt nguội kiểu Canada mang đến cho bạn phong cách Canadian bằng sự kết hợp giữa thịt nguội và bắp ngọt.</p>\r\n', '', 2, 'Canada.png', 1),
(12, 2, 'TC006', '5 Loại Thịt Đặc Biệt', '5 loại thịt đặc biệt', 109000, '<p>Bánh pizza siêu thượng hạng với vô vàn loại thịt đặc biệt như xúc xích heo, giăm bông, thịt xông khói,...và cả thế giới rau phong phú.</p>\r\n', '', 2, '5LoaiThit.png', 1),
(13, 3, 'HS001', 'Pizza \"Lẩu\" Thái Tom', 'pizza lau thai tom', 239000, '<p>Pizza Tom Yum Kung, lấy cảm hứng từ món lẩu Tom Yum nổi tiếng Thái Lan,\"đánh bật\" vị giác với sốt Tom Yum chua chua, cay cay, ngọt ngọt, béo béo làm thay đổi hoàn toàn nhận định của bạn về chiếc bánh pizza đơn thuần.</p>\r\n', '', 2, 'LauThaiTom.png', 1),
(14, 3, 'HS002', 'Pizza Hải Sản Pesto', 'pizza hai san pesto', 239000, '<p>Quý cô Pizza Hải Sản sốt Pesto đúng chất \"sành điệu kiểu Ý\": Làm cho bạn có cảm giác khác lạ lúc ban đầu, nhưng một khi đã \"tiếp xúc\" thì sẽ mê mẩn ngay càng xa càng nhớ.</p>\r\n', '', 2, 'HaiSanPesto.png', 1),
(15, 3, 'HS003', 'Pizza Hải Sản Cao Cấp', 'hai san cao cap', 119000, '<p>Pizza tuyệt hảo từ hải sản tươi ngon tôm, cua, mực và nghêu mang bạn đến thiên đường hải sản></p>\r\n', '', 2, 'HaiSanCaoCap.png', 1),
(16, 3, 'HS004', 'Pizza Hải Sản Cocktail', 'hai san cocktail', 119000, '<p>Pizza hải sản với sốt Thousand Island và vô vàn các topping tươi ngon từ tôm, cua, giăm bông,...</p>\r\n', '', 2, 'HaiSanCocktail.png', 1),
(17, 3, 'HS005', 'Pizza Hải Sản Nhiệt Đới', 'hai san nhiet doi', 119000, '<p>Với sự kết hợp hoàn hảo của hải sản vùng nhiệt đới như tôm, nghêu, mực, cua, dứa với sốt Thousand Island.></p>\r\n', '', 2, 'HaiSanNhietDoi.png', 1),
(18, 3, 'HS006', 'Pizza Tôm Cocktail', 'tom cocktail', 119000, '<p>Pizza cocktail tôm với nấm, dứa, cà chua và sốt Thousand Island.</p>\r\n', '', 2, 'TomCocktail.png', 1),
(19, 4, 'NN001', '5 Loại Thịt Đặc Biệt', '5 loai thit dac biet', 99000, '<p>Nhân nhồi bên trong siêu thượng hạng với nhiểu loại thịt và rau phong phú.</p>\r\n', '', 2, '5LoaiThitNN.png', 1),
(20, 4, 'NN002', 'Hawaiian Nhân Nhồi', 'hawaiian nhân nhồi', 89000, '<p>Nhân nhồi bên trong là đặc trưng miền nhiệt đới với giăm bông, thịt muối và dứa.</p>\r\n', '', 2, 'hawaiianNN.png', 1),
(21, 4, 'NN003', 'Gà Nướng 3 Vị Nhân Nhồi', 'ga nuong 3 vi nhan nhoi', 89000, '<p>Nhân nhồi bên trong được kết hợp giữa ba cách chế biến gà nướng, gà bơ tỏi và gà ướp sốt nấm mang đến cho bạn hương vị mới lạ.</p>\r\n', '', 2, 'GaNuong3ViNN.png', 1),
(22, 1, 'TT007', 'Pizza Bò', 'pizzabo', 159000, '<p>vị b&ograve; ngon</p>\r\n', '', 2, 'xdmhpl.jpg', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `idUser` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cmnd` int(12) NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(1) NOT NULL,
  `note` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`idUser`, `username`, `password`, `name`, `cmnd`, `address`, `email`, `phone`, `level`, `note`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'admin', 123456789, '123 admin', 'admin@gmail.com', '0120147841', 2, 0),
(2, 'anhtuan', '15f8182445bac21b05802649a8a698e7', 'Trần Anh Tuấn', 1234567890, '123 thiên đàng, quận 12', 'anhtuan@gmail.com', '0123456789', 1, 0),
(3, 'duyvang', '8d0fa2cd4ed157b401daa62590c4c27a', 'Nguyễn Duy Vàng', 1234567891, '287 thành công, quận tân phú, tp Hồ Chí Minh', 'duyvang@gmail.com', '0123456744', 1, 0),
(8, 'thientam', 'b58c6ee1f5147f41204f3225a3039e99', 'Phan Thiên Tâm', 123456789, 'Số 10 đường 13, Thiên Đàng, TP. Cửu U', 'thientam@gmail.com', '01234567120', 0, 0),
(10, 'huatiensinh', 'ccef8c9a83e883430038c91805b316ed', 'Hứa Bán Thần', 123456789, 'tiểu miếu sông Vong Thủy', 'huatiensinh@gmail.com', '01234567877', 0, 1),
(13, 'vang01', 'e10adc3949ba59abbe56e057f20f883e', 'duy vang', 123456789, '132 3 tháng 2 quận 10 tp hcm', 'duyvang260498@gmail.com', '0911482088', 0, 0),
(14, 'xuantai', 'b4bec8de2e29ee17f082d03ff139c361', 'Nguyễn Xuân Tài', 1231648941, '287 thành công quận tân phú tp hcm', 'xuantai@gmail.com', '0120369850', 0, 0),
(15, 'minhkhai', '25f9e794323b453885f5181f1b624d0b', 'Nguyễn Thị Minh Khai', 1012410124, '123 bùi đình túy quận bình thạnh, tp hcm', 'vang260498@gmail.com', '0985102104', 0, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`idCTDH`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`idDH`);

--
-- Chỉ mục cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`idKM`);

--
-- Chỉ mục cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`idCL`);

--
-- Chỉ mục cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD PRIMARY KEY (`maNCC`);

--
-- Chỉ mục cho bảng `phanhoi`
--
ALTER TABLE `phanhoi`
  ADD PRIMARY KEY (`idPH`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`idSP`),
  ADD KEY `hinhanhSP` (`hinhanhSP`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `idCTDH` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `idDH` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `idKM` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `idCL` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `phanhoi`
--
ALTER TABLE `phanhoi`
  MODIFY `idPH` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `idSP` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
