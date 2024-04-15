<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;

Route::get('/', function () {
    return view('contacto');
});

Route::get('/contacto', [ContactoController::class, 'showForm'])->name('contacto.formulario');
Route::post('contacto/enviar', [ContactoController::class, 'enviarFormulario'])->name('contacto.enviar');
Route::get('/mensaje-enviado', function(){
    return view('mensaje_enviado');
})->name('mensaje_enviado');