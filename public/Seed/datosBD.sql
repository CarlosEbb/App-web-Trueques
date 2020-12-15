INSERT INTO `roles` (`id`, `nombre`, `descripcion`, `status`, `created_at`, `updated_at`) VALUES (NULL, 'Administrador', 'Usuario tipo administrador', '1', NULL, NULL);
INSERT INTO `roles` (`id`, `nombre`, `descripcion`, `status`, `created_at`, `updated_at`) VALUES (NULL, 'Cliente', 'Usuario tipo cliente', '1', NULL, NULL);

INSERT INTO `users` (`id`, `name`, `email`, `password`, `avatar`, `rol_id`, `ciudad`, `remember_token`, `status`, `created_at`, `updated_at`) VALUES
(1, 'administrador', 'admin@admin.com', '$2y$10$RGfpQ643xb1.KYiRm5NWoujC3P/3ARhHAb6xJk0da.qAdrFIr.Y4C', NULL, 1, NULL, NULL, 1, '2020-10-27 22:00:00', '2020-10-27 22:00:00'),
(2, 'Cliente', 'cliente@cliente.com', '$2y$10$RGfpQ643xb1.KYiRm5NWoujC3P/3ARhHAb6xJk0da.qAdrFIr.Y4C', NULL, 2, NULL, NULL, 1, '2020-10-27 22:00:00', '2020-10-27 22:00:00');






INSERT INTO `monedas` (`id`, `nombre`, `simbolo`, `created_at`, `updated_at`) VALUES (NULL, 'pesos', '$', NULL, NULL);

INSERT INTO `precios` (`id`, `de`, `hasta`, `moneda_id`, `created_at`, `updated_at`) VALUES (NULL, '0', '10000', '1', NULL, NULL), (NULL, '10000', '20000', '1', NULL, NULL), (NULL, '20000', '40000', '1', NULL, NULL), (NULL, '40000', '60000', '1', NULL, NULL), (NULL, '60000', '100000', '1', NULL, NULL);

INSERT INTO `tipo_anuncio` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES (NULL, 'Venta', 'Artículos dirigidos a la venta, con una compensación monetaria', NULL, NULL), (NULL, 'Trueque', 'Artículo dirigido al cambio, con una compensación de un objeto de interés o de igual valor', NULL, NULL);


