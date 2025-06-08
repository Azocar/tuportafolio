<?php
// Modelo para la conexión a la base de datos MySQL usando mysqli
// Comenta todo en español
class BaseDeDatosModelo {
    // Datos de conexión para XAMPP
    private $host = 'localhost';
    private $usuario = 'root';
    private $contrasena = '';
    private $base_de_datos = 'TuPortafolio-db';
    public $conexion;

    // Constructor: realiza la conexión
    public function __construct() {
        $this->conexion = new mysqli($this->host, $this->usuario, $this->contrasena, $this->base_de_datos);
        if ($this->conexion->connect_error) {
            die('Error de conexión a la base de datos: ' . $this->conexion->connect_error);
        }
        $this->conexion->set_charset('utf8mb4');
    }

    // Cierra la conexión
    public function cerrar() {
        $this->conexion->close();
    }
}
