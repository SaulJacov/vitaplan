-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-01-2024 a las 07:35:55
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
-- Estructura de tabla para la tabla `anuel`
--

CREATE TABLE `anuel` (
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
-- Volcado de datos para la tabla `anuel`
--

INSERT INTO `anuel` (`id`, `email`, `apellidoP`, `apellidoM`, `telefono`, `especialidad`, `numero_identificacion`, `curp`) VALUES
(1, 'anuel aa', 'anuel aa', 'anuel aa', 'anuel', 'anuel', 'anuel', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anuel_aa`
--

CREATE TABLE `anuel_aa` (
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
-- Volcado de datos para la tabla `anuel_aa`
--

INSERT INTO `anuel_aa` (`id`, `email`, `apellidoP`, `apellidoM`, `telefono`, `especialidad`, `numero_identificacion`, `curp`) VALUES
(1, 'anuel aa', 'anuel aa', 'anuel aa', 'anuel', 'anuel', 'anuel', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `isabel`
--

CREATE TABLE `isabel` (
  `id` int(6) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `apellidoP` varchar(255) NOT NULL,
  `apellidoM` varchar(255) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `especialidad` varchar(255) NOT NULL,
  `numero_identificacion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `isabel`
--

INSERT INTO `isabel` (`id`, `email`, `apellidoP`, `apellidoM`, `telefono`, `especialidad`, `numero_identificacion`) VALUES
(1, 'isabel', 'isabel', 'isabel', 'isabel', 'isabel', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jacov_saul`
--

CREATE TABLE `jacov_saul` (
  `id` int(6) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `apellidoP` varchar(255) NOT NULL,
  `apellidoM` varchar(255) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `especialidad` varchar(255) NOT NULL,
  `numero_identificacion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `jacov_saul`
--

INSERT INTO `jacov_saul` (`id`, `email`, `apellidoP`, `apellidoM`, `telefono`, `especialidad`, `numero_identificacion`) VALUES
(1, 'miguelmiguel', 'miguel', 'miguelmiguel', 'miguel', 'miguel', 'miguel');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jjjjjjjj`
--

CREATE TABLE `jjjjjjjj` (
  `id` int(6) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `apellidoP` varchar(255) NOT NULL,
  `apellidoM` varchar(255) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `especialidad` varchar(255) NOT NULL,
  `numero_identificacion` varchar(20) NOT NULL,
  `curp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `jjjjjjjj`
--

INSERT INTO `jjjjjjjj` (`id`, `email`, `apellidoP`, `apellidoM`, `telefono`, `especialidad`, `numero_identificacion`, `curp`) VALUES
(1, 'jjjjjjjj', 'jjjjjjjj', 'jjjjjjjj', 'jjjjjjjj', 'jjjjjjjj', 'jjjjjjjj', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `joaquin`
--

CREATE TABLE `joaquin` (
  `id` int(6) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `apellidoP` varchar(255) NOT NULL,
  `apellidoM` varchar(255) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `especialidad` varchar(255) NOT NULL,
  `numero_identificacion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `joaquin`
--

INSERT INTO `joaquin` (`id`, `email`, `apellidoP`, `apellidoM`, `telefono`, `especialidad`, `numero_identificacion`) VALUES
(1, 'joaquin', 'joaquin', 'joaquin', 'joaquin', 'joaquin', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `joel`
--

CREATE TABLE `joel` (
  `id` int(6) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `apellidoP` varchar(255) NOT NULL,
  `apellidoM` varchar(255) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `especialidad` varchar(255) NOT NULL,
  `numero_identificacion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `joel`
--

INSERT INTO `joel` (`id`, `email`, `apellidoP`, `apellidoM`, `telefono`, `especialidad`, `numero_identificacion`) VALUES
(1, 'joel', 'joel', 'joel', 'joel', 'joel|', 'joel');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juanito`
--

CREATE TABLE `juanito` (
  `id` int(6) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `apellidoP` varchar(255) NOT NULL,
  `apellidoM` varchar(255) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `especialidad` varchar(255) NOT NULL,
  `numero_identificacion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `juanito`
--

INSERT INTO `juanito` (`id`, `email`, `apellidoP`, `apellidoM`, `telefono`, `especialidad`, `numero_identificacion`) VALUES
(1, 'juanito', 'juanito', 'juanito', 'juanito', 'juanito', '');

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
(1, '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(2, 'isabel', 'isabel', 'isabel', 'isabel', '0', '0', '0', '0', '0'),
(3, 'maria', 'maria', 'maria', 'maria', 'v', 'maria', 'maria', 'maria', 'maria'),
(4, 'lujan', 'lujan', 'lujan', 'lujan', 'lujan', 'lujan', 'lujan', 'lujan', 'lujan'),
(5, 'joaquin', 'joaquin', 'joaquin', 'joaquin', 'joaquin', 'joaquin', '', 'joaquin', 'joaquin'),
(6, 'jjjjjjjj', 'jjjjjjjj', 'jjjjjjjj', 'jjjjjjjj', 'jjjjjjjj', 'jjjjjjjj', 'jjjjjjjj', 'jjjjjjjj', 'jjjjjjjj'),
(7, 'xxxxx', 'xxxxx', 'xxxxx', 'xxxxx', 'xxxxx', 'xxxxx', 'xxxxx', 'xxxxx', 'xxxxx'),
(8, 'anuel aa', 'anuel aa', 'anuel aa', 'anuel aa', 'anuel', 'anuel', 'anuel', 'anuel', 'anuel'),
(9, 'anuel aa', 'anuel', 'anuel aa', 'anuel aa', 'anuel', 'anuel', 'anuel', 'anuel', 'anuel'),
(10, 'qwerty', 'qwerty', 'qwerty', 'qwerty', 'qwerty', 'qwerty', 'qwerty', 'qwerty', 'qwerty'),
(11, 'jacksaul.86@gmail.com', 'ozuna', 'martinez', 'ocasio', '018007777', 'pediatra', '777', 'ozuna', 'kkkk'),
(12, 'rauw@gmail.com', 'rauw', 'alejendro', 'bellako', '1234567890', 'infantil', '22', 'rauw', 'FEPI'),
(13, 'www', 'www', 'www', 'www', 'www', 'www', 'www', 'www', 'www');

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
(1, '0', '0', '0', '0', '0', '0', '0'),
(2, '0', '0', '0', '0', '0', '0', '0'),
(3, '', '', '', '', '', '', ''),
(4, '', '', '', '', '', '', ''),
(5, '', '', '', '', '', '', ''),
(6, 'gato', 'gato', 'gato', 'gato', 'gato', 'gato', 'gato'),
(7, 'paciente', 'paciente', 'paciente', 'paciente', 'paciente', 'paciente', 'paciente'),
(8, '', '', '', '', '', '', ''),
(9, '', '', '', '', '', '', ''),
(10, '', '', '', '', '', '', ''),
(11, 'jacov', 'jacov', 'jacov', 'jacov', 'jacov', 'jacov', 'jacov'),
(12, 'jacov', 'jacov', 'jacov', 'jacov', 'jacov', 'jacov', 'rrrrrr'),
(13, 'saul', 'saul', 'saul', 'saul', 'saul', 'saul', 'saul'),
(14, '', '', '', '', '', '', ''),
(15, '', '', '', '', '', '', ''),
(16, '', '', '', '', '', '', ''),
(17, 'asdfg', 'asdfg', 'asdfg', 'asdfg', 'asdfg', 'asdfg', 'asdfgasdfg'),
(18, 'felipe', 'felipe', 'martinez ', 'osornio', '55555555555', 'FMO1972', 'qwerty'),
(19, 'martinezjimenezsauljacob@gmail.com', 'wisin', 'yandel', 'wisin', '1234567890', 'wisin', '123456'),
(20, 'martinezjimenezsauljacob@gmail.com', 'wisin', 'yandel', 'wisin', '1234567890', 'wisin', 'qwerty'),
(21, 'asdfg@gmail.com', 'duki', 'ramirez', 'juarez', '5526644722', 'DRJ99', 'fepi'),
(22, '1234', '1234', '1234', '1234', '1234', '1234', '1234'),
(23, 'qqqq', 'qqqq', 'qqqq', 'qqqq', 'qqqq', 'qqqq', 'qqqq'),
(24, 'brian@gmail.com', 'brian', 'brian', 'brian', 'brian', 'brian', 'brian');

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `www`
--

CREATE TABLE `www` (
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
-- Volcado de datos para la tabla `www`
--

INSERT INTO `www` (`id`, `email`, `apellidoP`, `apellidoM`, `nombre`, `telefono`, `especialidad`, `numero_identificacion`, `curp`, `ID_paciente`) VALUES
(1, 'www', 'www', 'www', NULL, 'www', 'www', 'www', NULL, NULL),
(2, 'qqqq', 'qqqq', 'qqqq', 'qqqq', 'qqqq', '', '', 'qqqq', '23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `xxxxx`
--

CREATE TABLE `xxxxx` (
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
-- Volcado de datos para la tabla `xxxxx`
--

INSERT INTO `xxxxx` (`id`, `email`, `apellidoP`, `apellidoM`, `telefono`, `especialidad`, `numero_identificacion`, `curp`) VALUES
(1, 'xxxxx', 'xxxxx', 'xxxxx', 'xxxxx', 'xxxxx', 'xxxxx', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `anuel`
--
ALTER TABLE `anuel`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `anuel_aa`
--
ALTER TABLE `anuel_aa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `isabel`
--
ALTER TABLE `isabel`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `jacov_saul`
--
ALTER TABLE `jacov_saul`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `jjjjjjjj`
--
ALTER TABLE `jjjjjjjj`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `joaquin`
--
ALTER TABLE `joaquin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `joel`
--
ALTER TABLE `joel`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `juanito`
--
ALTER TABLE `juanito`
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
-- Indices de la tabla `www`
--
ALTER TABLE `www`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `xxxxx`
--
ALTER TABLE `xxxxx`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `anuel`
--
ALTER TABLE `anuel`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `anuel_aa`
--
ALTER TABLE `anuel_aa`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `isabel`
--
ALTER TABLE `isabel`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `jacov_saul`
--
ALTER TABLE `jacov_saul`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `jjjjjjjj`
--
ALTER TABLE `jjjjjjjj`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `joaquin`
--
ALTER TABLE `joaquin`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `joel`
--
ALTER TABLE `joel`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `juanito`
--
ALTER TABLE `juanito`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `ozuna`
--
ALTER TABLE `ozuna`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id_p` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

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

--
-- AUTO_INCREMENT de la tabla `www`
--
ALTER TABLE `www`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `xxxxx`
--
ALTER TABLE `xxxxx`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
