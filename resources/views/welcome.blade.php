<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Primera practica - ibgroup</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Verdana, sans-serif;
            background-color: #f4f6f9;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .card {
            background: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 500px;
        }
        h1 {
            color: #f53003;
            margin-bottom: 10px;
        }
        p {
            color: #666;
            line-height: 1.6;
        }
        .badge {
            display: inline-block;
            background-color: #1b1b18;
            color: white;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 14px;
            margin-top: 15px;
        }
        .actions {
            margin-top: 25px;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
            margin: 0 6px;
        }
        .btn-primary {
            background-color: #f53003;
            color: white;
        }
        .btn-secondary {
            background-color: white;
            color: #f53003;
            border: 2px solid #f53003;
        }
    </style>
</head>
<body>

    <div class="card">
        <h1>¡Hola, Gianpierre!</h1>
        <p>Has configurado con éxito tu entorno de desarrollo y completado la primera parte del Día 1 de la guía intensiva de Laravel 12.</p>
        <div class="badge">Prácticas - Semana Intensiva 🚀</div>

        <div class="actions">
            @auth
                <a href="{{ route('dashboard') }}" class="btn btn-primary">Ir al Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="btn btn-primary">Iniciar sesión</a>
                <a href="{{ route('register') }}" class="btn btn-secondary">Registrarse</a>
            @endauth
        </div>
    </div>

</body>
</html>