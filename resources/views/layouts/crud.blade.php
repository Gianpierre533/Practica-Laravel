<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistema de Productos')</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background: #f4f4f4; }
        nav { background: #333; padding: 15px; }
        nav a { color: white; text-decoration: none; margin-right: 15px; }
        .container { max-width: 900px; margin: 20px auto; background: white; padding: 20px; border-radius: 6px; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        th, td { padding: 10px; border: 1px solid #ddd; text-align: left; }
        th { background: #eee; }
        .alert-success { background: #d4edda; color: #155724; padding: 10px; border-radius: 4px; margin-bottom: 10px; }
        .alert-error { background: #f8d7da; color: #721c24; padding: 10px; border-radius: 4px; margin-bottom: 10px; }
        .btn { display: inline-block; padding: 6px 12px; background: #333; color: white; text-decoration: none; border-radius: 4px; border: none; cursor: pointer; }
        input { padding: 6px; width: 100%; box-sizing: border-box; margin-bottom: 10px; }
        label { font-weight: bold; }
    </style>
</head>
<body>
    <nav>
        <a href="{{ route('productos.index') }}">Productos</a>
        <a href="{{ route('dashboard') }}">Dashboard</a>
        <form method="POST" action="{{ route('logout') }}" style="display:inline;">
            @csrf
            <button type="submit" style="background:none; border:none; color:white; cursor:pointer;">Cerrar sesión</button>
        </form>
    </nav>

    <div class="container">
        @if (session('success'))
            <div class="alert-success">{{ session('success') }}</div>
        @endif

        @if ($errors->any())
            <div class="alert-error">
                <ul style="margin:0; padding-left: 18px;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @yield('content')
    </div>
</body>
</html>