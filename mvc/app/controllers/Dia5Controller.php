<?php
class Dia5Controller {
    public function index() {
        $actividades = [
            [
                "titulo" => "Bingo.",
                "descripcion" => "Este día el evento fue realizado en el Auditorio 1 y se contó con la asistencia de muchos estudiantes que participaron en dicho juego.",
                "imagenes" => [
                    "/mvc/public/images/jueves1.jpg",
                     
                      "/mvc/public/images/jueves16.jpg",
                       "/mvc/public/images/jueves17.jpg",

                ],
                "video" => ""
            ],
            [
                "titulo" => "Entrega de Premios",
                "descripcion" => "Se le entregó en el reconocimiento a los ganadores, de feria de logros y comelona de pupusas",
                "imagenes" => [
                    "/mvc/public/images/jueves2.jpg",
                    "/mvc/public/images/jueves3.jpg",
                    "/mvc/public/images/jueves4.jpg",
                    "/mvc/public/images/jueves5.jpg",
                    "/mvc/public/images/jueves6.jpg",
                    "/mvc/public/images/jueves7.jpg",
                    "/mvc/public/images/jueves8.jpg",
                    "/mvc/public/images/jueves9.jpg",
                    "/mvc/public/images/jueves10.jpg",
                    "/mvc/public/images/jueves11.jpg",
                    "/mvc/public/images/jueves12.jpg",
                    "/mvc/public/images/jueves13.jpg",
                ],
                "video" => ""
            ],
            [
                "titulo" => "Torneo de videojuego",
                "descripcion" => "Grupo ganador por voto popular, bloc de teoria de sistemas.",
                "video" => "/mvc/public/images/ganadorespopularidad.mp4",
                "imagenes" => [
                    "/mvc/public/images/jueves12.jpg",   
                ],
                
            ],
            
            
        ];

        require_once __DIR__ . '/../views/dia5.php';
    }
}
?>