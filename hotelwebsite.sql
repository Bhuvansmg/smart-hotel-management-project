-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2025 at 05:40 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotelwebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `addstaff`
--

CREATE TABLE `addstaff` (
  `fullname` varchar(50) DEFAULT NULL,
  `dob` varchar(50) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `phnumber` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `paddress` varchar(50) DEFAULT NULL,
  `designation` varchar(50) DEFAULT NULL,
  `dept` varchar(50) DEFAULT NULL,
  `shifttime` varchar(50) DEFAULT NULL,
  `doj` varchar(50) DEFAULT NULL,
  `shiftduration` varchar(50) DEFAULT NULL,
  `shifttype` varchar(50) DEFAULT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `idproof` varchar(50) DEFAULT NULL,
  `note` varchar(50) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `addstaff`
--

INSERT INTO `addstaff` (`fullname`, `dob`, `gender`, `phnumber`, `email`, `paddress`, `designation`, `dept`, `shifttime`, `doj`, `shiftduration`, `shifttype`, `photo`, `idproof`, `note`, `id`) VALUES
('Rohan', '2024-02-12', 'Male', '9658452565', 'example@gmail.com', 'dvg', 'saa', 'Kitchen', '8AM - 4PM', '2025-04-05', '10 hours', 'Night', 'shef.jpeg', 'addhar.png', 'sdd', 1),
('seeths', '2025-04-02', 'Female', '7896541236', 'setaha@gmail.com', 'Bangaluru', 'recreption', 'Reception', '8AM - 4PM', '2025-04-26', '8 hours', 'Day', 'recep.jpeg', 'addhar.png', 'ede', 2),
('Laus', '2025-04-11', 'Male', '9865453215', 'abhi@gmail.com', 'df', 'Sous Chef', 'Kitchen', '8AM - 5PM', '2025-05-11', '8 hours', 'Night', 'sh.jpeg', 'addhar.png', 'sda', 3),
('Manish Mehrotra,', '1996-06-12', 'Male', '8456251436', 'manish@gmail.com', 'smg', 'Pastry Chef', 'Kitchen', '5PM-12AM', '2024-12-30', '8 hours', 'Day', '2shef.jpeg', 'addhar.png', 'good chef well cook', 4),
('Advika', '1997-06-04', 'Female', '9945153862', 'advika@gmail.com', 'Basavanagundi Road, Basavana Ganguru, Karnataka, I', 'Bartender', 'Kitchen', '5PM-12AM', '2025-04-04', '', 'Night', '6shef.jpeg', 'addhar.png', '', 8),
('Kavish', '2001-04-11', 'Male', '8854632515', 'kavish@gmail.com', 'Basavanagundi Road, Basavana Ganguru, Karnataka, I', 'Front Desk Agent', 'Reception', '8PM-6AM', '2020-02-05', '10 hours', 'Night', 'reception.jpeg', 'addhar.png', '', 9),
('Vihaan', '1995-08-30', 'Male', '6985741236', 'vihaan@gmail.com', '23 Main Street, Anytown, CA 12345 ', 'Hotel Security', 'Security', '8PM-6AM', '2025-04-02', '8 hours', 'Night', 's2.jpeg', 'addhar.png', 'Hotel security person', 10),
('Reyash', '1994-01-26', 'Male', '7896321456', 'reyash@gmail.com', '23 Main Street, Anytown, CA 12345', 'parking Security', 'Security', '5PM-12AM', '2023-09-21', '10 hours', 'Day', 'h1.jpeg', 'addhar.png', '', 11),
('Mithun', '2001-02-06', 'Male', '8956231478', 'mithun@gmail.com', '23 Main Street, Anytown, CA 12345', 'Rooms Cleaner', 'Maintenance', '8AM - 5PM', '2025-04-09', '8 hours', 'Day', 'c2.jpeg', 'addhar.png', '', 12);

-- --------------------------------------------------------

--
-- Table structure for table `admintable`
--

CREATE TABLE `admintable` (
  `myadmin` varchar(50) DEFAULT NULL,
  `upassword` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admintable`
--

INSERT INTO `admintable` (`myadmin`, `upassword`) VALUES
('hoteladmin', 'hotel#14563');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `cname` varchar(50) DEFAULT NULL,
  `emailid` varchar(50) DEFAULT NULL,
  `sub` varchar(50) DEFAULT NULL,
  `msg` varchar(50) DEFAULT NULL,
  `cemail` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`cname`, `emailid`, `sub`, `msg`, `cemail`) VALUES
('Giri', 'giri@gmail.com', 'where  is your hotel', 'how is it', 'giri@gmail.com'),
('Giri', 'giri@gmail.com', 'where  is your hotel', 'sdFszfzs', 'giri@gmail.com'),
('Giri', 'giri@gmail.com', 'where  is your hotel', 'dsydzgd', 'giri@gmail.com'),
('Giri', 'giri@gmail.com', 'where  is your hotel', 'dsydzgd', 'giri@gmail.com'),
('Giri', 'giri@gmail.com', 'where  is your hotel', 'aADSADASDSA', 'giri@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `custfoodorder`
--

CREATE TABLE `custfoodorder` (
  `foodname` varchar(50) DEFAULT NULL,
  `quantity` varchar(50) DEFAULT NULL,
  `foodprice` varchar(50) DEFAULT NULL,
  `tablenum` varchar(50) DEFAULT NULL,
  `cemail` varchar(50) DEFAULT NULL,
  `grandtotal` varchar(50) DEFAULT NULL,
  `datetime` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `custfoodorder`
--

INSERT INTO `custfoodorder` (`foodname`, `quantity`, `foodprice`, `tablenum`, `cemail`, `grandtotal`, `datetime`) VALUES
('Idli', '2', '200.00', '3', NULL, NULL, '2025-05-13 11:09:38'),
('Rice Meals', '4', '800.00', '5', NULL, NULL, '2025-05-13 11:09:38'),
('Egg Masala', '2', '240.00', '2', NULL, NULL, '2025-05-13 11:09:38'),
('Mutton Curry', '1', '435.00', '1', NULL, NULL, '2025-05-13 11:09:38'),
('Vada', '1', '95.00', '2', NULL, NULL, '2025-05-13 11:09:38'),
('Idli', '1', '100.00', '5', NULL, NULL, '2025-05-13 11:09:38'),
('Rice Meals', '3', '600.00', '4', NULL, NULL, '2025-05-13 11:09:38'),
('Idli', '2', '190.00', '1', NULL, NULL, '2025-05-13 11:09:38'),
('Egg Masala', '1', '120.00', '4', NULL, NULL, '2025-05-13 11:09:38'),
('Curd Rice', '1', '150.00', '6', NULL, NULL, '2025-05-13 11:09:38'),
('Curd Rice', '1', '150.00', '6', NULL, NULL, '2025-05-13 11:09:38'),
('Curd Rice', '1', '150.00', '6', NULL, NULL, '2025-05-13 11:09:38'),
('Mutton Curry', '1', '435.00', '1', NULL, NULL, '2025-05-13 11:09:38'),
('Mutton Curry', '1', '435.00', '1', NULL, NULL, '2025-05-13 11:09:38'),
('Mutton Curry', '1', '435.00', '2', NULL, NULL, '2025-05-13 11:09:38'),
('Mutton Curry', '1', '435.00', '2', NULL, NULL, '2025-05-13 11:09:38'),
('Egg Masala', '1', '120.00', '1', NULL, NULL, '2025-05-13 11:09:38'),
('Mutton Curry', '1', '435.00', '2', NULL, NULL, '2025-05-13 11:09:38'),
('Idli', '1', '95.00', '2', NULL, NULL, '2025-05-13 11:09:38'),
('Pongal', '1', '180.00', '2', NULL, NULL, '2025-05-13 11:09:38'),
('Paneer Tikka', '1', '180.00', '4', NULL, NULL, '2025-05-13 11:09:38'),
('Prawan', '1', '320.00', '7', NULL, NULL, '2025-05-13 11:09:38'),
('Chicken Biriyani', '1', '300.00', '6', NULL, NULL, '2025-05-13 11:09:38'),
('Idli', '1', '95.00', '8', NULL, NULL, '2025-05-13 11:09:38'),
('Idli', '1', '95.00', '4', NULL, NULL, '2025-05-13 11:09:38'),
('Idli', '1', '95.00', '4', NULL, NULL, '2025-05-13 11:09:38'),
('Rava Upitu', '1', '95.00', '4', NULL, NULL, '2025-05-13 11:09:38'),
('Rice Meals', '1', '200.00', '4', NULL, NULL, '2025-05-13 11:09:38'),
('Rice Meals', '1', '200.00', '5', NULL, NULL, '2025-05-13 11:09:38'),
('Rice Meals', '1', '200.00', '8', NULL, NULL, '2025-05-13 11:09:38'),
('Veg Biriyani', '1', '280.00', '2', NULL, NULL, '2025-05-13 11:09:38'),
('Mutton Curry', '1', '435.00', '45', NULL, NULL, '2025-05-13 11:09:38'),
('Idli', '1', '95.00', '4', NULL, NULL, '2025-05-13 11:09:38'),
('Vada', '1', '95.00', '5', NULL, NULL, '2025-05-13 11:09:38'),
('Idli', '1', '95.00', '3', 'sumuka@gmail.com', NULL, '2025-05-13 11:09:38'),
('Paneer Tikka', '1', '180.00', '2', NULL, NULL, '2025-05-13 11:09:38'),
('Chicken Biriyani', '1', '300.00', '2', 'sumuka@gmail.com', NULL, '2025-05-13 11:09:38'),
('Curd Rice', '1', '150.00', '5', 'sumuka@gmail.com', NULL, '2025-05-13 11:09:38'),
('Chicken-65', '1', '220.00', '2', 'abhiram@gmail.com', NULL, '2025-05-13 11:09:38'),
('Curd Rice', '1', '150.00', '2', 'abhiram@gmail.com', NULL, '2025-05-13 11:09:38'),
('Rice Meals', '4', '800.00', '5', '', NULL, '2025-05-13 11:09:38'),
('Vada', '1', '95.00', '5', 'sumuka@gmail.com', NULL, '2025-05-13 11:09:38'),
('Mutton Curry', '1', '435.00', '5', 'sumuka@gmail.com', NULL, '2025-05-13 11:09:38'),
('Idli', '1', '90.00', '5', 'sumuka@gmail.com', NULL, '2025-05-13 11:09:38'),
('Pongal', '2', '360.00', '5', 'adithya@gmail.com', NULL, '2025-05-13 17:11:21'),
('Mutton Curry', '1', '435.00', '2', 'firdose@gmail.com', NULL, '2025-05-14 05:30:18'),
('Butter Non', '1', '250.00', '1', NULL, NULL, '2025-05-15 14:59:36'),
('Butter Non', '1', '250.00', '1', NULL, NULL, '2025-05-15 15:01:29'),
('Butter Non', '1', '250.00', '1', NULL, NULL, '2025-05-15 15:01:58'),
('Paneer Tikka', '1', '180.00', '3', 'siri@gmail.com', NULL, '2025-05-15 15:21:36'),
('Straberry ', '1', '180.00', '5', 'siri@gmail.com', NULL, '2025-05-15 15:31:38'),
('Mango ', '1', '100.00', '5', 'siri@gmail.com', NULL, '2025-05-15 15:32:03');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `fullname` varchar(50) DEFAULT NULL,
  `emailid` varchar(50) DEFAULT NULL,
  `phnumber` varchar(50) DEFAULT NULL,
  `cpassword` varchar(50) DEFAULT NULL,
  `ccpassword` varchar(50) DEFAULT NULL,
  `customerid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`fullname`, `emailid`, `phnumber`, `cpassword`, `ccpassword`, `customerid`) VALUES
('Raguveer', 'raguveer@gmail.com', '9945781236', 'Ragu#123456', 'Ragu#123456', 4),
('Abhi', 'abhi@gmail.com', '9545623585', 'Abhi#14563', 'Abhi#14563', 5),
('Mack', 'mack@gmail.com', '7845124585', 'Mack#123456', 'Mack#123456', 6),
('Tejas', 'tejas@gmail.com', '8653214789', 'Tejas@123', 'Tejas@123', 7),
('Vasu', 'vasu@gmail.com', '6251478596', 'Vasu#147', 'Vasu#147', 8),
('Dhruva', 'dhruva@gmail.com', '8541235625', 'Druva#123', 'Druva#123', 9),
('Giri', 'giri@gmail.com', '6965485235', 'Giri@1020', 'Giri@1020', 10),
('Srusti', 'srusti@gmail.com', '9856412563', 'Srusti#123', 'Srusti#123', 11),
('Punda', 'punda@gmail.com', '7845123695', 'Punda#123', 'Punda#123', 12),
('Pardeep', 'pradeep@gmail.com', '8545123652', 'Pradeep#123', 'Pradeep#123', 13),
('Abhiram', 'abhiram@gmail.com', '7854123645', 'Abhi#123', 'Abhi#123', 14),
('Sumuka', 'sumuka@gmail.com', '9654123654', 'Sumuka#123', 'Sumuka#123', 15),
('Adithya', 'adithya@gmail.com', '9956451525', 'Adi#123456', 'Adi#123456', 16),
('Firdose', 'firdose@gmail.com', '7845126525', 'Firdose#145', 'Firdose#145', 17),
('Siri', 'siri@gmail.com', '9865321452', 'Siri@1478', 'Siri@1478', 18);

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `foodtype` varchar(50) DEFAULT NULL,
  `vegornonveg` varchar(50) NOT NULL DEFAULT '0',
  `foodname` varchar(50) DEFAULT NULL,
  `foodprice` varchar(50) DEFAULT NULL,
  `foodimage` varchar(50) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`foodtype`, `vegornonveg`, `foodname`, `foodprice`, `foodimage`, `description`, `id`) VALUES
