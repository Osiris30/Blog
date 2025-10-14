<?php
// Requerir controladores
require_once __DIR__ . '/../app/controllers/HomeController.php';
require_once __DIR__ . '/../app/controllers/Dia1Controller.php';
require_once __DIR__ . '/../app/controllers/VisitasController.php';

// Usar la clase Route
use lib\Route;

// Definir rutas
Route::get('/', ['HomeController', 'index']);
Route::get('/dia1', ['Dia1Controller', 'index']);

Route::get('/visitas', ['VisitasController', 'index']);
Route::post('/visitas/guardar', ['VisitasController', 'guardar']);

// Despachar
Route::dispatch();
?>
