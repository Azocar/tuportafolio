<?php
// Modelo para operaciones de usuario: registro, login, obtención de datos
require_once 'BaseDeDatosModelo.php';

class UsuarioModelo extends BaseDeDatosModelo {
    // Registrar un nuevo usuario
    public function registrar($nombre_usuario, $email, $contrasena) {
        // Verificar si el nombre de usuario o email ya existen
        $sql = "SELECT id FROM usuarios WHERE nombre_usuario = ? OR email = ?";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param('ss', $nombre_usuario, $email);
        $stmt->execute();
        $resultado = $stmt->get_result();
        if ($resultado->num_rows > 0) {
            return 'duplicado';
        }
        $sql = "INSERT INTO usuarios (nombre_usuario, email, contrasena) VALUES (?, ?, ?)";
        $stmt = $this->conexion->prepare($sql);
        $hash = password_hash($contrasena, PASSWORD_DEFAULT);
        $stmt->bind_param('sss', $nombre_usuario, $email, $hash);
        return $stmt->execute() ? true : false;
    }
    // Verificar login
    public function login($email, $contrasena) {
        $sql = "SELECT * FROM usuarios WHERE email = ?";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $resultado = $stmt->get_result();
        $usuario = $resultado->fetch_assoc();
        if ($usuario && password_verify($contrasena, $usuario['contrasena'])) {
            return $usuario;
        }
        return false;
    }
    // Obtener usuario por ID
    public function obtenerPorId($id) {
        $sql = "SELECT * FROM usuarios WHERE id = ?";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param('i', $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }
}
