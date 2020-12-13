-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th12 08, 2020 lúc 05:59 PM
-- Phiên bản máy phục vụ: 10.3.16-MariaDB
-- Phiên bản PHP: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `id15119958_foodi`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethd`
--

CREATE TABLE `chitiethd` (
  `mahd` varchar(100) NOT NULL,
  `mamonan` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `soluong` tinyint(3) UNSIGNED NOT NULL DEFAULT 0,
  `gia` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `chitiethd`
--

INSERT INTO `chitiethd` (`mahd`, `mamonan`, `soluong`, `gia`) VALUES
('abcd@yahoo.com_1607450100', 'lahs', 1, 150000),
('abcd@yahoo.com_1607450100', 'mxb', 1, 70000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `mahd` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL DEFAULT '',
  `tennguoinhan` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `diachinguoinhan` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ngaynhan` date NOT NULL DEFAULT '0000-00-00',
  `dienthoainguoinhan` varchar(10) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`mahd`, `email`, `tennguoinhan`, `diachinguoinhan`, `ngaynhan`, `dienthoainguoinhan`) VALUES
('abcd@yahoo.com_1607449942', 'abcd@yahoo.com', 'thien pham thien', 'h027', '2020-12-08', '0961682847'),
('abcd@yahoo.com_1607450100', 'abcd@yahoo.com', 'thien pham', 'ehomes', '2020-12-08', '123'),
('bemeocute1@gmail.com_1607364326', 'bemeocute1@gmail.com', 'Code Vip VL', 'Cho Xin Code Tham Khảo Nào', '2020-12-07', '0368777354');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `email` varchar(50) NOT NULL DEFAULT '',
  `matkhau` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tenkh` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dienthoai` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`email`, `matkhau`, `tenkh`, `diachi`, `dienthoai`) VALUES
