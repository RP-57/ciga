<?php

use App\Http\Controllers\SocioController;
use App\Models\Socio;
use App\Http\Controllers\ApssocController;
use App\Models\Apssoc;
//Route::resource('soci', SocioController::class);

Route::get('/socio', [SocioController::class, 'index']);
Route::get('/soci/create', [SocioController::class, 'create']);
Route::post('/soci', [SocioController::class, 'store']);
Route::get('/soci/{socio}', [SocioController::class, 'show']);
Route::get('/soci/{socio}/edit', [SocioController::class, 'edit']);
Route::patch('/soci/{socio}', [SocioController::class, 'update']);
Route::delete('/soci/{socio}', [SocioController::class, 'destroy']);

Route::resource('/apssocs', ApssocController::class);


