-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-03-2024 a las 10:49:48
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `abp_nacho_garcia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formcontacto`
--

CREATE TABLE `formcontacto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefono` varchar(11) NOT NULL,
  `asunto` varchar(50) NOT NULL,
  `mensaje` varchar(255) NOT NULL,
  `solucionado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `formcontacto`
--

INSERT INTO `formcontacto` (`id`, `nombre`, `email`, `telefono`, `asunto`, `mensaje`, `solucionado`) VALUES
(1, 'nacho', 'nachogarcia@gmai.com', '665657790', 'Visita coche', 'Me gustaria viistar el bmw serie 3', 0),
(5, 'Pol', 'polmousam@campus.monlau.com', '234234', 'Problema coche', 'Tengo un problema con el coche', 0),
(6, 'nacho', 'nachogarcia@gmai.com', '42178465', 'Compra Dacia', 'Buenas, me gustaría adquirir más información sobre el Dacia Hibrido', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `id` int(11) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `precioCompra` int(11) NOT NULL,
  `precioVenta` int(11) NOT NULL,
  `kilometros` int(11) NOT NULL,
  `combustible` varchar(20) NOT NULL,
  `anyo` int(11) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `transmision` varchar(20) NOT NULL,
  `etiquetas` varchar(20) NOT NULL,
  `potencia` int(11) NOT NULL,
  `foto_delantera` varchar(255) NOT NULL,
  `foto_trasera` varchar(255) NOT NULL,
  `foto_interior` varchar(255) NOT NULL,
  `foto_lateral` varchar(255) NOT NULL,
  `foto_lateral2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`id`, `marca`, `modelo`, `precioCompra`, `precioVenta`, `kilometros`, `combustible`, `anyo`, `tipo`, `transmision`, `etiquetas`, `potencia`, `foto_delantera`, `foto_trasera`, `foto_interior`, `foto_lateral`, `foto_lateral2`) VALUES
(1, 'BMW', 'Serie 3', 5000, 10000, 53486, 'Gasolina', 2007, 'Turismo', 'Automático', 'Destacados', 218, 'fotoscatalogo/bmw-serie3-2007-1.webp', 'fotoscatalogo/bmw-serie3-2007-2.webp', 'fotoscatalogo/bmw-serie3-2007-3.webp', 'fotoscatalogo/bmw-serie3-2007-4.webp', 'fotoscatalogo/bmw-serie3-2007-5.webp'),
(3, 'Volkswagen', 'Golf 7R', 20000, 26000, 78568, 'Gasolina', 2015, 'Familiar', 'Automático', 'Premium', 300, 'fotoscatalogo/golf-7r-2015-1.jpg', 'fotoscatalogo/golf-7r-2015-2.jpg', 'fotoscatalogo/golf-7r-2015-3.jpg', 'fotoscatalogo/golf-7r-2015-4.jpg', 'fotoscatalogo/golf-7r-2015-5.jpg'),
(5, 'Porsche', '911', 90000, 120000, 20154, 'Gasolina', 2020, 'Deportivo', 'Manual', 'Premium', 542, 'fotoscatalogo/porsche-911-2020-1.webp', 'fotoscatalogo/porsche-911-2020-2.webp', 'fotoscatalogo/porsche-911-2020-3.webp', 'fotoscatalogo/porsche-911-2020-4.webp', 'fotoscatalogo/porsche-911-2020-5.webp'),
(7, 'Ford', 'Fiesta', 5000, 7500, 135923, 'Diesel', 2013, 'Compacto', 'Manual', 'Destacados', 83, 'fotoscatalogo/ford-fiesta-2013-1.webp', 'fotoscatalogo/ford-fiesta-2013-2.webp', 'fotoscatalogo/ford-fiesta-2013-3.webp', 'fotoscatalogo/ford-fiesta-2013-4.webp', 'fotoscatalogo/ford-fiesta-2013-5.webp'),
(9, 'Audi', 'A4', 5400, 8300, 120349, 'Gasolina', 2008, 'Cabrio', 'Manual', 'Economico', 90, 'fotoscatalogo/audi-a4-2008-cabrio-1.jpg', 'fotoscatalogo/audi-a4-2008-cabrio-2.jpg', 'fotoscatalogo/audi-a4-2008-cabrio-3.webp', 'fotoscatalogo/audi-a4-2008-cabrio-4.webp', 'fotoscatalogo/audi-a4-2008-cabrio-5.webp'),
(11, 'Audi', 'Q3 Sportback', 41000, 50000, 5782, 'Diesel', 2020, 'Suv-4x4', 'Manual', 'Km-0', 190, 'fotoscatalogo/audi-q3-sportback-2020-1.jpg', 'fotoscatalogo/audi-q3-sportback-2020-2.jpg', 'fotoscatalogo/audi-q3-sportback-2020-3.jpg', 'fotoscatalogo/audi-q3-sportback-2020-4.jpg', 'fotoscatalogo/audi-q3-sportback-2020-5.jpg'),
(12, 'Opel', 'Combo Life', 13500, 21000, 57689, 'Diesel', 2020, 'Furgoneta', 'Manual', 'Destacados', 131, 'fotoscatalogo/Opel-ComboLife-2020-1.webp', 'fotoscatalogo/Opel-ComboLife-2020-2.webp', 'fotoscatalogo/Opel-ComboLife-2020-3.webp', 'fotoscatalogo/Opel-ComboLife-2020-4.webp', 'fotoscatalogo/Opel-ComboLife-2020-5.webp'),
(13, 'Dacia', 'Jogger', 13450, 21500, 9674, 'Híbrido', 2023, 'Monovolumen', 'Automático', 'Km-0', 140, 'fotoscatalogo/dacia-jogger-2023-1.webp', 'fotoscatalogo/dacia-jogger-2023-2.webp', 'fotoscatalogo/dacia-jogger-2023-3.webp', 'fotoscatalogo/dacia-jogger-2023-4.webp', 'fotoscatalogo/dacia-jogger-2023-5.webp'),
(14, 'Mini', 'Cooper', 4300, 6100, 130451, 'Gasolina', 2021, 'Compacto', 'Manual', 'En-oferta', 145, 'fotoscatalogo/mini-cooper-2021-1.jpg', 'fotoscatalogo/mini-cooper-2021-2.jpg', 'fotoscatalogo/mini-cooper-2021-3.webp', 'fotoscatalogo/mini-cooper-2021-4.jpg', 'fotoscatalogo/mini-cooper-2021-5.jpg'),
(15, 'Tesla', 'Model X', 45000, 51000, 84120, 'Eléctrico', 2017, 'Familiar', 'Automático', 'Destacados', 650, 'fotoscatalogo/tesla-modelx-2017-1.webp', 'fotoscatalogo/tesla-modelx-2017-2.webp', 'fotoscatalogo/tesla-modelx-2017-3.webp', 'fotoscatalogo/tesla-modelx-2017-4.webp', 'fotoscatalogo/tesla-modelx-2017-5.webp');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `formcontacto`
--
ALTER TABLE `formcontacto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `formcontacto`
--
ALTER TABLE `formcontacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
