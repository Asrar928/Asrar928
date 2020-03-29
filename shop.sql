-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 18, 2020 at 03:09 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE cart (
  id int(11) NOT NULL,
  p_id int(11) NOT NULL,
  user_id int(11) NOT NULL,
  price int(11) NOT NULL,
  address varchar(255) NOT NULL DEFAULT '0',
  phone int(11) NOT NULL DEFAULT 0,
  active int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cart`
--

INSERT INTO cart (id, p_id, user_id, price, address, phone, active) VALUES
(4, 2, 4, 30, 'asdfasdf', 4234234, 0),
(5, 3, 4, 25, 'asdfasdf', 4234234, 0),
(6, 3, 4, 25, 'asdfasdf', 4234234, 0),
(7, 4, 4, 34, 'asdfasdf', 4234234, 0),
(8, 3, 4, 25, 'asdfasdf', 4234234, 0),
(9, 1, 4, 20, 'asdfasdf', 4234234, 0),
(10, 3, 4, 25, 'asdfasdf', 4234234, 0),
(11, 3, 4, 25, 'asdfasdf', 4234234, 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE products (
  id int(11) NOT NULL,
  name varchar(255) NOT NULL,
  price int(11) NOT NULL,
  image varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO products (id, name, price, image) VALUES
(1, 'Bell Pepper', 20, '1584532631product-1.jpg'),
(2, 'Strawberry', 30, '1584532695product-2.jpg'),
(3, 'Green Beans', 25, '1584532710product-3.jpg'),
(4, 'Purple Cabbage', 34, '1584532728product-4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE users (
  id int(11) NOT NULL,
  name varchar(100) NOT NULL,
  email varchar(255) NOT NULL,
  password varchar(255) NOT NULL,
  role enum(user,admin) NOT NULL DEFAULT user
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO users (id, name, email, password, role) VALUES
(4, 'aseel', 'aseel@gmail.com', '$2y$10$vazpFuv4vKKp3XM.PZq35OqHTX..yYXXjNpxW6Va3k3hUBSYNXEUe', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE cart
  ADD PRIMARY KEY (id);

--
-- Indexes for table `products`
--
ALTER TABLE products
  ADD PRIMARY KEY (id);

--
-- Indexes for table `users`
--
ALTER TABLE users
  ADD PRIMARY KEY (id);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE cart
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE products
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE users
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
