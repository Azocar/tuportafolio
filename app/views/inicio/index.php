<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TuPortafolio - Inicio</title>
    <link rel="stylesheet" href="/TuPortafolio/public/estilos/estilos.css">
    <script src="/TuPortafolio/public/estilos/tema.js" defer></script>
</head>
<body>
    <header>
        <h1>TuPortafolio</h1>
        <nav>
            <?php if(isset($_SESSION['usuario_id'])): ?>
                <span>Bienvenido, <?php echo $_SESSION['nombre_usuario']; ?></span>
                <a href="/TuPortafolio/public/crear-portafolio">Crear Portafolio</a>
                <a href="/TuPortafolio/public/editar-portafolio">Editar Portafolio</a>
                <a href="/TuPortafolio/public/eliminar-portafolio" onclick="return confirm('¿Seguro que deseas eliminar tu portafolio?');">Eliminar Portafolio</a>
                <a href="/TuPortafolio/public/logout">Cerrar sesión</a>
            <?php else: ?>
                <a href="/TuPortafolio/public/login">Iniciar sesión</a>
                <a href="/TuPortafolio/public/registro">Registrarse</a>
            <?php endif; ?>
            <button id="tema-btn">🌙/☀️</button>
        </nav>
    </header>
    <main>
        <h2 class="titulo-portafolios">Portafolios</h2>
        <div class="portafolios-lista compacto">
            <?php foreach($portafolios as $p): ?>
                <div class="portafolio-card compacto">
                    <h3><?php echo htmlspecialchars($p['nombre_usuario']); ?></h3>
                    <p><strong>Email:</strong> <?php echo htmlspecialchars($p['email']); ?></p>
                    <p><strong>Habilidad:</strong> <?php echo htmlspecialchars($p['habilidad']); ?></p>
                    <p><strong>Sobre mí:</strong> <?php echo nl2br(htmlspecialchars($p['sobre_mi'])); ?></p>
                    <p><strong>Experiencia:</strong> <?php echo nl2br(htmlspecialchars($p['experiencia'])); ?></p>
                    <p><strong>Proyectos:</strong> <?php echo nl2br(htmlspecialchars($p['proyectos'])); ?></p>
                    <p><strong>Educación:</strong> <?php echo nl2br(htmlspecialchars($p['educacion'])); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
    <footer>
        <p>&copy; Gabriel Azócar 2025</p>
    </footer>
</body>
</html>
