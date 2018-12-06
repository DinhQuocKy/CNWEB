-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 06, 2018 lúc 01:41 AM
-- Phiên bản máy phục vụ: 10.1.35-MariaDB
-- Phiên bản PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlynhahang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `ID` varchar(255) COLLATE utf8_bin NOT NULL,
  `Password` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`ID`, `Password`) VALUES
('kydq', 'kydq'),
('thanhhv', 'thanhhv');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Date` date NOT NULL,
  `EmployeeID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`ID`, `Date`, `EmployeeID`) VALUES
(13, '2018-04-05', 1005),
(14, '2018-05-05', 1006),
(15, '2018-03-04', 1007),
(16, '2018-04-03', 1008),
(17, '2018-06-12', 1001),
(18, '2018-06-05', 1009),
(19, '2018-07-04', 1010),
(20, '2018-08-03', 1008),
(22, '2018-10-03', 1008),
(23, '2018-11-05', 1009),
(24, '2018-12-03', 1008),
(26, '2018-10-05', 1009),
(27, '2018-10-08', 1009),
(28, '2018-10-10', 1002),
(29, '2018-04-10', 1002),
(30, '2018-12-10', 1002),
(31, '2018-12-10', 1002),
(32, '2018-12-10', 1002);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `billdetail`
--

CREATE TABLE `billdetail` (
  `ID` int(10) UNSIGNED NOT NULL,
  `IDProduct` int(11) DEFAULT NULL,
  `Quantity` mediumint(9) NOT NULL,
  `TotalPrice` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `drink`
--

CREATE TABLE `drink` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Name` varchar(255) COLLATE utf8_bin NOT NULL,
  `Price` double NOT NULL,
  `Discription` text COLLATE utf8_bin NOT NULL,
  `Quantity` int(11) NOT NULL,
  `images` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `drink`
--

INSERT INTO `drink` (`ID`, `Name`, `Price`, `Discription`, `Quantity`, `images`) VALUES
(2001, 'Mirinda', 12000, '200', 2000, 'mirinda.jpg'),
(2003, 'Coca', 11000, '200', 1500, 'coca.jpg'),
(2004, 'Pepsi', 10000, '120', 2560, 'pepsi.jpg'),
(2005, 'Fansta', 17000, '200', 1000, 'fanta.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `employee`
--

CREATE TABLE `employee` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Name` varchar(255) COLLATE utf8_bin NOT NULL,
  `Sex` tinyint(4) NOT NULL,
  `Position` varchar(255) COLLATE utf8_bin NOT NULL,
  `Address` text COLLATE utf8_bin NOT NULL,
  `Phone` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `employee`
--

INSERT INTO `employee` (`ID`, `Name`, `Sex`, `Position`, `Address`, `Phone`) VALUES
(1002, 'Phương Nguyễn', 1, 'Security', '219 Lê lợi hcm', '3652054498'),
(1007, 'Kỳ Đệ Quy', 1, 'Admin', '123 Dzô HCM', '213852'),
(10001, 'Thanh', 1, 'Admin', '100', '1632072362'),
(10002, 'Son Le', 0, 'Bồi bàn', '230 An Duong Vuong', '163252564'),
(10005, 'Phong pro', 1, 'Admin', 'Nam kì khởi nghĩa hcm', '03312312');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `food`
--

CREATE TABLE `food` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Name` varchar(255) COLLATE utf8_bin NOT NULL,
  `Price` double NOT NULL,
  `Discription` text COLLATE utf8_bin NOT NULL,
  `Quantity` int(11) NOT NULL,
  `images` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `food`
--

INSERT INTO `food` (`ID`, `Name`, `Price`, `Discription`, `Quantity`, `images`) VALUES
(12, 'bít tết', 20000, 'ngon ', 25, 'bittet.jpg'),
(1001, 'Sandwitch', 10000, '200', 1000, 'sandwich.jpg'),
(1002, 'Chicken', 26000, '50', 500, 'chicken.jpeg'),
(1004, 'bánh mì', 10000, '100', 1200, 'banhmi.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `billdetail`
--
ALTER TABLE `billdetail`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `drink`
--
ALTER TABLE `drink`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `billdetail`
--
ALTER TABLE `billdetail`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `drink`
--
ALTER TABLE `drink`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2006;

--
-- AUTO_INCREMENT cho bảng `employee`
--
ALTER TABLE `employee`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10006;

--
-- AUTO_INCREMENT cho bảng `food`
--
ALTER TABLE `food`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1005;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
