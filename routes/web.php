<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\HomeController;

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

Route::get('/', function () {
    return redirect('home');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/docs', function (){
    return view('docs');
})->name('docs');

Route::get('/clientes', [ClientesController::class, 'index'])->name('clientes.index');
Route::get('/clientes/criar', [ClientesController::class, 'create'])->name('clientes.create');
Route::post('/clientes/criar', [ClientesController::class, 'store'])->name('clientes.store');
Route::get('/clientes/{id}/editar', [ClientesController::class, 'edit'])->name('clientes.edit');
Route::post('/clientes/{id}/editar', [ClientesController::class, 'update'])->name('clientes.update');
Route::post('/clientes/remover/{id}', [ClientesController::class, 'destroy'])->name('clientes.destroy');


