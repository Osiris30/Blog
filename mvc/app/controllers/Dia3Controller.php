<?php
class Dia3Controller {
    public function index() {
        $actividades = [
            [
                "titulo" => "Torneo de fútbol 11",
                "descripcion" => "",
                "imagenes" => [
                    "/mvc/public/images/comunicado.jpg",
                    "/mvc/public/images/torneo.jpg"
                ],
                "video" => ""
            ],
        ];

        require_once __DIR__ . '/../views/dia3.php';
    }
}
?>
