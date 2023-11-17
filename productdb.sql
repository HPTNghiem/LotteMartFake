-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 17, 2023 lúc 01:32 AM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `productdb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `producttb`
--

CREATE TABLE `producttb` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) DEFAULT NULL,
  `product_price` int(11) DEFAULT NULL,
  `product_image` varchar(255) DEFAULT NULL,
  `ChiTietSP` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Đang đổ dữ liệu cho bảng `producttb`
--

INSERT INTO `producttb` (`id`, `product_name`, `product_price`, `product_image`, `ChiTietSP`) VALUES
(6, 'Cải ngọt 300g', 16900, 'Image/sanpham2.png', 'Cải ngọt là giống rau ăn lá dễ trồng và cho lượng thu hoạch lớn nên được sử dụng rộng rãi trong những bữa ăn hàng ngày. Đúng như tên gọi của sản phẩm, các món ăn được chế biến từ cải ngọt thường có vị ngọt tự nhiên, màu xanh mướt bắt mắt, mang đến nhiều dinh dưỡng thiết yếu cho cơ thể. Cải ngọt được trồng phát triển tự nhiên, tươi xanh. Theo Đông y, cải ngọt tính ôn, có công dụng thông lợi trường vị, làm đỡ tức ngực, tiêu thực hạ khí… có thể dùng để chữa các chứng ho, táo bón, ăn nhiều cải trắng giúp cho việc phòng ngừa bệnh trĩ và ung thư ruột kết.'),
(7, 'Ớt chuông Palermo 300g (ea)', 59900, 'Image/sanpham3.png', 'Ớt chuông Palermo hay còn gọi tên khác là ớt sừng ngọt, được trồng phổ biến tại Đà Lạt đang rất được ưa chuộng do có nhiều dưỡng chất dồi dào như: Vitamin, chất xơ, axit folic, magie, kaki,… Thường xuyên sử dụng loại ớt này hằng ngày mang đến nhiều lợi ích tích cực cho sức khỏe, giữ dáng, đẹp da,… Ớt chuông Palermo không có vị hăng giống như các loại ớt khác nên khá dễ ăn và phù hợp để chế biến thành nhiều món khác nhau. Đặc biệt hơn, loại ớt này không chỉ được người lớn ưa chuộng mà còn có thể sử dụng để chế biến thành các món ăn ưa thích cho bé. Bạn có thể chế biến ớt Sweet Palermo thành nước ép, các món salad, món trộn, món nướng,…'),
(8, 'Rau muống hữu cơ 300g (ea)', 17900, 'Image/sanpham4.png', 'Rau muống là loại thực phẩm quen thuộc với mọi gia đình Việt. Đặc biệt, món rau muống xào tỏi xanh giòn có mùi vị đặc biệt hấp dẫn. Không chỉ ngon, rau muống còn có nhiều lợi ích cho sức khỏe. Rau muống chứa một lượng vitamin C làm tăng cường hệ miễn dịch, ngăn chặn bệnh cảm và cúm. Các nhà nghiên cứu nói hàm lượng vitamin C trong rau còn nhiều hơn trái cây.  Rau chứa hàm lượng chất xơ cao hỗ trợ tiêu hóa tốt. Nước rau muống luộc có thể làm giảm tình trạng táo bón. Rau chứa một lượng chất sắt dồi dào rất tốt để tăng huyết sắc tố và ngăn ngừa thiếu máu. Ăn rau muống thường xuyên sẽ giúp cơ thể có khả năng kháng cự lại bệnh tiểu đường do những căng thẳng từ việc oxy hóa gây ra.  Được trồng theo quy trình đạt tiêu chuẩn tại các nông trại lớn và được chăm sóc tỉ mỉ để thu được những sản phẩm chất lượng nhất. Sản phẩm không chứa các hóa chất, chất kích thích tăng trưởng gây hại, đảm bảo an toàn cho sức khỏe người tiêu dùng.'),
(9, 'Hành tây 500g', 21900, 'Image/sanpham5.png', 'Hành tây là một loại thực phẩm quen thuộc có chứa nhiều chất dinh dưỡng khác nhau cần thiết cho cơ thể con người. Hành tây không chỉ được xem là một loại gia vị giàu vitamin, a-xít folic, kalium và selenium…những chất có giá trị dinh dưỡng lớn mà còn là liều thuốc tự nhiên tuyệt vời giúp chúng ta chữa trị được nhiều bệnh khác nhau. Sản phẩm được trồng bằng công nghệ hiện đại, đảm bảo tươi sạch, đảm bảo vệ sinh an toàn thực phẩm.'),
(10, 'Đậu bắp 300g (ea)', 16500, 'Image/sanpham6.jpg', 'Đậu bắp là một loại thực phẩm giàu dinh dưỡng, đậu bắp còn tốt cho tiêu hóa, tốt cho thận, chống ung thư, tăng cường miễn dịch,…  Sản phẩm được trồng bằng công nghệ hiện đại, đảm bảo tươi sạch, đảm bảo vệ sinh an toàn thực phẩm.  Công dụng: Hạ đường huyết, ngừa ung thư, bảo vệ dạ dày, tốt cho da, tốt cho tim mạch, bổ sung canxi, tốt cho phụ nữ mang thai...'),
(11, 'Dưa leo Baby Choice L 500g (ea)', 19900, 'Image/sanpham7.jpg', 'Dưa Leo Baby (dưa chuột) là món ăn bổ dưỡng nhất là trong ngày nóng nực, đem lại cho bạn cảm giác mát mẻ. Dưa Leo Baby có trái ngắn, hình trụ, màu xanh đậm, mịn, dài, trung bình từ 8 – 10cm, trái chắc nặng. Dưa leo baby chứa nhiều nước, chất xơ, vitamin và nhiều chất khác có lợi cho sức khỏe. Dưa leo rất mát, giòn, ngon ngọt, thơm hấp dẫn. Dưa leo chứa nhiều nước, vitamin và khoáng chất, có tác dụng giải khát, thanh nhiệt, thải độc, lợi tiểu và giảm cân.  Giá trị dinh dưỡng trong 100g: Đạm 0,6g, đường 1,2g, chất béo 0,1g, chất xơ 0,7g, nước 95g, năng lượng 10kcal, các vitamin và khoáng chất, kali (150mg/100g), Phốt pho (23mg/100g), canxi (19mg/100g), natri (13mg/100g), sắt (1mg/100g). Vitamin B, C, tiền vitamin A (có trong vỏ dưa), vitamin E (có trong vỏ dưa).  Sản phẩm đạt tiêu chuẩn VietGAP, không chứa các hóa chất, chất kích thích tăng trưởng gây hại, đảm bảo an toàn cho sức khỏe người tiêu dùng. Do đó, bạn hoàn toàn có thể an tâm khi lựa chọn sản phẩm này trong mỗi bữa ăn của gia đình mình, giúp bữa ăn trở nên ngon miệng hơn.'),
(12, 'Xà lách Batavia xanh thủy canh Choice L (cây) (ea)', 14900, 'Image/sanpham8.jpg', 'Rau xà lách Batavia xanh được biết đến là loại rau có vị ngọt đắng, tính mát, tác dụng giải nhiệt, lọc máu, kích thích tiêu hóa, giảm đau, gây ngủ, chống ho… Trong gam rau xà lách có chứa carbohydrate, chất xơ, nước, vitamin A, folate. Ngoài ra đây còn là loại rau giàu chất sắt, canxi, kẽm, đồng, kali, carotene, vitamin C…  Loại thực phẩm này có rất nhiều công dụng như: Giải nhiệt, giảm đau đầu, tốt cho bệnh nhân tiểu đường, tránh tình trạng táo bón, hỗ trợ ngăn ngừa ung thư, tốt cho phụ nữ gian mang thai và cho con bú, giảm cân làm đẹp da, tăng cường sinh lý.. Rau được trồng theo quy trình VietGap.'),
(13, 'Cải thảo Đà Lạt 600g', 11340, 'Image/sanpham9.jpg', 'Cải thảo (Chinese Cabbage) còn có tên gọi khác là bắp cải tây, cải cuốn – thuộc họ cải. Cải thảo được nhiều người yêu thích bởi vị ngọt mát, được dùng để chế biến thành nhiều món ăn ngon. Cải thảo có vị ngọt, tính mát, có tác dụng hạ khí, thanh nhiệt, chứa nhiều vitamin A, B, C, E. Hàm lượng nguyên tố vi lượng kẽm cao hơn cả thịt, cá. Cải thảo nấu chín chứa nhiều vitamin A, C, K, B2, B6, calcium, sắt, mangan, folat, cũng như nhiều thành phần hoạt chất có ảnh hưởng tốt đối với sức khỏe. Sản phẩm được trồng bằng công nghệ hiện đại, đảm bảo tươi sạch, đảm bảo vệ sinh an toàn thực phẩm.'),
(14, 'Bí đỏ tròn Đà Lạt 1200g', 20280, 'Image/sanpham10.jpg', 'Bí Đỏ Tròn Đà Lạt được xem là thực phẩm vàng, bởi trong thành phần có chứa nhiều vitamin và khoáng chất cần thiết cho sức khỏe con người. Không chỉ có là một thực phẩm giàu dinh dưỡng, bí đỏ còn có tác dụng điều trị một số bệnh như tránh cảm, củng cố hệ miễn nhiễm, ngăn ngừa sự xuất hiện những nếp nhăn sớm, bảo vệ da khỏi lão hóa và cải thiện chức năng hệ tim mạch…  Sản phẩm được trồng bằng công nghệ hiện đại, đảm bảo tươi sạch, đảm bảo vệ sinh an toàn thực phẩm.  Hướng dẫn bảo quản: Bảo quản nhiệt độ mát. Lưu ý: Không sử dụng sản phẩm khi có hiện tượng hư hỏng, mốc.'),
(15, 'Bí ngòi xanh 700g', 28900, 'Image/sanpham11.jpg', 'Bí ngòi xanh có thể dùng để chế biến thành nhiều món ăn ngon cho gia đình. Đặc biệt, các thành phần dinh dưỡng có chứa trong loại bí này cũng đem đến rất nhiều tác dụng tích cực đối với sức khỏe con người. Bí ngòi xanh tươi ngon, trái dài, có màu xanh chấm đốm trắng. Bí ngòi xanh giòn, ngọt. Bí được đảm bảo tươi, không bị dập hư. Sản phẩm không chứa các hóa chất, chất kích thích tăng trưởng gây hại, đảm bảo an toàn cho sức khỏe người tiêu dùng.'),
(16, 'Đậu cove 350g', 21900, 'Image/sanpham12.jpg', 'Đậu cove thuộc họ đậu, có thân nhỏ tròn và dài như chiếc đũa, đậu có màu xanh nhạt khi còn non và xanh lục khi chín. Đậu cove non có vị ngọt, giòn và có nhiều lợi ích sức khỏe. Đậu cove non không chỉ chứa nhiều nguyên tố vi lượng như protein, canxi, sắt, mà còn có nhiều kali, magie, ít natri. Đậu cove rất thích hợp với những người bị bệnh tim, thận, cao huyết áp.'),
(17, 'Cải bẹ xanh 300g', 16900, 'Image/sanpham13.jpg', 'Cải xanh thủy canh còn được gọi là cải bẹ xanh là một loại rau rất phổ biến trong các bữa cơm gia đình. Rau cải xanh là một loại rau thuộc họ cải, còn có một số tên gọi khác như cải bẹ xanh, cải canh, cải tây. Khi ăn lá có vị cay, đắng nhẹ nhưng chính vị đắng đặc trưng của rau cải xanh lại làm chúng được ưa chuộng. Không chỉ vậy, rau cải xanh còn là một loại rau có rất nhiều chất dinh dưỡng tốt cho sức khỏe. Cải bẹ xanh được nuôi trồng theo những tiêu chuẩn nghiêm ngặt, bảo đảm các tiêu chuẩn xanh - sach, chất lượng và an toàn với người dùng.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `Ten` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `MatKhau` varchar(255) NOT NULL,
  `role` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `Ten`, `Email`, `MatKhau`, `role`) VALUES
(1, 'Nghiem', 'admin@gmail.com', '$2y$10$8gL5kQuGx7DpuAd/z18Jk.Stn53iza7Gz4CvfjiZ9jO034LBkYVJ6', 'admin');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `producttb`
--
ALTER TABLE `producttb`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `producttb`
--
ALTER TABLE `producttb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
