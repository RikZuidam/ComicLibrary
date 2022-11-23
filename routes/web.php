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

// TODO add a /cart route for cart overview
// also if not logged in make them create an account before buying
// users can still preview their order/price/cart before making the account

// Route::get('/cart', [UserController::class, 'cart'])->name('cart');