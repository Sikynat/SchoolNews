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

use App\Http\Controllers\NewsController;

Route::get('/', [NewsController::class, 'index']);
Route::get('/news/create', [NewsController::class, 'create'])->middleware('auth');
Route::get('/news/{id}', [NewsController::class, 'show']);
Route::post('/news', [NewsController::class, 'store']);
Route::delete('/news/{id}', [NewsController::class, 'destroy']);

Route::get('/dashboard', [NewsController::class, 'dashboard'])->middleware('auth');

