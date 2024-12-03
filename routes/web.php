<?php

use App\Events\CategoryCreated;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\LoginController;

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
    return view('auth.login');
});


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');




Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register')->middleware('auth');
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit')->middleware('auth');
Route::get('/dashboard', [LoginController::class, 'dashboard'])->name('dashboard')->middleware('auth');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');
