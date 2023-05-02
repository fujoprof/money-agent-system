-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2023 at 09:11 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scs`
--

-- --------------------------------------------------------

--
-- Table structure for table `cash`
--

CREATE TABLE `cash` (
  `id` int(11) NOT NULL,
  `amount` decimal(20,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cash`
--

INSERT INTO `cash` (`id`, `amount`) VALUES
(1, '4546955.30');

-- --------------------------------------------------------

--
-- Table structure for table `payment_gateways`
--

CREATE TABLE `payment_gateways` (
  `id` int(11) NOT NULL,
  `Gateway_Name` varchar(200) NOT NULL,
  `Initial_Capital` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_gateways`
--

INSERT INTO `payment_gateways` (`id`, `Gateway_Name`, `Initial_Capital`) VALUES
(1, 'TigoPesa', '192688.00'),
(2, 'Mpesa', '485617.00'),
(3, 'Airtel Money', '616200.00'),
(4, 'Halo Pesa', '290500.00'),
(5, 'CRDB', '1914000.00'),
(6, 'NMB', '0.00'),
(7, 'NBC', '907700.00'),
(8, 'TCB', '149000.00'),
(9, 'Selcom', '146000.00');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(200) NOT NULL,
  `Customer_Name` varchar(255) NOT NULL,
  `Transaction_Id` varchar(200) NOT NULL,
  `Transaction_Type` varchar(200) NOT NULL,
  `Amount` decimal(10,2) NOT NULL,
  `Transaction_Gateway` int(200) NOT NULL,
  `status` int(255) NOT NULL DEFAULT 1,
  `Sales_Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `Customer_Name`, `Transaction_Id`, `Transaction_Type`, `Amount`, `Transaction_Gateway`, `status`, `Sales_Date`) VALUES
