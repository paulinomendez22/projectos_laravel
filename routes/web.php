<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/home', [HomeController::class, 'home']);
Route::get('/vagas', [HomeController::class, 'vagas']);
Route::get('/reservas', [HomeController::class, 'reservas']);
Route::post('/reservas', [HomeController::class, 'criar']);
Route::post('/reserva', [HomeController::class, 'reservar']);
Route::get('/contacto', [HomeController::class, 'contacto']);
Route::get('/tiket', [HomeController::class, 'tiket']);
Route::get('/pdf', [HomeController::class, 'pdf']);
Route::delete('/excluir/{id}', [HomeController::class, 'excluir']);

//Admin
Route::get('admin/grafic', [AdminController::class, 'grafic']);
Route::get('admin/user', [AdminController::class, 'admin']);

/*Route::get('/utilizadores', function () {
    return view('utilizadores.list');
});

Route::get('/utilizadores/create', function () {
    return view('utilizadores.create');
});*/
