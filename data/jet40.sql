-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 19, 2018 at 11:43 PM
-- Server version: 10.0.32-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jet40`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cid` int(5) UNSIGNED ZEROFILL NOT NULL,
  `cname` varchar(50) NOT NULL,
  `cdetail` text NOT NULL,
  `cprice` decimal(10,2) NOT NULL,
  `cimg` varchar(100) NOT NULL,
  `cstock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `mem_id` varchar(20) NOT NULL,
  `mem_name` varchar(50) NOT NULL,
  `mem_lname` varchar(50) NOT NULL,
  `mem_pass` varchar(120) NOT NULL,
  `mem_type` char(1) NOT NULL DEFAULT '1',
  `mem_add` text NOT NULL,
  `mem_email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`mem_id`, `mem_name`, `mem_lname`, `mem_pass`, `mem_type`, `mem_add`, `mem_email`) VALUES
('admin', 'admin', 'admin', 'admin', '0', '', ''),
('banana', 'kkkkk', 'lllll', '1234', '1', 'rrrr', 'rrr'),
('jezzyjames', 'Tasit', 'Sappooree', 'jetjayong', '0', 'Bangna', 'jetzjamez@hotmaiil.com');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(5) UNSIGNED ZEROFILL NOT NULL,
  `pname` varchar(100) NOT NULL,
  `pdetail` text NOT NULL,
  `pprice` decimal(10,2) NOT NULL,
  `pimg` varchar(100) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `pname`, `pdetail`, `pprice`, `pimg`, `stock`) VALUES
