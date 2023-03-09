-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-03-2023 a las 04:39:46
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `servicopy`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gastos`
--

CREATE TABLE `gastos` (
  `id` int(11) NOT NULL,
  `valor_gasto` int(11) NOT NULL,
  `id_rubro` int(11) NOT NULL,
  `date_creation` timestamp NOT NULL DEFAULT current_timestamp(),
  `observacion` text COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `gastos`
--

INSERT INTO `gastos` (`id`, `valor_gasto`, `id_rubro`, `date_creation`, `observacion`) VALUES
(1, 5000, 1, '2023-03-08 02:38:39', ''),
(2, 5000, 1, '2023-03-08 02:38:39', ''),
(3, 5000, 1, '2023-03-08 02:40:20', ''),
(4, 5000, 1, '2023-03-08 02:40:20', ''),
(7, 2, 1, '2023-03-08 03:20:00', ''),
(21, 555, 1, '2023-03-09 01:40:52', ''),
(31, 55, 2, '2023-03-09 02:18:55', ''),
(36, 55, 1, '2023-03-09 02:33:53', ''),
(42, 0, 8, '2023-03-09 02:46:58', ''),
(44, 0, 8, '2023-03-09 02:48:55', ''),
(45, 0, 8, '2023-03-09 02:49:29', ''),
(46, 0, 8, '2023-03-09 02:51:06', ''),
(47, 0, 8, '2023-03-09 02:51:20', ''),
(48, 0, 8, '2023-03-09 02:53:10', ''),
(49, 50, 8, '2023-03-09 02:54:32', ''),
(50, 0, 8, '2023-03-09 02:56:22', ''),
(55, 0, 3, '2023-03-09 03:33:49', ''),
(57, 0, 8, '2023-03-09 03:38:39', ''),
(58, 500, 5, '2023-03-09 03:38:56', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id`, `nombre`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rubrogasto`
--

CREATE TABLE `rubrogasto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `rubrogasto`
--

INSERT INTO `rubrogasto` (`id`, `nombre`) VALUES
(1, 'Papel'),
(2, 'Servicios'),
(3, 'Arriendo'),
(4, 'Personales'),
(5, 'Insumos'),
(6, 'Otros'),
(8, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `apellidos` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `date_creation` timestamp NULL DEFAULT current_timestamp(),
  `rol_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `email`, `password`, `date_creation`, `rol_id`) VALUES
(1, 'JUAN CAMILO', 'PATERNINA MARTINEZ', 'juank311a@gmail.com', 'ed1899075eb06cf154e89aa4a20ec394', '2023-03-06 13:40:26', 1),
(2, 'LUIS', 'ACOSTA', 'luisacosta01@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2023-03-06 13:40:26', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` int(11) NOT NULL,
  `valor_venta` int(11) NOT NULL,
  `date_creation` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `valor_venta`, `date_creation`) VALUES
(1, 60000, '2023-03-08 02:38:09'),
(2, 40000, '2023-03-08 02:38:09'),
(3, 1, '2023-03-08 03:20:00'),
(4, 10, '2023-03-08 03:25:52'),
(5, 555, '2023-03-09 01:40:52'),
(6, 55, '2023-03-09 02:18:55'),
(7, 55, '2023-03-09 02:33:53'),
(8, 50, '2023-03-09 02:46:58'),
(9, 50, '2023-03-09 02:48:55'),
(10, 500, '2023-03-09 02:49:29'),
(11, 50, '2023-03-09 02:51:06'),
(12, 258456, '2023-03-09 02:51:20'),
(13, 55555, '2023-03-09 02:53:10'),
(14, 50, '2023-03-09 02:54:32'),
(15, 50147, '2023-03-09 02:56:22'),
(16, 55555, '2023-03-09 03:33:49'),
(17, 50, '2023-03-09 03:38:39'),
(18, 8989, '2023-03-09 03:38:56');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `gastos`
--
ALTER TABLE `gastos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rubro` (`id_rubro`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rubrogasto`
--
ALTER TABLE `rubrogasto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rol_id` (`rol_id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `gastos`
--
ALTER TABLE `gastos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `rubrogasto`
--
ALTER TABLE `rubrogasto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `gastos`
--
ALTER TABLE `gastos`
  ADD CONSTRAINT `gastos_ibfk_1` FOREIGN KEY (`id_rubro`) REFERENCES `rubrogasto` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
