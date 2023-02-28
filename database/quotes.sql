-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 27-02-2023 a las 14:45:14
-- Versión del servidor: 5.7.39
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Crud-Laravel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quotes`
--

CREATE TABLE `quotes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prhase` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `quotes`
--

INSERT INTO `quotes` (`id`, `prhase`, `author`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Esperar duele. Olvidar duele. Pero el peor de los sufrimientos es no saber qué decisión tomar.', 'Paulo Coelho', 'https://images.pexels.com/photos/15315961/pexels-photo-15315961.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2', NULL, NULL),
(2, 'La vida es una obra de teatro que no permite ensayos... Por eso, canta, ríe, baila, llora y vive intensamente cada momento de tu vida... Antes que el telón baje y la obra termine sin aplausos.', 'Charles Chaplin', 'https://images.pexels.com/photos/2227959/pexels-photo-2227959.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2', NULL, NULL),
(3, 'No duermas para descansar, duerme para soñar. Porque los sueños están para cumplirse.', 'Walt Disney', 'https://images.pexels.com/photos/42415/pexels-photo-42415.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2', NULL, NULL),
(4, 'Abre tus ojos, mira dentro. ¿Estás satisfecho con la vida que estás viviendo?', 'Bob Marley', 'https://images.pexels.com/photos/15315315/pexels-photo-15315315.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2', NULL, NULL),
(5, 'Nuestros sueños pueden convertirse en realidad si los deseamos tanto como para ir tras ellos.', 'Walt Disney', 'https://images.pexels.com/photos/255379/pexels-photo-255379.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2', NULL, NULL),
(6, 'Vive como si fueras a morir mañana. Aprende como si fueras a vivir siempre.', 'Mahatma Gandhi', 'https://images.pexels.com/photos/164636/pexels-photo-164636.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2', NULL, NULL),
(7, 'Tanto si piensas que puedes, como si piensas que no puedes, estás en lo cierto.', 'Henry Ford', 'https://images.pexels.com/photos/13371882/pexels-photo-13371882.jpeg?auto=compress&cs=tinysrgb&w=1600\r\n', NULL, NULL),
(21, 'El odio no disminuye con el odio. El odio disminuye con el amor.', 'Buda', 'https://images.pexels.com/photos/5592403/pexels-photo-5592403.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2', NULL, NULL),
(22, 'Cuando me amé de verdad, comprendí que en cualquier circunstancia, yo estaba en el lugar correcto y en el momento preciso. Y, entonces, pude relajarme. Hoy sé que eso tiene nombre: autoestima', 'Charles Chaplin', 'https://images.pexels.com/photos/5874593/pexels-photo-5874593.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2', NULL, NULL),
(23, 'Muchos de nuestros sueños parecen al principio imposibles, luego pueden parecer improbables, y luego, cuando nos comprometemos firmemente, se vuelven inevitables.', 'Christopher Reeve', 'https://images.pexels.com/photos/9584947/pexels-photo-9584947.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2', NULL, NULL),
(24, 'Así que yo les digo: pidan, y se les dará; busquen, y encontrarán; llamen, y se les abrirá la puerta. Porque todo aquel que pide, recibe; y el que busca, encuentra; y al que llama, se le abrirá.', 'Jesus Cristo', 'https://images.pexels.com/photos/844297/pexels-photo-844297.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2\r\n', NULL, NULL),
(25, 'Solo existen dos días en el año en que no se puede hacer nada. Uno se llama ayer y otro mañana. Por lo tanto hoy es el dia ideal para amar, crecer, hacer y principalmente vivir.', 'Dalai Lama', 'https://images.pexels.com/photos/15286/pexels-photo.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2', NULL, NULL),
(26, ' La vida es corta, por eso ámala, se feliz y siempre sonríe, solo vive intensamente. Antes de hablar, escucha. Antes de escribir, piensa. Antes de herir, siente. Antes de rendirte, intenta. Antes de morir, vive.', 'Willian Shakespeare', 'https://images.pexels.com/photos/189532/pexels-photo-189532.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2', NULL, NULL),
(27, 'Ten siempre presente que la piel se arruga, que el cabello se vuelve blanco, que los días se convierten en años, pero lo más importante no cambia. Tu fuerza interior.', 'Teresa de Calcuta', 'https://images.pexels.com/photos/165505/pexels-photo-165505.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2', NULL, NULL),
(28, 'Si algo no está bien, no basta con ignorarlo y prometer que ya se arreglará más tarde. Eso es lo que hacen otras compañías.', 'Steve Jobs', 'https://images.pexels.com/photos/10827984/pexels-photo-10827984.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2', NULL, NULL),
(29, 'Nunca un fracaso, siempre una lección\r\n\r\n', 'Rihanna', 'https://images.pexels.com/photos/1774986/pexels-photo-1774986.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2', NULL, NULL),
(30, 'Dime y lo olvido, enséñame y lo recuerdo, involúcrame y lo aprendo.', 'Benjamin Franklin', 'https://images.pexels.com/photos/301664/pexels-photo-301664.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2', NULL, NULL),
(31, 'No puedo vivir en una isla de prosperidad, cuando estoy rodeado de un mar de miseria.', 'Ayrton Senna', 'https://images.pexels.com/photos/634548/pexels-photo-634548.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2', NULL, NULL),
(32, 'Hay una fuerza motriz más poderosa que el vapor, la electricidad y la energía atómica: la voluntad.\r\n\r\n', 'Albert Einstein', 'https://images.pexels.com/photos/714699/pexels-photo-714699.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2', NULL, NULL),
(33, 'Siempre hemos sentido lo mismo, sólo que lo vemos desde un punto de vista diferente.', 'Bob Dylan', 'https://images.pexels.com/photos/13230277/pexels-photo-13230277.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2', NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
