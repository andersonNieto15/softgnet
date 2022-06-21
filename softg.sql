-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-06-2022 a las 05:47:24
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `softg`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `city`
--

CREATE TABLE `city` (
  `id_city` smallint(6) NOT NULL,
  `city_name` varchar(50) NOT NULL,
  `fk_dpto_name` smallint(6) NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `city`
--

INSERT INTO `city` (`id_city`, `city_name`, `fk_dpto_name`, `active`) VALUES
(1, 'barranquilla', 1, 1),
(2, 'Leticia', 2, 1),
(3, 'Medellín', 3, 1),
(4, 'Arauca', 4, 1),
(5, 'Barranquilla', 5, 1),
(6, 'Cartagena', 6, 1),
(7, 'Tunja', 7, 1),
(8, 'Manizales', 8, 1),
(9, 'Florencia', 9, 1),
(10, 'Yopal', 10, 1),
(11, 'Popayán', 11, 1),
(12, 'Valledupar', 12, 1),
(13, 'Quibdó', 13, 1),
(14, 'Montería', 14, 1),
(15, 'Bogotá', 15, 1),
(16, 'Puerto Inírida', 16, 1),
(17, 'San José del Guaviare', 17, 1),
(18, 'Neiva', 18, 1),
(19, 'Riohacha', 19, 1),
(20, 'Santa Marta', 20, 1),
(21, 'Villavicencio', 21, 1),
(22, 'Pasto', 22, 1),
(23, 'Cúcuta', 23, 1),
(24, 'Mocoa', 24, 1),
(25, 'Armenia', 25, 1),
(26, 'Pereira', 26, 1),
(27, 'San Andrés', 27, 1),
(28, 'Bucaramanga', 28, 1),
(29, 'Sincelejo', 29, 1),
(30, 'Ibagué', 30, 1),
(31, 'Cali', 31, 1),
(32, 'Mitú', 32, 1),
(33, 'Puerto Carreño', 33, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dpto`
--

CREATE TABLE `dpto` (
  `id_dpto` smallint(6) NOT NULL,
  `dpto_name` varchar(50) NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `dpto`
--

INSERT INTO `dpto` (`id_dpto`, `dpto_name`, `active`) VALUES
(1, 'atlantico', 1),
(2, 'Amazonas', 1),
(3, 'Antioquia', 1),
(4, 'Arauca', 1),
(5, 'Atlántico', 1),
(6, 'Bolívar', 1),
(7, 'Boyacá', 1),
(8, 'Caldas', 1),
(9, 'Caquetá', 1),
(10, 'Casanare', 1),
(11, 'Cauca', 1),
(12, 'Cesar', 1),
(13, 'Chocó', 1),
(14, 'Córdoba', 1),
(15, 'Cundinamarca', 1),
(16, 'Guainía', 1),
(17, 'Guaviare', 1),
(18, 'Huila', 1),
(19, 'La Guajira', 1),
(20, 'Magdalena', 1),
(21, 'Meta', 1),
(22, 'Nariño', 1),
(23, 'Norte de Santander', 1),
(24, 'Putumayo', 1),
(25, 'Quindío', 1),
(26, 'Risaralda', 1),
(27, 'San Andrés y Providencia', 1),
(28, 'Santander', 1),
(29, 'Sucre', 1),
(30, 'Tolima', 1),
(31, 'Valle del Cauca', 1),
(32, 'Vaupés', 1),
(33, 'Vichada', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `identification_type`
--

CREATE TABLE `identification_type` (
  `id_tp_id` smallint(6) NOT NULL,
  `tp_name` varchar(30) NOT NULL,
  `active` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `identification_type`
--

INSERT INTO `identification_type` (`id_tp_id`, `tp_name`, `active`) VALUES
(1, 'cedula de ciudadania', 1),
(2, 'pasaporte', 1),
(3, 'cedula extranjeria', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profiles`
--

CREATE TABLE `profiles` (
  `id_profile` bigint(20) NOT NULL,
  `profile_name` varchar(30) NOT NULL,
  `active` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `profiles`
--

INSERT INTO `profiles` (`id_profile`, `profile_name`, `active`) VALUES
(1, 'administrador', 1),
(2, 'driver', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `routes`
--

CREATE TABLE `routes` (
  `id_routes` bigint(20) NOT NULL,
  `description` varchar(800) NOT NULL,
  `fk_driver_id` bigint(20) NOT NULL,
  `fk_vehicle_id` bigint(20) NOT NULL,
  `active` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `routes`
--

INSERT INTO `routes` (`id_routes`, `description`, `fk_driver_id`, `fk_vehicle_id`, `active`) VALUES
(1, 'el vehiculo transportará vacunas contra covid', 1, 1, 2),
(2, 'vehículo con cargamento sensible a temperatura calórica.', 2, 2, 1),
(10, 'Cargamento ligero para rápido envío por carretera principal', 2, 4, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `schedulers`
--

CREATE TABLE `schedulers` (
  `id_scheduler` bigint(20) NOT NULL,
  `fk_route_id` bigint(20) NOT NULL,
  `week_num` int(11) NOT NULL,
  `from_city` smallint(6) NOT NULL,
  `to_city` smallint(6) NOT NULL,
  `active` tinyint(4) NOT NULL,
  `fk_id_creator` bigint(20) NOT NULL,
  `date_assigned` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `schedulers`
--

INSERT INTO `schedulers` (`id_scheduler`, `fk_route_id`, `week_num`, `from_city`, `to_city`, `active`, `fk_id_creator`, `date_assigned`) VALUES
(1, 1, 11, 25, 1, 1, 1, '2022-06-20 10:57:23'),
(22, 1, 200, 3, 1, 1, 1, '2022-06-20 00:00:00'),
(25, 2, 123123, 16, 15, 1, 1, '2022-06-20 18:53:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `system_users`
--

CREATE TABLE `system_users` (
  `id_system_user` bigint(20) NOT NULL,
  `fk_id_user` bigint(20) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL,
  `fk_profile` bigint(20) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `system_users`
--

INSERT INTO `system_users` (`id_system_user`, `fk_id_user`, `user_name`, `password`, `fk_profile`, `active`) VALUES
(1, 3, 'adminadmin', '1234567', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_user` bigint(20) NOT NULL,
  `fk_tp_id` smallint(6) NOT NULL,
  `number_id` int(11) NOT NULL,
  `first_name` varchar(35) NOT NULL,
  `last_name` varchar(35) NOT NULL,
  `city` smallint(6) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` varchar(50) NOT NULL,
  `phone` text NOT NULL,
  `active` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_user`, `fk_tp_id`, `number_id`, `first_name`, `last_name`, `city`, `email`, `address`, `phone`, `active`) VALUES
(1, 1, 1145, 'Jose Luis', 'Perez Sanchez', 1, NULL, 'calle 50', '32132324231', 1),
(2, 1, 4675676, 'Juan Andres', 'Valencia Cardenas', 9, '', 'calle 650', '342332311', 1),
(3, 1, 1123, 'admin admin', 'admin admin', 1, 'admin@gmail.com', 'calle 50', '43243213', 1),
(4, 1, 12345, 'Andrea', 'Suarez', 1, '', 'calle 650', '34234312', 1),
(5, 1, 75765, 'Camilo', 'Juarez', 17, '', 'calle 65', '312312', 1),
(6, 1, 93830, 'Hernan', 'Perez Hidalgo', 26, '', 'calle 650', '3423323', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehicles`
--

CREATE TABLE `vehicles` (
  `id_vehicles` bigint(20) NOT NULL,
  `description` varchar(500) NOT NULL,
  `year` smallint(6) NOT NULL,
  `make` varchar(30) NOT NULL,
  `capacity` smallint(6) NOT NULL,
  `active` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `vehicles`
--

INSERT INTO `vehicles` (`id_vehicles`, `description`, `year`, `make`, `capacity`, `active`) VALUES
(1, 'MAZDA 2 SEDÁN, COLOR ROJO, FULL EQUIPO', 2016, 'HYUNDAY', 5901, 1),
(2, 'RENAULT COLOR ROJO, MAXIMA POTENCIA 1500 CF', 2020, 'RENAULT', 3456, 1),
(4, 'CHEVROLET BEAT, COLOR BLANCO, FULL EQUIPO', 2023, 'CHEVROLET', 1432, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id_city`),
  ADD KEY `fk_dpto_name` (`fk_dpto_name`);

--
-- Indices de la tabla `dpto`
--
ALTER TABLE `dpto`
  ADD PRIMARY KEY (`id_dpto`);

--
-- Indices de la tabla `identification_type`
--
ALTER TABLE `identification_type`
  ADD PRIMARY KEY (`id_tp_id`);

--
-- Indices de la tabla `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id_profile`);

--
-- Indices de la tabla `routes`
--
ALTER TABLE `routes`
  ADD PRIMARY KEY (`id_routes`),
  ADD KEY `fk_driver_id` (`fk_driver_id`),
  ADD KEY `fk_vehicle_id` (`fk_vehicle_id`);

--
-- Indices de la tabla `schedulers`
--
ALTER TABLE `schedulers`
  ADD PRIMARY KEY (`id_scheduler`),
  ADD KEY `fk_route_id` (`fk_route_id`),
  ADD KEY `fk_id_creator` (`fk_id_creator`),
  ADD KEY `from_city` (`from_city`),
  ADD KEY `to_city` (`to_city`),
  ADD KEY `fk_id_creator_2` (`fk_id_creator`);

--
-- Indices de la tabla `system_users`
--
ALTER TABLE `system_users`
  ADD PRIMARY KEY (`id_system_user`),
  ADD KEY `fk_profile` (`fk_profile`),
  ADD KEY `fk_id_user` (`fk_id_user`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `number_id` (`number_id`),
  ADD KEY `fk_tp_id` (`fk_tp_id`),
  ADD KEY `city` (`city`);

--
-- Indices de la tabla `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id_vehicles`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `city`
--
ALTER TABLE `city`
  MODIFY `id_city` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `dpto`
--
ALTER TABLE `dpto`
  MODIFY `id_dpto` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `identification_type`
--
ALTER TABLE `identification_type`
  MODIFY `id_tp_id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id_profile` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `routes`
--
ALTER TABLE `routes`
  MODIFY `id_routes` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `schedulers`
--
ALTER TABLE `schedulers`
  MODIFY `id_scheduler` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `system_users`
--
ALTER TABLE `system_users`
  MODIFY `id_system_user` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_user` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id_vehicles` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`fk_dpto_name`) REFERENCES `dpto` (`id_dpto`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `routes`
--
ALTER TABLE `routes`
  ADD CONSTRAINT `routes_ibfk_1` FOREIGN KEY (`fk_driver_id`) REFERENCES `users` (`id_user`) ON UPDATE CASCADE,
  ADD CONSTRAINT `routes_ibfk_2` FOREIGN KEY (`fk_vehicle_id`) REFERENCES `vehicles` (`id_vehicles`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `schedulers`
--
ALTER TABLE `schedulers`
  ADD CONSTRAINT `schedulers_ibfk_1` FOREIGN KEY (`fk_route_id`) REFERENCES `routes` (`id_routes`) ON UPDATE CASCADE,
  ADD CONSTRAINT `schedulers_ibfk_2` FOREIGN KEY (`from_city`) REFERENCES `city` (`id_city`) ON UPDATE CASCADE,
  ADD CONSTRAINT `schedulers_ibfk_3` FOREIGN KEY (`to_city`) REFERENCES `city` (`id_city`) ON UPDATE CASCADE,
  ADD CONSTRAINT `schedulers_ibfk_4` FOREIGN KEY (`fk_id_creator`) REFERENCES `system_users` (`id_system_user`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `system_users`
--
ALTER TABLE `system_users`
  ADD CONSTRAINT `system_users_ibfk_1` FOREIGN KEY (`fk_id_user`) REFERENCES `users` (`id_user`) ON UPDATE CASCADE,
  ADD CONSTRAINT `system_users_ibfk_2` FOREIGN KEY (`fk_profile`) REFERENCES `profiles` (`id_profile`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`fk_tp_id`) REFERENCES `identification_type` (`id_tp_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`city`) REFERENCES `city` (`id_city`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
