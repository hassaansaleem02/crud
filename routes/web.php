<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
})->name('/');


Route::post('/register', [UserController::class, 'register'])->name('register');

Route::get('/r', [UserController::class, 'registerview'])->name('registerview');

Route::get('/show', [UserController::class, 'show'])->name('show');

Route::get('/getupdate', [UserController::class, 'updateview'])->name('updateview');

Route::get('/getdelete', [UserController::class, 'deleteview'])->name('deleteview');

Route::put('/update/{id}', [UserController::class, 'update'])->name('update');

Route::delete('/delete/{id}', [UserController::class, 'destroy'])->name('delete');
