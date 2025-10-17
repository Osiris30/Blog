<?php
class Dia5Controller {
    public function index() {
        $actividades = [
            [
                "titulo" => "Bingo.",
                "descripcion" => "Este día el evento fue realizado en el Auditorio 1 y se contó con la asistencia de muchos estudiantes que participaron en dicho juego.
                -Primero escaneamos el codigo QR.
                -Registrarse.
                -Iniciar Sesión.
                -Comprar credito.
                -Comprar cartones .
                -Ingresar a la sala",
                "imagenes" => [
                    "/mvc/public/images/viernesbingo.jpg",

                    "/mvc/public/images/bingo.jpg",
                      "/mvc/public/images/bingo1.jpg",
                      
                       
                       

                ],
                "video" => ""
            ],
            [
                "titulo" => "Primer Ganador",
                "descripcion" => "El ganador fue: Kevin Natanael 
                El premio fue: una camisa, gorra, llavero, un set de uñas en acrilico.",
                "imagenes" => [
                    
                ],
                "video" => "/mvc/public/images/primerganador.mp4"
            ],
            [
                "titulo" => "Segunda Ganadora",
                "descripcion" => "La ganadora fue: Angelica Amaya
                Premio Audifonos Redmi Buds 6 play.",
                "video" => "/mvc/public/images/segundaganadora.mp4",
                "imagenes" => [
                      
                ],

                
            ],
            [
                "titulo" => "Tercera Ganadora",
                "descripcion" => "La ganadora fue: Ing. Vanessa Marquez
                El premio fue una bocina.",
                "video" => "/mvc/public/images/terceraganadora.mp4",
                "imagenes" => [
                      
                ],
                
                
            ],
            [
                "titulo" => "Cuarta Ganadora",
                "descripcion" => "Nuevamente la ganadora fue: Ing. Vanessa Marquez
                El premio fue: una gorra, camisa y un set de uñas en gel",
                "imagenes" => [
                    "/mvc/public/images/cuartaganadora.jpg",
                    
                ],
                "video" => ""
            ],
           
            
            
            
        ];

        require_once __DIR__ . '/../views/dia5.php';
    }
}
?>