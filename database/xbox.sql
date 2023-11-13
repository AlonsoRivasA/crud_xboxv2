-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-11-2023 a las 20:45:29
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `xbox`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juegos`
--

CREATE TABLE `juegos` (
  `id` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `genero` varchar(50) NOT NULL,
  `fecha` date NOT NULL,
  `precio` varchar(50) NOT NULL,
  `clasificacion` varchar(50) NOT NULL,
  `desarrolladores` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `juegos`
--

INSERT INTO `juegos` (`id`, `nombre`, `descripcion`, `genero`, `fecha`, `precio`, `clasificacion`, `desarrolladores`) VALUES
(1, 'Minecraft', 'Juego de Cubos', 'Sandbox', '2016-06-22', '4500', '+12', 'Mojangs'),
(2, 'Bloodborne', 'El Mejor juego de la saga', 'Souls', '2015-06-16', '650', '+16', 'Fromsoftware'),
(3, 'Resident Evil 4', 'El mejor remake del aÃ±o', 'Horror Shooter', '2023-02-22', '1200', '+16', 'Capcom'),
(4, 'Pou', 'Juego de celular', 'Retro', '2014-06-11', '120', '+5', 'Zakeh'),
(5, 'Tetris', 'Juego de reaccion', 'Estrategia', '1984-06-06', '150', '+8', 'Sega');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `juegos`
--
ALTER TABLE `juegos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `juegos`
--
ALTER TABLE `juegos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
