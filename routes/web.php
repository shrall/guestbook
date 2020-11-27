<?php

use App\Http\Controllers\Admin\EventController as AdminEventController;
use App\Http\Controllers\Creator\EventController as CreatorEventController;
use App\Http\Controllers\User\EventController as UserEventController;
use App\Http\Controllers\Api\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PageController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\User\UserController as UserUserController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\ActivationController;

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


Route::resource('event', EventController::class);
Route::get('/', [PageController::class, 'index']);
Route::get('/pages/jadwal', [PageController::class, 'jadwal']);
Route::get('/pages/kontak', [PageController::class, 'kontak']);
Route::get('activate', [ActivationController::class, 'activate'])->name('activate');

Route::group(['middleware' => ['admin'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::resource('event', AdminEventController::class);
    Route::resource('user', UserController::class);
});
Route::group(['middleware' => ['creator'], 'prefix' => 'creator', 'as' => 'creator.'], function () {
    Route::resource('event', CreatorEventController::class);
});
Route::group(['middleware' => ['user'], 'prefix' => 'user', 'as' => 'user.'], function () {
    Route::resource('event', UserEventController::class);
    // Route::resource('user', UserUserController::class);
});

// Route::resource('user', UserController::class)->middleware('admin');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
