<?php

use App\Http\Controllers\Form\CompraController;
use App\Http\Controllers\Form\MaterialController;
use App\Http\Controllers\Form\PedidosController;
use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {return view('welcome');});

Route::any('pedidos/pesquisar', [PedidosController::class, 'search'])->name('pedidos.search');
Route::resource('/pedidos', PedidosController::class);
Route::resource('/compras', CompraController::class);
