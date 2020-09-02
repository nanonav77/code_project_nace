-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 02-09-2020 a las 05:25:41
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
  `email` varchar(50) NOT NULL,
  `estado` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `nace_colaboradores`
--

INSERT INTO `nace_colaboradores` (`numero`, `nombre`, `identificacion`, `telefono`, `email`, `estado`) VALUES
(1, 'Victor', 0, 0, '', 'Activo'),
(2, 'Sito', 0, 0, '', 'Activo'),
(3, 'Gabino', 0, 0, '', 'Activo'),
(4, 'Osvaldo', 0, 0, '', 'Activo'),
(5, 'Domiciano', 0, 0, '', 'Activo'),
(6, 'Marcial', 0, 45693698, '', 'Activo'),
(7, 'Cesar', 0, 0, '', 'Activo'),
(8, 'Omar', 0, 0, '', 'Activo'),
(9, 'Arnulfo', 0, 0, '', 'Activo'),
(10, 'Alvarado', 0, 0, '', 'Activo'),
(11, 'Marco', 0, 0, '', 'Activo'),
(12, 'Ceveriano', 0, 0, '', 'Activo'),
(13, 'Concepcion', 0, 0, '', 'Activo'),
(14, 'Marcial Santo', 0, 0, '', 'Activo'),
(15, 'Camilo', 0, 0, '', 'Activo'),
(16, 'Agustin', 0, 0, '', 'Activo'),
(17, 'Hernesto', 0, 0, '', 'Activo'),
(18, 'Carlos', 0, 0, '', 'Activo'),
(19, 'Jenaro', 0, 0, '', 'Activo'),
(20, 'Manuel (Gato)', 0, 0, '', 'Activo'),
(21, 'Randall', 0, 0, '', 'Activo'),
(22, 'Wilberth', 0, 0, '', 'Activo'),
(23, 'Gretel', 0, 0, '', 'Activo'),
(24, 'EDELMA', 0, 0, '', 'Activo'),
(25, 'ALEX', 0, 36987545, '', 'Activo'),
(26, 'DEINER', 0, 0, '', 'Activo'),
(27, 'NARLYN', 0, 0, '', 'Activo'),
(28, 'BENJAMIN', 0, 0, '', 'Activo'),
(29, 'FIDENCIO ', 0, 0, '', 'Activo'),
(30, 'LEONARDO', 0, 0, '', 'Activo'),
(31, 'FREDY', 0, 0, '', 'Activo'),
(32, 'PORFIRIO', 0, 0, '', 'Activo'),
(33, 'FELIPE', 0, 0, '', 'Activo'),
(34, 'ADIEL', 0, 0, '', 'Activo'),
(35, 'RUFINO', 0, 0, '', 'Activo'),
(36, 'CECILIO', 0, 0, '', 'Activo'),
(37, 'JUAN', 0, 0, '', 'Activo'),
(38, 'MELKIN', 0, 0, '', 'Activo'),
(39, 'YILBERTH', 0, 0, '', 'Activo'),
(40, 'ABRAHAN', 0, 0, '', 'Activo'),
(41, 'BERMAN', 0, 0, '', 'Activo'),
(42, 'YOEL', 0, 0, '', 'Activo'),
(43, 'MANUEL', 0, 0, '', 'Activo'),
(44, 'CARLOS', 0, 0, '', 'Activo'),
(45, 'ALCIVIADES', 0, 0, '', 'Activo'),
(46, 'FELIX', 0, 0, '', 'Activo'),
(47, 'WISTON', 0, 0, '', 'Activo'),
(48, 'JOSE (CHEPE)', 0, 0, '', 'Activo'),
(49, 'OLMAN', 0, 0, '', 'Activo'),
(50, 'CELESTINO', 0, 0, '', 'Activo'),
(51, 'ROGER', 0, 0, '', 'Activo'),
(52, 'Elyin', 0, 0, '', 'Activo'),
(53, 'Roger yunior', 0, 0, '', 'Activo'),
(54, 'Hector', 0, 0, '', 'Activo'),
(55, 'Wilton ', 0, 0, '', 'Activo'),
(56, 'FERNANDO', 0, 0, '', 'Activo'),
(57, 'CERAFIN', 0, 0, '', 'Activo'),
(58, 'LUCIANO', 0, 0, '', 'Activo'),
(59, 'DEYRING', 0, 0, '', 'Activo'),
(60, 'Angelin', 0, 0, '', 'Activo'),
(61, 'GUISELLE', 0, 0, '', 'Activo'),
(62, 'Luis Camacho', 0, 0, '', 'Activo'),
(63, 'Jose David', 0, 0, '', 'Activo'),
(64, 'Silian', 0, 0, '', 'Activo');

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
(1, 'EL Rosario', 'la fila, aserrí, desamparados', 304900948),
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
(1, 1, 1, '2020-08-21', 10, 2),
(2, 1, 1, '2020-08-23', 1, 2),
(3, 1, 2, '2020-08-23', 20, 2),
(4, 1, 1, '2020-08-24', 1, 2),
(5, 1, 2, '2020-08-24', 5, 2),
(6, 3, 2, '2020-08-24', 5, 1),
(7, 4, 1, '2020-08-24', 6, 1),
(8, 8, 2, '2020-08-24', 4, 5),
(9, 3, 1, '2020-08-24', 10, 1),
(10, 64, 1, '2020-08-24', 10, 2),
(11, 2, 1, '2020-08-24', 3, 2),
(12, 5, 1, '2020-08-24', 5, 1);

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
  MODIFY `id_registro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
