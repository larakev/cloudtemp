-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-06-2016 a las 23:00:54
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `fona`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuartos`
--

CREATE TABLE IF NOT EXISTS `cuartos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) NOT NULL,
  `encargado` varchar(200) NOT NULL,
  `dimenciones` varchar(50) NOT NULL,
  `ubicacion` varchar(200) NOT NULL,
  `tempmaxima` int(11) NOT NULL,
  `tempminima` int(11) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `cuartos`
--

INSERT INTO `cuartos` (`id`, `nombre`, `encargado`, `dimenciones`, `ubicacion`, `tempmaxima`, `tempminima`, `descripcion`) VALUES
(3, 'Hola', 'Monaka', '43 x 34 x 2', 'Por ahí', 11, 2, 'erbrtbtr'),
(4, 'Putazo', 'Joto', '12 x 32 x 12', 'Hasta la mierda', 23, 43, 'lorem');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temperaturas`
--

CREATE TABLE IF NOT EXISTS `temperaturas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `temp` float NOT NULL,
  `bat` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;

--
-- Volcado de datos para la tabla `temperaturas`
--

INSERT INTO `temperaturas` (`id`, `fecha`, `hora`, `temp`, `bat`) VALUES
(4, '2016-05-19', '09:42:57', 12, 0),
(5, '2016-05-19', '07:26:05', 12, 0),
(6, '2016-05-26', '08:19:21', 4, 0),
(7, '2016-05-26', '08:19:31', 2.43, 0),
(8, '2016-05-26', '01:27:12', 5.2, 0),
(9, '2016-05-26', '01:27:14', 5.2, 0),
(10, '2016-05-26', '01:27:16', 5.2, 0),
(11, '2016-05-26', '01:27:34', 2.9, 0),
(12, '2016-05-26', '01:27:36', 2.9, 0),
(13, '2016-05-26', '01:27:38', 2.9, 0),
(14, '2016-05-26', '01:27:45', 2.1, 0),
(15, '2016-05-26', '04:23:20', 12, 0),
(16, '2016-05-26', '04:23:22', 12, 0),
(17, '2016-05-26', '04:23:23', 12, 0),
(18, '2016-05-26', '04:23:23', 12, 0),
(19, '2016-05-26', '04:23:24', 12, 0),
(20, '2016-05-26', '04:23:24', 12, 0),
(21, '2016-05-26', '04:23:24', 12, 0),
(22, '2016-05-26', '04:23:24', 12, 0),
(23, '2016-05-26', '04:23:25', 12, 0),
(24, '2016-05-26', '04:23:25', 12, 0),
(25, '2016-05-26', '04:23:25', 12, 0),
(26, '2016-05-26', '04:23:25', 12, 0),
(27, '2016-05-26', '04:23:26', 12, 0),
(28, '2016-05-26', '04:23:26', 12, 0),
(29, '2016-05-26', '04:23:26', 12, 0),
(30, '2016-05-26', '04:23:26', 12, 0),
(31, '2016-05-26', '04:23:27', 12, 0),
(32, '2016-05-26', '04:23:27', 12, 0),
(33, '2016-05-26', '04:23:27', 12, 0),
(34, '2016-05-26', '04:23:27', 12, 0),
(35, '2016-05-26', '04:23:27', 12, 0),
(36, '2016-05-26', '04:23:28', 12, 0),
(37, '2016-05-27', '02:42:45', 15, 0),
(38, '2016-05-27', '02:47:59', -0.3, 0),
(39, '2016-05-27', '02:49:45', -9.4, 0),
(40, '2016-05-27', '03:00:51', 3, 0),
(41, '2016-05-27', '03:03:03', 5.6, 0),
(42, '2016-05-27', '03:05:16', 20, 0),
(43, '2016-05-27', '03:09:33', 2.34, 0),
(44, '2016-05-27', '03:09:44', 3.4, 0),
(45, '2016-05-27', '03:17:15', 2.55, 0),
(47, '2016-05-27', '03:26:06', 1.3, 0),
(48, '2016-05-27', '08:24:15', 2.45, 0),
(49, '2016-05-30', '11:06:52', 5, 0),
(50, '2016-05-30', '11:07:58', 5, 0),
(51, '2016-05-30', '08:04:06', 12, 0),
(52, '2016-05-31', '02:25:24', 15, 0),
(53, '2016-06-02', '12:21:32', 12, 4.1),
(54, '2016-06-02', '12:42:58', 12.5, 4.1),
(55, '2016-06-02', '12:43:09', 12.53, 4.1),
(56, '2016-06-03', '01:26:07', 5.1, 0),
(57, '2016-06-03', '01:34:37', 12, 3.2),
(58, '2016-06-03', '01:58:58', 12, 78),
(59, '2016-06-03', '02:08:40', 3.4, 79);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(25) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefono` varchar(8) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `nombre`, `apellidos`, `email`, `telefono`, `password`) VALUES
(6, 'admin', 'Kevin', 'Lara', 'kevin@mail.com', '78322343', '107b4432b076e961d70f2389468f716bb891f390'),
(4, 'Chino', 'Juan', 'Puto', 'joto@joto.com', '78362321', '750158444d179ad8fcbeec0ff292455d61e86458'),
(5, 'chino', 'Saint', 'Joto', 'joto@joto.com', '75907845', '61086228afc40286050a80050a644a1cf500286b');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
