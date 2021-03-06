<?php

use App\Http\Controllers\About;
use App\Http\Controllers\Home;
use App\Http\Controllers\Login;
use App\Http\Controllers\Register;
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
// Root/Main/Home Page
Route::get('/', [Home::class, 'index']);

// About Page
Route::get('about', [About::class, 'index']);

// Login Page
Route::get('login', [Login::class, 'index']);

// Register Page
Route::get('register', [Register::class, 'index']);

// Verify Email Page
Route::get('register/verify', [Register::class, 'verify']);

// New Account Page
Route::get('register/new', [Register::class, 'new']);