('southindian', 'Non Vegetarian', 'Chicken-65', '220', 'Chicken-65-.jpg', 'chicken spicy taste', 16),
('southindian', 'Non Vegetarian', 'Mutton Curry', '435', 'mutton curry.jpg', 'Special mutton curry', 17),
('southindian', 'Non Vegetarian', 'Fish Curry', '375', 'fish curry.jpg', 'fish curry', 18),
('southindian', 'Non Vegetarian', 'Egg Masala', '120', 'egg masala.jpg', 'egg masala special', 19),
('southindian', 'Vegetarian', 'Idli', '90', 'idlie1.jpg', 'soft rava idli', 20),
('southindian', 'Vegetarian', 'Curd Rice', '150', 'Curd-Rice.jpg', 'curd Rice with fruits', 21),
('southindian', 'Vegetarian', 'Pongal', '180', 'Pongal.jpg', 'Ghee Pongal', 22),
('southindian', 'Vegetarian', 'Vada', '95', 'vada.jpg', 'Crunchy crispy', 23),
('southindian', 'Vegetarian', 'Rava Upitu', '95', 'rava upitu.jpg', 'Rava uppitu', 24),
('southindian', 'Vegetarian', 'Rice Meals', '200', 'meals.jpg', 'traditional style meals food', 29),
('northindian', 'Non Vegetarian', 'Butter Non', '250', 'butter.jpeg', '', 31),
('northindian', 'Non Vegetarian', 'Dal Makhani', '250', 'dal makani.jpeg', '', 32),
('northindian', 'Non Vegetarian', 'Mutton Grill', '459', 'n5.jpg', '', 33),
('northindian', 'Non Vegetarian', 'Prawan', '320', 'prawan.jpeg', '', 34),
('northindian', 'Vegetarian', 'Paneer Tikka', '180', 'paneer1.jpg', '', 37),
('northindian', 'Non Vegetarian', 'Tandoore', '170', 'tandoore.jpeg', '', 38),
('southindian', 'Vegetarian', 'Tomato Rice', '150', 'tomato rice.jpg', 'creamy tomato-buuter sauce,garnished with cilantro', 44),
('southindian', 'Vegetarian', 'Veg Biriyani', '280', 'veg-biryani.png', 'Veg Biriyiani spice ', 45),
('southindian', 'Non Vegetarian', 'Fish fry', '320', 'fish fry.jpg', '', 46),
('southindian', 'Non Vegetarian', 'Chicken Biriyani', '300', 'Chicken Biriyani.jpg', '', 47),
('southindian', 'Non Vegetarian', 'Mutton sukka', '245', 'mutton sukka.jpg', '', 48),
('southindian', 'Non Vegetarian', 'Hyderabad biriyani', '410', 'Hyderabadi-Chicken-Biryani.webp', '', 49),
('northindian', 'Non Vegetarian', 'veg Kothu Parotta', '180', 'veg kothu parotta.jpg', '', 50),
('northindian', 'Non Vegetarian', 'Grill Chicken', '230', 'n3.jpg', '', 51),
('northindian', 'Vegetarian', 'Butter nom', '150', 'butter.jpeg', '', 52),
('Desert', 'Vegetarian', 'Bonda Soup', '100', 'bonda.jpg', '', 53),
('Desert', 'Vegetarian', 'Chakali', '80', 'chakali.jpg', '', 54),
('Desert', 'Vegetarian', 'Cocount Burfi', '120', 'coconut burfi.jpg', '', 55),
('Desert', 'Vegetarian', 'Mysore Pak', '95', 'mysore-pak.jpg', '', 56),
('Beverages', 'Vegetarian', 'Straberry ', '180', 'j.jpg', '', 59),
('Beverages', 'Vegetarian', 'Mango ', '100', 'j1.jpg', '', 60),
('Beverages', 'Vegetarian', 'Pomogranite', '85', 'pom.jpg', '', 61),
('Beverages', 'Vegetarian', 'Watermelon', '95', 'z.jpg', '', 62),
('Beverages', 'Vegetarian', 'Orange', '70', 'zx.jpg', '', 63),
('Beverages', 'Vegetarian', 'Apple', '90', 'a.jpg', '', 66),
('northindian', 'Non Vegetarian', 'Meals', '200', 'n6.jpg', '', 67);

