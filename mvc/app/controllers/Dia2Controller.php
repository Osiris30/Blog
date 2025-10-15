<?php
class Dia2Controller {
    public function index() {
        $actividades = [
            [
                "titulo" => "Taller #1 Toma de decisiones estrategicas basadas en datos",
                "descripcion" => "Enrique Cortez.",
                "imagen" => [
                    "/mvc/public/images/decisiones.jpg",
                    "/mvc/public/images/decisiones1.jpg"

                ],
                "video" => ""
            ],
            [
                "titulo" => "Taller #2 Construyendo un CRUD en minutos ",
                "descripcion" => "Ing. Gabriel Castillo",
                "imagen" => [
                     "/mvc/public/images/crud1.jpg",
                        "/mvc/public/images/crud2.jpg",
                        "/mvc/public/images/crud3.jpg",

                ],
                "video" => ""
            ],
            "titulo" => "Taller #3 IA Multimodal- Creando el futuro visual e inteligente con n8n",
                "descripcion" => "José Salmeron",
                "imagen" => [
                    "/mvc/public/images/multimodal.jpg",
                    "/mvc/public/images/multimodal1.jpg",
                    "/mvc/public/images/multimodal2jpg",

                ],
                "video" => ""

        ];

        require_once __DIR__ . '/../views/dia2.php';
    }
}
?>