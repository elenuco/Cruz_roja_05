-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-03-2019 a las 18:44:08
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cruz_roja`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cap_recibidas`
--

CREATE TABLE `cap_recibidas` (
  `id_capacitaciones` int(11) NOT NULL,
  `Nombre_Capacitacion` varchar(50) DEFAULT NULL,
  `Anio` year(4) DEFAULT NULL,
  `Impartido_Por` varchar(50) DEFAULT NULL,
  `Numero_Horas` varchar(50) DEFAULT NULL,
  `Observaciones` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cap_recibidas`
--

INSERT INTO `cap_recibidas` (`id_capacitaciones`, `Nombre_Capacitacion`, `Anio`, `Impartido_Por`, `Numero_Horas`, `Observaciones`) VALUES
(1, 'Primeros Auxilios', 2017, 'Juan Jose Martinez', '48', 'Excelente practica'),
(2, 'Reanimacion Cardio Pulmonar', 2018, 'Samuel Arias', '72', 'Muy buen rendimiento');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos_responsabilidades`
--

CREATE TABLE `cargos_responsabilidades` (
  `id_cargo` int(11) NOT NULL,
  `Nombre_Cargo` varchar(50) NOT NULL,
  `Periodo_Inicio` date NOT NULL,
  `Periodo_Finalizacion` date NOT NULL,
  `Estructura_Cruz_Roja` varchar(50) NOT NULL,
  `Observaciones` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cargos_responsabilidades`
--

INSERT INTO `cargos_responsabilidades` (`id_cargo`, `Nombre_Cargo`, `Periodo_Inicio`, `Periodo_Finalizacion`, `Estructura_Cruz_Roja`, `Observaciones`) VALUES
(1, 'Clinica Emergencia', '2018-05-01', '2018-09-30', 'San Salvador', 'Responsable y eficaz '),
(2, 'Centro de Sangre', '2018-10-01', '2019-01-30', 'Santa Tecla', 'Constante eficaz ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catacteristicas_personales`
--

CREATE TABLE `catacteristicas_personales` (
  `id_caracteristicas` int(11) NOT NULL,
  `Fortaleza` text,
  `Debilidades` text,
  `Valores` text,
  `Metas_Personales` text,
  `Pasatiempo_Favorito` text,
  `Tipo_Persona` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `catacteristicas_personales`
--

INSERT INTO `catacteristicas_personales` (`id_caracteristicas`, `Fortaleza`, `Debilidades`, `Valores`, `Metas_Personales`, `Pasatiempo_Favorito`, `Tipo_Persona`) VALUES
(1, 'Honestidad', 'Dependiente', 'Respeto', 'Crecer Dentro de la Institucion', 'Deporte', 'Apacionada al Trabajo'),
(2, 'Responsable', 'Impaciente', 'Respeto', 'Emprendedora', 'Deporte', 'Seria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto_emergencia`
--

CREATE TABLE `contacto_emergencia` (
  `id_contacto_emergencia` int(11) NOT NULL,
  `Nombre_Apellido` varchar(100) DEFAULT NULL,
  `Parentesco` varchar(50) DEFAULT NULL,
  `Direccion` text,
  `Telefono` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contacto_emergencia`
--

INSERT INTO `contacto_emergencia` (`id_contacto_emergencia`, `Nombre_Apellido`, `Parentesco`, `Direccion`, `Telefono`) VALUES
(1, 'Sandra Flores', 'Madre', 'San Salvador', '7520-6352'),
(2, 'Camila Escobar', 'Esposa', 'Santa Tecla', '7102-52632');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dataca_voluntario`
--

CREATE TABLE `dataca_voluntario` (
  `id_academicos` int(11) NOT NULL,
  `Estudios_Realizados` text,
  `Lugar_Diplomado` varchar(50) DEFAULT NULL,
  `Fecha_Expedicion_Diplomado` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `dataca_voluntario`
--

INSERT INTO `dataca_voluntario` (`id_academicos`, `Estudios_Realizados`, `Lugar_Diplomado`, `Fecha_Expedicion_Diplomado`) VALUES
(1, 'Tecnico Enfermeria', 'Escuela Tecnica para la Salud', '2016-10-30'),
(2, 'Bachiller en Salud', 'Inframen', '2015-10-30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_cruz_roja`
--

CREATE TABLE `datos_cruz_roja` (
  `id_datos_cruz_roja` int(11) NOT NULL,
  `Fecha_Ingreso` date DEFAULT NULL,
  `Tipo_voluntario_id` int(11) DEFAULT NULL,
  `Presidente_Seccional` varchar(50) DEFAULT NULL,
  `Jefe_DD_local` varchar(50) DEFAULT NULL,
  `V.B_Jefatura_Nacional` varchar(50) DEFAULT NULL,
  `V.B_Presidente_Departamental` varchar(50) DEFAULT NULL,
  `V.B_DIrector_Voluntariado_Seccional` varchar(50) DEFAULT NULL,
  `Capacitaciones_Recibidas_id` int(11) DEFAULT NULL,
  `Cargos_Responsabilidades_id` int(11) DEFAULT NULL,
  `Contacto_Emergencia_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_medicos`
--

CREATE TABLE `datos_medicos` (
  `id_datos_medicos` int(11) NOT NULL,
  `Tipo_Sanguineo` varchar(7) DEFAULT NULL,
  `Peso` double DEFAULT NULL,
  `Altura` double DEFAULT NULL,
  `Tipo_Enfermedades_id` int(11) DEFAULT NULL,
  `Especificaciones_Enfermedades` text,
  `Servicios_Asistenciales_id` int(11) DEFAULT NULL,
  `Contacto_Emergencia` varchar(20) DEFAULT NULL,
  `Direccion` text,
  `Telefono` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_personal`
--

CREATE TABLE `datos_personal` (
  `id_datos` int(11) NOT NULL,
  `Primer_Apellido` varchar(50) DEFAULT NULL,
  `Segundo_Apellido` varchar(50) DEFAULT NULL,
  `Nombres` varchar(50) DEFAULT NULL,
  `Lugar_Ncimiento` varchar(50) NOT NULL,
  `Fecha_Nac` date DEFAULT NULL,
  `Nacionalidad` varchar(50) DEFAULT NULL,
  `Sexo` varchar(50) DEFAULT NULL,
  `Estado_Civil` varchar(50) DEFAULT NULL,
  `Profecion_Oficio` varchar(50) DEFAULT NULL,
  `Nivel_Academico` varchar(50) DEFAULT NULL,
  `DUI` varchar(10) DEFAULT NULL,
  `Tipo_Sangre` varchar(10) DEFAULT NULL,
  `N°_Hijos` double DEFAULT NULL,
  `Direccion_Domiciliar` text,
  `Telefono_Fijo` varchar(10) DEFAULT NULL,
  `Telefono_Movil` varchar(10) DEFAULT NULL,
  `Nombre_Centro_Trabajo` varchar(50) DEFAULT NULL,
  `Direccion_Centro_Trabajo` varchar(50) DEFAULT NULL,
  `Telefonos` varchar(10) DEFAULT NULL,
  `Nombre_Centro_Estudio` varchar(50) DEFAULT NULL,
  `Direccion_Centro_Estudio` text,
  `Telefonos_Estudio` varchar(10) DEFAULT NULL,
  `Correo_Electronico` varchar(50) DEFAULT NULL,
  `Licencia` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_personal`
--

CREATE TABLE `detalle_personal` (
  `id_detalle_personal` int(11) NOT NULL,
  `datos_personal_id` int(11) NOT NULL,
  `datos_cruz_roja_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_solicitud`
--

CREATE TABLE `detalle_solicitud` (
  `id_detalle` int(11) NOT NULL,
  `Foto_Voluntario` varchar(100) DEFAULT NULL,
  `datos_generales_id` int(11) DEFAULT NULL,
  `academicos_id` int(11) DEFAULT NULL,
  `referencias_id` int(11) DEFAULT NULL,
  `datos_medicos_id` int(11) DEFAULT NULL,
  `datos_empl_es_id` int(11) DEFAULT NULL,
  `Entrevista_id` int(11) DEFAULT NULL,
  `Estado_Solicitud_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleo_estudio`
--

CREATE TABLE `empleo_estudio` (
  `id_datos_empl_es` int(11) NOT NULL,
  `Nombre_Empresa` varchar(50) DEFAULT NULL,
  `Direccion` text,
  `Telefono` varchar(10) DEFAULT NULL,
  `Estudia_Actualmente` varchar(20) DEFAULT NULL,
  `Estudios` varchar(20) DEFAULT NULL,
  `Institucion` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleo_estudio`
--

INSERT INTO `empleo_estudio` (`id_datos_empl_es`, `Nombre_Empresa`, `Direccion`, `Telefono`, `Estudia_Actualmente`, `Estudios`, `Institucion`) VALUES
(1, 'Farmacia Virgen de Guadalupe', 'Centro Comercial Galerias  ', '7526-9632', 'No', 'Técnico en Salud', 'Escuela Técnica para');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrevista`
--

CREATE TABLE `entrevista` (
  `id_entrevista` int(11) NOT NULL,
  `Experiencia_Laboral` text,
  `Caracteristicas_Personales_id` int(11) DEFAULT NULL,
  `Referencia_Laborales` varchar(50) DEFAULT NULL,
  `Conocimiento_Institucional` text,
  `Preguntas_Institucionales_id` int(11) DEFAULT NULL,
  `Referencias_Entrevista_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_solicitud`
--

CREATE TABLE `estado_solicitud` (
  `id_estado` int(11) NOT NULL,
  `Estado` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generales_voluntario`
--

CREATE TABLE `generales_voluntario` (
  `id_datos` int(11) NOT NULL,
  `Primer_Apellido` varchar(50) DEFAULT NULL,
  `Segundo_Apellido` varchar(50) DEFAULT NULL,
  `Nombres` varchar(50) DEFAULT NULL,
  `Sexo_id` int(11) DEFAULT NULL,
  `Lugar_Nacimiento` varchar(50) DEFAULT NULL,
  `Fecha_Nacimiento` date DEFAULT NULL,
  `Edad` int(11) DEFAULT NULL,
  `Nacionalidad` varchar(50) DEFAULT NULL,
  `CarnetM_Partida` varchar(16) DEFAULT NULL,
  `Lugar_Fecha_Expedicion` date DEFAULT NULL,
  `Idiomas_que_domina` varchar(50) DEFAULT NULL,
  `Domicilio` text,
  `Telefono` varchar(50) DEFAULT NULL,
  `Nombre_Padre` varchar(50) DEFAULT NULL,
  `Vive_Padre` varchar(50) DEFAULT NULL,
  `Nombre_Madre` varchar(50) DEFAULT NULL,
  `Vive_Madre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas_institucionales`
--

CREATE TABLE `preguntas_institucionales` (
  `id_pregunta` int(11) NOT NULL,
  `Motivo_Ingresar` text NOT NULL,
  `Expectativas_Institucion` text NOT NULL,
  `Ofrece_Institucion` text NOT NULL,
  `Participacion_Voluntario` text NOT NULL,
  `Beneficio_Institucion` text NOT NULL,
  `Areas_Interes` text NOT NULL,
  `Trabajo_Equipo` text NOT NULL,
  `Disponibilidad_Emergencia` text NOT NULL,
  `Condicion_Salud` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `referencia`
--

CREATE TABLE `referencia` (
  `id_referencia` int(11) NOT NULL,
  `Referencias_Escolares` text,
  `Referencias_Laborales` text,
  `Referencias_Personales` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `referencias_personales`
--

CREATE TABLE `referencias_personales` (
  `id_referencia` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Direccion` text,
  `Telefono` varchar(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_institucion`
--

CREATE TABLE `registro_institucion` (
  `id_registro` int(11) NOT NULL,
  `Seccional_id` int(11) DEFAULT NULL,
  `Tipo_Seccional` int(11) DEFAULT NULL,
  `Detalle_Registro_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccional`
--

CREATE TABLE `seccional` (
  `id_seccional` int(11) NOT NULL,
  `Seccional` varchar(50) DEFAULT NULL,
  `tipo_seccional_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicion_asistenciales`
--

CREATE TABLE `servicion_asistenciales` (
  `id_servicios` int(11) NOT NULL,
  `Tipo_Servicios_Asistenciales` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sexo`
--

CREATE TABLE `sexo` (
  `id_sexo` int(11) NOT NULL,
  `Sexo` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_enfermedades`
--

CREATE TABLE `tipo_enfermedades` (
  `id_enfermedades` int(11) NOT NULL,
  `enfermedades` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_seccional`
--

CREATE TABLE `tipo_seccional` (
  `id_tipo_seccional` int(11) NOT NULL,
  `Tipo_Seccional` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cap_recibidas`
--
ALTER TABLE `cap_recibidas`
  ADD PRIMARY KEY (`id_capacitaciones`);

--
-- Indices de la tabla `cargos_responsabilidades`
--
ALTER TABLE `cargos_responsabilidades`
  ADD PRIMARY KEY (`id_cargo`);

--
-- Indices de la tabla `catacteristicas_personales`
--
ALTER TABLE `catacteristicas_personales`
  ADD PRIMARY KEY (`id_caracteristicas`);

--
-- Indices de la tabla `contacto_emergencia`
--
ALTER TABLE `contacto_emergencia`
  ADD PRIMARY KEY (`id_contacto_emergencia`);

--
-- Indices de la tabla `dataca_voluntario`
--
ALTER TABLE `dataca_voluntario`
  ADD PRIMARY KEY (`id_academicos`);

--
-- Indices de la tabla `datos_cruz_roja`
--
ALTER TABLE `datos_cruz_roja`
  ADD PRIMARY KEY (`id_datos_cruz_roja`),
  ADD KEY `Tipo_voluntario_id` (`Tipo_voluntario_id`,`Capacitaciones_Recibidas_id`,`Cargos_Responsabilidades_id`,`Contacto_Emergencia_id`),
  ADD KEY `Capacitaciones_Recibidas_id` (`Capacitaciones_Recibidas_id`),
  ADD KEY `Cargos_Responsabilidades_id` (`Cargos_Responsabilidades_id`),
  ADD KEY `datos_cruz_roja_ibfk_3` (`Contacto_Emergencia_id`);

--
-- Indices de la tabla `datos_medicos`
--
ALTER TABLE `datos_medicos`
  ADD PRIMARY KEY (`id_datos_medicos`),
  ADD KEY `Tipo_Enfermedades_id` (`Tipo_Enfermedades_id`,`Servicios_Asistenciales_id`),
  ADD KEY `Servicios_Asistenciales_id` (`Servicios_Asistenciales_id`);

--
-- Indices de la tabla `datos_personal`
--
ALTER TABLE `datos_personal`
  ADD PRIMARY KEY (`id_datos`);

--
-- Indices de la tabla `detalle_personal`
--
ALTER TABLE `detalle_personal`
  ADD PRIMARY KEY (`id_detalle_personal`),
  ADD KEY `datos_personal_id` (`datos_personal_id`,`datos_cruz_roja_id`),
  ADD KEY `datos_cruz_roja_id` (`datos_cruz_roja_id`);

--
-- Indices de la tabla `detalle_solicitud`
--
ALTER TABLE `detalle_solicitud`
  ADD PRIMARY KEY (`id_detalle`),
  ADD KEY `datos_generales_id` (`datos_generales_id`,`academicos_id`,`referencias_id`,`datos_medicos_id`,`datos_empl_es_id`),
  ADD KEY `Estado_Solicitud_id` (`Estado_Solicitud_id`),
  ADD KEY `Entrevista_id` (`Entrevista_id`),
  ADD KEY `academicos_id` (`academicos_id`),
  ADD KEY `referencias_id` (`referencias_id`),
  ADD KEY `datos_medicos_id` (`datos_medicos_id`),
  ADD KEY `datos_empl_es_id` (`datos_empl_es_id`);

--
-- Indices de la tabla `empleo_estudio`
--
ALTER TABLE `empleo_estudio`
  ADD PRIMARY KEY (`id_datos_empl_es`);

--
-- Indices de la tabla `entrevista`
--
ALTER TABLE `entrevista`
  ADD PRIMARY KEY (`id_entrevista`),
  ADD KEY `Caracteristicas_Personales_id` (`Caracteristicas_Personales_id`,`Preguntas_Institucionales_id`,`Referencias_Entrevista_id`),
  ADD KEY `Preguntas_Institucionales_id` (`Preguntas_Institucionales_id`),
  ADD KEY `Referencias_Entrevista_id` (`Referencias_Entrevista_id`);

--
-- Indices de la tabla `estado_solicitud`
--
ALTER TABLE `estado_solicitud`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `generales_voluntario`
--
ALTER TABLE `generales_voluntario`
  ADD PRIMARY KEY (`id_datos`),
  ADD KEY `Sexo_id` (`Sexo_id`);

--
-- Indices de la tabla `preguntas_institucionales`
--
ALTER TABLE `preguntas_institucionales`
  ADD PRIMARY KEY (`id_pregunta`);

--
-- Indices de la tabla `referencia`
--
ALTER TABLE `referencia`
  ADD PRIMARY KEY (`id_referencia`);

--
-- Indices de la tabla `referencias_personales`
--
ALTER TABLE `referencias_personales`
  ADD PRIMARY KEY (`id_referencia`);

--
-- Indices de la tabla `registro_institucion`
--
ALTER TABLE `registro_institucion`
  ADD PRIMARY KEY (`id_registro`),
  ADD KEY `Seccional_id` (`Seccional_id`,`Tipo_Seccional`,`Detalle_Registro_id`),
  ADD KEY `registro_institucion_ibfk_2` (`Tipo_Seccional`),
  ADD KEY `registro_institucion_ibfk_4` (`Detalle_Registro_id`);

--
-- Indices de la tabla `seccional`
--
ALTER TABLE `seccional`
  ADD PRIMARY KEY (`id_seccional`),
  ADD KEY `tipo_seccional_id` (`tipo_seccional_id`);

--
-- Indices de la tabla `servicion_asistenciales`
--
ALTER TABLE `servicion_asistenciales`
  ADD PRIMARY KEY (`id_servicios`);

--
-- Indices de la tabla `sexo`
--
ALTER TABLE `sexo`
  ADD PRIMARY KEY (`id_sexo`);

--
-- Indices de la tabla `tipo_enfermedades`
--
ALTER TABLE `tipo_enfermedades`
  ADD PRIMARY KEY (`id_enfermedades`);

--
-- Indices de la tabla `tipo_seccional`
--
ALTER TABLE `tipo_seccional`
  ADD PRIMARY KEY (`id_tipo_seccional`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cap_recibidas`
--
ALTER TABLE `cap_recibidas`
  MODIFY `id_capacitaciones` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `cargos_responsabilidades`
--
ALTER TABLE `cargos_responsabilidades`
  MODIFY `id_cargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `catacteristicas_personales`
--
ALTER TABLE `catacteristicas_personales`
  MODIFY `id_caracteristicas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `contacto_emergencia`
--
ALTER TABLE `contacto_emergencia`
  MODIFY `id_contacto_emergencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `dataca_voluntario`
--
ALTER TABLE `dataca_voluntario`
  MODIFY `id_academicos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `datos_cruz_roja`
--
ALTER TABLE `datos_cruz_roja`
  MODIFY `id_datos_cruz_roja` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `datos_medicos`
--
ALTER TABLE `datos_medicos`
  MODIFY `id_datos_medicos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `datos_personal`
--
ALTER TABLE `datos_personal`
  MODIFY `id_datos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_personal`
--
ALTER TABLE `detalle_personal`
  MODIFY `id_detalle_personal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_solicitud`
--
ALTER TABLE `detalle_solicitud`
  MODIFY `id_detalle` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empleo_estudio`
--
ALTER TABLE `empleo_estudio`
  MODIFY `id_datos_empl_es` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `entrevista`
--
ALTER TABLE `entrevista`
  MODIFY `id_entrevista` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estado_solicitud`
--
ALTER TABLE `estado_solicitud`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `generales_voluntario`
--
ALTER TABLE `generales_voluntario`
  MODIFY `id_datos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `preguntas_institucionales`
--
ALTER TABLE `preguntas_institucionales`
  MODIFY `id_pregunta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `referencia`
--
ALTER TABLE `referencia`
  MODIFY `id_referencia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `referencias_personales`
--
ALTER TABLE `referencias_personales`
  MODIFY `id_referencia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `registro_institucion`
--
ALTER TABLE `registro_institucion`
  MODIFY `id_registro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `seccional`
--
ALTER TABLE `seccional`
  MODIFY `id_seccional` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `servicion_asistenciales`
--
ALTER TABLE `servicion_asistenciales`
  MODIFY `id_servicios` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sexo`
--
ALTER TABLE `sexo`
  MODIFY `id_sexo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_enfermedades`
--
ALTER TABLE `tipo_enfermedades`
  MODIFY `id_enfermedades` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_seccional`
--
ALTER TABLE `tipo_seccional`
  MODIFY `id_tipo_seccional` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `datos_cruz_roja`
--
ALTER TABLE `datos_cruz_roja`
  ADD CONSTRAINT `datos_cruz_roja_ibfk_1` FOREIGN KEY (`Capacitaciones_Recibidas_id`) REFERENCES `cap_recibidas` (`id_capacitaciones`),
  ADD CONSTRAINT `datos_cruz_roja_ibfk_2` FOREIGN KEY (`Cargos_Responsabilidades_id`) REFERENCES `cargos_responsabilidades` (`id_cargo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `datos_cruz_roja_ibfk_3` FOREIGN KEY (`Contacto_Emergencia_id`) REFERENCES `contacto_emergencia` (`id_contacto_emergencia`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `datos_medicos`
--
ALTER TABLE `datos_medicos`
  ADD CONSTRAINT `datos_medicos_ibfk_1` FOREIGN KEY (`Servicios_Asistenciales_id`) REFERENCES `servicion_asistenciales` (`id_servicios`),
  ADD CONSTRAINT `datos_medicos_ibfk_2` FOREIGN KEY (`Tipo_Enfermedades_id`) REFERENCES `tipo_enfermedades` (`id_enfermedades`);

--
-- Filtros para la tabla `detalle_personal`
--
ALTER TABLE `detalle_personal`
  ADD CONSTRAINT `detalle_personal_ibfk_1` FOREIGN KEY (`datos_personal_id`) REFERENCES `datos_personal` (`id_datos`),
  ADD CONSTRAINT `detalle_personal_ibfk_2` FOREIGN KEY (`datos_cruz_roja_id`) REFERENCES `datos_cruz_roja` (`id_datos_cruz_roja`);

--
-- Filtros para la tabla `detalle_solicitud`
--
ALTER TABLE `detalle_solicitud`
  ADD CONSTRAINT `detalle_solicitud_ibfk_1` FOREIGN KEY (`datos_generales_id`) REFERENCES `generales_voluntario` (`id_datos`),
  ADD CONSTRAINT `detalle_solicitud_ibfk_2` FOREIGN KEY (`academicos_id`) REFERENCES `dataca_voluntario` (`id_academicos`),
  ADD CONSTRAINT `detalle_solicitud_ibfk_3` FOREIGN KEY (`referencias_id`) REFERENCES `referencias_personales` (`id_referencia`),
  ADD CONSTRAINT `detalle_solicitud_ibfk_4` FOREIGN KEY (`datos_medicos_id`) REFERENCES `datos_medicos` (`id_datos_medicos`),
  ADD CONSTRAINT `detalle_solicitud_ibfk_5` FOREIGN KEY (`datos_empl_es_id`) REFERENCES `empleo_estudio` (`id_datos_empl_es`),
  ADD CONSTRAINT `detalle_solicitud_ibfk_6` FOREIGN KEY (`Estado_Solicitud_id`) REFERENCES `estado_solicitud` (`id_estado`),
  ADD CONSTRAINT `detalle_solicitud_ibfk_7` FOREIGN KEY (`Entrevista_id`) REFERENCES `entrevista` (`id_entrevista`);

--
-- Filtros para la tabla `entrevista`
--
ALTER TABLE `entrevista`
  ADD CONSTRAINT `entrevista_ibfk_1` FOREIGN KEY (`Caracteristicas_Personales_id`) REFERENCES `catacteristicas_personales` (`id_caracteristicas`),
  ADD CONSTRAINT `entrevista_ibfk_2` FOREIGN KEY (`Preguntas_Institucionales_id`) REFERENCES `preguntas_institucionales` (`id_pregunta`),
  ADD CONSTRAINT `entrevista_ibfk_3` FOREIGN KEY (`Referencias_Entrevista_id`) REFERENCES `referencia` (`id_referencia`);

--
-- Filtros para la tabla `registro_institucion`
--
ALTER TABLE `registro_institucion`
  ADD CONSTRAINT `registro_institucion_ibfk_1` FOREIGN KEY (`Seccional_id`) REFERENCES `seccional` (`id_seccional`) ON UPDATE CASCADE,
  ADD CONSTRAINT `registro_institucion_ibfk_2` FOREIGN KEY (`Tipo_Seccional`) REFERENCES `tipo_seccional` (`id_tipo_seccional`) ON UPDATE CASCADE,
  ADD CONSTRAINT `registro_institucion_ibfk_3` FOREIGN KEY (`Detalle_Registro_id`) REFERENCES `detalle_personal` (`id_detalle_personal`) ON UPDATE CASCADE,
  ADD CONSTRAINT `registro_institucion_ibfk_4` FOREIGN KEY (`Detalle_Registro_id`) REFERENCES `detalle_solicitud` (`id_detalle`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
