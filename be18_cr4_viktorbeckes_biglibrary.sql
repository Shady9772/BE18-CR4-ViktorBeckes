-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2023 at 12:12 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `be18_cr4_viktorbeckes_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `be18_cr4_viktorbeckes_biglibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `be18_cr4_viktorbeckes_biglibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `ISBN` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `short_des` varchar(300) DEFAULT NULL,
  `type` varchar(30) NOT NULL,
  `author_fn` varchar(50) NOT NULL,
  `author_ln` varchar(50) NOT NULL,
  `publisher` varchar(50) DEFAULT NULL,
  `pub_adress` varchar(60) DEFAULT NULL,
  `pub_date` date NOT NULL,
  `status` varchar(30) DEFAULT NULL,
  `price` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`ISBN`, `title`, `image`, `short_des`, `type`, `author_fn`, `author_ln`, `publisher`, `pub_adress`, `pub_date`, `status`, `price`) VALUES
(18, 'Fifty shades of grey', 'grey.jpg', 'Fifty Shades of Grey is a 2011 erotic romance novel by British author E. L. James. It became the first instalment in the Fifty Shades novel series that follows the deepening relationship between a college graduate, Anastasia Steele, and a young business magnate, Christian Grey.', 'book', 'Erica', 'Mitchell', 'Vintage Books', '52 Vanderbilt Ave Suite 1501, New York, NY 10017, Vereinigte', '2011-06-20', 'avalable', '27.55'),
(21, 'Beginning Programming For Dummies', 'dummies.jpg', 'No surprises, this book is about the Java language for dummies. Java Core for beginners.', 'book', 'Wallace', 'Wang', 'IDG Books', 'R. Cidade de Castelo Branco N5 C1, 2660-020 Frielas, Portuga', '1991-10-01', 'avalable', '12.97'),
(24, 'The Eminem Show', 'eminemshow.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio sed nobis necessitatibus? Deleniti nam vero obcaecati dolor libero aperiam ducimus maiores minus adipisci iste inventore eius enim harum ad quaerat totam, tenetur magni nisi quis at dicta! Libero, modi consequuntur.', 'CD', 'Marshall Bruce', 'Mathers the 3', ' Aftermath', 'america', '2002-05-26', 'avalable', '29.99'),
(25, 'The Marshall Mathers LP', 'lp.jpg', '', 'CD', 'Marshall Bruce', 'Mathers the 3', 'Aftermath', 'somewhere', '2000-05-23', 'avalable', '41.99'),
(26, 'Get Rich or Die Tryin', '50.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio sed nobis necessitatibus? Deleniti nam vero obcaecati dolor libero aperiam ducimus maiores minus adipisci iste inventore eius enim harum ad quaerat totam, tenetur magni nisi quis at dicta! Libero, modi consequuntur.', 'CD', 'Curtis James', '', 'Shady Records', '', '2003-02-06', 'avalable', '38.99'),
(27, 'hangover', 'hangover.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio sed nobis necessitatibus? Deleniti nam vero obcaecati dolor libero aperiam ducimus maiores minus adipisci iste inventore eius enim harum ad quaerat totam, tenetur magni nisi quis at dicta! Libero, modi consequuntur.', 'DVD', 'Todd', 'Phillips', 'Todd Phillips', '2800 E Observatory Rd, Los Angeles, CA 90027, Vereinigte Sta', '2009-07-24', 'avalable', '0.00'),
(28, 'Straight Outta Compton', 'straightoutta.jpg', 'gangsters', 'DVD', 'F. Gary', 'Gary', 'F. Gary Gary', '2800 E Observatory Rd, Los Angeles, CA 90027, Vereinigte Sta', '2015-01-04', 'reserved', '5.99'),
(29, 'fight club', 'fightclub.jpg', '', 'DVD', 'David', 'Fincher', 'David Fincher', '2800 E Observatory Rd, Los Angeles, CA 90027, Vereinigte Sta', '1999-11-11', 'avalable', '55.14'),
(30, 'Dummy Data', 'something1.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio sed nobis necessitatibus? Deleniti nam vero obcaecati dolor libero aperiam ducimus maiores minus adipisci iste inventore eius enim harum ad quaerat totam, tenetur magni nisi quis at dicta! Libero, modi consequuntur.', 'DVD', 'Something', 'Someone', 'Shady Records', '', '1997-06-17', 'reserved', '999.99'),
(31, 'Random Data', 'harry.jpg', 'somrtignf coolLorem ipsum dolor sit amet consectetur adipisicing elit. Optio sed nobis necessitatibus? Deleniti nam vero obcaecati dolor libero aperiam ducimus maiores minus adipisci iste inventore eius enim harum ad quaerat totam, tenetur magni nisi quis at dicta! Libero, modi consequuntur.', 'CD', 'fair', '', 'herry', '', '2000-12-20', 'reserved', '100.01'),
(32, '', '', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio sed nobis necessitatibus? Deleniti nam vero obcaecati dolor libero aperiam ducimus maiores minus adipisci iste inventore eius enim harum ad quaerat totam, tenetur magni nisi quis at dicta! Libero, modi consequuntur.', 'CD', '', '', '', '', '0000-00-00', 'out of stock', '0.00'),
(36, 'omething', '', '', '', '', '', '', '', '0000-00-00', 'avalable', '0.00'),
(37, '', '', '', '', '', '', '', '', '0000-00-00', 'avalable', '0.00'),
(42, '', '', '', '', '', '', '', '', '2000-12-12', '', '0.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`ISBN`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `ISBN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
