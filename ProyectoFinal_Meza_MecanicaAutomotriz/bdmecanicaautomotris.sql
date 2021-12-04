-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-12-2021 a las 09:47:47
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdmecanicaautomotris`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `id` int(100) NOT NULL,
  `Nombre del articulo` int(100) NOT NULL,
  `Precio del articulo` int(100) NOT NULL,
  `Cantidad del articulo` int(100) NOT NULL,
  `Departamento del articulo` int(100) NOT NULL,
  `Provedor del articulo` int(100) NOT NULL,
  `Tipo de articulo` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`id`, `Nombre del articulo`, `Precio del articulo`, `Cantidad del articulo`, `Departamento del articulo`, `Provedor del articulo`, `Tipo de articulo`) VALUES
(1, 1, 0, 0, 0, 0, 0),
(2, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `automovil`
--

CREATE TABLE `automovil` (
  `id` int(100) NOT NULL,
  `Modelo del automovil` int(100) NOT NULL,
  `Marca del automovil` int(100) NOT NULL,
  `Color del automovil` int(100) NOT NULL,
  `Matricula del automovil` int(100) NOT NULL,
  `Servicio mecanico` int(100) NOT NULL,
  `Tipo de automovil` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `automovil`
--

INSERT INTO `automovil` (`id`, `Modelo del automovil`, `Marca del automovil`, `Color del automovil`, `Matricula del automovil`, `Servicio mecanico`, `Tipo de automovil`) VALUES
(1, 1, 0, 0, 0, 0, 0),
(2, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(100) NOT NULL,
  `Nombre del cliente` varchar(100) NOT NULL,
  `Apellido del cliente` varchar(100) NOT NULL,
  `Numero de cliente` varchar(100) NOT NULL,
  `Numero del telefono del cliente` varchar(100) NOT NULL,
  `Servicio requerido` varchar(100) NOT NULL,
  `Correo del cliente` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `Nombre del cliente`, `Apellido del cliente`, `Numero de cliente`, `Numero del telefono del cliente`, `Servicio requerido`, `Correo del cliente`) VALUES
(1, 'manuel', 'corral', '1', '656984521', 'motor', 'prueba85@'),
(2, 'alison', 'Perez', '2', '69854651', 'cambio aceite', 'prueba85@');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajador`
--

CREATE TABLE `trabajador` (
  `id` int(100) NOT NULL,
  `Nombre del mecanico` varchar(100) NOT NULL,
  `Apellido del mecanico` varchar(100) NOT NULL,
  `Numero teléfono del mecanico` varchar(100) NOT NULL,
  `Correo del mecanico` varchar(100) NOT NULL,
  `Especialidad del mecanico` varchar(100) NOT NULL,
  `Direccion del mecanico` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `trabajador`
--

INSERT INTO `trabajador` (`id`, `Nombre del mecanico`, `Apellido del mecanico`, `Numero teléfono del mecanico`, `Correo del mecanico`, `Especialidad del mecanico`, `Direccion del mecanico`) VALUES
(1, 'manuel ', 'Meza', '6561808424', 'prueba12@gmail.com', 'Mecanico', 'islandia 5489'),
(2, 'Alison', 'Perez', '6561808424', 'prueba12@gmail.com', 'Mecanico', 'islandia 5489'),
(3, 'Benito Camelo ', 'Corral', '6561808424', 'prueba12@gmail.com', 'Mecanico', 'islandia 5489');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `automovil`
--
ALTER TABLE `automovil`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `trabajador`
--
ALTER TABLE `trabajador`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulo`
--
ALTER TABLE `articulo`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `automovil`
--
ALTER TABLE `automovil`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `trabajador`
--
ALTER TABLE `trabajador`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
