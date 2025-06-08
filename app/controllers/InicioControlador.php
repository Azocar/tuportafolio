<?php
// Controlador para la página principal (home)
require_once __DIR__ . '/../models/PortafolioModelo.php';
session_start();

class InicioControlador {
    public function index() {
        $modelo = new PortafolioModelo();
        $portafolios = $modelo->obtenerTodos();
        include __DIR__ . '/../views/inicio/index.php';
    }
}
