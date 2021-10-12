-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-10-2021 a las 06:11:52
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fruver_pdo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `Id_persona` varchar(200) NOT NULL,
  `Nombre` varchar(200) NOT NULL,
  `Apellido` varchar(200) NOT NULL,
  `Telefono` varchar(200) NOT NULL,
  `Correo` varchar(200) NOT NULL,
  `Contraseña` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`Id_persona`, `Nombre`, `Apellido`, `Telefono`, `Correo`, `Contraseña`) VALUES
('1012', 'Camilo', 'Cuervo', '3014391260', 'bccuervo@gmail.com', '12345'),
('1013123698', 'Luisa', 'Castro', '3205968541', 'luisa@gmail.com', '789456'),
('5698745632', 'Laura Daniela', 'Hernandez Casas', '3205968541', 'LauraD@gmail.com', '741852'),
('9999', 'Raul', 'Ruiz', '3118963587', 'raul@gmail.com', '369852'),
('1031145591', 'jonathan steven', 'naranjo diaz ', '3107523720', 'jonathannd2301@gmail.com', '12345'),
('1031145591', 'jonathan steven', 'naranjo diaz ', '3107523720', 'jonathannd2301@gmail.com', '12345');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
