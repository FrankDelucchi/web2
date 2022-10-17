-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-10-2022 a las 21:14:15
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_tpe_parte1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `categoria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `categoria`) VALUES
(1, 'zapatillas'),
(2, 'camisetas'),
(3, 'shorts'),
(4, 'buzos'),
(5, 'pelotas'),
(8, 'empanadas'),
(9, 'cigarrillos'),
(10, 'tapa de nalga');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id_producto` int(11) NOT NULL,
  `producto` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` double NOT NULL,
  `id_categoria_fk` int(11) NOT NULL,
  `imagen` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id_producto`, `producto`, `descripcion`, `precio`, `id_categoria_fk`, `imagen`) VALUES
(1, 'Nike Lebron Witness V', 'Suela de Caucho Estilo: CQ9380-102 Entresuela de espuma resistente Construcción de lengua y encaje Un talón rígido con gráfico de león moldeado ayuda a contener la parte posterior de tu pie y te mantiene estable. La suela de goma con tracción multidireccional te ayuda a mantener el control. Sube de nivel tu juego con el LeBron Witness 5, un zapato fuerte y ligero que está esculpido para lucir rápido.', 37710, 1, 'https://i.im.ge/2022/10/05/1zLNi4.lebron-witness-5.jpg'),
(2, 'Adidas Dame 8', 'ZAPATILLAS EXCLUSIVAS DE DAMIAN LILLARD HECHAS PARCIALMENTE CON MATERIALES RECICLADOS\r\nLos campeones se hacen en el ring. Damian Lillard trae esa mentalidad a las canchas de básquet. Estas zapatillas exclusivas de Dame y adidas Basketball se inspiran en el amor de Lillard por el boxeo, un amor que cultivó cuando era niño desde fuera del ring y que ha desarrollado mediante rigurosas sesiones de entrenamiento fuera de la temporada. La preparación es clave en los momentos decisivos del partido, y el escudo \"Knockout Champ\" en el talón de estas zapatillas le deja claro al rival que todo el esfuerzo valió la pena.', 32000, 1, 'https://i.im.ge/2022/10/05/1zLWec.adidas-dame-8.jpg'),
(3, 'Under Armor Curry Flow 9', 'Nunca has sentido unos zapatos como estos antes. UA Flow es totalmente sin caucho, lo que los hace ligeros y con un agarre increible. La parte superior UA Warp funciona como mini cinturones de seguridad que te sujetan. Juntos, obtienes control y velocidad de frenado y arranque.', 64999, 1, 'https://i.im.ge/2022/10/05/1zL92h.curry-9.jpg'),
(5, 'Nike Mamba Rage', 'Kobe Bryant jugó con rabia y tenacidad implacable. Zapatillas de baloncesto Nike Mamba Rage para hombre honra su leyenda con emoción e innovación. La construcción de empeine Flyweave proporciona comodidad y apoyo específicos, mientras que su entresuela de espuma Lunarlon y su tracción de microsuela ofrecen un rendimiento inigualable bajo el pie.', 100000, 1, 'https://i.im.ge/2022/10/05/1zLY6m.Nike-Mamba.jpg'),
(6, 'Nike Kyrie 7', 'Kyrie Irving es una fuerza creativa dentro y fuera de la cancha. Necesita sus zapatos para mantenerse al día con su jugada, pero también sincronizarse con su estilo de empujar los límites. Ajustado para la próxima generación de retorno de energía, control y velocidad, el Kyrie 7 ayuda a los jugadores de todos los niveles a aprovechar su primer paso rápido al optimizar el ajuste del calzado, la sensación en la cancha y la capacidad de inclinación.', 79360, 1, 'https://i.im.ge/2022/10/05/1zLmKY.kyrie7.jpg'),
(7, 'Men\'s Los Angeles Lakers Jordan Brand Purple/White', 'No one will be able to rival your die-hard Los Angeles Lakers passion on game day when you\'ve got these fierce team shorts on. These Association Edition Swingman shorts from Jordan Brand will effortlessly communicate to everyone around you that your pride is unmatched. They have outstanding Los Angeles Lakers graphics that will make your team spirit clear from tip-off to the final buzzer. Best of all, these shorts come complete with Nike Dry and Dri-FIT fabric technologies to keep you comfortable all day long.', 20000, 3, 'https://i.im.ge/2022/10/05/1zL6lD.lakers-short.jpg'),
(8, 'Men\'s Los Angeles Lakers Kobe Bryant Mitchell & Ne', 'Through extensive research and attention to detail, Mitchell & Ness Authentics are recreations of the original uniforms worn by the legends of the game. They only use premium fabrics and application as they bring these pieces of history to life. It is an honor to celebrate the history of the game through the uniforms and logos of the icons of sports. Join the celebration with this Los Angeles Lakers Kobe Bryant 2008-09 Hardwood Classics Authentic Jersey.', 25000, 2, 'https://i.im.ge/2022/10/05/1zLj6M.kobe-jersey.jpg'),
(9, 'Youth Chicago Bulls Michael Jordan Mitchell & Ness', 'If your youngster wants to honor the legacy of NBA legend Michael Jordan, this Hardwood Classics Authentic Jersey from Mitchell & Ness is the perfect option. This sleeveless jersey features a stitched tackle twill applique and embroidered NBA logo that resembles what MJ wore during his time with the Chicago Bulls. When they feel that mesh fabric with the famous #23 on the back, they will know the appreciation being shown for one of the greatest basketball players of all time is next to none.', 50000, 2, 'https://i.im.ge/2022/10/05/1zL0p8.jordan-jersey.jpg'),
(10, 'Mens Chicago Bulls Nike White 2019-20 Icon Edition', 'No one will be able to rival your die-hard Chicago Bulls passion on game day when you have got these fierce team shorts on. These electrifying Swingman shorts from Nike will effortlessly communicate to everyone around you that your ardent pride is unmatched. They are built with Dri-FIT technology and Dry fabric to keep you cool and dry by wicking moisture away from your body. You will love watching your beloved Chicago Bulls head toward another victory in these bold shorts!', 18000, 3, 'https://i.im.ge/2022/10/05/1zLLGK.chicago-short.jpg'),
(11, 'Mens Miami Heat Shaquille ONeal Mitchell & Ness Pl', 'In the 75-year history of the NBA, the Miami Heat and Shaquille ONeal have both played a major role. This Mitchell & Ness Hardwood Classics Swingman jersey is the perfect way to celebrate that fact. The throwback aesthetic and platinum design provide you with a sleek piece of Miami Heat gear that allows you to showcase your appreciation for the impact Shaquille ONeal made on the game of basketball.', 45000, 2, 'https://i.im.ge/2022/10/05/1zLbVr.oneal-jersey.jpg'),
(12, 'Mens Miami Heat Mitchell & Ness Black 2005-06 Hard', 'Take a trip down memory lane when you put on these Miami Heat Hardwood Classics Authentic shorts from Mitchell & Ness. They feature old-school Miami Heat graphics and designs that highlight your passion for the team. The mesh fabric and adjustable waistband also help make this pair of vintage shorts comfortable to wear all day.', 18500, 3, 'https://i.im.ge/2022/10/05/1zLA7p.miami-short.jpg'),
(13, 'Mens Boston Celtics Larry Bird Mitchell & Ness Kel', 'For the NBA 75th anniversary, throw it back to one of the stars of the Boston Celtics with this Larry Bird Hardwood Classics Diamond Swingman jersey from Mitchell & Ness. It features faux diamond details for the leagues big milestone and that old-school design Larry Bird used to wear back in the day. This authentic piece of gear is a great way to mesh past and present as you get fired up for game day.', 28000, 2, 'https://i.im.ge/2022/10/05/1zLKDL.bird-jersey.jpg'),
(14, 'Youth Boston Celtics Jordan Brand Black 2019/20 Sw', 'Your young fan will feel like a member of the Boston Celtics in these Statement Edition Swingman shorts from Jordan Brand. The design features an adjustable waistband for the most comfortable fit, authentic Boston Celtics graphics and built-in Dri-FIT technology. Whether they are practicing their skills or watching the game at home, they will stay cool in this pair of mesh shorts.', 10000, 3, 'https://i.im.ge/2022/10/05/1zLVCG.boston-short.jpg'),
(15, 'Mens Denver Nuggets Facundo Campazzo Fanatics Bran', 'Attain the look of your favorite Denver Nuggets player this season with this Facundo Campazzo 2021/22 Fast Break Replica Icon Edition jersey from Fanatics Branded. The detailed graphics give you a game-ready aesthetic while the lightweight feel and tailored fit ensure a comfortable game day experience. This jersey is a must-have for any dedicated Denver Nuggets supporter.', 15000, 2, 'https://i.im.ge/2022/10/05/1zLH6J.campazo-jersey.jpg'),
(16, 'Mens Denver Nuggets Nike Navy 2019/20 Icon Edition', 'Hit the ground running on game day with these impressive Denver Nuggets Swingman shorts from Nike!', 19000, 3, 'https://i.im.ge/2022/10/05/1zLh79.denver-short.jpg'),
(17, 'Mens Houston Rockets Nike Black 2021-2022 Spotligh', 'Confidently show off your Houston Rockets pride in this Spotlight On Court Practice hoodie. With its sleek polyester fabric and Nike Dri-FIT technology, you will keep comfortable and dry all match long. Whether you are sitting courtside or are simply out and about, rep your favorite team in the league in this Houston Rockets pullover.', 22000, 4, 'https://i.im.ge/2022/10/05/1zLiCX.houston-hoodie.jpg'),
(18, 'Mens Minnesota Timberwolves Nike Navy Heritage Ess', 'Designed by Nike, this Heritage Essential hoodie is ready to help you cheer on your Minnesota Timberwolves. It features block lettering of the teams name with a logo across the front. This midweight pullover is perfect for chilly temps as you rep your Minnesota Timberwolves.', 21800, 4, 'https://i.im.ge/2022/10/05/1zLCCP.minnesota-hoodie.jpg'),
(19, 'Jordan Jumpman Air Hoodie', 'Let your boys take flight in the Jordan Jumpman Air Hoodie. Cozy, comfortable, and on brand, this hoodie is soft and smooth on the outside, and fuzzy and warm on the inside. The color-block paneling at the hood, long sleeves, and signature diamond kangaroo pocket blend functionality and fun to give your kids a taste of classy, sporty style. Finishing the whole Jordan look with the Jumpman Air logo and the 23 jersey logo, the Jordan Jumpman Air Hoodie lets your boys rep Michael Jordan culture with pride.', 25000, 4, 'https://i.im.ge/2022/10/05/1zLzSa.buzo-jordan.jpg'),
(20, '23 LA Basketball Sports Fan Wear DT Sweatshirt Hoo', 'High Quality Cotton and Polyester Hoodie. Front Sided Design with Front Pouch. Available in Several Colors. Printed in USA! Sports Novelty Tees, high quality shirt only from Beach Open', 12400, 4, 'https://i.im.ge/2022/10/05/1zLfvx.buzo-lebron.jpg'),
(21, 'NBA KOBE BRYANT MAMBA SNAKE HOODIE', 'Mamba Mentality. Time for action.', 8300, 4, 'https://i.im.ge/2022/10/05/1zLteq.mamba-hoodie.jpg'),
(22, 'Pelota Basket Spalding Beast Nº 7 Cuero Profesiona', 'Balón Spalding BEAST. Diseñada para competiciones de alto calibre para juegos bajo techo. Suave carcasa ofrece una textura más suave y mayor durabilidad. Gestión de humedad avanzada para un mejor agarre. ', 18900, 5, 'https://i.im.ge/2022/10/05/1zLglW.spalding-beast.jpg'),
(23, 'Pelota Basquet Spalding Cuero Tf 1000 Nº 7 Basket', 'Balón Spalding TF-1000 Legacy. Diseñada para competiciones de alto calibre para juegos bajo techo. Suave carcasa ofrece una textura más suave y mayor durabilidad. Gestión de humedad avanzada para un mejor agarre. Surcos profundos permiten un mayor manejo y control del balón. Balón Spalding TF-1000 Legacy, calidad y durabilidad en cada jugada.', 35990, 5, 'https://i.im.ge/2022/10/05/1zL800.spalding-tf.jpg'),
(24, 'Pelota Basquet Wilson Nba Authentic Indoor Outdoor', 'Cuando el alto rendimiento se encuentra con una gran demanda, las experiencias auténticas de la NBA pueden suceder en cualquier momento y en cualquier lugar. El baloncesto Wilson Authentic Indoor / Outdoor está ensamblado con una construcción Ever Bounce y un forro de retención de la inflación diseñado para resistir, al tiempo que brinda un rebote constante y predecible a lo largo del tiempo. Terminado con Pure Feel Cover diseñado para la sensación de nivel profesional.', 19900, 5, 'https://i.im.ge/2022/10/05/1zLRgT.wilson.jpg'),
(25, 'Pelota Basket Molten Gg6x Cuero Basquet', 'FIBA Profesional. GG6X es el modelo con la nueva tecnología X de Molten, actualización del GG6. Se hicieron modificaciones en el tamaño, forma y disposición de los puntos y las líneas, incrementando con esto el área de contacto entre la mano del jugador y la pelota, ayudando a la precisión en el tiro y los pases sin importar de donde se lo agarre.', 36000, 5, 'https://i.im.ge/2022/10/05/1zLEv1.molten-cuero.jpg'),
(26, 'Pelota De Basquet Molten Nº7 Gr7 Fiba Aprov Indoor', 'Especialmente diseñada para ambientes exteriores. Aprobada por FIBA', 12400, 5, 'https://i.im.ge/2022/10/05/1zL32f.molten-outdoor.jpg'),
(94, 'prueba editar', 'prueba editar definitiva', 999999, 3, 'ffffffff'),
(98, 'asdgh', 'el de products anda', 12356, 4, 'sdvcbertans');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(100) NOT NULL,
  `password` varchar(300) NOT NULL,
  `rol` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_usuario`, `nombre_usuario`, `password`, `rol`) VALUES
(1, 'franzket@admin.com', '$2a$12$D/HQvRVPXXsrIwuaJvPExOPgQPizJvxrYKAkQDiueIKklX4Lw98rS', 'administrador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `id_categoria_fk` (`id_categoria_fk`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`id_categoria_fk`) REFERENCES `categorias` (`id_categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
