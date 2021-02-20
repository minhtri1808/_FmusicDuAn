<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\userController;
use App\Http\Controllers\homeControler;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TrackSingerController;
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

Route::get('/',[homeControler::class, 'index'])->name('home');
Route::get('/admin',[AdminController::class, 'index'])->name('admin');

Route::get('/artistsinger', function () {
    return view('pages/artistsinger');
});
Route::get('/artist', function () {
    return view('pages/artist');
});


Route::get('/TrackSingerController',[TrackSingerController::class, 'index'])->name('TrackSingerController.index');

Route::get('/auth/login',[authController::class, 'login'])->name('auth.login');
Route::post('/auth/login',[authController::class, 'store'])->name('auth.post');

Route::get('/auth/logout',[authController::class, 'logout'])->name('auth.logout');


Route::post('/signup',[userController::class, 'store'])->name('signup.post');
Route::get('/signup',[userController::class, 'index'])->name('signup.index');




