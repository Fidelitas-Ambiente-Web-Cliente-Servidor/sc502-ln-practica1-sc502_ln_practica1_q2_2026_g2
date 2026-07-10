# SC502 - Tarea 3 MVC | Academia Berk

Proyecto migrado de HTML/JavaScript estático a arquitectura MVC con PHP 8, MySQL, PDO y Docker.

## Ejecución
1. Abra una terminal dentro de esta carpeta.
2. Ejecute `docker compose up --build -d`.
3. Abra `http://localhost:8080`.
4. phpMyAdmin: `http://localhost:8082`.

## Base de datos
- Base: `academia_berk`
- Usuario: `appuser`
- Contraseña: `apppass`
- Puerto desde el equipo: `3307`

## Rutas principales
- Inicio: `index.php?controller=index&action=index`
- Cursos: `index.php?controller=cursos&action=index`
- Profesores: `index.php?controller=profesores&action=index`
- Contacto: `index.php?controller=contacto&action=index`
