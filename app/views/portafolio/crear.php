<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Portafolio - TuPortafolio</title>
    <link rel="stylesheet" href="/TuPortafolio/public/estilos/estilos.css">
    <script src="/TuPortafolio/public/estilos/tema.js" defer></script>
</head>
<body>
    <header>
        <h1>TuPortafolio</h1>
        <nav>
            <a href="/TuPortafolio/public/inicio">Inicio</a>
            <a href="/TuPortafolio/public/editar-portafolio">Editar Portafolio</a>
            <a href="/TuPortafolio/public/eliminar-portafolio" onclick="return confirm('¿Seguro que deseas eliminar tu portafolio?');">Eliminar Portafolio</a>
            <a href="/TuPortafolio/public/logout">Cerrar sesión</a>
        </nav>
    </header>
    <main>
        <h2 class="titulo-login">Crear Portafolio</h2>
        <?php if(isset($mensaje) && strpos($mensaje, 'Solo puedes tener un portafolio') !== false): ?>
            <p style="color:red;"><strong><?php echo $mensaje; ?></strong></p>
        <?php else: ?>
        <form method="POST" class="compacto">
            <div class="campos-compactos">
                <label>Habilidad:<input type="text" name="habilidad" required></label>
                <label>Sobre mí:<textarea name="sobre_mi" required></textarea></label>
                <label>Experiencia:<textarea name="experiencia" required></textarea></label>
                <label>Proyectos:<textarea name="proyectos" required></textarea></label>
                <label>Educación:<textarea name="educacion" required></textarea></label>
            </div>
            <button type="submit">Guardar</button>
        </form>
        <p><?php echo $mensaje; ?></p>
        <?php endif; ?>
    </main>
    <footer>
        <p>&copy; Gabriel Azócar 2025</p>
    </footer>
</body>
</html>
