-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2024 at 02:14 PM
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
-- Database: `autohaven`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_contact_info`
--

CREATE TABLE `customer_contact_info` (
  `CCI_id` int(11) NOT NULL,
  `address` varchar(55) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `contact_no` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer_profile`
--

CREATE TABLE `customer_profile` (
  `customer_id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `gender` char(1) NOT NULL,
  `ua_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_profile`
--

INSERT INTO `customer_profile` (`customer_id`, `name`, `gender`, `ua_id`) VALUES
(1, 'Alodia Gosienfiao', 'F', 2),
(2, 'Dazzly Moneda', 'M', 1),
(3, 'Efphraim Bonpagni ', 'M', 3),
(4, 'Eric Tai', 'M', 4),
(5, 'Lincoln Velasquez', 'M', 5),
(6, 'Dexie Diaz', 'F', 6),
(7, 'Ashley Gosia', 'F', 7),
(8, 'Myrtle Sarrosa', 'F', 8),
(9, 'Marlon Velazquez', 'M', 9),
(10, 'Bianco Yao', 'F', 10);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(55) NOT NULL,
  `item_description` longtext NOT NULL,
  `item_price` decimal(20,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `item_name`, `item_description`, `item_price`) VALUES
(1, 'Honda Civic 2024', 'Honda Civic 2024 is a 5 Seater Sedan available between a price range of ₱1.583 - 1.775 Million in the Philippines. It is available in 5 colors, 2 variants, 1 engine, and 1 transmissions option: CVT in the Philippines. It has a ground clearance of 134 mm and dimensions is 4678 mm L x 1802 mm W x 1415 mm H. Over 57 users have reviewed Civic on basis of Features, Mileage, seating comfort, and engine performance. ', 1700000),
(2, 'Volkswagen Lamando ', 'Volkswagen Lamando 2024 is a 5 Seater Sedan available between a price range of ₱1.619 - 1.753 Million in the Philippines. It is available in 5 colors, 2 variants, 1 engine, and 1 transmissions option: Automatic in the Philippines. The Lamando dimensions is 4598 mm L x 1826 mm W x 1425 mm H. Over 11 users have reviewed Lamando on basis of Features, Mileage, seating comfort, and engine performance.', 1700000),
(3, 'Mazda 3 Sedan 2024', 'The Mazda 3 is a high-end sedan that features a unique design language. The car is known for offering unique updates across in lineup, and for 2023, the car gets sportier with more streamlined features. For the 2023 model, the automaker has designed the Mazda 3 with a refined engine, making it lighter and more punchy with its SkyactivG technology. Inside, the car gets comfortable factors, including an intuitive driving experience with the Active Driving Display. What’s more? The car gets an 8.8-inch touchscreen system that is complemented by a 12-speaker BOSE audio system. ', 1500000),
(4, 'Toyota Corolla Altis  2024', 'Toyota Corolla Altis price in Philippines start from ₱1.135 Million for base variant 1.8 E CVT and goes upto ₱1.73 Million for top-spec variant. Corolla Altis available in total 3 variants with DP as low as ₱227,000 and MA ₱23,261 (60) on 19 October 2024. Toyota Corolla Altis price for automatic version starts from ₱1.135 Million. ', 1500000),
(5, 'GAC EMPOW 2024 ', 'GAC EMPOW 2024 is a 5 Seater Sedan available between a price range of ₱1.225 - 1.348 Million in the Philippines. It is available in 4 colors, 3 variants, 1 engine, and 1 transmissions option: Automatic in the Philippines. The EMPOW dimensions is 4700 mm L x 1850 mm W x 1432 mm H. Over 6 users have reviewed EMPOW on basis of Features, Mileage, seating comfort, and engine performance. ', 1200000),
(6, 'Hongqi H5', 'Hongqi H5 2024 is a 5 Seater Sedan available between a price range of ₱1.65 - 2.68 Million in the Philippines. It is available in 5 colors, 2 variants, 1 engine, and 1 transmissions option: Automatic in the Philippines. The H5 dimensions is 4985 mm L x 1865 mm W x 1465 mm H. Over 2 users have reviewed H5 on basis of Features, Mileage, seating comfort, and engine performance.', 1600000),
(7, 'Suzuki S-Presso', 'Suzuki S-Presso 2024 is a 5 Seater Hatchback available between a price range of ₱620,000 - 660,000 in the Philippines. It is available in 4 colors, 2 variants, 1 engine, and 2 transmissions option: Manual and Automatic in the Philippines. It has a ground clearance of 180 mm and dimensions is 3565 mm L x 1520 mm W x 1567 mm H. Over 49 users have reviewed S-Presso on basis of Features, Mileage, seating comfort, and engine performance. S-Presso top competitors are Mirage, Spark, Celerio and Ice Cream EV.', 620000),
(8, 'Suzuki Jimny ', 'Suzuki Jimny 2024 is a 4 Seater SUV available between a price range of ₱1.258 - 1.33 Million in the Philippines. It is available in 8 colors, 3 variants, 1 engine, and 2 transmissions option: Manual and Automatic in the Philippines. It has a ground clearance of 210 mm and dimensions is 3650 mm L x 1645 mm W x 1725 mm H. Over 62 users have reviewed Jimny on basis of Features, Mileage, seating comfort, and engine performance. ', 1300000),
(9, 'Mitsubishi Mirage G4', 'Also known as Mitsubishi Attrage in some markets, the Mitsubishi Mirage G4 is the sedan version of the second facelifted sixth-generation Mitsubishi Mirage hatchback. This particular entry-level sedan from Mitsubishi is offered in four variants: GLX MT, GLX CVT, GLS CVT, and GLS Sport CVT. The Mitsubishi Mirage G4 comes with a single petrol engine as the standard powertrain. ', 770000),
(10, 'Chevrolet Captiva 2024', 'Chevrolet Captiva price in Philippines start from ₱1.258 Million for base variant LTZ and goes upto ₱1.408 Million for top-spec variant. Captiva available in total 2 variants. Chevrolet Captiva price for automatic version starts from ₱1.258 Million. Checkout Captiva 2024 price list below to see the SRP prices and promos available.', 1300000);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `oder_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_qty` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`oder_id`, `item_id`, `item_qty`, `customer_id`) VALUES
(1, 10, 1, 1),
(2, 6, 1, 6),
(3, 1, 6, 2),
(4, 2, 1, 5),
(5, 4, 1, 8),
(6, 8, 1, 10),
(7, 2, 2, 3),
(8, 9, 1, 4),
(9, 10, 3, 7),
(10, 6, 2, 9);

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `ua_id` int(11) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`ua_id`, `username`, `password`) VALUES
(1, 'Dazzly Moneda', 'M0n3d4_verystrongpw881123'),
(2, 'Alodia Gosiengfiao', 'Al0di@2024!'),
(3, 'Efphraim Bonpagni', 'Cho0x!GG23'),
(4, 'Eric Tai', 'Erict@i2024$'),
(5, 'Lincoln Velasquez', 'C0ng!Play22'),
(6, 'Dexie Diaz', 'Dexie@Diaz99'),
(7, 'Ashley Gosia', 'Ashl3yTV#\r\n\r\n'),
(8, 'Myrtle Sarrosa', 'M!rtleGeek21'),
(9, 'Marlon Velasquez', 'JunnieBoy#1!'),
(10, 'Bianco Yao', 'Bianca@1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_contact_info`
--
ALTER TABLE `customer_contact_info`
  ADD PRIMARY KEY (`CCI_id`),
  ADD KEY `cus1-constrait` (`customer_id`);

--
-- Indexes for table `customer_profile`
--
ALTER TABLE `customer_profile`
  ADD PRIMARY KEY (`customer_id`),
  ADD KEY `ua2-id` (`ua_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`oder_id`),
  ADD KEY `item-constrait` (`item_id`),
  ADD KEY `customer-constrait` (`customer_id`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`ua_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_contact_info`
--
ALTER TABLE `customer_contact_info`
  MODIFY `CCI_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer_profile`
--
ALTER TABLE `customer_profile`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `oder_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `ua_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer_contact_info`
--
ALTER TABLE `customer_contact_info`
  ADD CONSTRAINT `cus1-constrait` FOREIGN KEY (`customer_id`) REFERENCES `customer_profile` (`customer_id`);

--
-- Constraints for table `customer_profile`
--
ALTER TABLE `customer_profile`
  ADD CONSTRAINT `ua2-id` FOREIGN KEY (`ua_id`) REFERENCES `user_account` (`ua_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `customer-constrait` FOREIGN KEY (`customer_id`) REFERENCES `customer_profile` (`customer_id`),
  ADD CONSTRAINT `item-constrait` FOREIGN KEY (`item_id`) REFERENCES `items` (`item_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
