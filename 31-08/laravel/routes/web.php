<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

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
    return view('welcome');
});

Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create'); //mostra no html //abre form para add categoria
Route::post('/category/create', [CategoryController::class, 'store'])->name('category.store'); //mostra cód fonte //por post recebe dados e mostra
Route::get('/category/edit/{category}', [CategoryController::class, 'edit'])->name('category.edit'); //cria
Route::put('/category/edit/{category}', [CategoryController::class, 'update'])->name('category.update'); //atualiza
Route::get('/category/destroy/{category}', [CategoryController::class, 'destroy'])->name('category.destroy'); //remove do banco
