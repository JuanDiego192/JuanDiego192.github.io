-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-12-2024 a las 08:13:04
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cursosdw`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `id` int(25) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contraseña` varchar(50) NOT NULL,
  `telefono` int(15) NOT NULL,
  `curso` varchar(100) NOT NULL,
  `fecha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id`, `nombre`, `email`, `contraseña`, `telefono`, `curso`, `fecha`) VALUES
(2, 'Juan Mendoza', 'juan19@gmail.com', '12344', 956382999, 'Fundamentos de programación', '04/12/24'),
(3, 'Carlos Zambrano', 'Carlos24@gmail.com', '4321', 956382999, 'Seguridad Informática', '04/12/24'),
(7, 'Maria José', 'maria11@gmail.com', 'maria23', 956382999, 'Inteligencia Artificial', '04/12/24'),
(8, 'Pedro', 'pedro_5@gmail.com', 'pedro000', 973319967, 'Base de datos', '04/12/24'),
(9, 'Pablo', 'pablo89@gmail.com', '123pablo', 96458245, 'Base de datos', '04/12/24');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
