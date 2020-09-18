-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 18-09-2020 a las 08:20:01
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gisell_cudris`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programador`
--

CREATE TABLE `programador` (
  `ced_prog` bigint(20) NOT NULL COMMENT 'cedula',
  `nom_prog` varchar(50) NOT NULL COMMENT 'nombre',
  `ape_prog` varchar(50) NOT NULL COMMENT 'apellidos',
  `mail_prog` varchar(100) NOT NULL COMMENT 'correo',
  `leng_prog` text NOT NULL COMMENT 'lenguajes ',
  `date_insert` date NOT NULL COMMENT 'fecha cracion'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `programador`
--

INSERT INTO `programador` (`ced_prog`, `nom_prog`, `ape_prog`, `mail_prog`, `leng_prog`, `date_insert`) VALUES
(1032367305, 'Gisell', 'Cudris', 'gisell.cudris@gmail.com', 'PHP\r\nJAVASCRIPT\r\nJQUERY\r\nAJAX\r\nJSON\r\nHTML\r\nCSS3', '2020-09-18');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `programador`
--
ALTER TABLE `programador`
  ADD PRIMARY KEY (`ced_prog`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
