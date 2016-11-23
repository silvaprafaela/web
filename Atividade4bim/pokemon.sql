-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 22-Nov-2016 às 23:09
-- Versão do servidor: 5.7.16-0ubuntu0.16.04.1
-- PHP Version: 7.0.8-0ubuntu0.16.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pokemon`
--
CREATE DATABASE IF NOT EXISTS `pokemon` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `pokemon`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('0711501cf3682b972a20d6f94de548bf77dc1028', '127.0.0.1', 1479862926, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393836323932363b7573756172696f7c4f3a383a22737464436c617373223a343a7b733a31303a2269645f7573756172696f223b733a313a2231223b733a343a226e6f6d65223b733a383a2252616661656c6120223b733a353a22656d61696c223b733a31343a227261666140676d61696c2e636f6d223b733a353a2273656e6861223b733a333a22313233223b7d6c6f6761646f7c623a313b),
('1e55ae9624c8805dbba37ed61295158b0535bdc7', '127.0.0.1', 1479858768, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393835383736383b7573756172696f7c4e3b6c6f6761646f7c623a303b),
('267da8254804166015eadeb1967796975c01f3c2', '127.0.0.1', 1479857854, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393835373835343b7573756172696f7c4f3a383a22737464436c617373223a343a7b733a31303a2269645f7573756172696f223b733a313a2231223b733a343a226e6f6d65223b733a383a2252616661656c6120223b733a353a22656d61696c223b733a31343a227261666140676d61696c2e636f6d223b733a353a2273656e6861223b733a333a22313233223b7d6c6f6761646f7c623a313b),
('2a471cf9a6498e3cc412b81c5b619ddc8e9753a7', '127.0.0.1', 1479856772, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393835363737323b7573756172696f7c4f3a383a22737464436c617373223a343a7b733a31303a2269645f7573756172696f223b733a313a2231223b733a343a226e6f6d65223b733a383a2252616661656c6120223b733a353a22656d61696c223b733a31343a227261666140676d61696c2e636f6d223b733a353a2273656e6861223b733a333a22313233223b7d6c6f6761646f7c623a313b),
('31e525c336a431df5f530be69cd7a87d76264645', '127.0.0.1', 1479859127, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393835393132373b7573756172696f7c4e3b6c6f6761646f7c623a303b),
('35e4e04cbbb8bd4ea0e4abf89c94631c3e8a04a7', '127.0.0.1', 1479861691, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393836313639313b7573756172696f7c4f3a383a22737464436c617373223a343a7b733a31303a2269645f7573756172696f223b733a313a2231223b733a343a226e6f6d65223b733a383a2252616661656c6120223b733a353a22656d61696c223b733a31343a227261666140676d61696c2e636f6d223b733a353a2273656e6861223b733a333a22313233223b7d6c6f6761646f7c623a313b),
('4060922ce94285aca469cf9d887a466e79819655', '127.0.0.1', 1479863262, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393836333233343b7573756172696f7c4f3a383a22737464436c617373223a343a7b733a31303a2269645f7573756172696f223b733a313a2231223b733a343a226e6f6d65223b733a383a2252616661656c6120223b733a353a22656d61696c223b733a31343a227261666140676d61696c2e636f6d223b733a353a2273656e6861223b733a333a22313233223b7d6c6f6761646f7c623a313b),
('46183792542499a10418e8debfe638a901c8811f', '127.0.0.1', 1479861225, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393836313232353b7573756172696f7c4f3a383a22737464436c617373223a343a7b733a31303a2269645f7573756172696f223b733a313a2231223b733a343a226e6f6d65223b733a383a2252616661656c6120223b733a353a22656d61696c223b733a31343a227261666140676d61696c2e636f6d223b733a353a2273656e6861223b733a333a22313233223b7d6c6f6761646f7c623a313b),
('521ff77e6d68035f0e19d1a51515e741689708a5', '127.0.0.1', 1479860882, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393836303838323b7573756172696f7c4f3a383a22737464436c617373223a343a7b733a31303a2269645f7573756172696f223b733a313a2231223b733a343a226e6f6d65223b733a383a2252616661656c6120223b733a353a22656d61696c223b733a31343a227261666140676d61696c2e636f6d223b733a353a2273656e6861223b733a333a22313233223b7d6c6f6761646f7c623a313b),
('56d8c9e90bab9428e01e6110f12e7ffcef3ef867', '127.0.0.1', 1479857411, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393835373431313b7573756172696f7c4f3a383a22737464436c617373223a343a7b733a31303a2269645f7573756172696f223b733a313a2231223b733a343a226e6f6d65223b733a383a2252616661656c6120223b733a353a22656d61696c223b733a31343a227261666140676d61696c2e636f6d223b733a353a2273656e6861223b733a333a22313233223b7d6c6f6761646f7c623a313b6572726f727c733a34343a223c703e4ec3a36f20666f6920706f7373c3ad76656c206578636c756972206f20636f6e7461746f2e3c2f703e223b5f5f63695f766172737c613a313a7b733a353a226572726f72223b733a333a226f6c64223b7d),
('5a55484c8156d5c56baaefb940dd016bdebf0854', '127.0.0.1', 1479859836, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393835393833363b7573756172696f7c4f3a383a22737464436c617373223a343a7b733a31303a2269645f7573756172696f223b733a313a2231223b733a343a226e6f6d65223b733a383a2252616661656c6120223b733a353a22656d61696c223b733a31343a227261666140676d61696c2e636f6d223b733a353a2273656e6861223b733a333a22313233223b7d6c6f6761646f7c623a313b),
('67e7e816c0eddcb735fd56c43b244174b3ecc916', '127.0.0.1', 1479859483, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393835393438333b7573756172696f7c4e3b6c6f6761646f7c623a303b),
('80aedf5c71154ba8d662d85eb65f31537d4be500', '127.0.0.1', 1479857096, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393835373039363b7573756172696f7c4f3a383a22737464436c617373223a343a7b733a31303a2269645f7573756172696f223b733a313a2231223b733a343a226e6f6d65223b733a383a2252616661656c6120223b733a353a22656d61696c223b733a31343a227261666140676d61696c2e636f6d223b733a353a2273656e6861223b733a333a22313233223b7d6c6f6761646f7c623a313b),
('81510620368959d04afec0a3f8f505f86cbf0736', '127.0.0.1', 1479861333, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393836313232353b7573756172696f7c4e3b6c6f6761646f7c623a303b),
('8c36104a2710517c6647541f5978bf998050ad97', '::1', 1479826369, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393832363239303b7573756172696f7c4f3a383a22737464436c617373223a343a7b733a31303a2269645f7573756172696f223b733a313a2231223b733a343a226e6f6d65223b733a383a2252616661656c6120223b733a353a22656d61696c223b733a31343a227261666140676d61696c2e636f6d223b733a353a2273656e6861223b733a333a22313233223b7d6c6f6761646f7c623a313b),
('9c0e7190ad2999f81bfa46d4c8c290fd6b045df0', '127.0.0.1', 1479862009, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393836323030393b7573756172696f7c4f3a383a22737464436c617373223a343a7b733a31303a2269645f7573756172696f223b733a313a2231223b733a343a226e6f6d65223b733a383a2252616661656c6120223b733a353a22656d61696c223b733a31343a227261666140676d61696c2e636f6d223b733a353a2273656e6861223b733a333a22313233223b7d6c6f6761646f7c623a313b),
('a57baf5289b47bc9d57529e8dcaf5cffc875902d', '127.0.0.1', 1479858467, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393835383436373b7573756172696f7c4e3b6c6f6761646f7c623a303b),
('ac37d3f26f622f321769bccaf7e3621f29a5f480', '127.0.0.1', 1479862623, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393836323632333b7573756172696f7c4f3a383a22737464436c617373223a343a7b733a31303a2269645f7573756172696f223b733a313a2231223b733a343a226e6f6d65223b733a383a2252616661656c6120223b733a353a22656d61696c223b733a31343a227261666140676d61696c2e636f6d223b733a353a2273656e6861223b733a333a22313233223b7d6c6f6761646f7c623a313b),
('b12a7ab0b6e60fe4bb0677325360cb5b3d94f2d6', '127.0.0.1', 1479860479, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393836303437393b7573756172696f7c4f3a383a22737464436c617373223a343a7b733a31303a2269645f7573756172696f223b733a313a2231223b733a343a226e6f6d65223b733a383a2252616661656c6120223b733a353a22656d61696c223b733a31343a227261666140676d61696c2e636f6d223b733a353a2273656e6861223b733a333a22313233223b7d6c6f6761646f7c623a313b),
('b75f83ef97ead6dadb09285409a6e81d0583f272', '127.0.0.1', 1479862310, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393836323331303b7573756172696f7c4f3a383a22737464436c617373223a343a7b733a31303a2269645f7573756172696f223b733a313a2231223b733a343a226e6f6d65223b733a383a2252616661656c6120223b733a353a22656d61696c223b733a31343a227261666140676d61696c2e636f6d223b733a353a2273656e6861223b733a333a22313233223b7d6c6f6761646f7c623a313b),
('bd74b9fdbd2eb71ac46437e045bee11154b42362', '127.0.0.1', 1479863234, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393836333233343b7573756172696f7c4f3a383a22737464436c617373223a343a7b733a31303a2269645f7573756172696f223b733a313a2231223b733a343a226e6f6d65223b733a383a2252616661656c6120223b733a353a22656d61696c223b733a31343a227261666140676d61696c2e636f6d223b733a353a2273656e6861223b733a333a22313233223b7d6c6f6761646f7c623a313b),
('d1d379aa52a42525cd13f30eb2baac0f6384c61b', '127.0.0.1', 1479858160, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393835383136303b7573756172696f7c4f3a383a22737464436c617373223a343a7b733a31303a2269645f7573756172696f223b733a313a2231223b733a343a226e6f6d65223b733a383a2252616661656c6120223b733a353a22656d61696c223b733a31343a227261666140676d61696c2e636f6d223b733a353a2273656e6861223b733a333a22313233223b7d6c6f6761646f7c623a313b),
('da592b09db21e90346d0bfdc6b4cde5d98b4f300', '127.0.0.1', 1479860146, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393836303134363b7573756172696f7c4f3a383a22737464436c617373223a343a7b733a31303a2269645f7573756172696f223b733a313a2231223b733a343a226e6f6d65223b733a383a2252616661656c6120223b733a353a22656d61696c223b733a31343a227261666140676d61696c2e636f6d223b733a353a2273656e6861223b733a333a22313233223b7d6c6f6761646f7c623a313b);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pokemon`
--

CREATE TABLE `pokemon` (
  `id_pokemon` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `data_captura` datetime DEFAULT NULL,
  `tipo_pokemon` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `pokemon`
--
ALTER TABLE `pokemon`
  ADD PRIMARY KEY (`id_pokemon`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pokemon`
--
ALTER TABLE `pokemon`
  MODIFY `id_pokemon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
