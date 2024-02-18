<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::resource('usuarios',UsuarioController::class);


/*Route::get('/usuarios', [UsuarioController::class, 'index']);
Route::post('/usuariosr', [UsuarioController::class, 'store']);
Route::get('/usuariosbc', [UsuarioController::class, 'comeBack'])->name('usuariosbc');
*/
