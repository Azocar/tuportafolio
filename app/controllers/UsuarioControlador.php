<?php
// Controlador para registro, login y logout de usuarios
require_once __DIR__ . '/../models/UsuarioModelo.php';
session_start();

class UsuarioControlador {
    public function registro() {
        $mensaje = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $modelo = new UsuarioModelo();
            $exito = $modelo->registrar($_POST['nombre_usuario'], $_POST['email'], $_POST['contrasena']);
            if ($exito === true) {
                header('Location: /TuPortafolio/public/login');
                exit;
            } elseif ($exito === 'duplicado') {
                $mensaje = 'El nombre de usuario o correo ya está registrado. Intenta con otros datos.';
            } else {
                $mensaje = 'Error al registrar.';
            }
        }
        include __DIR__ . '/../views/usuario/registro.php';
    }
    public function login() {
        $mensaje = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $modelo = new UsuarioModelo();
            $usuario = $modelo->login($_POST['email'], $_POST['contrasena']);
            if ($usuario) {
                $_SESSION['usuario_id'] = $usuario['id'];
                $_SESSION['nombre_usuario'] = $usuario['nombre_usuario'];
                header('Location: /TuPortafolio/public/inicio');
                exit;
            } else {
                $mensaje = 'Credenciales incorrectas.';
            }
        }
        include __DIR__ . '/../views/usuario/login.php';
    }
    public function logout() {
        session_destroy();
        header('Location: /TuPortafolio/public/login');
        exit;
    }
}
