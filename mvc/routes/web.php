<?php
use lib\Route;
require_once __DIR__ . '/../app/controllers/HomeController.php';
require_once __DIR__ . '/../app/controllers/Dia1Controller.php';
require_once __DIR__ . '/../app/controllers/Dia2Controller.php';
require_once __DIR__ . '/../app/controllers/VisitasController.php';





Route::get('/', ['HomeController', 'index']);
Route::get('/dia1', ['Dia1Controller', 'index']);
Route::get('/dia2', ['Dia2Controller', 'index']);

Route::get('/visitas', ['VisitasController', 'index']);
Route::post('/visitas/guardar', ['VisitasController', 'guardar']);


Route::dispatch();
?>