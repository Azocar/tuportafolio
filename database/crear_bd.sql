-- Script para crear la base de datos y tablas de TuPortafolio
CREATE DATABASE IF NOT EXISTS `TuPortafolio-db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `TuPortafolio-db`;

-- Tabla de usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `nombre_usuario` VARCHAR(50) NOT NULL UNIQUE,
  `email` VARCHAR(100) NOT NULL UNIQUE,
  `contrasena` VARCHAR(255) NOT NULL,
  `fecha_registro` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tabla de portafolios
CREATE TABLE IF NOT EXISTS `portafolios` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `usuario_id` INT NOT NULL,
  `habilidad` VARCHAR(255) NOT NULL,
  `sobre_mi` TEXT NOT NULL,
  `experiencia` TEXT NOT NULL,
  `proyectos` TEXT NOT NULL,
  `educacion` TEXT NOT NULL,
  `fecha_creacion` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (`usuario_id`) REFERENCES `usuarios`(`id`) ON DELETE CASCADE
);
