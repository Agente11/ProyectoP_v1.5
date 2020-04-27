-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-04-2020 a las 23:32:10
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `asesores`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asesores`
--

CREATE TABLE `asesores` (
  `id` int(20) NOT NULL,
  `usuario` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `nomcom` varchar(40) NOT NULL,
  `docid` int(20) NOT NULL,
  `telef` int(20) NOT NULL,
  `cdseguridad` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `asesores`
--

INSERT INTO `asesores` (`id`, `usuario`, `pass`, `nomcom`, `docid`, `telef`, `cdseguridad`) VALUES
(8, 'JM', '123456', 'Julian Martinez', 74654394, 2147483647, 985145),
(14, 'loli', 'ninguna', 'loli luz salinas ', 45540285, 2147483647, 123456),
(19, 'keyla', 'ninguna ', 'keyla salinas', 1002244165, 56654, 654654),
(20, 'alex', 'ninguna', 'alexis morelos', 44444, 66666, 4444),
(22, 'roder', 'ninguna', 'roder luis pomares', 7777, 8888, 9999),
(24, 'generoso', 'ninguna', 'generoso vence', 44444, 5555, 666666),
(26, 'nelson', 'ninguna', 'nelson torres', 7777, 9999, 6666);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asesores`
--
ALTER TABLE `asesores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asesores`
--
ALTER TABLE `asesores`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
