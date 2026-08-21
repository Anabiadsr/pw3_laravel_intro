<?php

use App\Http\Controllers\LivroController;
use App\Models\Livro;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::view('/admin', 'admin.dashboard');
Route::view('/landing', 'landing');

Route::get('/livros', [LivroController::class, 'index']);

Route::post('/livros', [LivroController::class, 'store']);