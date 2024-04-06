<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Escolares\AlumnoController;
use App\Http\Controllers\Escolares\PlanEstudioController;

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('/home', [HomeController::class, 'index'])->name('home');

//Grupo de rutas para Escolares
Route::get('/escolares/alumnos', [AlumnoController::class, 'index'])->name('escolaresAlumnos');
Route::get('/escolares/alumnos/alta', [AlumnoController::class, 'altaAlumno'])->name('escolaresAlumnosAlta');
Route::post('/escolares/alumnos/crear', [AlumnoController::class, 'crearAlumno'])->name('escolaresAlumnosCrear');

Route::get('/escolares/planes_estudio', [PlanEstudioController::class, 'index'])->name('escolaresPlanesEstudio');



