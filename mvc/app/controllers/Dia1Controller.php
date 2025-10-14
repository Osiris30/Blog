<?php
class Dia1Controller {
    public function index() {
        $actividades = [
            [
                "titulo" => "Inauguración de la Semana de Sistemas 2025",
                "descripcion" => "Bienvenida con palabras de las autoridades académicas y el comité organizador.",
                "imagen" => "/mvc/public/images/.jpg",
                "video" => "/mvc/public/images/.mp4"
            ],
            [
                "titulo" => "Primera Ponencia ",
                "descripcion" => ".",
                "imagen" => "/mvc/public/images/",
                "video" => "/mvc/public/images/"
            ]
        ];

        require_once __DIR__ . '/../views/dia1.php';
    }
}
?>
