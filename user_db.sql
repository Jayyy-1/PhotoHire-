-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2024 at 02:06 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `event_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `booking_services`
--

CREATE TABLE `booking_services` (
  `id` int(11) NOT NULL,
  `booking_id` int(11) DEFAULT NULL,
  `service` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `notification_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `is_read` tinyint(1) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `notification_type` enum('admin','user') DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`notification_id`, `user_id`, `message`, `is_read`, `created_at`, `notification_type`) VALUES
(1, 1, 'Your payment is pending.', 0, '2024-11-05 17:03:34', 'user'),
(2, 1, 'A new payment is pending approval.', 1, '2024-11-05 17:03:34', 'admin'),
(3, 1, 'Your payment is pending.', 0, '2024-11-05 17:04:18', 'user'),
(4, 1, 'A new payment is pending approval.', 1, '2024-11-05 17:04:18', 'admin'),
(5, 1, 'Your payment has been completed successfully.', 0, '2024-11-05 17:11:07', 'user'),
(6, 1, 'Your payment has been completed successfully.', 0, '2024-11-05 17:11:39', 'user'),
(7, 1, 'Your payment is pending.', 0, '2024-11-05 17:14:20', 'user'),
(8, 1, 'A new payment is pending approval.', 1, '2024-11-05 17:14:21', 'admin'),
(9, 1, 'Your payment is pending.', 0, '2024-11-05 17:21:23', 'user'),
(10, 1, 'A new payment is pending approval.', 1, '2024-11-05 17:21:23', 'admin'),
(11, 1, 'Your payment is pending.', 0, '2024-11-05 17:28:22', 'user'),
(12, 1, 'A new payment is pending approval.', 1, '2024-11-05 17:28:22', 'admin'),
(13, 1, 'Payment approved successfully.', 1, '2024-11-05 17:45:54', 'admin'),
(14, 1, 'Payment approved successfully.', 1, '2024-11-05 17:46:07', 'admin'),
(15, 1, 'Your payment is pending.', 0, '2024-11-05 17:48:04', 'user'),
(16, 1, 'A new payment is pending approval.', 1, '2024-11-05 17:48:04', 'admin'),
(17, 6, 'Payment approved successfully.', 1, '2024-11-05 17:48:25', 'admin'),
(18, 6, 'Payment approved successfully.', 1, '2024-11-05 17:48:29', 'admin'),
(19, 1, 'Payment approved successfully.', 1, '2024-11-05 17:48:30', 'admin'),
(20, 6, 'Payment approved successfully.', 1, '2024-11-05 17:48:38', 'admin'),
(21, 1, 'Your payment is pending.', 0, '2024-11-05 17:50:44', 'user'),
(22, 1, 'A new payment is pending approval.', 1, '2024-11-05 17:50:44', 'admin'),
(23, 1, 'Your payment is pending.', 0, '2024-11-05 17:52:56', 'user'),
(24, 1, 'A new payment is pending approval.', 1, '2024-11-05 17:52:56', 'admin'),
(25, 1, 'Your payment is pending.', 0, '2024-11-05 18:00:29', 'user'),
(26, 1, 'A new payment is pending approval.', 1, '2024-11-05 18:00:29', 'admin'),
(27, 1, 'Your payment is pending.', 0, '2024-11-06 03:32:00', 'user'),
(28, 1, 'A new payment is pending approval.', 1, '2024-11-06 03:32:00', 'admin'),
(29, 1, 'Your payment is pending.', 0, '2024-11-06 03:39:43', 'user'),
(30, 1, 'A new payment is pending approval.', 1, '2024-11-06 03:39:43', 'admin'),
(31, 1, 'Your payment of 1234 via gcash is pending.', 0, '2024-11-06 03:43:25', 'user'),
(32, 1, 'A new payment of 1234 via gcash is pending approval from user jay@gmail.com.', 1, '2024-11-06 03:43:25', 'admin'),
(33, 1, 'Your payment of 1234 via gcash is pending.', 0, '2024-11-06 03:43:54', 'user'),
(34, 1, 'A new payment of 1234 via gcash is pending approval from user jay@gmail.com.', 1, '2024-11-06 03:43:54', 'admin'),
(35, 1, 'Your payment of 2899 via gcash is pending.', 0, '2024-11-06 03:48:55', 'user'),
(36, 1, 'A new payment of 2899 via gcash is pending approval from user jay@gmail.com.', 1, '2024-11-06 03:48:55', 'admin'),
(37, 1, 'Your payment of 2899 via gcash is pending.', 0, '2024-11-07 15:29:27', 'user'),
(38, 1, 'A new payment of 2899 via gcash is pending approval from user jay@gmail.com.', 1, '2024-11-07 15:29:27', 'admin'),
(39, 1, 'Your payment of 122 via paymaya is pending.', 0, '2024-11-07 15:35:07', 'user'),
(40, 1, 'A new payment of 122 via paymaya is pending approval from user jay@gmail.com.', 1, '2024-11-07 15:35:07', 'admin'),
(41, 3, 'Your payment of 1010 via paymaya is pending.', 0, '2024-11-15 09:29:35', 'user'),
(42, 3, 'A new payment of 1010 via paymaya is pending approval from user kurt@gmail.com.', 1, '2024-11-15 09:29:35', 'admin'),
(43, 1, 'Your payment of 2899 via gcash is pending.', 0, '2024-11-16 04:33:56', 'user'),
(44, 1, 'A new payment of 2899 via gcash is pending approval from user jay@gmail.com.', 1, '2024-11-16 04:33:56', 'admin'),
(45, NULL, 'New booking received from harold for 18th birthday on 2024-11-30', 1, '2024-11-19 10:18:13', 'admin'),
(46, NULL, 'New booking received from harold for 18th birthday on 2024-11-30', 1, '2024-11-19 10:18:19', 'admin'),
(47, NULL, 'New booking received from harold for 18th birthday on 2024-11-30', 1, '2024-11-19 10:19:54', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `amount` decimal(10,2) NOT NULL,
  `payment_status` enum('completed') DEFAULT NULL,
  `payment_method` varchar(50) DEFAULT NULL,
  `payment_date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `user_id`, `amount`, `payment_status`, `payment_method`, `payment_date`) VALUES
(18, 1, 2899.00, '', 'gcash', '2024-11-16 12:33:56');

-- --------------------------------------------------------

--
-- Table structure for table `photobooking`
--

CREATE TABLE `photobooking` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `event_date` date NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `payment` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_number` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `celebrant_name` varchar(100) NOT NULL,
  `event_type` varchar(100) NOT NULL,
  `venue` varchar(255) NOT NULL,
  `theme` varchar(100) DEFAULT NULL,
  `services` varchar(255) DEFAULT NULL,
  `custom_notes` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('pending','approved','rejected') DEFAULT 'pending',
  `package` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `photobooking`
--

INSERT INTO `photobooking` (`id`, `user_id`, `event_date`, `customer_name`, `amount`, `payment`, `email`, `contact_number`, `address`, `celebrant_name`, `event_type`, `venue`, `theme`, `services`, `custom_notes`, `created_at`, `status`, `package`) VALUES
(53, 1, '2024-11-29', 'Jay', 0.00, 'Pending', 'jay@gmail.com', '09123456723', 'san fernando', 'Jay.com', '18th birthday', 'san fernando', 'BEN 10', '[\"Drone Coverage\"]', 'hii harvy', '2024-11-19 11:05:06', 'pending', 'Custom Package'),
(54, 2, '2024-11-30', 'aldrey', 0.00, 'Pending', 'aldrey@gmail.com', '09123456778', 'san fernando', 'ALROSE', 'WEDDING', 'lipa city', 'dora', '[\"Photo Album\"]', 'ALROSE 4 EVER', '2024-11-19 11:06:36', 'pending', 'Custom Package'),
(55, 3, '2024-12-01', 'kurt', 2899.00, 'Pending', 'kurt@gmail.com', '09123456778', 'san fernando', 'bayutog', 'birthday ni bulado', 'p7 malvar', 'rosas na blue', NULL, NULL, '2024-11-19 11:09:06', 'pending', 'Bronze I Package'),
(56, 4, '2024-12-02', 'marko', 5449.00, 'Pending', 'marko@gmail.com', '09876543219', 'sto tomas', 'Pogi ni Marko', '18th birthday', 'Sto tomas', 'Lilipad na sa ere', NULL, NULL, '2024-11-19 11:11:16', 'pending', 'Gold II Package');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `review_text` text NOT NULL,
  `rating` int(11) DEFAULT NULL CHECK (`rating` >= 1 and `rating` <= 5),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `user_name`, `review_text`, `rating`, `created_at`) VALUES
(8, 'Jay', 'LETSGO', 5, '2024-11-16 04:12:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `contact`, `password`) VALUES
(1, 'username', 'email@example.com', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(1, 'Jay', 'jay@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user'),
(2, 'aldrey', 'aldrey@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user'),
(3, 'kurt', 'kurt@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user'),
(4, 'marko', 'marko@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user'),
(5, 'harold', 'harold@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user'),
(10, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_services`
--
ALTER TABLE `booking_services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `booking_id` (`booking_id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`notification_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `photobooking`
--
ALTER TABLE `photobooking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booking_services`
--
ALTER TABLE `booking_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `photobooking`
--
ALTER TABLE `photobooking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking_services`
--
ALTER TABLE `booking_services`
  ADD CONSTRAINT `booking_services_ibfk_1` FOREIGN KEY (`booking_id`) REFERENCES `bookings` (`id`);

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