(00001, 'Apple iPhone 8', 'ข้อมูลตัวเครื่อง\r\nสมาร์ทโฟน (โทรศัพท์มือถือพร้อมระบบปฏิบัติการ)\r\nจอแสดงผล Retina Display 24-bit (16 ล้านสี) \r\n- ระบบสัมผัส Multi-Touch\r\n- กว้าง 4.7 นิ้ว (แนวทะแยง)\r\n- ความละเอียด 750 x 1334 พิกเซล (326 ppi) \r\n- Capacitive \r\n- ระบบป้องกัน - ฝุ่นละออง (Resistance to dust)\r\nระบบเซ็นเซอร์ (Sensor) \r\n- เซ็นเซอร์ยืนยันตัวบุคคลด้วยลายนิ้วมือ (Touch ID)	\r\n- ระบบหมุนภาพอัตโนมัติ (Accelerometer) \r\n- ตรวจจับแสงปรับความสว่างอัตโนมัติ (Ambient light) \r\n- ระบบเปิด/ปิดหน้าจออัตโนมัติขณะสนทนา (Proximity) \r\n- ระบบเซนเซอร์หมุนภาพ 3 แกน (Three-axis gyroscope) \r\n- ระบบวัดความกดอากาศ (Barometer)\r\nคุณสมบัติการกันน้ำ (Waterproof)\r\n- กันน้ำได้ชั่วคราว\r\nมีสีให้เลือก (Colors) : Gold, Space Gray, Silver\r\nระบบปฏิบัติการ (OS, CPU)\r\nระบบปฏิบัติการ: iOS 11\r\nหน่วยประมวลผล : A11 Bionic Hexa Core\r\n- ความเร็ว : 2.74 GHz\r\nหน่วยความจำ 64 GB (ตัวเครื่อง)\r\n- RAM 2GB\r\nแบตเตอรี่มาตรฐาน Li-ion 1,821 mAh (Standard Battery)', '28000.00', 'Apple-iPhone-8.jpg', 3),
(00002, 'Apple iPhone 8 Plus', 'ข้อมูลตัวเครื่อง\r\nสมาร์ทโฟน (โทรศัพท์มือถือพร้อมระบบปฏิบัติการ)\r\nจอแสดงผล Retina Display 24-bit (16 ล้านสี) \r\n- ระบบสัมผัส Multi-Touch\r\n- กว้าง 5.5 นิ้ว (แนวทะแยง)\r\n- ความละเอียด 1080 x 1920 พิกเซล (401 ppi) \r\n- Capacitive\r\nระบบเซ็นเซอร์ (Sensor) \r\n- เซ็นเซอร์ยืนยันตัวบุคคลด้วยลายนิ้วมือ (Touch ID)	\r\n- ระบบหมุนภาพอัตโนมัติ (Accelerometer) \r\n- ตรวจจับแสงปรับความสว่างอัตโนมัติ (Ambient light) \r\n- ระบบเปิด/ปิดหน้าจออัตโนมัติขณะสนทนา (Proximity) \r\n- ระบบเซนเซอร์หมุนภาพ 3 แกน (Three-axis gyroscope) \r\n- ระบบวัดความกดอากาศ (Barometer)\r\nมีสีให้เลือก (Colors) : Gold, Space Gray, Silver\r\nระบบปฏิบัติการ (OS, CPU)\r\nระบบปฏิบัติการ: iOS 11\r\nหน่วยประมวลผล : Hexa Core\r\nหน่วยความจำ 64 GB (ตัวเครื่อง)\r\n- RAM 3GB\r\nแบตเตอรี่มาตรฐาน Li-ion 2,691 mAh (Standard Battery)', '32500.00', 'Apple-iPhone-8plus.jpg', 1),
(00003, 'Apple iPhone X', 'ข้อมูลตัวเครื่อง\r\nสมาร์ทโฟน (โทรศัพท์มือถือพร้อมระบบปฏิบัติการ)\r\nจอแสดงผล Super Retina HD 24-bit (16 ล้านสี) \r\n- ระบบสัมผัส Multi-Touch\r\n- กว้าง 5.8 นิ้ว (แนวทะแยง)\r\n- ความละเอียด 1125 x 2436 พิกเซล (458 ppi) \r\n- Capacitive \r\n- Corning Gorilla Glass 5 \r\n- ระบบป้องกัน - ฝุ่นละออง (Resistance to dust) \r\n- ป้องกันรอยนิ้วมือ (Anti-fingerprint display coating)\r\nระบบเซ็นเซอร์ (Sensor) \r\n- การยืนยันตัวตนด้วยใบหน้า (Face ID)	\r\n- ระบบหมุนภาพอัตโนมัติ (Accelerometer) \r\n- ตรวจจับแสงปรับความสว่างอัตโนมัติ (Ambient light) \r\n- ระบบเปิด/ปิดหน้าจออัตโนมัติขณะสนทนา (Proximity) \r\n- ระบบเซนเซอร์หมุนภาพ 3 แกน (Three-axis gyroscope) \r\n- ระบบวัดความกดอากาศ (Barometer)\r\nคุณสมบัติการกันน้ำ (Waterproof)\r\n- กันน้ำได้ชั่วคราว\r\n- กันน้ำที่ความลึกไม่เกิน 1 เมตร\r\nมีสีให้เลือก (Colors) : Space Gray, Silver\r\n	ระบบปฏิบัติการ (OS, CPU)\r\nระบบปฏิบัติการ: iOS 11\r\nหน่วยประมวลผล : Apple A11 Bionic Hexa Core\r\nหน่วยความจำ 64 GB (ตัวเครื่อง)\r\n- RAM 3GB\r\nแบตเตอรี่มาตรฐาน Li-ion 2,900 mAh (Standard Battery)', '40500.00', 'Apple-iPhone-X.jpg', 5),
(00004, 'Huawei P20', 'ข้อมูลตัวเครื่อง\r\nสมาร์ทโฟน (โทรศัพท์มือถือพร้อมระบบปฏิบัติการ)\r\nจอแสดงผล LCD 24-bit (16 ล้านสี) \r\n- ระบบสัมผัส Multi-Touch\r\n- กว้าง 5.8 นิ้ว (แนวทะแยง)\r\n- ความละเอียด 1080 x 2240 พิกเซล (428 ppi) \r\n- Capacitive\r\nระบบเซ็นเซอร์ (Sensor) \r\n- ระบบตรวจสอบลายนิ้วมือ (Finger Print)	\r\n- ระบบจดจำใบหน้า (Face Detection)	\r\n- ตรวจจับแสงปรับความสว่างอัตโนมัติ (Ambient light) \r\n- ตรวจจับความเคลื่อนไหวของตัวเครื่อง (Accelerometer) \r\n- ระบบเปิด/ปิดหน้าจออัตโนมัติขณะสนทนา (Proximity) \r\n- ระบบเซนเซอร์หมุนภาพ (Gyroscope)\r\nระบบปฏิบัติการ (OS, CPU)\r\nระบบปฏิบัติการ: Android 8.1 (Oreo)\r\nหน่วยประมวลผล : Hisilicon Kirin 970 Octa Core\r\n- ความเร็ว : 2.36 GHz\r\nหน่วยความจำ 128 GB (ตัวเครื่อง)\r\n- RAM 4GB\r\nแบตเตอรี่มาตรฐาน 3,400 mAh (Standard Battery)', '19990.00', 'Huawei-P20.jpg', 1),
(00005, 'Huawei Y7 Pro', 'ข้อมูลตัวเครื่อง\r\nสมาร์ทโฟน (โทรศัพท์มือถือพร้อมระบบปฏิบัติการ)\r\nจอแสดงผล IPS-LCD 24-bit (16 ล้านสี) \r\n- ระบบสัมผัส Multi-Touch\r\n- กว้าง 5.99 นิ้ว (แนวทะแยง)\r\n- ความละเอียด 1440 x 720 พิกเซล \r\n- Capacitive\r\nระบบเซ็นเซอร์ (Sensor) \r\n- ระบบจดจำใบหน้า (Face Detection)	\r\n- ระบบหมุนภาพอัตโนมัติ (Accelerometer) \r\n- ตรวจจับแสงปรับความสว่างอัตโนมัติ (Ambient light) \r\n- ระบบเปิด/ปิดหน้าจออัตโนมัติขณะสนทนา (Proximity)\r\nมีสีให้เลือก (Colors) : Black, Blue, Gold\r\n	ระบบปฏิบัติการ (OS, CPU)\r\nระบบปฏิบัติการ: Android 8.0 (Oreo)\r\nหน่วยประมวลผล : Qualcomm MSM8937 Snapdragon 430 Octa Core\r\n- ความเร็ว : 1.4 GHz\r\nหน่วยความจำ \r\n- ROM 32GB \r\n- RAM 3GB\r\nการ์ดหน่วยความจำ\r\n- microSD \r\nแบตเตอรี่มาตรฐาน 3,000 mAh (Standard Battery)\r\n', '4990.00', 'Huawei-Y7-Pro-2018.jpg', 1),
(00006, 'Nokia 7 Plus', 'ข้อมูลตัวเครื่อง\r\nสมาร์ทโฟน (โทรศัพท์มือถือพร้อมระบบปฏิบัติการ)\r\nจอแสดงผล IPS-LCD (ไม่ระบุจำนวนสี) \r\n- ระบบสัมผัส Multi-Touch\r\n- กว้าง 6 นิ้ว (แนวทะแยง)\r\n- ความละเอียด 1080 x 2160 พิกเซล \r\n- Corning Gorilla Glass 3\r\nระบบเซ็นเซอร์ (Sensor) \r\n- ระบบตรวจสอบลายนิ้วมือ (Finger Print)	\r\n- ระบบหมุนภาพอัตโนมัติ (Accelerometer) \r\n- ตรวจจับแสงปรับความสว่างอัตโนมัติ (Ambient light) \r\n- ระบบเปิด/ปิดหน้าจออัตโนมัติขณะสนทนา (Proximity) \r\n- ระบบเซนเซอร์หมุนภาพ (Gyroscope)\r\nระบบปฏิบัติการ (OS, CPU)\r\nระบบปฏิบัติการ: Android 8.0 Oreo\r\nหน่วยประมวลผล : Qualcomm Snapdragon 660 Octa Core\r\nหน่วยความจำ \r\n- ROM 64GB \r\n- RAM 4GB\r\nการ์ดหน่วยความจำ\r\n- microSD สูงสุด 256 GB\r\nแบตเตอรี่มาตรฐาน 3,800 mAh (Standard Battery)', '13900.00', 'Nokia-7-plus.jpg', 1),
(00007, 'OPPO F7', 'ข้อมูลตัวเครื่อง\r\nสมาร์ทโฟน (โทรศัพท์มือถือพร้อมระบบปฏิบัติการ)\r\nจอแสดงผล IPS TFT 24-bit (16 ล้านสี) \r\n- ระบบสัมผัส Multi-Touch\r\n- กว้าง 6.23 นิ้ว (แนวทะแยง)\r\n- ความละเอียด 1080 x 2280 พิกเซล\r\nระบบเซ็นเซอร์ (Sensor) \r\n- ระบบตรวจสอบลายนิ้วมือ (Finger Print)	\r\n- ระบบจดจำใบหน้า (Face Detection)	\r\n- ระบบหมุนภาพอัตโนมัติ (Accelerometer) \r\n- ตรวจจับแสงปรับความสว่างอัตโนมัติ (Ambient light) \r\n- ระบบเปิด/ปิดหน้าจออัตโนมัติขณะสนทนา (Proximity) \r\n- ระบบตรวจจับคลื่นแม่เหล็ก (Geomagnetic)\r\nมีสีให้เลือก (Colors) : Black, Red, Silver\r\nระบบปฏิบัติการ (OS, CPU)\r\nระบบปฏิบัติการ: Color OS 5.0 (based on Android 8.1 Oreo)\r\nหน่วยประมวลผล : Mediatek Helio P60 Octa Core\r\n- ความเร็ว : 2.0 GHz\r\nหน่วยความจำ 64 GB (ตัวเครื่อง)\r\n- RAM 4GB\r\nการ์ดหน่วยความจำ\r\n- microSD \r\nแบตเตอรี่มาตรฐาน 3,400 mAh (Standard Battery)', '10990.00', 'OPPO-F7.png', 4),
(00008, 'Vivo V9', 'ข้อมูลตัวเครื่อง\r\nสมาร์ทโฟน (โทรศัพท์มือถือพร้อมระบบปฏิบัติการ)\r\nจอแสดงผล IPS-LCD (ไม่ระบุจำนวนสี) \r\n- ระบบสัมผัส Multi-Touch\r\n- กว้าง 6.3 นิ้ว (แนวทะแยง)\r\n- ความละเอียด 1080 x 2280 พิกเซล \r\n- Capacitive \r\n- Corning Gorilla Glass\r\nระบบเซ็นเซอร์ (Sensor) \r\n- ระบบตรวจสอบลายนิ้วมือ (Finger Print)	\r\n- ระบบจดจำใบหน้า (Face Detection)	\r\n- ระบบหมุนภาพอัตโนมัติ (Accelerometer) \r\n- ตรวจจับแสงปรับความสว่างอัตโนมัติ (Ambient light) \r\n- ระบบเปิด/ปิดหน้าจออัตโนมัติขณะสนทนา (Proximity) \r\n- ระบบเซนเซอร์หมุนภาพ (Gyroscope) \r\n- ปรับมุมมองการแสดงผลอัตโนมัติ (Orientation)\r\nมีสีให้เลือก (Colors) : Black, Gold\r\nระบบปฏิบัติการ (OS, CPU)\r\nระบบปฏิบัติการ: Funtouch OS 4.0 ( Based on Android 8.1)\r\nหน่วยประมวลผล : Qualcomm Snapdragon 626 Octa Core\r\n- ความเร็ว : 2.2 GHz\r\nหน่วยความจำ \r\n- ROM 64GB \r\n- RAM 4GB\r\nการ์ดหน่วยความจำ\r\n- microSD สูงสุด 256 GB\r\nแบตเตอรี่มาตรฐาน 3,260 mAh (Standard Battery)', '10999.00', 'Vivo-v9.jpeg', 8),
(00009, 'ASUS ZenFone 4 Max Pro', 'ข้อมูลตัวเครื่อง\r\nสมาร์ทโฟน (โทรศัพท์มือถือพร้อมระบบปฏิบัติการ)\r\nจอแสดงผล IPS-LCD 24-bit (16 ล้านสี) \r\n- ระบบสัมผัส Multi-Touch\r\n- กว้าง 5.5 นิ้ว (แนวทะแยง)\r\n- ความละเอียด 720 x 1280 พิกเซล \r\n- Capacitive\r\nระบบเซ็นเซอร์ (Sensor) \r\n- ระบบตรวจสอบลายนิ้วมือ (Finger Print)	\r\n- ระบบหมุนภาพอัตโนมัติ (Accelerometer) \r\n- ตรวจจับแสงปรับความสว่างอัตโนมัติ (Ambient light) \r\n- ระบบเปิด/ปิดหน้าจออัตโนมัติขณะสนทนา (Proximity) \r\n- ระบบเซนเซอร์หมุนภาพ (Gyroscope)\r\nมีสีให้เลือก (Colors) : Black, Pink, Gold', '7990.00', 'ASUS-ZenFone-4 Max-Pro.png', 6),
(00010, 'Samsung Galaxy A8 Plus', 'ข้อมูลตัวเครื่อง\r\nสมาร์ทโฟน (โทรศัพท์มือถือพร้อมระบบปฏิบัติการ)\r\nจอแสดงผล Super AMOLED 24-bit (16 ล้านสี) \r\n- ระบบสัมผัส Multi-Touch\r\n- กว้าง 6 นิ้ว (แนวทะแยง)\r\n- ความละเอียด 1080 x 2220 พิกเซล (410 ppi) \r\n- Capacitive \r\n- ระบบป้องกัน - ฝุ่นละออง (Resistance to dust)\r\nระบบเซ็นเซอร์ (Sensor) \r\n- ระบบตรวจสอบลายนิ้วมือ (Finger Print)	\r\n- ระบบจดจำใบหน้า (Face Detection)	\r\n- ระบบหมุนภาพอัตโนมัติ (Accelerometer) \r\n- ตรวจจับแสงปรับความสว่างอัตโนมัติ (Ambient light) \r\n- ระบบเปิด/ปิดหน้าจออัตโนมัติขณะสนทนา (Proximity) \r\n- ระบบตรวจจับคลื่นแม่เหล็ก (Geomagnetic) \r\n- ระบบเซนเซอร์หมุนภาพ (Gyroscope) \r\n- ปรับมุมมองการแสดงผลอัตโนมัติ (Orientation) \r\n- ระบบวัดความกดอากาศ (Barometer)\r\nคุณสมบัติการกันน้ำ (Waterproof)\r\n- กันน้ำได้ชั่วคราว\r\nมีสีให้เลือก (Colors) : Black, Blue, Gray, Gold\r\nระบบปฏิบัติการ (OS, CPU)\r\nระบบปฏิบัติการ: Android 7.1.1 (Nougat)\r\nหน่วยประมวลผล : Exynos 7885 Octa Core\r\n- ความเร็ว : 2.2 GHz\r\nหน่วยความจำ 64 GB (ตัวเครื่อง)\r\n- RAM 6GB\r\nการ์ดหน่วยความจำ\r\n- microSD สูงสุด 256 GB\r\nแบตเตอรี่มาตรฐาน 3,500 mAh (Standard Battery)', '18990.00', 'Samsung-Galaxy-A8plus.jpg', 2),
(00011, 'Samsung Galaxy S9 Plus', 'ข้อมูลตัวเครื่อง\r\nสมาร์ทโฟน (โทรศัพท์มือถือพร้อมระบบปฏิบัติการ)\r\nจอแสดงผล Super AMOLED 24-bit (16 ล้านสี) \r\n- ระบบสัมผัส Multi-Touch\r\n- กว้าง 5.8 นิ้ว (แนวทะแยง)\r\n- ความละเอียด 2960 x 1440 พิกเซล (570 ppi) \r\n- Capacitive \r\n- Corning Gorilla Glass 5 \r\n- ระบบป้องกัน - ฝุ่นละออง (Resistance to dust)\r\nระบบเซ็นเซอร์ (Sensor) \r\n- ระบบตรวจสอบลายนิ้วมือ (Finger Print)	\r\n- ระบบจดจำใบหน้า (Face Detection)	\r\n- ระบบหมุนภาพอัตโนมัติ (Accelerometer) \r\n- ตรวจจับแสงปรับความสว่างอัตโนมัติ (Ambient light) \r\n- ระบบเปิด/ปิดหน้าจออัตโนมัติขณะสนทนา (Proximity) \r\n- ระบบตรวจจับคลื่นแม่เหล็ก (Geomagnetic) \r\n- ระบบเซนเซอร์หมุนภาพ (Gyroscope) \r\n- ปรับมุมมองการแสดงผลอัตโนมัติ (Orientation) \r\n- ระบบวัดความกดอากาศ (Barometer) \r\n- ระบบสแกนม่านตา\r\nคุณสมบัติการกันน้ำ (Waterproof)\r\n- กันน้ำได้ชั่วคราว\r\nระบบปฏิบัติการ: Android 8.0 (Oreo)\r\nหน่วยประมวลผล : Exynos 9810 Octa Core\r\n- ความเร็ว : 2.8 GHz\r\nหน่วยความจำ \r\n- ROM 64GB \r\n- RAM 4GB\r\nการ์ดหน่วยความจำ\r\n- microSD สูงสุด 400 GB\r\nแบตเตอรี่มาตรฐาน 3,000 mAh (Standard Battery)', '31900.00', 'Samsung-Galaxy-s9+.jpg', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`mem_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cid` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
