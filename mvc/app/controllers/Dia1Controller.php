<?php
class Dia1Controller {
    public function index() {
        $actividades = [
            [
                "titulo" => "Inauguración de la Semana de Sistemas 2025",
                "descripcion" => "Bienvenida con palabras de las autoridades académicas y el comité organizador.",
                "imagenes" => [],
                "video" => "/mvc/public/images/bienvenida.mp4"
            ],
            [
                "titulo" => "Primera Ponencia - El ABC DEL BITCOIN",
                "descripcion" => "Luis Contreras",
                "imagenes" => [
                    "/mvc/public/images/bitcoin.png",
                    "/mvc/public/images/bitcoin1.jpg",
                    "/mvc/public/images/bitcoin2.jpg",
                    "/mvc/public/images/bitcoin1.jpg",
                    "/mvc/public/images/bitcoin4.jpg",
                    "/mvc/public/images/bitcoin5.jpg",
                    "/mvc/public/images/bitcoin6.jpg",
                    "/mvc/public/images/bitcoin7.jpg",

                ],
                "video" => ""
            ],
            [
                "titulo" => "Segunda Ponencia - Inteligencia Artificial",
                "descripcion" => "Rodrigo Pineda.",
                "imagenes" => [
                    "/mvc/public/images/artificial1.jpg",
                    "/mvc/public/images/artificial2.jpg",
                    "/mvc/public/images/artificial3.jpg",
                    "/mvc/public/images/artificial4.jpg",
                    "/mvc/public/images/artificial5.jpg",
                    "/mvc/public/images/artificial6.jpg",
                    "/mvc/public/images/artificial7.jpg",
                    "/mvc/public/images/artificial8.jpg"
                ],
                "video" => ""
            ],
            [
                "titulo" => "Hackaton",
                "descripcion" => "En el Hackaton participaron 5 equipos. ",
                
                "imagenes" => [
                    "/mvc/public/images/hackaton1.jpg",
                   
                    "/mvc/public/images/hackaton3.jpg",
                    "/mvc/public/images/hackaton4.jpg",
                    
                    "/mvc/public/images/hackaton7.jpg",
                    
                ],
                "video" => ""
            ],
            

        ];

        require_once __DIR__ . '/../views/dia1.php';
    }
}
?>
