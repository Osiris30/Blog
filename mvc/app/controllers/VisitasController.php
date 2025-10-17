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
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $comentario = $_POST['comentario'];

    $visitasModel = new VisitasModel();
    $visitasModel->guardarVisita($nombre, $email, $comentario);

   
    $visitas = $visitasModel->obtenerVisitas();
    require_once __DIR__ . '/../views/form_visita.php';
}

}