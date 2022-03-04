-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 02, 2021 at 06:55 AM
-- Server version: 5.7.35-cll-lve
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dzenerco_cpe_clinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `name`, `contact`, `email`, `message`, `created_at`, `updated_at`, `deleted_at`) VALUES
(22, 'Eduardo Possamai', '916516864', 'duduapossamai@gmail.com', 'Boa tarde!! Estou procurando por um nitricionista esportivo e gostaria de saber se aceitam plano medis e qual e o valor da consulta. Muito obrigado!!', '2021-04-22 13:12:01', '2021-04-22 13:12:01', NULL),
(23, 'Ketlyn Sfeir', '910453906', 'Keethsfeir@gmail.com', 'Olá, boa tarde. \nVocês tem serviço de quiropraxia? Qual o valor da consulta de avaliação? \nObrigada ', '2021-07-14 16:20:40', '2021-07-14 16:20:40', NULL),
(30, 'Lídia Mota Silva', '933368805', 'lidia.laura83@gmail.com', 'Boa tarde,\n\nGostaria de marcar uma consulta de psicologia para o meu marido Bruno Rafael Nelson Silva de preferência para o final do dia. Aguardo contacto.\nObrigada.', '2021-07-21 14:22:14', '2021-07-21 14:22:14', NULL),
(32, 'Sílvia Fernandes', '933228025', 'alonso.silvia@hotmail.com', 'Bom dia,\n\nÀ cerca de 6 meses fui operada à coluna lombar e na consulta o Médico aconselhou-me a fazer pilatos clinico. Gostava de saber informações, tipo de acompanhamento, horários, preços, outros que ache relevante.\n\nAguardo resposta.\n\nCumprimentos,\nSílvia Alonso', '2021-10-11 10:31:57', '2021-10-11 10:31:57', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
