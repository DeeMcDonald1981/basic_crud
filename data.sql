-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2025 at 01:11 AM
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
-- Database: `online_shop`
--

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productid`, `productcategoryid`, `SupplierID`, `productname`, `netretailprice`, `availablequantity`, `wholesaleprice`, `unitkgweight`, `notes`) VALUES
(1, 5, 2, 'Calculatre', '$24.99', 100, '$17.99', 1.00, 'calculation application');
INSERT INTO `products` (`productid`, `productcategoryid`, `SupplierID`, `productname`, `netretailprice`, `availablequantity`, `wholesaleprice`, `unitkgweight`, `notes`) VALUES
(2, 5, 5, 'Penwrite', '$79.99', 27, '$49.99', 2.00, 'word processing product');
INSERT INTO `products` (`productid`, `productcategoryid`, `SupplierID`, `productname`, `netretailprice`, `availablequantity`, `wholesaleprice`, `unitkgweight`, `notes`) VALUES
(3, 1, 6, 'Vortex Generator', '$2,499.99', 1000, '$1,999.99', 0.01, 'space engine component');
INSERT INTO `products` (`productid`, `productcategoryid`, `SupplierID`, `productname`, `netretailprice`, `availablequantity`, `wholesaleprice`, `unitkgweight`, `notes`) VALUES
(4, 1, 6, 'The Gourmet Crockpot', '$24.99', 72, '$19.99', 1.63, 'cookbook');
INSERT INTO `products` (`productid`, `productcategoryid`, `SupplierID`, `productname`, `netretailprice`, `availablequantity`, `wholesaleprice`, `unitkgweight`, `notes`) VALUES
(5, 1, 6, 'Government Accounting', '$14.99', 26, '$9.99', 1.22, 'government accounting book');
INSERT INTO `products` (`productid`, `productcategoryid`, `SupplierID`, `productname`, `netretailprice`, `availablequantity`, `wholesaleprice`, `unitkgweight`, `notes`) VALUES
(6, 3, 6, 'habanero peppers', '$4.49', 189, '$2.99', 0.01, 'hot peppers');
INSERT INTO `products` (`productid`, `productcategoryid`, `SupplierID`, `productname`, `netretailprice`, `availablequantity`, `wholesaleprice`, `unitkgweight`, `notes`) VALUES
(7, 2, 1, '10-mm socket wrench', '$3.49', 39, '$1.89', 0.02, 'important tool');
INSERT INTO `products` (`productid`, `productcategoryid`, `SupplierID`, `productname`, `netretailprice`, `availablequantity`, `wholesaleprice`, `unitkgweight`, `notes`) VALUES
(8, 3, 4, 'tomato sauce', '$1.19', 1509, '$0.89', 0.23, 'bottled in glass');
INSERT INTO `products` (`productid`, `productcategoryid`, `SupplierID`, `productname`, `netretailprice`, `availablequantity`, `wholesaleprice`, `unitkgweight`, `notes`) VALUES
(9, 1, 6, 'pure vanilla', '$10.39', 1509, '$7.89', 0.03, 'high-quality vanilla');
INSERT INTO `products` (`productid`, `productcategoryid`, `SupplierID`, `productname`, `netretailprice`, `availablequantity`, `wholesaleprice`, `unitkgweight`, `notes`) VALUES
(11, 4, 6, 'Decorative LED Neon Sign', '$438595.49', 42, '$293992.38', 928.00, 'Bright, vibrant sign to add flair to any space.');
INSERT INTO `products` (`productid`, `productcategoryid`, `SupplierID`, `productname`, `netretailprice`, `availablequantity`, `wholesaleprice`, `unitkgweight`, `notes`) VALUES
(12, 5, 6, 'Shower Curtain Hooks', '$388087.10', 452, '$318259.19', 937.00, 'Stylish hooks to easily hang shower curtains.');
INSERT INTO `products` (`productid`, `productcategoryid`, `SupplierID`, `productname`, `netretailprice`, `availablequantity`, `wholesaleprice`, `unitkgweight`, `notes`) VALUES
(13, 5, 4, 'Coconut Cream Pie', '$34172.73', 930, '$279355.68', 587.00, 'Delicious pie filled with coconut cream and topped with whipped cream.');
INSERT INTO `products` (`productid`, `productcategoryid`, `SupplierID`, `productname`, `netretailprice`, `availablequantity`, `wholesaleprice`, `unitkgweight`, `notes`) VALUES
(14, 3, 4, 'Crafting Kit', '$149394.43', 273, '$432905.38', 854.00, 'Complete crafting kit for kids and adults.');
INSERT INTO `products` (`productid`, `productcategoryid`, `SupplierID`, `productname`, `netretailprice`, `availablequantity`, `wholesaleprice`, `unitkgweight`, `notes`) VALUES
(15, 5, 1, 'Classic Baseball Cap', '$92341.73', 719, '$61144.83', 182.00, 'A timeless baseball cap that adds a sporty touch to any outfit.');
INSERT INTO `products` (`productid`, `productcategoryid`, `SupplierID`, `productname`, `netretailprice`, `availablequantity`, `wholesaleprice`, `unitkgweight`, `notes`) VALUES
(16, 2, 5, 'Bluetooth Tracker', '$429194.87', 561, '$200264.72', 572.00, 'Smart tracker to locate keys or other items via app.');
INSERT INTO `products` (`productid`, `productcategoryid`, `SupplierID`, `productname`, `netretailprice`, `availablequantity`, `wholesaleprice`, `unitkgweight`, `notes`) VALUES
(17, 2, 6, 'Spinach Pizza Rolls', '$87334.94', 1485, '$480000.76', 470.00, 'Frozen pizza rolls stuffed with spinach and cheese, perfect for snacking.');
INSERT INTO `products` (`productid`, `productcategoryid`, `SupplierID`, `productname`, `netretailprice`, `availablequantity`, `wholesaleprice`, `unitkgweight`, `notes`) VALUES
(18, 6, 5, 'Chocolate Hazelnut Granola', '$161694.62', 1216, '$4768.90', 562.00, 'Crunchy granola with chocolate and hazelnuts for breakfast.');
INSERT INTO `products` (`productid`, `productcategoryid`, `SupplierID`, `productname`, `netretailprice`, `availablequantity`, `wholesaleprice`, `unitkgweight`, `notes`) VALUES
(19, 4, 4, 'Cotton Sweatpants', '$407863.87', 957, '$352310.21', 113.00, 'Soft and breathable cotton sweatpants perfect for lounging or workouts.');
INSERT INTO `products` (`productid`, `productcategoryid`, `SupplierID`, `productname`, `netretailprice`, `availablequantity`, `wholesaleprice`, `unitkgweight`, `notes`) VALUES
(20, 1, 5, 'Avocado Lime Dressing', '$354054.61', 776, '$147565.87', 307.00, 'Refreshing dressing made with avocado and lime, perfect for salads.');
INSERT INTO `products` (`productid`, `productcategoryid`, `SupplierID`, `productname`, `netretailprice`, `availablequantity`, `wholesaleprice`, `unitkgweight`, `notes`) VALUES
(21, 2, 1, 'LED Table Lamp', '$281094.24', 515, '$260064.04', 336.00, 'Modern LED table lamp with touch control.');
INSERT INTO `products` (`productid`, `productcategoryid`, `SupplierID`, `productname`, `netretailprice`, `availablequantity`, `wholesaleprice`, `unitkgweight`, `notes`) VALUES
(22, 5, 3, 'Multicolored LED Strip Lights', '$75824.08', 162, '$196506.53', 106.00, 'Flexible LED lights for creative home lighting designs.');


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
