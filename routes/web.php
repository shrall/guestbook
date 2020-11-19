<?php

use App\Http\Controllers\Auth\ActivationController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PageController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\UserController;
use App\Listeners\ActivationListener;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [PageController::class, 'index']);
Route::get('/pages/jadwal', [PageController::class, 'jadwal']);
Route::get('/pages/kontak', [PageController::class, 'kontak']);
Route::get('activate', [ActivationController::class, 'activate'])->name('activate');

Route::resource('event', EventController::class);
Route::resource('user', UserController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
