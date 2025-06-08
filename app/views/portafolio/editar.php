<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Portafolio - TuPortafolio</title>
    <link rel="stylesheet" href="/TuPortafolio/public/estilos/estilos.css">
    <script src="/TuPortafolio/public/estilos/tema.js" defer></script>
</head>
<body>
    <header>
        <h1>TuPortafolio</h1>
        <nav>
            <a href="/TuPortafolio/public/inicio">Inicio</a>
            <a href="/TuPortafolio/public/crear-portafolio">Crear Portafolio</a>
            <a href="/TuPortafolio/public/eliminar-portafolio" onclick="return confirm('¿Seguro que deseas eliminar tu portafolio?');">Eliminar Portafolio</a>
            <a href="/TuPortafolio/public/logout">Cerrar sesión</a>
        </nav>
    </header>
    <main>
        <h2>Editar Portafolio</h2>
        <?php if($portafolio): ?>
        <form method="POST" class="compacto">
            <div class="campos-compactos">
                <label>Habilidad:<input type="text" name="habilidad" value="<?php echo htmlspecialchars($portafolio['habilidad']); ?>" required></label>
                <label>Sobre mí:<textarea name="sobre_mi" required><?php echo htmlspecialchars($portafolio['sobre_mi']); ?></textarea></label>
                <label>Experiencia:<textarea name="experiencia" required><?php echo htmlspecialchars($portafolio['experiencia']); ?></textarea></label>
                <label>Proyectos:<textarea name="proyectos" required><?php echo htmlspecialchars($portafolio['proyectos']); ?></textarea></label>
                <label>Educación:<textarea name="educacion" required><?php echo htmlspecialchars($portafolio['educacion']); ?></textarea></label>
            </div>
            <button type="submit">Actualizar</button>
        </form>
        <?php else: ?>
            <p>No tienes portafolio creado aún.</p>
        <?php endif; ?>
        <p><?php echo $mensaje; ?></p>
    </main>
    <footer>
        <p>&copy; Gabriel Azócar 2025</p>
    </footer>
</body>
</html>
