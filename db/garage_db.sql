-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 23, 2019 at 11:52 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `garage_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login_tbl`
--

DROP TABLE IF EXISTS `admin_login_tbl`;
CREATE TABLE IF NOT EXISTS `admin_login_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login_tbl`
--

INSERT INTO `admin_login_tbl` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin'),
(2, 'tusharjoshi8200@gmail.com', 'tusharjoshi');

-- --------------------------------------------------------

--
-- Table structure for table `appoinment_tbl`
--

DROP TABLE IF EXISTS `appoinment_tbl`;
CREATE TABLE IF NOT EXISTS `appoinment_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `model` int(50) NOT NULL,
  `service` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL,
  `veh_type` varchar(50) NOT NULL,
  `msg` varchar(200) NOT NULL,
  `approve_by_garage` varchar(50) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appoinment_tbl`
--

INSERT INTO `appoinment_tbl` (`id`, `model`, `service`, `date`, `time`, `name`, `email`, `phone`, `area`, `veh_type`, `msg`, `approve_by_garage`, `status`) VALUES
(14, 2014, 'Aluminum Repair', '2019-03-28', '06:00PM - 07:00PM', 'admin joshi', 'sandip@gmail.com', '8200768038', 'Anandnagar', '2 Wheels', 'test', 'mahaev', 2),
(15, 2016, 'Aluminum Repair', '2019-03-15', '02:00PM - 03:00PM', 'sandip', 'tbjoshi16@gmail.com', '8200768038', 'Anandnagar', 'Bus', 'test', 'mahadev', 2),
(16, 2011, 'Aluminum Repair', '2019-03-22', '05:00PM - 06:00PM', 'tarang', 'tbjoshi016@gmail.com', '8200768038', 'Sadarnagar', '2 Wheels', 'test', NULL, 0),
(17, 2012, 'Fender Repair', '2019-03-07', '09:00AM - 10:00AM', 'vishu', 'vishumeriya1711@gmail.com', '8735075060', 'Anandnagar', '4 Wheels', 'test', NULL, 0),
(18, 2012, 'Aluminum Repair', '2019-03-14', '06:00PM - 07:00PM', 'Tarang Maheta', 'tarang.mehta4545@gmail.com', '8200768038', 'Subhashnagar', '2 Wheels', 'test', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact_tbl`
--

DROP TABLE IF EXISTS `contact_tbl`;
CREATE TABLE IF NOT EXISTS `contact_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `email` varchar(25) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `msg` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_tbl`
--

INSERT INTO `contact_tbl` (`id`, `name`, `phone`, `email`, `subject`, `msg`) VALUES
(13, 'admin', '8200768038', 'tusharjoshi8200@gmail.com', 'test', 'test'),
(15, 'admin joshi tushar', '8200768038', 'tusharjoshi8200@gmail.com', 'test', 'tedt');

-- --------------------------------------------------------

--
-- Table structure for table `emergency_service`
--

DROP TABLE IF EXISTS `emergency_service`;
CREATE TABLE IF NOT EXISTS `emergency_service` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `veh_num` varchar(50) NOT NULL,
  `area` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `add` varchar(200) NOT NULL,
  `msg` varchar(200) NOT NULL,
  `approve_by_garage` varchar(50) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emergency_service`
--

INSERT INTO `emergency_service` (`id`, `veh_num`, `area`, `type`, `name`, `email`, `phone`, `add`, `msg`, `approve_by_garage`, `status`) VALUES
(6, 'GJ 4 1754', 'Anandnagar', 'Truck', 'mahadev', 'mahadev@gmail.com', '8200768038', 'mahadev', 'mahadev', 'mahaev', 2),
(11, 'GJ 4 1754', 'Anandnagar', '2 Wheels', 'tushar', 'tusharjoshi8200@gmail.com', '8200768038', 'test', 'test', 'mahaev', 2),
(12, 'gj4 1754', 'Waghavadi', '2 Wheels', 'Tarang Maheta', 'tusharjoshi8200@gmail.com', '8200768038', 'tesgt', 'tst', NULL, 0),
(14, 'gj4 1754', 'Waghavadi', '2 Wheels', 'tushar bakulbhai joshi', 'tusharjoshi8200@gmail.com', '8200768038', 'te', 'teq', NULL, 0),
(15, 'gj4 1754', 'Sadarnagar', '4 Wheels', 'tushar bakulbhai joshi', 'tusharjoshi8200@gmail.com', '8200768038', 'fgdrg', 'dfdf', NULL, 0),
(16, 'gj4 1754', 'Anandnagar', '2 Wheels', 'admin joshi', 'tarang.mehta4545@gmail.com', '8200768038', 'efewf', 'ewfw', 'mahaev', 1),
(17, 'gj4 1754', 'Sadarnagar', '2 Wheels', 'admin joshi', 'tusharjoshi8200@gmail.com', '8200768038', 'amreli', 'please take fast action', NULL, 0),
(18, 'gj4 0202', 'Subhashnagar', '4 Wheels', 'admin joshi', 'tusharjoshi8200@gmail.com', '8200768038', 'tst', 'tst', NULL, 0),
(19, 'gj4 1754', 'Subhashnagar', '2 Wheels', 'Tarang Maheta', 'tarang.mehta4545@gmail.com', '8200768038', 'ets', 'test', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `register_tbl`
--

DROP TABLE IF EXISTS `register_tbl`;
CREATE TABLE IF NOT EXISTS `register_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  `con_password` varchar(15) NOT NULL,
  `garage_name` varchar(20) NOT NULL,
  `garage_phone` varchar(12) NOT NULL,
  `add` varchar(200) NOT NULL,
  `owner` varchar(20) NOT NULL,
  `area` varchar(25) NOT NULL,
  `owner_photo` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_tbl`
--

INSERT INTO `register_tbl` (`id`, `username`, `email`, `password`, `con_password`, `garage_name`, `garage_phone`, `add`, `owner`, `area`, `owner_photo`, `status`) VALUES
(7, 'admin', 'tusharjoshi8200@gmail.com', '111', '111', 'mahaev', '8735075060', 'test', 'tusharjoshi', 'Anandnagar', '../upload/7.jpg', 1),
(11, 'mahadev', 'mahadev@gmail.com', '111', '111', 'mahadev', '8200768038', 'test', 'tusharjoshi', 'Anandnagar', '../upload/11.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_detail`
--

DROP TABLE IF EXISTS `vehicle_detail`;
CREATE TABLE IF NOT EXISTS `vehicle_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vehicle_name` varchar(50) NOT NULL,
  `price` varchar(55) NOT NULL,
  `year` varchar(50) NOT NULL,
  `detail` varchar(2000) NOT NULL,
  `vehicle_type` varchar(200) NOT NULL,
  `garage_name` varchar(250) NOT NULL,
  `garage_add` varchar(200) NOT NULL,
  `garage_phone` varchar(120) NOT NULL,
  `vehicle_image` varchar(2000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle_detail`
--

INSERT INTO `vehicle_detail` (`id`, `vehicle_name`, `price`, `year`, `detail`, `vehicle_type`, `garage_name`, `garage_add`, `garage_phone`, `vehicle_image`) VALUES
(24, 'innova car', '850000', '2010', 'Details\r\nBrand\r\nToyota\r\nModel\r\nInnova\r\nYear\r\n2009\r\nFuel\r\nDiesel\r\nKM Driven\r\n158,000 km\r\nDescription\r\nNegotiable\r\nThis car is not re-registered. Single Owner.\r\n\r\nFully Company serviced vehicle.\r\n\r\nSingle Owner\r\n2009 Model . Condition of the car is as good as a new one.\r\n\r\nNo scratches. Body and paint well maintained.\r\n\r\nToyota genuine Alloy wheels.\r\n\r\nReverse Camera with sensors\r\n\r\nNeat and clean interiors\r\n\r\nOwner driven car.\r\n\r\nFull service history details can be send on demand', '4 Wheels', 'mahaev', 'test', '8735075060', '../vehicle_img/1.jpg'),
(25, 'isuzu', '15,70,000', '2017', 'Brand\r\nIsuzu\r\nModel\r\nISUZU D-MAX V-Cross\r\nYear\r\n2018\r\nFuel\r\nDiesel\r\nKM Driven\r\n8,300 km\r\nDescription\r\nHi its isuzu dmax v cross only 8300 km done all original', '4 Wheels', 'mahaev', 'test', '8735075060', '../vehicle_img/25.jpg'),
(26, 'fiat punto', '1,80,000', '2010', 'Brand\r\nFiat\r\nModel\r\nGrand Punto\r\nYear\r\n2010\r\nFuel\r\nDiesel\r\nKM Driven\r\n92,412 km\r\nDescription\r\nExcellent condition single hand driven .With speakers woofer and new seat covers.8 month old exide battery', '4 Wheels', 'mahaev', 'test', '8735075060', '../vehicle_img/26.jpg'),
(27, 'od', '1500000', '2017', 'Brand\r\nFiat\r\nModel\r\nGrand Punto\r\nYear\r\n2010\r\nFuel\r\nDiesel\r\nKM Driven\r\n92,412 km\r\nDescription\r\nExcellent condition single hand driven .With speakers woofer and new seat covers.8 month old exide battery', '4 Wheels', 'mahaev', 'test', '8735075060', '../vehicle_img/27.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
