<?php
require_once __DIR__ . '/../models/VisitasModel.php';

class VisitasController {

    public function index() {
        // Obtener visitas y pasar a la vista
        $visitas = VisitasModel::obtenerVisitas();
        $success = $_GET['success'] ?? 0;
        require_once __DIR__ . '/../views/form_visita.php';
    }

    public function guardar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'] ?? '';
            $email = $_POST['email'] ?? '';
            $comentario = $_POST['comentario'] ?? '';

            if (VisitasModel::guardarVisita($nombre, $email, $comentario)) {
                header("Location: /mvc/public/visitas?success=1");
                exit;
            } else {
                echo "Error al registrar la visita.";
            }
        } else {
            echo "Método no permitido.";
        }
    }
}