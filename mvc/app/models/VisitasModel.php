<?php
use lib\Database;

class VisitasModel {
    public static function guardarVisita($nombre, $correo, $comentario) {
        $db = new Database();
        $pdo = $db->getConnection();

        $stmt = $pdo->prepare(
            "INSERT INTO tbl_visitas (nombre, correo, comentario, fecha_visita)
             VALUES (?, ?, ?, ?)"
        );
        $fecha = date('Y-m-d H:i:s');

        return $stmt->execute([$nombre, $correo, $comentario, $fecha]);
    }

    public static function obtenerVisitas() {
        $db = new Database();
        $pdo = $db->getConnection();

        $stmt = $pdo->query("SELECT * FROM tbl_visitas ORDER BY fecha_visita DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

