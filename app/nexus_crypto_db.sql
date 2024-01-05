-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2024 at 01:16 PM
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
-- Database: `nexus_crypto_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `crypto`
--

CREATE TABLE `crypto` (
  `CryptoID` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Slug` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `crypto`
--

INSERT INTO `crypto` (`CryptoID`, `Name`, `Slug`) VALUES
(1, 'BTC', 'BTC'),
(2, 'Etheruim', 'ETH');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `NotificationID` int(11) NOT NULL,
  `UserID` int(11) DEFAULT NULL,
  `Message` text DEFAULT NULL,
  `NotificationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `Seen` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `TransactionID` int(11) NOT NULL,
  `UserIDSender` int(11) DEFAULT NULL,
  `UserIDRecipient` int(11) DEFAULT NULL,
  `CryptoID` int(11) DEFAULT NULL,
  `Type` varchar(10) DEFAULT NULL,
  `Quantity` decimal(20,4) DEFAULT NULL,
  `TransactionDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `DateOfBirth` date DEFAULT NULL,
  `NexusID` varchar(50) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `solde` int(11) DEFAULT 500,
  `verification_code` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `FirstName`, `LastName`, `DateOfBirth`, `NexusID`, `Email`, `Password`, `solde`, `verification_code`) VALUES
(2, 'Emi', 'Raymond', '2014-08-13', '916878', 'xykozafi@mailinator.com', '$2y$10$hdMKoNJqJKNNpcUYkBQWnuH8YamUbqc8KlePsFJ/rx/PqSa/BTPru', 500, NULL),
(3, 'mouad', 'toto', '1222-12-12', '330118', 'mauadtoto001@gmail.com', '$2y$10$q9JFFrFOXDfK73TrwYuFJuCwFf4jiasDhvxM5EzYevZwFGu8qwCmC', 500, '359101');

-- --------------------------------------------------------

--
-- Table structure for table `wallet`
--

CREATE TABLE `wallet` (
  `WalletID` int(11) NOT NULL,
  `UserID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wallet`
--

INSERT INTO `wallet` (`WalletID`, `UserID`) VALUES
(1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `wallet_elements`
--

CREATE TABLE `wallet_elements` (
  `Element_ID` int(11) NOT NULL,
  `WalletID` int(11) DEFAULT NULL,
  `CryptoID` int(11) DEFAULT NULL,
  `Quantity` decimal(20,2) DEFAULT NULL,
  `Element_name` varchar(255) DEFAULT NULL,
  `Element_price` int(11) DEFAULT NULL,
  `Element_rank` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wallet_elements`
--

INSERT INTO `wallet_elements` (`Element_ID`, `WalletID`, `CryptoID`, `Quantity`, `Element_name`, `Element_price`, `Element_rank`) VALUES
(1, 1, 1, 2.00, 'BTC', 4000, 1),
(2, 1, 2, 2.00, 'Etheruim', 1000, 2);

-- --------------------------------------------------------

--
-- Table structure for table `watchlist`
--

CREATE TABLE `watchlist` (
  `WatchlistID` int(11) NOT NULL,
  `UserID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `watchlist_elements`
--

CREATE TABLE `watchlist_elements` (
  `Element_ID` int(11) NOT NULL,
  `WatchlistID` int(11) DEFAULT NULL,
  `CryptoID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crypto`
--
ALTER TABLE `crypto`
  ADD PRIMARY KEY (`CryptoID`),
  ADD UNIQUE KEY `Slug` (`Slug`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`NotificationID`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`TransactionID`),
  ADD KEY `UserIDSender` (`UserIDSender`),
  ADD KEY `UserIDRecipient` (`UserIDRecipient`),
  ADD KEY `CryptoID` (`CryptoID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `NexusID` (`NexusID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `wallet`
--
ALTER TABLE `wallet`
  ADD PRIMARY KEY (`WalletID`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `wallet_elements`
--
ALTER TABLE `wallet_elements`
  ADD PRIMARY KEY (`Element_ID`),
  ADD KEY `WalletID` (`WalletID`),
  ADD KEY `CryptoID` (`CryptoID`);

--
-- Indexes for table `watchlist`
--
ALTER TABLE `watchlist`
  ADD PRIMARY KEY (`WatchlistID`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `watchlist_elements`
--
ALTER TABLE `watchlist_elements`
  ADD PRIMARY KEY (`Element_ID`),
  ADD KEY `WatchlistID` (`WatchlistID`),
  ADD KEY `CryptoID` (`CryptoID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crypto`
--
ALTER TABLE `crypto`
  MODIFY `CryptoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `NotificationID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `TransactionID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wallet`
--
ALTER TABLE `wallet`
  MODIFY `WalletID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wallet_elements`
--
ALTER TABLE `wallet_elements`
  MODIFY `Element_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `watchlist`
--
ALTER TABLE `watchlist`
  MODIFY `WatchlistID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `watchlist_elements`
--
ALTER TABLE `watchlist_elements`
  MODIFY `Element_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`);

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`UserIDSender`) REFERENCES `users` (`UserID`),
  ADD CONSTRAINT `transactions_ibfk_2` FOREIGN KEY (`UserIDRecipient`) REFERENCES `users` (`UserID`),
  ADD CONSTRAINT `transactions_ibfk_3` FOREIGN KEY (`CryptoID`) REFERENCES `crypto` (`CryptoID`);

--
-- Constraints for table `wallet`
--
ALTER TABLE `wallet`
  ADD CONSTRAINT `wallet_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`);

--
-- Constraints for table `wallet_elements`
--
ALTER TABLE `wallet_elements`
  ADD CONSTRAINT `wallet_elements_ibfk_1` FOREIGN KEY (`WalletID`) REFERENCES `wallet` (`WalletID`),
  ADD CONSTRAINT `wallet_elements_ibfk_2` FOREIGN KEY (`CryptoID`) REFERENCES `crypto` (`CryptoID`);

--
-- Constraints for table `watchlist`
--
ALTER TABLE `watchlist`
  ADD CONSTRAINT `watchlist_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`);

--
-- Constraints for table `watchlist_elements`
--
ALTER TABLE `watchlist_elements`
  ADD CONSTRAINT `watchlist_elements_ibfk_1` FOREIGN KEY (`WatchlistID`) REFERENCES `watchlist` (`WatchlistID`),
  ADD CONSTRAINT `watchlist_elements_ibfk_2` FOREIGN KEY (`CryptoID`) REFERENCES `crypto` (`CryptoID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
