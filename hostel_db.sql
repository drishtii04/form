

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `complaints` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `room` varchar(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `ctype` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO `complaints` (`id`, `name`, `room`, `date`, `ctype`, `description`) VALUES
(40, 'drishti', '313', NULL, 'Electricity Issue', 'bbb'),
(41, 'Mannu', '313', NULL, 'Electricity Issue', 'ccc'),
(42, 'drishti', '322', NULL, 'Electricity Issue', 'hello'),
(43, 'drishti', '322', NULL, 'Electricity Issue', 'hii'),
(44, 'drishti', '123', NULL, 'Electricity Issue', 'www'),
(45, 'Mannu', '313', NULL, 'Water Issue', 'wwq'),
(46, 'Mannu', '313', NULL, 'Water Issue', 'wwq'),
(47, 'Mannu', '313', NULL, 'Water Issue', 'wwq'),
(48, 'drishti', '123', '2025-12-06', 'Food Complaint', 'ggg'),
(49, 'drishti', '322', '2025-12-06', 'Electricity Issue', 'drishti'),
(50, 'drishti', '322', '2025-12-06', 'Electricity Issue', 'drishti'),
(51, 'drishti', '77', '2025-12-06', 'Food Complaint', 'no salt'),
(52, 'drishti', '77', '2025-12-06', 'Food Complaint', 'no salt'),
(53, 'drishti', '77', '2025-12-06', 'Food Complaint', 'no salt'),
(54, 'drishti', '77', '2025-12-06', 'Food Complaint', 'no salt'),
(55, 'Mannu', '88', '2025-12-06', 'Cleanliness', 'jj'),
(56, 'Mannu', '88', '2025-12-06', 'Cleanliness', 'jj'),
(57, 'Mannu', '88', '2025-12-06', 'Cleanliness', 'jj'),
(58, 'Drishti Arya', '323', '2025-12-07', 'Cleanliness', 'dirtyy'),
(59, 'Mannu', '322', '2025-12-08', 'Water Issue', 'not clean'),
(60, 'keerti', '313', '2025-12-08', 'Cleanliness', 'dirt');


ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `complaints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;


