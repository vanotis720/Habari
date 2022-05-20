<?php

use App\Http\Controllers\AuthController;
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

Route::get('register', [AuthController::class, 'register_form'])->name('register');
Route::post('register', [AuthController::class, 'register'])->name('register.submit');

Route::get('login', [AuthController::class, 'login_form'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('login.submit');

Route::middleware('auth:web')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('home');
});
