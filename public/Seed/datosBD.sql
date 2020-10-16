INSERT INTO `users` (`id`, `name`, `email`, `password`, `ciudad`, `remember_token`, `created_at`, `updated_at`) VALUES (NULL, 'Admin', 'admin@admin.com', '$2y$10$RGfpQ643xb1.KYiRm5NWoujC3P/3ARhHAb6xJk0da.qAdrFIr.Y4C', NULL, NULL, NULL, NULL);


INSERT INTO `categorias` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'Celulares y Teléfonos', 'Teléfonos móvil, smartphone', '2020-10-16 07:19:02', '2020-10-16 07:19:02');

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `categoria_id`, `municipio_id`, `departamento_id`, `created_at`, `updated_at`) VALUES
(1, 'Xiaomi redmi 9, smartphone Android', 'Producto Nuevo, se cambia por computadora o cualquier articulo de interés', 1, NULL, NULL, '2020-10-16 07:20:42', '2020-10-16 07:20:42');
