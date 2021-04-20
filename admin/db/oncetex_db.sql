-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-12-2016 a las 20:25:06
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `oncetex_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` bigint(20) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `titulo` varchar(80) NOT NULL,
  `tela` text,
  `colores` varchar(255) DEFAULT NULL,
  `talles` varchar(255) DEFAULT NULL,
  `precio` varchar(10) NOT NULL,
  `destacado` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `imagen`, `descripcion`, `titulo`, `tela`, `colores`, `talles`, `precio`, `destacado`) VALUES
(1, 'img/productos/Chomba_masc.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod fringilla lectus, at mollis orci scelerisque vestibulum. Donec accumsan sem facilisis orci euismod dictum. In mattis vel metus in pharetra. In hac habitasse platea dictumst. Proin vehicula urna eget cursus luctus. Vivamus dapibus eleifend nisi, nec dapibus mi pulvinar a. Aenean erat nibh, tempor vel lorem ut, cursus blandit metus. Praesent ultricies eros at ipsum porttitor, vel volutpat nisl consectetur. Vivamus ultrices egestas porta. Morbi non viverra lacus, eu hendrerit purus. Duis quis velit id nunc dictum tempor. Pellentesque placerat orci augue, nec feugiat mauris iaculis a. Pellentesque ullamcorper finibus magna, ut elementum quam gravida eu.', 'Chomba ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod fringilla lectus, at mollis orci scelerisque vestibulum. Donec accumsan sem facilisis orci euismod dictum. In mattis vel metus in pharetra. In hac habitasse platea dictumst. Proin vehicula urna eget cursus luctus. Vivamus dapibus eleifend nisi, nec dapibus mi pulvinar a. Aenean erat nibh, tempor vel lorem ut, cursus blandit metus. Praesent ultricies eros at ipsum porttitor, vel volutpat nisl consectetur. Vivamus ultrices egestas porta. Morbi non viverra lacus, eu hendrerit purus. Duis quis velit id nunc dictum tempor. Pellentesque placerat orci augue, nec feugiat mauris iaculis a. Pellentesque ullamcorper finibus magna, ut elementum quam gravida eu.', 'red,blue', 'L', '78', 1),
(2, 'img/productos/Musculosa_blanca_fem.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod fringilla lectus, at mollis orci scelerisque vestibulum. Donec accumsan sem facilisis orci euismod dictum. In mattis vel metus in pharetra. In hac habitasse platea dictumst. Proin vehicula urna eget cursus luctus. Vivamus dapibus eleifend nisi, nec dapibus mi pulvinar a. Aenean erat nibh, tempor vel lorem ut, cursus blandit metus. Praesent ultricies eros at ipsum porttitor, vel volutpat nisl consectetur. Vivamus ultrices egestas porta. Morbi non viverra lacus, eu hendrerit purus. Duis quis velit id nunc dictum tempor. Pellentesque placerat orci augue, nec feugiat mauris iaculis a. Pellentesque ullamcorper finibus magna, ut elementum quam gravida eu.', 'Musculosa femenina ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod fringilla lectus, at mollis orci scelerisque vestibulum. Donec accumsan sem facilisis orci euismod dictum. In mattis vel metus in pharetra. In hac habitasse platea dictumst. Proin vehicula urna eget cursus luctus. Vivamus dapibus eleifend nisi, nec dapibus mi pulvinar a. Aenean erat nibh, tempor vel lorem ut, cursus blandit metus. Praesent ultricies eros at ipsum porttitor, vel volutpat nisl consectetur. Vivamus ultrices egestas porta. Morbi non viverra lacus, eu hendrerit purus. Duis quis velit id nunc dictum tempor. Pellentesque placerat orci augue, nec feugiat mauris iaculis a. Pellentesque ullamcorper finibus magna, ut elementum quam gravida eu.', 'white', 'S,M,L,XL', '100', 1),
(3, 'img/productos/Musculosa_negra_fem.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod fringilla lectus, at mollis orci scelerisque vestibulum. Donec accumsan sem facilisis orci euismod dictum. In mattis vel metus in pharetra. In hac habitasse platea dictumst. Proin vehicula urna eget cursus luctus. Vivamus dapibus eleifend nisi, nec dapibus mi pulvinar a. Aenean erat nibh, tempor vel lorem ut, cursus blandit metus. Praesent ultricies eros at ipsum porttitor, vel volutpat nisl consectetur. Vivamus ultrices egestas porta. Morbi non viverra lacus, eu hendrerit purus. Duis quis velit id nunc dictum tempor. Pellentesque placerat orci augue, nec feugiat mauris iaculis a. Pellentesque ullamcorper finibus magna, ut elementum quam gravida eu.', 'Musculosa escote V femenina ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod fringilla lectus, at mollis orci scelerisque vestibulum. Donec accumsan sem facilisis orci euismod dictum. In mattis vel metus in pharetra. In hac habitasse platea dictumst. Proin vehicula urna eget cursus luctus. Vivamus dapibus eleifend nisi, nec dapibus mi pulvinar a. Aenean erat nibh, tempor vel lorem ut, cursus blandit metus. Praesent ultricies eros at ipsum porttitor, vel volutpat nisl consectetur. Vivamus ultrices egestas porta. Morbi non viverra lacus, eu hendrerit purus. Duis quis velit id nunc dictum tempor. Pellentesque placerat orci augue, nec feugiat mauris iaculis a. Pellentesque ullamcorper finibus magna, ut elementum quam gravida eu.', 'blue,green ', 'S,L ', '25', 1),
(4, 'img/productos/Remera_blanca_fem.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod fringilla lectus, at mollis orci scelerisque vestibulum. Donec accumsan sem facilisis orci euismod dictum. In mattis vel metus in pharetra. In hac habitasse platea dictumst. Proin vehicula urna eget cursus luctus. Vivamus dapibus eleifend nisi, nec dapibus mi pulvinar a. Aenean erat nibh, tempor vel lorem ut, cursus blandit metus. Praesent ultricies eros at ipsum porttitor, vel volutpat nisl consectetur. Vivamus ultrices egestas porta. Morbi non viverra lacus, eu hendrerit purus. Duis quis velit id nunc dictum tempor. Pellentesque placerat orci augue, nec feugiat mauris iaculis a. Pellentesque ullamcorper finibus magna, ut elementum quam gravida eu.', 'Remera Masculina ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod fringilla lectus, at mollis orci scelerisque vestibulum. Donec accumsan sem facilisis orci euismod dictum. In mattis vel metus in pharetra. In hac habitasse platea dictumst. Proin vehicula urna eget cursus luctus. Vivamus dapibus eleifend nisi, nec dapibus mi pulvinar a. Aenean erat nibh, tempor vel lorem ut, cursus blandit metus. Praesent ultricies eros at ipsum porttitor, vel volutpat nisl consectetur. Vivamus ultrices egestas porta. Morbi non viverra lacus, eu hendrerit purus. Duis quis velit id nunc dictum tempor. Pellentesque placerat orci augue, nec feugiat mauris iaculis a. Pellentesque ullamcorper finibus magna, ut elementum quam gravida eu.', 'white', 'S,M,L,XL,XXL,TS', '88', 1),
(5, 'img/productos/Remera_blanca_masc.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod fringilla lectus, at mollis orci scelerisque vestibulum. Donec accumsan sem facilisis orci euismod dictum. In mattis vel metus in pharetra. In hac habitasse platea dictumst. Proin vehicula urna eget cursus luctus. Vivamus dapibus eleifend nisi, nec dapibus mi pulvinar a. Aenean erat nibh, tempor vel lorem ut, cursus blandit metus. Praesent ultricies eros at ipsum porttitor, vel volutpat nisl consectetur. Vivamus ultrices egestas porta. Morbi non viverra lacus, eu hendrerit purus. Duis quis velit id nunc dictum tempor. Pellentesque placerat orci augue, nec feugiat mauris iaculis a. Pellentesque ullamcorper finibus magna, ut elementum quam gravida eu.', 'Remera Masculina', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod fringilla lectus, at mollis orci scelerisque vestibulum. Donec accumsan sem facilisis orci euismod dictum. In mattis vel metus in pharetra. In hac habitasse platea dictumst. Proin vehicula urna eget cursus luctus. Vivamus dapibus eleifend nisi, nec dapibus mi pulvinar a. Aenean erat nibh, tempor vel lorem ut, cursus blandit metus. Praesent ultricies eros at ipsum porttitor, vel volutpat nisl consectetur. Vivamus ultrices egestas porta. Morbi non viverra lacus, eu hendrerit purus. Duis quis velit id nunc dictum tempor. Pellentesque placerat orci augue, nec feugiat mauris iaculis a. Pellentesque ullamcorper finibus magna, ut elementum quam gravida eu.', 'white', 'X', '35', 0),
(6, 'img/productos/Remera_negra_fem.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod fringilla lectus, at mollis orci scelerisque vestibulum. Donec accumsan sem facilisis orci euismod dictum. In mattis vel metus in pharetra. In hac habitasse platea dictumst. Proin vehicula urna eget cursus luctus. Vivamus dapibus eleifend nisi, nec dapibus mi pulvinar a. Aenean erat nibh, tempor vel lorem ut, cursus blandit metus. Praesent ultricies eros at ipsum porttitor, vel volutpat nisl consectetur. Vivamus ultrices egestas porta. Morbi non viverra lacus, eu hendrerit purus. Duis quis velit id nunc dictum tempor. Pellentesque placerat orci augue, nec feugiat mauris iaculis a. Pellentesque ullamcorper finibus magna, ut elementum quam gravida eu.', 'Remera Cuello Ancho Femenina ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod fringilla lectus, at mollis orci scelerisque vestibulum. Donec accumsan sem facilisis orci euismod dictum. In mattis vel metus in pharetra. In hac habitasse platea dictumst. Proin vehicula urna eget cursus luctus. Vivamus dapibus eleifend nisi, nec dapibus mi pulvinar a. Aenean erat nibh, tempor vel lorem ut, cursus blandit metus. Praesent ultricies eros at ipsum porttitor, vel volutpat nisl consectetur. Vivamus ultrices egestas porta. Morbi non viverra lacus, eu hendrerit purus. Duis quis velit id nunc dictum tempor. Pellentesque placerat orci augue, nec feugiat mauris iaculis a. Pellentesque ullamcorper finibus magna, ut elementum quam gravida eu.', 'black,white', 'L,XL', '36', 1),
(7, 'productos/img/Remera_negra_masc.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod fringilla lectus, at mollis orci scelerisque vestibulum. Donec accumsan sem facilisis orci euismod dictum. In mattis vel metus in pharetra. In hac habitasse platea dictumst. Proin vehicula urna eget cursus luctus. Vivamus dapibus eleifend nisi, nec dapibus mi pulvinar a. Aenean erat nibh, tempor vel lorem ut, cursus blandit metus. Praesent ultricies eros at ipsum porttitor, vel volutpat nisl consectetur. Vivamus ultrices egestas porta. Morbi non viverra lacus, eu hendrerit purus. Duis quis velit id nunc dictum tempor. Pellentesque placerat orci augue, nec feugiat mauris iaculis a. Pellentesque ullamcorper finibus magna, ut elementum quam gravida eu.', 'Remera negra masculina ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod fringilla lectus, at mollis orci scelerisque vestibulum. Donec accumsan sem facilisis orci euismod dictum. In mattis vel metus in pharetra. In hac habitasse platea dictumst. Proin vehicula urna eget cursus luctus. Vivamus dapibus eleifend nisi, nec dapibus mi pulvinar a. Aenean erat nibh, tempor vel lorem ut, cursus blandit metus. Praesent ultricies eros at ipsum porttitor, vel volutpat nisl consectetur. Vivamus ultrices egestas porta. Morbi non viverra lacus, eu hendrerit purus. Duis quis velit id nunc dictum tempor. Pellentesque placerat orci augue, nec feugiat mauris iaculis a. Pellentesque ullamcorper finibus magna, ut elementum quam gravida eu.', 'black', 'XL,XLL,TS', '55', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` bigint(20) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
