<?php

use App\Models\BookModel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
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
Route::get('/', [HomeController::class, 'home']);

Route::get('/userAdd', function () {
    return view('userAdd');
});

Route::get('/creatorDetails{idUser}', [UserController::class, 'userDetails']);

Route::get('/bookList', [BookController::class, 'list']);

Route::post('/bookList', [BookController::class, 'searchBooks']);

Route::get('/bookDetails{idBook}', [BookController::class, 'bookDetails']);

Route::get('/test{idBook}', [BookController::class, 'calculAverage']);

Route::get('/bookAdd', [BookController::class,'bookAdd']);

Route::get('/appreciationAdd', function () {
    return view('appreciationAdd');
});

Route::post('/bookCheckAdd', [BookController::class,'bookCheckAdd']);
