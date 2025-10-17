<?php
class Dia4Controller {
    public function index() {
        $actividades = [
            [
                "titulo" => "Feria de logros y Comelona de Pupusas.",
                "descripcion" => "Este día se llevo acabo un evento muy bonito e interesante, ya que los estudiantes de ingeniería en sistemas presentaron diversos proyectos. Dicho evento se llevo acabo en la plaza Minerva de la Facultad Multidisciplinaria Orienta (FMO) de la Universidad de El Salvador (UES). El objetivo de este evento es mostrar a la comunidad universitaria y al público en general los 
                logros y avances que los estudiantes han alcanzado en sus proyectos académicos y de investigación.",
                "imagenes" => [
                    "/mvc/public/images/jueves1.jpg",
                     
                      "/mvc/public/images/jueves16.jpg",
                       "/mvc/public/images/jueves17.jpg",

                ],
                "video" => ""
            ],
            [
                "titulo" => "Proyectos Presentados",
                "descripcion" => "Entre los proyectos presentados se encuentran:
- Sistema de Cajero Automático.
- Proyecto Inovador.
- Cajero Automatico C# Bank.
- Innova Rent.
- Sistema de comandas en tiempo real.
- Sistema de gestión de plantillas.
- Implementacion de un sistema de Gestión de procesos para un centro de mecanizado y soldadura.
- El radar de Moise climatológico.
- Parqueo Automático con Arduino y aplicaciones móviles.
- Aplicación de realidad aumentada Juego.
- Tienda en línea ARCore.
- Biblioteca Virtual Cubo.
- Blog de teoria de sistemas.
- Juego de Bingo utilizando web sockets.",
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
                "titulo" => "Ganadores Popularidad",
                "descripcion" => "Grupo ganador por voto popular, bloc de teoria de sistemas.",
                "video" => "/mvc/public/images/ganadorespopularidad.mp4",
                "imagenes" => [
                    "/mvc/public/images/jueves12.jpg",   
                ],
                
            ],
            [
                "titulo" => "Ganadores de la Feria de Logros.",
                "descripcion" => "Los ganadores son: El Radar de Moisés y Biblioteca Virtual Cubo  .",
                "imagenes" => [
                    
                     
                      "/mvc/public/images/ganadores1.jpg",
                       "/mvc/public/images/ganadores2.jpg",

                ],
                "video" => ""
            ],
            [
                "titulo" => "Comelona de Pupusas.",
                "descripcion" => "En la comelona de pupusas, hubieron doce participantes, en dicha competetición fue ganador el Ingeniero Alexander Guandique, ya que se comió dieciseis pupusas, coronandose como el ganador de la comelona de pupusas.",
                "imagenes" => [


                ],
                "video" => "/mvc/public/images/comelonapupusas.mp4"
            ],

            
        ];

        require_once __DIR__ . '/../views/dia4.php';
    }
}
?>
