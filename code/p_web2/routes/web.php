<?php
/**
 * ETML
 * Auteur: David Dieperink, Robustiano Lombardo, Alexis Rojas, Stefan Petrovic
 * Date: 18.05.2022
 * Description: Routes du site web
 */

use App\Http\Controllers\AppreciateController;
use App\Models\BookModel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\Auth;

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

Route::get('/bookList', [BookController::class, 'list'])->name('bookList');

Route::post('/bookList', [BookController::class, 'searchBooks']);

Route::post('/userAdd', [UserController::class, 'userAdd']);

Route::post('/userConnect', [UserController::class, 'userConnect']);

Route::middleware([Auth::class])->group(function () {
    Route::get('/logout', [UserController::class, 'userLogout']);
    Route::get('/bookAdd', [BookController::class, 'bookAdd']);
    Route::get('/bookDetails{idBook}', [BookController::class, 'bookDetails']);
    Route::post('/bookDetails{idBook}', [AppreciateController::class, 'addAppreciation']);
    Route::get('/creatorDetails{idUser}', [UserController::class, 'userDetails']);
    Route::post('/calculAverage', [BookController::class, 'calculAverage']);
});

Route::post('/bookCheckAdd', [BookController::class, 'bookCheckAdd']);