INSERT INTO `categorias` (`id`, `nombre`, `descripcion`, `icon`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Vehículos', 'Vehículos', '<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" aria-hidden=\"true\" focusable=\"false\" width=\"4em\" height=\"4em\" style=\"-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);\" preserveAspectRatio=\"xMidYMid meet\" viewBox=\"0 0 1024 1024\"><path d=\"M959 413.4L935.3 372a8 8 0 0 0-10.9-2.9l-50.7 29.6l-78.3-216.2a63.9 63.9 0 0 0-60.9-44.4H301.2c-34.7 0-65.5 22.4-76.2 55.5l-74.6 205.2l-50.8-29.6a8 8 0 0 0-10.9 2.9L65 413.4c-2.2 3.8-.9 8.6 2.9 10.8l60.4 35.2l-14.5 40c-1.2 3.2-1.8 6.6-1.8 10v348.2c0 15.7 11.8 28.4 26.3 28.4h67.6c12.3 0 23-9.3 25.6-22.3l7.7-37.7h545.6l7.7 37.7c2.7 13 13.3 22.3 25.6 22.3h67.6c14.5 0 26.3-12.7 26.3-28.4V509.4c0-3.4-.6-6.8-1.8-10l-14.5-40l60.3-35.2a8 8 0 0 0 3-10.8zM264 621c-22.1 0-40-17.9-40-40s17.9-40 40-40s40 17.9 40 40s-17.9 40-40 40zm388 75c0 4.4-3.6 8-8 8H380c-4.4 0-8-3.6-8-8v-84c0-4.4 3.6-8 8-8h40c4.4 0 8 3.6 8 8v36h168v-36c0-4.4 3.6-8 8-8h40c4.4 0 8 3.6 8 8v84zm108-75c-22.1 0-40-17.9-40-40s17.9-40 40-40s40 17.9 40 40s-17.9 40-40 40zM220 418l72.7-199.9l.5-1.3l.4-1.3c1.1-3.3 4.1-5.5 7.6-5.5h427.6l75.4 208H220z\" fill=\"#626262\"/></svg>', '/uploads/categorias/php8554.tmp.png', '2020-12-01 08:12:12', '2020-12-01 08:12:12'),
(2, 'Propiedades - Inmuebles', 'Propiedades - Inmuebles', '<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" aria-hidden=\"true\" focusable=\"false\" width=\"4em\" height=\"4em\" style=\"-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);\" preserveAspectRatio=\"xMidYMid meet\" viewBox=\"0 0 32 32\"><path d=\"M6 7c-1.645 0-3 1.355-3 3v2.188c-1.156.417-2 1.519-2 2.812v11h2v-2h26v2h2V15c0-1.293-.844-2.395-2-2.813V10c0-1.645-1.355-3-3-3zm0 2h20c.555 0 1 .445 1 1v2.188c-1.156.417-2 1.519-2 2.812v2H7v-2c0-1.293-.844-2.395-2-2.813V10c0-.555.445-1 1-1zm-2 5c.555 0 1 .445 1 1v4h22v-4c0-.555.445-1 1-1c.555 0 1 .445 1 1v7H3v-7c0-.555.445-1 1-1z\" fill=\"#626262\"/></svg>', '/uploads/categorias/phpCE84.tmp.jpg', '2020-12-01 08:12:31', '2020-12-01 08:12:31'),
(3, 'Tecnología', 'Tecnología', '<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" aria-hidden=\"true\" focusable=\"false\" width=\"4em\" height=\"4em\" style=\"-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);\" preserveAspectRatio=\"xMidYMid meet\" viewBox=\"0 0 24 24\"><path d=\"M20 18c1.1 0 1.99-.9 1.99-2L22 5c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2H0c0 1.1.9 2 2 2h20c1.1 0 2-.9 2-2h-4zM5 5h14c.55 0 1 .45 1 1v9c0 .55-.45 1-1 1H5c-.55 0-1-.45-1-1V6c0-.55.45-1 1-1zm7 14c-.55 0-1-.45-1-1s.45-1 1-1s1 .45 1 1s-.45 1-1 1z\" fill=\"#626262\"/></svg>', '/uploads/categorias/php61EB.tmp.png', '2020-12-01 08:13:08', '2020-12-01 08:13:08'),
(4, 'Muebles - Hogar - Jardin', 'Muebles - Hogar - Jardin', '<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" aria-hidden=\"true\" focusable=\"false\" width=\"4em\" height=\"4em\" style=\"-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);\" preserveAspectRatio=\"xMidYMid meet\" viewBox=\"0 0 1024 1024\"><path d=\"M946.5 505L560.1 118.8l-25.9-25.9a31.5 31.5 0 0 0-44.4 0L77.5 505a63.9 63.9 0 0 0-18.8 46c.4 35.2 29.7 63.3 64.9 63.3h42.5V940h691.8V614.3h43.4c17.1 0 33.2-6.7 45.3-18.8a63.6 63.6 0 0 0 18.7-45.3c0-17-6.7-33.1-18.8-45.2zM568 868H456V664h112v204zm217.9-325.7V868H632V640c0-22.1-17.9-40-40-40H432c-22.1 0-40 17.9-40 40v228H238.1V542.3h-96l370-369.7l23.1 23.1L882 542.3h-96.1z\" fill=\"#626262\"/></svg>', '/uploads/categorias/phpA445.tmp.jpg', '2020-12-01 08:13:25', '2020-12-01 08:13:25'),
(5, 'Deportes - Bicicletas', 'Deportes - Bicicletas', '<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" aria-hidden=\"true\" focusable=\"false\" width=\"4em\" height=\"4em\" style=\"-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);\" preserveAspectRatio=\"xMidYMid meet\" viewBox=\"0 0 496 512\"><path d=\"M212.3 10.3c-43.8 6.3-86.2 24.1-122.2 53.8l77.4 77.4c27.8-35.8 43.3-81.2 44.8-131.2zM248 222L405.9 64.1c-42.4-35-93.6-53.5-145.5-56.1c-1.2 63.9-21.5 122.3-58.7 167.7L248 222zM56.1 98.1c-29.7 36-47.5 78.4-53.8 122.2c50-1.5 95.5-17 131.2-44.8L56.1 98.1zm272.2 204.2c45.3-37.1 103.7-57.4 167.7-58.7c-2.6-51.9-21.1-103.1-56.1-145.5L282 256l46.3 46.3zM248 290L90.1 447.9c42.4 34.9 93.6 53.5 145.5 56.1c1.3-64 21.6-122.4 58.7-167.7L248 290zm191.9 123.9c29.7-36 47.5-78.4 53.8-122.2c-50.1 1.6-95.5 17.1-131.2 44.8l77.4 77.4zM167.7 209.7C122.3 246.9 63.9 267.3 0 268.4c2.6 51.9 21.1 103.1 56.1 145.5L214 256l-46.3-46.3zm116 292c43.8-6.3 86.2-24.1 122.2-53.8l-77.4-77.4c-27.7 35.7-43.2 81.2-44.8 131.2z\" fill=\"#626262\"/></svg>', '/uploads/categorias/php19E3.tmp.png', '2020-12-01 08:13:56', '2020-12-01 08:13:56'),
(6, 'Electrodomésticos', 'Electrodomésticos', '<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" aria-hidden=\"true\" focusable=\"false\" width=\"4em\" height=\"4em\" style=\"-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);\" preserveAspectRatio=\"xMidYMid meet\" viewBox=\"0 0 24 24\"><path d=\"M18 2.01L6 2a2 2 0 0 0-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.11-.9-1.99-2-1.99zM18 20H6v-9.02h12V20zm0-11H6V4h12v5zM8 5h2v3H8zm0 7h2v5H8z\" fill=\"#626262\"/></svg>', '/uploads/categorias/php5DB3.tmp.jpg', '2020-12-01 08:14:13', '2020-12-01 08:14:13'),
(7, 'Moda - Belleza', 'Moda - Belleza', '<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" aria-hidden=\"true\" focusable=\"false\" width=\"4em\" height=\"4em\" style=\"-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);\" preserveAspectRatio=\"xMidYMid meet\" viewBox=\"0 0 64 64\"><path d=\"M62 44.867l-2.072-2.074l1.059-1.061l-17.243-17.255l-.718.718l-2.599-2.6l-.694.695l-11.525-11.533l-.842.843l-6.22-6.258C20.388 5.451 18.619 5 15.891 5c-1.569 0-3.332.161-5.099.466c-3.446.594-7.494 1.858-8.524 3.623c-.283.486-.345 1.02-.171 1.505c.062.173.158.34.29.505c.034.047.07.092.113.134l13.115 13.128l-.821.822L26.32 36.715l-.696.696l2.599 2.6l-.718.718L44.75 57.983l1.056-1.059L47.88 59L62 44.867M7.146 9.648c-2.307 0-3.451-.341-3.841-.508c.651-.66 3.226-1.94 7.64-2.703c1.813-.312 3.613-.476 5.207-.476c2.311 0 3.455.341 3.845.506c-.651.661-3.226 1.941-7.641 2.704c-1.813.312-3.616.477-5.21.477m10.471 15.535l10.591-10.599l10.113 10.12l-10.589 10.597l-10.115-10.118m10.83 12.228l11.98-11.989l1.187 1.187l-11.979 11.989l-1.188-1.187m30.069 6.794l.661.662L47.88 56.174l-.662-.662l11.298-11.307\" fill=\"#626262\"/></svg>', '/uploads/categorias/phpBEFF.tmp.png', '2020-12-01 08:14:38', '2020-12-01 08:14:38');


INSERT INTO `sub_categorias` (`id`, `nombre`, `descripcion`, `categoria_id`, `created_at`, `updated_at`) VALUES
(1, 'Carros', NULL, 1, '2020-12-01 02:14:52', '2020-12-01 02:14:52'),
(2, 'Motos', NULL, 1, '2020-12-01 02:14:59', '2020-12-01 02:14:59'),
(3, 'Accesorios para carros', NULL, 1, '2020-12-01 02:15:06', '2020-12-01 02:15:06'),
(4, 'Accesorios para motos', NULL, 1, '2020-12-01 02:15:12', '2020-12-01 02:15:12'),
(5, 'Camiones - Vehículos Comerciales', NULL, 1, '2020-12-01 02:15:17', '2020-12-01 02:15:17'),
(6, 'Barcos - Aviones', NULL, 1, '2020-12-01 02:15:23', '2020-12-01 02:15:23'),
(7, 'Otros Vehículos', NULL, 1, '2020-12-01 02:15:27', '2020-12-01 02:15:27'),
(8, 'Apartamentos - Casas - VENTA', NULL, 2, '2020-12-01 02:15:58', '2020-12-01 02:15:58'),
(9, 'Apartamentos - Casas - ARRIENDO', NULL, 2, '2020-12-01 02:16:04', '2020-12-01 02:16:04'),
(10, 'Alojamiento vacacional - ARRIENDO', NULL, 2, '2020-12-01 02:16:10', '2020-12-01 02:16:10'),
(11, 'Inmuebles comerciales - VENTA', NULL, 2, '2020-12-01 02:16:16', '2020-12-01 02:16:16'),
(12, 'Inmuebles comerciales - ARRIENDO', NULL, 2, '2020-12-01 02:16:21', '2020-12-01 02:16:21'),
(13, 'Lotes - VENTA', NULL, 2, '2020-12-01 02:16:33', '2020-12-01 02:16:33'),
(14, 'VIVIENDA NUEVA', NULL, 2, '2020-12-01 02:16:39', '2020-12-01 02:16:39'),
(15, 'Teléfonos - Celulares', NULL, 3, '2020-12-01 02:16:57', '2020-12-01 02:16:57'),
(16, 'Tablets', NULL, 3, '2020-12-01 02:17:03', '2020-12-01 02:17:03'),
(17, 'Accesorios para celulares', NULL, 3, '2020-12-01 02:17:08', '2020-12-01 02:17:08'),
(18, 'Computadoras de escritorio', NULL, 3, '2020-12-01 02:17:18', '2020-12-01 02:17:18'),
(19, 'Accesorios - Componentes - Otros', NULL, 3, '2020-12-01 02:17:25', '2020-12-01 02:17:25'),
(20, 'Muebles', NULL, 4, '2020-12-01 02:17:43', '2020-12-01 02:17:43'),
(21, 'Almacenes - Oficinas', NULL, 4, '2020-12-01 02:17:51', '2020-12-01 02:17:51'),
(22, 'Decoración', NULL, 4, '2020-12-01 02:17:56', '2020-12-01 02:17:56'),
(23, 'Jardines - Exteriores', NULL, 4, '2020-12-01 02:18:03', '2020-12-01 02:18:03'),
(24, 'Accesorios - Otros', NULL, 4, '2020-12-01 02:18:08', '2020-12-01 02:18:08'),
(25, 'Bricolaje - Mejorar tu casa', NULL, 4, '2020-12-01 02:18:15', '2020-12-01 02:18:15'),
(26, 'Bicicletas - Ciclismo', NULL, 5, '2020-12-01 02:18:29', '2020-12-01 02:18:29'),
(27, 'Gimnasio - Fitness', NULL, 5, '2020-12-01 02:18:35', '2020-12-01 02:18:35'),
(28, 'Fútbol', NULL, 5, '2020-12-01 02:18:40', '2020-12-01 02:18:40'),
(29, 'Otros deportes - Equipos', NULL, 5, '2020-12-01 02:18:48', '2020-12-01 02:18:48'),
(30, 'Cocina', NULL, 6, '2020-12-01 02:19:17', '2020-12-01 02:19:17'),
(31, 'Neveras - Congeladores', NULL, 6, '2020-12-01 02:19:25', '2020-12-01 02:19:25'),
(32, 'Lavadoras - Secadoras', NULL, 6, '2020-12-01 02:19:30', '2020-12-01 02:19:30'),
(33, 'Aires acondicionados - Ventiladores', NULL, 6, '2020-12-01 02:19:38', '2020-12-01 02:19:38'),
(34, 'Calefacción', NULL, 6, '2020-12-01 02:19:44', '2020-12-01 02:19:44'),
(35, 'Otros electrodomésticos', NULL, 6, '2020-12-01 02:19:49', '2020-12-01 02:19:49'),
(36, 'Ropa', NULL, 7, '2020-12-01 02:20:25', '2020-12-01 02:20:25'),
(37, 'Belleza', NULL, 7, '2020-12-01 02:20:31', '2020-12-01 02:20:31'),
(38, 'Zapatos', NULL, 7, '2020-12-01 02:20:41', '2020-12-01 02:20:41'),
(39, 'Accesorios', NULL, 7, '2020-12-01 02:20:59', '2020-12-01 02:20:59');

INSERT INTO `condicion` (`id`, `nombre`, `created_at`, `updated_at`) VALUES (NULL, 'Nuevo', NULL, NULL), (NULL, 'Como nuevo', NULL, NULL), (NULL, 'Bueno', NULL, NULL), (NULL, 'Aceptable', NULL, NULL), (NULL, 'Lo ha dado todo', NULL, NULL);


INSERT INTO `productos` (`id`, `user_id`, `nombre`, `descripcion`, `categoria_id`, `sub_categoria_id`, `tipo_id`, `municipio_id`, `departamento_id`, `precio`, `condicion_id`, `categoria1`, `subCategoria1`, `categoria2`, `subCategoria2`, `categoria3`, `subCategoria3`, `status`, `created_at`, `updated_at`) VALUES
(2, 2, 'Tensiómetro Digital De Muñecaa', 'Excelente calidad garantizadaa', 3, 19, 1, 1, 1, '10000', 4, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2020-10-29 11:20:14', '2020-12-01 08:58:52'),
(5, 2, 'Cuadros Minimalistas Abstractos Modernos', '\"\"DECORA TU HOGAR\"\" CON \"BELLOS CUADROS DECORATIVOS CALIDAD AL MEJOR TRUEQUE\"\"', 4, 25, 1, 1, 2, '20000', 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2020-10-29 11:37:06', '2020-10-29 11:37:06'),
(6, 2, 'Yston Lente Mirror Para Natacion Adulto Ss99', 'LENTE MIRROR PARA NATACIÓN y TAPAOIDOS\r\nMarca: Yston\r\nTalla: Adulto\r\nColor: Aguamarina, Rosado, Azul Rey y Plateado.\r\n- Incluye tapaoidos\r\n- Cristal Mirror (Espejo)', 5, 29, 2, 1, 3, '10000', 3, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2020-10-29 11:40:14', '2020-10-29 11:40:14');



INSERT INTO `fotos` (`id`, `ruta`, `producto_id`, `principal`, `created_at`, `updated_at`) VALUES
(1, '\\uploads\\productos\\phpI4SOqU.webp', 2, 0, '2020-10-29 05:20:14', '2020-10-29 05:20:14'),
(2, '\\uploads\\productos\\php13xDof.webp', 2, 0, '2020-10-29 05:20:14', '2020-10-29 05:20:14'),
(3, '\\uploads\\productos\\phpIcEG8A.webp', 2, 0, '2020-10-29 05:20:14', '2020-10-29 05:20:14'),
(4, '\\uploads\\productos\\phpS38TPW.webp', 2, 0, '2020-10-29 05:20:14', '2020-10-29 05:20:14'),
(18, '\\uploads\\productos\\phpxrShqv.webp', 5, 0, '2020-10-29 05:37:06', '2020-10-29 05:37:06'),
(19, '\\uploads\\productos\\phpconuRT.webp', 5, 0, '2020-10-29 05:37:06', '2020-10-29 05:37:06'),
(20, '\\uploads\\productos\\phpeGovGB.webp', 5, 0, '2020-10-29 05:37:06', '2020-10-29 05:37:06'),
(21, '\\uploads\\productos\\phpV2ku7l.webp', 5, 0, '2020-10-29 05:37:06', '2020-10-29 05:37:06'),
(22, '\\uploads\\productos\\phpK5ZcT4.webp', 5, 0, '2020-10-29 05:37:06', '2020-10-29 05:37:06'),
(23, '\\uploads\\productos\\phpK0qSiQ.webp', 5, 0, '2020-10-29 05:37:06', '2020-10-29 05:37:06'),
(24, '\\uploads\\productos\\php8wgdEA.webp', 5, 0, '2020-10-29 05:37:06', '2020-10-29 05:37:06'),
(25, '\\uploads\\productos\\phpID6rt3.webp', 6, 0, '2020-10-29 05:40:14', '2020-10-29 05:40:14'),
(26, '\\uploads\\productos\\php9iBt1T.webp', 6, 0, '2020-10-29 05:40:14', '2020-10-29 05:40:14'),
(27, '\\uploads\\productos\\php4IJ8jm.webp', 6, 0, '2020-10-29 05:40:14', '2020-10-29 05:40:14'),
(28, '\\uploads\\productos\\php8a9c2e.webp', 6, 0, '2020-10-29 05:40:14', '2020-10-29 05:40:14'),
(29, '\\uploads\\productos\\php4Zoc2I.webp', 6, 0, '2020-10-29 05:40:14', '2020-10-29 05:40:14');

INSERT INTO `comentarios` (`id`, `contenido`, `user_id`, `producto_id`, `created_at`, `updated_at`) VALUES
(1, 'El producto es lo ofrecido y la atención rápida y muy buena, lo recomiendo ampliamente', 1, 2, '2020-12-04 02:00:23', '2020-12-04 02:00:23');

