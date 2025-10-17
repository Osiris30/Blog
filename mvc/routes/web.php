<?php
use lib\Route;

require_once __DIR__ . '/../app/controllers/HomeController.php';
require_once __DIR__ . '/../app/controllers/Dia1Controller.php';
require_once __DIR__ . '/../app/controllers/Dia2Controller.php';
require_once __DIR__ . '/../app/controllers/Dia3Controller.php';
require_once __DIR__ . '/../app/controllers/Dia4Controller.php';
require_once __DIR__ . '/../app/controllers/Dia5Controller.php';

require_once __DIR__ . '/../app/controllers/MiinformacionController.php';
require_once __DIR__ . '/../app/controllers/VisitasController.php';

Route::get('/', ['HomeController', 'index']);
Route::get('/dia1', ['Dia1Controller', 'index']);
Route::get('/dia2', ['Dia2Controller', 'index']);
Route::get('/dia3', ['Dia3Controller', 'index']);
Route::get('/dia4', ['Dia4Controller', 'index']);
Route::get('/dia5', ['Dia5Controller', 'index']);
Route::get('/Miinformacion', ['MiinformacionController', 'index']);
Route::get('/visitas', ['VisitasController', 'index']);
Route::post('/visitas/guardar', ['VisitasController',  'index']);

Route::dispatch();
?>