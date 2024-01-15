-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-01-2024 a las 01:34:13
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `vitaplan`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gago`
--

CREATE TABLE `gago` (
  `id` int(6) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `apellidoP` varchar(255) NOT NULL,
  `apellidoM` varchar(255) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `telefono` varchar(20) NOT NULL,
  `especialidad` varchar(255) NOT NULL,
  `numero_identificacion` varchar(20) NOT NULL,
  `curp` varchar(30) DEFAULT NULL,
  `ID_paciente` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `gago`
--

INSERT INTO `gago` (`id`, `email`, `apellidoP`, `apellidoM`, `nombre`, `telefono`, `especialidad`, `numero_identificacion`, `curp`, `ID_paciente`) VALUES
(1, 'gago@gmail.com', 'ruben ', 'gago', NULL, '5555555555', 'tecnico', '37', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hierro`
--

CREATE TABLE `hierro` (
  `id` int(6) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `apellidoP` varchar(255) NOT NULL,
  `apellidoM` varchar(255) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `telefono` varchar(20) NOT NULL,
  `especialidad` varchar(255) NOT NULL,
  `numero_identificacion` varchar(20) NOT NULL,
  `curp` varchar(30) DEFAULT NULL,
  `ID_paciente` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `hierro`
--

INSERT INTO `hierro` (`id`, `email`, `apellidoP`, `apellidoM`, `nombre`, `telefono`, `especialidad`, `numero_identificacion`, `curp`, `ID_paciente`) VALUES
(1, 'hierro@gmail.com', 'fernando', 'hierro', NULL, '5555555555', 'director deportivo', '55', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jose`
--

CREATE TABLE `jose` (
  `id` int(6) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `apellidoP` varchar(255) NOT NULL,
  `apellidoM` varchar(255) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `telefono` varchar(20) NOT NULL,
  `especialidad` varchar(255) NOT NULL,
  `numero_identificacion` varchar(20) NOT NULL,
  `curp` varchar(30) DEFAULT NULL,
  `ID_paciente` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `jose`
--

INSERT INTO `jose` (`id`, `email`, `apellidoP`, `apellidoM`, `nombre`, `telefono`, `especialidad`, `numero_identificacion`, `curp`, `ID_paciente`) VALUES
(1, 'admin@gmail.com', 'lopez', 'gonzalez', NULL, '1234567890|', 'doctor', '123', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lujan`
--

CREATE TABLE `lujan` (
  `id` int(6) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `apellidoP` varchar(255) NOT NULL,
  `apellidoM` varchar(255) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `especialidad` varchar(255) NOT NULL,
  `numero_identificacion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `lujan`
--

INSERT INTO `lujan` (`id`, `email`, `apellidoP`, `apellidoM`, `telefono`, `especialidad`, `numero_identificacion`) VALUES
(1, 'lujan', 'lujan', 'lujan', 'lujan', 'lujan', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nutriologos`
--

CREATE TABLE `nutriologos` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellidoP` varchar(100) NOT NULL,
  `apellidoM` varchar(100) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `especialidad` varchar(100) NOT NULL,
  `numeroIdentificacion` varchar(100) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `contraseña` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `nutriologos`
--

INSERT INTO `nutriologos` (`id`, `email`, `nombre`, `apellidoP`, `apellidoM`, `telefono`, `especialidad`, `numeroIdentificacion`, `usuario`, `contraseña`) VALUES
(4, 'lujan', 'lujan', 'lujan', 'lujan', 'lujan', 'lujan', 'lujan', 'lujan', 'lujan'),
(10, 'qwerty', 'qwerty', 'qwerty', 'qwerty', 'qwerty', 'qwerty', 'qwerty', 'qwerty', 'qwerty'),
(11, 'jacksaul.86@gmail.com', 'ozuna', 'martinez', 'ocasio', '018007777', 'pediatra', '777', 'ozuna', 'kkkk'),
(12, 'rauw@gmail.com', 'rauw', 'alejendro', 'bellako', '1234567890', 'infantil', '22', 'rauw', 'FEPI'),
(14, 'admin@gmail.com', 'jose', 'lopez', 'gonzalez', '1234567890|', 'doctor', '123', 'jose', '1234'),
(16, 'gago@gmail.com', 'Gago', 'ruben ', 'gago', '5555555555', 'tecnico', '37', 'Gago', '1234'),
(17, 'hierro@gmail.com', 'hierro', 'fernando', 'hierro', '5555555555', 'director deportivo', '55', 'Hierro', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ozuna`
--

CREATE TABLE `ozuna` (
  `id` int(6) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `apellidoP` varchar(255) NOT NULL,
  `apellidoM` varchar(255) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `telefono` varchar(20) NOT NULL,
  `especialidad` varchar(255) NOT NULL,
  `numero_identificacion` varchar(20) NOT NULL,
  `curp` varchar(30) DEFAULT NULL,
  `ID_paciente` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ozuna`
--

INSERT INTO `ozuna` (`id`, `email`, `apellidoP`, `apellidoM`, `nombre`, `telefono`, `especialidad`, `numero_identificacion`, `curp`, `ID_paciente`) VALUES
(1, 'jacksaul.86@gmail.com', 'martinez', 'ocasio', NULL, '018007777', 'pediatra', '777', NULL, NULL),
(2, 'felipe', 'martinez ', 'osornio', 'felipe', '55555555555', '', '', 'FMO1972', '18'),
(3, 'felipe', 'martinez ', 'osornio', 'felipe', '55555555555', '', '', 'FMO1972', '18'),
(4, 'felipe', 'martinez ', 'osornio', 'felipe', '55555555555', '', '', 'FMO1972', '18'),
(5, 'felipe', 'martinez ', 'osornio', 'felipe', '55555555555', '', '', 'FMO1972', '18'),
(6, 'gato', 'gato', 'gato', 'gato', 'gato', '', '', 'gato', '6'),
(7, 'gato', 'gato', 'gato', 'gato', 'gato', '', '', 'gato', '6'),
(8, 'martinezjimenezsauljacob@gmail.com', 'yandel', 'wisin', 'wisin', '1234567890', '', '', 'wisin', '19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `id_p` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellidoP` varchar(100) NOT NULL,
  `apellidoM` varchar(100) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `curp` varchar(100) NOT NULL,
  `contraseña` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`id_p`, `email`, `nombre`, `apellidoP`, `apellidoM`, `telefono`, `curp`, `contraseña`) VALUES
(17, 'asdfg', 'asdfg', 'asdfg', 'asdfg', 'asdfg', 'asdfg', 'asdfgasdfg'),
(24, 'brian@gmail.com', 'brian', 'brian', 'brian', 'brian', 'brian', 'brian'),
(25, 'duki@gmail.com', 'duki', 'martinez', 'jimenez', '0987654321', 'DMJ', '1234'),
(26, 'alexis@gmail.com', 'alexis', 'vega', 'rojas', '5555555555', 'AVR', '1234'),
(27, 'yael@gmail.com', 'yael', 'padilla', 'sandoval', '5555555555', 'YPS', '1234'),
(28, 'chicharito@gmail.com', 'javier', 'hernandez', 'balcazar', '5555555555', 'CH14', '1234'),
(29, 'piojo@gmail.com', 'roberto', 'alvarado', 'hernandez', '5555555555', 'RAH', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `qwerty`
--

CREATE TABLE `qwerty` (
  `id` int(6) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `apellidoP` varchar(255) NOT NULL,
  `apellidoM` varchar(255) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `especialidad` varchar(255) NOT NULL,
  `numero_identificacion` varchar(20) NOT NULL,
  `curp` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `qwerty`
--

INSERT INTO `qwerty` (`id`, `email`, `apellidoP`, `apellidoM`, `telefono`, `especialidad`, `numero_identificacion`, `curp`) VALUES
(1, 'qwerty', 'qwerty', 'qwerty', 'qwerty', 'qwerty', 'qwerty', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rauw`
--

CREATE TABLE `rauw` (
  `id` int(6) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `apellidoP` varchar(255) NOT NULL,
  `apellidoM` varchar(255) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `telefono` varchar(20) NOT NULL,
  `especialidad` varchar(255) NOT NULL,
  `numero_identificacion` varchar(20) NOT NULL,
  `curp` varchar(30) DEFAULT NULL,
  `ID_paciente` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rauw`
--

INSERT INTO `rauw` (`id`, `email`, `apellidoP`, `apellidoM`, `nombre`, `telefono`, `especialidad`, `numero_identificacion`, `curp`, `ID_paciente`) VALUES
(1, 'rauw@gmail.com', 'alejendro', 'bellako', NULL, '1234567890', 'infantil', '22', NULL, NULL),
(2, 'asdfg@gmail.com', 'ramirez', 'juarez', 'duki', '5526644722', '', '', 'DRJ99', '21'),
(3, 'asdfg', 'asdfg', 'asdfg', 'asdfg', 'asdfg', '', '', 'asdfg', '17');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `gago`
--
ALTER TABLE `gago`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `hierro`
--
ALTER TABLE `hierro`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `jose`
--
ALTER TABLE `jose`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `lujan`
--
ALTER TABLE `lujan`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `nutriologos`
--
ALTER TABLE `nutriologos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ozuna`
--
ALTER TABLE `ozuna`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id_p`);

--
-- Indices de la tabla `qwerty`
--
ALTER TABLE `qwerty`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rauw`
--
ALTER TABLE `rauw`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `gago`
--
ALTER TABLE `gago`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `hierro`
--
ALTER TABLE `hierro`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `jose`
--
ALTER TABLE `jose`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `lujan`
--
ALTER TABLE `lujan`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `nutriologos`
--
ALTER TABLE `nutriologos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `ozuna`
--
ALTER TABLE `ozuna`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id_p` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `qwerty`
--
ALTER TABLE `qwerty`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `rauw`
--
ALTER TABLE `rauw`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
