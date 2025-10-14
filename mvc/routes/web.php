<?php

use app\controllers\HomeController;
use lib\Route;

Route::get('/', 'HomeController@index');
Route::get('/dia1', 'Dia1Controller@index');

Route::get('/visitas', 'VisitasController@index');
Route::post('/visitas/guardar', 'VisitasController@guardar');
Route::dispatch();
?>


