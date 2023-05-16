-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-05-2023 a las 18:42:04
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login_p2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `autor` varchar(50) NOT NULL,
  `isbn` int(13) NOT NULL,
  `fecha_publicacion` date NOT NULL,
  `editorial` varchar(25) NOT NULL,
  `numero_pag` int(100) NOT NULL,
  `idioma` varchar(25) NOT NULL,
  `formato` varchar(25) NOT NULL,
  `precio` int(255) NOT NULL,
  `valoracion` int(5) NOT NULL,
  `disponibilidad` varchar(25) NOT NULL,
  `nivel_lectura` varchar(25) NOT NULL,
  `pais_origen` varchar(25) NOT NULL,
  `categoria` varchar(25) NOT NULL,
  `licencia` varchar(25) NOT NULL,
  `sinopsis` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id`, `nombre`, `autor`, `isbn`, `fecha_publicacion`, `editorial`, `numero_pag`, `idioma`, `formato`, `precio`, `valoracion`, `disponibilidad`, `nivel_lectura`, `pais_origen`, `categoria`, `licencia`, `sinopsis`) VALUES
(1, 'El último deseo', 'Andrzej Sapkowski', 2147483647, '1993-11-28', 'ALAMUT', 286, 'polaco', 'fisico', 100000, 5, 'en stock', 'Juvenil', 'Polonia', 'fantastico', 'derechos de autor', 'Sigue las aventuras del cazador de monstruos Geralt de Rivia en un mundo de magia y criaturas sobrenaturales. A través de una serie de relatos interconectados, Geralt enfrenta desafíos mortales, lucha contra bestias y se ve involucrado en intrigas políticas mientras busca su destino. Este libro es el comienzo de la aclamada saga de fantasía \"The Witcher\"');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `user_login` varchar(25) NOT NULL,
  `mail_login` varchar(25) NOT NULL,
  `pass_login` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id`, `user_login`, `mail_login`, `pass_login`) VALUES
(1, 'Jacobo', 'Jaco@email.com', '12345');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