-- --------------------------------------------------------

--
-- Table structure for table `foodcategory`
--

CREATE TABLE `foodcategory` (
  `foodtype` varchar(50) DEFAULT NULL,
  `vegornonveg` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `foodcategory`
--

INSERT INTO `foodcategory` (`foodtype`, `vegornonveg`) VALUES
('northindian', 'Vegetarian'),
('', 'Non Vegetarian'),
('southindian', ''),
('Desert', ''),
('Beverages', ''),
('start Up', 'veg'),
('Chinese', 'Non Vegetarian');

-- --------------------------------------------------------

--
-- Table structure for table `romms`
--

CREATE TABLE `romms` (
  `Column 1` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roomsbooking`
--

CREATE TABLE `roomsbooking` (
  `cemail` varchar(50) DEFAULT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `emailid` varchar(50) DEFAULT NULL,
  `phnumber` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `roomtype` varchar(50) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `bedtype` varchar(50) DEFAULT NULL,
  `meal` varchar(50) DEFAULT NULL,
  `noofperson` int(11) DEFAULT NULL,
  `identityproof` varchar(50) DEFAULT NULL,
  `paymentmethod` varchar(50) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `roomsbooking`
--

INSERT INTO `roomsbooking` (`cemail`, `fname`, `emailid`, `phnumber`, `country`, `roomtype`, `price`, `cin`, `cout`, `bedtype`, `meal`, `noofperson`, `identityproof`, `paymentmethod`, `id`) VALUES
('mack@gmail.com', 'Mack', 'mack@gmail.com', '09685452635', 'India', 'Executive Suite', '5500', '2025-05-20', '2025-05-22', 'Double', 'Half Board', 2, '935214562415', 'Credit/Debit Card', 26),
('vasu@gmail.com', 'Vasu', 'vasu@gmail.com', '06251478596', 'India', 'Standard Room', '2500', '2025-05-29', '2025-05-22', 'Single', 'Full Board', 2, '935214562415', 'UPI', 27),
('tejas@gmail.com', 'Tejas', 'tejas@gmail.com', '08653214789', 'India', 'Standard Room', '2500', '2025-05-22', '2025-05-23', 'Double', 'Full Board', 2, '935214562415', 'Credit/Debit Card', 28),
('giri@gmail.com', 'Giri', 'giri@gmail.com', '06965485235', 'India', 'Family Room', '4500', '2025-05-22', '2025-05-23', 'Triple', 'Full Board', 6, '935214562415', 'Credit/Debit Card', 29),
('abhi@gmail.com', 'Abhi', 'abhisheksl081@gmail.com', '09685452635', 'India', 'Executive Suite', '5500', '2025-05-30', '2025-05-31', 'Single', 'Room only', 1, '935214562415', 'Credit/Debit Card', 30),
('srusti@gmail.com', 'Srusti', 'srusti@gmail.com', '8545152536', 'India', 'Standard Room', '2500', '2025-05-16', '2025-05-17', 'Single', 'Half Board', 2, '789654123654', 'Credit/Debit Card', 31),
('srusti@gmail.com', 'Srusti', 'srusti@gmail.com', '7854123645', 'India', 'Family Room', '4500', '2025-05-24', '2025-05-25', 'Quad', 'Half Board', 2, '789654123654', 'Credit/Debit Card', 32),
('punda@gmail.com', 'Punda', 'punda@gmail.com', '7854123645', 'Canada', 'Executive Suite', '5500', '2025-05-17', '2025-05-20', 'Double', 'Full Board', 2, '789654123654', 'Credit/Debit Card', 33),
('abhiram@gmail.com', 'Ram', 'abhiram@gmail.com', '7854123645', 'India', 'Standard Room', '2500', '2025-05-16', '2025-05-17', 'Double', 'Full Board', 2, '94521688131', 'Credit/Debit Card', 34),
('sumuka@gmail.com', 'Sumuka', 'sumuka@gmail.com', '9685452536', 'Australia', 'Deluxe Room', '3500', '2025-05-07', '2025-05-11', 'Double', 'Half Board', 3, '895645123652', 'Credit/Debit Card', 35),
('sumuka@gmail.com', 'Abhi', 'abhi@gmail.com', '7854123645', 'India', 'Deluxe Room', '3500', '2025-05-14', '2025-05-16', 'Triple', 'Breakfast', 4, '789654123654', 'Credit/Debit Card', 36),
('sumuka@gmail.com', 'sumuka', 'sumuka@gmail.com', '8541235696', 'Canada', 'Deluxe Room', '3500', '2025-05-16', '2025-05-15', 'Double', 'Breakfast', 2, '784512369654', 'Credit/Debit Card', 37),
('sumuka@gmail.com', 'Raguveer', 'mack@gmail.com', '7854123645', 'India', 'Executive Suite', '5500', '2025-05-24', '2025-05-02', 'Double', 'Room only', 2, '945216881311', '', 38),
('sumuka@gmail.com', 'Raguveer', 'mack@gmail.com', '7854123645', 'India', 'Standard Room', '2500', '2025-05-17', '2025-05-17', 'Double', 'Half Board', 2, '945216881311', '', 39),
('sumuka@gmail.com', 'Raguveer', 'mack@gmail.com', '7854123645', 'Afghanistan', 'Standard Room', '2500', '2025-05-18', '2025-05-16', 'Double', 'Breakfast', 2, '945216881311', '', 40),
('sumuka@gmail.com', 'Punda', 'abhiram@gmail.com', '7854123645', 'United States', 'Family Room', '4500', '2025-05-21', '2025-05-23', 'Double', 'Full Board', 2, '789654123654', '', 41),
('sumuka@gmail.com', 'Raguveer', 'abhiram@gmail.com', '7854123645', 'United States', 'Family Room', '4500', '2025-05-16', '2025-05-21', 'Triple', 'Half Board', 2, '945216881311', '', 43),
('sumuka@gmail.com', 'Punda', 'mack@gmail.com', '7854123645', 'United Kingdom', 'Deluxe Room', '3500', '2025-05-25', '2025-05-18', 'Triple', 'Half Board', 3, '945216881311', 'UPI', 44),
('sumuka@gmail.com', 'danu', 'danu@gmail.com', '7854123645', 'Germany', 'Family Room', '4500', '2025-05-22', '2025-05-16', 'Double', 'Room only', 2, '789654123654', 'Net Banking', 45),
('sumuka@gmail.com', 'madu', 'madu@gmail.com', '7854123645', 'France', 'Family Room', '4500', '2025-05-09', '2025-05-10', 'Triple', 'Half Board', 2, '789654123654', 'Credit/Debit Card', 46),
('sumuka@gmail.com', 'Mack', 'aradya@gmail.com', '8956234152', 'France', 'Executive Suite', '5500', '2025-05-15', '2025-05-24', 'Triple', 'Full Board', 3, '789654123654', 'UPI', 47),
('sumuka@gmail.com', 'Mack', 'aradya@gmail.com', '8956234152', 'France', 'Executive Suite', '5500', '2025-05-15', '2025-05-24', 'Triple', 'Full Board', 3, '789654123654', 'UPI', 48),
('sumuka@gmail.com', 'kumar', 'kumar@gmail.com', '8596562536', 'India', 'Deluxe Room', '3500', '2025-05-09', '2025-05-17', 'Triple', 'Half Board', 2, '945216881311', 'UPI', 49),
('sumuka@gmail.com', 'kumar', 'kumar@gmail.com', '8596562536', 'India', 'Deluxe Room', '3500', '2025-05-09', '2025-05-17', 'Triple', 'Half Board', 2, '945216881311', 'UPI', 50),
('sumuka@gmail.com', 'Abhi', 'abhi@gmail.com', '8956253656', 'United Kingdom', 'Deluxe Room', '3500', '2025-05-22', '2025-05-30', 'Double', 'Breakfast', 3, '945216881311', 'Net Banking', 51),
('sumuka@gmail.com', 'Abhi', 'abhi@gmail.com', '8956253656', 'United Kingdom', 'Deluxe Room', '3500', '2025-05-22', '2025-05-30', 'Double', 'Breakfast', 3, '945216881311', 'UPI', 52),
('sumuka@gmail.com', 'Abhi', 'abhi@gmail.com', '8956253656', 'United Kingdom', 'Executive Suite', '5500', '2025-05-22', '2025-05-30', 'Double', 'Breakfast', 3, '945216881311', 'Net Banking', 53),
('adithya@gmail.com', 'Adithya', 'adithya@gmail.com', '9685451525', 'India', 'Standard Room', '2500', '2025-05-14', '2025-05-16', 'Double', 'Half Board', 2, '958452623526', 'UPI', 54),
('adithya@gmail.com', 'Adithya', 'adithya@gmail.com', '8956253621', 'India', 'Family Room', '4500', '2025-05-08', '2025-05-16', 'Triple', 'Breakfast', 2, '958452623526', 'Credit/Debit Card', 55),
('firdose@gmail.com', 'Firdose', 'firdose@gmail.com', '7845124585', 'Australia', 'Standard Room', '2500', '2025-05-15', '2025-05-17', 'Single', 'Half Board', 2, '789654123654', 'Credit/Debit Card', 56),
('firdose@gmail.com', 'firdose', 'abhiram@gmail.com', '7845124585', 'France', 'Standard Room', '2500', '2025-05-24', '2025-05-25', 'Triple', 'Breakfast', 3, '945216881311', 'UPI', 57),
('siri@gmail.com', 'Siri', 'siri@gmail.com', '9856451236', 'India', 'Standard Room', '2500', '2025-05-16', '2025-05-17', 'Double', 'Half Board', 2, '784512365214', 'UPI', 58);

-- --------------------------------------------------------

--
-- Table structure for table `shefsupplies`
--

CREATE TABLE `shefsupplies` (
  `id` int(11) NOT NULL,
  `requestdate` date DEFAULT NULL,
  `chefname` varchar(50) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `itemname` varchar(50) NOT NULL DEFAULT '0',
  `quantity` varchar(50) DEFAULT NULL,
  `priority` varchar(50) DEFAULT NULL,
  `deliverydate` date DEFAULT NULL,
  `note` text DEFAULT NULL,
  `status` varchar(50) DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `shefsupplies`
--

INSERT INTO `shefsupplies` (`id`, `requestdate`, `chefname`, `category`, `itemname`, `quantity`, `priority`, `deliverydate`, `note`, `status`) VALUES
(1, '2025-05-09', 'aradya', 'Dairy', 'Rice', '70 kg', 'High', '2025-05-23', 'Jeera Rice', NULL),
(2, '2025-05-11', 'Rio ', 'Vegetables', 'carrot vegeatbles', '5kg', 'Medium', '2025-05-12', 'Good vegetables', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `southfood`
--

CREATE TABLE `southfood` (
  `foodtype` varchar(50) DEFAULT NULL,
  `vegornonveg` varchar(50) DEFAULT NULL,
  `foodname` varchar(50) DEFAULT NULL,
  `foodprice` varchar(50) DEFAULT NULL,
  `foodimage` varchar(50) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tablereserv`
--

CREATE TABLE `tablereserv` (
  `fullname` varchar(50) DEFAULT NULL,
  `emailid` varchar(50) DEFAULT NULL,
  `phnumber` varchar(50) DEFAULT NULL,
  `reservdate` date DEFAULT NULL,
  `timeslot` time DEFAULT NULL,
  `acnonac` varchar(50) DEFAULT NULL,
  `numseats` varchar(50) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `cemail` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tablereserv`
--

INSERT INTO `tablereserv` (`fullname`, `emailid`, `phnumber`, `reservdate`, `timeslot`, `acnonac`, `numseats`, `price`, `id`, `cemail`) VALUES
('Giri', 'giri@gmail.com', '06965485235', '2025-05-16', '08:00:00', 'yes', '2', '215', 31, 'giri@gmail.com'),
('Abhi', 'abhisheksl081@gmail.com', '09685452635', '2025-05-14', '01:00:00', 'no', '1', '100', 32, 'abhi@gmail.com'),
('Srusti', 'srusti@gmail.com', '9654142536', '2025-05-15', '01:00:00', 'yes', '2', '215', 33, 'srusti@gmail.com'),
('Punda', 'punda@gmail.com', '7845123698', '2025-05-24', '10:00:00', 'no', '2', '200', 34, 'punda@gmail.com'),
('Ram', 'abhiram@gmail.com', '7845123698', '2025-05-23', '04:00:00', 'yes', '3', '315', 35, 'abhiram@gmail.com'),
('Sumuka', 'sumuka@gmail.com', '09685452536', '2025-05-18', '01:00:00', 'yes', '4', '415', 36, 'sumuka@gmail.com'),
('Adithya', 'adithya@gmail.com', '7845123698', '2025-05-14', '02:00:00', 'yes', '2', '215', 37, 'adithya@gmail.com'),
('Adithya', 'adithya@gmail.com', '7845123698', '2025-05-16', '02:00:00', 'yes', '3', '315', 38, 'adithya@gmail.com'),
('Adithya', 'adithya@gmail.com', '7845123698', '2025-05-16', '02:00:00', 'yes', '2', '215', 39, 'adithya@gmail.com'),
('Adithya', 'adithya@gmail.com', '7845123698', '2025-05-16', '02:00:00', 'yes', '2', '215', 40, 'adithya@gmail.com'),
('Adithya', 'adithya@gmail.com', '7845123698', '2025-05-04', '08:00:00', 'no', '4', '400', 41, 'adithya@gmail.com'),
('Firdose', 'firdose@gmail.com', '7845123698', '2025-05-17', '01:00:00', 'yes', '3', '315', 42, 'firdose@gmail.com'),
('mega', 'mega@gmail.com', '7845123698', '2025-05-24', '08:00:00', 'yes', '4', '415', 43, 'firdose@gmail.com'),
('Adithya', 'adithya@gmail.com', '7845123698', '2025-05-29', '08:00:00', 'no', '1', '100', 44, 'firdose@gmail.com'),
('Siri', 'siri@gmail.com', '7845123698', '2025-05-17', '02:00:00', 'yes', '2', '215', 45, 'siri@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addstaff`
--
ALTER TABLE `addstaff`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerid`),
  ADD UNIQUE KEY `emailid` (`emailid`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `foodname` (`foodname`);

--
-- Indexes for table `roomsbooking`
--
ALTER TABLE `roomsbooking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cemail` (`cemail`);

--
-- Indexes for table `shefsupplies`
--
ALTER TABLE `shefsupplies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `southfood`
--
ALTER TABLE `southfood`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `foodname` (`foodname`);

--
-- Indexes for table `tablereserv`
--
ALTER TABLE `tablereserv`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addstaff`
--
ALTER TABLE `addstaff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `roomsbooking`
--
ALTER TABLE `roomsbooking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `shefsupplies`
--
ALTER TABLE `shefsupplies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `southfood`
--
ALTER TABLE `southfood`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tablereserv`
--
ALTER TABLE `tablereserv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
