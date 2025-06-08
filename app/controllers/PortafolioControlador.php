<?php
// Controlador para crear, editar y eliminar portafolios
require_once __DIR__ . '/../models/PortafolioModelo.php';
session_start();

class PortafolioControlador {
    public function crear() {
        if (!isset($_SESSION['usuario_id'])) {
            header('Location: /TuPortafolio/public/login');
            exit;
        }
        $mensaje = '';
        $modelo = new PortafolioModelo();
        // Verifica si ya tiene portafolio
        $yaTiene = $modelo->obtenerPorUsuario($_SESSION['usuario_id']);
        if ($yaTiene) {
            $mensaje = 'Solo puedes tener un portafolio. Puedes editar o eliminar el existente.';
        } else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $exito = $modelo->crear(
                $_SESSION['usuario_id'],
                $_POST['habilidad'],
                $_POST['sobre_mi'],
                $_POST['experiencia'],
                $_POST['proyectos'],
                $_POST['educacion']
            );
            if ($exito) {
                header('Location: /TuPortafolio/public/inicio');
                exit;
            }
            $mensaje = 'Error al crear portafolio.';
        }
        include __DIR__ . '/../views/portafolio/crear.php';
    }
    public function editar() {
        if (!isset($_SESSION['usuario_id'])) {
            header('Location: /TuPortafolio/public/login');
            exit;
        }
        $modelo = new PortafolioModelo();
        $portafolio = $modelo->obtenerPorUsuario($_SESSION['usuario_id']);
        $mensaje = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $exito = $modelo->editar(
                $portafolio['id'],
                $_POST['habilidad'],
                $_POST['sobre_mi'],
                $_POST['experiencia'],
                $_POST['proyectos'],
                $_POST['educacion']
            );
            if ($exito) {
                header('Location: /TuPortafolio/public/inicio');
                exit;
            }
            $mensaje = 'Error al actualizar.';
        }
        include __DIR__ . '/../views/portafolio/editar.php';
    }
    public function eliminar() {
        if (!isset($_SESSION['usuario_id'])) {
            header('Location: /TuPortafolio/public/login');
            exit;
        }
        $modelo = new PortafolioModelo();
        $portafolio = $modelo->obtenerPorUsuario($_SESSION['usuario_id']);
        if ($portafolio) {
            $modelo->eliminar($portafolio['id']);
        }
        header('Location: /TuPortafolio/public/inicio');
        exit;
    }
}
