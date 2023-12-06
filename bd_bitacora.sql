-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-11-2023 a las 01:35:22
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_bitacora`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t-bitacora1`
--

CREATE TABLE `t-bitacora1` (
  `Clave` int(10) NOT NULL COMMENT 'ES EL CAMPO PRICIPAL, SE COMPONE ',
  `Fecha` date NOT NULL COMMENT 'ES LA FECHA DEL DIA QUE OCUPA EL EQUIPO DE COMPUTO ',
  `Nombre` text NOT NULL COMMENT 'ALUMNO',
  `Hora- Entrada` time NOT NULL COMMENT 'ES LA HORA DE ENTRADA DE LABORATORIO',
  `Hora-Salida` time NOT NULL COMMENT 'ES LA HORA DE SAIDA DE LABORATORIO',
  `Grupo` text NOT NULL COMMENT 'ES EL GRUPO DEL ALUMNO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='ES LA TABLA 1, DE DATOS DEL ALUMNO QUE USA EL EQUIPO ';

--
-- Volcado de datos para la tabla `t-bitacora1`
--

INSERT INTO `t-bitacora1` (`Clave`, `Fecha`, `Nombre`, `Hora- Entrada`, `Hora-Salida`, `Grupo`) VALUES
(1, '2023-10-25', 'Rodrigo', '07:00:00', '12:00:00', '5°G'),
(2, '2023-10-23', 'Luis', '14:00:00', '19:00:00', '5°H'),
(3, '2023-11-22', 'Eder', '11:23:55', '15:23:55', '5°F'),
(4, '2023-11-24', 'Regina', '11:30:00', '15:30:00', '5°E'),
(5, '2023-11-24', 'Vanesa', '15:30:00', '19:00:00', '5°N'),
(6, '2023-11-25', 'Yael', '07:30:00', '11:00:00', '5°B'),
(7, '2023-11-25', 'Kevin', '13:00:00', '17:00:00', '5°K'),
(8, '2023-11-26', 'Lesli', '07:00:00', '12:00:00', '5°M'),
(9, '2023-11-26', 'Said', '13:00:00', '18:00:00', '5°H'),
(10, '2023-11-27', 'Angel', '07:00:00', '11:00:00', '5°D');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t-bitacora2`
--

CREATE TABLE `t-bitacora2` (
  `Clave` int(4) NOT NULL COMMENT 'ES EL CAMPO PRINCIPAL',
  `Materia` text NOT NULL COMMENT 'ES EL NOMBRE DE LA MATERIA O MODULO QUE ESTA CURSANDO.',
  `Profesor` text NOT NULL COMMENT 'ES EL NOMBRE DEL PROFESOR ',
  `Observaciones` text NOT NULL COMMENT 'SON LAS CONDICIONES CON LAS QUE SE ENCUENTRA EL TIPO DE COMPUTO ',
  `Persona-Libera` text NOT NULL COMMENT 'PERSONA QUE REVISA LAS OBSERVACIONES DEL USO DEL EQUIPO DEL COMPUTO ',
  `Num- Computadora` int(2) NOT NULL COMMENT 'NUMERO DE LA COMPUTADORA UTILIZADA '
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='ES LA TABLA 2 DE LA BITACORA, TIENE LOS DATOS DEL UESO DEL C';

--
-- Volcado de datos para la tabla `t-bitacora2`
--

INSERT INTO `t-bitacora2` (`Clave`, `Materia`, `Profesor`, `Observaciones`, `Persona-Libera`, `Num- Computadora`) VALUES
(1, 'Modulo', 'Sonia', 'TODO BIEN', 'Diego', 6),
(2, 'Ecologia', 'Gabriela', 'Todo Bien', 'Alondra', 7),
(3, ' Modulo', ' Miriam', 'No funciona es scroll ', 'Daniela', 8),
(4, ' Ciencias sociales', ' Ernesto', 'No funciona es scroll ', 'Alondra', 8),
(5, 'Ingles', 'Primo', 'No funciona es scroll ', 'Alfonso', 8),
(6, 'Calculo', ' Alberto', 'No funciona es scroll ', 'Diego', 8),
(7, 'Fisica', 'Germán', 'No funciona es scroll ', 'Alfonso', 8),
(8, 'Igles', 'Soledad', 'No funciona es scroll ', 'Daniela', 8),
(9, ' Modulo', ' Liliana', 'No funciona es scroll ', 'Alfonso', 8),
(10, 'Tutoria', 'Maria', 'No funciona es scroll ', 'Daniela', 8);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `t-bitacora1`
--
ALTER TABLE `t-bitacora1`
  ADD PRIMARY KEY (`Clave`);

--
-- Indices de la tabla `t-bitacora2`
--
ALTER TABLE `t-bitacora2`
  ADD PRIMARY KEY (`Clave`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `t-bitacora2`
--
ALTER TABLE `t-bitacora2`
  ADD CONSTRAINT `t-bitacora2_ibfk_1` FOREIGN KEY (`Clave`) REFERENCES `t-bitacora1` (`Clave`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
