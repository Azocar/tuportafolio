<?php
// Archivo de rutas para la aplicación TuPortafolio
// Define las rutas y carga el controlador correspondiente

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = str_replace('/TuPortafolio/public', '', $uri); // Ajusta según la carpeta

switch ($uri) {
    case '/':
    case '/inicio':
        require_once __DIR__ . '/../app/controllers/InicioControlador.php';
        $controlador = new InicioControlador();
        $controlador->index();
        break;
    case '/registro':
        require_once __DIR__ . '/../app/controllers/UsuarioControlador.php';
        $controlador = new UsuarioControlador();
        $controlador->registro();
        break;
    case '/login':
        require_once __DIR__ . '/../app/controllers/UsuarioControlador.php';
        $controlador = new UsuarioControlador();
        $controlador->login();
        break;
    case '/logout':
        require_once __DIR__ . '/../app/controllers/UsuarioControlador.php';
        $controlador = new UsuarioControlador();
        $controlador->logout();
        break;
    case '/crear-portafolio':
        require_once __DIR__ . '/../app/controllers/PortafolioControlador.php';
        $controlador = new PortafolioControlador();
        $controlador->crear();
        break;
    case '/editar-portafolio':
        require_once __DIR__ . '/../app/controllers/PortafolioControlador.php';
        $controlador = new PortafolioControlador();
        $controlador->editar();
        break;
    case '/eliminar-portafolio':
        require_once __DIR__ . '/../app/controllers/PortafolioControlador.php';
        $controlador = new PortafolioControlador();
        $controlador->eliminar();
        break;
    default:
        http_response_code(404);
        echo 'Página no encontrada';
        break;
}
