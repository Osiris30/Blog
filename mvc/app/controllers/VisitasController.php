<?php
require_once __DIR__ . '/../models/VisitasModel.php';

class VisitasController {
    public function index() {
        require_once __DIR__ . '/../views/form_visita.php';
    }

    public function guardar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'] ?? '';
            $email = $_POST['email'] ?? '';
            $comentario = $_POST['comentario'] ?? '';

            if (VisitasModel::guardarVisita($nombre, $email, $comentario)) {
                header("Location: /mvc/public?success=1");
            } else {
                echo " Error al registrar visita.";
            }
        }
    }
}
?>
