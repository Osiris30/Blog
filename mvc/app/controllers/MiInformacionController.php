<?php
class MiInformacionController {
    public function index() {
        
        $miInformacion = [
            "nombre" => "Osiris Ivania Andrade Campos",
            "carrera" => "Ingeniería en Sistemas Informáticos",
            "universidad" => "Universidad de El Salvador",
            "correo" => "ac21059@ues.edu.sv",
            "descripcion" => "Este blog ha sido creado para documentar la semana de sistemas 2025.",
            "foto" => "/mvc/public/images/osiris.jpg"
        ];

        require_once __DIR__ . '/../views/Miinformacion.php';
    }
}
?>
