<?php
class Dia1Controller {
    public function index() {
        $actividades = [
            [
                "titulo" => "Inauguración de la Semana de Sistemas 2025",
                "descripcion" => "Bienvenida con palabras de las autoridades académicas y el comité organizador.",
                "imagen" => "/mvc/public/images/inauguracion.jpg",
                "video" => "/mvc/public/images/inauguracion.mp4"
            ],
            [
                "titulo" => "Taller: Introducción a la Ciberseguridad",
                "descripcion" => "Primer taller técnico impartido por expertos invitados, donde se discutieron buenas prácticas de seguridad informática.",
                "imagen" => "/mvc/public/images/ciberseguridad.jpg",
                "video" => "/mvc/public/images/ciberseguridad.mp4"
            ]
        ];

        require_once __DIR__ . '/../views/dia1.php';
    }
}
?>
