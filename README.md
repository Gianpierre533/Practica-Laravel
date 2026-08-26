# Proyecto Laravel 12 - CRUD de Productos con Autenticación

Sistema básico de gestión de productos (CRUD) desarrollado en Laravel 12, con autenticación de usuarios mediante Laravel Breeze.

## Requisitos previos

- PHP 8.3 o superior
- Composer
- Node.js y npm
- MySQL (o el motor configurado en `.env`)
- Laragon (o cualquier entorno local equivalente)

## Instalación

1. Clonar o descargar el proyecto.

2. Instalar las dependencias de PHP:
```bash
   composer install
```

3. Instalar las dependencias de Node:
```bash
   npm install
```

4. Copiar el archivo de entorno y generar la key de la aplicación:
```bash
   cp .env.example .env
   php artisan key:generate
```

5. Configurar la base de datos en el archivo `.env`:

6. Ejecutar las migraciones:
```bash
   php artisan migrate
```

## Ejecución

1. Compilar los assets (en una terminal, déjala corriendo):
```bash
   npm run dev
```

2. Levantar el servidor (en otra terminal):
```bash
   php artisan serve
```

3. Abrir en el navegador: http://127.0.0.1:8000


## Funcionalidades

- Registro e inicio de sesión de usuarios (Laravel Breeze).
- CRUD completo de productos (crear, listar, editar, eliminar).
- Validación de formularios con mensajes de error.
- Rutas del CRUD protegidas mediante middleware `auth` — solo usuarios autenticados pueden acceder.
- Listado de productos visible también desde el Dashboard.

## Estructura relevante

- `app/Http/Controllers/ProductoController.php` — lógica del CRUD.
- `app/Models/Producto.php` — modelo de productos.
- `resources/views/productos/` — vistas del CRUD (index, create, edit).
- `resources/views/layouts/crud.blade.php` — layout base para las vistas del CRUD.
- `routes/web.php` — rutas de la aplicación.

## Autor

Vasquez Elescano Gianpierre