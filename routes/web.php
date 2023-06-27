<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlatformController;

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

Route::get('/index', function () {
    return view('layout.index');
});
// Route::get('/', function () {
//     return view('index');
// });

Route::resource('/games', GameController::class)->middleware('auth');
Route::resource('/publishers', PublisherController::class)->middleware('auth');
Route::resource('/categories', CategoryController::class)->middleware('auth');
Route::resource('/platforms', PlatformController::class)->middleware('auth');
Route::get('/login', AuthenticationController::class . '@loginIndex')->name('login');
Route::get('/register', AuthenticationController::class . '@registerIndex');
Route::post('/login', AuthenticationController::class . '@login');
Route::post('/register', AuthenticationController::class . '@register');
Route::get('/logout', AuthenticationController::class . '@logout');