('abcd@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', 'Thiên', 'Q1', '99999999'),
('bemeocute1@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'đâsdsa', 'HCM', '036877777'),
('huynhvovantien@gmail.com', 'a7555ea1123242d0a24b2ef2051fa7dc', 'Tienhuynh', '68 đường số 7', '0333615312'),
('thien@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Thiên Phạm', 'Quận 3', '090090999');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `maloai` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tenloai` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`maloai`, `tenloai`) VALUES
('bi', 'Bia'),
('hm', 'Món Hầm'),
('la', 'Lẩu'),
('nc', 'Nước Ngọt'),
('nu', 'Món Nướng'),
('xa', 'Món Xào');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `monan`
--

CREATE TABLE `monan` (
  `mamonan` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tenmon` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mota` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gia` int(10) NOT NULL,
  `hinh` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `manhahang` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `maloai` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `monan`
--

INSERT INTO `monan` (`mamonan`, `tenmon`, `mota`, `gia`, `hinh`, `manhahang`, `maloai`) VALUES
('bak', 'Bia Heineken', ' Heineken là một loại bia lager nhạt với 5% cồn theo thể tích được công ty sản xuất bia Hà Lan Heineken N.V. sản xuất.Hương vị đậm đà thơm ngon hấp dẫn				', 22000, 'heineken.jpg', 'bb', 'bi'),
('batg', 'Bia Tiger', 'Bia Tiger hương vị êm đầm sảng khoái, sản phẩm được ưa chuộng nhất tại Việt Nam, mua online giao hàng tận nhà.				', 19000, 'biatigerbacchai.jpg', 'bb', 'bi'),
('gng', 'Gà Nướng Muối Ớt', 'Thịt gà làm sạch, ướp gia vị với muối ớt tự chế gia truyền, hương vị thơm ngon tuyệt vời, siêu cay			', 150000, 'ganuongmuoiot.png', 'ng', 'nu'),
('laga', 'Lẩu Gà Ớt Hiểm', 'Lẩu gà ớt hiểm là món lẩu rất được ưa chuộng và là lựa chọn ưu tiên của nhiều người khi đi ăn ở hàng quán. Món lẩu với ớt hiểm phủ đầy khắp nồi, mùi hương thuốc bắc thoảng nhẹ, tô điểm giữa táo đỏ và kỷ tử, hương vị cay the ngọt thanh rất bắt vị.				', 150000, 'laugaothiem.jpg', 'luu', 'la'),
('lahs', 'Lẩu Hải Sản', ' Một trong các món lẩu ngon mang một hương vị đặc trưng không hề lẫn với các món lẩu khác. Sự kết hợp hài hòa giữa hương vị hải sản và rau củ quả đã làm lên hương vị đặc trưng của lẩu				', 150000, 'lauhaisan.jpg', 'bb', 'la'),
('mxb', 'Mỳ Xào Bò', 'Kết hợp thịt bò với các loại rau củ sẽ làm cho món ăn càng đầy đủ dưỡng chất cần thiết cho cơ thể hơn. Đồng thời xào kèm mì tôm sẽ tạo được hương vị kích thích vị giác, giúp bạn có được bữa sáng ngon miệng và dinh dưỡng.				', 70000, 'mon-mi-xao-bo.jpg', 'bb', 'xa'),
('ncn', 'Pepsi', 'Pepsi là một đồ uống giải khát có gas, lần đầu tiên được sản xuất bởi Bradham.Với hương cola hấp dẫn, mang lại cảm giác sảng khoái, giải nhiệt tức thì trong những ngày nóng bức. Nước giải khát có gas Pepsi với lượng gas lớn sẽ giúp bạn xua tan mọi cảm giác mệt mỏi, căng thẳng, đặc biệt thích hợp sử dụng khi hoạt động nhiều ngoài trời.				', 12000, 'nuoc-ngot-pepsi-thai-lon-330ml.jpg', 'bb', 'nc'),
('ngb', 'Bò Cuộn Nấm Kim Châm', 'Thịt bò sa tế cuộn nấm kim châm là món ăn thường xuất hiện khi bạn ăn lẩu nướng. Món này ngon, nướng nhanh chín, vị đậm đà dễ ăn.				', 80000, 'bo_sate_cuon_nam_kim_cham.jpg', 'ng', 'nu'),
('ngbc', 'Thịt Heo Ba Chỉ Xiên Que', 'Món thịt ba chỉ xiên nướng sẽ làm cho bữa cơm chiều của gia đình bạn trở nên ngon miệng hơn và ấm cúng hơn. Món ăn không chỉ có hương thơm mà còn đậm đà gia vị, thịt dai mềm, khi ăn với kèm với cơm, bún đều rất ngon. Dưới đây là công thức chế biến món ăn ngon tuyệt này.				', 90000, 'bachixienque.jpg', 'ng', 'nu'),
('ngbt', 'Bạch Tuộc Nướng', 'Không cần tốn tiền ra ngoài hàng ăn, bạn có thể mua bạch tuộc tại nhà nhà hàng chúng tôi, vừa đảm bảo vừa rẻ.				', 90000, 'mon-bach-tuoc-nuong-muoi-ot.jpg', 'bb', 'nu'),
('ngcd', 'Chẳn Dừng Nướng', 'Chẳng dừng là phần thịt nằm cuối cùng của tấm sườn heo. Thường phần thịt này rất ít, mỗi con heo chỉ có khoảng 3 lạng.Chẳng dừng heo khi nướng sẽ giòn giòn, dai dai và đặc biệt là rất ngọt thịt mà những phần thịt khác của heo không có được. Những người sành ăn sẽ chỉ chọn chẳng dừng nếu ăn thịt heo.				', 90000, 'changdung.jpg', 'ng', 'nu'),
('ngd', 'Gà Đất Sét', 'Gà đập đất hay gà nướng đất sét là món thường xuất hiện trong những bữa ăn tiếp đãi khách phương xa của người miền Tây. Hương vị dân dã này đã gắn liền với ẩm thực làng quê từ những ngày khai hoang, mở đất. 				', 180000, 'gadatset.jpg', 'ng', 'nu'),
('ngm', 'Mực Nướng Muối Ớt', 'Mực nướng muối ớt dai giòn sần sật, cay cay đằm lưỡi nhưng lại rất ngọt vị của bạch tuộc nơi cổ họng chắc chắn sẽ là một món ăn ngon khiến bạn mê mẩn. 				', 80000, 'muc-nuong-muoi-ot.jpg', 'ng', 'nu');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhahang`
--

CREATE TABLE `nhahang` (
  `manhahang` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tennhahang` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `nhahang`
--

INSERT INTO `nhahang` (`manhahang`, `tennhahang`) VALUES
('bb', 'BBQ Panda'),
('luu', 'Lẩu Gà Ớt Hiểm'),
('ng', 'Nướng Ngói');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quantri`
--

CREATE TABLE `quantri` (
  `username` varchar(30) NOT NULL,
  `matkhau` varchar(32) DEFAULT NULL,
  `hoten` varchar(100) CHARACTER SET utf8 NOT NULL,
  `quyen` int(1) NOT NULL COMMENT '1:  supper admin, 2:nhan viên, 3:...'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `quantri`
--

INSERT INTO `quantri` (`username`, `matkhau`, `hoten`, `quyen`) VALUES
('abcd', '81dc9bdb52d04dc20036dbd8313ed055', 'Phạm Hồng Thiên', 2),
('admin', '6a30c7e55b5792f2ce48d88d0536ebe5', 'Thiên Phạm', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitiethd`
--
ALTER TABLE `chitiethd`
  ADD PRIMARY KEY (`mahd`,`mamonan`),
  ADD KEY `mamonan` (`mamonan`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`mahd`),
  ADD KEY `email` (`email`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`maloai`);

--
-- Chỉ mục cho bảng `monan`
--
ALTER TABLE `monan`
  ADD PRIMARY KEY (`mamonan`),
  ADD KEY `manhahang` (`manhahang`,`maloai`),
  ADD KEY `maloai` (`maloai`);

--
-- Chỉ mục cho bảng `nhahang`
--
ALTER TABLE `nhahang`
  ADD PRIMARY KEY (`manhahang`);

--
-- Chỉ mục cho bảng `quantri`
--
ALTER TABLE `quantri`
  ADD PRIMARY KEY (`username`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitiethd`
--
ALTER TABLE `chitiethd`
  ADD CONSTRAINT `chitiethd_ibfk_1` FOREIGN KEY (`mahd`) REFERENCES `hoadon` (`mahd`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chitiethd_ibfk_2` FOREIGN KEY (`mamonan`) REFERENCES `monan` (`mamonan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`email`) REFERENCES `khachhang` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `monan`
--
ALTER TABLE `monan`
  ADD CONSTRAINT `monan_ibfk_1` FOREIGN KEY (`manhahang`) REFERENCES `nhahang` (`manhahang`) ON UPDATE CASCADE,
  ADD CONSTRAINT `monan_ibfk_2` FOREIGN KEY (`maloai`) REFERENCES `loai` (`maloai`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
