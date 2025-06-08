<?php
// Modelo para operaciones CRUD de portafolios
require_once 'BaseDeDatosModelo.php';

class PortafolioModelo extends BaseDeDatosModelo {
    // Crear portafolio
    public function crear($usuario_id, $habilidad, $sobre_mi, $experiencia, $proyectos, $educacion) {
        // Verifica si el usuario ya tiene un portafolio
        $existe = $this->obtenerPorUsuario($usuario_id);
        if ($existe) {
            return false; // No permite crear más de uno
        }
        $sql = "INSERT INTO portafolios (usuario_id, habilidad, sobre_mi, experiencia, proyectos, educacion) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param('isssss', $usuario_id, $habilidad, $sobre_mi, $experiencia, $proyectos, $educacion);
        return $stmt->execute();
    }
    // Leer todos los portafolios
    public function obtenerTodos() {
        $sql = "SELECT p.*, u.nombre_usuario, u.email FROM portafolios p JOIN usuarios u ON p.usuario_id = u.id ORDER BY p.fecha_creacion DESC";
        $resultado = $this->conexion->query($sql);
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }
    // Leer portafolio por usuario
    public function obtenerPorUsuario($usuario_id) {
        $sql = "SELECT * FROM portafolios WHERE usuario_id = ?";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param('i', $usuario_id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }
    // Editar portafolio
    public function editar($id, $habilidad, $sobre_mi, $experiencia, $proyectos, $educacion) {
        $sql = "UPDATE portafolios SET habilidad=?, sobre_mi=?, experiencia=?, proyectos=?, educacion=? WHERE id=?";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param('sssssi', $habilidad, $sobre_mi, $experiencia, $proyectos, $educacion, $id);
        return $stmt->execute();
    }
    // Eliminar portafolio
    public function eliminar($id) {
        $sql = "DELETE FROM portafolios WHERE id=?";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param('i', $id);
        return $stmt->execute();
    }
}
