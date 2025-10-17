<?php
class Dia5Controller {
    public function index() {
        $actividades = [
            [
                "titulo" => "Bingo",
                "descripcion" => "Este día el evento fue realizado en el Auditorio 1 y se contó con la asistencia de muchos estudiantes que participaron en dicho juego.
                Los pasos para participar fueron:
- Primero escaneamos el codigo QR.
- Teniamos que registrarnos.
- Iniciar Sesión.
- Comprar crédito.
- Comprar cartones.
- Ingresar a la sala",
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
                "imagenes" => [],
                "video" => "/mvc/public/images/primerganador.mp4"
            ],
            [
                "titulo" => "Segunda Ganadora",
                "descripcion" => "La ganadora fue: Angelica Amaya
Premio Audifonos Redmi Buds 6 play.",
                "imagenes" => [],
                "video" => "/mvc/public/images/segundaganadora.mp4"
            ],
            [
                "titulo" => "Tercera Ganadora",
                "descripcion" => "La ganadora fue: Ing. Vanessa Marquez
El premio fue una bocina.",
                "imagenes" => [],
                "video" => "/mvc/public/images/terceraganadora.mp4"
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
            [
                "titulo" => "Dinamicas con premios sorpresa ACOPUS DE R.L.",
                "descripcion" => "Las dinámicas consistieron en:
- Presentar la camisa de sistemas.
- Mostrar un lápicero azul.
- Llevar un zapato de color negro.
- Llegar al frente con un ingeniero.
",
                "imagenes" => [
                    "/mvc/public/images/dinamica.jpg",
                    "/mvc/public/images/dinamica1.jpg",
                    "/mvc/public/images/dinamica2.jpg",
                    "/mvc/public/images/dinamica3.jpg",
                    "/mvc/public/images/dinamica5.jpg",
                    "/mvc/public/images/dinamica6.jpg",

                ],
                "video" => ""
            ],
            [
                "titulo" => "Quinta Ganadora",
                "descripcion" => "La ganadora fue: Ariana Flores
El premio fueron unos audifonos.",
                "imagenes" => [
                    "/mvc/public/images/quintaganadora.jpg",
                ],
                "video" => ""
            ],
            [
                "titulo" => "Sexto Ganador",
                "descripcion" => "
El premio fue: Una batería portatil.",
                "imagenes" => [
                    "/mvc/public/images/sextoganador.jpg",
                ],
                "video" => ""
            ],
            [
                "titulo" => "Septimo ganador",
                "descripcion" => "
El premio fue: Una bocina.",
                "imagenes" => [
                    "/mvc/public/images/sextoganador.jpg",
                ],
                "video" => ""
            ],
            [
                "titulo" => "Entrega de Reconocimientos",
                "descripcion" => "Se le entregarón diplomas a los ganadores de feria de logros 2025.",
                "imagenes" => [
                    "/mvc/public/images/reconocimiento.jpg",
                ],
                "video" => ""
            ],
             [
                "titulo" => "Torneo de Videojuegos",
                "descripcion" => "Este torneo se llevó a cabo en el Computo A y consisitía en batallas de Clash Royale.",
                "imagenes" => [
                    "/mvc/public/images/reconocimiento.jpg",
                ],
                "video" => ""
            ],
            
        ];

        require_once __DIR__ . '/../views/dia5.php';
    }
}
?>
