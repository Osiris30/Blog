<?php
require_once __DIR__ . '/../../lib/database.php';

class VisitasModel {
    public static function guardarVisita($nombre, $correo, $comentario) {
        $pdo = Database::connect();
        $stmt = $pdo->prepare("INSERT INTO tbl_visitas (nombre, correo, comentario) VALUES (?, ?, ?)");
        return $stmt->execute([$nombre, $correo, $comentario]);
    }
}
?>
