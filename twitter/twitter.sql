-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2020 at 06:06 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `twitter`
--

-- --------------------------------------------------------

--
-- Table structure for table `seguidores`
--

CREATE TABLE `seguidores` (
  `id_seguidor` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `seguindo_id_usuario` int(11) NOT NULL,
  `data_registro` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seguidores`
--

INSERT INTO `seguidores` (`id_seguidor`, `id_usuario`, `seguindo_id_usuario`, `data_registro`) VALUES
(29, 1, 3, '2020-07-18 21:32:13'),
(30, 1, 7, '2020-07-18 21:32:28'),
(31, 1, 6, '2020-07-18 21:32:29'),
(32, 1, 5, '2020-07-18 21:32:30'),
(33, 1, 4, '2020-07-18 21:32:30'),
(34, 1, 2, '2020-07-18 21:32:40'),
(35, 3, 1, '2020-07-18 21:33:43'),
(36, 3, 2, '2020-07-18 21:33:51'),
(37, 8, 1, '2020-07-19 16:59:32'),
(38, 8, 2, '2020-07-19 17:02:50'),
(39, 8, 3, '2020-07-19 17:03:00'),
(40, 8, 4, '2020-07-19 17:03:01'),
(41, 1, 8, '2020-07-19 17:15:10');

-- --------------------------------------------------------

--
-- Table structure for table `tweet`
--

CREATE TABLE `tweet` (
  `id_tweet` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `tweet` varchar(140) NOT NULL,
  `data_inclusao` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tweet`
--

INSERT INTO `tweet` (`id_tweet`, `id_usuario`, `tweet`, `data_inclusao`) VALUES
(3, 1, 'Olá tudo bem?', '2020-07-17 23:19:33'),
(5, 7, 'Deus me ajude', '2020-07-18 15:14:28'),
(6, 7, 'Hello World', '2020-07-18 15:17:23'),
(7, 7, 'as', '2020-07-18 15:18:03'),
(8, 7, 'amem', '2020-07-18 15:18:38'),
(9, 7, 'oi seguimores', '2020-07-18 15:34:24'),
(13, 1, 'oi', '2020-07-18 22:23:44'),
(14, 1, 'hehe', '2020-07-19 16:32:28'),
(16, 1, 'funfou', '2020-07-19 17:14:55'),
(17, 8, 'ola seguimores', '2020-07-19 17:15:39');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `email`, `senha`) VALUES
(1, 'deborinha', 'debora@gmail.com', '202cb962ac59075b964b07152d234b70'),
(2, 'vitinho', 'victor@debora.com', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 'nina', 'nina@nina.com', '202cb962ac59075b964b07152d234b70'),
(4, 'babi', 'babi@babi.com', 'e10adc3949ba59abbe56e057f20f883e'),
(5, 'Mariana', 'mariana@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710'),
(6, 'fabiana', 'fabiana@gmail.com', 'b64153305da0e0b8997ae9cb999ad7af'),
(7, 'ana', 'ana@gmail.com', '276b6c4692e78d4799c12ada515bc3e4'),
(8, 'vitu', 'vitu@ninao.com', '52d51bde22c706ef43ac7eda3b8eb80e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `seguidores`
--
ALTER TABLE `seguidores`
  ADD PRIMARY KEY (`id_seguidor`);

--
-- Indexes for table `tweet`
--
ALTER TABLE `tweet`
  ADD PRIMARY KEY (`id_tweet`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `seguidores`
--
ALTER TABLE `seguidores`
  MODIFY `id_seguidor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tweet`
--
ALTER TABLE `tweet`
  MODIFY `id_tweet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
