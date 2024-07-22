-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-07-2024 a las 03:03:17
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
-- Base de datos: `ramirez_alfredo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `password` varchar(300) NOT NULL,
  `perfil_id` int(11) NOT NULL DEFAULT 2,
  `baja` varchar(2) NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `email`, `usuario`, `password`, `perfil_id`, `baja`) VALUES
(4, 'Alfredo Agustin', 'Ramirez', 'alfredo@gmail.com', 'agustinn36', '$2y$10$NSFiH0Op1qjguu.mL6262.p/i.ae/4m15tzYga3.lUIKZuai58kB6', 1, 'No'),
(6, 'Andres Luis', 'Rolon', 'andres@gmail.com', 'andres2024', '$2y$10$noQvO0Wd.P/qWg.eLkOAa.dt/.1JOnKGTqRGGmxQV1ug.e/HkmnIe', 2, 'No'),
(7, 'Anibal Jose', 'Ramirez', 'jose@gmail.com', 'jose2024', '$2y$10$hPOv6BhqR9FYswquYPaKV.Tu9KaqXbfI7fP6ZOzSg4ZBVSbZ7KOoe', 1, 'No'),
(8, 'Yesica Elisabeth', 'Ramirez', 'yesica@gmail.com', 'yesi1004', '$2y$10$qsSJBhmIVaN9re07xGeGy.6.c0HQV5zM6.XIe.Kkya8j0hNMWXCUm', 1, 'No');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