(1, 'TOP LIFE BAR', '95341864269', 'Withdraw', '105000.00', 1, 1, '2023-04-27 00:00:00'),
(2, 'MIRIAM MSOFE', 'C1230427.1732005407', 'Deposit', '5000.00', 3, 1, '2023-04-27 00:00:00'),
(3, 'FLOT - BISHANGA', '37399591925', 'Withdraw', '500000.00', 1, 1, '2023-04-27 00:00:00'),
(4, 'HAMISI CLEMENT', '994170171717', 'Deposit', '200000.00', 5, 1, '2023-04-27 00:00:00'),
(5, 'FLAVIANA ', 'C1230427.1845.P2', 'Deposit', '5000.00', 3, 1, '2023-04-27 00:00:00'),
(6, 'J ZEFANIA', 'T006664820230427183851', 'Deposit', '6000.00', 8, 1, '2023-04-27 00:00:00'),
(7, 'DENIS MANASE', 'T006664820230428100010', 'Deposit', '2000.00', 8, 1, '2023-04-28 00:00:00'),
(8, 'EMMANUELA KIHINDO', '26198052058', 'Deposit', '55000.00', 1, 1, '2023-04-28 00:00:00'),
(9, 'LEONIDA SWAI', '77303420765', 'Withdraw', '20000.00', 1, 1, '2023-04-28 00:00:00'),
(10, 'FEDGRASE CHACHAC', '88820230428134624', 'Deposit', '2000.00', 8, 1, '2023-04-28 00:00:00'),
(11, 'SHABANI CHUMA', '22895499746', 'Deposit', '25000.00', 1, 1, '2023-04-28 00:00:00'),
(12, 'ALLY TWAHIRU', '1690989985', 'Deposit', '10000.00', 4, 1, '2023-04-28 00:00:00'),
(13, 'ALBERT SWAI', 'TX34GVFUSYW7Y', 'Deposit', '10000.00', 8, 1, '2023-04-28 00:00:00'),
(14, 'ALBERT SWAI', 'TX34GVFUSYW7Y', 'Deposit', '10000.00', 8, 1, '2023-04-28 00:00:00'),
(15, 'FUJO MWAPASHUA H', '9006231181853146166', 'Deposit', '5000.00', 9, 1, '2023-04-28 00:00:00'),
(16, 'Fujo Mwapashua H.', '688435746', 'Deposit', '1000.00', 3, 1, '2023-04-28 00:00:00'),
(17, 'FEEDTON GROUP', 'AB1682746714497028992', 'Deposit', '45000.00', 5, 1, '2023-04-29 00:00:00'),
(18, 'SHAI ABDALLAH', '1691944185', 'Deposit', '60000.00', 4, 1, '2023-04-29 00:00:00'),
(19, 'BRITHON URIO', '56143670583', 'Deposit', '5000.00', 1, 1, '2023-04-29 00:00:00'),
(20, 'Fujo Mwapashua H.', 'TX34GVFUSYW7Y', 'Deposit', '2000.00', 3, 1, '2023-04-29 00:00:00'),
(21, 'GOERGE SIZYA', '0112095934700', 'Deposit', '15000.00', 5, 1, '2023-04-28 00:00:00'),
(22, 'Fujo Mwapashua H.', 'TX34GVFUSYW7Y', 'Deposit', '66000.00', 8, 1, '2023-04-29 00:00:00'),
(23, 'ESTA LIMO', '9006231191011182679', 'Deposit', '5000.00', 9, 1, '2023-04-29 00:00:00'),
(24, 'Fujo Mwapashua H.', 'AB16827591230055337267', 'Deposit', '150000.00', 5, 1, '2023-04-29 00:00:00'),
(25, 'Fujo Mwapashua H.', 'AB16827591230055337267', 'Deposit', '200000.00', 5, 0, '2023-04-29 00:00:00'),
(26, 'Fujo Mwapashua H.', '270238000105', 'Withdraw', '500000.00', 8, 1, '2023-04-29 00:00:00'),
(27, 'ZIADA ', '0626194463', 'Deposit', '1000.00', 9, 1, '2023-04-29 00:00:00'),
(28, 'Fujo Mwapashua H.', '0626195696', 'Deposit', '1000.00', 9, 1, '2023-04-29 00:00:00'),
(29, 'Fujo Mwapashua H.', '16194822638', 'Deposit', '30000.00', 1, 0, '2023-04-29 00:00:00'),
(30, 'GASPA MAKILUKI', '0626311967', 'Deposit', '5000.00', 9, 1, '2023-04-29 00:00:00'),
(31, 'JOSEPH TUMAINI', '991631506237', 'Deposit', '20800.00', 9, 1, '2023-04-29 00:00:00'),
(32, 'SALIMU MUNISI', '0152391201200', 'Deposit', '80000.00', 5, 1, '2023-04-29 00:00:00'),
(33, 'Fujo Mwapashua H.', 'AB16827753485862764597', 'Deposit', '335000.00', 5, 1, '2023-04-29 00:00:00'),
(34, 'Fujo Mwapashua H.', 'AB16827760747777873388', 'Deposit', '30000.00', 5, 0, '2023-04-29 00:00:00'),
(35, 'ESTA LIMO', '0626371712', 'Deposit', '5000.00', 9, 1, '2023-04-29 00:00:00'),
(36, 'ESTA LIMO', '0626372981', 'Deposit', '1000.00', 8, 1, '2023-04-29 00:00:00'),
(37, 'EMMANUELA KIHINDO', '47322630140', 'Deposit', '88000.00', 1, 1, '2023-04-29 00:00:00'),
(38, 'MASAMTULA  KUSAMILA', '76107913168', 'Withdraw', '18000.00', 1, 1, '2023-04-29 00:00:00'),
(39, 'SABANI CHUMA', '47322571790', 'Deposit', '10000.00', 1, 1, '2023-04-29 00:00:00'),
(40, 'HEMEDI MSUYA', 'C0230429.1844.N28332', 'Withdraw', '190000.00', 3, 1, '2023-04-29 00:00:00'),
(41, 'BENJAMENI ISAAY', 'CI230430.1130.Q05240', 'Deposit', '530000.00', 3, 1, '2023-04-30 00:00:00'),
(42, 'Fujo Mwapashua H.', 'TX34GVFUSYW7Y', 'Withdraw', '50000.00', 5, 1, '2023-04-30 00:00:00'),
(43, 'EMANUEL MASSAWE', '76921595962', 'Withdraw', '129000.00', 1, 1, '2023-04-30 00:00:00'),
(44, 'Fujo Mwapashua H.', 'CI230430.1354.035546', 'Deposit', '5000.00', 3, 0, '2023-04-30 00:00:00'),
(45, 'FEDRICK ULOMI', 'TX34GVFUSYW7Y', 'Deposit', '23000.00', 9, 1, '2023-04-30 00:00:00'),
(46, 'ASSEY', 'TX34GVFUSYW7Y', 'Deposit', '4000.00', 9, 1, '2023-04-30 00:00:00'),
(47, 'DEVOTA SWAI', '92807166226', 'Deposit', '40000.00', 1, 1, '2023-04-30 00:00:00'),
(48, 'MONICA  SANA', 'CO230430.1503.073861', 'Withdraw', '373000.00', 3, 1, '2023-04-30 00:00:00'),
(49, 'MONICA  SANA', 'CO230430.1523.N76007', 'Withdraw', '248000.00', 3, 1, '2023-04-30 00:00:00'),
(51, 'STEPHEN NGOLOPE SANA', 'AB16828582154108821924', 'Deposit', '499732.70', 5, 1, '2023-04-30 00:00:00'),
(52, 'Fujo Mwapashua H.', 'AB16828582154108821924', 'Deposit', '105000.00', 5, 1, '2023-04-01 00:00:00'),
(56, 'ESTA LIMO', '953418642695', 'Deposit', '269000.00', 8, 1, '2023-04-30 00:00:00'),
(57, 'INNOCENT U MUSHI', 'T006664820230430170221', 'Deposit', '2000.00', 8, 1, '2023-04-30 00:00:00'),
(58, 'CHRISTINA L KAWA', 'T006664820230430174034', 'Deposit', '2500.00', 8, 1, '2023-04-30 00:00:00'),
(59, 'Fujo Mwapashua H.', 'AB16828660674416153342', 'Deposit', '25000.00', 5, 1, '2023-04-30 00:00:00'),
(60, 'BALTAZARI JOSEPH MROSO', '270209000140', 'Deposit', '35000.00', 8, 1, '2023-04-30 00:00:00'),
(61, 'ESTER LYMO', 'TX34GVFUSYW7Y', 'Deposit', '5000.00', 7, 1, '2023-05-01 00:00:00'),
(62, 'HASSAN SHESHE', 'CI230501.0926.M74648', 'Deposit', '48000.00', 3, 1, '2023-05-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `wallets`
--

CREATE TABLE `wallets` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `E_Wallet` decimal(10,2) NOT NULL,
  `Cash_Wallet` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wallets`
--

INSERT INTO `wallets` (`id`, `pid`, `E_Wallet`, `Cash_Wallet`) VALUES
(1, 1, '192688.00', '1522000.00'),
(2, 2, '485617.00', '1522000.00'),
(3, 3, '616200.00', '1522000.00'),
(4, 4, '290500.00', '1522000.00'),
(5, 5, '1914000.00', '1000000.00'),
(6, 6, '0.00', '1000000.00'),
(7, 7, '907700.00', '1522000.00'),
(8, 8, '146000.00', '1000000.00'),
(9, 9, '146000.00', '0.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cash`
--
ALTER TABLE `cash`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_gateways`
--
ALTER TABLE `payment_gateways`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wallets`
--
ALTER TABLE `wallets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cash`
--
ALTER TABLE `cash`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment_gateways`
--
ALTER TABLE `payment_gateways`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `wallets`
--
ALTER TABLE `wallets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
