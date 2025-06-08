<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro - TuPortafolio</title>
    <link rel="stylesheet" href="/TuPortafolio/public/estilos/estilos.css">
    <script src="/TuPortafolio/public/estilos/tema.js" defer></script>
</head>
<body>
    <header>
        <h1>TuPortafolio</h1>
        <nav>
            <a href="/TuPortafolio/public/inicio">Inicio</a>
            <a href="/TuPortafolio/public/login">Iniciar sesión</a>
        </nav>
    </header>
    <main>
        <h2 class="titulo-registro">Registro de Usuario</h2>
        <form method="POST" class="compacto">
            <div class="campos-compactos">
                <label>Nombre de usuario:<input type="text" name="nombre_usuario" required></label>
                <label>Email:<input type="email" name="email" required></label>
                <label>Contraseña:<input type="password" name="contrasena" required></label>
            </div>
            <button type="submit">Registrarse</button>
        </form>
        <p><?php echo $mensaje; ?></p>
    </main>
    <footer>
        <p>&copy; Gabriel Azócar 2025</p>
    </footer>
</body>
</html>
