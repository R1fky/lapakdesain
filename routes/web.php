<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\BantuanController;
use App\Http\Controllers\Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('beranda');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('faq', function () {
    return view('faq');
});

Route::get('3danimation', function () {
    return view('job/3danimation');
});

Route::get('bantuan', function() {
    return view('bantuan');
});

Route::get('profile', function () {
    return view('profile');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('beranda');
