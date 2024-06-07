<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiciosController; 
use App\Http\Controllers\ContactoController; // Agrega este use statement

Route::view('/','home')->name('home');
Route::view('nosotros','nosotros')->name('nosotros');

Route::get('servicios',[ServiciosController::class, 'index'])->name('servicios'); // Corrige la ruta utilizando el alias de clase
Route::get('servicios/{id}',[ServiciosController::class, 'show'])->name('servicios.show');


Route::view('contacto','contacto')->name('contacto');
Route::post('contacto',[ContactoController::class, 'store']); // Corrige la ruta utilizando el alias de clase

//Route::resource('servicios', Servicios2Controller::class)->only('index','show');
