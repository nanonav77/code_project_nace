-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 21-08-2020 a las 05:01:24
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `nace_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nace_colaboradores`
--

CREATE TABLE `nace_colaboradores` (
  `numero` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `identificacion` int(11) NOT NULL,
  `telefono` int(11) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `nace_colaboradores`
--

INSERT INTO `nace_colaboradores` (`numero`, `nombre`, `identificacion`, `telefono`, `email`) VALUES
(1, 'Victor', 0, 0, ''),
(2, 'Sito', 0, 0, ''),
(3, 'Gabino', 0, 0, ''),
(4, 'Osvaldo', 0, 0, ''),
(5, 'Domiciano', 0, 0, ''),
(6, 'Marcial', 0, 45693698, ''),
(7, 'Cesar', 0, 0, ''),
(8, 'Omar', 0, 0, ''),
(9, 'Arnulfo', 0, 0, ''),
(10, 'Alvarado', 0, 0, ''),
(11, 'Marco', 0, 0, ''),
(12, 'Ceveriano', 0, 0, ''),
(13, 'Concepcion', 0, 0, ''),
(14, 'Marcial Santo', 0, 0, ''),
(15, 'Camilo', 0, 0, ''),
(16, 'Agustin', 0, 0, ''),
(17, 'Hernesto', 0, 0, ''),
(18, 'Carlos', 0, 0, ''),
(19, 'Jenaro', 0, 0, ''),
(20, 'Manuel (Gato)', 0, 0, ''),
(21, 'Randall', 0, 0, ''),
(22, 'Wilberth', 0, 0, ''),
(23, 'Gretel', 0, 0, ''),
(24, 'EDELMA', 0, 0, ''),
(25, 'ALEX', 0, 0, ''),
(26, 'DEINER', 0, 0, ''),
(27, 'NARLYN', 0, 0, ''),
(28, 'BENJAMIN', 0, 0, ''),
(29, 'FIDENCIO ', 0, 0, ''),
(30, 'LEONARDO', 0, 0, ''),
(31, 'FREDY', 0, 0, ''),
(32, 'PORFIRIO', 0, 0, ''),
(33, 'FELIPE', 0, 0, ''),
(34, 'ADIEL', 0, 0, ''),
(35, 'RUFINO', 0, 0, ''),
(36, 'CECILIO', 0, 0, ''),
(37, 'JUAN', 0, 0, ''),
(38, 'MELKIN', 0, 0, ''),
(39, 'YILBERTH', 0, 0, ''),
(40, 'ABRAHAN', 0, 0, ''),
(41, 'BERMAN', 0, 0, ''),
(42, 'YOEL', 0, 0, ''),
(43, 'MANUEL', 0, 0, ''),
(44, 'CARLOS', 0, 0, ''),
(45, 'ALCIVIADES', 0, 0, ''),
(46, 'FELIX', 0, 0, ''),
(47, 'WISTON', 0, 0, ''),
(48, 'JOSE (CHEPE)', 0, 0, ''),
(49, 'OLMAN', 0, 0, ''),
(50, 'CELESTINO', 0, 0, ''),
(51, 'ROGER', 0, 0, ''),
(52, 'Elyin', 0, 0, ''),
(53, 'Roger yunior', 0, 0, ''),
(54, 'Hector', 0, 0, ''),
(55, 'Wilton ', 0, 0, ''),
(56, 'FERNANDO', 0, 0, ''),
(57, 'CERAFIN', 0, 0, ''),
(58, 'LUCIANO', 0, 0, ''),
(59, 'DEYRING', 0, 0, ''),
(60, 'Angelin', 0, 0, ''),
(61, 'GUISELLE', 0, 0, ''),
(62, 'Luis Camacho', 0, 0, ''),
(63, 'Jose David', 0, 0, ''),
(64, 'Silian', 0, 0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nace_fincas`
--

CREATE TABLE `nace_fincas` (
  `numero` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `direccion` text NOT NULL,
  `ide_propietario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `nace_fincas`
--

INSERT INTO `nace_fincas` (`numero`, `nombre`, `direccion`, `ide_propietario`) VALUES
(1, 'EL Rosario', 'la fila, aserrí, desampa', 304900948),
(2, ' Caragral', ' Cartago, Guarco, Caragral', 304900948),
(3, 'El Norte ', ' San Cristobal, Desamparados', 304900948);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nace_produccion`
--

CREATE TABLE `nace_produccion` (
  `id_registro` int(11) NOT NULL,
  `ide_colaborador` int(11) NOT NULL,
  `ide_finca` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `cajuelas` int(11) NOT NULL,
  `cuartillos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `nace_produccion`
--

INSERT INTO `nace_produccion` (`id_registro`, `ide_colaborador`, `ide_finca`, `fecha`, `cajuelas`, `cuartillos`) VALUES
(1, 2, 2, '2020-08-06', 30, 2),
(2, 5, 2, '2020-08-06', 12, 1),
(3, 1, 1, '2020-08-07', 7, 1),
(4, 2, 1, '2020-08-07', 8, 2),
(5, 3, 2, '2020-08-07', 15, 3),
(6, 1, 2, '2020-08-19', 8, 3),
(7, 2, 2, '2020-08-19', 14, 2),
(8, 33, 2, '2020-08-19', 25, 1),
(9, 1, 2, '2020-08-20', 5, 2),
(10, 3, 2, '2020-08-20', 32, 5),
(11, 34, 2, '2020-08-20', 20, 3),
(12, 1, 1, '2020-08-20', 17, 3),
(13, 2, 1, '2020-08-20', 15, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nace_usuarios`
--

CREATE TABLE `nace_usuarios` (
  `identificacion` int(11) NOT NULL,
  `nombre_usuario` varchar(50) NOT NULL,
  `apellidos_usuario` varchar(150) NOT NULL,
  `rol_usuario` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contrasena` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `nace_usuarios`
--

INSERT INTO `nace_usuarios` (`identificacion`, `nombre_usuario`, `apellidos_usuario`, `rol_usuario`, `email`, `contrasena`) VALUES
(302800485, 'Mari', 'Navarro Romero', 'Usuario', 'mari45@gmail.com', 'mari45c'),
(304900948, 'José Daniel', 'Navarro Romero', 'Administrador', 'navrojd77@gmail.com', 'jupiter070417');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `nace_colaboradores`
--
ALTER TABLE `nace_colaboradores`
  ADD PRIMARY KEY (`numero`);

--
-- Indices de la tabla `nace_fincas`
--
ALTER TABLE `nace_fincas`
  ADD PRIMARY KEY (`numero`),
  ADD KEY `ide_propietario` (`ide_propietario`);

--
-- Indices de la tabla `nace_produccion`
--
ALTER TABLE `nace_produccion`
  ADD PRIMARY KEY (`id_registro`),
  ADD KEY `ide_colaborador` (`ide_colaborador`),
  ADD KEY `ide_finca` (`ide_finca`);

--
-- Indices de la tabla `nace_usuarios`
--
ALTER TABLE `nace_usuarios`
  ADD PRIMARY KEY (`identificacion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `nace_colaboradores`
--
ALTER TABLE `nace_colaboradores`
  MODIFY `numero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT de la tabla `nace_fincas`
--
ALTER TABLE `nace_fincas`
  MODIFY `numero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `nace_produccion`
--
ALTER TABLE `nace_produccion`
  MODIFY `id_registro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `nace_fincas`
--
ALTER TABLE `nace_fincas`
  ADD CONSTRAINT `nace_fincas_ibfk_1` FOREIGN KEY (`ide_propietario`) REFERENCES `nace_usuarios` (`identificacion`);

--
-- Filtros para la tabla `nace_produccion`
--
ALTER TABLE `nace_produccion`
  ADD CONSTRAINT `nace_produccion_ibfk_1` FOREIGN KEY (`ide_colaborador`) REFERENCES `nace_colaboradores` (`numero`),
  ADD CONSTRAINT `nace_produccion_ibfk_2` FOREIGN KEY (`ide_finca`) REFERENCES `nace_fincas` (`numero`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
