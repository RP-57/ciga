<?php

use App\Http\Controllers\SocioController;
use App\Models\Socio;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/socio', [SocioController::class, 'index']);
Route::get('/soci/create', [SocioController::class, 'create']);
Route::post('/soci', [SocioController::class, 'store']);
Route::get('/soci/{socio}', [SocioController::class, 'show']);
Route::get('/soci/{socio}/edit', [SocioController::class, 'edit']);
Route::patch('/soci/{socio}', [SocioController::class, 'update']);
Route::delete('/soci/{socio}', [SocioController::class, 'destroy']);


//Route::resource('soci', SocioController::class);

// Esempio da laraveldaily.com
// Route::get('/ets', function () { 
//     return view('home');
// });

//Route::view('/ciga', 'home')->name('home');
Route::get('/ciga', [HomeController::class, 'index'])->name('home'); 
Route::view('/ciga/contact', 'contact')->name('contact');
Route::view('/ciga/about', 'about')->name('about');
Route::get('/ciga/posts/{post}', [PostController::class, 'show'])->name('post.show');