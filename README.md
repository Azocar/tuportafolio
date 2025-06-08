# TuPortafolio

Sinopsis: la aplicación web “TuPortafolio” V0.1 permite crear portafolios profesionales de manera fácil y dinámica, puedes ver los portafolios de otros profesionales registrados y si necesitas algunas de sus habilidades contactarlos a su correo.

## Instrucciones para configurar el entorno local

1. Instala XAMPP y asegúrate de que Apache y MySQL estén activos.
2. Copia la carpeta del proyecto en `c:/xampp/htdocs/`.
3. Importa la base de datos usando el script `database/crear_bd.sql` desde phpMyAdmin.
4. Accede a la aplicación desde `http://localhost/TuPortafolio/public/`.

## Estructura del Proyecto (MVC)

- `/public/` — Punto de entrada único (`index.php`), recursos públicos (CSS, JS, imágenes)
- `/app/models/` — Modelos PHP para la lógica de base de datos
- `/app/views/` — Vistas HTML/PHP
- `/app/controllers/` — Controladores PHP
- `/config/` — Configuración y rutas
- `/database/` — Script SQL para la base de datos

## Explicación de la estructura MVC

- **Modelo:** Gestiona la conexión y operaciones con la base de datos (clase `BaseDeDatosModelo.php`).
- **Vista:** Archivos HTML/PHP que muestran la interfaz al usuario.
- **Controlador:** Recibe las peticiones del usuario, procesa la lógica y comunica modelo-vista.

## Base de datos SQL

El script para crear la base de datos y tablas se encuentra en `/database/crear_bd.sql`.

## Créditos

Copyright Gabriel Azócar 2025
