<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\HabitacionController;
use App\Http\Controllers\ReservacionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('template.inicio');
});

Route::controller(ClienteController::class)->group( function(){
    Route::get('clientes', 'index')->name('clientes.index');
    // Route::get('clientes/create', 'create')->name('clientes.create');
    Route::get('clientes/{cliente}', 'show')->name('clientes.show');
});

Route::controller(HabitacionController::class)->group( function(){
    Route::get('habitaciones', 'index')->name('habitaciones.index');
    // Route::get('habitaciones/create', 'create')->name('habitaciones.create');
    Route::get('habitaciones/{habitacion}', 'show')->name('habitaciones.show');
});

Route::controller(ReservacionController::class)->group( function(){
    Route::get('reservaciones', 'index')->name('reservaciones.index');
    Route::get('reservaciones/crear', 'create')->name('reservaciones.crear');
    Route::post('reservaciones/crear', 'store')->name('reservaciones.crear');
    // Route::get('reservaciones/{reservacion}', 'show')->name('reservaciones.show');
});