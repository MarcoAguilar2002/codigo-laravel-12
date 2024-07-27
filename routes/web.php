<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiciosController; 
use App\Http\Controllers\ContactoController; // Agrega este use statement

Route::view('/','home')->name('home');
Route::view('nosotros','nosotros')->name('nosotros');

Route::resource('servicios', ServiciosController::class)->middleware('auth');
/*
Route::get('servicios',[ServiciosController::class,'index'])->name('servicios.index'); 
Route::get('servicios/crear',[ServiciosController::class,'create'])->name('servicios.create');
Route::post('servicios',[ServiciosController::class,'store'])->name('servicios.store');
Route::get('servicios/{id}',[ServiciosController::class,'show'])->name('servicios.show');

Route::get('servicios/{id}/editar',[ServiciosController::class,'edit'])->name('servicios.edit');
Route::patch('servicios/{id}',[ServiciosController::class,'update'])->name('servicios.update');
Route::delete('servicios/{servicio}',[ServiciosController::class,'destroy'])->name('servicios.destroy');
*/

Route::view('contacto','contacto')->name('contacto');
Route::post('contacto',[ContactoController::class, 'store']); 

//Route::resource('servicios', Servicios2Controller::class)->only('index','show');

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


