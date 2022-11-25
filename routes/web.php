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

Route::get('/', function() {
    return view('home');
});

Route::get('/register', [UserController::class, 'register'])->name('register');

Route::post('/registerSubmit', [UserController::class, 'create']);

Route::get('/login', [UserController::class, 'login'])->name('login');

Route::post('/loginSubmit', [UserController::class, 'read']);

<<<<<<< HEAD
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
=======
Route::get('/logout', [UserController::class, 'logout']);

Route::get("/cart", function(){
    return view("cart");
});
>>>>>>> e726b12a12f495c6367fb7cddb996888c72c8290
