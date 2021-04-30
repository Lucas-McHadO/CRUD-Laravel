<?php

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
use App\Http\Controllers\BookController;

Route::get('/', [BookController::class, 'index']);
Route::get('/livros', [BookController::class, 'index']);
Route::post('livros/add',[BookController::class,'store']);
Route::delete('/livros/delete/{id}', [BookController::class,'delete']);
Route::get('livros/{id}/edit',[BookController::class,'edit']);
Route::post('/livros/update/{id}',[BookController::class,'update']);