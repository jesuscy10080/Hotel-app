<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HabitacionController;


Route::get('/', function () {
    return view('inicio');

});

//1. Ruta para redirigir a otra pagina u otro sitio

Route::get('/admin', function () {
    return view('admin.administrador');

});
//2. Ruta para el uso de ajax, pero solo para cargar archivos especificos
Route::get('/admin/contenido', function () {
    return view('admin.contenido');

});

//3. Ruta para cargar un archivo con registros desde el controlador
Route::get('/admin/habitaciones',[HabitacionController::class, 'index'])->name('admin.habitaciones');


