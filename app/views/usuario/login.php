<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar sesión - TuPortafolio</title>
    <link rel="stylesheet" href="/TuPortafolio/public/estilos/estilos.css">
    <script src="/TuPortafolio/public/estilos/tema.js" defer></script>
</head>
<body>
    <header>
        <h1>TuPortafolio</h1>
        <nav>
            <a href="/TuPortafolio/public/inicio">Inicio</a>
            <a href="/TuPortafolio/public/registro">Registrarse</a>
        </nav>
    </header>
    <main>
        <h2 class="titulo-login">Iniciar sesión</h2>
        <form method="POST" class="compacto">
            <div class="campos-compactos">
                <label>Email:<input type="email" name="email" required></label>
                <label>Contraseña:<input type="password" name="contrasena" required></label>
            </div>
            <button type="submit">Entrar</button>
        </form>
        <p><?php echo $mensaje; ?></p>
    </main>
    <footer>
        <p>&copy; Gabriel Azócar 2025</p>
    </footer>
</body>
</html>
