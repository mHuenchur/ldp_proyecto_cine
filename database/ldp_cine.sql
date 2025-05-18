-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 16, 2025 at 09:51 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ldp_cine`
--

-- --------------------------------------------------------

--
-- Table structure for table `cartelera`
--

CREATE TABLE `cartelera` (
  `carteleraID` int(10) UNSIGNED NOT NULL,
  `fechaInicio` date NOT NULL,
  `fechaFin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `cartelera`
--

INSERT INTO `cartelera` (`carteleraID`, `fechaInicio`, `fechaFin`) VALUES
(1, '2025-05-19', '2025-05-30');

-- --------------------------------------------------------

--
-- Table structure for table `comentario`
--

CREATE TABLE `comentario` (
  `comentarioID` int(10) UNSIGNED NOT NULL,
  `usuarioID` int(10) UNSIGNED NOT NULL,
  `peliculaID` int(10) UNSIGNED NOT NULL,
  `texto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `entrada`
--

CREATE TABLE `entrada` (
  `entradaID` int(10) UNSIGNED NOT NULL,
  `funcionID` int(10) UNSIGNED NOT NULL,
  `usuarioID` int(10) UNSIGNED NOT NULL,
  `precio` int(10) NOT NULL,
  `fechaFuncion` date NOT NULL,
  `horaFuncion` time NOT NULL,
  `fechaVenta` date NOT NULL,
  `horaVenta` time NOT NULL,
  `numeroTicket` int(10) NOT NULL,
  `anulado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `funcion`
--

CREATE TABLE `funcion` (
  `funcionID` int(10) UNSIGNED NOT NULL,
  `peliculaID` int(10) UNSIGNED NOT NULL,
  `salaID` int(10) UNSIGNED NOT NULL,
  `carteleraID` int(10) UNSIGNED NOT NULL,
  `horaInicio` time NOT NULL,
  `duracion` time NOT NULL,
  `numeroFuncion` int(10) NOT NULL,
  `precio` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pelicula`
--

CREATE TABLE `pelicula` (
  `peliculaID` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `tituloOriginal` varchar(45) NOT NULL,
  `duracion` time NOT NULL,
  `anioEstreno` date NOT NULL,
  `disponibilidad` tinyint(1) NOT NULL,
  `fechaIngreso` date NOT NULL,
  `sitioWeb` varchar(45) NOT NULL,
  `sinopsis` varchar(200) NOT NULL,
  `imagen` int(10) DEFAULT NULL,
  `actor` varchar(100) NOT NULL,
  `genero` varchar(45) NOT NULL,
  `pais` varchar(45) NOT NULL,
  `idioma` varchar(100) NOT NULL,
  `calificacion` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `pelicula`
--

INSERT INTO `pelicula` (`peliculaID`, `nombre`, `tituloOriginal`, `duracion`, `anioEstreno`, `disponibilidad`, `fechaIngreso`, `sitioWeb`, `sinopsis`, `imagen`, `actor`, `genero`, `pais`, `idioma`, `calificacion`) VALUES
(1, 'aaaaaaa', 'ssssssss', '01:16:31', '2015-05-05', 1, '2015-05-13', 'wwwwasasasasasas.com', 'qjdnqidhuiciuqsuidhiudhaidianjiisdhaidhahdiadisandnaidn', 23232323, 'ffefefefefefefasdadad', 'si', 'no', 'nose', 10);

-- --------------------------------------------------------

--
-- Table structure for table `perfil`
--

CREATE TABLE `perfil` (
  `perfilID` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `perfil`
--

INSERT INTO `perfil` (`perfilID`, `nombre`) VALUES
(1, 'administrador'),
(2, 'operador'),
(3, 'externo');

-- --------------------------------------------------------

--
-- Table structure for table `sala`
--

CREATE TABLE `sala` (
  `salaID` int(10) UNSIGNED NOT NULL,
  `capacidad` bigint(10) UNSIGNED NOT NULL,
  `numeroSala` bigint(10) UNSIGNED NOT NULL,
  `estado` tinyint(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `sala`
--

INSERT INTO `sala` (`salaID`, `capacidad`, `numeroSala`, `estado`) VALUES
(1, 100, 3, 1),
(2, 45, 32, 0),
(3, 33, 45, 1),
(4, 100, 700, 1),
(5, 1, 122, 0),
(6, 51, 87, 1),
(7, 56, 34, 1),
(8, 69, 98, 1),
(9, 2342342, 22, 0),
(10, 4343, 23, 1),
(11, 33, 1234, 1),
(12, 1321, 34132, 0),
(13, 99, 77, 1),
(14, 555, 323, 0),
(15, 21313, 34231, 1),
(16, 23, 0, 0),
(17, 232, 0, 0),
(18, 23, 0, 1),
(19, 23, 0, 1),
(20, 65, 0, 1),
(21, 423424, 32423424, 1),
(22, 0, 0, 1),
(23, 333333333, 111111111, 1),
(24, 1111111111, 1111111111, 1),
(25, 9999999999, 9999999999, 0),
(26, 1000, 789, 1),
(27, 990, 556, 1);

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `usuarioID` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `nombreUsuario` varchar(45) NOT NULL,
  `contraseña` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `perfilID` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`usuarioID`, `nombre`, `apellido`, `nombreUsuario`, `contraseña`, `correo`, `perfilID`) VALUES
(1, 'Mauricio Alberto', 'Huenchur', 'mHuenchur', '123456', 'mauricio@hotmail.com', 1),
(2, 'Lopez', 'Machado', 'lMachado', '1234jeje', 'sdad@gmail.com', 1),
(3, 'Jesica', 'Derr', 'jDerr', 'asdadh232', 'jDerr@gmail.com', 3),
(4, 'Manolo', 'Pierre', 'mPierre', 'qwer123', 'mPierre@gmail.com', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cartelera`
--
ALTER TABLE `cartelera`
  ADD PRIMARY KEY (`carteleraID`);

--
-- Indexes for table `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`comentarioID`);

--
-- Indexes for table `entrada`
--
ALTER TABLE `entrada`
  ADD PRIMARY KEY (`entradaID`),
  ADD KEY `fk_funcionID` (`funcionID`),
  ADD KEY `fk_usuarioID` (`usuarioID`);

--
-- Indexes for table `funcion`
--
ALTER TABLE `funcion`
  ADD PRIMARY KEY (`funcionID`),
  ADD KEY `fk_carteleraID` (`carteleraID`),
  ADD KEY `fk_peliculaID` (`peliculaID`),
  ADD KEY `fk_salaID` (`salaID`);

--
-- Indexes for table `pelicula`
--
ALTER TABLE `pelicula`
  ADD PRIMARY KEY (`peliculaID`);

--
-- Indexes for table `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`perfilID`);

--
-- Indexes for table `sala`
--
ALTER TABLE `sala`
  ADD PRIMARY KEY (`salaID`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuarioID`),
  ADD KEY `fk_perfil` (`perfilID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cartelera`
--
ALTER TABLE `cartelera`
  MODIFY `carteleraID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comentario`
--
ALTER TABLE `comentario`
  MODIFY `comentarioID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `entrada`
--
ALTER TABLE `entrada`
  MODIFY `entradaID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `funcion`
--
ALTER TABLE `funcion`
  MODIFY `funcionID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pelicula`
--
ALTER TABLE `pelicula`
  MODIFY `peliculaID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `perfil`
--
ALTER TABLE `perfil`
  MODIFY `perfilID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sala`
--
ALTER TABLE `sala`
  MODIFY `salaID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuarioID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `entrada`
--
ALTER TABLE `entrada`
  ADD CONSTRAINT `fk_funcionID` FOREIGN KEY (`funcionID`) REFERENCES `funcion` (`funcionID`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_usuarioID` FOREIGN KEY (`usuarioID`) REFERENCES `usuario` (`usuarioID`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `funcion`
--
ALTER TABLE `funcion`
  ADD CONSTRAINT `fk_carteleraID` FOREIGN KEY (`carteleraID`) REFERENCES `cartelera` (`carteleraID`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_peliculaID` FOREIGN KEY (`peliculaID`) REFERENCES `pelicula` (`peliculaID`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_salaID` FOREIGN KEY (`salaID`) REFERENCES `sala` (`salaID`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_perfil` FOREIGN KEY (`perfilID`) REFERENCES `perfil` (`perfilID`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
